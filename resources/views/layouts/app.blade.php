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
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/choices.js/choices.min.css') }}">

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="{{ asset('assets/css/theme.min.css') }}" as="style">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" id="theme-styles">
</head>

<body>

    <!-- Navigation bar (Page header) -->
    <livewire:layout.header />


    <!-- Page content -->
    <main class="content-wrapper">
        {{ $slot }}
    </main>

    <!-- Page footer -->
    <x-app.footer />

    @if(!auth()->check())
        <div wire:ignore.self class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal"
        aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-md-down modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border border-bottom-0 align-items-center justify-content-center  text-center">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0">
                        <!-- Livewire Form -->
                        <livewire:modals.login-modal />
                    </div>
                    <div class="modal-footer align-items-center justify-content-center  text-center">
                    <!-- Footer -->
                    <footer class="mt-auto ">
                        <p class="fs-xs text-center mb-0">
                            Copyrights © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                        </p>
                    </footer>
                    </div>
                </div>
            </div>
        </div>

        <div wire:ignore.self class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal"
        aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-md-down modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border border-bottom-0 align-items-center justify-content-center  text-center">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0">
                        <!-- Livewire Form -->
                        <livewire:modals.register-modal />
                    </div>
                    <div class="modal-footer align-items-center justify-content-center  text-center">
                    <!-- Footer -->
                    <footer class="mt-auto ">
                        <p class="fs-xs text-center mb-0">
                            Copyrights © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                        </p>
                    </footer>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Vendor scripts -->
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/choices.js/choices.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/cleave.js/cleave.min.js') }}"></script>

    <script src="{{ asset('assets/js/theme.min.js') }}"></script>

    <script>
        document.addEventListener('livewire:navigated', () => {
            Livewire.on('closeModal', () => {
                const modalEl = document.getElementById('loginModal');
                const modal = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
                modal.hide();
            });

            Livewire.on('closeModal', () => {
                const modalEl = document.getElementById('registerModal');
                const modal = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
                modal.hide();
            });
        });
    </script>

</body>

</html>
