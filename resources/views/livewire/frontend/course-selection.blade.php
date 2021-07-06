<div>
{{--    <code class="text-sm">{{json_encode($final['session_time'])}}</code>--}}
    <div class="grid grid-cols-1 mx-auto md:grid-cols-6 gap-4 auto-cols-min">
        <div class="bg-white md:col-span-4 overflow-hidden shadow rounded-lg">
            <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Select Course & Proceed Further
                </h3>
            </div>
            <div class="px-4 py-5 sm:p-6">
                <div class="grid grid-cols-2 gap-4">
                    {{--    {{$testVariable}}--}}
                    <div>
                        <label for="course" class="block text-sm font-medium text-gray-700">Select Course</label>
                        <select wire:model="course" id="course" name="course"
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            @if(!$course)
                                <option>Please Select Course</option>
                            @endif
                            @foreach($courses as $course_single)
                                <option value="{{$course_single->id}}">{{$course_single->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="course_duration" class="block text-sm font-medium text-gray-700">Select
                            Duration</label>
                        <select wire:model="course_duration" id="course_duration" name="course_duration"
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            @if($course_durations->count()==0)
                                <option>Please Select Course</option>
                            @endif
                            @foreach($course_durations as $course_duration)
                                <option value="{{$course_duration->id}}">{{$course_duration->session_duration}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="course_time" class="block text-sm font-medium text-gray-700">Available Time
                            Slots</label>
                        <select wire:model="course_time" id="course_time" name="course_time"
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            @if($course_times->count()==0)
                                <option>Please Select Course</option>
                            @endif
                            @foreach($course_times as $course_time)
                                <option value="{{$course_time->id}}">{{$course_time->time}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="session_date" class="block text-sm font-medium text-gray-700">Select Date</label>
                        <select wire:model="session_date" id="session_date" name="session_date"
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            @if($session_dates->count()==0)
                                <option>Please Select Course</option>
                            @endif
                            @foreach($session_dates as $session_date)
                                <option value="{{$session_date->id}}">{{$session_date->start_date}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="learning_mode" class="block text-sm font-medium text-gray-700">Mode of
                            Learning</label>
                        <select id="learning_mode" name="learning_mode"
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option>Regular On Campus</option>
                            <option selected>Online</option>
                            <option>Weekend Session</option>
                            {{--            <option>Recorded Session</option>--}}
                        </select>
                    </div>

                </div>
            </div>
            <div class="bg-gray-50 px-4 py-4 sm:px-6 flex justify-end">
                <a href="{{route('candidate.evaluation')}}" class="inline-flex items-center px-4 py-2 border
                border-transparent
                text-sm
                font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Next
                </a>
            </div>
        </div>
        <!-- This example requires Tailwind CSS v2.0+ -->
        {{--    <div class="w-full">--}}
        @if($course_duration)
            <div class="w-full mx-auto bg-white md:col-span-2 overflow-hidden self-start shadow rounded-lg">
                <div class="divide-gray-200 divide-y ">
                    <div class="px-4 py-3 sm:p-6">
                        <h2 class="text-sm">Course Name</h2>
                        <h3 class="text-3xl font-semibold text-indigo-600">
                            {{$final['course']->title}}
                        </h3>
                    </div>
                    {{--            <hr>--}}

                    @isset($final['course_duration']->pivot->price)
                        <div class="px-4 py-3 sm:px-6 sm:py-2">
                            <h2>Course Price</h2>
                            <h3 class="text-2xl font-semibold text-gray-600">
                                {{$final['course_duration']->pivot->price}} Rs
                            </h3>
                        </div>
                    @endisset
                    <div class="grid grid-cols-2 gap-4 px-4 py-3 sm:p-6">
                        <div>
                            <h2 class="text-sm">Course Duration</h2>
                            <h3 class="text-base  text-gray-600">
                                {{$final['course_duration']->session_duration}}
                            </h3>
                        </div>
                        <div>
                            <h2 class="text-sm">Selected Time</h2>
                            <h3 class="text-base  text-gray-600">
                                @isset($final['session_time']->time)
                                    {{$final['session_time']->time}}
                                @else
                                    {{$final['session_time']['time']}}
                                @endisset
                            </h3>
                        </div>
                        <div>
                            <h2 class="text-sm">Session Start Date</h2>
                            <h3 class="text-base  text-gray-600">
                                @isset($final['session_date']->start_date)
                                    {{$final['session_date']->start_date}}
                                @else
                                    {{$final['session_date']['start_date']}}
                                @endisset
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        {{--    </div>--}}
    </div>
</div>
