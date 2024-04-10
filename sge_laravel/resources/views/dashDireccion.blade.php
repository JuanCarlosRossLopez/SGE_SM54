@extends('test.test_template')
@section('titulo')
    Panel de control administrador
@endsection
@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <label>Dashboard Direccion</label>
            @if (Auth::check())
            Bienvenido, {{ Auth::user()->name }}
            @else
            No se encontró información de direccion.
            @endif
            <label>
                <i class="fa fa-area-chart" aria-hidden="true"></i>
            </label>
        </div>
        <div class="conteiner_cards">
            <div class="conteiner_cards1 flex flex-col w-fit overflow-hidden-x">
                <div class="content_conteiner w-full h-fit">
                    <label class="conteiner_word_title flex flex-col items-center">Visualizacion de Informacion</label>
                    <div class="conteiner_cards2 overflow-y-auto flex flex-wrap" style="max-height: 280px;"> <!-- Agregué max-height y overflow-y-auto aquí -->
                        <!-- Panel 1 -->
                        <div class="bg-white p-3 rounded">
                            <div class="w-[15rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-lg text-start w-full">ASESORES ACADEMICOS</label>
                                <button class="w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full "><i
                                        class="fa-solid fa-ellipsis-vertical"></i></button>
                            </div>
                            <div>
                                <button class="action-button items-center">VISUALIZAR</button>
                            </div>
                        </div>


                        <!-- Panel 2 -->
                        <div class="bg-white p-3 rounded ml-2">
                            <div class="w-[15rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-lg text-center w-full">PROYECTOS FINALIZADOS</label>
                            </div>
                            <div>
                            <button class="action-button items-center">VISUALIZAR</button>
                            </div>
                        </div>
                        <div class="bg-white p-3 rounded ml-2">
                            <div class="w-[15rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-lg text-start w-full">ANTEPROYECTOS APROBADOS</label>
                            </div>
                            <div>
                            <button class="action-button items-center">VISUALIZAR</button>
                            </div>
                        </div>
                        <div class="bg-white p-3 rounded ml-2">
                            <div class="w-[15rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-lg text-start w-full">HISTORIAL DE MEMORIAS</label>
                            </div>
                            <div>
                            <button class="action-button items-center">VISUALIZAR</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="flex flex-wrap"> <!-- Contenedor principal con flexbox y wrap para alinear los elementos -->
                    <!-- Grafica 1 -->
                    <div class="content_container h-fit p-1 w-fit md:ml-0 sm:ml-0 mb-4"> <!-- Aquí ajusté el margen izquierdo y añadí margen inferior -->
                        <label class="container_word_title w-full flex flex-col items-center">Gráficas</label>
                        <div class="container_cards w-full items-center">
                            <!-- Panel 1 -->
                            <div class="bg-black rounded">
                                <div class="line-chart-container text-center items-center">
                                    <h1>AVANCE DE LOS ALUMNOS</h1>
                                    <canvas id="myChart" width="1200" height="590"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Grafica 2 -->
                    <div class="content_container h-fit p-1 w-fit md:ml-0 sm:ml-0 mb-4"> <!-- Aquí ajusté el margen izquierdo y añadí margen inferior -->
                        <div class="flex flex-col gap-1">
                            <label class="container_word_title h-fit flex flex-col items-center">Progresos</label>
                            
                            <div class="bg-white p-3 rounded">
    <div class="flex flex-col items-center">
        <div class="progress-item">
            <label class="font-semibold font-poppins text-base">PROGRESO DE ANTEPROYECTOS</label>
            <svg width="190" height="190" class="progress-chart">
                <circle cx="85" cy="85" r="80" class="progress-back" fill="none"></circle>
                <circle cx="85" cy="85" r="80" class="progress-front1" fill="none" stroke-dasharray="0 1000000"></circle>
                <g class="progress-text">
                    <text x="92" y="88" alignment-baseline="middle" text-anchor="middle" id="percentage1">0%</text>
                </g>
            </svg>
            <button class="action-button" style="margin-left: 40px">VISUALIZAR</button>
        </div>
    </div>
</div>

<div class="bg-white p-3 rounded">
    <div class="flex flex-col items-center">
        <div class="progress-item">
            <label class="font-semibold font-poppins text-base">ESTADÍAS FINALIZADAS</label>
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


                



    </div>
    <script src="{{ asset('js/progress.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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