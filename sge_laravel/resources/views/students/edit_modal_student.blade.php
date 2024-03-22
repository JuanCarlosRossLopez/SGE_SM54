<div id="edit{{ $students->id }}"
    class="modal-edit-student  h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <form method="POST" action="{{ url('estudiantes', $students->id) }}">
        @method('PUT')
        @csrf
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Editar al Estudiante</h3>
                <button class="close-modal bg-white rounded-full">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2">
                <div class="modal-body flex-col gap-4 mb-0 overflow-y-auto flex items-center justify-center p-10">
                    <div class="flex flex-col items-center justify-center">
                        <div class="flex items-center justify-between w-full mb-4">
                            <h1 class="text-xl font-bold">Editando al Estudiante</h1>
                            <p class="text-gray-500">{{ $students->name }}</p>
                        </div>
                        <form action="{{ route('estudiantes.update', $students->id) }}" method="POST"
                            class="flex flex-col gap-4">
                            @csrf
                            @method('PUT')
                            <div class="flex gap-4">
                                <div class="flex flex-col gap-4">
                                    <input type="text" name="name_students" id="name_students"
                                        placeholder="Nombre del Estudiante" class="rounded-md border border-gray-300 p-2">
                                    <input type="text" name="id_user" id="id_user"
                                        placeholder="ID de usuario del Estudiante"
                                        class="rounded-md border border-gray-300 p-2">
                                </div>
                                <div class="flex flex-col gap-4">
                                    <input type="number" name="id_student" id="id_student"
                                        placeholder="Número de nómina del Estudiante"
                                        class="rounded-md border border-gray-300 p-2">
                                    <input type="text" name="division_id" id="division_id"
                                        placeholder="ID de la división del asesor"
                                        class="rounded-md border border-gray-300 p-2">
                                </div>
                            </div>
                            <!-- Puedes agregar más campos aquí según sea necesario -->
                            <div class="flex justify-end mt-4">
                                <button type="submit" class="bg-[#01A080] text-white rounded p-2">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
