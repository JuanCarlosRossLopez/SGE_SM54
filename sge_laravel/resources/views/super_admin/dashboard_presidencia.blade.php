@extends('test.test_template')
@section('title', 'Presidencia')
    ''
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
