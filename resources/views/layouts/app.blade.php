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

            <style>
                /* The side navigation menu */
                .sidenav {
                    height: 100%; /* 100% Full-height */
                    width: 0; /* 0 width - change this with JavaScript */
                    position: fixed; /* Stay in place */
                    z-index: 1; /* Stay on top */
                    top: 0; /* Stay at the top */
                    right: 0;
                    /*background-color: #111; !* Black*!*/
                    overflow-x: hidden; /* Disable horizontal scroll */
                    padding-top: 60px; /* Place content 60px from the top */
                    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
                }

                /* The navigation menu links */
                .sidenav a {
                    padding: 8px 8px 8px 32px;
                    text-decoration: none;
                    font-size: 25px;
                    color: #818181;
                    display: block;
                    transition: 0.3s;
                }

                /* When you mouse over the navigation links, change their color */
                .sidenav a:hover {
                    color: #f1f1f1;
                }

                /* Position and style the close button (top right corner) */
                .sidenav .closebtn {
                    position: absolute;
                    top: 0;
                    right: 25px;
                    font-size: 36px;
                    margin-left: 50px;
                }

                /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
                #main {
                    transition: margin-left .5s;
                    padding: 20px;
                }

                /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
                @media screen and (max-height: 450px) {
                    .sidenav {padding-top: 15px;}
                    .sidenav a {font-size: 18px;}
                }
            </style>

            <script>
                /* Set the width of the side navigation to 250px */
                function openNav() {
                    document.getElementById("mySidenav").style.width = "600px";
                }

                /* Set the width of the side navigation to 0 */
                function closeNav() {
                    document.getElementById("mySidenav").style.width = "0";
                }
            </script>

            <div id="mySidenav" class="sidenav bg-gray-600 shadow-2xl">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="p-5">
                    @livewire('admin.tools.task-list', ['hidden' => false])
                </div>
            </div>

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
