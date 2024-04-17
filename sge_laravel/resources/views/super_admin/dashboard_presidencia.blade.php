@extends('test.final_template')

@section('title', 'Presidencia')

@section('contenido')
    <div class="back_conteiner pl-14 pt-10">
        <div class="conteiner_cards">

            <!-- acciones varias -->
            <div class="content_conteiner pb-10 w-full">

                <!-- gráficas de cedulas de anteproyecto -->
                <label class="container_word_title w-full flex flex-col items-center pt-3 text-4xl">Gráficas</label>


                <!-- Panel de gráficas -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
                    <!-- Gráfica 1 -->
                    <div class="bg-white rounded-lg overflow-hidden">
                        <div class="line-chart-container p-4">
                            <h1 class="text-lg font-semibold text-center mb-4">Proyectos por estado</h1>
                            <canvas id="mychart" class="w-full h-96 sm:h-auto"></canvas>
                        </div>
                    </div>
                    <!-- Gráfica 2 -->
                    <div class="bg-white rounded-lg overflow-hidden">
                        <div class="line-chart-container p-4">
                            <h1 class="text-lg font-semibold text-center mb-4">Avance de los alumnos</h1>
                            <canvas id="MyChart" class="w-full h-96 sm:h-auto"></canvas>
                        </div>
                    </div>
                    <!-- Gráfica 3 -->
                    <div class="bg-white rounded-lg overflow-hidden">
                        <div class="line-chart-container p-4">
                            <h1 class="text-lg font-semibold text-center mb-4">Alumnos por grupos</h1>
                            <canvas id="MYChart" class="w-full h-96 sm:h-auto"></canvas>
                        </div>
                    </div>
                </div>
                <!-- termina gráficas -->

            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="{{ asset('js/line-chart3.js') }}"></script>
        <script src="{{ asset('js/line-chart4.js') }}"></script>
        <script src="{{ asset('js/line-chart5.js') }}"></script>

        <script>
            // Desplaza automáticamente hacia abajo al cargar la página
            window.onload = function() {
                var container = document.querySelector('.content_conteiner');
                container.scrollTop = container.scrollHeight;
            };
        </script>
    @endsection
</div>
