@extends('test.test_template')

@section('titulo', 'Usuarios')
@section('contenido')

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<div class="view_conteiner w-[1090px]">
    


            <div class="content_conteiner">
                <label class="word_title">Tabla de Gestión de Alumnos</label>
                <div class="inside_content_conteiner">
                    @if (session()->has('notificacion'))
                        <div class="text-blue-800">
                            {{ session('notificacion') }}
                        </div>
                    @endif
                    <div class="search_conteiner">
                        <button class="search_button">
                            <i class="fas fa-search text-gray-500"></i>
                        </button>
                        <input type="text" class="search_input" placeholder="Buscar..." />
                    </div>
                    <div class="search_button_conteiner">
                        <!-- En caso que necesites el boton dejalo, sino aplica hidden en el class -->
                        <button class="show-modal3 standar_button"><span class="inside_button">Agregar
                                Usuarios</span></button>
                    </div>
                </div>
                


                <h1>Crear Usuarios con Rol</h1>
    <form method="POST" action="{{route('muchos-usuarios.store')}}">
        @csrf
        <div>
            <label for="number_of_users">Número de Usuarios:</label>
            <input type="number" id="number_of_users" name="number_of_users" min="1" >
        </div>
        <div>
            <label for="role_name">Nombre del Rol:</label>
            <select name="role_name" id="role_name" class="rounded">
                                            <option value="">Selecciona un rol</option>
                                            <option value="student">Alumno</option>
                                            <option value="teacher">Maestro</option>
                                            <option value="admin">Administrador</option>
                                            <option value="coordination">Coordinación</option>
                                            <option value="president">Presidencia</option>
                                            <option value="applicants">Aspirante</option>

                                        </select>
        </div>
        <button type="submit">Crear Usuarios</button>
    </form>


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
                                        <button class="show-modal-view" data-target="#show{{ $user->id }}">
                                            <div class="comment-icon flex items-center justify-center">
                                                <i class="bi bi-eye-fill"></i>
                                            </div>
                                        </button>
                                        <button class="show-modal4" data-target="#edit{{ $user->id }}">
                                            <div class="comment-icon flex items-center justify-center">
                                                <i class="bi bi-pencil-square" style="color: blue;"></i>
                                            </div>
                                        </button>

                                        <button class="show-modal" data-target="#delete{{$user->id}}">
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
                    <div class="mt-5">{{ $users->links() }}</div>
                </div>








        <div
            class="modal3 h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50 ">
            <div class="bg-[#01A080] w-full rounded-t-lg shadow-lg max-w-sm">
                <div class="border-b px-4 py-2 flex justify-between items-center">
                    <h3 class="font-semibold text-lg text-white text-center flex-grow">Agregar Usuario</h3>
                    <button class="close-modal3 bg-white rounded-full h-[1rem] flex items-center">
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

                                        <select name="role" id="" class="rounded">
                                            <option value="">Selecciona un rol</option>
                                            <option value="student">Alumno</option>
                                            <option value="teacher">Maestro</option>
                                            <option value="admin">Administrador</option>
                                            <option value="coordination">Coordinación</option>
                                            <option value="president">Presidencia</option>
                                            <option value="applicants">Aspirante</option>

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



                <script>
                    const modalDelete = document.querySelector('.modal');
                    const showModalDelete = document.querySelectorAll('.show-modal');
                    const closeModalDelete = document.querySelectorAll('.close-modal');

                    showModalDelete.forEach(button => {
                        button.addEventListener('click', (e) => {
                            e.preventDefault()
                            const modalId = button.dataset.target
                            const modal = document.querySelector(modalId)
                            modal.classList.remove('hidden')
                            console.log(modal)
                        })
                    })

                    closeModalDelete.forEach(close => {
                        close.addEventListener('click', function() {
                            modalDelete.classList.add('hidden')
                        });
                    });

                    // closeModal.forEach(closeModal => {
                    //     closeModal.addEventListener('click', (e) => {
                    //         e.preventDefault()
                    //         const modal = closeModal.closest('show-modal-view')
                    //         modal.classList.add('hidden')
                    //     })
                    // })
                </script>
                <script>
                    const modalview = document.querySelectorAll('.modal-view');
                    const showModalview = document.querySelectorAll('.show-modal-view');
                    const closeModalview = document.querySelectorAll('.close-modal-view');

                    showModalview.forEach(button => {
                        button.addEventListener('click', (e) => {
                            e.preventDefault()
                            const modalId = button.dataset.target
                            const modal = document.querySelector(modalId)
                            modal.classList.remove('hidden')
                            console.log(modal)
                        })
                    })

                    closeModalview.forEach(close => {
                        close.addEventListener('click', function() {
                            modalview.classList.add('hidden')
                        });
                    });

                    // closeModal.forEach(closeModal => {
                    //     closeModal.addEventListener('click', (e) => {
                    //         e.preventDefault()
                    //         const modal = closeModal.closest('.modal-insert')
                    //         const modal_agregar = closeModal.closest('.modal3')
                    //         modal.classList.add('hidden')
                    //         modal_agregar.classList.add('hidden')
                    //     })
                    // })

                </script>
                <script>
                    const modal3 = document.querySelector('.modal3');

            const showModal3 = document.querySelector('.show-modal3');
            const closeModal3 = document.querySelectorAll('.close-modal3');

            showModal3.addEventListener('click', function() {
                modal3.classList.remove('hidden')
            })

            closeModal3.forEach(close => {
                close.addEventListener('click', function() {
                    modal3.classList.add('hidden')
                });
            });
            </script>

                <script>
                    const modal4 = document.querySelector('.modal4');
                    const showModal4 = document.querySelectorAll('.show-modal4');
                    const closeModal4 = document.querySelectorAll('.close-modal4');

                    showModal4.forEach(button => {
                        button.addEventListener('click', (e) => {
                            e.preventDefault()
                            const modalId = button.dataset.target
                            const modal = document.querySelector(modalId)
                            modal.classList.remove('hidden')
                            console.log(modal)
                        })
                    })

            closeModal4.forEach(close => {
                close.addEventListener('click', function() {
                    modal4.classList.add('hidden')
                });
            });
            </script>

            <script>
            const modal5 = document.querySelector('.modal5');

            const showModal5 = document.querySelector('.show-modal5');
            const closeModal5 = document.querySelectorAll('.close-modal5');

                    showModal5.addEventListener('click', function() {
                        modal5.classList.remove('hidden')
                    })
                </script>

            <script>
            const modal6 = document.querySelector('.modal6');

            const showModal6 = document.querySelector('.show-modal6');
            const closeModal6 = document.querySelectorAll('.close-modal6');

                    showModal6.addEventListener('click', function() {
                        modal6.classList.remove('hidden')
                    })
                </script>
            </div>
        @endsection
