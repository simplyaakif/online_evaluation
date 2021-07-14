<x-layouts.main title="Evaluation Test">

    <x-candidate.navbar/>
    <x-candidate.page-heading title="Evaluation Test" description="Fill In the MCQs and other Questions" step="Step
    02"/>
    <x-candidate.steps/>
    <x-candidate.evaluation-countdown/>

    <div class="max-w-6xl mx-auto mt-10">

        @livewire('frontend.evaluation')


        <div x-data="{modal:false}">
            <div x-show="modal">

                <div x-show="modal" id="modalid" class="fixed z-10 inset-0 overflow-y-auto"
                     aria-labelledby="modal-title"
                     role="dialog"
                     aria-modal="true">
                    <div x-show="modal" class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block
                    sm:p-0">

                        <div x-show="modal" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                             aria-hidden="true"></div>

                        <!-- This element is to trick the browser into centering the modal contents. -->
                        <span x-show="modal" class="hidden sm:inline-block sm:align-middle sm:h-screen"
                              aria-hidden="true">&#8203;</span>

                        <div x-show="modal"
                             class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">
                            <div>
                                <div
                                    class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
                                    <!-- Heroicon name: outline/check -->
                                    <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <div class="mt-3 text-center sm:mt-5">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                        Evaluation Required
                                    </h3>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">
                                            The course you selected requires you to be evaluated. When you are ready hit
                                            start evaluation.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 sm:mt-6">
                                <button @click="{modal=false}" onclick="startEvaluation()" id="start_evaluation"
                                        type="button"
                                        class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                    Start Evaluation
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <x-slot name="scripts">
        <script>
            // document.addEventListener('livewire:load', function () {
            var seconds = 60;
            var timer;

            // let clock = document.getElementById('countTime')

            function startTimer(duration, display) {
                var start = Date.now(),
                    diff,
                    minutes,
                    seconds;

                function timer() {
                    // get the number of seconds that have elapsed since
                    // startTimer() was called
                    diff = duration - (((Date.now() - start) / 1000) | 0);

                    // does the same job as parseInt truncates the float
                    minutes = (diff / 60) | 0;
                    seconds = (diff % 60) | 0;

                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;

                    display.textContent = minutes + ":" + seconds;

                    if (diff <= 0) {
                        // add one second so that the count down starts at the full duration
                        // example 05:00 not 04:59
                        start = Date.now() + 1000;
                    }

                    if (diff == 0) {
                        alert('Time is Up');
                        $wire.dumpResult();

                        return false;
                    }

                };
                // we don't want to wait a full second before the timer starts
                timer();
                setInterval(timer, 1000);
            }

            function startEvaluation() {
                var fiveMinutes = 10;
                var display = document.querySelector('#countTime');
                startTimer(fiveMinutes, display);
            }
            // })


            // function myFunction() {
            //     if (seconds < 60) { // I want it to say 1:00, not 60
            //         console.log(seconds)
            //         clock.innerHTML= seconds + 's'
            //     }
            //     if (seconds > 0) { // so it doesn't go to -1
            //         seconds--;
            //     } else {
            //         clearInterval(timer);
            //         alert("You type X WPM");
            //     }
            // }
            //
            // function startEvaluation() {
            //     // document.addEventListener('livewire:load', function () {
            //     //     $wire.set('modal', false)
            //     document.getElementById('modalid').style.display = 'none';
            //         if (!timer) {
            //             timer = window.setInterval(function () {
            //                 myFunction();
            //             }, 1000); // every second
            //         }
            //     // })
            // }
        </script>
    </x-slot>
</x-layouts.main>
