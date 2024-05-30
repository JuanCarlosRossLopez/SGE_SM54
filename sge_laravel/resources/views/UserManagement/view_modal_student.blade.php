<div id="view{{$user->id}}" class="view-modal-student h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-green bg-opacity-50">
    <input type="hidden" name="teacher_id" value="{{$user->id}}"> <!-- Incluimos el ID del maestro en un campo oculto -->
    <div class="bg-[#75928c] w-full rounded shadow-lg max-w-3xl"> <!-- Cambiamos el color de fondo y el tamaño del modal -->
        <div class="border-b px-4 py-2 flex justify-between items-center">
            <h3 class="font-semibold text-lg text-white">Información del estudiante</h3> <!-- Cambiamos el título -->
            <button class="close-modal bg-white rounded-full">
                <p class="text-4xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
            </button>
        </div>
        <div class="bg-white p-4"> <!-- Cambiamos el color de fondo y el padding -->
            <div class="modal-body flex flex-col gap-4 items-start overflow-y-auto p-4"> <!-- Ajustamos la alineación y el padding -->
                <div class="text-center"> <!-- Center align the value -->
                    <span class="font-semibold">Nombre:</span> {{$user->student->student_name}}
                </div>
                <div class="text-center"> <!-- Center align the value -->
                    <span class="font-semibold">Matricula:</span> {{$user->student->id_student}}
                </div>
                <div class="text-center"> <!-- Center align the value -->
                    <span class="font-semibold">Email:</span> {{$user->email}}
                </div>
                <div class="text-center"> <!-- Center align the value -->
                    <span class="font-semibold">División:</span> {{$user->student->division ? $user->student->division->division_name : "No tiene asignado division" }}
                </div>
            </div>
        </div>
    </div>
</div>
