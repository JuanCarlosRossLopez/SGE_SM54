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
                    <label class="font-poppins font-semibold text-2xl text-[#333333] text-start pb-3">Tabla de mis alumnos
                        como asesor</label>
                    <!-- Panel 1 -->
                    <div class="table_conteiner">
                        <table class="standar_table">
                            <thead class="standar_thead">
                                <tr>
                                    <th class="theader">Nombre anteproyecto</th>
                                    <th class="theader">Creador del proyecto</th>
                                    <th class="theader">Empresa</th>
                                    <th class="theader">Aprovaciones</th>
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
                                            <button class="show-modal button_details" data-modal="datosProyecto_{{ $anteproject->id }}">
                                                <label class="w-full cursor-pointer">Ver detalles <i class="fa-solid fa-file-lines"></i></label>
                                            </button>
                                        </td>
                                    </tr>
                                    <div idModal="datosProyecto_{{ $anteproject->id }}" class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
                                        <div class="bg-[#01A080] w-4/6 rounded shadow-lg ">
                                            <div class="border-b px-4 py-2 flex justify-between items-center">
                                                <h3 class="font-semibold text-lg ml-60 text-white">Revision de Cédula Anteproyecto
                                                </h3>
                                                <button
                                                    class="close-modal bg-white rounded-full h-[1rem] flex items-center">
                                                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark"
                                                            style="color: #d50101;"></i></p>
                                                </button>
                                            </div>
                                            <div action="{{ route('anteproyecto.show', ['anteproyecto' => $anteproject->id]) }}" class="flex flex-col gap-4">
                                                <div class="modal_conteiner ">
                                                    <div class=" w-full flex flex-col items-center my-4">
                                                        @if (Auth::user()->teachers)
                                                            @php
                                                                $teacherId = Auth::user()->teachers->id;
                                                                $projectManagementId = $anteproject->id;
                                                                $like = App\Models\Project_Likes::where(
                                                                    'teacher_id',
                                                                    $teacherId,
                                                                )
                                                                    ->where('project_management_id', $projectManagementId)
                                                                    ->first();
                                                            @endphp
                                                            <form
                                                                action="{{ $like ? route('gestion_asesor_anteproyecto.destroy', ['gestion_asesor_anteproyecto' => $like->id]) : route('gestion_asesor_anteproyecto.store') }}"
                                                                method="POST">
                                                                @csrf
                                                                @if ($like)
                                                                    @method('DELETE')
                                                                    <button class="button_like_red">Quitar
                                                                        aprobación <i class="fa-solid fa-file-circle-xmark"></i></button>
                                                                @else
                                                                    <input type="hidden" name="teacher_id"
                                                                        value="{{ $teacherId }}">
                                                                    <input type="hidden" name="project_management_id"
                                                                        value="{{ $projectManagementId }}">
                                                                    <button class="button_like_blue"> Aprobar <i class="fa-solid fa-file-circle-check"></i></button>
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
                                                                            <div class="snap-start">
                                                                                <br />
                                                                                <br />
                                                                                <br />
                                                                                <h1 class="font-medium text-3xl text-center ml-24">CÉDULA DE
                                                                                    ANTEPROYECTO DE ESTADÍA
                                                                                </h1>
                                                                                <br />
                                                                                <br />
                                                                                <div class="flex">
                                                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">División:
                                                                                    </h2>
                                                                                    <p class="text-left font-light text-lg  mr-20 py-2">Ingenieria y
                                                                                        Tecnología</p>
                                                                                </div>
                            
                                                                                <div class="flex">
                                                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Programa
                                                                                        educativo:
                                                                                    </h2>
                                                                                    <p class="text-left font-light text-lg  mr-20 py-2">
                                                                                        {{ $anteproject->educational_program }}</p>
                                                                                </div>
                            
                                                                                <div class="flex">
                                                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Título
                                                                                        del
                                                                                        anteproyecto:
                                                                                    </h2>
                                                                                    <p class="text-left font-light text-lg  mr-20 py-2">
                                                                                        {{ $anteproject->project_title }}</p>
                                                                                </div>
                            
                            
                            
                                                                                <div class="flex">
                                                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Nombre
                                                                                        del alumno:
                                                                                    </h2>
                                                                                    <p class="text-left font-light text-lg  mr-20 py-2">
                                                                                        {{ $anteproject->student_name }}</p>
                                                                                </div>
                            
                                                                                <div class="flex">
                                                                                    <div class="flex">
                                                                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">
                                                                                            Matrícula:</h2>
                                                                                        <p class="text-left font-light text-lg  mr-20 py-2">
                                                                                            {{ $anteproject->student_id }}</p>
                                                                                    </div>
                                                                                    <div class="flex">
                                                                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">
                                                                                            Grupo:</h2>
                                                                                        <p class="text-left font-light text-lg  mr-20 py-2">
                                                                                            {{ $anteproject->student_group }}</p>
                                                                                    </div>
                                                                                </div>
                            
                            
                                                                                <div class="flex">
                                                                                    <div class="flex">
                                                                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">
                                                                                            Teléfono:</h2>
                                                                                        <p class="text-left font-light text-lg  mr-20 py-2">
                                                                                            {{ $anteproject->student_phone }}</p>
                                                                                    </div>
                                                                                    <div class="flex">
                                                                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">
                                                                                            Correo
                                                                                            electrónico:
                                                                                        </h2>
                                                                                        <p class="text-left font-light text-lg  mr-20 py-2">
                                                                                            {{ $anteproject->student_email }}</p>
                                                                                    </div>
                                                                                </div>
                            
                            
                                                                                <div class="flex">
                                                                                    <div class="flex">
                                                                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Fecha
                                                                                            de inicio
                                                                                            del
                                                                                            proyecto:</h2>
                                                                                        <p class="text-left font-light text-lg  mr-20 py-2">
                                                                                            {{ $anteproject->start_date }}</p>
                                                                                    </div>
                                                                                    <div class="flex">
                                                                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Fecha
                                                                                            de término
                                                                                            del
                                                                                            proyecto:</h2>
                                                                                        <p class="text-left font-light text-lg  mr-20 py-2">
                                                                                            {{ $anteproject->end_date }}</p>
                                                                                    </div>
                                                                                </div>
                            
                                                                                <br />
                                                                                <br />
                            
                                                                                <div class="flex">
                                                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Empresa:
                                                                                    </h2>
                                                                                    <p class="text-left font-light text-lg  mr-20 py-2">
                                                                                        {{ $anteproject->project_company }}</p>
                                                                                </div>
                                                                                <div class="flex">
                                                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">
                                                                                        Dirección:</h2>
                                                                                    <p class="text-left font-light text-lg  mr-20 py-2">
                                                                                        {{ $anteproject->direction }}</p>
                                                                                </div>
                                                                                <div class="flex">
                                                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Nombre
                                                                                        del asesor
                                                                                        Empresarial:</h2>
                                                                                    <p class="text-left font-light text-lg  mr-20 py-2">
                                                                                        {{ $anteproject->project_advisor }}</p>
                                                                                </div>
                                                                                <div class="flex">
                                                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Cargo:
                                                                                    </h2>
                                                                                    <p class="text-left font-light text-lg  mr-20 py-2">
                                                                                        {{ $anteproject->position }}</p>
                                                                                </div>
                            
                            
                                                                                <div class="flex">
                                                                                    <div class="flex">
                                                                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">
                                                                                            Teléfono:</h2>
                                                                                        <p class="text-left font-light text-lg  mr-20 py-2">9988233459
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="flex">
                                                                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">
                                                                                            Correo
                                                                                            electrónico:
                                                                                        </h2>
                                                                                        <p class="text-left font-light text-lg  mr-20 py-2">
                                                                                            {{ $anteproject->email_asesor }}</p>
                                                                                    </div>
                                                                                </div>
                            
                            
                                                                                <div class="flex">
                                                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Área
                                                                                        donde se
                                                                                        desarrollará el proyecto:</h2>
                                                                                    <p class="text-left font-light text-lg  mr-20 py-2">Marketing</p>
                                                                                </div>
                            
                                                                                <br />
                                                                                <br />
                            
                                                                                <div>
                                                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">1.
                                                                                        Objetivo general:
                                                                                    </h2>
                                                                                    <p class="text-left font-light text-lg ml-24 mr-10 py-2">
                                                                                        {{ $anteproject->general_objective }}
                                                                                    </p>
                                                                                </div>
                                                                                <div>
                                                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">
                                                                                        2.Planteamiento del
                                                                                        Problema: exponer los aspectos, elementos y relaciones del
                                                                                        problema:</h2>
                                                                                    <p class="text-left font-light text-lg ml-24 mr-10 py-2">
                                                                                        {{ $anteproject->problem_statement }}
                                                                                    </p>
                                                                                </div>
                            
                            
                                                                                <div>
                                                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">3.
                                                                                        Justificación:
                                                                                        debe
                                                                                        manifestarse de manera clara y precisa del por qué y para qué se
                                                                                        va llevar a
                                                                                        cabo el estudio. Causas y propósitos que motivan la
                                                                                        investigación. Contesta
                                                                                        las
                                                                                        preguntas: ¿Cuáles son los beneficios que este trabajo
                                                                                        proporcionará?
                                                                                        ¿Quiénes
                                                                                        serán los beneficiados? ¿Cuál es su utilidad?</h2>
                                                                                    <p class="text-left font-light text-lg ml-24 mr-10 py-2">
                                                                                        {{ $anteproject->justification }}
                                                                                    </p>
                                                                                </div>
                            
                                                                                <div>
                                                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">4.
                                                                                        Actividades para
                                                                                        realizar: listar las actividades a llevar a cabo en orden</h2>
                                                                                    <p class="text-left font-light text-lg ml-24 mr-10 py-2">
                                                                                        {{ $anteproject->activities }}
                                                                                    </p>
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
                                                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Se
                                                                                        aprueba:</h2>
                                                                                    <p class="text-left font-light text-lg  mr-20 py-2">_Si
                                                                                    <p class="text-left font-light text-lg  mr-2 py-2">_No</p>
                                                                                    </p>
                                                                                </div>
                            
                                                                                <div class="flex">
                                                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">
                                                                                        Observaciones y/o
                                                                                        comentarios:</h2>
                                                                                    <p class="text-left font-light text-lg  mr-20 py-2">
                                                                                        Al contrario del pensamiento popular, el texto de Lorem
                                                                                        Ipsum no es simplemente texto aleatorio. Tiene sus raices en una
                                                                                        pieza cl´sica de la literatura del Latin, que d
                                                                                        ata del año 45 antes de Cristo, haciendo que este a
                                                                                        dquiera mas de 2000 años de antiguedad. Ric
                                                                                        hard McClintock, un profesor de Latin de la Uni
                                                                                        versidad de Hampden-Sydney en Virginia, encontró una d
                                                                                        e las palabras más oscuras de la lengua del latín,
                                                                                        "consecteur", en un pasaje de Lorem Ipsum, y al seguir leyendo
                                                                                        distintos textos del latín,
                                                                                    </p>
                                                                                </div>
                                                                                <div class="flex">
                                                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Asesor
                                                                                        académico:
                                                                                    </h2>
                                                                                    <p class="text-left font-light text-lg  mr-20 py-2">
                                                                                        {{ $anteproject->project_advisor }}</p>
                                                                                </div>
                            
                                                                                <div class="flex">
                                                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Correo
                                                                                        electrónico:
                                                                                    </h2>
                            
                                                                                    <p class="text-left font-light text-lg  mr-20 py-2">
                                                                                        {{ $anteproject->email_asesor }}</p>
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
                        <a href="/libro" class=" buttons_card_green w-full">
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
