<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Coming Soon - Vinicius Goulart Gouveia</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 text-white flex items-center justify-center min-h-screen">

        <!-- Main Content -->
        <div class="relative z-10 text-center px-6">
            <div class="max-w-3xl mx-auto">
                <h1 class="text-5xl md:text-7xl font-bold pb-4 bg-gradient-to-r from-purple-400 via-pink-400 to-yellow-400 bg-clip-text text-transparent">
                    Coming Soon
                </h1>
                <h2 class="text-xl md:text-2xl text-gray-300">
                    Vinicius Goulart Gouveia
                </h2>
                </div>
        </div>


        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
