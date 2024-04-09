<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    @vite('resources/css/guayabo.css')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/font.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/progress.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="w-screen overflow-x-hidden background">
    <div class="w-screen flex">
        <div class="sidebar_background flex">
            <div>
                <a>
                    <img src="{{ asset('image/SGE_BLANCO_150px.svg') }}" alt="Login Image"
                        class="cursor-pointer p-[0.75rem] " onclick="location.href='#'">
                </a>
                <ul class="flex flex-col justify-between">

                    <div>
                        <!--Linea de separación atte: guayabo -->
                        <p class="border-top opacity-60"></p>

                        <!-- Todo en lo que navega el asesor -->
                        @role('Asesor')
                            <li>
                                <a href="/dashboard_asesor" class="buttons_sidebar">
                                    <i class="fa-solid fa-chalkboard-user"></i>
                                    Inicio
                                </a>
                            </li>
                        @endrole
                        @role('Asesor')
                            <li>
                                <a href="/mis_asesorados" class="buttons_sidebar">
                                    <i class="fa-solid fa-users-line"></i>
                                    Alumnos asesorados
                                </a>
                            </li>
                        @endrole
                        @role('Asesor')
                            <li>
                                <a href="/historial_de_memorias" class="buttons_sidebar">
                                    <i class="fa-solid fa-landmark"></i>
                                    Historial de memorias
                                </a>
                            </li>
                        @endrole

                        @role('Asesor')
                            <li>
                                <a href="/informes" class="buttons_sidebar ">
                                    <i class="fa-solid fa-file"></i> Generacion de informes
                                </a>
                            </li>
                        @endrole

                        @role('Asesor')
                            <li>
                                <a href="/profile" class="buttons_sidebar ">
                                    <i class="fa-solid fa-address-card"></i> Mi perfil
                                </a>
                            </li>
                        @endrole
                        <!-- End todo en lo que navega el asesor -->

                        <!-- Todo lo que navega el estudiante -->
                        @role('Estudiante')
                            <li>
                                <button class="buttons_sidebar " onclick="location.href='/dashboard_alumno'">
                                    <i class="fa-solid fa-school"></i></i>
                                    Inicio
                                </button>
                            </li>
                        @endrole
                        @role('Estudiante')
                            <li>
                                <a href="/descarga" class="buttons_sidebar ">
                                    <i class="fa-solid fa-file"></i> Descargar mis informes
                                </a>
                            </li>
                        @endrole
                        @role('Estudiante')
                            <li>
                                <a href="/profile" class="buttons_sidebar ">
                                    <i class="fa-solid fa-address-card"></i> Mi perfil
                                </a>
                            </li>
                        @endrole

                        <!--
                            No lo vi necesario, porque regresariamos a crearlo?
                            @role('Estudiante')
    <li>
                                                <button class="buttons_sidebar " onclick="location.href='/anteproyecto'">
                                                    <i class="fa-solid fa-school"></i></i>Gestión de Anteproyectos
                                                </button>
                                            </li>
@endrole
                            -->
                        <!-- End todo lo que navega el estudiante -->

                        <!-- Todo lo que el administrador puede navegar-->
                        @role('Administrador')
                            <li>
                                <a href="/dashboard" class="buttons_sidebar">
                                    <i class="fa-solid fa-chalkboard-user"></i>
                                    Inicio
                                </a>
                            </li>
                        @endrole
                        @role('Administrador')
                            <li>
                                <a href="/usuarios" class="buttons_sidebar ">
                                    <i class="fa-solid fa-users-gear"></i>
                                    Usuarios
                                </a>
                            </li>
                        @endrole
                        
                        <!--END Todo lo que el administrador puede navegar-->


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

                        @role('Cordinacion')
                            <li>
                                <a href="/informes" class="buttons_sidebar ">
                                    <i class="fa-solid fa-file"></i> Generacion de informes
                                </a>
                            </li>
                        @endrole

                    </div>
                </ul>
            </div>
        </div>

        <div class="content_main_footer h-screen overflow-y-auto overflow-x-hidden">
            <div class="w-full p-3 bg-[#1f2e39]">
                <div class="w-full flex justify-between items-center">
                    <div class="text-white text-2xl flex flex-col">
                        @if (Auth::user()->teachers)
                            <label class="text-3xl text-[#d7d7d7]">Buen día,
                                {{ Auth::user()->teachers->name_teacher }}</label>
                            <label class="text-xl text-[#a8a8a8]">Gestión asesor</label>
                        @elseif (Auth::user()->student)
                            <label class="text-3xl text-[#d7d7d7]">Buen día,
                                {{ Auth::user()->student->student_name }}</label>
                            <label class="text-xl text-[#a8a8a8]">Gestión estudiante</label>
                        @elseif (Auth::user()->hasRole('Administrador'))
                            <label class="text-3xl text-[#d7d7d7]">Buen día,
                                {{ Auth::user()->name }}</label>
                            <label class="text-xl text-[#a8a8a8]">Gestión super administrador</label>
                        @else
                            No se encontró información del asesor para este usuario.
                        @endif
                    </div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="logout_sidebar buttons_sidebar_logout bg-[#2C4454] p-2">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            Cerrar sesión
                        </button>
                    </form>
                </div>
            </div>
            <div class="content_main_footer h-screen">
                <main class="w-full">
                    @yield('contenido')
                </main>
                <footer class="footer">
                    <label>Copyright Universidad Tecnológica de Cancún © 2024</label>
                </footer>
            </div>
        </div>
    </div>



</body>

<!--Icons - realmente estos fueron que mas me convencieron atte: guayabo -->
<script src="https://kit.fontawesome.com/61439499b0.js" crossorigin="anonymous"></script>

</html>
