
<div id="edit_permission{{$permission->id}}" class="edit-modal-permissions h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <form action="{{route('roles.update_permission', $permission->id)}}" method="POST">

    @method('PUT')
    @csrf
    <input type="hidden" name="role_id" value="{{$role->id}}"> <!-- Incluimos el ID del rol en un campo oculto -->
    <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
        <div class="border-b px-4 py-2 flex justify-between items-center">
            <h3 class="font-semibold text-lg ml-60 text-white">Editar  rol</h3>
            <button class="close-modal bg-white rounded-full">
                <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
            </button>
        </div>
        <div class="bg-white p-2">
            <div class="modal-body flex-col gap-4 mb-0 overflow-y-auto flex items-center justify-center P-10 ">
                
                <div class="flex flex-row gap-4 text-black ">
                    <div class="p-10">
                        <label for="role_name" class="">Nombre del permiso</label>
                        <input type="text" name="permission_name" id="permission_name" value="{{$permission->name}}" class="w-full rounded border border-gray-300 p-2">
                        <div>
                        <button class="standar_button">
                            Guardar
                        </button>
                        </div>
                    </div>
                   
                </div>
                </form>


                <div>



                </div>
            </div>
        </div>
    </div>
</div>
</div>