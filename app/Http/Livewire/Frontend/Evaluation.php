<?php

    namespace App\Http\Livewire\Frontend;

    use App\Http\Controllers\Admin\QuestionController;
    use App\Mail\EvaluationResult;
    use App\Models\CandidateCourse;
    use App\Models\CandidateEvaluation;
    use App\Models\Question;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Mail;
    use Livewire\Component;
    use function PHPUnit\Framework\countOf;

    class Evaluation extends Component {

        public $mcqs = [];
        public $input
            = [
                'mcqs'      => [],
                'listening' => []
            ];
        public $modal = true;

        /**
         * Get the view / contents that represent the component.
         *
         * @return \Illuminate\View\View|string
         */
        public function mount()
        {
            $this->mcqs      = Question::with('answers')->limit(50)->inRandomOrder()->get();
            $length          = count($this->mcqs);
            $input_structure = [];
            for($i = 0; $i < $length; $i++) {
                $single            = [
                    'id'                 => $i,
                    'question_id'        => $this->mcqs[$i]->id,
                    'question_statement' => $this->mcqs[$i]->question,
                    'answers'            => $this->mcqs[$i]->answers,
                    'selected'           => ''
                ];
                $input_structure[] = $single;
            }
            $this->input['mcqs'] = $input_structure;
        }

        public function dumpResult()
        {
            $score = 0;
            foreach($this->input['mcqs'] as $mcq) {
                $answer = json_decode($mcq['selected']);
                if(isset($answer) && $answer->correct) {
                    $score += 1;
                }
            }
            $course               = CandidateCourse::where('user_id', Auth::id())->latest()->first();
            $candidate_evaluation = CandidateEvaluation::create([
                                                                    'user_id'                    => Auth::id(),
                                                                    'candidate_course_id'        => $course->id,
                                                                    'candidate_evaluation_input' => json_encode($this->input),
                                                                    'candidate_evaluation_score' => $score
                                                                ]);

            Mail::to(Auth::user()->email)->send(new EvaluationResult($candidate_evaluation));

            $this->redirectRoute('candidate.personal');
        }

        public function close()
        {
            $this->modal = false;
        }

        public function render()
        {
            return view('livewire.frontend.evaluation');
        }
    }
