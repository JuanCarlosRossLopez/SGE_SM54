<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        
    </head>
    <body class="">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
                <div class="sm:fixed sm:top-0 sm:right-0 p-4 text-right z-10 bg-[#01A080] w-full">
                    
                        <a href="/login" class="font-semibold  dark:text-gray-300 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Iniciar sesión</a>
                </div>
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <img src="{{ asset('image/SGE_COLOR.svg') }}" alt="Login Image" class="">
                </div>
            </div>
            <div class="max-w-7xl mx-auto p-6 lg:p-8 flex flex-col items-center">
                <h1>Explicación sobre que es SGE</h1>
                <h1>Misión, visión valores</h1>
            </div>
        </div>
    </body>
</html>
