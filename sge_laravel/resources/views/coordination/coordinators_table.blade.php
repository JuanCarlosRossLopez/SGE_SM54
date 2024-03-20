@extends('test.test_template')

@section('title')
    Tabla de coordinación
@endsection

@section('contenido')
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
                    <a href="{{ route('coordinacion.create') }}" class="add_button">
                        <i class="fas fa-plus text-black"></i>
                    </a>
                </div>
            </div>
            <div class="table_conteiner">
                <table class="standar_table">
                    <thead class="standar_thead">
                        <tr>
                            <th class="theader">#</th>
                            <th class="theader">Nombre del coordinador</th>
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
            <div id="confirmationModal" class="hidden fixed top-0 left-0 w-full h-full flex justify-center items-center bg-opacity-50 bg-gray-500">
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

            

            <div class="text-gray-700 ml-auto">Total de registros: <span id="rowCount">2</span></div>
        </div>
        <br>

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
