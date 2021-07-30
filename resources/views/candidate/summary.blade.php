<x-layouts.main title="Applicant Information Summary">
    <x-candidate.navbar/>
    <x-candidate.page-heading
        title="Applicant Information Summary"
        description="Kindly review your information before proceeding further"
        step="Step 04"/>
    <x-candidate.steps/>

    <div class="max-w-3xl mt-10 mx-auto">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Applicant Information
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Personal details and application.
                </p>
            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Full name
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{Auth::user()->name}}
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Date of Birth
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{$candidate->dob}}
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Mobile Number
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{$candidate->mobile}}
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Email address
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{Auth::user()->email}}
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            First Language
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{$candidate->first_language}}
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Profession
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{$candidate->profession}}
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            City
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{$candidate->city}}
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Country
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{$candidate->country}}
                        </dd>
                    </div>
                    <div class="sm:col-span-2">
                        <dt class="text-sm font-medium text-gray-500">
                            Address
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{$candidate->address}}
                        </dd>
                    </div>
                    {{--                    <div class="sm:col-span-2">--}}
                    {{--                        <dt class="text-sm font-medium text-gray-500">--}}
                    {{--                            Attachments--}}
                    {{--                        </dt>--}}
                    {{--                        <dd class="mt-1 text-sm text-gray-900">--}}
                    {{--                            <ul class="border border-gray-200 rounded-md divide-y divide-gray-200">--}}
                    {{--                                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">--}}
                    {{--                                    <div class="w-0 flex-1 flex items-center">--}}
                    {{--                                        <!-- Heroicon name: solid/paper-clip -->--}}
                    {{--                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400"--}}
                    {{--                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"--}}
                    {{--                                             aria-hidden="true">--}}
                    {{--                                            <path fill-rule="evenodd"--}}
                    {{--                                                  d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"--}}
                    {{--                                                  clip-rule="evenodd"/>--}}
                    {{--                                        </svg>--}}
                    {{--                                        <span class="ml-2 flex-1 w-0 truncate">--}}
                    {{--                  resume_back_end_developer.pdf--}}
                    {{--                </span>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="ml-4 flex-shrink-0">--}}
                    {{--                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">--}}
                    {{--                                            Download--}}
                    {{--                                        </a>--}}
                    {{--                                    </div>--}}
                    {{--                                </li>--}}
                    {{--                                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">--}}
                    {{--                                    <div class="w-0 flex-1 flex items-center">--}}
                    {{--                                        <!-- Heroicon name: solid/paper-clip -->--}}
                    {{--                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400"--}}
                    {{--                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"--}}
                    {{--                                             aria-hidden="true">--}}
                    {{--                                            <path fill-rule="evenodd"--}}
                    {{--                                                  d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"--}}
                    {{--                                                  clip-rule="evenodd"/>--}}
                    {{--                                        </svg>--}}
                    {{--                                        <span class="ml-2 flex-1 w-0 truncate">--}}
                    {{--                  coverletter_back_end_developer.pdf--}}
                    {{--                </span>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="ml-4 flex-shrink-0">--}}
                    {{--                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">--}}
                    {{--                                            Download--}}
                    {{--                                        </a>--}}
                    {{--                                    </div>--}}
                    {{--                                </li>--}}
                    {{--                            </ul>--}}
                    {{--                        </dd>--}}
                    {{--                    </div>--}}
                </dl>
            </div>
        </div>
        <div class="text-right">
            <a class="bg-indigo-600 px-4 py-2 mt-10 inline-block text-right text-white rounded-md" href="{{route('candidate.invoice')
            }}">
                Generate Invoices
            </a>
        </div>
    </div>


</x-layouts.main>
