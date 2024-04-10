<div idModal="edit_{{ $teaching_advice->id }}"
    class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
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
                        <h1 class="text-xl font-bold mb-4">Editando asignación</h1>
                    </div>
                    <form action="{{ route('asignar_alumnos.update', $teaching_advice->id) }}" method="POST"
                        class="flex flex-col gap-4">
                        @csrf
                        @method('PUT')

                        <div class="flex gap-4">

                            <!-- Puedes agregar más campos aquí según sea necesario -->
                            <select type="text" name="adviser_id" id="adviser_id"
                                class="flex-1 rounded-md border text-black border-gray-300 p-2 w-full">
                                <option selected>Elige un asesor</option>
                                @foreach ($Teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->name_teacher }}</option>
                                @endforeach
                            </select>
                            <select type="text" name="student_id" id="student_id"
                                class="flex-1 rounded-md border text-black border-gray-300 p-2">
                                <option selected>Elige un alumno</option>
                                @foreach ($Students as $student)
                                    <option value="{{ $student->id }}">{{ $student->student_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Puedes agregar más campos aquí según sea necesario -->
                        <div class="flex justify-center">
                            <button type="submit" class="bg-[#01A080] text-white rounded p-2 mt-2">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
