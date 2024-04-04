@extends('test.final_template')
@section('title')
    Dashboard
@endsection
@section('contenido')

    <div class="back_conteiner">
        <div class="conteiner_cards justify-center flex flex-row">
            <div class="conteiner_cards1 flex flex-col w-full m-4">
                <!-- Mapeo de anteproyectos -->
                @if (session()->has('notificacion'))
                    <div id="notification"
                        class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 w-full rounded relative">
                        {{ session('notificacion') }}
                    </div>
                    <script>
                        setTimeout(function() {
                            document.getElementById('notification').style.display = 'none';
                        }, 10000);
                    </script>
                @endif
                <div class="content_conteiner w-full h-fit p-4">
                    <label class="font-poppins font-semibold text-2xl text-[#333333] text-start pb-3">Detalles de mi
                        anteproyecto:</label>
                    <div class="w-full">
                        <div class="w-full">
                            <div class="flex  w-full flex-row mb-4 gap-4">
                                <div
                                    class="bg-[#F7FAFC] border-2 border-[#d0d0d0] w-1/3 flex flex-col p-4 rounded justify-center items-center">
                                    <!--
                                            <img src="{{ asset('image/progreso_estudiante.png') }}" alt="" class="">
                                        -->
                                    <div class="flex flex-row items-center justify-center w-full gap-2">
                                        <h1 class="font-semibold text-xl bg-[#18a68a40] px-2 rounded text-[#18A689] md:text-2xl">
                                            {{ optional(optional(Auth::user()->student)->projects)->project_title ?? 'No se encontró un proyecto asociado' }}
                                        </h1>
                                        <div class="bg-blue-200 text-lg px-2 w-fit font-bold text-blue-700 rounded flex flex-row items-center justify-center gap-2">
                                            <label>Aprobaciones: {{ optional(optional(Auth::user()->student)->projects)->project__likes()->count() ?? 'No se encontró un proyecto asociado' }}</label>
                                            <i class="fa-solid fa-face-smile"></i>
                                        </div>
                                    </div>

                                    @if (optional(optional(Auth::user()->student)->projects)->id)
                                        <a href="{{ route('informacion_anteproyecto.show', optional(optional(Auth::user()->student)->projects)->id) }}"
                                            class="buttons_card_anteproyect ">Visualizar mi anteproyecto<i
                                                class="fa-solid fa-file-lines"></i></a>
                                    @else
                                        <a href="/anteproyecto" class="buttons_card_anteproyect"><label
                                                class="cursor-pointer">Crear
                                                Anteproyecto</label></a>
                                    @endif
                                </div>
                                <div
                                    class="w-2/3 h-fit bg-[#F7FAFC] border-2 border-[#d0d0d0] flex flex-col p-4 rounded items-center">
                                    <div class="w-full h-[20rem] px-2">
                                        <h1 class="font-semibold text-xl text-[#18A689] md:text-2xl">Comentarios de
                                            Anteproyecto</h1>
                                        <div class="border-1 border-[#d0d0d0] p-3 overflow-auto mt-2 rounded h-[90%]">
                                            <div>
                                                @php
                                                    $comments = optional(optional(Auth::user()->student)->projects)
                                                        ->comments;
                                                @endphp
                                                @if ($comments && $comments->isNotEmpty())
                                                    @foreach ($comments as $comment)
                                                        <div
                                                            class="flex flex-row gap-4 border-1 border-[#2F4050] rounded-[7px_7px_7px_7px] p-3 bg-[#2F4050] text-white my-2 font-medium">
                                                            <p>{{ $comment->created_at->format('d F Y') }}</p>
                                                            <p>{{ $comment->general_comment }}</p>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <p class="text-[#9f9f9f] font-base italic text-xl ">No hay comentarios
                                                        para este anteproyecto.</p>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class=" flex flex-row my-2 gap-4">
                                <div
                                    class="border-2 border-[#d0d0d0] rounded-[7px_7px_7px_7px] p-4 bg-[#F7FAFC]  w-full max-w-[220px] md:max-w-[715px] lg:max-w-[44%] h-[400px]">
                                    <div class="flex flex-row gap-2 w-full items-center justify-center ">
                                        <img src="{{ asset('image/line.svg') }}" alt="Logo Image" class="">
                                        <h1 class="font-semibold text-xl text-[#18A689] md:text-2xl">Recordatorios</h1>
                                        <img src="{{ asset('image/line.svg') }}" alt="Logo Image" class="">
                                    </div>

                                    <div class="bg-[#f2f2f2] overflow-auto rounded px-4 my-2 h-[90%]">
                                        <div class="flex flex-col gap-0 text-sm">
                                            <div
                                                class="flex flex-row gap-4 border-1 border-[#2F4050] rounded-[7px_7px_7px_7px] p-3 bg-[#2F4050] text-white mt-4 mb-2 font-medium">
                                                <p>05 Febrero | 8:30 AM</p>
                                                <p class="text-[#ebebeb]">Revisión de Memoria</p>
                                            </div>
                                            <div
                                                class="flex flex-row gap-4 border-1 border-[#18A689] rounded-[7px_7px_7px_7px] p-3 bg-[#18A689] text-white my-2 font-medium">
                                                <p>20 Febrero | 1:15 PM</p>
                                                <p class="text-[#ebebeb]">Revisión de Memoria</p>
                                            </div>
                                            <div
                                                class="flex flex-row gap-4 border-1 border-[#18A689] rounded-[7px_7px_7px_7px] p-3 bg-[#18A689] text-white my-2 font-medium">
                                                <p>20 Febrero | 1:15 PM</p>
                                                <p class="text-[#ebebeb]">Revisión de Memoria</p>
                                            </div>
                                            <div
                                                class="flex flex-row gap-4 border-1 border-[#18A689] rounded-[7px_7px_7px_7px] p-3 bg-[#18A689] text-white my-2 font-medium">
                                                <p>29 Febrero | 1:15 PM</p>
                                                <p class="text-[#ebebeb]">Revisión de Memoria</p>
                                            </div>
                                            <div
                                                class="flex flex-row gap-4 border-1 border-[#18A689] rounded-[7px_7px_7px_7px] p-3 bg-[#18A689] text-white my-2 font-medium">
                                                <p>05 Marzo | 1:15 PM</p>
                                                <p class="text-[#ebebeb]">Revisión de Memoria</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="border-2 border-[#d0d0d0] bg-[#F7FAFC] md:p-3 p-4 justify-center flex flex-col h-[400px] w-[220px] md:w-[715px] lg:w-full rounded-[7px_7px_7px_7px]">
                                    <div class="flex flex-row  items-center justify-between">
                                        <a href="{{ route('calendar.month', ['month' => $data['last']]) }}"
                                            class="m-[10px] transition-transform hover:scale-110">
                                            <i class="fas fa-chevron-circle-left" style="font-size:30px;color:#adadad;"></i>
                                        </a>
                                        <p class="text-[#18A689] font-semibold text-2xl text-center">
                                            {{ $mesSpanish }}
                                            {{ $data['year'] }}</p>
                                        <!-- Enlace al mes siguiente -->
                                        <a href="{{ route('calendar.month', ['month' => $data['next']]) }}"
                                            class="m-[10px] transition-transform hover:scale-110">
                                            <i class="fas fa-chevron-circle-right"
                                                style="font-size:30px;color:#adadad;"></i>
                                        </a>

                                    </div>
                                    <table class="">
                                        <thead class=" bg-[#b8e0d7]">
                                            <tr>
                                                <th class="font-bold text-center text-xs md:text-lg">LUN</th>
                                                <th class="font-bold text-center text-xs md:text-lg">MAR</th>
                                                <th class="font-bold text-center text-xs md:text-lg">MIÉ</th>
                                                <th class="font-bold text-center text-xs md:text-lg">JUE</th>
                                                <th class="font-bold text-center text-xs md:text-lg">VIE</th>
                                                <th class="font-bold text-center text-xs md:text-lg">SÁB</th>
                                                <th class="font-bold text-center text-xs md:text-lg">DOM</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-[#bbdfd7af]">
                                            @foreach ($data['calendar'] as $weekData)
                                                <tr>
                                                    @foreach ($weekData['datos'] as $dayweek)
                                                        @if ($dayweek['mes'] == $mes)
                                                            <td
                                                                class="text-center p-3 mb-1 text-black transition-transform hover:scale-110 cursor-pointer">
                                                                {{ $dayweek['dia'] }}</td>
                                                        @else
                                                            <td
                                                                class="text-center p-3 text-gray-700 transition-transform hover:scale-110 cursor-pointer">
                                                            </td>
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

                </div>
            </div>
        </div>
    </div>
    <!-- De aqui para abajo es tu vista -->
@endsection
