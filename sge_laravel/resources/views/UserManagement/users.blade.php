    @extends('test.final_template')

    @section('title', 'Gestión de usuarios')
    @section('contenido')

        <div class="back_conteiner">

            <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
            </head>
            <div class="view_conteiner">
                <div class="back_conteiner">
                    <div class="top_conteiner">
                    @if (session()->has('notificacion'))
                        <div id="notification"
                            class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 w-full rounded relative">
                            {{ session('notificacion') }}
                        </div>
                        <script>
                            setTimeout(function() {
                                document.getElementById('notification').style.display = 'none';
                            }, 8000);
                        </script>
                    @endif
                        <label>
                            Gestión de Usuarios
                        </label>
                        <label>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                            </svg>
                        </label>
                    </div>

                    <div class="content_conteiner">
                        <label class="word_title">Tabla de Gestión de Usuarios</label>
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




                            </div>
                            <form action="{{ route('users.filterByRole') }}" method="GET">
                                <label for="role">Filtrar por rol:</label>
                                <select name="role" id="role">
                                    <option value="Administrador">Administrador</option>
                                    <option value="Asesor">Asesor</option>
                                    <option value="Estudiante">Estudiante</option>
                                    <option value="Presidente">Presidente</option>
                                    <option value="Cordinacion">Cordinacion</option>

                                </select>
                                <button type="submit">Filtrar</button>
                            </form>

                            <div class="w-[15rem] bg-[#01A080]  text-center flex flex-row items-center rounded">
                                <label class="font-semibold font-poppins text-lg text-start w-full text-white">Crear Usuarios</label>
                                <div class="relative dropdown-trigger">
                                    <button class="dropdown-btn w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="hidden absolute bg-white border border-gray-200 mt-2 py-2 rounded w-48 z-10 dropdown-content">
                                        <a class="show-modal3  block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">Usuario</a>
                                        <a class="show-modal-add  block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">Estudiante</a>
                                        <a class=" show-modal-add-teacher block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">Asesor</a>
                                        <a class=" show-modal-president block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">Presidente</a>
                                        <a href="#" class="block px-4 py-2 text-gray-800 text-xs hover:bg-gray-200">Cordinador</a>

                                            </div>
                                        </div>

                                    </div>
                                    <!-- <button class="show-modal3 standar_button"><span class="inside_button">Agregar un
                                                                            Usuario</span></button> -->
                                    <div
                                        class="w-fit p-1 border-2 bg-[#F1F0F0] text-center flex flex-row items-center rounded gap-2">
                                        <label
                                            class="text-start font-sans w-full font-semibold text-[#545454] text-lg flex flex-row gap-2 justify-center items-center">Crear
                                            usuarios forma masiva <i class="fa-solid fa-arrow-right flex"></i></label>
                                        <div class="relative dropdown-trigger gap-2">
                                            <button class="show-modal-u buttons_card_green w-fit  button_add_green">
                                                <i class="fa-solid fa-circle-plus"></i>
                                            </button>
                                            <div
                                                class="hidden absolute bg-white border border-gray-200 mt-2  py-2 rounded w-48 z-10 dropdown-content">
                                                <a
                                                    class="show-modal3  block font-sans w-full text-center cursor-pointer p-2 hover:bg-gray-200 font-normal text-[#545454] text-base">Usuario</a>
                                                <a
                                                    class="show-modal-add  block font-sans w-full text-center cursor-pointer p-2 hover:bg-gray-200 font-normal text-[#545454] text-base">Estudiante</a>
                                                <a
                                                    class="show-modal-add-teacher block font-sans w-full text-center cursor-pointer p-2 hover:bg-gray-200 font-normal text-[#545454] text-base">Asesor</a>
                                                <a href="#"
                                                    class="block font-sans w-full text-center cursor-pointer p-2 hover:bg-gray-200 font-normal text-[#545454] text-base">Presidente
                                                    (Sin acción)</a>
                                                <a href="#"
                                                    class="block font-sans w-full text-center cursor-pointer p-2 hover:bg-gray-200 font-normal text-[#545454] text-base">Cordinador
                                                    (Sin acción)</a>

                                            </div>
                                        </div>
                                    </div>


                                    <div
                                        class="modal-user h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
                                        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-sm">
                                            <div class="border-b px-4 py-2 flex justify-between items-center">
                                                <h3 class="font-semibold text-lg text-white text-center flex-grow">Agregar
                                                    usuarios de forma masiva
                                                </h3>
                                                <button
                                                    class="close-modal-u bg-white rounded-full h-[1rem] flex items-center">
                                                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark"
                                                            style="color: #d50101;"></i>
                                                    </p>
                                                </button>
                                            </div>

                                            <form
                                                class="bg-white rounded shadow-xl  px-20 py-14 items-center justify-center"
                                                method="POST" action="{{ route('muchos-usuarios.store') }}">
                                                @csrf
                                                <div>
                                                    <label for="number_of_users"
                                                        class="block text-gray-700 text-sm font-bold mb-2">Número de
                                                        Usuarios:</label>
                                                    <input type="number" id="number_of_users" name="number_of_users"
                                                        min="1" class="rounded input-field">
                                                </div>
                                                <div>
                                                    <label for="role_name">Rol:</label>
                                                    <select name="role_name" id="role_name"
                                                        class="rounded input-field block text-gray-700 text-sm font-bold mb-2"
                                                        required>
                                                        <option value="">Selecciona un rol</option>
                                                        @foreach ($roles as $role)
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
                                            Nombre completo
                                        </th>
                                        <th class="theader">
                                            Division
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
                                        <td class="trowc">
                                            @if ($user->hasRole('Asesor') && $user->teachers)
                                            {{ $user->teachers->name_teacher }}
                                            @elseif ($user->hasRole('Estudiante') && $user->student)
                                            {{ $user->student->student_name }}
                                            @else
                                            <p>No se ha asignado un nombre</p>
                                            @endif

                                        </td>
                                        <td class="trowc"> </td>
                                        <td>

                                                        @if ($user->roles->isEmpty())
                                                            <p>No se han asignado roles</p>
                                                        @else
                                                            @foreach ($user->roles as $role)
                                                                <label
                                                                    class="italic font-semibold bg-[#18a68a31] px-2 rounded text-[#18A689] md:text-base">{{ $role->name }}</label>
                                                            @endforeach
                                                        @endif



                                                    </td>
                                                    <td class="trowc">
                                                        <button class="show-modal-view px-1"
                                                            data-target="#show{{ $user->id }}">
                                                            <div class="button_see_blue">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </div>
                                                        </button>
                                                        <button class="show-modal4 px-1"
                                                            data-target="#edit{{ $user->id }}">
                                                            <div class="button_edit_yellow">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </div>
                                                        </button>

                                                        <button class="show-modal px-1"
                                                            data-target="#delete{{ $user->id }}">
                                                            <div class="button_delete_red">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </div>
                                                        </button>
                                                    </td>
                                                </tr>

                                    @include('UserManagement.modal-users')
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="mt-5">{{ $users->links() }}</div>
                        </div>


                        <div class="modal-add-student hidden h-screen w-full fixed left-0 top-0     flex justify-center items-center bg-black bg-opacity-50">
                            <div class="bg-[#01A080] w-full rounded shadow-lg max-w-3xl">
                                <div class="border-b px-4 py-2 flex justify-between items-center">
                                    <h3 class="text-center items-center font-semibold text-lg text-white">Agregar Estudiante</h3>
                                    <button class="close-modal bg-white rounded-full">
                                        <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                                    </button>
                                </div>

                                <div class="bg-white w-full p-4">
                                    <div class="modal-body flex flex-col gap-4 items-center justify-center p-4">
                                        <h1 class="text-xl font-bold mb-4">Crear Estudiante</h1>
                                        <form action="{{ route('estudiantes.store') }}" method="POST" class="w-full">
                                            @csrf
                                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                                <input type="text" name="name" placeholder="Nombre de usuario" class="rounded input-field">
                                                <input type="email" name="email" placeholder="Correo electronico" class="rounded input-field">
                                                <input type="password" name="password" placeholder="Contraseña" class="rounded input-field">

                                                <input type="text" name="student_name" id="student" placeholder="Nombre del estudiante" class="rounded-md border border-gray-300 p-2">
                                                <input type="text" name="id_student" id="id_student" placeholder="Matrícula" class="rounded-md border border-gray-300 p-2">

                                                <select name="division_id" class="rounded-md border border-gray-300 p-2">
                                                    <option selected disabled>Elige una división</option>
                                                    @foreach ($Divisions as $division)
                                                    <option value="{{$division->id}}">{{$division->division_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="flex justify-center mt-4">
                                                <button type="submit" class="bg-[#01A080] text-white rounded p-2">Guardar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="modal-presidente-add h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50 ">
                            <div class="bg-[#01A080] w-full rounded shadow-lg max-w-sm">
                                <div class="border-b px-4 py-2 flex justify-between items-center">
                                    <h3 class="font-semibold text-lg text-white text-center flex-grow">Agregar Presidente
                                    </h3>
                                    <button class="close-modal3 bg-white rounded-full h-[1rem] flex items-center">
                                        <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i>
                                        </p>
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
                                        <form action="{{ route('presidentes.store') }}" method="POST" class="flex flex-col items-center">
                                            @csrf

                                            <div class="mb-4">
                                                <input type="text" name="name" placeholder="Nombre de usuario" class="rounded input-field">

                                            </div>
                                            <div class="mb-4">
                                                <input type="email" name="email" placeholder="Correo electronico" class="rounded input-field">
                                            </div>

                                            <div class="mb-4">
                                                <input type="password" name="password" placeholder="Contraseña" class="rounded input-field">

                                            </div>
                                            <div class="mb-4">
                                                <label class="block text-gray-700 text-sm font-bold mb-2">Nombre
                                                    del Presidente</label>
                                                <input type="text" name="president_name" class="rounded input-field">
                                            </div>

                                            <div class="mb-4">
                                                <label class="block text-gray-700 text-sm font-bold mb-2">Apellidos del
                                                    Presidente</label>
                                                <input type="text" name="president_lastname" class="rounded input-field">
                                            </div>

                                            <div class="mb-4">
                                                <label class="block text-gray-700 text-sm font-bold mb-2">Nómina</label>
                                                <input type="number" name="payroll_president" class="rounded input-field">
                                            </div>
                                            <div>
                                                <select name="user_id" id="user_id" class="rounded input-field block text-gray-700 text-sm font-bold mb-2" required>
                                                    <option value="">Selecciona un usuario</option>
                                                    @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div>
                                                <select name="career_id" id="career_id" class="rounded input-field block text-gray-700 text-sm font-bold mb-2" required>
                                                    <option value="">Selecciona una carrera</option>
                                                    @foreach ($careers as $career)
                                                    <option value="{{ $career->id }}">{{ $career->career_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div>
                                                <select name="division_id" id="division_id" class="rounded input-field block text-gray-700 text-sm font-bold mb-2" required>
                                                    <option value="">Selecciona una división</option>
                                                    @foreach ($Divisions as $division)
                                                    <option value="{{ $division->id }}">{{ $division->division_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>


                                            <div class="flex justify-center">
                                                <button type="submit">
                                                    <div class=" bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                                                        Agregar presidente
                                                    </div>
                                                </button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="modal3 h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50 ">
                            <div class="bg-[#01A080] w-full rounded shadow-lg max-w-sm">
                                <div class="border-b px-4 py-2 flex justify-between items-center">
                                    <h3 class="font-semibold text-lg text-white text-center flex-grow">Agregar Usuario</h3>
                                    <button class="close-modal3 bg-white rounded-full h-[1rem] flex items-center">
                                        <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i>
                                        </p>
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
                                        <form action="{{ route('usuarios.store') }}" method="POST" class="flex flex-col items-center">
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

                                            <select name="role" id="role_name" class="rounded input-field block text-gray-700 text-sm font-bold mb-2" required>
                                                <option value="">Selecciona un rol</option>
                                                @foreach ($roles as $role)
                                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select>

                                            <div class="flex justify-center">
                                                <button type="submit">
                                                    <div class=" bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                                                        Agregar usuario
                                                    </div>
                                                </button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-add-asesor h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
                            <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
                                <div class="border-b px-4 py-2 flex justify-between items-center">
                                    <h3 class="font-semibold text-lg ml-60 text-white">Agregar Asesor</h3>
                                    <button class="close-modal bg-white rounded-full">
                                        <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                                    </button>
                                </div>
                                <div class="bg-white p-2">
                                    <div class="modal-body flex-row gap-4 mb-0 overflow-y-auto flex items-center justify-center p-10">
                                        <div class="flex flex-col items-center justify-center">
                                            <h1 class="text-xl font-bold mb-4">Crear Asesor</h1>
                                            <form action="{{ route('maestros.store') }}" method="POST" class="flex flex-col gap-4">
                                                @csrf
                                                <div class="flex flex-col gap-4">
                                                    <input type="text" name="name" placeholder="Nombre de usuario" class="rounded input-field">
                                                    <input type="email" name="email" placeholder="Correo electronico" class="rounded input-field">
                                                    <input type="password" name="password" placeholder="Contraseña" class="rounded input-field">
                                                    <input type="text" name="teacher_name" id="teacher_name" placeholder="Nombre del asesor" class="flex-1 rounded-md border border-gray-300 p-2">
                                                    <input type="number" name="payroll" id="payroll" placeholder="Número de nómina del asesor" class="flex-1 rounded-md border border-gray-300 p-2" oninput="maxLengthCheck(this)">
                                                    <script>
                                                        function maxLengthCheck(object) {
                                                            if (object.value.length > 11)
                                                                object.value = object.value.slice(0, 11);
                                                        }
                                                    </script>
                                                </div>

                                                <div class="flex gap-4">
                                                    <!-- <input type="text" name="id_user" id="id_user" placeholder="ID de usuario del asesor"
                                    class="flex-1 rounded-md border border-gray-300 p-2"> -->
                                                    <select name="division_id" id="">
                                                        <option value="">Selecciona una división</option>
                                                        @foreach ($Divisions as $divisions)
                                                        <option value="{{ $divisions->id }}">{{ $divisions->division_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <!-- Puedes agregar más campos aquí según sea necesario -->
                                                <div class="flex justify-center">
                                                    <button type="submit" class="bg-[#01A080] text-white rounded p-2">Guardar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <script>
                            const modalview = document.querySelectorAll('.modal-view');
                            const showModalview = document.querySelectorAll('.show-modal-view');
                            const closeModalview = document.querySelectorAll('.close-modal-view');
                            const modal_add = document.querySelector('.modal-add-student');
                            const show_modal_add = document.querySelector('.show-modal-add');
                            const modal_add_president = document.querySelector('.modal-presidente-add');
                            const show_add_president = document.querySelector('.show-modal-president');

                            show_add_president.addEventListener('click', function() {
                                modal_add_president.classList.remove('hidden')
                            })



                            show_modal_add.addEventListener('click', function() {
                                modal_add.classList.remove('hidden')
                            })

                const modal_add_teacher = document.querySelector('.modal-add-asesor');
                const show_modal_add_teacher = document.querySelector('.show-modal-add-teacher');
                show_modal_add_teacher.addEventListener('click', function() {
                    modal_add_teacher.classList.remove('hidden')
                })

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
                const modalDelete = document.querySelector('.modal');
                const showModalDelete = document.querySelectorAll('.show-modal');
                const closeModalDelete = document.querySelectorAll('.close-modal');
                const closeModal = document.querySelectorAll('.close-m');

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

                closeModal.forEach(closeModal => {
                    closeModal.addEventListener('click', (e) => {
                        e.preventDefault()
                        const modal = closeModal.closest('show-modal-view')
                        modal.classList.add('hidden')
                    })
                })
            </script>
            <script>
                const modal9 = document.querySelector('.modal9');

                const showModal9 = document.querySelector('.show-modal9');
                const closeModal9 = document.querySelectorAll('.close-modal9');

                showModal9.addEventListener('click', function() {
                    modal9.classList.remove('hidden')
                })

                closeModal9.forEach(close => {
                    close.addEventListener('click', function() {
                        modal3.classList.add('hidden')
                    });
                });
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
            <script>
                const modal_u = document.querySelector('.modal-user');

                const showModal_u = document.querySelector('.show-modal-u');
                const closeModal_u = document.querySelectorAll('.close-modal-u');

                showModal_u.addEventListener('click', function() {
                    modal_u.classList.remove('hidden')
                })

                closeModal_u.forEach(close => {
                    close.addEventListener('click', function() {
                        modal_u.classList.add('hidden')
                    });
                });
            </script>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var dropdownTriggers = document.querySelectorAll(".dropdown-trigger");

                    dropdownTriggers.forEach(function(dropdownTrigger) {
                        var dropdownBtn = dropdownTrigger.querySelector(".dropdown-btn");
                        var dropdownContent = dropdownTrigger.querySelector(".dropdown-content");

                        dropdownBtn.addEventListener("click", function(event) {
                            event
                                .stopPropagation(); // Evita que el evento de clic se propague al contenedor externo
                            dropdownContent.classList.toggle("hidden");
                        });

                        // Para cerrar el dropdown si se hace clic fuera de él
                        window.addEventListener("click", function(event) {
                            if (!dropdownContent.contains(event.target) && !dropdownBtn.contains(event
                                    .target)) {
                                dropdownContent.classList.add("hidden");
                            }
                        });
                    });
                });

                document.getElementById('role').addEventListener('change', function() {
                    if (this.value === '') {
                        this.form.reset();
                    } else {
                        this.form.submit();
                    }
                });
            </script>
        @endsection
