<x-layouts.main>
    <x-candidate.navbar/>
    <x-candidate.page-heading step="" title="Result Card"
                              description="Evaluation given on {{$evaluation->created_at->format('h:i:s A d F Y')}}"/>

    <div class="max-w-6xl mx-auto mt-10">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-white overflow-hidden shadow rounded-lg divide-y divide-gray-200">
            <div class="px-4 py-5 sm:px-6 flex justify-between">
                <span>
                Evaluation Score

                </span>
                <span class="text-indigo-600 font-semibold">
                    {{$evaluation->candidate_evaluation_score}} Marks Out of {{count($mcqs)}}
                </span>
            </div>
            <div class="px-4 py-5 sm:p-6">
                <div class="grid grid-cols-3 gap-6">
                    @foreach($mcqs as $mcq)
                        @php $input = json_decode($mcq->selected); @endphp
                        {{--                    {{dd($input->id)}}--}}
                        <div class="col-span-3 sm:col-span-1 text-sm">
                            <label for="company_website"
                                   class="block text-base font-medium text-gray-900">
                                @php $j = $loop->iteration - 1 @endphp
                                {{$loop->iteration}}. {{$mcq->question_statement}}
                            </label>
                            <div class="mt-2 text-sm">
                                <ul>
                                    @foreach($mcq->answers as $answer)
                                        @isset($input->id)
                                        <li>
                                            @if ($input->id==$answer->id && $answer->correct )
                                                <label class="flex p-2 rounded-md items-center mb-2 bg-green-200">
                                                    <input
                                                        name="mcq-{{$mcq->id}}"
                                                        checked="checked"
                                                        type="radio">
                                                    <span
                                                        class="ml-2 inline-block">{{$answer->title}} - <span
                                                            class="font-semibold">Selected
                                                        By You</span>
                                                    </span>
                                                </label>
                                            @elseif ($input->id==$answer->id && !$answer->correct)
                                                <label class="flex p-2 rounded-md items-center mb-2 bg-red-200">
                                                    <input
                                                        name="mcq-{{$mcq->id}}"
                                                        checked="checked"
                                                        type="radio">
                                                    <span
                                                        class="ml-2 inline-block">{{$answer->title}} - <span
                                                            class="font-semibold">Selected
                                                        By You</span></span>
                                                </label>
                                            @else
                                                <label class="flex p-2 rounded-md items-center mb-2 ">
                                                    <input
                                                        name="mcq-{{$mcq->id}}"
                                                        type="radio">
                                                    <span
                                                        class="ml-2 inline-block">{{$answer->title}} </span>
                                                </label>
                                            @endif
                                        </li>
                                        @else
                                            <li>
                                                <label class="flex p-2 rounded-md items-center mb-2 ">
                                                    <input
                                                        name="mcq-{{$mcq->id}}"
                                                        type="radio">
                                                    <span
                                                        class="ml-2 inline-block">{{$answer->title}} </span>
                                                </label>
                                            </li>
                                        @endisset
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</x-layouts.main>
