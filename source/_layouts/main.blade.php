<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <title>{{ $page->title }}</title>
    <meta name="description" content="{{ $page->description }}">
    <link rel="manifest" href="/site.webmanifest">
    <meta property="og:title" content="{{ $page->title }}">
    <meta property="og:description" content="{{ $page->description }}">
    <meta property="og:image" content="{{ $page->baseUrl }}/assets/images/social.jpg">
    <meta property="og:url" content="{{ $page->baseUrl }}">
    <meta property="og:locale" content="en_US" />
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
</head>
<body class="text-gray-900 dark:text-gray-300 bg-white dark:bg-slate-800 font-sans min-h-screen antialiased">
    @include('_partials.header')

    @yield('precontent')

    <div class="mx-auto max-w-7xl px-8">
        @yield('content')
    </div>

    @yield('postcontent')

    @include('_partials.footer')
    <!-- <script src="https://kit.fontawesome.com/044913a2f1.js" crossorigin="anonymous"></script> -->
    @stack('scripts')
</body>
</html>