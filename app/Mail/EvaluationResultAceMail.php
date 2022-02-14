<?php

    namespace App\Mail;

    use Illuminate\Mail\Mailable;

    class EvaluationResultAceMail extends Mailable {

        public function __construct()
        {
            //
        }

        public function build()
        {
            return $this->markdown('emails.evaluation-result-ace');
        }
    }
