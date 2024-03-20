<div id="edit{{$role->id}}" class="modal-roles h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <form method="POST" action="{{url('roles',$role->id)}}">
        @method('PUT')
        @csrf
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Asignación de roles</h3>
                <button class="close-modal bg-white rounded-full">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2">
                <div class="modal-body flex-col gap-4 mb-0 overflow-y-auto flex items-center justify-center P-10">
                   
                
                    <label class="poppins-light text-[15px]" for="">El rol cuenta con estos permisos:</label>

                    <div class="flex flex-wrap">
                        @foreach($permissions as $permission)
                        <div class="flex items-center space-x-2 m-2 ">
                            <input type="checkbox" name="permissions[]" id="{{$permission->name}}" value="{{$permission->name}}" @if($role->permissions->contains($permission->id)) checked @endif>
                            <label class="poppins-light text-[20px]" for="{{$permission->name}}">{{$permission->name}}</label>
                        </div>
                        @endforeach
                    </div>

                    <button type="submit" class="bg-[#01A080] text-white rounded p-2">Guardar</button>
                </div>
            </div>
        </div>
    </form>
</div>

