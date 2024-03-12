<div id="show{{$user->id}}" class="modal4 h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50 ">
    <div class="bg-[#01A080] w-full rounded shadow-lg max-w-sm">
        <div class="border-b px-4 py-2 flex justify-between items-center">
            <h3 class="font-semibold text-lg text-white text-center flex-grow">Editar Usuario</h3>
            <button class="close-modal4 bg-white rounded-full h-[1rem] flex items-center">
                <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
            </button>
        </div>

        <div class="modal-container">
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative alert"
                    role="alert">
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
                <form action="{{ route('usuarios.store') }}" method="POST" class="flex flex-col items-center">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                        <input type="text" name="name_user" value="{{ $user->name_user }}"
                            class="rounded ancho input-field">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Apellidos</label>
                        <input type="text" name="lastname_user" value="{{ $user->lastname_user }}"
                            class="rounded input-field">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Nombre
                            de
                            usuario</label>
                        <input type="text" name="username" value="{{ $user->username }}" class="rounded input-field">
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

                    <div class="flex justify-center">
                        <button type="submit">
                            <div
                                class=" bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                                Editar usuario
                            </div>
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="show{{$user->id}}" class="modal-view h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <div class="bg-white w-96 p-4 rounded-lg">
        <div class="flex flex-col justify-between items-center">
            <div class="flex flex-row gap-10 ">
                <h3 class="  font-semibold text-lg text-gray-800">Datos del usuarios:
                    {{ $user->name_user }}</h3>
                <button class="close-modal text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="py-4">
                <h5 class="py-2">Nombre: {{ $user->name_user }} </h5>

                <h5 class="py-2">Apellidos: {{ $user->lastname_user }} </h5>
                <h5 class="py-2">Nombre de Usuario: {{ $user->username }} </h5>
                <h5 class="py-2">Email: {{ $user->email }} </h5>
                <h5 class="py-2">Contraseña: {{ $user->password }} </h5>
            </div>
        </div>
    </div>
</div>

<div class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <div class="bg-white w-96 p-4 rounded-lg">
        <div class="flex justify-between items-center">
            <h3 class="font-semibold text-lg text-gray-800">Usuario eliminado correctamente</h3>
            <button class="close-modal text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
    </div>

</div>

<div class="modal5 h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <div class="bg-white w-96 p-4 rounded-lg">
        <div class="flex justify-between items-center">
            <h3 class="font-semibold text-lg text-gray-800">Usuario agregado correctamente</h3>
            <button class="close-modal text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
    </div>
</div>

<div class="modal6 h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <div class="bg-white w-96 p-4 rounded-lg">
        <div class="flex justify-between items-center">
            <h3 class="font-semibold text-lg text-gray-800">Usuario editado correctamente</h3>
            <button class="close-modal text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
    </div>
</div>
