<div idModal="view_presidencies{{ $user->id }}"
    class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <input type="hidden" name="teacher_id" value="{{ $user->id }}">
    <!-- Incluimos el ID del maestro en un campo oculto -->
    <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
        <div class="border-b px-4 py-2 flex justify-between items-center">
            <h3 class="font-semibold text-lg ml-60 text-white">Información del Presidente</h3>
            <button class="close-modal bg-white rounded-full">
                <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
            </button>
        </div>
        <div class="bg-white p-2">
            <div class="modal-body flex-col gap-4 mb-0 overflow-y-auto flex items-center justify-center P-10 ">


                <div class="flex flex-col gap-2">
                    <div>
                        <span class="font-semibold">Email:</span> {{ $user->email }}

                    </div>
                    <div>
                        <span class="font-semibold">Nombre:</span> {{ $user->presidencies->president_name }}

                    </div>
                    <div>
                        <span class="font-semibold">Apellidos:</span> {{ $user->presidencies->president_lastname }}

                    </div>
                    <div>
                        <span class="font-semibold">Nomina:</span> {{ $user->presidencies->payroll_president }}

                    </div>
                    <div>
                        <span class="font-semibold">Carrera:</span> {{ $user->presidencies->career->career_name }}

                    </div>
                    <div>
                        <span class="font-semibold">División:</span> {{ $user->presidencies->division->division_name }}

                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
</div>
</div>
