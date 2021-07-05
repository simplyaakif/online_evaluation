<?php

    namespace App\Http\Livewire\Frontend;

    use App\Http\Controllers\Admin\QuestionController;
    use App\Models\Question;
    use Livewire\Component;

    class EvaluationMcqs extends Component {

        public $mcqs=[];
        public $modal = true;
        /**
         * Get the view / contents that represent the component.
         *
         * @return \Illuminate\View\View|string
         */
        public function mount()
        {
            $this->mcqs = Question::with('answers')->limit(15)->inRandomOrder()->get();
        }

        public function close()
        {
            $this->modal=false;
        }
        public function render()
        {
            return view('livewire.frontend.evaluation-mcqs');
        }
    }
