@extends('templates.template_teacher')

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

@section('memory_table')
    <div class="w-screen">
        <div class="w-full pr-4 pl-12 items-center">
            <h1 class="text-3xl font-bold">Proyectos A Cargos</h1>
            <div class="w-full flex flex-row justify-end mt-2">
                <input type="text"
                    class="border border-gray-300 w-[30rem] px-2 py-1 rounded-l-md focus:outline-none focus:ring focus:border-blue-500"
                    placeholder="Buscar..." />
                <button
                    class="border border-gray-300 bg-gray-100 px-4 py-1 rounded-r-md focus:outline-none focus:ring focus:border-blue-500">
                    <i class="fas fa-search text-gray-500"></i>
                </button>
            </div>
            <table class="w-full mt-2">
                <thead class="bg-[#01A080] text-center text-white">
                    <tr>
                        <th class="px-4 py-2 border-b">Matricula</th>
                        <th class="px-4 py-2 border-b">Alumnos</th>
                        <th class="px-4 py-2 border-b">Proyectos</th>
                        <th class="py-2 border-b">Opcion</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr class="bg-red-white hover:bg-[#5e5f5f46]">
                        <td class="px-4 py-2 border-b">22393169</td>
                        <td class="px-4 border-b">Marco Antonio Hau Pech</td>
                        <td class="px-4 border-b">Comercio web e-commer</td>
                        <td class="w-full  flex flex-row items-center justify-center py-2 gap-2 border-b">
                            <button>
                                <i class="fa-solid fa-book-open fa-xl" style="color: #4d4d4d;"></i>
                            </button>
                            <button class="show-modal">
                                <div class="comment-icon flex items-center justify-center">
                                    <i class="fa-solid fa-pen fa-sm" style="color: #ffffff;"></i>
                                </div>
                            </button>
                            <button>
                                <i class="fa-solid fa-bullhorn fa-xl" style="color: #d40000;"></i>
                            </button>

                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="text-gray-700">Total de registros: <span id="rowCount">2</span></div>
        </div>
        <div class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
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
                        <text class="text-base italic">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</text>

                        <h6 class="text-gray-800  text-base font-sans mt-2 mb-2">Realizar Comentario Referente al Titulo:</h6>
                        <textarea placeholder="cometarios...." class="border-2 border-[#01A080] rounded-md w-full h-[7rem] px-2 py-1 mb-3"></textarea>

                        <h5 class="text-black mb-2">Objetivo General</h5>
                        <text class="text-sm">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</text>

                        <h6 class="text-gray-800 font-bold text-xs mt-2 mb-2">Realizar Comentario Referente al Objetivo General:</h6>
                        <textarea placeholder="cometarios...." class="border-2 border-[#01A080] rounded-md w-full h-[7rem] px-2 py-1 mb-3"></textarea>

                        <h5 class="text-black mb-2">Objetivo Especifico</h5>
                        <text class="text-sm">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</text>

                        <h6 class="text-gray-800 font-bold text-xs mt-2 mb-2">Realizar Comentario Referente al Objectivo Especifico:</h6>
                        <textarea placeholder="cometarios...." class="border-2 border-[#01A080] rounded-md w-full h-[7rem] px-2 py-1 mb-3"></textarea>

                        <h5 class="text-black mb-2">Alcance de Proyecto</h5>
                        <text class="text-sm">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</text>

                        <h6 class="text-gray-800 font-bold text-xs mt-2 mb-2">Realizar Comentario Referente al Alcance de Proyecto:</h6>
                        <textarea placeholder="cometarios...." class="border-2 border-[#01A080] rounded-md w-full h-[7rem] px-2 py-1 mb-3"></textarea>

                        <h5 class="text-black mb-2">Justificacion</h5>
                        <text class="text-sm">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</text>

                        <h6 class="text-gray-800 font-bold text-xs mt-2 mb-2">Realizar Comentario Referente al Justificacion:</h6>
                        <textarea placeholder="cometarios...." class="border-2 border-[#01A080] rounded-md w-full h-[7rem] px-2 py-1 mb-3"></textarea>

                        <div class="flex justify-center items-center w-full border-t pt-2">
                            <button class="bg-blue-600 hover:bg-blue-700 p-2 py-1 rounded text-white">Realizar comentarios</button>
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
