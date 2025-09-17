<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light" data-pwa="true">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- SEO Meta Tags -->
    <title>{{ $title }} | {{ config('app.name') }} </title>

    <meta name="description" content="{{ config('app.name') }} - ">
    <meta name="keywords" content="car dealer, cars">
    <meta name="author" content="Morgan Mutila">

    <!-- Webmanifest + Favicon / App icons -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="manifest" href="manifest.json">
    <link rel="icon" type="image/png" href="{{ asset('assets/app-icons/icon-32x32.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{ asset('assets/app-icons/icon-180x180.png') }}">

    <!-- Preloaded local web font (Inter) -->
    <link rel="preload" href="{{ asset('assets/fonts/inter-variable-latin.woff2') }}" as="font" type="font/woff2"
        crossorigin="">

    <!-- Font icons -->
    <link rel="preload" href="{{ asset('assets/icons/finder-icons.woff2') }}" as="font" type="font/woff2"
        crossorigin="">
    <link rel="stylesheet" href="{{ asset('assets/icons/finder-icons.min.css') }}">

    <!-- Vendor styles -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/choices.js/choices.min.css') }}">

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="{{ asset('assets/css/theme.min.css') }}" as="style">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" id="theme-styles">
</head>

<body>

    <!-- Navigation bar (Page header) -->
    <livewire:layout.navigation />


    <!-- Page content -->
    <main class="content-wrapper">
        <div class="container pt-4">
            <div class="row pt-2 pt-sm-0 pt-lg-2 pb-2 pb-sm-3 pb-md-4 pb-lg-5">

                <!-- Sidebar navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
                <livewire:layout.sidebar />
                <div class="col-lg-9 ps-lg-5">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </main>

    <!-- Vendor scripts -->
    <script src="{{ asset('assets/vendor/choices.js/choices.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/cleave.js/cleave.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>

</body>

</html>
