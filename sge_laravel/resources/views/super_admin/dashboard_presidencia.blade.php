@extends('test.final_template')
@section('title', 'Presidencia')
@section('contenido')
    <div class="back_conteiner pl-14 pt-10 ">

        <div class="conteiner_cards ">

            <!--acciones varias-->
            <div class="content_conteiner pb-40 px-[28rem]">

                <!--termina acciones varias-->

                <!--grafica de cedulas de anteproyecto-->
                <label class="conteiner_word_title w-full flex flex-col items-center pt-3">Graficas</label>

                <!-- Panel 1 -->
                <div class=" flex flex-col gap-3">
                    <div class="bg-white w-[34rem] rounded">
                        <div class="line-chart-container">
                            <h1 class="uppercase">Gráfica de alumnos por grupo</h1>
                            <canvas id="line-chart2"></canvas>
                        </div>
                    </div>

                    <div class="bg-white w-[34rem] rounded p-3">
                        <h1 class="text-center">Filtrar por Grupo</h1>
                        <select id="groupSelect" class="w-full mt-2 p-1 border border-gray-300 rounded">
                            {{-- @foreach($career->groups as $group)
                                <option value="{{ $group->id }}">{{ $group->group_name }}</option>
                            @endforeach --}}
                        </select>
                    </div>

                    <div class="bg-white w-[34rem] rounded">
                        <div class="line-chart-container text-center items-center">
                            <h1>AVANCE DE LOS ALUMNOS</h1>
                            <canvas id="MyChart" width="1200" height="590"></canvas>
                        </div>
                    </div>
                    <div class="bg-white w-[34rem] rounded">
                        <div class="line-chart-container text-center items-center">
                            <h1>Alumnos por grupos</h1>
                            <canvas id="MYChart" width="1200" height="590"></canvas>
                        </div>
                    </div>
                </div>



                <!--termina grafica-->
            </div>
        </div>









        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="{{ asset('js/line-chart2.js') }}"></script>
        <script src="{{ asset('js/line-chart3.js') }}"></script>
        <script src="{{ asset('js/line-chart4.js') }}"></script>



        <script>
            // Desplaza automáticamente hacia abajo al cargar la página
            window.onload = function() {
                var container = document.querySelector('.content_conteiner');
                container.scrollTop = container.scrollHeight;
            };
        </script>
    @endsection
    <!-- mostrar graficas relevantes -->
    <!-- cambiar icono -->
