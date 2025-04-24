<!DOCTYPE html>

<body lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
</body>

<x-navbar></x-navbar>

<div class="pt-30 w-full mx-auto flex flex-col items-center bg-slate-900">
    <div class="w-full max-w-7xl min-h-[91vh] ">
        {{ $slot }}
    </div>
</div>

</body>

</html>