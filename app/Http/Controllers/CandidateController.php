<?php

    namespace App\Http\Controllers;

    use App\Models\CandidateCourse;
    use Illuminate\Support\Facades\Auth;

    class CandidateController extends Controller {

        public function index()
        {
            return view('candidate.home');
        }
        public function course()
        {
            return view('candidate.course');
        }
        public function dashboard()
        {
            $courses = CandidateCourse::where('user_id',Auth::id())->get();
            return view('candidate.dashboard',compact('courses'));
        }
        public function personal()
        {
            return view('candidate.personal-information');
        }
        public function evaluation()
        {
            return view('candidate.evaluation');
        }
        public function register()
        {
            return view('candidate.register');
        }
        public function invoice()
        {
            return view('candidate.invoice');
        }
        public function summary()
        {
            return view('candidate.summary');
        }
    }
