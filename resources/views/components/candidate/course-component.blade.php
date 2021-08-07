@props([
    'course'=>'',
    'invoicegenerated'=>''
])
@php $course =json_decode($course) @endphp
<div class="w-full mx-auto bg-white md:col-span-2 overflow-hidden self-start shadow rounded-lg">
    <div wire:loading.flex>
        <div class="bg-white h-56 w-full flex items-center justify-center">
            <div class="la-square-jelly-box la-dark">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <div wire:loading.remove class="divide-gray-200 divide-y ">
        <div class="px-4 py-3 sm:p-6">
            <h2 class="text-sm">Course Name </h2>
            <h3 class="text-3xl font-semibold text-indigo-600">
                {{$course->course_name}}
            </h3>
        </div>

        <div class="px-4 py-3 sm:px-6 sm:py-2">
            <h2>Course Price</h2>
            <h3 class="text-2xl font-semibold text-gray-600">
                {{$course->course_price}}
            </h3>
        </div>
        <div class="grid grid-cols-2 gap-4 px-4 py-3 sm:p-6">
            <div>
                <h2 class="text-sm">Course Duration</h2>
                <h3 class="text-base  text-gray-600">
                    {{$course->course_duration}}
                </h3>
            </div>
            <div>
                <h2 class="text-sm">Selected Time</h2>
                <h3 class="text-base  text-gray-600">
                    {{$course->course_time}}
                </h3>
            </div>
            <div>
                <h2 class="text-sm">Session Start Date</h2>
                <h3 class="text-base  text-gray-600">
                    {{$course->course_start_date}}
                </h3>
            </div>
            <div class="">
                <span class="text-sm text-gray-600">Mode of Learning:</span>
                <span class="font-semibold">{{$course->course_mode}}</span>
            </div>
        </div>
        <div class="block bg-indigo-600 text-white text-center ">
            @if(!$invoicegenerated || !$course->invoice)
                <button wire:click="generateInvoice({{ $course->id }})" class="py-3">
                    <div wire:loading wire:target="submit" class="mr-2 ">
                        <div class="la-ball-clip-rotate la-sm">
                            <div></div>
                        </div>
                    </div>
                    Generate Invoice
                </button>
            @else
                <a target="_blank" href="{{$course->invoice->pay_link}}" class="py-3 block">
                    Pay Invoice
                </a>
            @endif
        </div>
    </div>
</div>
