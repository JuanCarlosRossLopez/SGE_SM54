@extends('test.final_template')
@section('title')
    Envío
@endsection

@section('contenido')
    <div class="back_conteiner">
        <div class="conteiner_cards justify-center flex flex-row">
            <div class="conteiner_cards1 flex flex-col w-3/4">

                <!-- Mapeo de anteproyectos -->
                <div class="content_conteiner w-full h-fit p-4 mt-4">
                    <label class="font-poppins font-semibold text-2xl text-[#333333] text-start pb-3">Tabla de mis alumnos
                        como asesor</label>
                    <!-- Panel 1 -->
                    @if (session('notificacion'))
                        <div class="alert alert-success" id="flash-message">
                            {{ session('notificacion') }}
                        </div>
                    @endif
                    <div class="table_conteiner">
                        <table class="standar_table">
                            <thead class="standar_thead">
                                <tr>
                                    <th class="theader">#</th>
                                    <th class="theader">Matricula</th>
                                    <th class="theader">Alumno</th>
                                    <th class="theader">Proyecto</th>
                                    <th class="theader">Opciones</th>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                @foreach ($students as $student)
                                    <tr class="trow">
                                        <td class="trowc">{{ $loop->iteration }}</td>
                                        <td class="trowc">{{ $student->student_id }}</td>
                                        <td class="trowc">{{ $student->student_name }}</td>
                                        <td class="trowc">
                                            {{ !$student->anteproject_id ? 'N/A' : $student->anteproject_id }}</td>
                                        <td class="trowc">
                                            <div>
                                                <button data-modal="Envio_{{ $student->id }}"
                                                    class="show-modal standar_button my-1">
                                                    Enviar
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <div idModal="Envio_{{ $student->id }}"
                                        class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
                                        <div class="bg-[#01A080] w-full rounded-2xl shadow-lg max-w-[350px]">
                                            <div class="border-b px-4 py-2 flex justify-content-end">
                                                <button class="close-modal">
                                                    <p class="text-2xl"><i
                                                            class="fa-solid fa-circle-xmark items-end bg-white rounded-full"
                                                            style="color: #d50101;"></i></p>
                                                </button>
                                            </div>
                                            <div class="bg-white p-2 rounded-b-2xl">
                                                <div class="modal-body mb-0 overflow-y-auto h-[250px]">
                                                    <h4 class="text-black text-center mt-3 text-2xl font-bold">¿Enviar
                                                        documento a
                                                        {{ $student->student_name }}?</h4>
                                                    <div class="space-x-12 mt-12">
                                                        <form action="{{ route('documents.enviar') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="type"
                                                                value="{{ $type }}">
                                                            <input type="hidden" name="student_id"
                                                                value="{{ $student->id }}">
                                                            <button type="submit" class="bg-blue-500 p-2 rounded-md">
                                                                Aceptar
                                                            </button>
                                                        </form>
                                                        <button class="bg-red-500 p-2 rounded-md close-modal">
                                                            Cancelar
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="w-1/5 h-fit gap-0 flex flex-col">
                <div class="content_conteiner h-fit p-2 card flex justify-center">
                    <div class="flex flex-col gap-2 items-center">
                        <h1>¿Qué más hacer?</h1>
                        <a class="show-modal buttons_card_green w-full">
                            <i class="fi fi-sr-books flex"></i><button class="w-full text-start">Ver libros</button>
                        </a>
                        <a href="/historial_de_memorias" class="buttons_card_green">
                            <i class="fi fi-sr-memo-circle-check flex"></i><button> Ver memorias finalizadas</button>
                        </a>
                    </div>
                </div>

                <div class="content_conteiner h-fit p-4 card">
                    <div class="flex flex-col gap-2 justify-center w-full items-center">
                        <h1>Recordatorios</h1>
                        <p class="font-normal font-poppins text-center text-lg">Sin nada que hacer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded-2xl shadow-lg max-w-[300px]">
            <div class="border-b px-4 py-2 flex justify-content-end">
                <button class="close-modal">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark items-end bg-white rounded-full"
                            style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2 rounded-b-2xl">
                <div class="modal-body mb-0 overflow-y-auto h-[190px]">
                    <h4 class="text-black text-center mt-3 text-2xl font-bold">Tipo de archivo</h4>
                    <div class=" flex justify-center">
                        <img src="{!! asset('img/icon_word.png') !!}"
                            class="cursor-pointer close-modal w-[50px] h-[50px] items-center mt-[20px] mr-[20px]">
                        <img src="{!! asset('img/icon_pdf.png') !!}"
                            class="cursor-pointer close-modal w-[50px] h-[50px] items-center mt-[20px] ml-[20px]">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <script>
        const tableBody = document.querySelector('tbody');
        const rowCount = tableBody.querySelectorAll('tr').length;
        document.getElementById('rowCount').textContent = rowCount;

        window.addEventListener('load', function() {
            var flashMessage = document.getElementById('flash-message');
            if (flashMessage) {
                setTimeout(function() {
                    flashMessage.classList.add('hidden');
                }, 5000); // 5000 milliseconds = 5 seconds
            }
        });
    </script>

    <script src="{!! asset('js/modals.js') !!}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    </div>
@endsection
