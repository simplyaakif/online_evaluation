<?php

    namespace App\Http\Livewire\Course;

    use DB;
    use Livewire\Component;
    use App\Models\Course;

    class Fee extends Component {

        public Course $course;
        public $session_durations;

        public $prices = [];

        public function mount()
        {
            $this->session_durations = $this->course->sessionDurations;
            foreach($this->session_durations as $duration) {
                $this->prices[$duration->id] = $duration->pivot->price;
            }
        }

        public function submit()
        {
//            dd($this->prices);
            foreach($this->session_durations as $duration) {
//            $this->course->sessionDurations()->attach($duration->id,[
//                'price'=>$this->prices[$duration->id]
//            ]);
                DB::table('course_session_duration')
                    ->where('session_duration_id',$duration->id)
                    ->where('course_id',$this->course->id)
                    ->update(['price'=>$this->prices[$duration->id]]);
            }
            $this->redirectRoute('admin.courses.index');
        }


        public function render()
        {
            return view('livewire.course.fee');
        }
    }
