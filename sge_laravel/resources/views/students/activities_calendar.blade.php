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
                        }, 8000);
                    </script>
                @endif
                <div class="content_conteiner w-full h-fit p-4">

                    <div class="w-full">
                        <div class="w-full">
                            <div class="flex w-full flex-row mb-4 gap-4">
                                <div
                                    class="bg-[#F7FAFC] w-1/3 p-3 border-2 border-[#d0d0d0] flex flex-col items-center rounded">
                                    <!--
                                                                                    <img src="{{ asset('image/progreso_estudiante.png') }}" alt="" class="">
                                                                                -->
                                    @if (optional(optional(Auth::user()->student)->projects)->id)
                                        <div class="flex flex-col w-full h-fit px-4 pt-2 mt-0">
                                            <div
                                                class="h-fit rounded-t-xl w-full flex  justify-center text-5xl text-[#454545] gap-2">
                                                <label
                                                    class="font-poppins font-semibold text-xl text-[#333333] text-start pb-2">Detalles
                                                    de
                                                </label>
                                                <h1
                                                    class="font-semibold  bg-[#18a68a31] px-2 h-fit rounded text-[#18A689] md:text-xl">
                                                    {{ optional(optional(Auth::user()->student)->projects)->project_title ?? 'No se encontró un proyecto asociado' }}
                                                </h1>

                                            </div>
                                            <div class=" rounded-xl w-full h-full gap-1 flex flex-col items-start">
                                                <div class="flex flex-col items-start">
                                                    <label
                                                        class="font-sans font-semibold text-lg text-[#545454]">Creador:</label>
                                                    <h1
                                                        class="font-semibold  bg-[#18a68a31] px-2 rounded text-[#18A689] md:text-base">
                                                        {{ optional(optional(Auth::user()->student)->projects)->student_name ?? 'No se encontró un alumno asociado' }}
                                                    </h1>
                                                </div>
                                                <div class="flex flex-col items-start">
                                                    <label class="font-sans font-semibold text-lg text-[#545454]">Correo del
                                                        estudiante:</label>
                                                    <h1
                                                        class="font-semibold bg-[#18a68a31] px-2 rounded text-[#18A689] md:text-base">
                                                        {{ optional(optional(Auth::user()->student)->projects)->student_email ?? 'No se encontró un correo asociado' }}
                                                    </h1>
                                                </div>
                                                <div class="flex flex-col items-start ">
                                                    <label class="font-sans font-semibold text-lg text-[#545454]">Asesor
                                                        empresarial:</label>
                                                    <h1
                                                        class="font-semibold text-lg bg-[#a6a61831] px-2 rounded text-[#a68a18] md:text-base">
                                                        {{ optional(optional(Auth::user()->student)->projects)->project_advisor ?? 'No se encontró un asesor empresarial asociado' }}
                                                    </h1>
                                                </div>

                                                <div class="flex flex-row items-center gap-2">
                                                    <label
                                                        class="font-sans font-semibold text-lg text-[#545454]">Estado:</label>
                                                    <h1
                                                        class="font-semibold text-lg  px-2 rounded  md:text-base">
                                                        <?php
                                                        $coloresPorPalabra = [
                                                            'Aprobado' => ['bg' => '#45a291cb', 'text' => '#e1fcf2'],
                                                            'Pendiente' => ['bg' => '#a68e18cb', 'text' => '#fcf6e1'],
                                                            'Rechazado' => ['bg' => '#a61818cb', 'text' => '#fce1e1'],
                                                        ];
                                                        
                                                        $status_id = optional(optional(Auth::user()->student)->projects)->status_id ?? null;
                                                        
                                                        $status = '';
                                                        
                                                        if ($status_id === 1) {
                                                            $status = 'Aprobado';
                                                        } elseif ($status_id === 2) {
                                                            $status = 'Rechazado';
                                                        } elseif ($status_id === 3) {
                                                            $status = 'Pendiente';
                                                        } else {
                                                            echo 'No se encontró un estado asociado';
                                                        }
                                                        
                                                        $bgColor = $coloresPorPalabra[$status]['bg'];
                                                        $textColor = $coloresPorPalabra[$status]['text'];
                                                        
                                                        echo "<span style='background-color: $bgColor; color: $textColor; padding: 2px; border-radius: 5px;'>$status</span>";
                                                        ?>



                                                    </h1>
                                                </div>
                                                <div class="flex flex-row items-center gap-2">
                                                    <label
                                                        class="font-sans font-semibold text-lg text-[#545454]">Aprobaciones:</label>
                                                    <div
                                                        class="font-semibold text-lg bg-[#1883a631] px-2 rounded text-[#1839a6] md:text-base">

                                                        {{ optional(optional(Auth::user()->student)->projects)->project__likes()->count() ?? 'Sin aprobaciones' }}

                                                        <i class="fa-solid fa-face-smile"></i>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>
                                        <div class=" w-full flex justify-center mt-3 ">
                                            <a href="{{ route('informacion_anteproyecto.show', optional(optional(Auth::user()->student)->projects)->id) }}"
                                                class="buttons_card_anteproyect m-0">Visualizar mi anteproyecto<i
                                                    class="fa-solid fa-file-lines"></i>
                                            </a>
                                        </div>
                                    @else
                                        <p class="text-[#9f9f9f] font-base italic text-xl ">No has creado un anteproyecto
                                        </p>
                                        <a href="/anteproyecto" class="buttons_card_anteproyect"><label
                                                class="cursor-pointer">Crear mi
                                                anteproyecto</label></a>
                                    @endif

                                </div>
                                <div
                                    class="w-full h-fit bg-[#F7FAFC] border-2 border-[#d0d0d0] flex flex-col p-4 rounded items-center">
                                    <div class="w-full h-[20rem] px-2">
                                        <h1 class="font-semibold text-xl text-[#18A689] md:text-2xl">Comentarios de
                                            Anteproyecto</h1>
                                        <div class=" bg-[#f2f2f2] p-3 overflow-auto mt-2 rounded h-[90%]">
                                            <div>
                                                @php
                                                    $comments = optional(optional(Auth::user()->student)->projects)
                                                        ->comments;
                                                @endphp
                                                @if ($comments && $comments->isNotEmpty())
                                                    @foreach ($comments as $comment)
                                                        <div
                                                            class="flex flex-col border-1 border-[#ababab] px-2 py-2 bg-[#ffffff80] text-black my-1 rounded font-medium">
                                                            <div class="flex flex-col ">
                                                                <p
                                                                    class="font-bold px-2 text-[#454545] border-[#b7b7b7] text-base ">
                                                                    {{ $comment->teacher->name_teacher }}:</p>
                                                                <p
                                                                    class="font-medium px-2 text-[#5e5e5e] border-[#b7b7b7] text-base">
                                                                    {{ $comment->general_comment }}</p>
                                                            </div>
                                                            <p class="text-sm text-[#848484] font-semibold text-end">Comentó
                                                                a el {{ $comment->created_at->format('d F Y') }} a las
                                                                {{ $comment->created_at->format('H:i:s') }} <i
                                                                    class="fa-regular fa-clock"></i></p>
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
