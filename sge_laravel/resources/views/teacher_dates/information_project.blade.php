@extends('test.test_template')

@section('title')
    Plantilla base
@endsection

@section('contenido')
    <div class="back_conteiner">
        <div class="w-full">
            <div class="top_conteiner justify-between">
                <div>
                    <label>Consulta individual de anteproyecto</label>
                    <i class="fa-solid fa-calendar-check"></i>
                </div>
                <a href="/dashboard_asesor" class="bg-[#01a080] p-2 text-white text-base font-semibold rounded">Regresar</a>
            </div>

        </div>

        <div class=" flex flex-nowrap space-x-1 w-full gap-2 mb-4">
            <div class="content_conteiner2 w-full ">
                <div class=" w-full flex flex-row items-center">
                    <div>
                        <label class="conteiner_word_title">Información de anteproyecto</label>
                        <label id="infoButton" class="cursor-pointer mt-3"
                            data-tooltip="Aquí usted podra hacer una revisión del anteproyecto o gestionar las citas del mismo">
                            <i class="fas fa-exclamation-circle text-[#01A080] text-2xl "></i>
                        </label>
                    </div>
                    <button class="text-xl font-medium text-white bg-[#01A080] h-12 w-24 rounded-xl mt-2 ml-96 ">Aceptar</button>
                    <button class="text-xl font-medium text-white bg-[#a02301] h-12 w-24 rounded-xl mt-2 ml-10">Rechazar</button>
                </div>
                <div class="bg-green-300 w-full">
                    <div class="justify-between items-center w-full">
                        <div class="bg-white shadow-md w-full">
                            <div class="overflow-y-auto overflow-x-hidden mt-3 h-[80vh]">
                                <div class="snap-start">
                                    <br />
                                    <br />
                                    <br />
                                    <h1 class="font-medium text-3xl text-center ml-24">CÉDULA DE ANTEPROYECTO DE ESTADÍA
                                    </h1>
                                    <br />
                                    <br />
                                    <div class="flex">
                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">División:</h2>
                                        <p class="text-left font-light text-lg  mr-20 py-2">Ingenieria y Tecnología</p>
                                    </div>

                                    <div class="flex">
                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Programa educativo:</h2>
                                        <p class="text-left font-light text-lg  mr-20 py-2">{{$project_management->educational_program}}</p>
                                    </div>

                                    <div class="flex">
                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Título del anteproyecto:
                                        </h2>
                                        <p class="text-left font-light text-lg  mr-20 py-2">{{$project_management->project_title}}</p>
                                    </div>



                                    <div class="flex">
                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Nombre del alumno:</h2>
                                        <p class="text-left font-light text-lg  mr-20 py-2">{{$project_management->student_name}}</p>
                                    </div>

                                    <div class="flex">
                                        <div class="flex">
                                            <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Matrícula:</h2>
                                            <p class="text-left font-light text-lg  mr-20 py-2">{{$project_management->student_id}}</p>
                                        </div>
                                        <div class="flex">
                                            <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Grupo:</h2>
                                            <p class="text-left font-light text-lg  mr-20 py-2">{{$project_management->student_group}}</p>
                                        </div>
                                    </div>


                                    <div class="flex">
                                        <div class="flex">
                                            <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Teléfono:</h2>
                                            <p class="text-left font-light text-lg  mr-20 py-2">{{$project_management->student_phone}}</p>
                                        </div>
                                        <div class="flex">
                                            <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Correo electrónico:
                                            </h2>
                                            <p class="text-left font-light text-lg  mr-20 py-2">{{$project_management->student_email}}</p>
                                        </div>
                                    </div>


                                    <div class="flex">
                                        <div class="flex">
                                            <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Fecha de inicio del
                                                proyecto:</h2>
                                            <p class="text-left font-light text-lg  mr-20 py-2">{{$project_management->start_date}}</p>
                                        </div>
                                        <div class="flex">
                                            <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Fecha de término del
                                                proyecto:</h2>
                                            <p class="text-left font-light text-lg  mr-20 py-2">{{$project_management->end_date}}</p>
                                        </div>
                                    </div>

                                    <br />
                                    <br />

                                    <div class="flex">
                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Empresa:</h2>
                                        <p class="text-left font-light text-lg  mr-20 py-2">{{$project_management->project_company}}</p>
                                    </div>
                                    <div class="flex">
                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Dirección:</h2>
                                        <p class="text-left font-light text-lg  mr-20 py-2">{{$project_management->direction}}</p>
                                    </div>
                                    <div class="flex">
                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Nombre del asesor
                                            Empresarial:</h2>
                                        <p class="text-left font-light text-lg  mr-20 py-2">Diego Horacio Dorantes</p>
                                    </div>
                                    <div class="flex">
                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Cargo:</h2>
                                        <p class="text-left font-light text-lg  mr-20 py-2">{{$project_management->position}}</p>
                                    </div>


                                    <div class="flex">
                                        <div class="flex">
                                            <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Teléfono:</h2>
                                            <p class="text-left font-light text-lg  mr-20 py-2">9988233459</p>
                                        </div>
                                        <div class="flex">
                                            <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Correo electrónico:
                                            </h2>
                                            <p class="text-left font-light text-lg  mr-20 py-2">{{$project_management->email_asesor}}</p>
                                        </div>
                                    </div>


                                    <div class="flex">
                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Área donde se
                                            desarrollará el proyecto:</h2>
                                        <p class="text-left font-light text-lg  mr-20 py-2">Marketing</p>
                                    </div>

                                    <br />
                                    <br />

                                    <div>
                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">1. Objetivo general:</h2>
                                        <p class="text-left font-light text-lg ml-24 mr-10 py-2">
                                            {{$project_management->general_objective}}
                                        </p>
                                    </div>
                                    <div>
                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">2.Planteamiento del
                                            Problema: exponer los aspectos, elementos y relaciones del problema:</h2>
                                        <p class="text-left font-light text-lg ml-24 mr-10 py-2">
                                            {{$project_management->problem_statement}}
                                        </p>
                                    </div>


                                    <div>
                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">3. Justificación: debe
                                            manifestarse de manera clara y precisa del por qué y para qué se va llevar a
                                            cabo el estudio. Causas y propósitos que motivan la investigación. Contesta las
                                            preguntas: ¿Cuáles son los beneficios que este trabajo proporcionará? ¿Quiénes
                                            serán los beneficiados? ¿Cuál es su utilidad?</h2>
                                        <p class="text-left font-light text-lg ml-24 mr-10 py-2">
                                            {{$project_management->justification}}
                                        </p>
                                    </div>

                                    <div>
                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">4. Actividades para
                                            realizar: listar las actividades a llevar a cabo en orden</h2>
                                        <p class="text-left font-light text-lg ml-24 mr-10 py-2">
                                            {{$project_management->activities}}
                                        </p>
                                    </div>
                                    <br />
                                    <br />
                                    <h2 class="text-center font-medium text-xl ml-24 mr-10 py-2">EVALUACIÓN DEL ANTEPROYECTO
                                    </h2>
                                    <br />
                                    <br />
                                    <div class="flex">
                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Se aprueba:</h2>
                                        <p class="text-left font-light text-lg  mr-20 py-2">_Si
                                        <p class="text-left font-light text-lg  mr-2 py-2">_No</p>
                                        </p>
                                    </div>

                                    <div class="flex">
                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Observaciones y/o
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
                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Asesor académico:</h2>
                                        <p class="text-left font-light text-lg  mr-20 py-2">{{$project_management->project_advisor}}</p>
                                    </div>

                                    <div class="flex">
                                        <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Correo electrónico:</h2>
                                        
                                        <p class="text-left font-light text-lg  mr-20 py-2">{{$project_management->email_asesor}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!--  Aqui se mapean los comentarios  -->
                <div class=" w-full flex flex-row justify-between items-center">
                    <label class="conteiner_word_title">Comentarios de revisión:</label>
                </div>
                <div class="justify-between items-center w-full">
                    {{-- @foreach ($comments as $comment)
                        <div class="bg-white p-2 shadow-md w-full flex flex-col rounded mt-1">
                            <label class="font-semibold font-poppins text-lg text-start w-full">Comentario realizado por: usuario1</label>
                            <label class="font-normal font-poppins text-base italic text-start w-full px-2">{{$comment->general_comment }}</label>
                        </div>
                    @endforeach --}}
                </div>



            </div>
            <div class="flex flex-col items-center w-[30rem] h-fit">
                <div class="content_conteiner w-full">
                    <label class="conteiner_word_title flex flex-col items-center font-semibold">Información relevante</label>
                    <div class="flex flex-col">
                        <br/>
                        <label class="font-medium text-xl ">Poner informacion como: </label>
                        <label class="font-medium text-lg ">- Aceptado por asesor?</label>
                        <label class="font-medium text-lg ">- Colaborativo</label>
                        <label class="font-medium text-lg ">- Likes</label>
                    </div>
                    <!-- Botones de calendario -->
                    <!--
                                <div class="flex flex-col gap-1 pt-1">
                                    <button
                                        class="show-modal bg-gray-700 text-white font-medium px-2 text-lg py-1 rounded-lg border-solid border-1 border-green-600">Asignar
                                        cita de revisión</button>
                                    <button
                                        class="show-modalb bg-green-600 bg-opacity-80 text-gray-800 font-medium text-lg px-2 py-1 rounded-lg border-solid border-1 border-gray-700">Editar
                                        cita de revisión</button>
                                </div>
                                -->
                </div>
                <div class="content_conteiner w-full h-fit">
                    <label class="conteiner_word_title flex flex-col items-center">¿Qué más?</label>
                    <a href="/crear_comentario"
                        class="bg-[#01a080] bg-opacity-80 text-white font-medium text-lg px-2 py-1 rounded-lg border-solid border-1 ">Realizar
                        comentario a la cedula</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal Formulario -->
    <div class="modalf h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-4xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Realizar comentario general</h3>
                <button class="close-modalf bg-white rounded-full h-[1rem] flex items-center">
                    <textarea class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></textarea>
                </button>
            </div>
            <div class="modal_conteiner">
                <!-- Aqui en esta parte ajusta el valor de h segun tus necesidades, si es muy grande el contenido recomiendo dejar como h-[85vh]-->
                <div class="modal-body h-fit">
                    
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-4xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Agendar Citas Para Revisión</h3>
                <button class="close-modal bg-white rounded-full h-[1rem] flex items-center">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="modal_conteiner">
                <!-- Aqui en esta parte ajusta el valor de h segun tus necesidades, si es muy grande el contenido recomiendo dejar como h-[85vh]-->
                <div class="modal-body h-fit">
                    <h1 class="titles">Fecha de Revisión</h1>
                    <input type="date" class="border-2 border-[#01A080] rounded-md w-full px-2 py-1 mb-3"></input>

                    <h1 class="titles">Hora de Revisión</h1>
                    <input type="time" class="border-2 border-[#01A080] rounded-md w-full px-2 py-1 mb-3"></input>


                    <h1 class="titles">Motivo de Cita</h1>
                    <textarea placeholder="cometarios...." class="border-2 border-[#01A080] rounded-md w-full h-[7rem] px-2 py-1 mb-3"></textarea>


                    <div class="flex justify-center items-center w-full border-t pt-2">
                        <button class="bg-green-600 hover:bg-green-700 p-2 py-1 rounded text-white">Confirmar Cita</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modalb h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-4xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Editar Citas Para Revisión</h3>
                <button class="close-modalb bg-white rounded-full h-[1rem] flex items-center">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="modal_conteiner">
                <!-- Aqui en esta parte ajusta el valor de h segun tus necesidades, si es muy grande el contenido recomiendo dejar como h-[85vh]-->
                <div class="modal-body h-fit">
                    <h1 class="titles ">Primera Cita</h1>
                    <input type="date" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                    <input type="time" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                    <a href="/editar_cita" class="bg-green-600 hover:bg-green-700 p-2 py-1 w-44 rounded text-white">Editar
                        Cita</a>

                    <h1 class="titles mt-4">Segunda Cita</h1>
                    <input type="date" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                    <input type="time" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                    <a href="/editar_cita" class="bg-green-600 hover:bg-green-700 p-2 py-1 w-44 rounded text-white">Editar
                        Cita</a>

                    <h1 class="titles mt-4">Segunda Cita</h1>
                    <input type="date" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                    <input type="time" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                    <a href="/editar_cita" class="bg-green-600 hover:bg-green-700 p-2 py-1 w-44 rounded text-white">Editar
                        Cita</a>
                    <div class="flex justify-center items-center w-full border-t pt-2">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        /*const modal = document.querySelector('.modal');
        const modalb = document.querySelector('.modalb');*/
        const modalf = document.querySelector('.modalf');

        //Funcionamiento de modal

        const showModalf = document.querySelector('.show-modalf');
        const closeModalf = document.querySelectorAll('.close-modalf');

        showModalf.addEventListener('click', function() {
            modalf.classList.remove('hidden')
        })

        closeModalf.forEach(close => {
            close.addEventListener('click', function() {
                modalf.classList.add('hidden')
            })
        })
        /*
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

        //
        const showModalb = document.querySelector('.show-modalb');
        const closeModalb = document.querySelectorAll('.close-modalb');

        showModalb.addEventListener('click', function() {
            modalb.classList.remove('hidden')
        })

        closeModalb.forEach(close => {
            close.addEventListener('click', function() {
                modalb.classList.add('hidden')
            })
        })*/
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    </div>
@endsection