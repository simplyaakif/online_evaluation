<?php

    namespace App\Http\Controllers;

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
            return view('candidate.dashboard');
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
