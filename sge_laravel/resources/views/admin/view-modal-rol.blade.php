<div id="edit{{$role->id}}" class="modal-roles h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <form method="POST"> <!-- Agregamos el formulario -->
        @csrf <!-- Agregamos el token CSRF -->
        <input type="hidden" name="role_id" value="{{$role->id}}"> <!-- Incluimos el ID del rol en un campo oculto -->
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Asignación de roles</h3>
                <button class="close-modal bg-white rounded-full">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2">
                <div class="modal-body flex-col gap-4 mb-0 overflow-y-auto flex items-center justify-center P-10 ">
                    <h1 class="poppins-light text-[20px]">
                        Selecciona el rol que el usuario tendrá
                    </h1>
                    <button>
                        <i class="fa-solid fa-circle-plus" style="color: #01A080;"></i>Agregar
                    </button>

                    <div>


                        <label class="poppins-light text-[15px]" for="">El rol cuenta con estos permisos:</label>
                        @foreach($role->permissions as $permission)
                        <div class=" k">
                        <div class="text-center">
                            <label class="poppins-light text-[15px]  " for="{{$permission->name}}">{{$permission->name}}</label>
                            <button>
                                <i class="fa-solid fa-xmark" style="color: #d50101;"></i>
                            </button>
                        </div>
                        </div>
                        @endforeach
                    </div>
                    <button type="submit" class="bg-[#01A080] text-white rounded p-2">Guardar</button> <!-- Botón de envío -->
                </div>
            </div>
        </div>
    </form>
</div>


<div class="modal-permision h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
        <div class="border-b px-4 py-2 flex justify-between items-center">
            <h3 class="font-semibold text-lg ml-60 text-white">Asginación de permisos</h3>
            <button class="close-modal bg-white rounded-full">
                <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
            </button>
        </div>
        <div class="bg-white p-2">
            <div class="modal-body flex-col gap-4 mb-0 overflow-y-auto flex items-center justify-center P-10 ">
                <div>
                    <h1>Crear Rol</h1>
                </div>
            </div>
        </div>
    </div>
</div>
</div>