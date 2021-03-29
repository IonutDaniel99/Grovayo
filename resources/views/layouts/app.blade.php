<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Create and account or log in to {{ config('app.name', 'Laravel') }}. A social webpage where fun & creativity, edit & share photos with friends & family become interactve.">
    <meta http-equiv="Cache-control" content="public">
    <title>Connected as {{ Auth::user()->name  }} | {{ config('app.name')}}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owfont-regular.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" />

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ asset('js/all.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/datepicker.min.js') }}"></script>
    <script src="{{ asset('js/datepicker.en.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js') }}" defer></script>

    <!-- Other -->
</head>

<body class="font-sans antialiased">

    <div class="min-h-screen bg-gray-100">
        <livewire:www.user.navigationbar />
        <!-- Page Content -->
        {{ $slot }}
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>