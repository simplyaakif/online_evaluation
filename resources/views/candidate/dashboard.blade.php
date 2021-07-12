<x-layouts.main>
    <x-candidate.navbar/>
    <x-candidate.page-heading title="Dashboard" step="Candidate" description="List of Courses you have selected."/>

    @if($courses->count()==0)
        <div class="max-w-4xl mx-auto px-8 py-4">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-white shadow sm:rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        No Course Found
                    </h3>
                    <div class="mt-2 max-w-xl text-sm text-gray-500">
                        <p>
                            No Course found for your account.
                            Kindly select your desired course.
                        </p>
                    </div>
                    <div class="mt-5">
                        <a href="{{route('candidate.course')}}" class="inline-flex items-center justify-center px-4 py-2 border
                    border-transparent font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700
                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                            Select Course
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="max-w-6xl mx-auto px-4 py-4">
            <div>
                <ul class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    @foreach($courses as $course)
                        <li class="bg-white  rounded-md">
                            <h2 class="text-xl px-4 py-2 font-medium">
                            {{$course->course_name}}
                            </h2>
                            <hr>
                            <div class="grid px-4 py-2 grid-cols-1 text-xs">
                                <div class="grid-cols-2 grid">
                                    <span>Duration:</span>
                                    <span>{{$course->course_duration}}</span>
                                </div>
                                <div class="grid-cols-2 grid">
                                    <span>Time:</span>
                                    <span>{{$course->course_time}}</span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

</x-layouts.main>
