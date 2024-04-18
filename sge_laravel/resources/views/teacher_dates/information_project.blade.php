@extends('test.final_template')

@section('title')
Plantilla base
@endsection

@section('contenido')
<div class="back_conteiner">
    @if (session()->has('notificacion'))
    <div id="notification" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
        {{ session('notificacion') }}
    </div>
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
                    <label class="font-poppins font-semibold text-2xl text-[#333333] text-start"><label class="italic">"{{ $project_management->project_title }}"</label> - Información
                        Integral:</label>
                    @if ($project_management->project_status && $project_management->project_status->status_project == 'Aprobado')
                    <div class="w-[120px] flex">
                        <div class="buttons_card_green">
                            Aprobado
                        </div>
                    </div>
                    @elseif ($project_management->project_status && $project_management->project_status->status_project == 'Rechazado')
                    <div class="w-[120px] flex">
                        <div class="buttons_card_red">
                            Rechazado
                        </div>
                    </div>
                    @elseif ($project_management->project_status && $project_management->project_status->status_project == 'Pendiente')
                    <div class="w-[120px] flex">
                        <div class="buttons_card_yellow">
                            Pendiente
                        </div>
                    </div>
                    @endif

                    @role('Asesor')




                    <div class="flex flex-row w-[40%] gap-2 m-2">

                    @if ($project_management->project_status && $project_management->project_status->status_project == 'Aprobado')


                        @else

                        @foreach ($status as $statu)
                        <form action="{{
                            route('informacion_anteproyecto.update', $project_management->id)
                        
                        }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="text" value="" hidden>

                            @if ($statu->status_project == 'Aprobado')
                            <input type="text" value="{{$statu->id}}" hidden name="status_project_id">
                            <a class="buttons_card_green"><i class="fa-solid fa-check-to-slot flex"></i> <button>Aceptar
                                    anteproyecto</button></a>

                            @elseif ($statu->status_project == 'Rechazado')
                            <input type="text" value="{{$statu->id}}" hidden name="status_project_id">

                            <a class="buttons_card_red">
                                <i class="fa-solid fa-square-xmark flex"></i> <button>Rechazar
                                    anteproyecto</button>
                            </a>

                            @endif



                        </form>
                        @endforeach


                        @endif







                    </div>
                    @endrole
                </div>






                <div class="flex flex-row w-full border-2">
                    <div class="w-full">
                        <div class="bg-green-300 w-full">
                            <p>






                            </p>
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
                                    border: 2px solid black; /* Grosor aumentado */
                                    width: 100%;
                                }

                                .project-table th,
                                .project-table td {
                                    padding: 8px;
                                    border: 2px solid black; /* Grosor aumentado */
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
                                            <td colspan="3" class="large-column">Ingeniería y Tecnología</td>
                                        </tr>
                                        <tr>
                                            <th class="small-column">Programa educativo:</th>
                                            <td colspan="3" class="large-column">{{ $project_management->educational_program }}</td>
                                        </tr>
                                        <tr>
                                            <th class="small-column">Título del anteproyecto:</th>
                                            <td colspan="3" class="large-column">{{ $project_management->project_title }}</td>
                                        </tr>
                                        <tr>
                                            <th class="small-column">Nombre del alumno:</th>
                                            <td colspan="3" class="large-column">{{ $project_management->student_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Matrícula:</th>
                                            <td class="small-column">{{ $project_management->student_id }}</td>
                                            <th>Grupo:</th>
                                            <td class="large-column">{{ $project_management->student_group }}</td>
                                        </tr>
                                        <tr>
                                            <th>Teléfono:</th>
                                            <td class="small-column">{{ $project_management->student_phone }}</td>
                                            <th>Correo electrónico:</th>
                                            <td class="large-column">{{ $project_management->student_email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Fecha de inicio del proyecto:</th>
                                            <td class="small-column">{{ $project_management->start_date }}</td>
                                            <th>Fecha de término del proyecto:</th>
                                            <td class="large-column">{{ $project_management->end_date }}</td>
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
                                                border: 2px solid black; /* Grosor aumentado */
                                                width: 100%;
                                            }

                                            .project-table th,
                                            .project-table td {
                                                padding: 8px;
                                                border: 2px solid black; /* Grosor aumentado */
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
                                                        <td colspan="3" class="large-column">{{ $project_management->project_company }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="small-column">Dirección:</th>
                                                        <td colspan="3" class="large-column">{{ $project_management->direction }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="small-column">Nombre del asesor Empresarial:</th>
                                                        <td colspan="3" class="large-column">{{ $project_management->project_advisor }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="small-column">Cargo:</th>
                                                        <td colspan="3" class="large-column">{{ $project_management->position }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Teléfono:</th>
                                                        <td class="small-column">9988233459</td>
                                                        <th>Correo electrónico:</th>
                                                        <td class="large-column">{{ $project_management->email_asesor }}</td>
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
                                                border: 2px solid #000; /* Color del borde */
                                                border-radius: 5px; /* Borde redondeado */
                                                padding: 10px; /* Espaciado interno */
                                                margin-bottom: 20px; /* Margen inferior */
                                                margin-left: auto; /* Centrar horizontalmente */
                                                margin-right: auto; /* Centrar horizontalmente */
                                                max-width: 600px; /* Ancho máximo del cuadro */
                                            }

                                            .section p {
                                                margin-bottom: 5px; /* Espaciado inferior para el párrafo */
                                            }
                                        </style>

                                        <div>
                                            <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">1. Objetivo general:</h2>
                                            <div class="section">
                                                <p class="text-left font-light text-lg ml-24 mr-10 py-2">{{ $project_management->general_objective }}</p>
                                            </div>
                                        </div>

                                        <div>
                                            <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">2. Planteamiento del Problema:</h2>
                                            <div class="section">
                                                <p class="text-left font-light text-lg ml-24 mr-10 py-2">{{ $project_management->problem_statement }}</p>
                                            </div>
                                        </div>

                                        <div>
                                            <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">3. Justificación: debe manifestarse de manera clara y precisa del por qué y
                                        para qué se va llevar a cabo el estudio. Causas y propósitos que motivan la
                                        investigación. Contesta las preguntas: ¿Cuáles son los beneficios que este
                                        trabajo proporcionará? ¿Quiénes serán los beneficiados? ¿Cuál es su
                                        utilidad?</h2>
                                            <div class="section">
                                                <p class="text-left font-light text-lg ml-24 mr-10 py-2">{{ $project_management->justification }}</p>
                                            </div>
                                        </div>

                                        <div>
                                            <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">4. Actividades para realizar:</h2>
                                            <div class="section">
                                                <p class="text-left font-light text-lg ml-24 mr-10 py-2">{{ $project_management->activities }}</p>
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
                                                    margin: auto; /* Centra horizontalmente */
                                                    width: 70%; /* Establece el ancho de la tabla */
                                                }

                                                .project-table {
                                                    border-collapse: collapse;
                                                    border: 2px solid black; /* Grosor aumentado */
                                                    width: 100%;
                                                }

                                                .project-table th,
                                                .project-table td {
                                                    padding: 8px;
                                                    border: 2px solid black; /* Grosor aumentado */
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
                                                margin: auto; /* Centra horizontalmente */
                                                width: 70%; /* Establece el ancho de la tabla */
                                            }

                                            .project-table {
                                                border-collapse: collapse;
                                                border: 1px solid black;
                                                width: 100%;
                                            }

                                            .project-table th,
                                            .project-table td {
                                                padding: 12px; /* Aumenta el espacio entre el contenido y el borde de la celda */
                                                border: 1px solid black;
                                                text-align: left;
                                            }

                                            .project-table th:first-child,
                                            .project-table td:first-child {
                                                font-weight: bold;
                                                width: 30%; /* Ajusta el ancho de la primera columna */
                                            }

                                            .project-table td {
                                                width: 70%; /* Ajusta el ancho de la segunda columna */
                                            }
                                        </style>

                                        <div class="table-container">
                                            <div class="project-table-container">
                                                <table class="project-table">
                                                    <tr>
                                                        <th>Asesor académico:</th>
                                                        <td>{{ $project_management->project_advisor }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Correo electrónico:</th>
                                                        <td>{{ $project_management->email_asesor }}</td>
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
                <div class=" w-full h-fit">
                    <!--  Aqui se mapean los comentarios  -->
                    <div class=" w-full flex flex-row justify-between items-center">
                        <label class="font-poppins font-semibold text-2xl text-[#333333] text-start mt-2">Observaciones
                            realizadas:</label>
                    </div>
                    <div class="justify-between items-center gap-2 w-full">
                        @foreach ($comments as $comment)
                        <div class="bg-white py-2 shadow-md w-full flex flex-col border-2">
                            <div class="flex flex-col">
                                <label class="font-semibold font-poppins text-lg text-start w-full px-2">{{ $comment->teacher->name_teacher }}:</label>
                                <label class="font-normal font-poppins text-lg text-start w-full px-2">{{ $comment->general_comment }}</label>
                            </div>
                            <label class="w-full text-end px-2 italic font-normal text-[#838383]">Obsevación
                                realizada {{ $comment->created_at }} <i class="fa-regular fa-clock"></i>
                            </label>
                                @if($comment->status == 0)
                                     @role('Estudiante')
                                    <a href="{{ route('comments.update', ['id' => $comment->id]) }}" class="bg-[#a68e18cb] text-[#fcf6e1] rounded-md w-24 p-1 m-2" >Corregir</a>
                                    @endrole
                                    @else
                                    <span class="bg-green-100 border border-green-400 text-green-700 rounded-md w-24 p-1 m-2">Corregido</span>
                                @endif

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
                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Formulario -->
<div class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <div class="bg-[#01A080] w-full rounded shadow-lg max-w-4xl">
        <div class="border-b px-4 py-2 w-full flex flex-row items-center justify-end ">
            <label class="font-poppins w-full font-normal text-2xl text-white flex mt-2 text-center justify-center">Realizar
                una observación a "{{ $project_management->project_title }}"</label>
            <button class="close-modal bg-white rounded-full h-[1rem] flex items-center justify-center w-fit">
                <label class="text-2xl cursor-pointer"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></label>
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
                            <input type="text" name="teacher_id" id="teacher_id" class="rounded hidden" value="{{ Auth::user()->teachers->id }}">
                            @else
                            No se encontró información del asesor para este usuario.
                            @endif
                        </div>
                        <div>
                            <input type="text" name="project_management_id" id="project_management_id" class="rounded hidden" value="{{ $project_management->id }}">
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="buttons_card_green"><i class="fa-solid fa-marker"></i>Guardar</button>
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>
@endsection