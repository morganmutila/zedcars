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

                <!-- Account profile content -->
                <div class="col-lg-10 ps-lg-5">
                    <h1 class="h2 pb-2 pb-lg-3">My profile</h1>
                    <section class="row g-3 g-xl-4 pb-5 mb-md-3">
                        <div class="col-12">
                            {{ $slot }}
                        </div>
                    </section>

                    <!-- Account progress -->
                    <section class="row g-3 g-xl-4 pb-5 mb-md-3">

                        <div class="col-12">
                            <div class="card bg-warning-subtle border-0 h-100">
                                <div class="card-body d-flex align-items-center">
                                    <div class="circular-progress text-warning flex-shrink-0 ms-n2 ms-sm-0"
                                        role="progressbar" style="--fn-progress: 65" aria-label="Warning progress"
                                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                        <svg class="progress-circle">
                                            <circle class="progress-background d-none-dark" r="0" style="stroke: #fff">
                                            </circle>
                                            <circle class="progress-background d-none d-block-dark" r="0"
                                                style="stroke: rgba(255,255,255, .1)"></circle>
                                            <circle class="progress-bar" r="0"></circle>
                                        </svg>
                                        <h5 class="position-absolute top-50 start-50 translate-middle text-center mb-0">
                                            65%</h5>
                                    </div>
                                    <div class="ps-3 ps-sm-4">
                                        <h3 class="h6 pb-1 mb-2">Complete your profile</h3>
                                        <ul class="list-unstyled fs-sm mb-0">
                                            <li class="d-flex">
                                                <i class="fi-plus fs-base me-2" style="margin-top: .1875rem"></i>
                                                Add the languages you speak
                                            </li>
                                            <li class="d-flex">
                                                <i class="fi-plus fs-base me-2" style="margin-top: .1875rem"></i>
                                                Verify your email
                                            </li>
                                            <li class="d-flex">
                                                <i class="fi-plus fs-base me-2" style="margin-top: .1875rem"></i>
                                                Add date of birth
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <!-- User info -->
                    <section class="pb-5 mb-md-3">
                        <div class="ratio ratio-1x1 bg-body-tertiary border rounded-circle overflow-hidden mb-3 mb-md-4"
                            style="width: 124px">
                            <img src="assets/img/account/avatar-lg.jpg" alt="Avatar">
                        </div>
                        <h2 class="h5 pb-1 pb-sm-0 mb-2 mb-sm-3">Michael Williams</h2>
                        <ul class="list-unstyled flex-row flex-wrap gap-sm-3 fs-sm mb-3">
                            <li class="d-flex align-items-center me-2">
                                <i class="fi-mail fs-base me-2"></i>
                                m.williams@example.com
                            </li>
                            <li class="d-flex align-items-center me-2">
                                <i class="fi-phone fs-base me-2"></i>
                                (212) 555-7890
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="fi-map-pin fs-base me-2"></i>
                                New York, Brooklyn
                            </li>
                        </ul>
                        <p class="fs-sm pb-sm-1 pb-md-0 mb-md-4">Extensive experience in rentals and a vast database
                            means I can quickly find the options that are right for you. Looking for a seamless and
                            exciting rental experience? Contact me today - I promise it won't be boring! Your
                            perfect
                            home is just a call away.</p>
                        <a class="btn btn-outline-secondary" href="account-settings.html">Edit profile</a>
                    </section>

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
