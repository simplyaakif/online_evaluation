@php use Carbon\Carbon; @endphp
@props([
    'title'=>'Online Evaluation',
    'footer'=>true,
    'scripts'=>'',
    'css'=>''
])

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700;900&display=swap" rel="stylesheet">
    @livewireStyles
    {{$css}}
    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/animation.css')}}">
    <script src="https://unpkg.com/imask"></script>
    <title>{{$title}}</title>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col justify-between">
@php $show =  now() <= Carbon::parse('31 December 2023') @endphp
@if($show)
<div class="bg-black  py-2">
    <div class="max-w-7xl mx-auto flex justify-between text-sm">
        <strong>25% Off on all courses. Year End discount till 31st December</strong>
        <div>Kindly visit website for actual new prices</div>
    </div>
</div>
@endif

<div>

    {{ $slot }}
</div>

@if($footer)
    <div>
        <x-layouts.footer/>
    </div>
@endif
@livewireScripts

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5ad847195f7cdf4f05330b1c/1fcgj6mee';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js"
        integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{$scripts}}

</body>
</html>
