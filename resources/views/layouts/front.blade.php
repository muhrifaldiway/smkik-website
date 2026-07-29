<!DOCTYPE html>
<html class="no-js" dir="ltr" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="ie=edge" http-equiv="x-ua-compatible"/>
    <title>@yield('title', 'SMK Informatika Komputer Ampana Kota - Website Resmi')</title>
    <meta content="WEBOT" name="author"/>
    <meta content="Website Resmi SMK Informatika Komputer Ampana Kota" name="description"/>
    <meta content="SMK, SMKIK, Ampana Kota, Sekolah Kejuruan" name="keywords"/>
    <meta content="INDEX,FOLLOW" name="robots"/>
    <meta content="width=device-width,initial-scale=1,shrink-to-fit=no" name="viewport"/>
    
    {{-- <link href="{{ asset('assets/img/favicons/apple-icon-57x57.png') }}" rel="apple-touch-icon" sizes="57x57"/>
    <link href="{{ asset('assets/img/favicons/favicon-32x32.png') }}" rel="icon" sizes="32x32" type="image/png"/> --}}
    <link href="{{ asset('assets/img/favicons/manifest.json') }}" rel="manifest"/>
    <meta content="#ffffff" name="msapplication-TileColor"/>
    <meta content="{{ asset('assets/img/favicons/ms-icon-144x144.png') }}" name="msapplication-TileImage"/>
    <meta content="#ffffff" name="theme-color"/>
    <link href="{{ asset('assets/img/smkik/logo2.png') }}" rel="icon">
    
    <link href="https://fonts.googleapis.com/" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&amp;family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;family=Urbanist:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet"/>
    
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/magnific-popup.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/swiper-bundle.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/smkik.css') }}" rel="stylesheet"/>

    @stack('styles')

    
</head>
<body>

    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    <script src="{{ asset('assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>