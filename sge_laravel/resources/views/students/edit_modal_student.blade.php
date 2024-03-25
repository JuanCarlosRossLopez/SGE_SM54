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
                            <h1 class="text-xl font-bold">Editando al estudiante</h1>
                            <p class="text-gray-500">{{ $students->student_name }}</p>
                        </div>
                        <form action="{{ route('estudiantes.update', $students->id) }}" method="POST"
                            class="flex flex-col gap-4">
                            @csrf
                            <div class="flex gap-4">
                                <input type="text" name="student_name" id="student_name " value="{{$students->student_name}}" 
                                "
                                    placeholder="Nombre del estudiante"
                                    class="flex-1 rounded-md border border-gray-300 p-2">
                                <input type="text" name="id_student" id="id_student" value="{{$students->id_student}}" placeholder="Matrìcula"
                                    class="flex-1 rounded-md border border-gray-300 p-2">
                            </div>

                            <div class="flex gap-4">
                                <label class="">Creador de anteproyecto</label>
                                <select name="project_creator" id="project_creator" class="rounded-md border">
                                    <option value="0">No</option>
                                    <option value="1">Sí</option>
                                </select>
                            </div>

                            <div class="flex gap-4">
                                <select type="text" name="user_id" id="user_id"
                                    class="flex-1 rounded-md border text-black border-gray-300 p-2">
                                    <option selected>Elige un usuario</option>
                                    @foreach ($Users as $user)
                                        <option value="{{ $students->user_id }}">{{ $user->name }}</option>
                                        
                                    @endforeach
                                </select>

                                <input type="text" name="anteproject_id" id="anteproject_id"
                                    placeholder="Nombre del anteproyecto"
                                    class="flex-1 rounded-md border border-gray-300 p-2">
                            </div>

                            <div class="flex gap-4">

                                <select type="text" name="adviser_id" id="adviser_id"
                                    class="flex-1 rounded-md border text-black border-gray-300 p-2">
                                    <option selected>Elige un asesor</option>
                                    @foreach ($Teachers as $teacher)
                                        <option value="{{ $teacher->teacher_name }}">{{ $teacher->name_teacher }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex gap-4"></div>
                            <select name="division_id" class="flex-1 rounded-md border border-gray-300 p-2">
                                <option selected>Elige una división</option>
                                @foreach ($Divisions as $division)
                                    <option value="{{ $division->id }}">{{ $division->division_name }}</option>
                                @endforeach

                            </select>
                    </div>
                    <!-- Puedes agregar más campos aquí según sea necesario -->
                    <div class="flex justify-center">
                        <button type="submit" class="bg-[#01A080] text-white rounded p-2">Guardar</button>
                    </div>
    </form>
</div>
</div>
</div>
</div>
</form>
</div>