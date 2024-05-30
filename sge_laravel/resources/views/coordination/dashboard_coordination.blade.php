@extends('test.final_template')
@section('title')
    Panel de control coordinación
@endsection
@section('contenido')
    <div class="back_conteiner">
        <div class="conteiner_cards justify-center flex flex-row">
            <div class="conteiner_cards1 flex flex-col w-3/4">

                <!-- Contenedor para cards de acciones -->
                <div class="conteiner_card">
                    <!-- INICIO CARD DISEÑADA -->
                    <div class="item-1">
                        <div class="card">
                            <div class="flex p-2 bg-[#F1F0F0] rounded-lg h-full items-center">
                                <label class="text-[#489F8F] p-1  text-5xl"><i class="fa-solid fa-file-pen"></i></label>
                            </div>
                            <div class="">
                                <h1></h1>
                                <div class="flex flex-col gap-1 mt-[20px]">
                                    <a href="/informes" class="buttons_card_blue">Ir a Generación de Informes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FINAL CARD DISEÑADA -->
                    <!-- INICIO CARD DISEÑADA -->
                    <div class="item-1">
                        <div class="card">
                            <div class="flex p-2 bg-[#F1F0F0] rounded-lg h-full items-center">
                                <label class="text-[#489F8F] p-1  text-5xl"><i class="fa-solid fa-file-pen"></i></label>
                            </div>
                            <div class="">
                                <h1></h1>
                                <div class="flex flex-col gap-1 mt-[20px]">
                                    <a href="/gestion_libros" class="buttons_card_blue">Ir a Gestion de libros</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FINAL CARD DISEÑADA -->
                    <!-- INICIO CARD DISEÑADA -->
                    <div class="item-1">
                        <div class="card">
                            <div class="flex p-2 bg-[#F1F0F0] rounded-lg h-full items-center">
                                <label class="text-[#489F8F] p-1  text-5xl"><i class="fa-solid fa-file-pen"></i></label>
                            </div>
                            <div class="">
                                <h1></h1>
                                <div class="flex flex-col gap-1 mt-[20px]">
                                    <a href="/libros" class="buttons_card_blue">Ir a Libros</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FINAL CARD DISEÑADA -->
                </div>
            </div>

            <div class="w-1/5 h-fit gap-0 flex flex-col">
                <div class="content_conteiner h-fit p-2 card flex justify-center">
                    <div class="flex flex-col gap-2 items-center">
                        <a href="/historial_de_memorias" class="buttons_card_green">
                            <i class="fi fi-sr-memo-circle-check flex"></i><button> Ver memorias
                                finalizadas</button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class=" ml-[30px]">
            <div class="flex flex-wrap"> <!-- Contenedor principal con flexbox y wrap para alinear los elementos -->
                <!-- Grafica 1 -->
                <div class="content_container  h-fit p-1 w-fit md:ml-0 sm:ml-0 mb-4 mt-10">
                    <!-- Aquí ajusté el margen izquierdo y añadí margen inferior -->
                    <label class="container_word_title w-full flex flex-col items-center"></label>
                    <div class="container_cards w-full items-center">
                        <!-- Panel 1 -->
                        <div class="bg-black rounded">
                            <div class="line-chart-container text-center items-center">
                                <h1>AVANCE DE LOS ALUMNOS</h1>
                                <canvas id="myChart" width="1200" height="590"></canvas>
                            </div>
                        </div>

                        <div class="bg-black rounded">
                            <div class="line-chart-container text-center items-center">
                                <h1>Alumnos por Grupo</h1>
                                <canvas id="MYChartA" width="1200" height="590"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Grafica 2 -->
                <div class="p-4 ml-[70px]">
                    <div class="content_container h-fit p-1 w-fit md:ml-0 sm:ml-0 mb-4">
                        <!-- Aquí ajusté el margen izquierdo y añadí margen inferior -->
                        <div class="flex flex-col gap-1">
                            <label class="container_word_title h-fit flex flex-col items-center">Progresos</label>
        
                            <div class="bg-white p-3 rounded">
                                <div class="flex flex-col items-center">
                                    <div class="progress-item ml-[20px]">
                                        <label class="font-semibold font-poppins text-base">PROGRESO ANTEPROYECTOS</label>
                                        <svg width="190" height="190" class="progress-chart">
                                            <circle cx="85" cy="85" r="80" class="progress-back" fill="none">
                                            </circle>
                                            <circle cx="85" cy="85" r="80" class="progress-front1" fill="none"
                                                stroke-dasharray="0 1000000"></circle>
                                            <g class="progress-text">
                                                <text x="92" y="88" alignment-baseline="middle" text-anchor="middle"
                                                    id="percentage1">0%</text>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
        
                            <div class="bg-white p-3 rounded mt-4">
                                <div class="flex flex-col items-center">
                                    <div class="progress-item">
                                        <label class="font-semibold font-poppins text-base">ESTADÍAS FINALIZADAS</label>
                                        <svg width="190" height="190" class="progress-chart">
                                            <circle cx="85" cy="85" r="80" class="progress-back" fill="none">
                                            </circle>
                                            <circle cx="85" cy="85" r="80" class="progress-front2" fill="none"
                                                stroke-dasharray="0 1000000"></circle>
                                            <g class="progress-text">
                                                <text x="92" y="88" alignment-baseline="middle" text-anchor="middle"
                                                    id="percentage2">0%</text>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
        
        
        
        
        
        
                        </div>
                </div>
    
                </div>
        </div>
        </div>
        <script src="{{ asset('js/progress.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="{{ asset('js/line-chart.js') }}"></script>
        <script src="{{ asset('js/line-chart6.js') }}"></script>


        <script src="{{ asset('js/progress.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="{{ asset('js/line-chart.js') }}"></script>
        <script src="{{ asset('js/line-chart6.js') }}"></script>


        <script>
            const libro = document.querySelector('.libro');
            const verLibro = document.querySelector('.verLibro');
            const closeLibro = document.querySelectorAll('.close-Libro');

            verLibro.addEventListener('click', function() {
                libro.classList.remove('hidden')
            });

            closeLibro.forEach(close => {
                close.addEventListener('click', function() {
                    libro.classList.add('hidden')
                });
            });
        </script>

        <script>
            // Desplaza automáticamente hacia abajo al cargar la página
            window.onload = function() {
                var container = document.querySelector('.content_conteiner');
                container.scrollTop = container.scrollHeight;
            };
        </script>
        {{-- <div class="agregar h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-[550px] rounded-xl shadow-lg max-w-4xl">
            <div class="border-b px-4 py-2 flex justify-content-end">
                <button class="close-agregar">
                    <p class="text-2xl"><i class="fa-solid bg-white rounded-full fa-circle-xmark items-end"
                            style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2 rounded-b-xl">
                <div class="modal-body mb-0 overflow-y-auto ml-4 h-auto">
                    <h4 class="text-black text-center text-2xl font-bold">Subir archivo</h4>
                    <div class=" my-2">
                        <label class=" block text-gray-700 font-semibold">Usuario</label>
                        <input class="w-full px-4 py-2 border rounded-md  focus:border-blue-500 pr-10">
                    </div>
                    <label class=" block text-gray-700 font-semibold">Adjuntar documento</label>
                    <div class="flex items-center justify-center w-[500px]">
                        <label for="dropzone-file"
                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 ">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Dale
                                        click para subir el archivo</span> o arrastra y suelta</p>
                                </p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" />
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <button type="button"
                            class="close-agregar ver-Check flex justify-center gap-2 bg-[#01A080] text-[#F6F6F6] mt-4 font-bold cursor-pointer text-center rounded-[5px] border-none p-[8px] hover:bg-[#DFDFDF] ">
                            Enviar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Modal-->
    <div class=" check h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded-2xl shadow-lg max-w-[300px]">
            <div class="border-b px-4 py-2 flex justify-content-end">
                <button class="close-Check">
                    <p class="text-2xl"><i class="fa-solid bg-white rounded-full fa-circle-xmark items-end  "
                            style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2 rounded-b-2xl">
                <div class="modal-body mb-0 overflow-y-auto h-[190px]">
                    <h4 class="text-black text-center mt-3 text-2xl font-bold">¡El archivo ha sido enviado
                        correctamente!
                    </h4>
                    <div class=" flex justify-center">
                        <img src="{!! asset('img/check.png') !!}" class="w-[50px] h-[50px] items-center mt-[20px]">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    @endsection
