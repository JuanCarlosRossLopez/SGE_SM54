@extends('test.template')

@section('title')
    Historial de memorias
@endsection
<style>
    .comment-icon {
        position: relative;
        width: 30px;
        height: 22px;
        background-color: #007bff;
        border-radius: 50%;
    }

    .comment-icon::after {
        content: '';
        position: absolute;
        bottom: -5px;
        right: 4px;
        width: 20px;
        height: 15px;
        border-style: solid;
        border-width: 0 8px 8px 0;
        border-color: transparent #007bff transparent transparent;
    }
</style>

@section('contenido')
    <div class="w-screen">
        <div class="w-full pr-4 pl-12 items-center">
            <div class="bg-gray-100 text-3xl rounded border mt-2 p-2 flex flex-row items-center gap-2">
                <div>
                    <label class="font-sans">Gestión de proyectos como asesor</label>
                    <label>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                        </svg>
                    </label>
                </div>

            </div>

            <div class="bg-gray-100 rounded border mt-1 p-2">

                <div class="w-full flex flex-row justify-between mt-2 ">
                    <div class="flex">
                        <button
                            class="border border-gray-500 bg-gray-300 px-4 py-1 rounded-l-md focus:outline-none focus:ring focus:border-[#01A080]">
                            <i class="fas fa-search text-gray-500"></i>
                        </button>
                        <input type="text" class="border border-gray-300 w-[30rem] px-2 py-1 rounded-r-md  "
                            placeholder="Buscar..." />

                    </div>
                    <div>
                        <button class=" h-full bg-teal-500 hover:bg-teal-700 p-2 rounded text-white">Si necesitas el boton
                            quita el valor hidden sino ponlo hidden</button>
                    </div>
                </div>
                <table class="w-full mt-2 border">
                    <thead class="bg-[#01A080] text-center text-white">
                        <tr>
                            <th class="px-4 py-2 border-b">Matricula</th>
                            <th class="px-4 py-2 border-b">Alumnos</th>
                            <th class="px-4 py-2 border-b">Proyectos</th>
                            <th class="px-4 py-2 border-b">Proyectos</th>
                            <th class="px-4 py-2 border-b">Proyectos</th>
                            <th class="px-4 py-2 border-b">Proyectos</th>
                            <th class="px-4 py-2 border-b">Proyectos</th>
                            <th class="px-4 py-2 border-b">Proyectos</th>
                            <th class="py-2 border-b">Opcion</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="bg-red-white hover:bg-[#5e5f5f46]">
                            <td class="px-4 py-2 border-b">22393169</td>
                            <td class="px-4 border-b">Marco Antonio Hau Pech</td>
                            <td class="px-4 border-b">Comercio web e-commer</td>
                            <td class="px-4 border-b">Lorum</td>
                            <td class="px-4 border-b">Lorum</td>
                            <td class="px-4 border-b">Lorum</td>
                            <td class="px-4 border-b">Lorum</td>
                            <td class="px-4 border-b">Lorum</td>
                            <td class="w-full  flex flex-row items-center justify-center py-2 gap-2 border-b">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                    </svg>

                                </button>
                                <button class="show-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                    </svg>
                                </button>
                                <button>
                                    <i class="fi fi-sr-journal-alt"></i>
                                </button>

                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-gray-700">Total de registros: <span id="rowCount">2</span></div>
            </div>
        </div>


        <!-- Modal -->
        <div
            class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
            <div class="bg-[#01A080] w-full rounded shadow-lg max-w-4xl">
                <div class="border-b px-4 py-2 flex justify-between items-center">
                    <h3 class="font-semibold text-lg ml-60 text-white">Revision de Cedula AnteProyecto</h3>
                    <button class="close-modal bg-white rounded-full">
                        <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                    </button>
                </div>
                <div class="bg-white p-2">
                    <div class="modal-body mb-0 overflow-y-auto  h-[85vh]">
                        <h5 class="text-black text-base mb-1 font-bold">Titulo de Proyecto</h5>
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
    </div>
@endsection
