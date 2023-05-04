<?php

    namespace App\Http\Livewire\Frontend;

    use App\Http\Controllers\Admin\QuestionController;
    use App\Mail\EvaluationResult;
    use App\Models\CandidateCourse;
    use App\Models\CandidateEvaluation;
    use App\Models\Question;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Log;
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
//            dd(
//            Auth::user()->candidate->mobile
//
//            );
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

            $this->sendWhatsapp($candidate_evaluation);
            Mail::to(Auth::user()->email)->send(new EvaluationResult($candidate_evaluation));

            $this->redirectRoute('candidate.personal');
        }

        public function sendWhatsapp($candidateEvaluation)
        {
            $url = "http://mywhatsapp.pk/api/send.php";

            $name = Auth::user()->name;
            $score = $candidateEvaluation->candidate_evaluation_score;
            $input = json_decode($candidateEvaluation->candidate_evaluation_input);
            $totalQuestion =count($input->mcqs);

            $message = "*Hi {$name}*
We have received your evaluation for the applied course.
You scored *{$score}/{$totalQuestion}* for the Evaluation.  You are requested to visit our campus for further formalities related to the reservation of seat. You can avail one free trial class. Kindly check your email for further details.
Or contact at 0333-5335792 for more information.";

            $parameters = array("api_key" => "923335335792-2408f945-a42c-4c1a-99c4-1ca59ffa8fa9",
                                "mobile" => Auth::user()->candidate->mobile,
                                "message" => $message,
                                "priority" => "10",
                                "type" => 0
            );

            $ch = curl_init();
            $timeout  =  30;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
            curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
            $response = curl_exec($ch);
            curl_close($ch);

//            echo $response ;
                Log::info($response);
//            dd($response);

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
