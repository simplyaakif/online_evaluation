<x-layouts.main footer="false">

    <div class="">
        <div class=" bg-gray-50 flex flex-col  py-0 sm:px-6 lg:px-8">

            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="flex justify-center">
                    <x-candidate.nb-logo size="large"/>
                </div>
                <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                    @guest()
                        @livewire('frontend.registration')
                    @else

                        <p>Seems like you are already registered. Go to Course page.</p>
                        <a href="{{route('candidate.course')}}" class="inline-block mt-4 bg-indigo-600 text-sm
                        text-white px-6
                        py-2
                        rounded-md">Select Course</a>
                    @endguest
                </div>
            </div>
        </div>

    </div>
</x-layouts.main>
