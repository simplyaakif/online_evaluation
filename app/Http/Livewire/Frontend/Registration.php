<?php

    namespace App\Http\Livewire\Frontend;

    use App\Mail\NewRegistraiton;
    use App\Models\Candidate;
    use App\Models\User;
    use Auth;
    use Illuminate\Support\Facades\Mail;
    use Livewire\Component;

    class Registration extends Component {

        public $name, $mobile, $email, $password, $password_confirmation;

        protected $rules
            = [
                'name'     => 'required|min:4',
                'email'    => 'required|email|unique:users',
                'password' => 'required|confirmed|min:6',
                'mobile'   => 'required|numeric',
            ];

        /**
         * Get the view / contents that represent the component.
         *
         * @return \Illuminate\View\View|string
         */
        public function submit()
        {
            $this->validate();

            $user      = User::create([
                                          'name'     => $this->name,
                                          'email'    => $this->email,
                                          'password' => $this->password
                                      ]);
            $candidate = Candidate::create([
                                               'name'            => $this->name,
                                               'mobile'          => $this->mobile,
                                               'user_account_id' => $user->id
                                           ]);
            $user->roles()->sync([2]);
            Auth::login($user);
            Mail::to($user->email)->queue (new NewRegistraiton($user));
            $this->name = $this->email = $this->mobile = $this->password = $this->password_confirmation = '';


            return redirect()->route('candidate.dashboard');

        }

        public function render()
        {
            return view('livewire.frontend.registration');
        }
    }
