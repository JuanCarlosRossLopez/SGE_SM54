<div id="edit{{ $companies->id }}"
    class="modal-edit-empresa  h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <form method="POST" action="{{ url('empresas', $companies->id) }}">
        @method('PUT')
        @csrf
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Editar la empresa</h3>
                <button class="close-modal bg-white rounded-full">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2">
                <div class="modal-body flex-col gap-4 mb-0 overflow-y-auto flex items-center justify-center p-10">
                    <div class="flex flex-col items-center justify-center">
                        <div class="flex items-center justify-between w-full mb-4">
                            <h1 class="text-xl font-bold">Editando la empresa</h1>
                            <p class="text-gray-500">{{ $companies->id }}</p>
                        </div>
                        <form action="{{ route('empresas.update', $companies->id) }}" method="POST"
                            class="flex flex-col gap-4">
                            @csrf
                            @method('PUT')
                            <div class="flex gap-4">
                                <input type="text" name="company_name" id="company_name" placeholder="Nombre de la empresa"
                                    class="flex-1 rounded-md border border-gray-300 p-2">
                                <input type="text" name="addres" id="addres"  placeholder="Dirección"
                                    class="flex-1 rounded-md border border-gray-300 p-2">
                            </div>
                        
                            <div class="flex gap-4">
                                <input type="text" name="asesor_name" id="asesor_name" placeholder="Nombre del asesor"
                                    class="flex-1 rounded-md border border-gray-300 p-2">
                                <input type="text" name="job" id="job" placeholder="Trabajo"
                                    class="flex-1 rounded-md border border-gray-300 p-2">
                            </div>

                            <div class="flex gap-4">
                                <input type="text" name="company_phone_number" id="company_phone_number" placeholder="Numero telefónico de la empresa"
                                    class="flex-1 rounded-md border border-gray-300 p-2">
                                <input type="text" name="company_email" id="company_email"  placeholder="Correo Electronico "
                                    class="flex-1 rounded-md border border-gray-300 p-2">
                            </div>
                        
                            <div class="flex gap-4">
                                <input type="text" name="work_area" id="work_area" placeholder="Area de trabajo"
                                    class="flex-1 rounded-md border border-gray-300 p-2">
                                <input type="text" name="company_description" id="company_description" placeholder="Descripción"
                                    class="flex-1 rounded-md border border-gray-300 p-2">
                            </div>
                            <!-- Puedes agregar más campos aquí según sea necesario -->
                            <div class="flex justify-end mt-4">
                                <button type="submit" class="bg-[#01A080] text-white rounded p-2">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
