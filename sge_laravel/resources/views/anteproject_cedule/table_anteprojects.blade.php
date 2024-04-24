@extends('test.final_template')

@section('title')
    Anteproyectos asesor
@endsection
@section('contenido')
    <div class="back_conteiner">
        <div class="conteiner_cards justify-center flex flex-row">
            <div class="conteiner_cards1 flex flex-col w-3/4">

                <!-- Mapeo de anteproyectos -->
                <div class="content_conteiner w-full h-fit p-4 mt-4">
                    <label class="font-poppins font-semibold text-2xl text-[#333333] text-start pb-3">Tabla de todos los
                        anteproyectos</label>
                    <!-- Panel 1 -->
                    <div class="table_conteiner">
                        <table class="standar_table">
                            <thead class="standar_thead">
                                <tr>
                                    <th class="theader">Nombre anteproyecto</th>
                                    <th class="theader">Creador del proyecto</th>
                                    <th class="theader">Empresa</th>
                                    <th class="theader">Aprobaciones</th>
                                    <th class="theader">Ver detalles</th>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                @foreach ($project_management as $anteproject)
                                    <tr class="trow">
                                        <td class="trowc">{{ $anteproject->project_title }}</td>
                                        <td class="trowc">{{ $anteproject->student_name }}</td>
                                        <td class="trowc">{{ $anteproject->project_company }}</td>
                                        <td class="trowc">{{ $anteproject->project__likes()->count() }}</td>
                                        <td class="trowc flex justify-center border-0">
                                            <button class="show-modal button_details"
                                                data-modal="datosProyecto_{{ $anteproject->id }}">
                                                <label class="w-full cursor-pointer">Ver detalles <i class="fa-solid fa-file-lines"></i></label>
                                            </button>
                                            <div idModal="datosProyecto_{{ $anteproject->id }}"
                                                class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
                                                <div class="bg-[#01A080] w-4/6 rounded shadow-lg ">
                                                    <div class="border-b px-4 py-2 flex justify-between items-center">
                                                        <h3 class="font-semibold text-lg ml-60 text-white">Revision de Cédula
                                                            Anteproyecto
                                                        </h3>
                                                        <button
                                                            class="close-modal bg-white rounded-full h-[1rem] flex items-center">
                                                            <p class="text-2xl"><i class="fa-solid fa-circle-xmark"
                                                                    style="color: #d50101;"></i></p>
                                                        </button>
                                                    </div>
                                                    <div action="{{ route('anteproyecto.show', ['anteproyecto' => $anteproject->id]) }}"
                                                        class="flex flex-col gap-4">
                                                        <div class="modal_conteiner ">
                                                            <div class=" w-fit flex absolute bg-white rounded border-2 p-4 items-center ml-[80rem]">
                                                                
                                                                @if (Auth::user()->teachers)
                                                                    @php
                                                                        $teacherId = Auth::user()->teachers->id;
                                                                        $projectManagementId = $anteproject->id;
                                                                        $like = App\Models\Project_Likes::where(
                                                                            'teacher_id',
                                                                            $teacherId,
                                                                        )
                                                                            ->where(
                                                                                'project_management_id',
                                                                                $projectManagementId,
                                                                            )
                                                                            ->first();
                                                                    @endphp
                                                                    <form
                                                                        action="{{ $like ? route('gestion_asesor_anteproyecto.destroy', ['gestion_asesor_anteproyecto' => $like->id]) : route('gestion_asesor_anteproyecto.store') }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @if ($like)
                                                                            @method('DELETE')
                                                                            <button class="button_like_red">Quitar
                                                                                visto bueno <i
                                                                                    class="fa-solid fa-file-circle-xmark"></i></button>
                                                                        @else
                                                                            <input type="hidden" name="teacher_id"
                                                                                value="{{ $teacherId }}">
                                                                            <input type="hidden" name="project_management_id"
                                                                                value="{{ $projectManagementId }}">
                                                                            <button class="button_like_blue"> Dar visto bueno <i
                                                                                    class="fa-solid fa-file-circle-check"></i></button>
                                                                        @endif
                                                                    </form>
                                                                @else
                                                                    <p>No se encontró información del asesor para este usuario.</p>
                                                                @endif
                                                            </div>
                                                            <!-- Aqui en esta parte ajusta el valor de h segun tus necesidades -->
                                                            <div class="flex flex-row w-full border-2">
                                                                <div class="w-full">
                                                                    <div class="bg-green-300 w-full">
                                                                        <div class="justify-between items-center w-full">
                                                                            <div class="bg-white shadow-md w-full">
                                                                                <div class="overflow-y-auto overflow-x-hidden h-[80vh]">
                                                                                    <div class="justify-between items-center w-full">
                                                                                    <div class="bg-white shadow-md w-full">
                                                                                        <div class=" h-[80vh]">
                                                                                            <div class="snap-start">
                                                                                                <br />
                                                                                                <br />
                                                                                                <br />
                                                                                                <h1 class="font-medium text-3xl text-center ml-24">CÉDULA DE
                                                                                                    ANTEPROYECTO DE ESTADÍA
                                                                                                </h1>
                                                                                                <br />
                                                                                                <br />
                                                                                                <style>
                                                                                                    .table-container {
                                                                                                        text-align: center;
                                                                                                    }
                                                
                                                                                                    .table-wrapper {
                                                                                                        margin: auto;
                                                                                                    }
                                                
                                                                                                    .project-table {
                                                                                                        border-collapse: collapse;
                                                                                                        border: 2px solid black;
                                                                                                        /* Grosor aumentado */
                                                                                                        width: 100%;
                                                                                                    }
                                                
                                                                                                    .project-table th,
                                                                                                    .project-table td {
                                                                                                        padding: 8px;
                                                                                                        border: 2px solid black;
                                                                                                        /* Grosor aumentado */
                                                                                                        text-align: left;
                                                                                                    }
                                                
                                                                                                    .project-table th:first-child,
                                                                                                    .project-table td:first-child {
                                                                                                        font-weight: bold;
                                                                                                    }
                                                
                                                                                                    .small-column {
                                                                                                        width: 20%;
                                                                                                    }
                                                
                                                                                                    .large-column {
                                                                                                        width: 30%;
                                                                                                    }
                                                                                                </style>
                                                
                                                                                                <div class="table-container">
                                                                                                    <div class="table-wrapper">
                                                                                                        <table class="project-table">
                                                                                                            <tr>
                                                                                                                <th class="small-column">División:</th>
                                                                                                                <td colspan="3" class="large-column">Ingeniería y
                                                                                                                    Tecnología</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <th class="small-column">Programa educativo:</th>
                                                                                                                <td colspan="3" class="large-column">
                                                                                                                    {{ $anteproject->educational_program }}</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <th class="small-column">Título del anteproyecto:</th>
                                                                                                                <td colspan="3" class="large-column">
                                                                                                                    {{ $anteproject->project_title }}</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <th class="small-column">Nombre del alumno:</th>
                                                                                                                <td colspan="3" class="large-column">
                                                                                                                    {{ $anteproject->student_name }}</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <th>Matrícula:</th>
                                                                                                                <td class="small-column">
                                                                                                                    {{ $anteproject->student_id }}</td>
                                                                                                                <th>Grupo:</th>
                                                                                                                <td class="large-column">
                                                                                                                    {{ $anteproject->student_group }}</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <th>Teléfono:</th>
                                                                                                                <td class="small-column">
                                                                                                                    {{ $anteproject->student_phone }}</td>
                                                                                                                <th>Correo electrónico:</th>
                                                                                                                <td class="large-column">
                                                                                                                    {{ $anteproject->student_email }}</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <th>Fecha de inicio del proyecto:</th>
                                                                                                                <td class="small-column">
                                                                                                                    {{ $anteproject->start_date }}</td>
                                                                                                                <th>Fecha de término del proyecto:</th>
                                                                                                                <td class="large-column">
                                                                                                                    {{ $anteproject->end_date }}</td>
                                                                                                            </tr>
                                                                                                        </table>
                                                                                                    </div>
                                                                                                </div>
                                                
                                                
                                                                                                <br />
                                                                                                <br />
                                                
                                                                                                <style>
                                                                                                    .table-container {
                                                                                                        text-align: center;
                                                                                                    }
                                                
                                                                                                    .table-wrapper {
                                                                                                        margin: auto;
                                                                                                        display: inline-block;
                                                                                                    }
                                                
                                                                                                    .project-table {
                                                                                                        border-collapse: collapse;
                                                                                                        border: 2px solid black;
                                                                                                        /* Grosor aumentado */
                                                                                                        width: 100%;
                                                                                                    }
                                                
                                                                                                    .project-table th,
                                                                                                    .project-table td {
                                                                                                        padding: 8px;
                                                                                                        border: 2px solid black;
                                                                                                        /* Grosor aumentado */
                                                                                                        text-align: left;
                                                                                                    }
                                                
                                                                                                    .project-table th:first-child,
                                                                                                    .project-table td:first-child {
                                                                                                        font-weight: bold;
                                                                                                    }
                                                                                                </style>
                                                
                                                                                                <div class="table-container">
                                                                                                    <div class="table-wrapper">
                                                                                                        <table class="project-table">
                                                                                                            <tr>
                                                                                                                <th class="small-column">Empresa:</th>
                                                                                                                <td colspan="3" class="large-column">
                                                                                                                    {{ $anteproject->project_company }}</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <th class="small-column">Dirección:</th>
                                                                                                                <td colspan="3" class="large-column">
                                                                                                                    {{ $anteproject->direction }}</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <th class="small-column">Nombre del asesor Empresarial:</th>
                                                                                                                <td colspan="3" class="large-column">
                                                                                                                    {{ $anteproject->project_advisor }}</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <th class="small-column">Cargo:</th>
                                                                                                                <td colspan="3" class="large-column">
                                                                                                                    {{ $anteproject->position }}</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <th>Teléfono:</th>
                                                                                                                <td class="small-column">9988233459</td>
                                                                                                                <th>Correo electrónico:</th>
                                                                                                                <td class="large-column">
                                                                                                                    {{ $anteproject->email_asesor }}</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <th>Área donde se desarrollará el proyecto:</th>
                                                                                                                <td colspan="3" class="large-column">Marketing</td>
                                                                                                            </tr>
                                                                                                        </table>
                                                                                                    </div>
                                                                                                </div>
                                                
                                                
                                                                                                <br />
                                                                                                <br />
                                                
                                                                                                <style>
                                                                                                    .section {
                                                                                                        border: 2px solid #000;
                                                                                                        /* Color del borde */
                                                                                                        border-radius: 5px;
                                                                                                        /* Borde redondeado */
                                                                                                        padding: 10px;
                                                                                                        /* Espaciado interno */
                                                                                                        margin-bottom: 20px;
                                                                                                        /* Margen inferior */
                                                                                                        margin-left: auto;
                                                                                                        /* Centrar horizontalmente */
                                                                                                        margin-right: auto;
                                                                                                        /* Centrar horizontalmente */
                                                                                                        max-width: 600px;
                                                                                                        /* Ancho máximo del cuadro */
                                                                                                    }
                                                
                                                                                                    .section p {
                                                                                                        margin-bottom: 5px;
                                                                                                        /* Espaciado inferior para el párrafo */
                                                                                                    }
                                                                                                </style>
                                                
                                                                                                <div>
                                                                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">1. Objetivo
                                                                                                        general:</h2>
                                                                                                    <div class="section">
                                                                                                        <p class="text-left font-light text-lg ml-24 mr-10 py-2">
                                                                                                            {{ $anteproject->general_objective }}</p>
                                                                                                    </div>
                                                                                                </div>
                                                
                                                                                                <div>
                                                                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">2.
                                                                                                        Planteamiento del Problema:</h2>
                                                                                                    <div class="section">
                                                                                                        <p class="text-left font-light text-lg ml-24 mr-10 py-2">
                                                                                                            {{ $anteproject->problem_statement }}</p>
                                                                                                    </div>
                                                                                                </div>
                                                
                                                                                                <div>
                                                                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">3.
                                                                                                        Justificación: debe manifestarse de manera clara y precisa del por
                                                                                                        qué y
                                                                                                        para qué se va llevar a cabo el estudio. Causas y propósitos que
                                                                                                        motivan la
                                                                                                        investigación. Contesta las preguntas: ¿Cuáles son los beneficios
                                                                                                        que este
                                                                                                        trabajo proporcionará? ¿Quiénes serán los beneficiados? ¿Cuál es su
                                                                                                        utilidad?</h2>
                                                                                                    <div class="section">
                                                                                                        <p class="text-left font-light text-lg ml-24 mr-10 py-2">
                                                                                                            {{ $anteproject->justification }}</p>
                                                                                                    </div>
                                                                                                </div>
                                                
                                                                                                <div>
                                                                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">4.
                                                                                                        Actividades para realizar:</h2>
                                                                                                    <div class="section">
                                                                                                        <p class="text-left font-light text-lg ml-24 mr-10 py-2">
                                                                                                            {{ $anteproject->activities }}</p>
                                                                                                    </div>
                                                                                                </div>
                                                
                                                
                                                
                                                                                                <br />
                                                                                                <br />
                                                
                                                
                                                                                                <h2 class="text-center font-medium text-xl ml-24 mr-10 py-2">EVALUACIÓN
                                                                                                    DEL
                                                                                                    ANTEPROYECTO
                                                                                                </h2>
                                                
                                                
                                                                                                <br />
                                                                                                <br />
                                                                                                <div class="flex">
                                                                                                </div>
                                                
                                                                                                <style>
                                                                                                    .table-container {
                                                                                                        text-align: center;
                                                                                                    }
                                                
                                                                                                    .project-table-container {
                                                                                                        margin: auto;
                                                                                                        /* Centra horizontalmente */
                                                                                                        width: 70%;
                                                                                                        /* Establece el ancho de la tabla */
                                                                                                    }
                                                
                                                                                                    .project-table {
                                                                                                        border-collapse: collapse;
                                                                                                        border: 2px solid black;
                                                                                                        /* Grosor aumentado */
                                                                                                        width: 100%;
                                                                                                    }
                                                
                                                                                                    .project-table th,
                                                                                                    .project-table td {
                                                                                                        padding: 8px;
                                                                                                        border: 2px solid black;
                                                                                                        /* Grosor aumentado */
                                                                                                        text-align: left;
                                                                                                    }
                                                
                                                                                                    .project-table th:first-child,
                                                                                                    .project-table td:first-child {
                                                                                                        font-weight: bold;
                                                                                                    }
                                                                                                </style>
                                                
                                                                                                <div class="table-container">
                                                                                                    <div class="project-table-container">
                                                                                                        <table class="project-table">
                                                                                                            <tr>
                                                
                                                                                                            </tr>
                                                                                                        </table>
                                                                                                    </div>
                                                                                                </div>
                                                
                                                
                                                
                                                                                                <br />
                                                                                                <br />
                                                
                                                                                                <br> <!-- Añadido para separar la tabla del contenido superior -->
                                                
                                                                                                <style>
                                                                                                    .table-container {
                                                                                                        text-align: center;
                                                                                                    }
                                                
                                                                                                    .project-table-container {
                                                                                                        margin: auto;
                                                                                                        /* Centra horizontalmente */
                                                                                                        width: 70%;
                                                                                                        /* Establece el ancho de la tabla */
                                                                                                    }
                                                
                                                                                                    .project-table {
                                                                                                        border-collapse: collapse;
                                                                                                        border: 1px solid black;
                                                                                                        width: 100%;
                                                                                                    }
                                                
                                                                                                    .project-table th,
                                                                                                    .project-table td {
                                                                                                        padding: 12px;
                                                                                                        /* Aumenta el espacio entre el contenido y el borde de la celda */
                                                                                                        border: 1px solid black;
                                                                                                        text-align: left;
                                                                                                    }
                                                
                                                                                                    .project-table th:first-child,
                                                                                                    .project-table td:first-child {
                                                                                                        font-weight: bold;
                                                                                                        width: 30%;
                                                                                                        /* Ajusta el ancho de la primera columna */
                                                                                                    }
                                                
                                                                                                    .project-table td {
                                                                                                        width: 70%;
                                                                                                        /* Ajusta el ancho de la segunda columna */
                                                                                                    }
                                                                                                </style>
                                                
                                                                                                <div class="table-container">
                                                                                                    <div class="project-table-container">
                                                                                                        <table class="project-table">
                                                                                                            <tr>
                                                                                                                <th>Asesor académico:</th>
                                                                                                                <td>{{ $anteproject->project_advisor }}</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <th>Correo electrónico:</th>
                                                                                                                <td>{{ $anteproject->email_asesor }}</td>
                                                                                                            </tr>
                                                                                                        </table>
                                                                                                    </div>
                                                
                                                                                                    <br />
                                                                                                    <br />
                                                
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforEach
                            </tbody>
                        </table>

                        <div class="mt-5">{{ $project_management->links() }}</div>
                    </div>
                </div>
            </div>

            

            <div class="w-1/5 h-fit gap-0 flex flex-col">
                <div class="content_conteiner h-fit p-2 card flex justify-center">
                    <div class="flex flex-col gap-2 items-center">
                        <h1>¿Qué más hacer?</h1>
                        <a href="/libros" class=" buttons_card_green w-full">
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
