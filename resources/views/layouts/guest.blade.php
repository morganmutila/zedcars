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

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="{{ asset('assets/css/theme.min.css') }}" as="style">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" id="theme-styles">
</head>

<body class="font-sans text-gray-900 antialiased">
    <main class="content-wrapper w-100 px-3 ps-lg-5 pe-lg-4 mx-auto" style="max-width: 1920px">
        <div class="d-lg-flex">

            <!-- Auth form + Footer -->
            <div class="d-flex flex-column min-vh-100 w-100 py-4 mx-auto me-lg-5" style="max-width: 416px">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Logo -->
                <header class="navbar px-0 pb-4 mt-n2 mt-sm-0 mb-2 mb-md-3 mb-lg-4">
                    <x-application-logo />
                </header>

                {{ $slot }}

                <!-- Divider -->
                <div class="d-flex align-items-center my-4">
                    <hr class="w-100 m-0">
                    <span class="text-body-emphasis fw-medium text-nowrap mx-4">or continue with</span>
                    <hr class="w-100 m-0">
                </div>

                <!-- Social login -->
                <div class="d-flex flex-column flex-sm-row gap-3 pb-4 mb-3 mb-lg-4">
                    <button type="button" class="btn btn-lg btn-outline-secondary w-100 px-2">
                        <i class="fi-google ms-1 me-1"></i>
                        Google
                    </button>
                    <button type="button" class="btn btn-lg btn-outline-secondary w-100 px-2">
                        <i class="fi-facebook ms-1 me-1"></i>
                        Facebook
                    </button>
                </div>

                <!-- Footer -->
                <footer class="mt-auto">
                    <p class="fs-xs mb-0">
                        Copyrights © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                    </p>
                </footer>
            </div>

            <div class="d-none d-lg-block w-100 py-4 ms-auto" style="max-width: 1034px">
                <div class="d-flex flex-column justify-content-end h-100 bg-info-subtle rounded-5">
                    <div class="ratio" style="--fn-aspect-ratio: calc(1030 / 1032 * 100%)">
                        <img src="assets/img/account/account-cover.png" alt="Girl">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Bootstrap + Theme scripts -->
    <script src="assets/js/theme.min.js"></script>
</body>

</html>
