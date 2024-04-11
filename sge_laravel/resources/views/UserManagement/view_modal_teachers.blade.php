<div id="view{{$user->id}}" class="view-modal-asesor h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <input type="hidden" name="teacher_id" value="{{$user->id}}"> <!-- Incluimos el ID del maestro en un campo oculto -->
    <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
        <div class="border-b px-4 py-2 flex justify-between items-center">
            <h3 class="font-semibold text-lg ml-60 text-white">Información del asesor</h3>
            <button class="close-modal bg-white rounded-full">
                <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
            </button>
        </div>
        <div class="bg-white p-2">
            <div class="modal-body flex-col gap-4 mb-0 overflow-y-auto flex items-center justify-center P-10 ">
              

                <div class="flex flex-col gap-2">
                    <div>
                    <span class="font-semibold">Usuario:</span> {{$user->name}}

                    </div>
                    <div>
                    <span class="font-semibold">Nombre:</span> {{$user->teachers->name_teacher}}

                    </div>
                    <div>
                    <span class="font-semibold">Nomina:</span> {{$user->teachers->payroll}}

                    </div>
                    <div>
                    <span class="font-semibold">Email:</span> {{$user->teachers->email}}

                    </div>
                    <div>
                    <span class="font-semibold">División:</span> {{$user->teachers->division->division_name}}

                    </div>
                </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>