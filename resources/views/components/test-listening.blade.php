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
                                        <input id="comments" name="comments" checked="checked" disabled type="checkbox"
                                               class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="comments" class="font-medium text-gray-700">Score</label>
                                        <p class="text-gray-500">Evaluation MCQ part score.</p>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <a wire:click="dumpResult"
                           class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <div wire:loading wire:target="dumpResult" class="mr-2 ">
                                <div class="la-ball-clip-rotate la-sm">
                                    <div></div>
                                </div>
                            </div>
                            Save
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
