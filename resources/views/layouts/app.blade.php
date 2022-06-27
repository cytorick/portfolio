<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - {{ config('app.name') }}</title>


        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <script src="https://kit.fontawesome.com/9b4cb69171.js" crossorigin="anonymous"></script>
        <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>

        @livewireStyles
        @livewireScripts

        <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.4/dist/full.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/dist/tippy.css" />

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="../path/to/flowbite/dist/flowbite.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/@ryangjchandler/alpine-tooltip@1.x.x/dist/cdn.min.js"
            defer
        ></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-THCCJHCYDC"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-THCCJHCYDC');
        </script>
    </head>
    <body class="bg-gray-100 dark:bg-gray-700 selection:bg-green-300 min-h-screen">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100 dark:bg-gray-700">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-900 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 dark:text-gray-100">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <x-notification />

        @stack('modals')

        @livewireScripts
        @include('assets.alpine-tooltip')
        @stack('scripts-body-after')
    </body>
</html>
