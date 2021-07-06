<?php

    namespace App\Http\Livewire\Frontend;

    use App\Models\Course;
    use App\Models\SessionDuration;
    use App\Models\SessionStartDate;
    use App\Models\SessionTime;
    use Livewire\Component;

    class CourseSelection extends Component {

        public $courses;
        public $session_dates;
        public $course_times;
        public $course_durations;

        public  $course;
        public  $session_date;
        public  $course_time;
        public  $course_duration;

        public $currentCourse,$currentDuration;

        public $testVariable;

        public $final = [
            'course'=>'',
            'course_duration'=>'',
            'session_date'=>'',
            'session_time'=>''
        ];


        public function mount()
        {
            $this->courses         = Course::all();
            $this->session_dates   = collect();
            $this->course_times    = collect();
            $this->course_durations = collect();
        }

        public function updatedCourse($value){
            $simpleCourse = Course::find($value);
            $selectedCourse = Course::with('sessionDurations')->findOrFail($value);
            $this->currentCourse = $selectedCourse;
            $this->session_dates = $selectedCourse->sessionStartDate;
            $this->course_durations = $selectedCourse->sessionDurations;
            $this->course_times = $selectedCourse->sessionTime;
            $this->testVariable = $selectedCourse;
//            $this->course_durations = S
            $this->course_duration = $this->course_durations->first()->id;
            $this->session_date = $this->session_dates->first()->id;
            $this->course_time = $this->course_times->first()->id;


            $this->final['course']=$simpleCourse;
            $this->final['course_duration']=$this->course_durations->first();
            $this->final['session_date']=$this->session_dates->first();
            $this->final['session_time']=$this->course_times->first();
        }

        public function updatingCourseDuration($value)
        {
//dd($value);
            $session_duration = SessionDuration::findOrFail($value);
            $this->currentDuration =$session_duration;
            $course = Course::with('sessionDurations')->findOrFail($this->currentCourse->id);
//            $this->course_duration=$session_duration->id;
            $session_duration=$course->sessionDurations()->where('session_duration_id', $value)->first();
            $this->final['course']=$this->currentCourse;
            $this->final['course_duration']=$session_duration;

//            dd($this->final['session_time']);
//            $this->final['session_time']=$this->course_times->first();
//            $this->final['session_date']=$this->session_dates->first();

        }
        public function updatingCourseTime($value){
            $this->finalUpdate();
            $time = SessionTime::findOrFail($value)->first();
            $this->final['session_time']=$time;
        }

        public function updatingSessionDate($value){
            $this->finalUpdate();
            $date = SessionStartDate::findOrFail($value)->first();
            $this->final['session_date']=$date;
        }

        public function finalUpdate()
        {
            $course = Course::with('sessionDurations')->findOrFail($this->currentCourse->id);
            $session_duration=$course->sessionDurations()->where('session_duration_id', $this->currentDuration->id)
                ->first();
            $this->final['course']=$this->currentCourse;
            $this->final['course_duration']=$session_duration;
        }


        public function render()
        {
            return view('livewire.frontend.course-selection');
        }
    }
