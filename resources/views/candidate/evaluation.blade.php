<x-layouts.main title="Evaluation Test">

    <x-candidate.navbar/>
    <x-candidate.page-heading title="Evaluation Test" description="Fill In the MCQs and other Questions" step="Step
    02"/>
    <x-candidate.steps/>
    <x-candidate.evaluation-countdown/>

    <div class="max-w-6xl mx-auto mt-10">

        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">MCQ Part</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Select the answer to the best of your abilities.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="#" method="POST">
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div class="grid grid-cols-2 gap-6">
                                    @livewire('frontend.evaluation-mcqs')

                                </div>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Listening Part</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Answer the questions after listening to the audio
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="#" method="POST">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 ">
                                        <label for="first_name" class="block text-sm font-medium
                                        text-gray-700">Listen the audio and answer the following questions</label>
                                        <audio controls class="w-full mt-4 ">
                                            <source src="https://www.w3schools.com/html/horse.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                    </div>

                                    <div class="col-span-6">
                                        <div class="mt-2 text-sm">
                                            <ul>
                                                <li>
                                                    <label class="flex items-center mb-4"><input name="listen01"
                                                                                                 type="radio"> <span
                                                            class="ml-2
                                                    inline-block">Work</span></label>
                                                </li>
                                                <li>
                                                    <label class="flex items-center mb-4"
                                                    ><input name="listen01" type="radio"> <span class="ml-2
                                                    inline-block">desk</span></label>
                                                </li>
                                                <li>
                                                    <label class="flex items-center mb-4"
                                                    ><input name="listen01" type="radio"> <span class="ml-2
                                                    inline-block">water<span/></label>
                                                </li>
                                                <li>
                                                    <label class="flex items-center mb-4"
                                                    ><input name="listen01" type="radio"> <span class="ml-2
                                                    inline-block">shop</span></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Notifications</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Decide which communications you'd like to receive and how.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="#" method="POST">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <fieldset>
                                    <legend class="text-base font-medium text-gray-900">By Email</legend>
                                    <div class="mt-4 space-y-4">
                                        <div class="flex items-start">
                                            <div class="flex items-center h-5">
                                                <input id="comments" name="comments" type="checkbox"
                                                       class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="comments" class="font-medium text-gray-700">Score</label>
                                                <p class="text-gray-500">Evaluation MCQ part score.</p>
                                            </div>
                                        </div>
                                        <!-- This example requires Tailwind CSS v2.0+ -->
                                        <div class="relative">
                                            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                                                <div class="w-full border-t border-gray-300"></div>
                                            </div>
                                            <div class="relative flex justify-center">
                                                <span class="px-2 bg-white text-sm text-gray-500">
                                                  Fee of 500 Rs applies for any of the selection below
                                                </span>
                                            </div>
                                        </div>

                                        <div class="flex items-start">
                                            <div class="flex items-center h-5">
                                                <input id="mcq-result" name="mcq-result" type="checkbox"
                                                       class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="mcq-result" class="font-medium text-gray-700">MCQ
                                                    Answers</label>
                                                <p class="text-gray-500">Detailed report regarding mcq. Answers
                                                    selected by you and actual answers.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="flex items-center h-5">
                                                <input id="listening-result" name="listening-result" type="checkbox"
                                                       class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="listening-result" class="font-medium
                                                text-gray-700">Listening</label>
                                                <p class="text-gray-500">Your listening score and correct answers.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="flex items-center h-5">
                                                <input id="speaking-result" name="speaking-result" type="checkbox"
                                                       class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="speaking-result" class="font-medium
                                                text-gray-700">Speaking</label>
                                                <p class="text-gray-500">Audio sample of your upload and comments on it.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <a href="{{route('candidate.personal')}}"
                                   class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <x-slot name="scripts">
        <script>
            var seconds = 60;
            var timer;

            function myFunction() {
                if (seconds < 60) { // I want it to say 1:00, not 60
                    console.log(seconds)
                }
                if (seconds > 0) { // so it doesn't go to -1
                    seconds--;
                } else {
                    clearInterval(timer);
                    alert("You type X WPM");
                }
            }

            function startEvaluation() {
                // document.addEventListener('livewire:load', function () {
                //     $wire.set('modal', false)
                document.getElementById('modalid').style.display = 'none';
                    if (!timer) {
                        timer = window.setInterval(function () {
                            myFunction();
                        }, 1000); // every second
                    }
                // })
            }
        </script>
    </x-slot>
</x-layouts.main>
