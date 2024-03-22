<div id="edit{{ $teaching_advice->id }}"
    class="modal-edit-student  h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <form method="POST" action="{{ url('asignar_alumnos', $teaching_advice->id) }}">
        @method('PUT')
        @csrf
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Editar la Asignación</h3>
                <button class="close-modal bg-white rounded-full">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2">
                <div class="modal-body flex-col gap-4 mb-0 overflow-y-auto flex items-center justify-center p-10">
                    <div class="flex flex-col items-center justify-center">
                        <div class="flex items-center justify-between w-full mb-4">
                            <h1 class="text-xl font-bold">Editando asignación </h1>
                            <p class="text-gray-500">{{ $teaching_advice->student_id }}</p>
                        </div>
                        <form action="{{ route('asignar_alumnos.update', $teaching_advice->id) }}" method="POST"
                            class="flex flex-col gap-4">
                            @csrf
                            @method('PUT')
                            <div class="flex gap-4">
                            
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
