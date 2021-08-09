<?php

    namespace App\Mail;

    use App\Models\CandidateEvaluation;
    use Illuminate\Mail\Mailable;

    class EvaluationResult extends Mailable {

        public $candidateEvaluation;

        public function __construct(CandidateEvaluation $candidateEvaluation)
        {
            $this->candidateEvaluation=$candidateEvaluation;
        }

        public function build()
        {
            return $this->from('info@ace.org.pk', 'Admission Department')->subject('Evaluation Score')->markdown('emails.evaluation-result');
        }
    }
