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
    <script src="../path/to/flowbite/dist/flowbite.js"></script>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-THCCJHCYDC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-THCCJHCYDC');
    </script>
</head>
<body class="bg-gray-100 dark:bg-gray-800 selection:bg-green-300 min-h-screen">

<div>

    @include('layouts.includes.nav')

    <div class="min-h-screen">
        {{ $slot }}
    </div>

    <x-notification />

    @include('layouts.includes.footer')
    @include('assets.alpine-tooltip')
    @stack('scripts-body-after')

</div>
</body>
</html>
