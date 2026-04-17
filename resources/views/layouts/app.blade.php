<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'PoolWash - Pool Cleaning & Services')</title>

    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo/fav-logo3.png') }}" type="image/x-icon" />

    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/mobile.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owlcarousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/sidebar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

    @stack('styles')
</head>
<body class="@yield('body-class', 'homepage3-body')">

    @include('partials.preloader')
    @include('partials.progress-bar')
    
    @include('partials.header')
    @include('partials.mobile-header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!--===== JS SCRIPT LINK =======-->
    <script src="{{ asset('assets/js/plugins/jquery-3-6-0.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/fontawesome.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/aos.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/counter.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/mobilemenu.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/owlcarousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/Splitetext.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ripples.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slick-slider.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/circle-progress.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
    @stack('scripts')
</body>
</html>