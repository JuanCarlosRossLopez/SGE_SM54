


@extends('test.test_template')
@section('title')
Panel de control administrador
@endsection
@section('contenido')

<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<div class="back_conteiner">
    <div class="top_conteiner">
    <label>Dashboard administrador, bienvenido {{ Auth::user()->name }}</label>
        <label>
            <!-- Este svg es el icono -->
            <i class="fa-solid fa-user-tie"></i>
        </label>
    </div>
    <div class=" conteiner_cards">
        <div class="conteiner_cards1 flex flex-col w-fit">
            <div class="content_conteiner w-fit h-fit">
                <label class="conteiner_word_title flex flex-col items-center">Acciones varias</label>
                <div class="conteiner_cards2 ">
                    <!-- Panel 1 -->

                    <div class="bg-white p-3 rounded">
                        <div class="w-[15rem] text-center flex flex-row items-center">
                            <label class="font-semibold font-poppins text-lg text-start w-full">Panel de Asesor</label>
                            <div class="relative dropdown-trigger">
                                <button class="dropdown-btn w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <div class="hidden absolute bg-white border border-gray-200 mt-2 py-2 rounded w-48 z-10 dropdown-content">
                                    <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División de Turismo</a>
                                    <a  href="/gestion_asesor_anteproyecto" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División de Ingeniería y Tecnología</a>
                                    <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División Económico-Administrativo</a>
                                    <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División de Gastronomía</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="font-normal font-poppins text-base text-start w-full">Información acerca de los asesores</label>
                        </div>
                        <div class="flex flex-row items-center justify-start font-bold text-gray-400 text-[13px] gap-2">
                        </div>
                    </div>



                    <!-- Panel 2 -->
                    <div class="bg-white p-3 rounded">
                        <div class="w-[15rem] text-center flex flex-row items-center">
                            <label class="font-semibold font-poppins text-lg text-start w-full">Panel de Estudiante</label>
                            <div class="relative dropdown-trigger">
                                <button class="dropdown-btn w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <div class="hidden absolute bg-white border border-gray-200 mt-2 py-2 rounded w-48 z-10 dropdown-content">
                                    <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División de Turismo</a>
                                    <a href="/estudiantes" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División de Ingeniería y Tecnología</a>
                                    <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División Económico-Administrativo</a>
                                    <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División de Gastronomía</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="font-normal font-poppins text-base text-start w-full">Información acerca de los Estudiantes</label>
                        </div>
                        <div class="flex flex-row items-center justify-start font-bold text-gray-400 text-[13px] gap-2">
                        </div>
                    </div>
                    <!-- Panel 2 -->


                    <div class="bg-white p-3 rounded">
                        <div class="w-[15rem] text-center flex flex-row items-center">
                            <label class="font-semibold font-poppins text-lg text-start w-full">Panel de Presidencia</label>
                            <div class="relative dropdown-trigger">
                                <button class="dropdown-btn w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <div class="hidden absolute bg-white border border-gray-200 mt-2 py-2 rounded w-48 z-10 dropdown-content">
                                    <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División de Turismo</a>
                                    <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División de Ingeniería y Tecnología</a>
                                    <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División Económico-Administrativo</a>
                                    <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División de Gastronomía</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="font-normal font-poppins text-base text-start w-full">Información acerca de los Presidentes</label>
                        </div>
                        <div class="flex flex-row items-center justify-start font-bold text-gray-400 text-[13px] gap-2">
                        </div>
                    </div>


                    <!-- Panel 3 -->
                    <div class="bg-white p-3 rounded">
                        <div class="w-[15rem] text-center flex flex-row items-center">
                            <label class="font-semibold font-poppins text-lg text-start w-full">Panel de Cordinación</label>
                            <div class="relative dropdown-trigger">
                                <button class="dropdown-btn w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <div class="hidden absolute bg-white border border-gray-200 mt-2 py-2 rounded w-48 z-10 dropdown-content">
                                    <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División de Turismo</a>
                                    <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División de Ingeniería y Tecnología</a>
                                    <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División Económico-Administrativo</a>
                                    <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División de Gastronomía</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="font-normal font-poppins text-base text-start w-full">Información acerca de <br>
                                la Cordinación Academica</label>
                        </div>
                        <div class="flex flex-row items-center justify-start font-bold text-gray-400 text-[13px] gap-2">
                        </div>
                    </div>

                    <div class="bg-white p-3 rounded">
                        <div class="w-[15rem] text-center flex flex-row items-center">
                            <label class="font-semibold font-poppins text-lg text-start w-full">Panel de Usuarios</label>
                            <div class="relative dropdown-trigger">
                                <button class="dropdown-btn w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <div class="hidden absolute bg-white border border-gray-200 mt-2 py-2 rounded w-48 z-10 dropdown-content">
                                    <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División de Turismo</a>
                                    <a href="usuarios" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División de Ingeniería y Tecnología</a>
                                    <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División Económico-Administrativo</a>
                                    <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División de Gastronomía</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="font-normal font-poppins text-base text-start w-full">Información acerca de Usuarios</label>
                        </div>
                        <div class="flex flex-row items-center justify-start font-bold text-gray-400 text-[13px] gap-2">
                        </div>
                    </div>
                    <!-- Panel 3 -->
                    <div class="bg-white p-3 rounded">
                        <div class="w-[15rem] text-center flex flex-row items-center">
                            <label class="font-semibold font-poppins text-lg text-start w-full">Panel de Aspirante</label>
                            <div class="relative dropdown-trigger">
                                <button class="dropdown-btn w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <div class="hidden absolute bg-white border border-gray-200 mt-2 py-2 rounded w-48 z-10 dropdown-content">
                                    <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División de Turismo</a>
                                    <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División de Ingeniería y Tecnología</a>
                                    <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División Económico-Administrativo</a>
                                    <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División de Gastronomía</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="font-normal font-poppins text-base text-start w-full">Información acerca Aspirantes</label>
                        </div>
                        <div class="flex flex-row items-center justify-start font-bold text-gray-400 text-[13px] gap-2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_conteiner gap-0 w-full h-fit">
                <label class="conteiner_word_title w-full flex flex-col items-center">Graficas</label>
                <div class="conteiner_cards w-full">
                    <!-- Panel 1 -->
                    <div class="bg-white w-[34rem] rounded">
                        <div class="line-chart-container">
                            <h1>AVANCE DE LOS ALUMNOS</h1>
                            <canvas id="line-chart"></canvas>
                        </div>
                    </div>
                    <div class="bg-white w-[34rem] h-auto p-3 rounded">
                        <div class="">
                            <canvas id="bar-chart"></canvas>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <style>

            
        
        </style>
        <div class="content_conteiner h-fit p-1 w-fit md:ml-[-2.5rem] sm:ml-0">
            <style>
                .card_more{
                    display: flex;
                    flex-direction: column;
                    @media screen and (max-width: 1600px){

                        flex-direction: row;
                    }
                }
            </style>
            <div class=" gap-1 card_more ">
                <label class="conteiner_word_title  h-fit flex flex-col   items-center">Admin</label>
                <div class="bg-white p-3 rounded">
                    <div class="w-[15rem] text-center flex flex-row items-center">
                        <label class="font-semibold font-poppins text-base text-start w-full">Libros</label>
                        <div class="relative dropdown-trigger">
                            <button class="dropdown-btn w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>
                            <div class="hidden absolute bg-white border border-gray-200 mt-2 py-2 rounded w-48 z-10 dropdown-content">
                                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 text-xs">Ver</a>                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="font-normal font-poppins text-sm text-start w-full">Información de los Libros</label>
                    </div>
                    <div class="flex flex-row items-center justify-start font-bold text-gray-400 text-[13px] gap-2">
                    </div>
                </div>
                <div class="bg-white p-3 rounded">
                    <div class="w-[16rem] text-center flex flex-row items-center">
                        <label class="font-semibold font-poppins text-base text-start w-full">Anteproyectos</label>
                        <div class="relative dropdown-trigger">
                            <button class="dropdown-btn w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>
                            <div class="hidden absolute bg-white border border-gray-200 mt-2 py-2 rounded w-48 z-10 dropdown-content">
                                <a href="/gestion_asesor_anteproyecto" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 text-xs">Ver</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="font-normal font-poppins text-sm text-start w-full">Propuestas de anteproyecto</label>
                    </div>
                </div>

                <div class="bg-white p-3 rounded">
                    <div class="w-[16rem] text-center flex flex-row items-center">
                        <label class="font-semibold font-poppins text-base text-start w-full">Empresas</label>
                        <div class="relative dropdown-trigger">
                            <button class="dropdown-btn w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>
                            <div class="hidden absolute bg-white border border-gray-200 mt-2 py-2 rounded w-48 z-10 dropdown-content">
                                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 text-xs">Ver</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        
                        <label class="font-normal font-poppins text-sm text-start w-full">Informacion de empresas de
                            <br> vinculadas</label>
                    </div>
                </div>
                <div class="bg-white p-3 rounded">
                    <div class="w-[16rem] text-center flex flex-row items-center">
                        <label class="font-semibold font-poppins text-base text-start w-full">Roles</label>
                        <div class="relative dropdown-trigger">
                            <button class="dropdown-btn w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>
                            <div class="hidden absolute bg-white border border-gray-200 mt-2 py-2 rounded w-48 z-10 dropdown-content">
                                <a href="/roles" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 text-xs">Ver</a>
                            </div>
                        </div>
                    </div>
                        
                    <div>
                        <label class="font-normal font-poppins text-sm text-start w-full">Informacion de los roles de
                            <br>
                            usuario</label>
                    </div>
                </div>
                <div class="bg-white p-3 rounded">
                    <div class="w-[16rem] text-center flex flex-row items-center">
                        <label class="font-semibold font-poppins text-base text-start w-full">Carreras</label>
                        <div class="relative dropdown-trigger">
                            <button class="dropdown-btn w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>
                            <div class="hidden absolute bg-white border border-gray-200 mt-2 py-2 rounded w-48 z-10 dropdown-content">
                                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 text-xs">Ver</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="font-normal font-poppins text-sm text-start w-full">Informacion acerca de las carreras de
                            <br> ingeneria</label>

                    </div>
                </div>
            </div>


        </div>
    </div>






    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var dropdownTriggers = document.querySelectorAll(".dropdown-trigger");

            dropdownTriggers.forEach(function(dropdownTrigger) {
                var dropdownBtn = dropdownTrigger.querySelector(".dropdown-btn");
                var dropdownContent = dropdownTrigger.querySelector(".dropdown-content");

                dropdownBtn.addEventListener("click", function(event) {
                    event.stopPropagation(); // Evita que el evento de clic se propague al contenedor externo
                    dropdownContent.classList.toggle("hidden");
                });

                // Para cerrar el dropdown si se hace clic fuera de él
                window.addEventListener("click", function(event) {
                    if (!dropdownContent.contains(event.target) && !dropdownBtn.contains(event.target)) {
                        dropdownContent.classList.add("hidden");
                    }
                });
            });
        });
    </script>

</div>


<script src="{{ asset('js/progress.js') }}"></script>
<script src="{{ asset('js/alumnos_grafica_admin.js') }}"></script>

<script src="{{ asset('js/line-chart.js') }}"></script>
<s ript></script>
    <script>
        // Desplaza automáticamente hacia abajo al cargar la página
        window.onload = function() {
            var container = document.querySelector('.content_conteiner');
            container.scrollTop = container.scrollHeight;
        };
    </script>
    @endsection





    


