@extends('test.test_template')

@section('title')
    Tabla de coordinación
@endsection

@section('contenido')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <div class="back_conteiner">
        <div class="top_conteiner mr-[3rem]">
            <div class="w-[70rem]">
                <label>Gestor de Coordinadores</label>
                <label id="infoButton" class="cursor-pointer mt-[0.8rem]"
                    data-tooltip="Aquí usted puede administrar a los coordinadores.">
                    <i class="fas fa-exclamation-circle text-[#01A080] text-xl "></i>
                </label>
                <label>
                    <!-- Este svg es el icono -->
                    <i class="fa-solid fa-user-graduate"></i>
                </label>
            </div>
        </div>

        <div class="bg-gray-100 rounded border mt-1 mr-[3rem] p-2">
            <div class="w-full flex flex-row justify-between mt-2">
                <div class="flex">
                    <button
                        class="border border-gray-500 bg-gray-300 px-4 py-1 rounded-l-md focus:outline-none focus:ring focus:border-[#01A080]">
                        <i class="fas fa-search text-gray-500"></i>
                    </button>
                    <input type="text" class="border border-gray-300 w-[30rem] px-2 py-1 rounded-r-md"
                        placeholder="Buscar..." />
                    <button
                        class="show-create ml-[1rem] bg-[#01A080] text-[#F6F6F6] font-bold cursor-pointer text-center rounded-[5px] border-none p-[8px] ">
                        Agregar
                    </button>
                </div>
            </div>
            <div class="table_conteiner">
                <table class="standar_table">
                    <thead class="standar_thead">
                        <tr>
                            <th class="theader">#</th>
                            <th class="theader">Nombre de coordinador</th>
                            <th class="theader">Número de nomina</th>
                            <th class="theader">id_usuario</th>
                            <th class="theader">Division</th>
                            <th class="theader">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        @foreach ($coordinators as $coordinator)
                            <tr class="trow">
                                <td class="text-center border-b">{{ $coordinator->id }} </td>
                                <td class="text-center border-b">{{ $coordinator->coordinator_name }} </td>
                                <td class="text-center border-b">{{ $coordinator->payroll }} </td>
                                <td class="text-center border-b">{{ $coordinator->user_id }} </td>
                                <td class="text-center border-b">{{ $coordinator->division_id }} </td>
                                <td class="text-center border-b">
                                    <a href="{{ route('coordinacion.show', $coordinator->id) }}"
                                        class="text-blue-500">Ver</a>
                                    <a href="{{ route('coordinacion.edit', $coordinator->id) }}"
                                        class="text-yellow-500">Editar</a>
                                    <button onclick="showConfirmationModal({{ $coordinator->id }})"
                                        class="text-red-500 show-modal">Eliminar</button>
                                    <form id="deleteForm{{ $coordinator->id }}"
                                        action="{{ route('coordinacion.destroy', $coordinator->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <!-- Modal -->
            <div id="confirmationModal"
                class="hidden fixed top-0 left-0 w-full h-full flex justify-center items-center bg-opacity-50 bg-gray-500">
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <p>¿Estás seguro de que deseas eliminar este coordinador?</p>
                    <div class="flex justify-end mt-4">
                        <button onclick="deleteStudent()" class="bg-red-500 text-white px-4 py-2 mr-2">Eliminar</button>
                        <button onclick="hideConfirmationModal()" class="bg-gray-300 px-4 py-2">Cancelar</button>
                    </div>
                </div>
            </div>

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

            <div class="text-gray-700 ml-auto">Total de registros: <span id="rowCount">0</span></div>
        </div>
        <br>


        <div
            class="modal-create fixed h-screen w-full left-0 top-0 hidden flex overflow-hidden justify-center items-center bg-black bg-opacity-500">
            <div class="bg-[#01A080] w-[600px] rounded shadow-lg max-w-4xl ">
                <div class="border-b px-4 py-2 flex justify-between items-center">
                    <h3 class="font-semibold text-lg justify-center items-center text-[#FFFF] text-center">Registrar
                        Coordinador</h3>
                    <button class="close-create ">
                        <p class="text-2xl"><i class="fa-solid fa-circle-xmark bg-white rounded-full"
                                style="color: #d50101;"></i></p>
                    </button>
                </div>
                <div class="bg-white p-2">
                    <div class="modal-body mb-0 overflow-y-auto h-[38vh]">
                        <div class="container mx-auto px-4 py-8">
                            <h1 class="text-center font-semibold text-2xl">Registrar Coordinador</h1>
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                                <div class="bg-white rounded-lg p-8 mx-auto flex justify-center items-center flex-col">
                                    <form action="{{ route('coordinacion.store') }}" method="POST"
                                        class="flex flex-col gap-4">
                                        @csrf
                                        @method('POST')
                                        <div class="flex gap-4">
                                            <div class="flex flex-col gap-4">
                                                <input type="text" name="coordinator_name" id="coordinator_name"
                                                    placeholder="Nombre del coordinador"
                                                    class="rounded-md border border-gray-300 p-2">
                                                <input type="text" name="user_id" id="user_id"
                                                    placeholder="ID de usuario del coordinador"
                                                    class="rounded-md border border-gray-300 p-2">
                                            </div>
                                            <div class="flex flex-col gap-4">
                                                <input type="number" name="payroll" id="payroll"
                                                    placeholder="Número de nómina del coordinador"
                                                    class="rounded-md border border-gray-300 p-2">
                                                <input type="text" name="division_id" id="division_id"
                                                    placeholder="ID de la división del coordinador"
                                                    class="rounded-md border border-gray-300 p-2">
                                            </div>
                                        </div>
                                        <!-- Puedes agregar más campos aquí según sea necesario -->
                                        <div class="flex justify-end mt-4">
                                            <button type="submit"
                                                class="bg-[#01A080] text-white rounded font-bold p-2">Agregar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const modal = document.querySelector('.modal');

            const showModal = document.querySelector('.show-modal');
            const closeModal = document.querySelectorAll('.close-modal');
            const addStudentBtn = document.querySelector('.add-student');

            showModal.addEventListener('click', function() {
                modal.classList.remove('hidden');
            });

            closeModal.forEach(close => {
                close.addEventListener('click', function() {
                    modal.classList.add('hidden');
                });
            });

            addStudentBtn.addEventListener('click', function() {
                const form = document.getElementById('studentForm');
                const formData = new FormData(form);

                alert('Alumno Agregado correctamente');

                form.reset();
            });
        </script>
        <script>
            const modalCreate = document.querySelector('.modal-create');
            const showCreate = document.querySelector('.show-create');
            const closeCreate = document.querySelectorAll('.close-create');

            showCreate.addEventListener('click', function() {
                modalCreate.classList.remove('hidden');
            });

            closeCreate.forEach(close => {
                close.addEventListener('click', function() {
                    modalCreate.classList.add('hidden')
                });
            });
        </script>
        <script>
            let studentIdToDelete;

            function showConfirmationModal(studentId) {
                studentIdToDelete = studentId;
                const modal = document.getElementById('confirmationModal');
                modal.classList.remove('hidden');
            }

            function hideConfirmationModal() {
                const modal = document.getElementById('confirmationModal');
                modal.classList.add('hidden');
            }

            function deleteStudent() {
                const form = document.getElementById('deleteForm' + studentIdToDelete);
                form.submit();
            }
        </script>
    @endsection
