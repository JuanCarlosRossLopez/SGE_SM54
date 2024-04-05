@extends('test.final_template')

@section('title')
    Plantilla base
@endsection

@section('contenido')
    <div class="back_conteiner">
        @if (session()->has('notificacion'))
            <div id="notification" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                {{ session('notificacion') }}</div>
            <script>
                setTimeout(function() {
                    document.getElementById('notification').style.display = 'none';
                }, 3000);
            </script>
        @endif
        <div class="conteiner_cards justify-center flex flex-row">
            <div class="conteiner_cards1 flex flex-col w-3/4">
                <!-- Mapeo de anteproyectos -->
                <div class="content_conteiner w-full h-fit p-4 mt-4">
                    <div class="flex flex-row items-center justify-between">
                        <label class="font-poppins font-semibold text-2xl text-[#333333] text-start"><label
                                class="italic">"{{ $project_management->project_title }}"</label> - Información
                            Integral:</label>
                        @role('Asesor')
                            <div class="flex flex-row w-[40%] gap-2 m-2">
                                <a class="buttons_card_red"><i class="fa-solid fa-square-xmark flex"></i> <button>Rechazar
                                        anteproyecto</button></a>
                                <a class="buttons_card_green"><i class="fa-solid fa-check-to-slot flex"></i> <button>Aceptar
                                        anteproyecto</button></a>
                            </div>
                        @endrole
                    </div>

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
                                                        {{ $project_management->educational_program }}</p>
                                                </div>

                                                <div class="flex">
                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Título
                                                        del
                                                        anteproyecto:
                                                    </h2>
                                                    <p class="text-left font-light text-lg  mr-20 py-2">
                                                        {{ $project_management->project_title }}</p>
                                                </div>



                                                <div class="flex">
                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Nombre
                                                        del alumno:
                                                    </h2>
                                                    <p class="text-left font-light text-lg  mr-20 py-2">
                                                        {{ $project_management->student_name }}</p>
                                                </div>

                                                <div class="flex">
                                                    <div class="flex">
                                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">
                                                            Matrícula:</h2>
                                                        <p class="text-left font-light text-lg  mr-20 py-2">
                                                            {{ $project_management->student_id }}</p>
                                                    </div>
                                                    <div class="flex">
                                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">
                                                            Grupo:</h2>
                                                        <p class="text-left font-light text-lg  mr-20 py-2">
                                                            {{ $project_management->student_group }}</p>
                                                    </div>
                                                </div>


                                                <div class="flex">
                                                    <div class="flex">
                                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">
                                                            Teléfono:</h2>
                                                        <p class="text-left font-light text-lg  mr-20 py-2">
                                                            {{ $project_management->student_phone }}</p>
                                                    </div>
                                                    <div class="flex">
                                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">
                                                            Correo
                                                            electrónico:
                                                        </h2>
                                                        <p class="text-left font-light text-lg  mr-20 py-2">
                                                            {{ $project_management->student_email }}</p>
                                                    </div>
                                                </div>


                                                <div class="flex">
                                                    <div class="flex">
                                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Fecha
                                                            de inicio
                                                            del
                                                            proyecto:</h2>
                                                        <p class="text-left font-light text-lg  mr-20 py-2">
                                                            {{ $project_management->start_date }}</p>
                                                    </div>
                                                    <div class="flex">
                                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Fecha
                                                            de término
                                                            del
                                                            proyecto:</h2>
                                                        <p class="text-left font-light text-lg  mr-20 py-2">
                                                            {{ $project_management->end_date }}</p>
                                                    </div>
                                                </div>

                                                <br />
                                                <br />

                                                <div class="flex">
                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Empresa:
                                                    </h2>
                                                    <p class="text-left font-light text-lg  mr-20 py-2">
                                                        {{ $project_management->project_company }}</p>
                                                </div>
                                                <div class="flex">
                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">
                                                        Dirección:</h2>
                                                    <p class="text-left font-light text-lg  mr-20 py-2">
                                                        {{ $project_management->direction }}</p>
                                                </div>
                                                <div class="flex">
                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Nombre
                                                        del asesor
                                                        Empresarial:</h2>
                                                    <p class="text-left font-light text-lg  mr-20 py-2">
                                                        {{ $project_management->project_advisor }}</p>
                                                </div>
                                                <div class="flex">
                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Cargo:
                                                    </h2>
                                                    <p class="text-left font-light text-lg  mr-20 py-2">
                                                        {{ $project_management->position }}</p>
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
                                                            {{ $project_management->email_asesor }}</p>
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
                                                        {{ $project_management->general_objective }}
                                                    </p>
                                                </div>
                                                <div>
                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">
                                                        2.Planteamiento del
                                                        Problema: exponer los aspectos, elementos y relaciones del
                                                        problema:</h2>
                                                    <p class="text-left font-light text-lg ml-24 mr-10 py-2">
                                                        {{ $project_management->problem_statement }}
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
                                                        {{ $project_management->justification }}
                                                    </p>
                                                </div>

                                                <div>
                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">4.
                                                        Actividades para
                                                        realizar: listar las actividades a llevar a cabo en orden</h2>
                                                    <p class="text-left font-light text-lg ml-24 mr-10 py-2">
                                                        {{ $project_management->activities }}
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
                                                        {{ $project_management->project_advisor }}</p>
                                                </div>

                                                <div class="flex">
                                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Correo
                                                        electrónico:
                                                    </h2>

                                                    <p class="text-left font-light text-lg  mr-20 py-2">
                                                        {{ $project_management->email_asesor }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class=" w-full h-fit">
                        <!--  Aqui se mapean los comentarios  -->
                        <div class=" w-full flex flex-row justify-between items-center">
                            <label
                                class="font-poppins font-semibold text-2xl text-[#333333] text-start mt-2">Observaciones
                                realizadas:</label>
                        </div>
                        <div class="justify-between items-center gap-2 w-full">
                            @foreach ($comments as $comment)
                                <div class="bg-white py-2 shadow-md w-full flex flex-col border-2">
                                    <div class="flex flex-col">
                                        <label
                                            class="font-semibold font-poppins text-lg text-start w-full px-2">{{ $comment->teacher->name_teacher }}:</label>
                                        <label
                                            class="font-normal font-poppins text-lg text-start w-full px-2">{{ $comment->general_comment }}</label>
                                    </div>
                                    <label class="w-full text-end px-2 italic font-normal text-[#838383]">Obsevación
                                        realizada {{ $comment->created_at }} <i class="fa-regular fa-clock"></i>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


            <div class="w-1/5 h-fit gap-0 flex flex-col">
                <div class="content_conteiner h-fit p-2 card flex justify-center">
                    <div class="flex flex-col gap-2 items-center">
                        <h1>¿Qué más hacer?</h1>
                        <a class=" buttons_card_green w-full">
                            <i class="fi fi-sr-books flex"></i><button class="w-full text-start">Ver libros</button>
                        </a>
                        <a href="/historial_de_memorias" class="buttons_card_green">
                            <i class="fi fi-sr-memo-circle-check flex"></i><button> Ver memorias finalizadas</button>
                        </a>
                        @role('Asesor')
                            <button class="buttons_card_green show-modal">
                                <i class="fa-solid fa-comment-dots flex"></i><label class="cursor-pointer">Realizar una
                                    observación</label>
                            </button>
                        @endrole
                    </div>
                </div>

                <div class="content_conteiner h-fit p-4 card">
                    <div class="flex flex-col gap-2 justify-center w-full items-center">
                        <h1>Recordatorios</h1>
                        <p class="font-normal font-poppins text-center text-lg">Sin nada que hacer</p>
                        <label>Soy yo de nuevo, ya realiza los comentarios <i class="fa-solid fa-thumbs-up"></i>
                        </label>
                        <label>Perooo, aun esta en desarrollo el aceptar anteproyecto<i
                                class="fa-solid fa-thumbs-down"></i> </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Formulario -->
    <div
        class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-4xl">
            <div class="border-b px-4 py-2 w-full flex flex-row items-center justify-end ">
                <label
                    class="font-poppins w-full font-normal text-2xl text-white flex mt-2 text-center justify-center">Realizar
                    una observación a "{{ $project_management->project_title }}"</label>
                <button class="close-modal bg-white rounded-full h-[1rem] flex items-center justify-center w-fit">
                    <label class="text-2xl cursor-pointer"><i class="fa-solid fa-circle-xmark"
                            style="color: #d50101;"></i></label>
                </button>
            </div>
            <div class="modal_conteiner">
                <!-- Aqui en esta parte ajusta el valor de h segun tus necesidades, si es muy grande el contenido recomiendo dejar como h-[85vh]-->
                <div class="modal-body h-fit">
                    <form id="commentForm" action="{{ route('crear_comentario.store') }}" method="POST">
                        @csrf
                        <div class="flex flex-col items-center">
                            <div class="flex flex-col justify-start w-[800px]">

                                <label class="font-poppins font-normal text-lg text-[#333333] text-start mt-2">Realizar
                                    una observación:</label>
                                <textarea type="text" name="general_comment" id="general_comment" class="rounded h-[5rem]"></textarea>
                                <p id="mensajeError" style="color: red;"></p>
                            </div>
                            <div>
                                @if (Auth::user()->teachers)
                                    <input type="text" name="teacher_id" id="teacher_id" class="rounded hidden"
                                        value="{{ Auth::user()->teachers->id }}">
                                @else
                                    No se encontró información del asesor para este usuario.
                                @endif
                            </div>
                            <div>
                                <input type="text" name="project_management_id" id="project_management_id"
                                    class="rounded hidden" value="{{ $project_management->id }}">
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="buttons_card_green"><i
                                        class="fa-solid fa-marker"></i>Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal
                <div
                    class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
                    <div class="bg-[#01A080] w-full rounded shadow-lg max-w-4xl">
                        <div class="border-b px-4 py-2 flex justify-between items-center">
                            <h3 class="font-semibold text-lg ml-60 text-white">Agendar Citas Para Revisión</h3>
                            <button class="close-modal bg-white rounded-full h-[1rem] flex items-center">
                                <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                            </button>
                        </div>
                        <div class="modal_conteiner">
                            Aqui en esta parte ajusta el valor de h segun tus necesidades, si es muy grande el contenido recomiendo dejar como h-[85vh]
                            <div class="modal-body h-fit">
                                <h1 class="titles">Fecha de Revisión</h1>
                                <input type="date" class="border-2 border-[#01A080] rounded-md w-full px-2 py-1 mb-3"></input>

                                <h1 class="titles">Hora de Revisión</h1>
                                <input type="time" class="border-2 border-[#01A080] rounded-md w-full px-2 py-1 mb-3"></input>


                                <h1 class="titles">Motivo de Cita</h1>
                                <textarea placeholder="cometarios...." class="border-2 border-[#01A080] rounded-md w-full h-[7rem] px-2 py-1 mb-3"></textarea>


                                <div class="flex justify-center items-center w-full border-t pt-2">
                                    <button class="bg-green-600 hover:bg-green-700 p-2 py-1 rounded text-white">Confirmar
                                        Cita</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div
                    class="modalb h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
                    <div class="bg-[#01A080] w-full rounded shadow-lg max-w-4xl">
                        <div class="border-b px-4 py-2 flex justify-between items-center">
                            <h3 class="font-semibold text-lg ml-60 text-white">Editar Citas Para Revisión</h3>
                            <button class="close-modalb bg-white rounded-full h-[1rem] flex items-center">
                                <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                            </button>
                        </div>
                        <div class="modal_conteiner">
                            Aqui en esta parte ajusta el valor de h segun tus necesidades, si es muy grande el contenido recomiendo dejar como h-[85vh]
                            <div class="modal-body h-fit">
                                <h1 class="titles ">Primera Cita</h1>
                                <input type="date" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                                <input type="time" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                                <a href="/editar_cita"
                                    class="bg-green-600 hover:bg-green-700 p-2 py-1 w-44 rounded text-white">Editar
                                    Cita</a>

                                <h1 class="titles mt-4">Segunda Cita</h1>
                                <input type="date" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                                <input type="time" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                                <a href="/editar_cita"
                                    class="bg-green-600 hover:bg-green-700 p-2 py-1 w-44 rounded text-white">Editar
                                    Cita</a>

                                <h1 class="titles mt-4">Segunda Cita</h1>
                                <input type="date" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                                <input type="time" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                                <a href="/editar_cita"
                                    class="bg-green-600 hover:bg-green-700 p-2 py-1 w-44 rounded text-white">Editar
                                    Cita</a>
                                <div class="flex justify-center items-center w-full border-t pt-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->


    <script>
        const modal = document.querySelector('.modal');
        const showModal = document.querySelector('.show-modal');
        const closeModal = document.querySelectorAll('.close-modal');

        showModal.addEventListener('click', function() {
            modal.classList.remove('hidden')
        })

        closeModal.forEach(close => {
            close.addEventListener('click', function() {
                modal.classList.add('hidden')
            })
        })

        //Validacion de input para que no se vaya nulo
        function validar_input() {
            var comment = document.getElementById("general_comment").value;
            if (comment.trim() == "") {
                document.getElementById("mensajeError").innerText = "Por favor, completa el campo de observación.";
                return false; // Evita que el formulario se envíe
            }
            return true; // Permite el envío del formulario si el campo está lleno
        }

        // Agregar el evento onclick al botón de envío del formulario
        document.getElementById("commentForm").addEventListener("submit", function(event) {
            if (!validar_input()) {
                event.preventDefault(); // Evita que el formulario se envíe si la validación falla
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
@endsection