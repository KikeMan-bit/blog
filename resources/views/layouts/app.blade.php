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
    <script src="{{ asset('build/assets/app-38ad7aa1.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('build/assets/app-c2a7332f.css') }}">

</head>

<body class="font-roman55pro antialiased">
    {{-- <x-jet-banner /> --}}
    <div class="bg-white p-2 flex items-center justify-center">
        <span>
            <svg class="w-14 h-14 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 810.65 774.02">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #fff;
                        }

                        .cls-2 {
                            stroke-width: 6px;
                        }

                        .cls-2,
                        .cls-3 {
                            fill: none;
                            stroke: #000000;
                        }

                        .cls-2,
                        .cls-3,
                        .cls-4 {
                            stroke-miterlimit: 10;
                        }

                        .cls-3 {
                            stroke-width: 5px;
                        }

                        .cls-4 {
                            fill: #000000;
                            stroke: #7b6a58;
                        }
                    </style>
                </defs>
                <g id="fondo_redondo" data-name="fondo redondo">
                    <circle class="cls-1" cx="382.02" cy="372.29" r="372.29" />
                </g>
                <g id="Color">
                    <polygon class="cls-4"
                        points="168.12 152.86 223.84 185.43 223.84 388.57 318.12 272 318.12 152.86 168.12 152.86" />
                    <polygon class="cls-4"
                        points="222.59 425.4 222.59 540.26 222.59 543.69 166.88 590.39 164.31 592.55 316.88 592.55 316.88 440.83 439.31 280.62 492.9 210.49 536.31 273.26 599.73 229.98 536.31 153.69 431.73 153.69 222.59 425.4" />
                    <polygon class="cls-4"
                        points="343.55 442.43 399.55 369.5 492.04 518.43 537.55 445.14 600.98 501.72 538.57 592.2 432.98 591.72 343.55 442.43" />
                </g>
                <g id="trazado">
                    <polygon class="cls-2"
                        points="531.62 152.86 408.83 321.31 399.94 332.94 392.24 343.01 318.12 440 318.12 591.72 165.55 591.72 223.84 542.86 223.84 424.57 355.46 253.58 399.45 196.43 432.98 152.86 531.62 152.86" />
                    <polygon class="cls-2"
                        points="318.12 272 223.84 392 223.84 185.43 165.55 152.86 318.12 152.86 318.12 272" />
                    <polygon class="cls-2"
                        points="348.12 435.72 399.55 369.5 537.55 591.72 432.98 591.72 343.55 442.43 348.12 435.72" />
                    <polygon class="cls-2"
                        points="537.55 154.72 600.98 229.14 537.55 272.43 491.87 212.64 537.55 154.72" />
                    <polyline class="cls-2" points="492.04 518.43 537.55 445.14 600.98 501.72 540.41 593" />
                    <polygon class="cls-2"
                        points="392.48 205.48 394.84 202.42 398 335.48 416.25 311.59 414.37 177.04 392.48 205.48" />
                    <line class="cls-3" x1="223.84" y1="185.43" x2="318.12" y2="152.86" />
                    <line class="cls-3" x1="223.84" y1="542.86" x2="318.12" y2="591.72" />
                </g>
            </svg>
        </span>
        <span class="font-alarf font-extrabold text-3xl text-cyan-700">
            Kike Cruz
        </span>

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
