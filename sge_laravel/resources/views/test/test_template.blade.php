<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                    <img src="{{ asset('image/SGE_BLANCO_150px.svg') }}" alt="Login Image" class="cursor-pointer p-[0.75rem] " onclick="location.href='#'">
                </a>
                <ul class="flex flex-col justify-between">

                    <div>
                        <!--Linea de separación atte: guayabo -->
                        <p class="border-top opacity-60"></p>
                        <li>
                            <button class="buttons_sidebar " onclick="location.href='/dashboard_alumno'">
                                <i class="fa-solid fa-school"></i></i>
                                Inicio
                            </button>
                        </li>
                        <li>
                            <button class="buttons_sidebar " onclick="location.href='/anteproyecto'">
                                <i class="fa-solid fa-school"></i></i>
                                Gestión de Anteproyectos
                            </button>
                        </li>

                        <li>
                            <a href="/usuarios" class="buttons_sidebar ">
                                <i class="fa-solid fa-school"></i>
                                Usuarios
                            </a>
                        </li>

                        <li>
                            <a href="/alumnos_asesorados" class="buttons_sidebar">
                                <i class="fa-solid fa-users-line"></i>
                                Alumnos asesorados
                            </a>
                        </li>
                        <li>
                            <a href="/dashboard_asesor" class="buttons_sidebar">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                Inicio Asesor
                            </a>
                        </li>
                        <li>
                            <a href="/panel_admin" class="buttons_sidebar">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                Inicio Admin
                            </a>
                        </li>
                        <li>
                            <a href="/Dashboard_Direccion" class="buttons_sidebar">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                Inicio Dirección
                            </a>
                        </li>
                        <li>
                            <a href="/dashboard_coordinacion" class="buttons_sidebar">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                Inicio coordinación
                            </a>
                        </li>
                        <li>
                            <a href="/dashboard-presidencial" class="buttons_sidebar ">
                                <i class="fa-solid fa-school"></i>
                                Inicio Presidente
                            </a>
                        </li>
                        <li>
                            <a href="/historial-memorias" class="buttons_sidebar">
                                <i class="fa-solid fa-landmark"></i>
                                Historial de memorias
                            </a>
                        </li>
                        <li>
                            <a href="/informes" class="buttons_sidebar ">
                                <i class="fa-solid fa-file"></i> Generacion de informes
                            </a>
                        </li>
                        <li>
                            <a href='/Perfil_Estudiante' class="buttons_sidebar">
                                <i class="fa-solid fa-address-card"></i>
                                Mi perfil
                            </a>

                        </li>
                        <li>
                            <a class="buttons_sidebar" href="/roles">
                                <i class="fa-solid fa-cog "></i>
                                Asignación de roles
                            </a>
                        </li>
                    </div>
                </ul>
            </div>
            <div>
                <!--Linea de separación atte: guayabo -->
                <p class="border-top opacity-60"></p>
                <button class="logout_sidebar buttons_sidebar">
                    <i class="fa-solid fa-right-from-bracket "></i>
                    Cerrar sesión
                </button>
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
        <footer class="footer">
            <div>
                <p class="text-gray-700">Copyright Universidad Tecnológica de Cancún © 2024</p>
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