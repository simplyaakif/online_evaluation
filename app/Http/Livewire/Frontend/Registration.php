<?php

    namespace App\Http\Livewire\Frontend;

    use App\Models\User;
    use Auth;
    use Livewire\Component;

    class Registration extends Component {

        public $name,$email, $password, $password_confirmation;

        protected $rules
            = [
                'name'     => 'required|min:6',
                'email'    => 'required|email|unique:users',
                'password' => 'required|confirmed|min:6'
            ];

        /**
         * Get the view / contents that represent the component.
         *
         * @return \Illuminate\View\View|string
         */
        public function submit()
        {
            $this->validate();

            $user = User::create([
                             'name'     => $this->name,
                             'email'    => $this->email,
                             'password' => $this->password
                         ]);
            $user->roles()->sync([2]);
            Auth::login($user);
            $this->name=$this->email=$this->password=$this->password_confirmation='';

            return redirect()->route('candidate.dashboard');



        }

        public function render()
        {
            return view('livewire.frontend.registration');
        }
    }
