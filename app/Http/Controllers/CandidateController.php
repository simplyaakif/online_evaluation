<?php

    namespace App\Http\Controllers;

    use App\Models\Answer;
    use App\Models\Bill;
    use App\Models\Candidate;
    use App\Models\CandidateCourse;
    use App\Models\CandidateEvaluation;
    use App\Models\Question;
    use Illuminate\Support\Facades\Auth;

    class CandidateController extends Controller {

        public function index()
        {
            if(Auth::check()) {
                return redirect()->route('candidate.dashboard');
            }

            return view('candidate.home');
        }

        public function course()
        {
            return view('candidate.course');
        }

        public function dashboard()
        {
            $courses = CandidateCourse::where('user_id', Auth::id())->latest()->get();


            return view('candidate.dashboard', compact('courses'));
        }

        public function personal()
        {
            return view('candidate.personal-information');
        }

        public function evaluation()
        {
            return view('candidate.evaluation-view');
        }

        public function evaluations()
        {
            $candidate   = Candidate::where('user_account_id', Auth::id())->first();
            $evaluations = CandidateEvaluation::where('user_id', Auth::id())->latest()->get();

            return view('candidate.evaluations', compact('candidate', 'evaluations'));
        }

        public function evaluationSingle($id)
        {
            $evaluation       = CandidateEvaluation::findOrFail($id);
            $evaluation_input = json_decode($evaluation->candidate_evaluation_input);
            $mcqs             = $evaluation_input->mcqs;

            return view('candidate.evaluation_single', compact('evaluation', 'mcqs'));
        }

        public function register()
        {
            return view('candidate.register');
        }

        public function invoice()
        {
            $candidate   = Candidate::where('user_account_id', Auth::id())->first();
            $coursesBill = CandidateCourse::where('user_id', Auth::id())->with('invoice')->get();
            $courses     = $coursesBill->filter(function ($course) {
                return $course->invoice == null;
            });

            return view('candidate.invoice', compact('courses', 'candidate'));
        }

        public function invoices()
        {
            $candidate = Candidate::where('user_account_id', Auth::id())->first();
            $bills     = Bill::where('candidate_id', Auth::user()->candidate['id'])->get();

//            dd($bills);
            return view('candidate.invoices', compact('bills', 'candidate'));
        }

        public function summary()
        {
            $candidate = Candidate::where('user_account_id', Auth::id())->first();
            $courses   = CandidateCourse::where('user_id', Auth::id())->get();

            return view('candidate.summary', compact('candidate', 'courses'));
        }

        public function import()
        {

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL            => 'https://quiz.theonlineace.com/expo',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING       => '',
                CURLOPT_MAXREDIRS      => 10,
                CURLOPT_TIMEOUT        => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST  => 'GET',
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_HTTPHEADER     => array(
                    'Cookie: ace_institute_session=eyJpdiI6ImxvMEtzVnZmbGI0cU02YkFJV3VDNmc9PSIsInZhbHVlIjoieHIxRitNQzl1akZUc2JYUzFGRjUzN2VkRitYMDRzT09RdlhCa1ErSHhNS05QM0czZzVXT3hReGZPNGNDN2pcLzgiLCJtYWMiOiI2NWMzNGE5MTBjNzg4ZTU5ZGNhYzhlZWM3Y2E5MTZiMWY4NTMwZjViOTZlYWUxYjhkNGEwMTczYTFiY2U5OTk0In0%3D'
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
//            echo $response;
            $data = json_decode($response);
            foreach($data as $question) {
                $nq = Question::create([
                                           'question'           => $question->question,
                                           'marks'              => 1,
                                           'evaluation_test_id' => 1,
                                       ]);
                foreach($question->answers as $answer) {
                    Answer::create([
                                       'question_id' => $nq->id,
                                       'title'       => $answer->answer,
                                       'correct'     => $answer->correct,
                                       'reason'      => '',
                                   ]);

                }
            }

        }
    }
