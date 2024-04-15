<div id="permissions{{ $user->id }}" class="modal-permission h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <input type="hidden" name="teacher_id" value="{{ $user->id }}">
    <!-- Incluimos el ID del maestro en un campo oculto -->
    <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
        <div class="border-b px-4 py-2 flex justify-between items-center">
            <h3 class="font-semibold text-lg ml-60 text-white">lista de Asesores</h3>
            <button class="close-modal bg-white rounded-full">
                <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
            </button>
        </div>
        <div class="bg-white p-2">
            <div class="modal-body flex-col gap-4 mb-0 overflow-y-auto flex items-center justify-center P-10 ">
                <div>
                    <div class="flex flex-col text-center ">
                        <h3>
                            El usuario actualmente cuenta con el siguiente rol:
                        </h3>
                        @foreach($user->roles as $role)
                        <div>
                            <b class="flex flex-row">
                                {{ $role->name }}</h3>
                            </b>
                        </div>
                        @endforeach
                        <form action="{{route('user.edit_permission',$user->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="flex flex-row gap-5">
                                <div class="">
                                    <div class="">
                                        <h3 class="text-center m-2">Estos son los roles disponibles </h3>
                                        @foreach($roles as $role)
                                        <div class="flex flex-row p-2   ">
                                            <input class=" " type="checkbox" name="roles[]" value="{{ $role->id }}" @if($user->hasRole($role->name)) checked @endif>
                                            <label class="" for="roles">{{ $role->name }}</label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="">
                                    <h3 class="text-center m-2">Estos son los permisos disponibles </h3>

                                    @foreach($permissions as $permission)
                                    <div class="flex flex-row p-2   ">
                                        <input class=" " type="checkbox" name="permissions[]" value="{{ $permission->id }}" @if($user->hasPermissionTo($permission->name)) checked @endif>
                                        <label class="" for="permissions">{{ $permission->name }}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="flex justify-center mt-2">
                                <button type="submit" class="bg-[#01A080] text-white rounded p-2">Guardar</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>