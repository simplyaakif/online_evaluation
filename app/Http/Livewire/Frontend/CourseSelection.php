<?php

    namespace App\Http\Livewire\Frontend;

    use App\Models\CandidateCourse;
    use App\Models\Course;
    use App\Models\SessionDuration;
    use App\Models\SessionStartDate;
    use App\Models\SessionTime;
    use Illuminate\Support\Facades\Auth;
    use Livewire\Component;

    class CourseSelection extends Component {

        public $courses;
        public $session_dates;
        public $course_times;
        public $course_durations;
        public $mode;

        public $course;
        public $session_date;
        public $course_time;
        public $course_duration;
        public $campus;

        public $currentCourse = null, $currentDuration = null;

        public $testVariable;

        public $final
            = [
                'course'          => '',
                'course_duration' => '',
                'session_date'    => '',
                'session_time'    => '',
                'mode'            => 'Regular On Campus',
                'campus'=>'Islamabad',
            ];


        public function mount()
        {
            $this->courses          = Course::all();
            $this->session_dates    = collect();
            $this->course_times     = collect();
            $this->course_durations = collect();
        }

        public function updatedCourse($value)
        {
            $simpleCourse           = Course::find($value);
            $selectedCourse         = Course::with('sessionDurations')->findOrFail($value);
            $this->currentCourse    = $selectedCourse;
            $this->session_dates    = $selectedCourse->sessionStartDate;
            $this->course_durations = $selectedCourse->sessionDurations;
            $this->course_times     = $selectedCourse->sessionTime;
            $this->testVariable     = $selectedCourse;
//            $this->course_durations = S
            $this->course_duration = $this->course_durations->first()->id;
            $this->session_date    = $this->session_dates->first()->id;
            $this->course_time     = $this->course_times->first()->id;


            $this->final['course']          = $simpleCourse;
            $this->final['course_duration'] = $this->course_durations->first();
            $this->final['session_date']    = $this->session_dates->first();
            $this->final['session_time']    = $this->course_times->first();
//            $this->final['campus']    =         $this->campus;
        }

        public function updatingCourseDuration($value)
        {
//dd($value);
            $session_duration      = SessionDuration::findOrFail($value);
            $this->currentDuration = $session_duration;
            $course                = Course::with('sessionDurations')->findOrFail($this->currentCourse->id);
//            $this->course_duration=$session_duration->id;
            $session_duration               = $course->sessionDurations()->where('session_duration_id', $value)->first();
            $this->final['course']          = $this->currentCourse;
            $this->final['course_duration'] = $session_duration;

//            dd($this->final['session_time']);
//            $this->final['session_time']=$this->course_times->first();
//            $this->final['session_date']=$this->session_dates->first();

        }

        public function updatedCourseTime($value)
        {
            $time                        = SessionTime::findOrFail($value);
            $this->final['session_time'] = $time;
//            $this->finalUpdate();
//            dd($value,$this->final);
        }

        public function updatedSessionDate($value)
        {
            $date                        = SessionStartDate::findOrFail($value);
            $this->final['session_date'] = $date;
//            $this->finalUpdate();
        }

        public function hydrate()
        {
            if($this->currentDuration != null && $this->currentCourse != null) {
                $this->finalUpdate();
            }

        }

        public function finalUpdate()
        {
            $course                         = Course::with('sessionDurations')->findOrFail($this->currentCourse->id);
            $session_duration
                                            = $course->sessionDurations()->where('session_duration_id', $this->currentDuration->id)->first();
            $this->final['course']          = $this->currentCourse;
            $this->final['course_duration'] = $session_duration;
        }

        public function submit()
        {
//            dd($this->final);
            $candidateCourse = CandidateCourse::create([
                'course_name' => $this->final['course']['title'],
                'course_duration' => $this->final['course_duration']['session_duration'],
                'course_time' => $this->final['session_time']['time'],
                'course_start_date' => $this->final['session_date']['start_date'],
                'course_mode' => $this->final['mode'],
                'course_price' => $this->final['course_duration']['pivot']['price'],
                'user_id' => Auth::user()->id,
                'campus'=>$this->final['campus']
                                                       ]);
            $this->redirectRoute('candidate.evaluation');

        }


        public function render()
        {
            return view('livewire.frontend.course-selection');
        }
    }
