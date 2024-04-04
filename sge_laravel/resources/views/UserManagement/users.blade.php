    @extends('test.test_template')

@section('title', 'Usuarios')
@section('contenido')

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<div class="view_conteiner">
    <div class="back_conteiner">
        
        <div class="top_conteiner">
            <label>
                Gestión de Usuarios
            </label>
            
            <label>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                </svg>
            </label>
        </div>

        <div class="content_conteiner">
            <label class="word_title">Tabla de Gestión de Alumnos</label>
            <div class="inside_content_conteiner">

                
                <div class="search_conteiner">
                    <button class="search_button">
                        <i class="fas fa-search text-gray-500"></i>
                    </button>
                    <input type="text" class="search_input" placeholder="Buscar..." />
                </div>
                
                <div class="search_button_conteiner">
                    <!-- En caso que necesites el boton dejalo, sino aplica hidden en el class -->
                    <button data-modal="Add_User" class="show-modal standar_button"><span class="inside_button">Agregar
                            Usuario</span></button>

                </div>
                <button data-modal="Add_Users" class="show-modal standar_button2 "><span class="inside_button">Agregar
                        Usuarios</span></button>
            </div>


            <div class="table_conteiner">
                <table class="standar_table">
                    <thead class="standar_thead">
                        <tr>
                            <th class="theader">
                                #</th>
                            <th class="theader">
                                Nombre de
                                Usuario</th>
                            <th class="theader">
                                Email
                            </th>
                            <th class="theader">
                                Roles
                            </th>
                            <th class="theader">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        @foreach ($users as $user)
                        <tr class="trow">
                            <td class="trowc"> {{ $loop->iteration }} </td>
                            <td class="trowc"> {{ $user->name }} </td>
                            <td class="trowc"> {{ $user->email }} </td>
                            <td>
                                @foreach ($user->roles as $role)
                                {{ $role->name }}
                            </td>
                            <td class="trowc">
                                <button data-modal="Show_User_{{ $user->id }}" class="show-modal">
                                    <div class="comment-icon flex items-center justify-center">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </button>
                                <button data-modal="Edit_User_{{ $user->id }}" class="show-modal">
                                    <div class="comment-icon flex items-center justify-center">
                                        <i class="bi bi-pencil-square" style="color: blue;"></i>
                                    </div>
                                </button>

                                <button data-modal="Delete_User_{{ $user->id }}" class="show-modal"
                                    data-target="#delete{{$user->id}}">
                                    <div class="comment-icon flex items-center justify-center">
                                        <i class="bi bi-trash" style="color: red;"></i>
                                    </div>
                                </button>
                            </td>
                        </tr>
                        @include('UserManagement.modal-users')
                        @endforeach

                        @endforeach
                    </tbody>
                </table>
                @if (session()->has('notificacion'))
                <div id="notification"
                    class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                    {{ session('notificacion') }}</div>
                <script>
                setTimeout(function() {
                    document.getElementById('notification').style.display = 'none';
                }, 3000);
                </script>
                @endif
                <div class="mt-5">{{ $users->links() }}</div>
            </div>








            <div idModal="Add_User"
                class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50 ">
                <div class="bg-[#01A080] w-full rounded shadow-lg max-w-sm">
                    <div class="border-b px-4 py-2 flex justify-between items-center">
                        <h3 class="font-semibold text-lg text-white text-center flex-grow">Agregar Usuario</h3>
                        <button class="close-modal bg-white rounded-full h-[1rem] flex items-center">
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
                            <form action="{{ route('usuarios.store') }}" method="POST"
                                class="flex flex-col items-center">
                                @csrf


                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Nombre
                                        de
                                        usuario</label>
                                    <input type="text" name="name" class="rounded input-field">
                                </div>

                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                                    <input type="email" name="email" class="rounded input-field">
                                </div>

                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
                                    <input type="password" name="password" class="rounded input-field">
                                </div>

                                <select name="role" id="role_name"
                                    class="rounded input-field block text-gray-700 text-sm font-bold mb-2" required>
                                    <option value="">Selecciona un rol</option>
                                    @foreach($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>

                                <div class="flex justify-center">
                                    <button type="submit">
                                        <div
                                            class=" bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                                            Agregar usuario
                                        </div>
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div idModal="Add_Users"
                class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
                <div class="bg-[#01A080] w-full rounded shadow-lg max-w-sm">
                    <div class="border-b px-4 py-2 flex justify-between items-center">
                        <h3 class="font-semibold text-lg text-white text-center flex-grow">Agregar Usuarios</h3>
                        <button class="close-modal bg-white rounded-full h-[1rem] flex items-center">
                            <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                        </button>
                    </div>

                    <form class="bg-white rounded shadow-xl  px-20 py-14 items-center justify-center" method="POST"
                        action="{{route('muchos-usuarios.store')}}">
                        @csrf
                        <div>
                            <label for="number_of_users" class="block text-gray-700 text-sm font-bold mb-2">Número de
                                Usuarios:</label>
                            <input type="number" id="number_of_users" name="number_of_users" min="1"
                                class="rounded input-field">
                        </div>
                        <div>
                            <label for="role_name">Rol:</label>
                            <select name="role_name" id="role_name"
                                class="rounded input-field block text-gray-700 text-sm font-bold mb-2" required>
                                <option value="">Selecciona un rol</option>
                                @foreach($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit"
                            class="bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Crear
                            Usuarios</button>

                    </form>
                </div>
            </div>


            <script src="{!! asset('js/modals.js') !!}"></script>

        </div>
        @endsection