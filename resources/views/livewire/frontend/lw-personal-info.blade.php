<form wire:submit.prevent="save" action="#" method="POST">
    <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-6">
                    <label for="first_name" class="block text-sm font-medium
                                        text-gray-700">Name</label>
                    <input wire:model="name" disabled value="{{Auth::user()->name}}" type="text" name="first_name"
                           id="first_name"
                           autocomplete="given-name" class=" disabled:opacity-50 mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="mobile" class="block text-sm font-medium
                                        text-gray-700">Mobile Number</label>
                    <input wire:model="mobile" data-inputmask="'mask': '99-9999999'" type="text" name="mobile" placeholder="0300-1234567" id="mobile"
                           autocomplete="phone"
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    @error('mobile') <p class="mt-2 text-sm text-red-600" id="mobile-error">{{ $message }}</p> @enderror


                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="email_address" class="block text-sm font-medium
                                        text-gray-700">Email Address</label>
                    <input wire:model="email" disabled  value="{{Auth::user()->email}}" type="email"
                           name="email_address"
                           id="email_address"
                           autocomplete="email" class=" disabled:opacity-50 mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="dob" class="block text-sm font-medium
                                        text-gray-700">Date of Birth</label>
                    <input wire:model="dob" type="date"
                           name="dob"
                           id="dob"
                           autocomplete="date" class="mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    @error('dob') <p class="mt-2 text-sm text-red-600" id="mobile-error">{{ $message }}</p> @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="cnic" class="block text-sm font-medium
                                        text-gray-700">CNIC/ID Number</label>
                    <input wire:model="cnic" type="text"
                           name="cnic"
                           id="cnic"
                           autocomplete="cnic" class="mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="language" class="block text-sm font-medium
                                        text-gray-700">First Language</label>
                    <input wire:model="lang" type="text"
                           name="language"
                           id="language"
                           autocomplete="Language" class="mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="profession" class="block text-sm font-medium
                                        text-gray-700">Profession</label>
                    <input wire:model="profession" type="text"
                           name="profession"
                           id="profession"
                           autocomplete="designation" class="mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="country" class="block text-sm font-medium text-gray-700">Country / Region</label>
                    <select wire:model="country" id="country" name="country" autocomplete="country" class="mt-1 block
                    w-full py-2 px-3
                    border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @foreach($countries as $cn)
                        <option
                            @if($cn->id===92)
                            selected
                            @endif
                            value="{{$cn->name}}">{{$cn->emoji}} {{$cn->name}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                    <input wire:model="city" type="text"
                           name="city"
                           id="city"
                           autocomplete="city" class="mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
{{--                    <select wire:model="city" id="city" name="city" autocomplete="city" class="mt-1 block--}}
{{--                    w-full py-2 px-3--}}
{{--                    border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">--}}
{{--                        @foreach($cities as $cy)--}}
{{--                            <option value="{{$cy->name}}">{{$cy->name}}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
                </div>

                <div class="col-span-6">
                    <label for="street_address" class="block text-sm font-medium text-gray-700">Street address</label>
                    <input wire:model="address" type="text" name="street_address" id="street_address"
                           autocomplete="street-address"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>




            </div>
        </div>
        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button href="{{route('candidate.summary')}}" type="submit" class="inline-flex
                                justify-center py-2
                                px-4
                                border
                                border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save
            </button>
        </div>
    </div>
</form>
