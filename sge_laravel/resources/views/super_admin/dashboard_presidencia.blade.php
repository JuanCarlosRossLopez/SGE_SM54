@extends('test.test_template')
@section('titulo')
    Panel de control dirección
@endsection
@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <label>Dashboard dirección</label>
            <label>
                <!-- mostrar graficas relevantes -->
                <!-- cambiar icono -->
                <i class="fa-solid fa-crown"></i>
            </label>
        </div>
        <div class=" conteiner_cards">
            <div class="conteiner_cards flex flex-col w-fit">

                <!--acciones varias-->
                <div class="content_conteiner w-fit h-fit">
                    <label class="conteiner_word_title flex flex-col items-center">Acciones varias</label>
                    <div class="conteiner_cards">
                        <!-- Panel 1 -->
                        <div class="bg-white p-3 rounded">
                            <div class="w-[15rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-lg text-start w-full">Asesores</label>
                                <div class="relative dropdown-trigger">
                                    <button class="dropdown-btn w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="hidden absolute bg-white border border-gray-200 mt-2 py-2 rounded w-48 z-10 dropdown-content">
                                        <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División de Turismo</a>
                                        <a  href="/maestros" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División de Ingeniería y Tecnología</a>
                                        <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División Económico-Administrativo</a>
                                        <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">División de Gastronomía</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="font-normal font-poppins text-base text-start w-full">Mas información</label>
                            </div>
                            <div class="flex flex-row items-center justify-start font-bold text-gray-400 text-[13px] gap-2">
                                <i class="fa-regular fa-clock"></i><label>Hace 3hrs</label>
                            </div>
                        </div>

                        <!-- Panel 2 -->
                        <div class="bg-white p-3 rounded">
                            <div class="w-[15rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-lg text-start w-full">Proyectos aprobados</label>
                                <button class="w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full "><i
                                        class="fa-solid fa-ellipsis-vertical"></i></button>
                            </div>
                            <div>
                                <label class="font-normal font-poppins text-base text-start w-full">Mas información</label>
                            </div>
                            <div class="flex flex-row items-center justify-start font-bold text-gray-400 text-[13px] gap-2">
                                <i class="fa-regular fa-clock"></i><label>Hace 3hrs</label>
                            </div>
                        </div>
                        <!-- Panel 3 -->
                        <div class="bg-white p-3 rounded">
                            <div class="w-[15rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-lg text-start w-full">Proyectos finalizados </label>
                                <button class="w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full "><i
                                        class="fa-solid fa-ellipsis-vertical"></i></button>
                            </div>
                            <div>
                                <label class="font-normal font-poppins text-base text-start w-full">Mas información</label>
                            </div>
                            <div class="flex flex-row items-center justify-start font-bold text-gray-400 text-[13px] gap-2">
                                <i class="fa-regular fa-clock"></i><label>Hace 3hrs</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!--termina acciones varias-->

                <!--grafica de cedulas de anteproyecto-->
                <div class="content_conteiner gap-0 w-full h-fit">
                    <label class="conteiner_word_title w-full flex flex-col items-center">Graficas</label>
                    <div class="conteiner_cards w-full">
                        <!-- Panel 1 -->
                        <div class=" flex flex-col gap-3">
                            <div class="bg-white w-[34rem] rounded">
                                <div class="line-chart-container">
                                    <h1 class="uppercase">Gráfica de alumnos por grupo</h1>
                                    <canvas id="line-chart2"></canvas>
                                </div>
                            </div>
                            <div class="bg-white w-[34rem] rounded">
                                <div class="line-chart-container">
                                    <h1 class="uppercase">Gráficas de cedulas de anteproyectos</h1>
                                    <canvas id="line-chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-[15rem]">
                        <div class="bg-white w-fit h-fit p-3 rounded">
                            <div class="w-[15rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-base text-start w-full">Información relevante</label>
                                <button class="w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full "><i
                                        class="fa-solid fa-ellipsis-vertical"></i></button>
                            </div>
                            <div>
                                <label class="font-normal font-poppins text-sm text-start w-full">Descripciones</label>
                            </div>
                        </div>
                        <div class="bg-white w-fit h-fit p-3 rounded">
                            <div class="w-[15rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-base text-start w-full">Información relevante</label>
                                <button class="w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full "><i
                                        class="fa-solid fa-ellipsis-vertical"></i></button>
                            </div>
                            <div>
                                <label class="font-normal font-poppins text-sm text-start w-full">Descripciones</label>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!--termina grafica-->
            </div>


            <div class="content_conteiner h-fit p-1 w-fit ml-[-2.5rem]">
                <div class="flex flex-col gap-1">
                    <label class="conteiner_word_title  h-fit flex flex-col items-center">¿Qué más?</label>
                    <div class="bg-white p-3 rounded">
                        <div class="w-[16rem] text-center flex flex-row items-center">
                            <label class=" font-semibold font-poppins text-base text-start w-full ">Historial de memorias</label>
                            <button  class="w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full "><i
                                    class="fa-solid fa-ellipsis-vertical" ></i></button>
                                    
                        </div>
                        <div>
                            <label class="font-normal font-poppins text-sm text-start w-full">Visualizacion de historial</label>
                        </div>
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


    


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/line-chart.js') }}"></script>
    <script src="{{ asset('js/line-chart2.js') }}"></script>

   
    <script>
        // Desplaza automáticamente hacia abajo al cargar la página
        window.onload = function() {
            var container = document.querySelector('.content_conteiner');
            container.scrollTop = container.scrollHeight;
        };
    </script>
@endsection
<!-- mostrar graficas relevantes -->
<!-- cambiar icono -->
