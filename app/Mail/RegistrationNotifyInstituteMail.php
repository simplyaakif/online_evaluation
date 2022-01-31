<?php

    namespace App\Mail;

    use Illuminate\Mail\Mailable;
    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Queue\SerializesModels;

    class RegistrationNotifyInstituteMail extends Mailable implements ShouldQueue {

        use Queueable, SerializesModels;

        public $candidate;
        public function __construct($candidate)
        {
            $this->candidate = $candidate;
        }

        public function build()
        {
            return $this->markdown('emails.registration-notify-institute')->with($this->candidate);
        }
    }
