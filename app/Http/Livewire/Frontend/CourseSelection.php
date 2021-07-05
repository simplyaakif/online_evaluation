<?php

    namespace App\Http\Livewire\Frontend;

    use App\Models\Course;
    use App\Models\SessionDuration;
    use Livewire\Component;

    class CourseSelection extends Component {

        public $courses;
        public $session_dates;
        public $course_times;
        public $course_durations;

        public $course;
        public $session_date;
        public $course_time;
        public $course_duration;

        public $currentCourse;

        public $testVariable;

        /**
         * Get the view / contents that represent the component.
         *
         * @return \Illuminate\View\View|string
         */
        public function mount()
        {
            $this->courses         = Course::all();
            $this->session_dates   = collect();
            $this->course_times    = collect();
            $this->course_durations = collect();
        }

        public function updatedCourse($value){
            $selectedCourse = Course::with('sessionDuration')->findOrFail($value);
            $this->currentCourse = $selectedCourse;
            $this->session_dates = $selectedCourse->sessionStartDate;
            $this->course_durations = $selectedCourse->sessionDuration;
            $this->course_times = $selectedCourse->sessionTime;
            $this->testVariable = $selectedCourse;
//            $this->course_durations = S
            $this->course_duration = $this->course_durations->first()->id;
            $this->session_date = $this->session_dates->first()->id;
            $this->course_time = $this->course_times->first()->id;
        }



        public function render()
        {
            return view('livewire.frontend.course-selection');
        }
    }
