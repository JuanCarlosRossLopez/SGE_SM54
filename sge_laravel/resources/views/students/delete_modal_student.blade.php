<div id="delete{{ $students->id }}" class="delete-modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <input type="hidden" name="teacher_id" value="{{ $students->id }}">
    <!-- Incluimos el ID del maestro en un campo oculto -->
    <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
        <div class="border-b px-4 py-2 flex justify-between items-center">
            <h3 class="font-semibold text-lg text-white">Eliminar Estudiante</h3>
            <button class="close-modal bg-white rounded-full">
                <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
            </button>
        </div>
        <div class="bg-white p-4">
            <div class="modal-body flex-col gap-4 mb-0 overflow-y-auto flex items-center justify-center p-10">
                <h1 class="text-xl font-bold text-center">¿Estás seguro de eliminar al estudiante?</h1>
                <div class="flex justify-center gap-4 mt-8">
                    <form action="{{ url('estudiantes', $students->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="bg-red-500 text-white rounded-md px-6 py-2 hover:bg-red-600 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200">
                            Sí
                        </button>
                    </form>
                    <button class="bg-blue-500 text-white rounded-md px-6 py-2 hover:bg-blue-600 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 close-modal">
                        No
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>