<!-- This example requires Tailwind CSS v2.0+ -->
<nav x-data="{mobilemenu:false,showprofile:false}" class="bg-white shadow border-b border-solid border-gray-200">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button -->
                <button @click="{mobilemenu=true}" type="button" class="inline-flex items-center justify-center p-2
                rounded-md
                text-gray-400
                hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Icon when menu is closed.

                      Heroicon name: outline/menu

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <!--
                      Icon when menu is open.

                      Heroicon name: outline/x

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
               <x-candidate.nb-logo/>

                </div>
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                    <x-candidate.navbar-desktop-item route="{{route('candidate.dashboard')}}">
                        Dashboard
                    </x-candidate.navbar-desktop-item>

                    <x-candidate.navbar-desktop-item route="{{route('candidate.course')}}">
                        New Course
                    </x-candidate.navbar-desktop-item>

                    <x-candidate.navbar-desktop-item route="{{route('candidate.evaluations')}}">
                        Evaluations
                    </x-candidate.navbar-desktop-item>

{{--                    <x-candidate.navbar-desktop-item route="{{route('candidate.invoices')}}">--}}
{{--                        Invoices--}}
{{--                    </x-candidate.navbar-desktop-item>--}}

                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                <!-- Profile dropdown -->
                <div class="ml-3 relative">
                    <div>
                        <button @click="{showprofile=!showprofile}" type="button" class="bg-white rounded-full flex
                        text-sm
                        focus:outline-none
                        focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu-button"
                                aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <span class="inline-flex items-center justify-center h-12 w-12 rounded-full">
              <span class="text-lg font-medium leading-none text-white">
                  <img class="h-10 w-10 rounded-full" src="{{Auth::user()->avatarUrl()}}" alt="">
              </span>
            </span>

                        </button>
                    </div>

                    <div x-show="showprofile" class="origin-top-right absolute right-0 mt-2 w-64 rounded-md shadow-lg
                    py-1 bg-white divide-y divide-gray-100
                    ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical"
                         aria-labelledby="user-menu-button" tabindex="-1">
                        <div class="px-4 py-3" role="none">
                            <p class="text-xs" role="none">
                                Signed in as
                            </p>
                            <p class="text-sm font-semibold text-gray-900 truncate" role="none">
                                {{Auth::user()->email}}
                            </p>
                        </div>
                        <!-- Active: "bg-gray-100", Not Active: "" -->
                        {{--                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"--}}
                        {{--                           id="user-menu-item-0">Your Profile</a>--}}
                        {{--                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"--}}
                        {{--                           id="user-menu-item-1">Settings</a>--}}
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();"
                           class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                           id="user-menu-item-2">Sign out</a>
                        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="mobilemenu" class="sm:hidden" id="mobile-menu">
        <div class="pt-2 pb-4 space-y-1">
            <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
            <x-candidate.nb-mb-item route="{{route('candidate.dashboard')}}">Dashboard
            </x-candidate.nb-mb-item>

            <x-candidate.nb-mb-item route="{{route('candidate.course')}}">
                New Course
            </x-candidate.nb-mb-item>

            <x-candidate.nb-mb-item route="{{route('candidate.evaluations')}}">
                Evaluations
            </x-candidate.nb-mb-item>

{{--            <x-candidate.nb-mb-item route="{{route('candidate.invoices')}}">--}}
{{--                Invoices--}}
{{--            </x-candidate.nb-mb-item>--}}
        </div>
    </div>
</nav>
