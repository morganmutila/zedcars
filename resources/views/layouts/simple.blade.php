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

<body class="bg-body-tertiary">

    {{ $slot }}

</body>

</html>
