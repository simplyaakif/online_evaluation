@props([
    'route'=>''
])

@if(Request::fullUrl()=== $route)
<a href="{{$route}}"
   class="bg-indigo-50 border-indigo-500 text-indigo-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">{{$slot}}</a>


@else
    <a href="{{$route}}"
       class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">{{$slot}}</a>
@endif
