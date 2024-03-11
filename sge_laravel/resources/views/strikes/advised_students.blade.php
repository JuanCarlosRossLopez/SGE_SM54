@extends('templates.template_students')

@section('titulo')
    SGE
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
        <!-- Texto de bienvenida más grande -->
        <button id="notificationButton" class="absolute right-0 top-0 m-4 focus:outline-none">
            <i class="fas fa-bell text-[#01A080] text-2xl"></i>
        </button>
        <label class="font-sans text-3xl mb-2">BIENVENIDO, ASESOR FRANKLIN</label>

        <div class="bg-gray-100 text-3xl rounded border mt-2 p-2 flex flex-row items-center gap-2">
            <div>
                <label class="font-sans text-2xl flex items-center">
                    Alumnos asesorados
                    <button id="infoButton" class="ml-2 focus:outline-none" title="Aquí usted puede realizar amonestaciones, explicando el por qué de la misma.">
                        <i class="fas fa-exclamation-circle text-[#01A080]"></i>
                    </button>
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
            </div>

            <table class="w-full mt-2 border">
                <thead class="bg-[#01A080] text-center text-white">
                    <tr>
                        <th class="px-4 py-2 border-b">Matricula</th>
                        <th class="px-4 py-2 border-b">Estudiantes</th>
                        <th class="px-4 py-2 border-b">Carrera</th>
                        <th class="px-4 py-2 border-b">Grupo</th>
                        <th class="px-4 py-2 border-b">Proyectos</th>
                        <th class="py-2 border-b">Opcion</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr class="bg-red-white hover:bg-[#5e5f5f46]">
                        <td class="px-4 py-2 border-b">22393169</td>
                        <td class="px-4 border-b">Marco Antonio Hau Pech</td>
                        <td class="px-4 border-b">Desarrollador software multiplataforma</td>
                        <td class="px-4 border-b">SM54</td>
                        <td class="px-4 border-b">Sistema Gestor de Estadias</td>
                        <td class="w-full  flex flex-row items-center justify-center py-2 gap-2 border-b">
                            <button class="show-modal bg-red-600 hover:bg-red-700 p-2 py-1 rounded text-white">
                                Realizar Amonestacion
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="flex justify-end mt-2">
                <button @click="currentPage = currentPage > 1 ? currentPage - 1 : 1"
                    class="border border-gray-500 bg-gray-300 px-4 py-1 rounded-l-md focus:outline-none focus:ring focus:border-[#01A080]">
                    Anterior
                </button>
                <input type="number" x-model="currentPage" class="border border-gray-300 w-20 px-2 py-1 text-center" />
                <button @click="currentPage = currentPage < totalPages ? currentPage + 1 : totalPages"
                    class="border border-gray-500 bg-gray-300 px-4 py-1 rounded-r-md focus:outline-none focus:ring focus:border-[#01A080]">
                    Siguiente
                </button>
            </div>
            <div class="text-gray-700 ml-auto">Total de registros: <span id="rowCount">2</span></div>
        </div>
        
        <!-- Modal -->
        <div class="modal h-screen/2 w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <div class="bg-[#01A080] w-full rounded shadow-lg max-w-md">
        <div class="border-b px-4 py-4 flex justify-between items-center">
            <h3 class="font-semibold text-lg text-white">¿Está seguro de que desea amonestar al estudiante?</h3>
            <button class="close-modal bg-white rounded-full">
                <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
            </button>
        </div>
        <div class="bg-white p-2 flex flex-col items-center">
            <h5 class="text-black text-lg mb-2 font-bold">Marco Antonio Hau Pech</h5>
            <div class="modal-body mb-0 overflow-y-auto h-[auto]">
                <button class="bg-orange-600 hover:bg-orange-700 p-2 py-1 rounded text-white mr-2">Confirmar</button>
                <button class="close-modal bg-red-500 hover:bg-red-600 p-2 py-1 rounded text-white">Cancelar</button>
            </div>
        </div>
    </div>
</div>



        <script>
            // Contador
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
    </>
    @endsection