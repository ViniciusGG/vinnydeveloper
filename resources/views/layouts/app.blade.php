<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Vinicius Goulart Gouveia - Desenvolvedor Full Stack</title>
    <link rel="icon" href="{{ asset('storage/images/favicon.ico') }}" type="image/x-icon">

    <!-- Open Graph -->
    <meta property="og:title" content="Vinicius Goulart Gouveia - Desenvolvedor Full Stack">
    <meta property="og:description" content="Portfólio oficial de Vinicius Goulart Gouveia — Desenvolvedor Full Stack.">
    <meta property="og:image" content="{{ asset('storage/images/preview.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Vinicius Goulart Gouveia - Desenvolvedor Full Stack">
    <meta name="twitter:description" content="Portfólio oficial de Vinicius Goulart Gouveia — Desenvolvedor Full Stack.">
    <meta name="twitter:image" content="{{ asset('storage/images/preview.png') }}">

    @yield('meta')
    {{-- Use Vite-built assets (includes Tailwind) --}}
    @if (app()->environment('local'))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        {{-- In production, still reference the built assets via Vite helper --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-football-dark text-white font-roboto">
    <main class="w-full max-w-screen m-auto">
        @yield('content')
    </main>
</body>
</html>