<?php

    namespace App\Mail;

    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Mail\Mailable;

    class NewRegistraiton extends Mailable implements ShouldQueue {

        use Queueable;

        public $user;

        public function __construct(\App\Models\User $user)
        {
            $this->user = $user;
        }

        public function build()
        {

            return $this->from('info@ace.org.pk', 'Admission Department')
                ->cc(['acedpt@gmail.com','aceinstitute.fdo1@gmail.com'])
                ->replyTo('americancenterofenglish@gmail.com', 'ACE American Center of English')
                ->markdown('emails.new-registraiton');
        }
    }
