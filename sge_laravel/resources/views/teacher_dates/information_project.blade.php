@extends('templates.template_teacher')

@section('title')
    Plantilla base
@endsection

@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <label>Consulta individual de anteproyecto</label>
            <label>
            </label>
        </div>

        <div class="flex flex-nowrap space-x-4">
            <div class="content_conteiner w-full mx-h-full">
                <div class="conteiner flex items-center bg-[#2F4050] bg-opacity-10 w-full px-24 py-1 rounded-lg">
                    <label class="text-2xl font-medium text-center mr-16">Información de anteproyecto</label>
                    <div class="relative ml-80 mt-2">
                        <select class="rounded-lg text-lg w-30 h-10 ml-35 font-medium">
                            <option>Citas Proximas</option>
                            <option>Citas Proximas</option>
                            <option>Citas Proximas</option>
                        </select>
                    </div>
                </div>


                


                <div class="inside_content_conteiner">
                    <div class="h-full justify-between items-center">
                        <div class="bg-white rounded-xl  shadow-lg w-18/19">
                          <div class="overflow-y-auto" style="max-height: 400px;">
                        <div class="snap-start">
                            <br/>
                            <br/>
                            <br/>
                            <h1 class="font-medium text-3xl text-center ml-24">CÉDULA DE ANTEPROYECTO DE ESTADÍA</h1>
                            <br/>
                            <br/>
                            <div class="flex">
                                <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">División:</h2>
                                <p class="text-left font-light text-lg  mr-20 py-2">Ingeniería y Tecnología</p>
                            </div>

                            <div class="flex">
                                <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Programa educativo:</h2>
                                <p class="text-left font-light text-lg  mr-20 py-2">TSU en TI Área Desarrollo de Software Múltiplataforma</p>
                            </div>
                            
                            <div class="flex">
                                <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Título del anteproyecto:</h2>
                                <p class="text-left font-light text-lg  mr-20 py-2">Reto Tokio</p>
                            </div>



                            <div class="flex">
                                <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Nombre del alumno:</h2>
                                <p class="text-left font-light text-lg  mr-20 py-2">Daniela Morantes Ricalde</p>
                            </div>

                            <div class="flex">
                                <div class="flex">
                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Matrícula:</h2>
                                    <p class="text-left font-light text-lg  mr-20 py-2">21393143</p>
                                </div>
                                <div class="flex">
                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Grupo:</h2>
                                    <p class="text-left font-light text-lg  mr-20 py-2">SM54</p>
                                </div>
                            </div>


                            <div class="flex">
                                <div class="flex">
                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Teléfono:</h2>
                                    <p class="text-left font-light text-lg  mr-20 py-2">9988235671</p>
                                </div>
                                <div class="flex">
                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Correo electrónico:</h2>
                                    <p class="text-left font-light text-lg  mr-20 py-2">21393143@utcancun.edu.mx</p>
                                </div>
                            </div>


                            <div class="flex">
                                <div class="flex">
                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Fecha de inicio del proyecto:</h2>
                                    <p class="text-left font-light text-lg  mr-20 py-2">19/05/2024</p>
                                </div>
                                <div class="flex">
                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Fecha de término del proyecto:</h2>
                                    <p class="text-left font-light text-lg  mr-20 py-2">19/07/2024</p>
                                </div>
                            </div>

                            <br/>
                            <br/>
                            
                            <div class="flex">
                                <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Empresa:</h2>
                                <p class="text-left font-light text-lg  mr-20 py-2">Upnify</p>
                            </div>
                            <div class="flex">
                                <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Dirección:</h2>
                                <p class="text-left font-light text-lg  mr-20 py-2">Calle Robalo 72, 77500 Cancún, Q.R.</p>
                            </div>
                            <div class="flex">
                                <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Nombre del asesor Empresarial:</h2>
                                <p class="text-left font-light text-lg  mr-20 py-2">Diego Horacio Dorantes</p>
                            </div>
                            <div class="flex">
                                <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Cargo:</h2>
                                <p class="text-left font-light text-lg  mr-20 py-2">Gerente</p>
                            </div>


                            <div class="flex">
                                <div class="flex">
                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Teléfono:</h2>
                                    <p class="text-left font-light text-lg  mr-20 py-2">9988233459</p>
                                </div>
                                <div class="flex">
                                    <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Correo electrónico:</h2>
                                    <p class="text-left font-light text-lg  mr-20 py-2">upnify23@gmail.com</p>
                                </div>
                            </div>


                            <div class="flex">
                                <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Área donde se desarrollará el proyecto:</h2>
                                <p class="text-left font-light text-lg  mr-20 py-2">Marketing</p>
                            </div>

                            <br/>
                            <br/>

                            <div>
                                <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">1. Objetivo general:</h2>
                                <p class="text-left font-light text-lg ml-24 mr-10 py-2">
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
                            <div>
                                <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">2.Planteamiento del Problema: exponer los aspectos, elementos y relaciones del problema:</h2>
                                <p class="text-left font-light text-lg ml-24 mr-10 py-2">
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

                            
                            <div>
                                <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">3.	Justificación: debe manifestarse de manera clara y precisa del por qué y para qué se va llevar a cabo el estudio. Causas y propósitos que motivan la investigación. Contesta las preguntas: ¿Cuáles son los beneficios que este trabajo proporcionará? ¿Quiénes serán los beneficiados? ¿Cuál es su utilidad?</h2>
                                <p class="text-left font-light text-lg ml-24 mr-10 py-2">
                                    Al contrario del pensamiento popular, el texto de Lorem
                                    Ipsum no es simplemente texto aleatorio. Tiene sus raices en una 
                                    pieza clsica de la literatura del Latin, que d
                                    ata del año 45 antes de Cristo, haciendo que este a
                                    dquiera mas de 2000 años de antiguedad. Ric
                                    hard McClintock, un profesor de Latin de la Uni
                                    versidad de Hampden-Sydney en Virginia, encontró una d
                                    e las palabras más oscuras de la lengua del latín,
                                    "consecteur", en un pasaje de Lorem Ipsum, y al seguir leyendo 
                                    distintos textos del latín, 
                                </p>
                            </div>

                            <div>
                                <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">4.	Actividades para realizar: listar las actividades a llevar a cabo en orden</h2>
                                <p class="text-left font-light text-lg ml-24 mr-10 py-2">
                                    Al contrario del pensamiento popular, el texto de Lorem
                                    Ipsum no es simplemente texto aleatorio. Tiene sus raices en una 
                                    pieza clsica de la literatura del Latin, que d
                                    ata del año 45 antes de Cristo, haciendo que este a
                                    dquiera mas de 2000 años de antiguedad. Ric
                                    hard McClintock, un profesor de Latin de la Uni
                                    versidad de Hampden-Sydney en Virginia, encontró una d
                                    e las palabras más oscuras de la lengua del latín,
                                    "consecteur", en un pasaje de Lorem Ipsum, y al seguir leyendo 
                                    distintos textos del latín, 
                                </p>
                            </div>
                            <br/>
                            <br/>
                            <h2 class="text-center font-medium text-xl ml-24 mr-10 py-2">EVALUACIÓN DEL ANTEPROYECTO</h2>
                            <br/>
                            <br/>
                            <div class="flex">
                                <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Se aprueba:</h2>
                                <p class="text-left font-light text-lg  mr-20 py-2">_Si  <p class="text-left font-light text-lg  mr-2 py-2">_No</p></p>
                            </div>

                            <div class="flex">
                                <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Observaciones y/o comentarios:</h2>
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
                                <p class="text-left font-light text-lg  mr-20 py-2">Raúl Baas Can</p>
                            </div>

                            <div class="flex">
                                <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Correo electrónico:</h2>
                                <p class="text-left font-light text-lg  mr-20 py-2">rbaas@utcancun.edu.mx</p>
                            </div>
                        </div>   
                      </div>
                    </div>
                  </div>
                    
                </div>
            </div>






            <div class="content_conteiner w-1/2">
                <div class="bg-[#2F4050] bg-opacity-10 px-24 py-1 rounded-lg">
                    <label class="text-2xl font-medium text-center ml-16">Control de Visitas</label>
                </div>
                <div class="inside_content_conteiner">
                    <div class="bg-green-500 bg-opacity-40 shadow overflow-hidden sm:rounded-lg ml-16">
                        <h1 class="font-bold text-2xl p-2 text-center text-green-500">Febrero 2024</h1>
                        <ol class="grid grid-cols-7 gap-4 p-3 text-sm">
                            <li class="font-bold">Lun</li>
                            <li class="font-bold">Mar</li>
                            <li class="font-bold">Mie</li>
                            <li class="font-bold">Jue</li>
                            <li class="font-bold">Vie</li>
                            <li class="font-bold">Sab</li>
                            <li class="font-bold">Dom</li>
                            <li class="col-start-4">1</li>
                            <li>2</li> <li>3</li> <li>4</li> <li>5</li> <li>6</li> <li>7</li> <li>8</li> <li>9</li>
                            <li>10</li> <li>11</li> <li>12</li> <li>13</li> <li>14</li> <li>15</li> <li>16</li> <li>17</li>
                            <li>18</li> <li>19</li> <li>20</li> <li>21</li> <li>22</li> <li>23</li> <li>24</li> <li>25</li>
                            <li>26</li> <li>27</li> <li>28</li> <li>29</li>
                        </ol>
                    </div>
                </div>
                <div class="flex flex-col space-y-2 p-4">
                    <button
                        class="show-modal bg-gray-700 text-green-300 font-medium px-4 text-xl py-3 rounded-lg border-solid border-2 border-green-600">Asignar
                        cita de revision</button>
                    <button
                        class="show-modalb bg-green-600 bg-opacity-80 text-gray-800 font-medium text-xl px-4 py-3 rounded-lg border-solid border-2 border-gray-700">Editar
                        cita de revision</button>
                </div>
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
                    <a href="/editar_cita" class="bg-green-600 hover:bg-green-700 p-2 py-1 w-44 rounded text-white">Editar Cita</a>

                    <h1 class="titles mt-4">Segunda Cita</h1>
                    <input type="date" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                    <input type="time" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                    <a href="/editar_cita" class="bg-green-600 hover:bg-green-700 p-2 py-1 w-44 rounded text-white">Editar Cita</a>

                    <h1 class="titles mt-4">Segunda Cita</h1>
                    <input type="date" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                    <input type="time" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                    <a href="/editar_cita" class="bg-green-600 hover:bg-green-700 p-2 py-1 w-44 rounded text-white">Editar Cita</a>
                    <div class="flex justify-center items-center w-full border-t pt-2">
                    </div>
                </div>
            </div>
        </div>
    </div>


 <script>
        //Lo hizo roto, es un contador
        const modal = document.querySelector('.modal');
        const modalb = document.querySelector('.modalb');

        //Funcionamiento de modal

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
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    </div>
@endsection
