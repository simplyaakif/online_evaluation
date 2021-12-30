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
                                    <source src="{{asset('storage/listening/list_01.mp4')}}" type="audio/mpeg">
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
