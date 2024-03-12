@extends('test.test_standars')
@section('titulo')
    Dashboard
@endsection
@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <label>Aqui el titulo de tu vista, te recomiendo cambiar el icono</label>
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

            <label>De aqui en adelante puedes trabajar 🚬</label>
            <!-- Aqui va todo lo que esta en tu vista -->
        </div>
    </div>

    <!-- De aqui para abajo es tu vista -->

    <div class="w-screen">
        <div class="w-full pr-4 pl-12 items-center">
            <div class="bg-gray-100 text-3xl rounded border mt-2 p-2 flex flex-row items-center gap-2">
                <div class="flex flex-row items-center gap-3">
                    <label class="font-sans">Dashboard Estudiante</label>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                    </svg>
                </div>

            </div>
            <div class="bg-gray-100 rounded border mt-1 p-2">
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
                        class="border shadow bg-[#ceeae4] md:p-3 p-0 justify-center flex flex-col h-[410px] w-[220px] md:w-[715px] lg:w-[44%] rounded-[7px_7px_7px_7px]">
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
                        <table>
                            <thead>
                                <tr>
                                    <th class="font-semibold text-center text-xs md:text-sm">DOM</th>
                                    <th class="font-semibold text-center text-xs md:text-sm">LUN</th>
                                    <th class="font-semibold text-center text-xs md:text-sm">MAR</th>
                                    <th class="font-semibold text-center text-xs md:text-sm">MIÉ</th>
                                    <th class="font-semibold text-center text-xs md:text-sm">JUE</th>
                                    <th class="font-semibold text-center text-xs md:text-sm">VIE</th>
                                    <th class="font-semibold text-center text-xs md:text-sm">SÁB</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['calendar'] as $weekData)
                                    <tr>
                                        @foreach ($weekData['datos'] as $dayweek)
                                            @if ($dayweek['mes'] == $mes)
                                                <td class="text-center p-3 text-blue-700">
                                                    {{ $dayweek['dia'] }}</td>
                                            @else
                                                <td class="text-center p-2 text-gray-700"></td>
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
    @endsection
