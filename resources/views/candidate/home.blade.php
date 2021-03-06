<x-layouts.main title="Candidate Evaluation">

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div x-data="{menu:false}" class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>

                <div>
                    <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
                            <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                                <div class="flex items-center justify-between w-full md:w-auto">
                                    <a href="#">
                                        <span class="sr-only">Workflow</span>
                                        <x-candidate.nb-logo/>
                                    </a>
                                    <div class="-mr-2 flex items-center md:hidden">
                                        <button @click="{menu=true}" type="button" class="bg-white rounded-md p-2
                                        inline-flex
                                        items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                                            <span class="sr-only">Open main menu</span>
                                            <!-- Heroicon name: outline/menu -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
                                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Evaluation</a>

                                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Instructions</a>

                                <a href="{{asset('login')}}" class="font-medium text-indigo-600
                                hover:text-indigo-500">Log in</a>
                            </div>
                        </nav>
                    </div>

                    <!--
                      Mobile menu, show/hide based on menu open state.

                      Entering: "duration-150 ease-out"
                        From: "opacity-0 scale-95"
                        To: "opacity-100 scale-100"
                      Leaving: "duration-100 ease-in"
                        From: "opacity-100 scale-100"
                        To: "opacity-0 scale-95"
                    -->
                    <div x-show="menu" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right
                    md:hidden">
                        <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="px-5 pt-4 flex items-center justify-between">
                                <div>
                                    <x-candidate.nb-logo/>
                                </div>
                                <div class="-mr-2">
                                    <button @click="{menu=false}" type="button" class="bg-white rounded-md p-2
                                    inline-flex
                                    items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                        <span class="sr-only">Close main menu</span>
                                        <!-- Heroicon name: outline/x -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="px-2 pt-2 pb-3 space-y-1">
                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700
                                hover:text-gray-900 hover:bg-gray-50">Evaluation</a>

                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700
                                hover:text-gray-900 hover:bg-gray-50">Instructions</a>


                            </div>
                            <a href="{{asset('login')}}" class="block w-full px-5 py-3 text-center font-medium
                            text-indigo-600
                            bg-gray-50 hover:bg-gray-100">
                                Log in
                            </a>
                        </div>
                    </div>
                </div>

                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16  lg:px-8 ">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Evaluate your </span>
                            <span class="block text-indigo-600 xl:inline">English Language</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Perform the simple evaluation test. The evaluation contains a set of MCQs, Text Questions
                            and Listening activities.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md ">
                                <a href="{{route('candidate.register')}}" class="w-full shadow flex items-center
                                justify-center px-8
                                py-3
                                border
                                border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                    Get started
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <div><a href="{{route('login')}}"
                                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                        Login
                                    </a>
                                    <small>Login if you already have performed evaluation.</small></div>
                            </div>
                        </div>

                        <hr class="mb-4 mt-8 block">
                            <!-- This example requires Tailwind CSS v2.0+ -->
                            <fieldset>
                                <legend class="text-2xl font-bold text-indigo-600">Our Campuses</legend>

                                <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-4">
                                    <!--
                                      Checked: "border-transparent", Not Checked: "border-gray-300"
                                      Active: "border-indigo-500 ring-2 ring-indigo-500"
                                    -->
                                    <label class="relative bg-white border rounded-lg shadow-sm p-4 flex cursor-pointer focus:outline-none">
{{--                                        <input type="radio" name="project-type" value="Newsletter" class="sr-only" aria-labelledby="project-type-0-label" aria-describedby="project-type-0-description-0 project-type-0-description-1">--}}
                                        <span class="flex-1 flex">
        <span class="flex flex-col">
          <span id="project-type-0-label" class="block text-sm font-bold text-gray-900"> Islamabad </span>
          <span id="project-type-0-description-0" class="mt-1 flex items-center text-sm text-gray-500">Ace Institute Second Floor, Above Passport Office G-10 Markaz Islamabad</span>
            <span id="project-type-0-description-1" class="mt-6 text-sm font-medium text-gray-900">
                <span class="flex items-center gap-4">
                <x-icons.call/>
                0333-5335792
                </span>
            </span>
        </span>
      </span>
                                        <!--
                                          Not Checked: "invisible"

                                          Heroicon name: solid/check-circle
                                        -->
                                        <svg class="h-5 w-5 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <!--
                                          Active: "border", Not Active: "border-2"
                                          Checked: "border-indigo-500", Not Checked: "border-transparent"
                                        -->
                                        <span class="absolute -inset-px rounded-lg border-2 pointer-events-none" aria-hidden="true"></span>
                                    </label>

                                    <!--
                                      Checked: "border-transparent", Not Checked: "border-gray-300"
                                      Active: "border-indigo-500 ring-2 ring-indigo-500"
                                    -->
                                    <label class="relative bg-white border rounded-lg shadow-sm p-4 flex cursor-pointer focus:outline-none">
                                        <span class="flex-1 flex">
        <span class="flex flex-col">
          <span id="project-type-1-label" class="block text-sm font-bold text-gray-900"> Rawalpindi </span>
          <span id="project-type-1-description-0" class="mt-1 flex items-center text-sm text-gray-500"> ACE 2nd Floor B-6 ( Mehmood Al Iraqi building) near limelight 5th Road, Clock Tower RehmanAbad Rawalpindi</span>
            <span id="project-type-0-description-1" class="mt-6 text-sm font-medium text-gray-900">
                <span class="flex items-center gap-4">
                <x-icons.call/>
                0333-5335892
                </span>
            </span>
        </span>
      </span>
                                        <!--
                                          Not Checked: "invisible"

                                          Heroicon name: solid/check-circle
                                        -->
                                        <svg class="h-5 w-5 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <!--
                                          Active: "border", Not Active: "border-2"
                                          Checked: "border-indigo-500", Not Checked: "border-transparent"
                                        -->
                                        <span class="absolute -inset-px rounded-lg border-2 pointer-events-none" aria-hidden="true"></span>
                                    </label>
                                </div>
                            </fieldset>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
{{--            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80" alt="">--}}
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{asset('img/exams.png')}}" alt="">
        </div>
    </div>


</x-layouts.main>
