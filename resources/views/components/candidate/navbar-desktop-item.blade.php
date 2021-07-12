@props([
    'route'=>''
])
<a href="{{$route}}"
   class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
    {{$slot}}
</a>
