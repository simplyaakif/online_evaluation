<?php

namespace App\Http\Livewire\Course;

use App\Models\Course;
use App\Models\SessionDuration;
use App\Models\SessionStartDate;
use App\Models\SessionTime;
use Livewire\Component;

class Edit extends Component
{
    public Course $course;

    public  $course_durations;
    public $session_durations;

    public array $session_time = [];

    public array $listsForFields = [];

    public array $session_duration = [];

    public array $session_start_date = [];

    public function mount(Course $course)
    {
        $this->course             = $course;
        $this->course_durations            = $this->course->sessionDurations;
        $this->session_durations = SessionDuration::all();

        $this->session_duration   = $this->course->sessionDurations()->pluck('id')->toArray();
        $this->session_time       = $this->course->sessionTime()->pluck('id')->toArray();
        $this->session_start_date = $this->course->sessionStartDate()->pluck('id')->toArray();
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.course.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->course->save();
        $this->course->sessionDurations()->sync($this->session_duration);
        $this->course->sessionTime()->sync($this->session_time);
        $this->course->sessionStartDate()->sync($this->session_start_date);

        return redirect()->route('admin.courses.index');
    }

    protected function rules(): array
    {
        return [
            'course.title' => [
                'string',
                'nullable',
            ],
            'course.is_weekly' => [
                'nullable',
            ],
            'session_duration' => [
                'array',
            ],
            'session_duration.*.id' => [
                'integer',
                'exists:session_durations,id',
            ],
            'session_time' => [
                'array',
            ],
            'session_time.*.id' => [
                'integer',
                'exists:session_times,id',
            ],
            'session_start_date' => [
                'array',
            ],
            'session_start_date.*.id' => [
                'integer',
                'exists:session_start_dates,id',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['session_duration']   = SessionDuration::pluck('session_duration', 'id')->toArray();
        $this->listsForFields['session_time']       = SessionTime::pluck('time', 'id')->toArray();
        $this->listsForFields['session_start_date'] = SessionStartDate::pluck('start_date', 'id')->toArray();
    }
}
