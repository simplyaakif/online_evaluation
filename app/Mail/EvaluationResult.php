<?php

    namespace App\Mail;

    use App\Models\CandidateEvaluation;
    use Illuminate\Mail\Mailable;

    class EvaluationResult extends Mailable {

        public $candidateEvaluation;
        public $candidateCourse;
       public $totalQuestion;

        public function __construct(CandidateEvaluation $candidateEvaluation)
        {
            $this->candidateEvaluation=$candidateEvaluation;
            $this->candidateCourse = $candidateEvaluation->course->name;
            $input = json_decode($candidateEvaluation->candidate_evaluation_input);
            $this->totalQuestion =count($input->mcqs);

        }

        public function build()
        {
            return $this->from('info@ace.org.pk', 'Admission Department')
                ->cc(['acedpt@gmail.com','aceinstitute.fdo1@gmail.com'])
                ->subject('Evaluation Score')->markdown('emails.evaluation-result');
        }
    }
