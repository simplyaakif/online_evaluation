<?php

    namespace App\Http\Livewire\Frontend;

    use App\Models\Candidate;
    use Illuminate\Support\Facades\Auth;
//    use Khsing\World\Models\City;
//    use Khsing\World\Models\Country;
//    use Khsing\World\World;
    use Livewire\Component;

    class LwPersonalInfo extends Component {

        public $name, $mobile, $email, $dob, $cnic, $lang, $profession, $country, $address, $city, $mo;
        public $countries, $states, $cities, $callingcodes;

        protected $rules
            = [
                'mobile'     => 'required',
                'dob'    => 'required',
                'profession'=>'required',
                'city'=>'required',
                'address'=>'required',
            ];


        public function mount()
        {
//            $this->countries    = Country::orderBy('name', 'asc')->get();
//            $this->callingcodes = Country::orderBy('callingcode', 'asc')->get();
//            $this->cities       = City::where('country_id', 70)->get();

            $this->name       = Auth::user()->name;
            $this->email      = Auth::user()->email;
            $this->mobile     = Auth::user()->candidate['mobile']? Auth::user()->candidate['mobile']:null;
            $this->cnic       = Auth::user()->candidate['cnic'];
            $this->dob       = Auth::user()->candidate['dob'];
            $this->lang       = Auth::user()->candidate['first_language'];
            $this->profession = Auth::user()->candidate['profession'];
            $this->address    = Auth::user()->candidate['address'];
            $this->city       = Auth::user()->candidate['city'];
            $this->country    = Auth::user()->candidate['country'] ? Auth::user()->candidate['country'] : 'Pakistan';

        }

        public function updatedCountry($value)
        {
//            $this->cities = City::where('country_id', $value)->get();

        }

        public function save()
        {
            $this->validate();
//            $city = City::findOrFail(intval($this->city))->get();
//            $country = Country::where('id',intval($this->country))->first();
            $candidate = Candidate::updateOrCreate(['user_account_id' => Auth::id()], [
                                                                                        'mobile'         => $this->mobile,
                                                                                        'cnic'           => $this->cnic,
                                                                                        'first_language' => $this->lang,
                                                                                        'profession'     => $this->profession,
                                                                                        'country'        => $this->country,
                                                                                        'address'        => $this->address,
                                                                                        'city'           => $this->city,
                                                                                        'dob'=>$this->dob,
                                                                                    ]);

            $this->redirectRoute('candidate.summary');

        }

        public function render()
        {
            return view('livewire.frontend.lw-personal-info');
        }
    }
