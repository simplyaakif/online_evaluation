<?php

    namespace App\Http\Controllers;

    use App\Models\Candidate;
    use App\Models\CandidateCourse;
    use App\Models\CandidateEvaluation;
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
            $courses = CandidateCourse::where('user_id', Auth::id())->get();

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
            $candidate = Candidate::where('user_account_id',Auth::id())->first();
            $evaluations = CandidateEvaluation::where('user_id',Auth::id())->get();
            return view('candidate.evaluations',compact('candidate','evaluations'));
        }

        public function evaluationSingle($id)
        {
            $evaluation = CandidateEvaluation::findOrFail($id);
            $evaluation_input = json_decode($evaluation->candidate_evaluation_input);
            $mcqs =$evaluation_input->mcqs;
            return view('candidate.evaluation_single',compact('evaluation','mcqs'));
        }

        public function register()
        {
            return view('candidate.register');
        }

        public function invoice()
        {
            $candidate = Candidate::where('user_account_id',Auth::id())->first();
            $coursesBill = CandidateCourse::where('user_id', Auth::id())->with('invoice')->get();
            $courses = $coursesBill->filter(function ($course){
                return $course->invoice == null;
            });
            return view('candidate.invoice',compact('courses','candidate'));
        }

        public function summary()
        {
            $candidate = Candidate::where('user_account_id',Auth::id())->first();
            $courses = CandidateCourse::where('user_id',Auth::id())->get();
            return view('candidate.summary',compact('candidate','courses'));
        }
    }
