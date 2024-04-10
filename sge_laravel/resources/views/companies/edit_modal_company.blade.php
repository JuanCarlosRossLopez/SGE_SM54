
<div id="edit{{ $company->id }}" class="modal-edit-empresa  h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <form method="POST" action="{{ route('empresas.update', $company->id) }}">
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
                        <h1 class="text-xl font-bold mb-4">Editando la empresa</h1>
                        <form action="{{ route('empresas.update', $company->id) }}" method="POST"
                            class="flex flex-col gap-4">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="mt-4">
                                    <label for="company_name" class="block text-gray-700">Nombre de la empresa</label>
                                    <input type="text" name="company_name" id="company_name" placeholder="Nombre de la empresa" value="{{ $company->company_name }}" class="rounded-md border border-gray-300 p-2 w-full">
                                    
                                    <label for="addres" class="block text-gray-700">Dirección</label>
                                    <input type="text" name="addres" id="addres"  placeholder="Dirección" value="{{ $company->addres }}" class="rounded-md border border-gray-300 p-2 w-full">
                            </div>
                        
                            <div class="mt-4">
                                    <label for="asesor_name" class="block text-gray-700">Nombre del asesor</label>
                                    <input type="text" name="asesor_name" id="asesor_name" placeholder="Nombre del asesor" value="{{ $company->asesor_name }}" class="rounded-md border border-gray-300 p-2 w-full">
                                    
                                    <label for="job" class="block text-gray-700">Trabajo</label>    
                                    <input type="text" name="job" id="job" placeholder="Trabajo" value="{{ $company->job }}" class="rounded-md border border-gray-300 p-2 w-full">
                                    
                            </div>

                            <div class="mt-4">
                                <label for="company_phone_number" class="block text-gray-700">Numero telefónico de la empresa</label>
                                <input type="text" name="company_phone_number" id="company_phone_number" placeholder="Numero telefónico de la empresa" value="{{ $company->company_phone_number }}" class="rounded-md border border-gray-300 p-2 w-full">
                
                                <label for="company_email" class="block text-gray-700">Correo Electronico</label>
                                <input type="text" name="company_email" id="company_email"  placeholder="Correo Electronico " value="{{ $company->company_email }}" class="rounded-md border border-gray-300 p-2 w-full">
                                
                            </div>
                        
                            <div class="mt-4">
                                <label for="work_area" class="block text-gray-700">Area de trabajo</label>
                                <input type="text" name="work_area" id="work_area" placeholder="Area de trabajo" value="{{ $company->work_area }}" class="rounded-md border border-gray-300 p-2 w-full">
                                
                                <label for="company_description" class="block text-gray-700">Descripción</label>
                                <input type="text" name="company_description" id="company_description" placeholder="Descripción" value="{{ $company->company_description }}" class="rounded-md border border-gray-300 p-2 w-full">
                                    
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