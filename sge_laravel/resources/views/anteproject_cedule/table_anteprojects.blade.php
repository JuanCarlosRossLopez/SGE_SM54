@extends('test.test_template')

@section('title')
    Anteproyectos asesor
@endsection
@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <div class="w-[70rem]">
                <label>Anteproyectos en proceso</label>
                <label>
                    <!-- Este svg es el icono -->
                    <i class="fa-solid fa-bars-progress"></i>
                </label>
            </div>

        </div>
        <div class="content_conteiner  h-fit">
            <div class="flex flex-row items-center justify-start gap-2">
                <label class="conteiner_word_title items-center">Tabla de anteproyectos</label>
                <label id="infoButton" class="cursor-pointer mt-[0.8rem]"
                    data-tooltip="Aquí usted ver todos los proyectos de los que es asesor">
                    <i class="fas fa-exclamation-circle text-[#01A080] text-xl "></i>
                </label>
            </div>
            <div class="inside_content_conteiner">
                <div class="search_conteiner">
                    <button class="search_button">
                        <i class="fas fa-search text-gray-500"></i>
                    </button>
                    <input type="text" class="search_input" placeholder="Buscar..." />
                </div>
                <div class="search_button_conteiner">
                    <!-- En caso que necesites el boton dejalo, sino aplica hidden en el class -->
                    <button class="standar_button hidden"><span class="inside_button ">Si lo necesitas</span></button>
                </div>
            </div>

            <div class="table_conteiner">
                <table class="standar_table">
                    <thead class="standar_thead">
                        <tr>
                            <th class="theader">Nombre anteproyecto</th>
                            <th class="theader">Creador del proyecto</th>
                            <th class="theader">Empresa</th>
                            <th class="theader">Aprovaciones (likes)</th>
                            <th class="theader">Acciones</th>
                            <th class="theader">Aprovaciones chidas</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        @foreach ($project_management as $anteproject)
                            <tr class="trow">
                                <td class="trowc">{{ $anteproject->project_title }}</td>
                                <td class="trowc">{{ $anteproject->student_name }}</td>
                                <td class="trowc">{{ $anteproject->project_company }}</td>
                                <td class="trowc">{{ $anteproject->project__likes()->count() }}</td>

                                <td class="trowc">
                                    <div>
                                        @if (Auth::user()->teachers)
                                            @php
                                                $teacherId = Auth::user()->teachers->id;
                                                $projectManagementId = $anteproject->id;
                                                $like = App\Models\Project_Likes::where('teacher_id', $teacherId)
                                                    ->where('project_management_id', $projectManagementId)
                                                    ->first();
                                            @endphp
                                            <form
                                                action="{{ $like ? route('gestion_asesor_anteproyecto.destroy', ['gestion_asesor_anteproyecto' => $like->id]) : route('gestion_asesor_anteproyecto.store') }}"
                                                method="POST">
                                                @csrf
                                                @if ($like)
                                                    @method('DELETE')
                                                    <button class="bg-red-500 rounded-md text-white">Quitar like</button>
                                                @else
                                                    <input type="hidden" name="teacher_id" value="{{ $teacherId }}">
                                                    <input type="hidden" name="project_management_id"
                                                        value="{{ $projectManagementId }}">
                                                    <button class="bg-blue-500 rounded-md text-white">Dar like</button>
                                                @endif
                                            </form>
                                        @else
                                            <p>No se encontró información del asesor para este usuario.</p>
                                        @endif
                                    </div>
                                </td>


                            </tr>
                            <div idModal="datosProyecto_{{ $anteproject->id }}"
                                class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
                                <div class="bg-[#01A080] w-full rounded shadow-lg max-w-4xl">
                                    <div class="border-b px-4 py-2 flex justify-between items-center">
                                        <h3 class="font-semibold text-lg ml-60 text-white">Revision de Cedula AnteProyecto
                                        </h3>
                                        <button class="close-modal bg-white rounded-full h-[1rem] flex items-center">
                                            <p class="text-2xl"><i class="fa-solid fa-circle-xmark"
                                                    style="color: #d50101;"></i></p>
                                        </button>
                                    </div>
                                    <form action="{{ route('anteproyecto.update', ['anteproyecto' => $anteproject->id]) }}"
                                        method="POST" class="flex flex-col gap-4">
                                        @csrf
                                        @method('PATCH')
                                        <div class="modal_conteiner">
                                            <!-- Aqui en esta parte ajusta el valor de h segun tus necesidades -->
                                            <div class="modal-body h-[fit] p-4">
                                                <h1 class="titles">Titulo de Proyecto</h1>
                                                <label class="modal_parrafs">{{ $anteproject->project_title }}</label>

                                                <h1 class="titles">Objetivo General</h1>
                                                <label class="modal_parrafs">{{ $anteproject->general_objective }}</label>


                                                <h1 class="titles">Alcance de Proyecto</h1>
                                                <label class="modal_parrafs"></label>


                                                <h1 class="titles">Justificacion</h1>
                                                <label class="modal_parrafs">{{ $anteproject->justification }}</label>

                                                <h1 class="titles">Actividades a realizar</h1>
                                                <label lass="modal_parrafs">{{ $anteproject->activities }}</label>

                                                <div class="flex justify-center items-center w-full border-t pt-2">
                                                    <input id="likes" type="text" value="{{ $anteproject->likes }}"
                                                        name="likes">
                                                    <button type="submit" onclick="increaseLikes()"
                                                        class="bg-[#2546b3] p-2 rounded text-white font-bold">Realizar
                                                        aprovación <i class="fa-regular fa-thumbs-up"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endforEach
                    </tbody>
                </table>

                <div class="mt-5">{{ $project_management->links() }}</div>
            </div>


        </div>

        <!-- Modalb -->

    </div>

    <script>
        //Lo hizo roto, es un contador
        const tableBody = document.querySelector('tbody');
        var likesInput = document.getElementById('likes');

        function increaseLikes() {

            likesInput.value = parseInt(likesInput.value) + 1;
        }
    </script>
    <script src="{!! asset('js/modals.js') !!}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
@endsection
