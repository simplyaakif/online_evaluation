<x-layouts.main>
    <x-candidate.navbar/>
    <x-candidate.page-heading step="" title="Invoices" description="All the invoices generated by you."/>

    <div class="max-w-6xl mx-auto  pt-10">
    {{--        {{json_encode($invoices)}}--}}
    <!-- This example requires Tailwind CSS v2.0+ -->
        @if(count($bills) ==0)
            <div class="text-center ">

            <p class="text-center">No inovices generated by you so far. </p>
            <a href="{{route('candidate.dashboard')}}" class="bg-indigo-600 text-white px-4 py-2 rounded-md
            mt-4 text-center inline-block">Generate
                Course Invoice</a>
            </div>
        @else
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-indigo-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-indigo-500
                                uppercase
                                tracking-wider">
                                        Sr.#
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-indigo-500
                                uppercase
                                tracking-wider">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-indigo-500
                                uppercase
                                tracking-wider">
                                        Amount
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-indigo-500
                                uppercase
                                tracking-wider">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-indigo-500
                                uppercase
                                tracking-wider">
                                        Due Date
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- Odd row -->
                                @foreach($bills as $bill)
                                    <tr class="bg-white">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{$loop->iteration}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{Auth::user()->name}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                            {{$bill->amount}} PKR
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                            {{$bill->status}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                            {{$bill->due_date}}
{{--                                            {{$bill->due_date->format('h:i:s A d F Y')}}--}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a target="_blank" href="{{$bill->pay_link}}"
                                               class="text-indigo-600 mx-2
                                    hover:text-indigo-900">Pay Invoice</a>

                                            <a href="{{$bill->bill_url}}"
                                               class="text-gray-600 mx-2
                                    hover:text-indigo-900">Download Invoice</a>
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
