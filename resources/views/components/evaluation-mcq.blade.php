@props([
    'mcqs'=>$mcqs
])
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
                        <div class="">
                            <div>

                                {{--    MCQ Part Area--}}
{{--                                <div>--}}
{{--                                    <button type="button" wire:click="dumpResult">Submit</button>--}}
{{--                                </div>--}}
                                <div class="grid grid-cols-2 gap-6">
                                    @foreach($mcqs as $mcq)

                                        <div class="col-span-2 sm:col-span-1 text-sm">
                                            <label for="company_website"
                                                   class="block text-base font-medium text-gray-900">
                                                @php $j = $loop->iteration - 1 @endphp
                                                {{$loop->iteration}}. {{$mcq->question}}
                                            </label>
                                            <div class="mt-2 text-sm">
                                                <ul>
                                                    @foreach($mcq->answers as $answer)
                                                        <li>
                                                            <label class="flex items-center mb-2">
                                                                <input wire:model="input.mcqs.{{$j}}.selected"
                                                                       name="mcq-{{$mcq->id}}"
                                                                       value="{{json_encode($answer)}}"
                                                                       type="radio">
                                                                <span
                                                                    class="ml-2 inline-block">{{$answer->title}}</span>
                                                            </label>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>


                                <!-- This example requires Tailwind CSS v2.0+ -->
                            </div>

                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
