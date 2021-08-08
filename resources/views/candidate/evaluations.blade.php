<x-layouts.main>
    <x-candidate.navbar/>
    <x-candidate.page-heading step="" title="Evaluations" description="All the evaluations performed by you."/>

    <div class="max-w-6xl mx-auto  pt-10">
    {{--        {{json_encode($evaluations)}}--}}
    <!-- This example requires Tailwind CSS v2.0+ -->
        @if(count($evaluations) ==0)
            <p class="text-center">No evaluations performed by you so far. </p>
        @else
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-indigo-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-indigo-500
                                uppercase
                                tracking-wider">
                                        Sr. #
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-indigo-500
                                uppercase
                                tracking-wider">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-indigo-500
                                uppercase
                                tracking-wider">
                                        Score
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-indigo-500
                                uppercase
                                tracking-wider">
                                        Given for the Course
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-indigo-500
                                uppercase
                                tracking-wider">
                                        Given At
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- Odd row -->
                                @foreach($evaluations as $evaluation)
                                    <tr class="bg-white">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{$loop->iteration}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{$candidate->name}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                            {{$evaluation->candidate_evaluation_score}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                            {{$evaluation->course->course_name}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                            {{$evaluation->created_at->format('h:i:s A d F Y')}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="{{route('candidate.evaluation_single',$evaluation->id)}}"
                                               class="text-indigo-600
                                    hover:text-indigo-900">View</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</x-layouts.main>
