<x-layouts.main>
    <x-candidate.navbar/>
    <x-candidate.page-heading title="Personal Information" description="Enter your information to complete the
    registration" step="Step 03"/>
    <x-candidate.steps  />

    <div class="max-w-6xl mx-auto mt-10">

        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Use a permanent address where you can receive mail.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="#" method="POST">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-6">
                                        <label for="first_name" class="block text-sm font-medium
                                        text-gray-700">Name</label>
                                        <input disabled value="{{Auth::user()->name}}" type="text" name="first_name"
                                                id="first_name"
                                                autocomplete="given-name" class=" disabled:opacity-50 mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="mobile" class="block text-sm font-medium
                                        text-gray-700">Mobile Number</label>
                                        <input type="text" name="mobile" id="mobile" autocomplete="phone"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="email_address" class="block text-sm font-medium
                                        text-gray-700">Email Address</label>
                                        <input disabled  value="{{Auth::user()->email}}" type="email"
                                               name="email_address"
                                               id="email_address"
                                                autocomplete="email" class=" disabled:opacity-50 mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="dob" class="block text-sm font-medium
                                        text-gray-700">Date of Birth</label>
                                        <input type="date"
                                               name="dob"
                                               id="dob"
                                                autocomplete="date" class="mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="cnic" class="block text-sm font-medium
                                        text-gray-700">CNIC Number</label>
                                        <input type="text"
                                               name="cnic"
                                               id="cnic"
                                                autocomplete="cnic" class="mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="language" class="block text-sm font-medium
                                        text-gray-700">First Language</label>
                                        <input type="text"
                                               name="language"
                                               id="language"
                                                autocomplete="Language" class="mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="profession" class="block text-sm font-medium
                                        text-gray-700">Profession</label>
                                        <input type="text"
                                               name="profession"
                                               id="profession"
                                                autocomplete="designation" class="mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="country" class="block text-sm font-medium text-gray-700">Country / Region</label>
                                        <select id="country" name="country" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                        </select>
                                    </div>

                                    <div class="col-span-6">
                                        <label for="street_address" class="block text-sm font-medium text-gray-700">Street address</label>
                                        <input type="text" name="street_address" id="street_address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                        <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                        <input type="text" name="city" id="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="state" class="block text-sm font-medium text-gray-700">State / Province</label>
                                        <input type="text" name="state" id="state" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="postal_code" class="block text-sm font-medium text-gray-700">ZIP / Postal</label>
                                        <input type="text" name="postal_code" id="postal_code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <a href="{{route('candidate.summary')}}" type="submit" class="inline-flex
                                justify-center py-2
                                px-4
                                border
                                border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </div>
</x-layouts.main>
