<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Vinicius Goulart Gouveia - Desenvolvedor Full Stack</title>
    <link rel="icon" href="{{ asset('storage/images/favicon.ico') }}" type="image/x-icon">
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