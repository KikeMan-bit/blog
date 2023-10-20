<!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-white font-attentica sticky top-0 z-10 shadow-md " x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-center sm:h-10 h-20 ">
            <!-- Mobile menu button-->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button x-on:click="open = true" type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-900 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
                    Icon when menu is closed.
        
                    Heroicon name: outline/menu
        
                    Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!--
                    Icon when menu is open.
        
                    Heroicon name: outline/x
        
                    Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="shrink-0 flex items-center sm:hidden">
                <a class="hidden" href="/">
                    <img class="h-8 w-8" src="{{ asset('img/storebinary.svg') }}" alt="">
                    {{-- <x-application-mark class="block h-9 w-auto" /> --}}
                </a>
                <span class="dark:text-gray-900 urbane ml-4">
                    <a href="" class="text-2xl font-bold">CarlosCruz</a>
                </span>
                <span class="text-xs font-bold">
                    /Blog
                </span>
    
            </div>

            <div class="flex items-center justify-center">

                {{-- logotipo --}}
                {{-- <a href="/" class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-8 w-auto"
                        src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
                    
                    <img class="hidden lg:block h-8 w-auto"
                        src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg"
                        alt="Workflow">

                    <span class="ml-8 sm:ml-0">
                        <svg class="w-14 h-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 810.65 774.02">
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
                                        stroke: #1d1d1b;
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
                                        fill: #1d1d1b;
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
                                <polyline class="cls-2"
                                    points="492.04 518.43 537.55 445.14 600.98 501.72 540.41 593" />
                                <polygon class="cls-2"
                                    points="392.48 205.48 394.84 202.42 398 335.48 416.25 311.59 414.37 177.04 392.48 205.48" />
                                <line class="cls-3" x1="223.84" y1="185.43" x2="318.12" y2="152.86" />
                                <line class="cls-3" x1="223.84" y1="542.86" x2="318.12" y2="591.72" />
                            </g>
                        </svg>
                    </span>

                </a> --}}
                {{-- Menu lg --}}
                <div class="hidden sm:block sm:ml-10">
                    <div class="flex items-center justify-center space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        {{-- <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                            aria-current="page">Dashboard</a>

                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>

                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a> --}}
                        <a href="/"
                            class=" text-gray-900 uppercase font-semibold hover:bg-gray-900 hover:text-white px-3 py-1 rounded-sm text-xs @if (Route::is('posts.index')) {{ 'text-white bg-gray-800' }} @endif">Inicio</a>

                        {{-- @foreach ($categories as $category)
                            <a href="{{ route('posts.category', $category) }}"
                                class="@if (Route::is('posts.category', $category)) {{ '!text-blue-700 !bg-white' }} @endif text-yellow-500 uppercase font-semibold hover:bg-white hover:text-blue-700  px-3 py-1 rounded-sm text-xs">{{ $category->name }}</a>
                        @endforeach --}}

                        @foreach ($categories as $category)
                            <a href="{{ route('posts.category', $category) }}"
                                class=" uppercase font-semibold px-3 py-1 rounded-sm text-xs @if (request()->route()->getName() == 'posts.category' && request()->route('category') == $category) text-white bg-gray-800  @else  hover:bg-gray-900 hover:text-white @endif">{{ $category->name }}</a>
                        @endforeach


                    </div>
                </div>
            </div>

            {{-- @auth
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <!-- Profile dropdown -->
                    <div class="ml-3 relative" x-data="{ open: false }">
                        <div>
                            <button x-on:click="open = true" type="button"
                                class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}"
                                    alt="">
                            </button>
                        </div>

                        <!--
                                                    Dropdown menu, show/hide based on menu state.
                                        
                                                    Entering: "transition ease-out duration-100"
                                                        From: "transform opacity-0 scale-95"
                                                        To: "transform opacity-100 scale-100"
                                                    Leaving: "transition ease-in duration-75"
                                                        From: "transform opacity-100 scale-100"
                                                        To: "transform opacity-0 scale-95"
                                                    -->
                        <div x-show="open" x-on:click.away="open = false"
                            class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem" tabindex="-1" id="user-menu-item-0">Tu perfil</a>
                            <a href="{{ route('admin.home') }}" class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a>

                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <a href="{{ route('logout') }}" @click.prevent="$root.submit();"
                                    class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                    id="user-menu-item-2">Cerrar Sesion</a>
                            </form>

                        </div>
                    </div>
                </div>
            @else
                {{-- <div class="flex justify-center items-center space-x-4 ml-2">
                    <a href="{{ route('login') }}" class="text-gray-900 bg-yellow-600 font-semibold hover:bg-yellow-500 hover:text-gray-900 uppercase px-3 py-1 rounded-sm text-xs">Inicia
                        Sesion</a>
                    <a href="{{ route('register') }}"
                        class="text-gray-900 bg-yellow-600 font-semibold hover:bg-yellow-500 hover:text-gray-900 uppercase px-3 py-1 rounded-sm text-xs">Registrate</a>
                </div> --}}
            {{-- @endauth --}}
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="sm:hidden" x-show="open" x-on:click.away="open = false" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            {{-- <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                aria-current="page">Dashboard</a>

            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a> --}}
            <hr>
            <a href="/"
                class=" text-gray-900 uppercase font-semibold hover:bg-gray-900 hover:text-white block px-3 py-2 rounded-sm text-xs @if (Route::is('posts.index')) {{ 'text-white bg-gray-800' }} @endif">Inicio</a>
            @foreach ($categories as $category)
                <hr>
                <a href="{{ route('posts.category', $category) }}"
                    class="uppercase font-semibold px-3 py-2 block rounded-sm text-xs @if (request()->route()->getName() == 'posts.category' && request()->route('category') == $category) text-white bg-gray-800  @else  hover:bg-gray-900 hover:text-white @endif">{{ $category->name }}</a>
            @endforeach

        </div>
    </div>
</nav>
