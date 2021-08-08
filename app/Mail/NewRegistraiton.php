<?php

    namespace App\Mail;

    use Illuminate\Mail\Mailable;

    class NewRegistraiton extends Mailable {

        public $user;

        public function __construct(\App\Models\User $user)
        {
            $this->user = $user;
        }

        public function build()
        {

            return $this->from('info@ace.org.pk', 'Admission Department')
                ->replyTo('americancenterofenglish@gmail.com', 'ACE American Center of English')
                ->markdown('emails.new-registraiton');
        }
    }
