<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" href="https://use.typekit.net/oul4ncn.css">

    <!-- Styles -->

    @livewireStyles

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    {{-- para production --}}
    <script src="{{ asset('build/assets/app-c2a7332f.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('build/assets/app-6d0ea0eb.css') }}">

</head>

<body class="urbane antialiased">
    {{-- <x-jet-banner /> --}}
    <div class="bg-white p-2 flex items-center justify-center">
        <div class="shrink-0 flex items-center">
            <a href="/">
                <img class="h-14 w-14" src="{{ asset('img/storebinary.svg') }}" alt="">
                {{-- <x-application-mark class="block h-9 w-auto" /> --}}
            </a>
            <span class="dark:text-gray-900 urbane ml-4">
                <a href="" class="text-2xl font-bold">Store Binary</a>
            </span>

        </div>

    </div>

    <div class="min-h-screen bg-sky-50">

        @livewire('navigation')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
