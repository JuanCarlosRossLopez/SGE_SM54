<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <script src="/js/app.js"></script>
</head>

<body class="w-screen flex flex-col">
        <!--aberracion de front pero sirve atte: jotomar -->
        <footer class="absolute bottom-0 left-7 inset-y-full inset-x-3/4">
            <div class="container">
                <p class="text-gray-700">Copyright Universidad Tecnológica de Cancún © 2024</p>
            </div>
        </footer>
    <div class="bg-[#2F4050] w-fit min-h-screen fixed flex items-start">
        <button class="text-gray-300 hover:text-white transition-all text-2xl w-fit" onclick="mostrarMenu()">
            <i class="fa-solid fa-bars p-2"></i>
        </button>
    </div>
    <div class="w-screen flex flex-row fixed" id="miDiv">
        <div class=" bg-[#2F4050] w-[20rem] h-screen flex flex-col justify-between">
            <div>
                <a href="/" class="text-white flex flex-row align-items-center p-3 pb-3 gap-2 hover:scale-105 transition-all">
                    <span class="text-4xl font-bold">SGE</span>
                    <span class="border-l-2 pl-2">Sistema de Gestión de Estadías.</span>
                </a>
                <ul class="flex flex-col justify-between">

                    <div>
                        <!--Linea de separación atte: guayabo -->
                        <p class="border-top opacity-60"></p>
                        <li>
                            <button class="buttons_sidebar text-[#c8c8c8] w-full flex flex-row align-items-center items-center gap-2 transition-all hover:bg-[#4D6781] hover:text-white hover:scale-110 hover:w-[96%]">
                                <i class="fa-solid fa-school"></i>
                                Inicio
                            </button>
                        </li>
                        <li>
                            <button class="buttons_sidebar text-start text-[#c8c8c8] w-full flex flex-row align-items-center items-center gap-2 transition-all hover:bg-[#4D6781] hover:text-white hover:scale-110 hover:w-[96%]">
                                <i class="fa-solid fa-note-sticky"></i>
                                Gestion de proyecto
                            </button>
                        </li>
                        <li>
                            <button class="buttons_sidebar text-[#c8c8c8] w-full flex flex-row align-items-center items-center gap-2 transition-all hover:bg-[#4D6781] hover:text-white hover:scale-110 hover:w-[96%]">
                                <i class="fa-solid fa-envelope"></i>
                                Notificaciones
                            </button>
                        </li>
                        <li>
                            <button class="buttons_sidebar text-[#c8c8c8] w-full flex flex-row align-items-center items-center gap-2 transition-all hover:bg-[#4D6781] hover:text-white hover:scale-110 hover:w-[96%]">
                                <i class="fa-solid fa-address-card"></i>
                                Mi perfil
                            </button>
                        </li>
                    </div>
                </ul>
            </div>
            <div>
                <!--Linea de separación atte: guayabo -->
                <p class="border-top opacity-60"></p>

                <button class="logout_sidebar justify-start align-items-center text-[#c8c8c8] hover:text-white flex flex-row gap-2 w-full hover:bg-[#4D6781]  mb-2 transition-all hover:scale-110 hover:w-[96%]">
                    <i class="fa-solid fa-right-from-bracket "></i>
                    Cerrar sesión
                </button>
            </div>

        </div>
        <div class="w-screen min-h-screen bg-black bg-opacity-50 flex items-center pl-2">
            <!--lo puse negro xq se ve mejor atte: jotomar -->
            <button class="text-black text-4xl hover:text-black hover:scale-125 transition-all" onclick="ocultarMenu()">
                <i class="fa-solid fa-angle-left"></i>
            </button>
        </div>
    </div>

    <main class="w-full pl-8">
        <div class="flex justify-left">
            <div class="w-full m-4">
                @yield('contenido')
            </div>
        </div>
    </main>
</body>

<!--Icons - realmente estos fueron que mas me convencieron atte: guayabo -->
<script src="https://kit.fontawesome.com/61439499b0.js" crossorigin="anonymous"></script>

</html>