<div id="add{{$user->id}}" class="modal-roles h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <p>{{$user->id}}</p>
    <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
        <div class="border-b px-4 py-2 flex justify-between items-center">
            <h3 class="font-semibold text-lg ml-60 text-white">Asginación de roles</h3>
            <button class="close-modal bg-white rounded-full">
                <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
            </button>
        </div>
        <div class="bg-white p-2">
            <div class="modal-body flex-col gap-4 mb-0 overflow-y-auto flex items-center justify-center P-10 ">
                <h1 class="poppins-light  text-[20px]">
                    Selecciona el rol que el usuario tendra
                </h1>
                <p>
                </p>
                <form action="{{ route('roles.store') }}" method="POST">
                    @csrf
                    <p>
                    </p>
                    <select name="role" id="" class="rounded">
                        <option value="">{{}}</option>
                        <option value="student">Alumno</option>
                        <option value="teacher">Maestro</option>
                        <option value="admin">Administrador</option>
                        <option value="coordination">Coordinación</option>
                        <option value="president">Presidencia</option>
                    </select>
                    <p>{{$user->id}}</p>

                    <button type="submit" class="bg-[#01A080] text-white rounded p-2">Guardar</button>
                </form>

            </div>
        </div>
    </div>
</div>
</div>


<div
            class="modal-permision h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
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
                                <label class="poppins-light text-[15px]" for="">Alumnos</label>
                                <input type="checkbox" name="" id="">
                                <label class="poppins-light text-[15px]" for="">Maestro</label>
                                <input type="checkbox" name="" id="">
                                <label class="poppins-light text-[15px]" for="">Administrador</label>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div class="gap-4">
                                <label class="poppins-light text-[15px]" for="">Cordinacion</label>
                                <input class="poppins-light text-[15px]" type="checkbox" name="" id="">
                                <label class="poppins-light text-[15px]" for="">Presidencia</label>
                                <input class="poppins-light text-[15px]" type="checkbox" name="" id="">
                                <label class="poppins-light text-[15px]"  for="">Secretaria</label>
                                <input type="checkbox" name="" id="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>