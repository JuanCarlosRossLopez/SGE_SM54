<div id="edit{{ $user->id }}" class="modal-edit-student h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <form method="POST" action="{{ url('estudiantes', $user->id) }}">
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
                            <p class="text-gray-500">{{ $user->student->student_name }}</p>
                        </div>
                        <form action="{{ route('estudiantes.update', $user->id) }}" method="POST" class="flex flex-col gap-4 mt-10">
                            @csrf
                            <div class="flex gap-4 items-center mt-2 w-full">
                                <input type="text" name="student_name" id="student_name" value="{{$user->student->student_name}}" placeholder="Nombre del estudiante" class="flex-1 rounded-md border border-gray-300 p-2">
                                <input type="text" name="id_student" id="id_student" value="{{$user->student->id_student}}" placeholder="Matrícula" class="flex-1 rounded-md border border-gray-300 p-2">
                            </div>
                            <div class="flex gap-4 items-center mt-3 w-full">
                                <select name="division_id" class="flex-2 rounded-md border border-gray-300 p-2 ">
                                    <option selected>{{$user->student->division ? $user->student->division->division_name : 'Sin división'}}</option>
                                    <option >Elige una división</option>
                                    @foreach ($Divisions as $division)
                                    <option value="{{ $division->id }}">{{ $division->division_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex gap-4 items-center mt-3 w-full">
                                <select name="division_id" class="flex-1 rounded-md border border-gray-300 p-2">
                                    <option selected>{{$user->student->career ? $user->student->career->career_name : 'Sin carrera'}}</option>
                                    <option >Elige una una carera</option>
                                    @foreach ($careers as $careers)
                                    <option value="{{ $careers->id }}">{{ $careers->career_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex gap-4 items-center mt-3 w-full">
                                <select name="division_id" class="flex-1 rounded-md border border-gray-300 p-2">
                                    <option selected>{{$user->student->career ? $user->student->career->career_name : 'Sin grupo'}}</option>
                                    <option >Elige un grupo</option>
                                    @foreach ($Gruop as $gruop)
                                    <option value="{{ $gruop->id }}">{{ $gruop->group_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex justify-center mt-3">
                                <button type="submit" class="bg-[#01A080] text-white rounded p-2">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
