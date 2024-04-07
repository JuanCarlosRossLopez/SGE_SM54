<div id="crear" class="modalAdd h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <form method="POST" action="{{ route('carreras.store') }}">
        @csrf
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Agregar grupo</h3>
                <button class="close-modal bg-white rounded-full">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2">
                <div class="modal-body flex-row gap-4 mb-0 overflow-y-auto flex items-center justify-center p-10">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="text-xl font-bold mb-4">Editando Carrera</h1>
                        
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="career_name" class="block text-gray-700">Nombre del grupo</label>
                                    <input type="text" name="career_name" id="group_name" placeholder="Nombre de la carrera"  class="rounded-md border border-gray-300 p-2 w-full">
                                </div>
                            </div>
                            <div class="mt-4">
                                <label for="division_id" class="block text-gray-700">Carrera</label>
                                <select id="division_id" name="division_id" class="rounded-md border border-gray-300 p-2 w-full">
                                    <option value="">Selecciona una carrera</option>
                                    @foreach ($carreras as $carrera)
                                        <option value="{{ $carrera->id }}">
                                            {{ $carrera->career_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex justify-center mt-4">
                                <button type="submit" class="bg-[#01A080] text-white rounded p-2">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>