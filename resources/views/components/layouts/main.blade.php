@props([
    'title'=>'Online Evaluation',
    'footer'=>true,
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
    @livewireScripts
    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
    <title>{{$title}}</title>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col justify-between">
<div>

    {{ $slot }}
</div>

@if($footer)
    <div>
        <x-layouts.footer/>
    </div>
@endif
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js"
        integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>