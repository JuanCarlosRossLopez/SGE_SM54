@extends('test.test_template')
@section('titulo')
    Dashboard
@endsection
@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <label>Dashboard Estudiante</label>
            <label>
                <!-- Este svg es el icono -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                </svg>
            </label>
        </div>

        <div class="content_conteiner">
            <div class="flex flex-row items-center gap-2">
                <label class="conteiner_word_title">Si tiene un subtema tu vista ponlo aqui</label>
                <label id="infoButton" class="cursor-pointer mt-3"
                    data-tooltip="Recomiendo ponerle una descripción a la vista">
                    <i class="fas fa-exclamation-circle text-[#01A080] text-2xl "></i>
                </label>
            </div>

            <div class="flex flex-row gap-4 justify-center">
                <div class="bg-white w-1/5 rounded h-[350px] my-3 p-3">
                    <p class="font-medium text-sm text-center sm:text-xl">ESTADO DE ANTEPROYECTO</p>
                    <p class=" text-center">Astroseiza</p>
                    <img src="image/progreso_estudiante.png" alt="" class="">
                </div>
                <div class="bg-white w-[68%] rounded h-[350px] my-3 p-3 flex flex-col">
                    <div class="overflow-auto p-2">
                        <h1 class="font-semibold text-xl text-[#18A689] md:text-3xl">Proyecto Astroseiza</h1>
                        <div>
                            <p class="flex text-xl my-2 font-medium">Comentario referente al título</p>
                            <p class="flex text-lg my-1 font-medium">Rafael Villegas Velasco</p>
                            <p>El título está bien pensado de acuerdo al proyecto que me presentas, el título resume muy
                                bien lo que trata su anteproyecto de la mamoria a realizar.</p>
                        </div>
                        <div>
                            <p class="flex text-xl my-2 font-medium">Comentario referente al título</p>
                            <p class="flex text-lg my-1 font-medium">Mayra Guadalupe Fuentes Sosa</p>
                            <p>El título está bien pensado de acuerdo al proyecto que me presentas, el título resume muy
                                bien lo que trata su anteproyecto de la mamoria a realizar.</p>
                        </div>
                        <div>
                            <p class="flex text-xl my-2 font-medium">Comentario referente al título</p>
                            <p class="flex text-lg my-1 font-medium">Irvin Arlin Chan Ac</p>
                            <p>El título está bien pensado de acuerdo al proyecto que me presentas, el título resume muy
                                bien lo que trata su anteproyecto de la mamoria a realizar.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap justify-center items-center gap-4 md:gap-6 lg:gap-8">
                <div
                    class="border-2 border-[#18A689] rounded-[7px_7px_7px_7px] p-3 bg-[#F6F6F6] shadow w-full max-w-[220px] md:max-w-[715px] lg:max-w-[44%] h-[410px]">
                    <h1 class="font-semibold text-xl text-[#18A689] md:text-3xl">Recordatorios</h1>
                    <div class="overflow-auto h-[325px] p-2">
                        <div class="flex flex-col">
                            <div
                                class="flex flex-row gap-4 border-1 border-[#2F4050] rounded-[7px_7px_7px_7px] p-3 bg-[#2F4050] text-white mt-4 mb-2 font-medium">
                                <p>05 Febrero | 8:30 AM</p>
                                <p>Revisión de Memoria</p>
                            </div>
                            <div
                                class="flex flex-row gap-4 border-1 border-[#18A689] rounded-[7px_7px_7px_7px] p-3 bg-[#18A689] text-white my-2 font-medium">
                                <p>09 Febrero | 1:15 PM</p>
                                <p>Revisión de Memoria</p>
                            </div>
                            <div
                                class="flex flex-row gap-4 border-1 border-[#18A689] rounded-[7px_7px_7px_7px] p-3 bg-[#18A689] text-white my-2 font-medium">
                                <p>20 Febrero | 1:15 PM</p>
                                <p>Revisión de Memoria</p>
                            </div>
                            <div
                                class="flex flex-row gap-4 border-1 border-[#18A689] rounded-[7px_7px_7px_7px] p-3 bg-[#18A689] text-white my-2 font-medium">
                                <p>20 Febrero | 1:15 PM</p>
                                <p>Revisión de Memoria</p>
                            </div>
                            <div
                                class="flex flex-row gap-4 border-1 border-[#18A689] rounded-[7px_7px_7px_7px] p-3 bg-[#18A689] text-white my-2 font-medium">
                                <p>20 Febrero | 1:15 PM</p>
                                <p>Revisión de Memoria</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="border shadow bg-[#ceeae4] md:p-3 p-2 justify-center flex flex-col h-[410px] w-[220px] md:w-[715px] lg:w-[44%] rounded-[7px_7px_7px_7px]">
                    <div class="flex flex-row  items-center justify-between">
                        <a href="{{ route('calendar.month', ['month' => $data['last']]) }}" class="m-[10px]">
                            <i class="fas fa-chevron-circle-left" style="font-size:30px;color:white;"></i>
                        </a>
                        <p class="text-[#18A689] font-semibold text-3xl text-center my-5">{{ $mesSpanish }}
                            {{ $data['year'] }}</p>
                        <!-- Enlace al mes siguiente -->
                        <a href="{{ route('calendar.month', ['month' => $data['next']]) }}" class="m-[10px]">
                            <i class="fas fa-chevron-circle-right" style="font-size:30px;color:white;"></i>
                        </a>
                    </div>
                    <table class="mb-3">
                        <thead>
                            <tr>
                                <th class="font-bold text-center text-xs md:text-lg">LUN</th>
                                <th class="font-bold text-center text-xs md:text-lg">MAR</th>
                                <th class="font-bold text-center text-xl md:text-lg">MIÉ</th>
                                <th class="font-bold text-center text-xl md:text-lg">JUE</th>
                                <th class="font-bold text-center text-xl md:text-lg">VIE</th>
                                <th class="font-bold text-center text-xl md:text-lg">SÁB</th>
                                <th class="font-bold text-center text-xl md:text-lg">DOM</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['calendar'] as $weekData)
                                <tr>
                                    @foreach ($weekData['datos'] as $dayweek)
                                        @if ($dayweek['mes'] == $mes)
                                            <td class="text-center p-3 mb-1 text-black">
                                                {{ $dayweek['dia'] }}</td>
                                        @else
                                            <td class="text-center p-3 text-black"></td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- De aqui para abajo es tu vista -->
    @endsection