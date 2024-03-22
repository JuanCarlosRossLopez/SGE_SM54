<div idModal="Edit_User_{{ $user->id }}"
    class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50 ">
    <div class="bg-[#01A080] w-full rounded shadow-lg max-w-sm">
        <div class="border-b px-4 py-2 flex justify-between items-center">
            <h3 class="font-semibold text-lg text-white text-center flex-grow">Editar Usuario</h3>
            <button class="close-modal bg-white rounded-full h-[1rem] flex items-center">
                <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
            </button>
        </div>

        <div class="modal-container">
            @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative alert" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="bg-white rounded shadow-xl  px-20 py-14 items-center justify-center">
                <form action="{{ url('usuarios', $user->id) }}" method="POST" class="flex flex-col items-center">
                    @method('PUT')
                    @csrf

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Nombre
                            de
                            usuario</label>
                        <input type="text" name="name" value="{{ $user->name }}" class="rounded input-field">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input type="email" name="email" value="{{ $user->email }}" class="rounded input-field">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
                        <input type="password" name="password" value="{{ $user->password }}"
                            class="rounded input-field">
                    </div>
                    <select name="role" id="" class="rounded">

                        <option value="{{ $role->name }}">Seleciona un rol</option>
                        <option value="student">Alumnoss</option>
                        <option value="teacher">Maestro</option>
                        <option value="admin">Administrador</option>
                        <option value="coordination">Coordinación</option>
                        <option value="president">Presidencia</option>
                        <option value="applicants">Aspirante</option>
                    </select>


                    <div class="flex justify-center">
                        <button type="submit">
                            <div
                                class="mt-4 bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                                Editar usuario
                            </div>
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div idModal="Show_User_{{ $user->id }}"
    class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">

    <div class="bg-[#01A080] rounded-lg shadow-lg animate-customBounce">
        <div class="border-b px-4 py-2 rounded-lg">
        <h3 class="font-semibold text-lg text-gray-800">Datos del usuario:{{ $user->name }}</h3>
                <button class="close-modal bg-white rounded-full h-[1rem] flex items-center">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>

            <div class="flex flex-col bg-white">

                <h5 class="py-2">Nombre de Usuario: {{ $user->name }} </h5>
                <h5 class="py-2">Email: {{ $user->email }} </h5>
            </div>
        </div>
    </div>
</div>

<div idModal="Delete_User_{{ $user->id }}"
    class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">

    <div class="bg-[#01A080] w-full rounded-lg shadow-lg max-w-sm animate-customBounce">
        <div class="border-b px-4 py-2 flex justify-between items-center rounded-lg">
            <h3 class="font-semibold text-lg text-white text-center flex-grow ">Realmente deseas eliminar a
                {{$user->name}} ? </h3>
        </div>
        <div class="grid grid-flow-col justify-center items-center bg-white">
            <form action="{{url('usuarios', $user->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button
                    class="close-modal bg-emerald-600 hover:bg-emerald-500 rounded-lg px-2 py-2 m-2 transition delay-150 duration-300 ease-in-out">
                    Aceptar
                </button>
            </form>
            <button class="close-modal bg-red-600 hover:bg-red-500 rounded-lg px-2 py-2">
                Cancelar
            </button>
        </div>
    </div>

</div>
