<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/font.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/progress.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
</head>

<body class="w-full flex flex-col overflow-x-hidden">

    <div class="bg-[#2F4050] w-fit min-h-screen fixed flex items-start">
        <button class="text-gray-300 hover:text-white transition-all text-2xl w-fit" onclick="mostrarMenu()">
            <i class="fa-solid fa-bars p-2"></i>
        </button>
    </div>

    <div class="w-fit flex flex-row fixed" id="sidebar">
        <div class="bg-[#2F4050] fixed flex mr-auto">
            <!--lo puse negro xq se ve mejor atte: jotomar -->
            <button class="text-gray-300 w-full hover:text-white transition-all text-2xl" onclick="ocultarMenu()">
                <i class="fa-solid fa-bars p-2"></i>
            </button>
        </div>
        <div class="sidebar_background">
            <div>
                <a>
                    <img src="{{ asset('image/SGE_BLANCO_150px.svg') }}" alt="Login Image"
                        class="cursor-pointer p-[0.75rem] " onclick="location.href='#'">
                </a>
                <ul class="flex flex-col justify-between">

                    <div>
                        <!--Linea de separación atte: guayabo -->
                        <p class="border-top opacity-60"></p>
                        @role('Estudiante')
                            <li>
                                <button class="buttons_sidebar " onclick="location.href='/dashboard_alumno'">
                                    <i class="fa-solid fa-school"></i></i>
                                    Inicio
                                </button>
                            </li>
                        @endrole
                        
                    @role('Administrador')
                        <li>
                            <a href="/usuarios" class="buttons_sidebar ">
                                <i class="fa-solid fa-school"></i>
                                Usuarios
                            </a>
                        </li>
                    @endrole
                    @role('Asesor')
                        <li>
                            <a href="/dashboard_asesor" class="buttons_sidebar">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                Inicio Asesor
                            </a>
                        </li>
                    @endrole
                    @role('Asesor')
                        <li>
                            <a href="/alumnos_asesorados" class="buttons_sidebar">
                                <i class="fa-solid fa-users-line"></i>
                                Alumnos asesorados
                            </a>
                        </li>
                    @endrole
                    @role('Administrador')
                        <li>
                            <a href="/panel_admin" class="buttons_sidebar">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                Inicio Admin
                            </a>
                        </li>
                    @endrole
                    @role('Cordinacion')
                        <li>
                            <a href="/Dashboard_Direccion" class="buttons_sidebar">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                Inicio Dirección
                            </a>
                        </li>
                    @endrole
                    @role('Cordinacion')
                        <li>
                            <a href="/dashboard_coordinacion" class="buttons_sidebar">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                Inicio coordinación
                            </a>
                        </li>
                        @endrole
                        @role('Presidente')
                            <li>
                                <a href="/dashboard-presidencial" class="buttons_sidebar ">
                                    <i class="fa-solid fa-school"></i>
                                    Inicio Presidente
                                </a>
                            </li>
                        @endrole
                        <li>
                            <a href="/memory" class="buttons_sidebar">
                                <i class="fa-solid fa-landmark"></i>
                                Historial de memorias
                            </a>
                        </li>
                        @role('Cordinacion')
                        <li>
                            <a href="/informes" class="buttons_sidebar ">
                                <i class="fa-solid fa-file"></i> Generacion de informes
                            </a>
                        </li>
                        @endrole
                        <li>
                            <a href="/descarga" class="buttons_sidebar ">
                                <i class="fa-solid fa-file"></i> Descarga de informes
                            </a>
                        </li>
                        <li>
                            <a href='/profile' class="buttons_sidebar">
                                <i class="fa-solid fa-address-card"></i>
                                Mi perfil
                            </a>
                        </li>
                        
                            <li>
                                <a class="buttons_sidebar" href="/roles">
                                    <i class="fa-solid fa-cog "></i>
                                    Asignación de roles
                                </a>
                            <li>
                            <button class="buttons_sidebar " onclick="location.href='/coordinacion'">
                                <i class="fa-solid fa-school"></i></i>
                                Gestión de Coordinación
                            </button>
                        </li>
                        <a class="buttons_sidebar" href="estudiantes">
                            <i class="fa-solid fa-address-card "></i>
                            Estudiantes
                        </a>
                        </li>
                        @role('Estudiante')
                        <li>
                            <a class="buttons_sidebar" href="/libros">
                                <i class="bi bi-book-fill"></i>
                                Libros
                            </a>
                        <li>
                            @endrole
                    </div>
                </ul>
            </div>
            <div>
                <!-- Línea de separación -->
                <p class="border-top opacity-60"></p>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logout_sidebar buttons_sidebar">
                        <i class="fa-solid fa-right-from-bracket "></i>
                        Cerrar sesión
                    </button>
                </form>
            </div>

        </div>

    </div>

    <div class="content_main_footer" id="content_main_expand">
        <main class="main_collapse">
            <div class="flex justify-left">
                <div class="">
                    @yield('contenido')
                </div>
            </div>
        </main>
        <footer class="w-screen pl-12 bottom-0">
            <div>
            </div>
        </footer>
    </div>

</body>

<!--Icons - realmente estos fueron que mas me convencieron atte: guayabo -->
<script src="https://kit.fontawesome.com/61439499b0.js" crossorigin="anonymous"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        ocultarMenu()
    })

    function ocultarMenu() {
        var div = document.getElementById("sidebar")
        div.classList.add("hidden")

        var content = document.getElementById("content_main_expand")
        content.classList.add("main_expand")
        content.classList.remove("main_collapse")
    }

    function mostrarMenu() {
        var div = document.getElementById("sidebar")
        div.classList.remove("hidden")

        var content = document.getElementById("content_main_expand")
        content.classList.remove("main_expand")
        content.classList.add("main_collapse")
    }
</script>
</html>
