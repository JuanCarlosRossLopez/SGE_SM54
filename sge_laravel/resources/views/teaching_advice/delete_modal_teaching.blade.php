<div idModal="delete_{{ $teaching_advice->id }}"
    class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <input type="hidden" name="teacher_id" value="{{ $teaching_advice->id }}">
    <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
        <div class="border-b px-4 py-2 flex justify-between items-center">
            <h3 class="font-semibold text-lg ml-60 text-white">lista de Estudiantes</h3>
            <button class="close-modal bg-white rounded-full">
                <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
            </button>
        </div>
        <div class="bg-white p-2">
            <div class="modal-body flex-col gap-4 mb-0 overflow-y-auto flex items-center justify-center P-10 ">
                <h1 class="poppins-light text-[20px]">
                    ¿Estas seguro de eliminar al estudiante?
                </h1>
                <form action="{{ route('asignar_alumnos.destroy', $teaching_advice->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Si</button>
                </form>


                <button
                    class="close-modal text-white rounded-md px-6 py-2 focus:outline-none focus:ring focus:ring-blue-200">No</button>

            </div>
        </div>
    </div>
</div>
