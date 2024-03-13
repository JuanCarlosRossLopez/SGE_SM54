@extends('test.test_template')

@section('title')
    Historial de memorias
@endsection
@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <div class="w-[70rem]">
                <label>Historial de memorias</label>
                <label>
                    <!-- Este svg es el icono -->
                    <i class="fa-solid fa-bars-progress"></i>
                </label>
            </div>

        </div>
        <div class="content_conteiner  h-fit">
            <div class="flex flex-row items-center justify-start gap-2">
                <label class="conteiner_word_title items-center">Tabla de memorias</label>
                <label id="infoButton" class="cursor-pointer mt-[0.8rem]"
                    data-tooltip="Aquí usted puede realizar amonestaciones, explicando el por qué de la misma.">
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
                            <th class="theader">Campo</th>
                            <th class="theader">Campo</th>
                            <th class="theader">Campo</th>
                            <th class="theader">Campo</th>
                            <th class="theader">Campo</th>
                            <th class="theader">Campo</th>
                            <th class="theader">Campo</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr class="trow">
                            <td class="trowc">Lorum</td>
                            <td class="trowc">Lorum</td>
                            <td class="trowc">Lorum</td>
                            <td class="trowc">Lorum</td>
                            <td class="trowc">Lorum</td>
                            <td class="trowc">Lorum</td>
                            <td class="trowc">
                                <div>
                                    <button class="show-modal">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round"stroke-linejoin="round"
                                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                        </svg>
                                    </button>
                                </div>

                            </td>
                        </tr>
                        <tr class="trow">
                            <td class="trowc">Lorum</td>
                            <td class="trowc">Lorum</td>
                            <td class="trowc">Lorum</td>
                            <td class="trowc">Lorum</td>
                            <td class="trowc">Lorum</td>
                            <td class="trowc">Lorum</td>
                            <td class="trowc">
                                <div>
                                    <button class="show-modal">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24"stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round"stroke-linejoin="round"
                                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
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
                                1
                            </button>
                            <button
                                class="border-1 border-gray-500 bg-gray-300 px-2 focus:outline-none focus:ring focus:border-[#01A080]">
                                2
                            </button>
                            <button
                                class="border-1 border-gray-500 bg-gray-300 px-2 focus:outline-none focus:ring focus:border-[#01A080]">
                                3
                            </button>
                            <button
                                class="border-1 border-gray-500 bg-gray-300 px-2 rounded-r-md focus:outline-none focus:ring focus:border-[#01A080]">
                                >
                            </button>
                </div>
                <div>
                    <span>Cantidad de registros :</span>
                    <span id="rowCount"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div
        class="modal h-screen/2 w-full fixed flex-col left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">

        <div class="bg-[#01A080] w-2/3 rounded shadow-lg ">
            <div class=" border-b px-2 flex justify-between items-center">
                <div></div>
                <label class="font-semibold text-lg text-white text-center">Tas'k In</label>
                <div class="w-fit flex flex-col items-end justify-end p-2">
                    <button class="close-modal  rounded-full">
                        <p class="text-2xl  "><i class="fa-solid fa-circle-xmark bg-white rounded-full"
                                style="color: #d50101;"></i></p>
                    </button>
                </div>
            </div>
            <div class="bg-white w-full h-fit p-2 flex flex-col items-center overflow-y-auto">
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
                            <p class="text-left font-light text-lg  mr-20 py-2">Ingeniería y Tecnología</p>
                        </div>

                        <div class="flex">
                            <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Programa educativo:</h2>
                            <p class="text-left font-light text-lg  mr-20 py-2">TSU en TI Área Desarrollo de
                                Software Múltiplataforma</p>
                        </div>

                        <div class="flex">
                            <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Título del anteproyecto:
                            </h2>
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
                                <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Correo electrónico:
                                </h2>
                                <p class="text-left font-light text-lg  mr-20 py-2">21393143@utcancun.edu.mx</p>
                            </div>
                        </div>


                        <div class="flex">
                            <div class="flex">
                                <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Fecha de inicio del
                                    proyecto:</h2>
                                <p class="text-left font-light text-lg  mr-20 py-2">19/05/2024</p>
                            </div>
                            <div class="flex">
                                <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Fecha de término del
                                    proyecto:</h2>
                                <p class="text-left font-light text-lg  mr-20 py-2">19/07/2024</p>
                            </div>
                        </div>

                        <br />
                        <br />

                        <div class="flex">
                            <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Empresa:</h2>
                            <p class="text-left font-light text-lg  mr-20 py-2">Upnify</p>
                        </div>
                        <div class="flex">
                            <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Dirección:</h2>
                            <p class="text-left font-light text-lg  mr-20 py-2">Calle Robalo 72, 77500 Cancún,
                                Q.R.</p>
                        </div>
                        <div class="flex">
                            <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Nombre del asesor
                                Empresarial:</h2>
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
                                <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">Correo electrónico:
                                </h2>
                                <p class="text-left font-light text-lg  mr-20 py-2">upnify23@gmail.com</p>
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
                            <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">2.Planteamiento del
                                Problema: exponer los aspectos, elementos y relaciones del problema:</h2>
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
                            <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">3. Justificación: debe
                                manifestarse de manera clara y precisa del por qué y para qué se va llevar a
                                cabo el estudio. Causas y propósitos que motivan la investigación. Contesta las
                                preguntas: ¿Cuáles son los beneficios que este trabajo proporcionará? ¿Quiénes
                                serán los beneficiados? ¿Cuál es su utilidad?</h2>
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
                            <h2 class="text-left font-medium text-lg ml-24 mr-10 py-2">4. Actividades para
                                realizar: listar las actividades a llevar a cabo en orden</h2>
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
    <script>
        //Lo hizo roto, es un contador
        const tableBody = document.querySelector('tbody');
        const rowCount = tableBody.querySelectorAll('tr').length;
        document.getElementById('rowCount').textContent = rowCount;
        const modal = document.querySelector('.modal');

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
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
@endsection
