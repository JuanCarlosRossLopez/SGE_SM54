<div id="view{{$user->id}}" class="view-modal-student h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <input type="hidden" name="teacher_id" value="{{$user->id}}">
    <div class="bg-[#75928c] w-full rounded shadow-lg max-w-3xl">
        <div class="border-b px-4 py-2 flex justify-between items-center">
            <h3 class="font-semibold text-lg text-white">Información del asesor</h3>
            <button class="close-modal bg-white rounded-full">
                <p class="text-4xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
            </button>
        </div>
        <div class="bg-white p-4">
            <div class="modal-body flex flex-col gap-4 items-start overflow-y-auto p-4">
                <div class="text-center">
                    <span class="font-semibold">Nombres:</span> {{$user->teachers->name_teacher}}
                </div>
                <div class="text-center">
                    <span class="font-semibold">Nomina:</span> {{$user->teachers->payroll}}
                </div>
                <div class="text-center">
                    <span class="font-semibold">Email:</span> {{$user->email}}
                </div>
                <div class="text-center">
                    <span class="font-semibold">División:</span> {{$user->teachers->division->division_name}}
                </div>
                <div class="text-center">
                    <span class="font-semibold">Carrera:</span> {{$user->teachers->career ? $user->teachers->career->career_name : 'Sin carrera'}}
                </div>
            </div>
        </div>
    </div>
</div>
