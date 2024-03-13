@extends('test.test_template')
@section('titulo')
    Panel de control administrador
@endsection
@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <label>Dashboard Direccion</label>
            <label>
                <!-- Este svg es el icono -->
                <i class="fa-solid fa-user-tie"></i>
            </label>
        </div>
        <div class="conteiner_cards">
            <div class="conteiner_cards1 flex flex-col w-fit overflow-hidden-x">
                <div class="content_conteiner w-fit h-fit ">
                    <label class="conteiner_word_title flex flex-col items-center">Visualizacion de Informacion</label>
                    <div class="conteiner_cards2 overflow-y-auto" style="max-height: 165px;"> <!-- Agregué max-height y overflow-y-auto aquí -->
                        <!-- Panel 1 -->
                        <div class="bg-white p-3 rounded">
                            <div class="w-[15rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-lg text-start w-full">ASESORES ACADEMICOS</label>
                                <button class="w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full "><i
                                        class="fa-solid fa-ellipsis-vertical"></i></button>
                            </div>
                            <div>
                                <label class="font-normal font-poppins text-base text-start w-full">Informacion de los asesores</label>
                            </div>
                            <div>
                                <button class="action-button">VISUALIZAR</button>
                            </div>
                        </div>


                        <!-- Panel 2 -->
                        <div class="bg-white p-3 rounded">
                            <div class="w-[15rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-lg text-start w-full">PROYECTOS FINALIZADOS</label>
                            </div>
                            <div>
                                <label class="font-normal font-poppins text-base text-start w-full">Proyectos Terminados</label>
                            </div>
                            <div>
                            <button class="action-button">VISUALIZAR</button>
                            </div>
                        </div>
                        <div class="bg-white p-3 rounded">
                            <div class="w-[15rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-lg text-start w-full">ANTEPROYECTOS APROBADOS</label>
                            </div>
                            <div>
                            <button class="action-button">VISUALIZAR</button>
                            </div>
                        </div>
                        <div class="bg-white p-3 rounded">
                            <div class="w-[15rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-lg text-start w-full">HISTORIAL DE MEMORIAS</label>
                            </div>
                            <div>
                            <button class="action-button">VISUALIZAR</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
                

                <!-- Graficas -->
                <div class="content_conteiner h-fit p-1 w-fit md:ml-0 sm:ml-0"> <!-- Aquí es donde ajusté el margen izquierdo -->
                    <label class="conteiner_word_title w-full flex flex-col items-center">Graficas</label>
                    <div class="conteiner_cards w-full">
                        <!-- Panel 1 -->
                        <div class="bg-white  rounded">
                            <div class="line-chart-container">
                                <h1>AVANCE DE LOS ALUMNOS</h1>
                                <canvas id="line-chart" width="630" height="500"></canvas> <!-- Ajusta el tamaño del lienzo aquí -->
                            </div>
                        </div>
                        <div class="bg-white w-fit h-fit p-3 rounded">
                            <div class="w-[15rem] text-center flex flex-row items-center">
                                
                            </div>
                            <div>
                                <label class="font-normal font-poppins text-sm text-start w-full">Descripciones</label>
                            </div>
                        </div>
                  
                    </div>
                </div>
            </div>

            <!-- Progresos -->
            <div class="content_conteiner h-fit p-1 w-fit md:ml-0 sm:ml-0"> <!-- Aquí es donde ajusté el margen izquierdo -->
                <div class="flex flex-col gap-1">
                    <label class="conteiner_word_title  h-fit flex flex-col items-center">Progresos</label>
                    
                    <div class="bg-white p-3 rounded">
            <div class="flex flex-col items-center">
                <div class="progress-item">
                    <label class="font-semibold font-poppins text-base">PROGRESO DE PROYECTOS</label>
                    <svg width="190" height="190" class="progress-chart">
                        <circle cx="85" cy="85" r="80" class="progress-back" fill="none"></circle>
                        <circle cx="85" cy="85" r="80" class="progress-front" fill="none" stroke-dasharray="0 1000000"></circle>
                        <g class="progress-text">
                        <text x="92" y="88" alignment-baseline="middle" text-anchor="middle" id="percentage">0%</text>
                        </g>
                    </svg>
                    <button class="action-button" style="margin-left: 40px">VISUALIZAR</button>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-3 rounded">
            <div class="flex flex-col items-center">
                <div class="progress-item">
                    <label class="font-semibold font-poppins text-base">PROGRESO DE PROYECTOS</label>
                    <svg width="190" height="190" class="progress-chart">
                        <circle cx="85" cy="85" r="80" class="progress-back" fill="none"></circle>
                        <circle cx="85" cy="85" r="80" class="progress-front2" fill="none" stroke-dasharray="0 1000000"></circle>
                        <g class="progress-text">
                            <text x="92" y="88" alignment-baseline="middle" text-anchor="middle" id="percentage2">0%</text>
                        </g>
                    </svg>
                    <button class="action-button" style="margin-left: 40px">VISUALIZAR</button>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-3 rounded">
            <div class="flex flex-col items-center">
                <div class="progress-item">
                    <label class="font-semibold font-poppins text-base">ESTADIAS FINALIZADAS</label>
                    <svg width="190" height="190" class="progress-chart">
                        <circle cx="85" cy="85" r="80" class="progress-back" fill="none"></circle>
                        <circle cx="85" cy="85" r="80" class="progress-front3" fill="none" stroke-dasharray="0 1000000"></circle>
                        <g class="progress-text">
                            <text x="92" y="88" alignment-baseline="middle" text-anchor="middle" id="percentage3">0%</text>
                        </g>
                    </svg>
                    <button class="action-button" style="margin-left: 40px">VISUALIZAR</button>
                </div>
            </div>
        </div>
                </div>
             

            </div>
        </div>




    </div>
    <script src="{{ asset('js/progress.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/line-chart.js') }}"></script>

    <script>
        // Desplaza automáticamente hacia abajo al cargar la página
        window.onload = function() {
            var container = document.querySelector('.content_conteiner');
            container.scrollTop = container.scrollHeight;
        };
    </script>
@endsection