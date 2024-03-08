@extends('templates.template_teacher')

@section('title')
    Prueba Estandares
@endsection

@section('contenido')
    <div class="view_conteiner">
        <div class="back_conteiner">
            <div class="top_conteiner">
                <label>Gestión de proyectos como asesor</label>
                <label>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                    </svg>
                </label>
            </div>

            <div class="content_conteiner">
                <label class="word_title">Tabla de proyectos asesorados</label>
                <div class="inside_content_conteiner">
                    <div class="search_conteiner">
                        <button class="search_button">
                            <i class="fas fa-search text-gray-500"></i>
                        </button>
                        <input type="text" class="search_input" placeholder="Buscar..." />
                    </div>
                    <div class="search_button_conteiner">
                        <!-- En caso que necesites el boton dejalo, sino aplica hidden en el class -->
                        <button class="standar_button"><span class="inside_button">Si lo necesitas</span></button>
                    </div>
                </div>

                <div class="table_conteiner">
                    <table class="standar_table">
                        <thead class="standar_thead">
                            <tr>
                                <th class="theader">Matricula</th>
                                <th class="theader">Alumnos</th>
                                <th class="theader">Proyectos</th>
                                <th class="theader">Proyectos</th>
                                <th class="theader">Proyectos</th>
                                <th class="theader">Proyectos</th>
                                <th class="theader">Opciones</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <tr class="trow">
                                <td class="trowc">22393169</td>
                                <td class="trowc">Marco Antonio Hau Pech</td>
                                <td class="trowc">Comercio web e-commer</td>
                                <td class="trowc">Lorum</td>
                                <td class="trowc">Lorum</td>
                                <td class="trowc">Lorum</td>
                                <td class="trowc">
                                    <div>
                                        <button> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"> <path stroke-linecap="round" stroke-linejoin="round"d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" /></svg>
                                        </button>
                                        <button class="show-modal">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"> <path stroke-linecap="round"stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" /></svg>
                                        </button>
                                        <button>
                                            <i class="fi fi-sr-journal-alt"></i>
                                        </button>
                                    </div>

                                </td>
                            </tr>
                            <tr class="trow">
                                <td class="trowc">22393169</td>
                                <td class="trowc">Marco Antonio Hau Pech</td>
                                <td class="trowc">Comercio web e-commer</td>
                                <td class="trowc">Lorum</td>
                                <td class="trowc">Lorum</td>
                                <td class="trowc">Lorum</td>
                                <td class="trowc">
                                    <div>
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round"d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" /></svg>
                                        </button>
                                        <button class="show-modal">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round"stroke-linejoin="round"d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" /></svg>
                                        </button>
                                        <button>
                                            <i class="fi fi-sr-journal-alt"></i>
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
                        <button class="border-1 border-gray-500 bg-gray-300 px-2 rounded-l-md focus:outline-none focus:ring focus:border-[#01A080]">
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


        <!-- Modal -->
        <div
            class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
            <div class="bg-[#01A080] w-full rounded shadow-lg max-w-4xl">
                <div class="border-b px-4 py-2 flex justify-between items-center">
                    <h3 class="font-semibold text-lg ml-60 text-white">Revision de Cedula AnteProyecto</h3>
                    <button class="close-modal bg-white rounded-full h-[1rem] flex items-center">
                        <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                    </button>
                </div>
                <div class="modal_conteiner">
                    <!-- Aqui en esta parte ajusta el valor de h segun tus necesidades -->
                    <div class="modal-body h-[85vh]">
                        <h1 class="text-black text-base mb-1 font-bold">Titulo de Proyecto</h1>
                        <text class="text-base italic">Lorem Ipsum es simplemente el texto de relleno de las imprentas y
                            archivos de texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de
                            texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de
                            texto.</text>

                        <h6 class="text-gray-800  text-base font-sans mt-2 mb-2">Realizar Comentario Referente al Titulo:
                        </h6>
                        <textarea placeholder="cometarios...." class="border-2 border-[#01A080] rounded-md w-full h-[7rem] px-2 py-1 mb-3"></textarea>

                        <h5 class="text-black mb-2">Objetivo General</h5>
                        <text class="text-sm">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de
                            texto.</text>

                        <h6 class="text-gray-800 font-bold text-xs mt-2 mb-2">Realizar Comentario Referente al Objetivo
                            General:</h6>
                        <textarea placeholder="cometarios...." class="border-2 border-[#01A080] rounded-md w-full h-[7rem] px-2 py-1 mb-3"></textarea>

                        <h5 class="text-black mb-2">Objetivo Especifico</h5>
                        <text class="text-sm">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de
                            texto.</text>

                        <h6 class="text-gray-800 font-bold text-xs mt-2 mb-2">Realizar Comentario Referente al Objectivo
                            Especifico:</h6>
                        <textarea placeholder="cometarios...." class="border-2 border-[#01A080] rounded-md w-full h-[7rem] px-2 py-1 mb-3"></textarea>

                        <h5 class="text-black mb-2">Alcance de Proyecto</h5>
                        <text class="text-sm">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de
                            texto.</text>

                        <h6 class="text-gray-800 font-bold text-xs mt-2 mb-2">Realizar Comentario Referente al Alcance de
                            Proyecto:</h6>
                        <textarea placeholder="cometarios...." class="border-2 border-[#01A080] rounded-md w-full h-[7rem] px-2 py-1 mb-3"></textarea>

                        <h5 class="text-black mb-2">Justificacion</h5>
                        <text class="text-sm">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de
                            texto.</text>

                        <h6 class="text-gray-800 font-bold text-xs mt-2 mb-2">Realizar Comentario Referente al
                            Justificacion:</h6>
                        <textarea placeholder="cometarios...." class="border-2 border-[#01A080] rounded-md w-full h-[7rem] px-2 py-1 mb-3"></textarea>

                        <div class="flex justify-center items-center w-full border-t pt-2">
                            <button
                                class="bg-blue-600 hover:bg-blue-700 p-2 py-1 rounded text-white">Realizarcomentarios</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const tableBody = document.querySelector('tbody');
            const rowCount = tableBody.querySelectorAll('tr').length;
            document.getElementById('rowCount').textContent = rowCount;
        </script>

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
                });
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
    </div>
@endsection
