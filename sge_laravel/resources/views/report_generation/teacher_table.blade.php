@extends('test.test_template')
@section('title')
    Envío
@endsection

@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <div class="w-[70rem]">
                <label>Tabla asesorados</label>
                <label>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                    </svg>
                </label>
            </div>
        </div>

        <div class="content_conteiner">
            <label class="conteiner_word_title">Tabla de proyectos asesorados</label>
            <div class="inside_content_conteiner">
                <div class="search_conteiner">
                    <button class="search_button">
                        <i class="fas fa-search text-gray-500"></i>
                    </button>
                    <input type="text" class="search_input" placeholder="Buscar..." />
                </div>
                <div class="search_button_conteiner">
                    <!-- En caso que necesites el boton dejalo, sino aplica hidden en el class -->
                    <button class="standar_button hidden"><span class="inside_button">Si lo necesitas</span></button>
                </div>
            </div>
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
                                <td class="trowc">{{ !$student->anteproject_id ? 'N/A' : $student->anteproject_id }}</td>
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
                                            <h4 class="text-black text-center mt-3 text-2xl font-bold">¿Enviar documento a
                                                {{ $student->student_name }}?</h4>
                                            <div class="space-x-12 mt-12">
                                                <form action="{{ route('documents.enviar') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="type" value="{{ $type }}">
                                                    <input type="hidden" name="student_id" value="{{ $student->id }}">
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

            <!-- Esto solo es una paginación para entregar, en laravel ya hicimos una paginacion chida asi que ignoren esto-->
            <div class="text-gray-700 w-full flex flex-row justify-between mt-1">
                <div>
                    <button
                        class="border-1 border-gray-500 bg-gray-300 px-2 rounded-l-md focus:outline-none focus:ring focus:border-[#01A080]">
                        < </button>
                            <button
                                class="border-1 border-gray-500 bg-gray-300 px-2 focus:outline-none focus:ring focus:border-[#01A080]">
                                1 </button>
                            <button
                                class="border-1 border-gray-500 bg-gray-300 px-2 focus:outline-none focus:ring focus:border-[#01A080]">
                                2 </button>
                            <button
                                class="border-1 border-gray-500 bg-gray-300 px-2 focus:outline-none focus:ring focus:border-[#01A080]">
                                3 </button>
                            <button
                                class="border-1 border-gray-500 bg-gray-300 px-2 rounded-r-md focus:outline-none focus:ring focus:border-[#01A080]">
                                > </button>
                </div>
                <div>
                    <span>Cantidad de registros :</span>
                    <span id="rowCount"></span>
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
