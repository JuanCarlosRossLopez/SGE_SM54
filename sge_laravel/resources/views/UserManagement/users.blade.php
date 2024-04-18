@extends('test.final_template')

@section('title', 'Gestión de usuarios')
@section('contenido')

    <div class="back_conteiner">
        <div class="conteiner_cards justify-center flex flex-row ">
            <div class="conteiner_cards1 flex flex-col w-full m-4">
                @if (session()->has('notification'))
                    <div id="notification"
                        class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 w-full rounded relative">
                        {{ session('notification') }}
                    </div>
                @elseif (session()->has('error'))
                    <div id="errorNotification"
                        class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 w-full rounded relative">
                        {{ session('error') }}

                    </div>
                @else
                    @if ($errors->any())
                        <div id="formErrors"
                            class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 w-full rounded relative">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                @endif

                <script>
                    setTimeout(function() {
                        const notification = document.getElementById('notification')

                        if (notification) {
                            notification.style.display = 'none';
                        }

                        const error_notification = document.getElementById('errorNotification')
                        if (error_notification) {
                            error_notification.style.display = 'none';
                        }
                        const form_error = document.getElementById('formErrors')
                        if (form_error) {
                            form_error.style.display = 'none';
                        }
                    }, 5000);
                </script>

                <!-- Mapeo de anteproyectos -->
                <div class="content_conteiner w-full h-fit p-4">
                    <div class="w-full ">
                        <div class="">
                            <label class="w-full font-poppins font-semibold text-2xl text-[#333333] text-start pb-3">Gestión
                                de todos los usuarios</label>
                            <div class="flex flex-row items-center justify-start gap-2 ">

                                <form action="{{ route('users.filterByRole') }}" method="GET"
                                    class="bg-[#F1F0F0] border-2 rounded m-2 justify-center flex flex-row items-center gap-2">
                                    <div class="flex flex-row w-fit  justify-start p-1 items-center">
                                        <div class="flex items-center gap-2">
                                            <label for="role"
                                                class="w-full text-start font-sans font-semibold text-[#545454] text-lg">Filtrar
                                                por rol</label>
                                            <select name="role" id="role"
                                                class=" text-base text-[#000000] border-1 border-[#0000002b] focus:ring-[#0000004e] focus:border-[#0000004e] rounded bg-white">
                                                <option disabled selected class="">Selecciona el rol</option>
                                                <option value="Todos">Todos</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Asesor">Asesor</option>
                                                <option value="Estudiante">Estudiante</option>
                                                <option value="Presidente">Presidente</option>
                                                <option value="Cordinacion">Cordinacion</option>
                                            </select>

                                        </div>

                                    </div>
                                </form>

                                <div
                                    class="w-fit p-1 border-2 bg-[#F1F0F0] text-center flex flex-row items-center rounded gap-2">
                                    <label
                                        class="text-start font-sans w-fit font-semibold text-[#545454] text-lg flex flex-row gap-2 justify-center items-center">Crear
                                        un usuario </label>
                                    <div class="relative dropdown-trigger gap-2">
                                        <button class="dropdown-btn button_add_green">
                                            <i class="fa-solid fa-circle-plus"></i>
                                        </button>
                                        <div
                                            class="hidden absolute bg-white border border-gray-200 mt-2  py-2 rounded w-48 z-10 dropdown-content">

                                            <a data-modal="studentAdd"
                                                class="show-modal block font-sans w-full text-center cursor-pointer p-2 hover:bg-gray-200 font-normal text-[#545454] text-base">Estudiante</a>
                                            <a data-modal="teacherAdd"
                                                class="show-modal block font-sans w-full text-center cursor-pointer p-2 hover:bg-gray-200 font-normal text-[#545454] text-base">Asesor</a>

                                        </div>
                                    </div>

                                </div>
                                <!-- <button class="show-modal3 standar_button"><span class="inside_button">Agregar un
                                                                                                                    Usuario</span></button> -->
                                <div
                                    class=" w-fit p-1 border-2 bg-[#F1F0F0] text-center flex flex-row items-center rounded gap-2">
                                    <label
                                        class="text-start font-sans w-full font-semibold text-[#545454] text-lg flex flex-row gap-2 justify-center items-center">Crear
                                        usuarios forma masiva </label>
                                    <div class="relative dropdown-trigger gap-2">
                                        <button data-modal="UsersAdd"
                                            class="show-modal buttons_card_green w-fit  button_add_green">
                                            <i class="fa-solid fa-circle-plus"></i>
                                        </button>
                                    </div>
                                </div>







                                <div idModal="UsersAdd"
                                    class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
                                    <div class="bg-[#01A080] w-full rounded shadow-lg max-w-sm">
                                        <div class="border-b px-4 py-2 flex justify-between items-center">
                                            <h3 class="font-semibold text-lg text-white text-center flex-grow">Agregar
                                                usuarios de forma masiva
                                            </h3>
                                            <button class="close-modal bg-white rounded-full h-[1rem] flex items-center">
                                                <p class="text-2xl"><i class="fa-solid fa-circle-xmark"
                                                        style="color: #d50101;"></i>
                                                </p>
                                            </button>
                                        </div>

                                        <form class="bg-white rounded shadow-xl  px-20 py-14 items-center justify-center"
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

                                <div idModal="studentAdd"
                                    class="modal hidden h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50">
                                    <div class="bg-[#01A080] w-full rounded shadow-lg max-w-3xl">
                                        <div class="border-b px-4 py-2 flex justify-between items-center">
                                            <h3 class="text-center items-center font-semibold text-lg text-white">Agregar
                                                Estudiante</h3>
                                            <button class="close-modal bg-white rounded-full">
                                                <p class="text-2xl"><i class="fa-solid fa-circle-xmark"
                                                        style="color: #d50101;"></i></p>
                                            </button>
                                        </div>
                                        <div class="bg-white w-full p-4">
                                            <div class="modal-body flex flex-col gap-4 items-center justify-center p-4 ">
                                                <h1 class="text-xl font-bold mb-4">Crear Estudiante</h1>
                                                <form action="{{ route('estudiantes.store') }}" method="POST"
                                                    class="w-full" id="studentForm">
                                                    @csrf
                                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                                                        <input type="email" name="email"
                                                            placeholder="Correo electrónico" class="rounded input-field">
                                                        <input type="password" name="password" placeholder="Contraseña"
                                                            class="rounded input-field">
                                                        <input type="text" name="student_name" id="student"
                                                            placeholder="Nombre del estudiante"
                                                            class="rounded-md border border-gray-300 p-2">
                                                        <div class="relative">
                                                            <input type="text" name="id_student" id="id_student"
                                                                placeholder="Matrícula"
                                                                class="rounded-md border border-gray-300 p-2">
                                                            <button type="button" id="searchStudentBtn"
                                                                class="absolute right-0 top-0 bottom-0 px-3">Buscar</button>
                                                        </div>
                                                    </div>

                                                    <div class="flex flex-col gap-4">
                                                        <label for="division_id"
                                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">División</label>
                                                        <select name="division_id" id="division_id"
                                                            class="rounded-md border border-gray-300 p-2">
                                                            <option value="">Selecciona una división</option>
                                                            @foreach ($Divisions as $division)
                                                                <option value="{{ $division->id }}">
                                                                    {{ $division->division_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('division_id')
                                                            <span class="text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="flex flex-col gap-4" id="careerContainer"
                                                        style="display: none;"> <!-- Contenedor de carrera -->
                                                        <label id="careerLabel"
                                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                            for="career_id">Carrera</label>
                                                        <select name="carrer_id" id="career_id"
                                                            class="rounded-md border border-gray-300 p-2">
                                                            <option value="">Selecciona una carrera</option>
                                                            @foreach ($careers as $career)
                                                                <option value="{{ $career->id }}">
                                                                    {{ $career->career_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="flex flex-col gap-4" id="groupContainer"
                                                        style="display: none;"> <!-- Contenedor de grupo -->
                                                        <label id="groupLabel"
                                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                            for="group_id">Grupo</label>
                                                        <select name="group_id" id="group_id"
                                                            class="rounded-md border border-gray-300 p-2">
                                                            <option value="">Selecciona un grupo</option>
                                                            <!-- Corregí la variable $Gruop a $groups -->
                                                        </select>
                                                        @error('group_id')
                                                            <span class="text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-center mt-4">
                                            <button type="submit"
                                                class="bg-[#01A080] text-white rounded p-2">Guardar</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var careerContainer = document.getElementById("careerContainer");
                                        var groupContainer = document.getElementById("groupContainer");

                                        // Ocultar campos de carrera y grupo al cargar la página
                                        careerContainer.style.display = "none";
                                        groupContainer.style.display = "none";

                                        // Agregar evento change al select de división
                                        document.getElementById("division_id").addEventListener("change", function() {
                                            var divisionId = this.value;

                                            // Mostrar campo de carrera si se selecciona una división
                                            if (divisionId) {
                                                careerContainer.style.display = "block";
                                            } else {
                                                careerContainer.style.display = "none";
                                                groupContainer.style.display = "none";
                                            }
                                        });

                                        // Agregar evento change al select de carrera
                                        document.getElementById("career_id").addEventListener("change", function() {
                                            var careerId = this.value;

                                            // Mostrar campo de grupo si se selecciona una carrera
                                            if (careerId) {
                                                // Realizar solicitud AJAX al servidor para obtener los grupos relacionados con la carrera seleccionada
                                                var xhr = new XMLHttpRequest();
                                                xhr.onreadystatechange = function() {
                                                    if (xhr.readyState === XMLHttpRequest.DONE) {
                                                        if (xhr.status === 200) {
                                                            // Actualizar el select de grupos con las opciones devueltas por el servidor
                                                            var groups = JSON.parse(xhr.responseText);
                                                            var groupSelect = document.getElementById("group_id");
                                                            groupSelect.innerHTML = "<option value=''>Selecciona un grupo</option>";
                                                            groups.forEach(function(group) {
                                                                groupSelect.innerHTML += "<option value='" + group.id +
                                                                    "'>" + group.group_name + "</option>";
                                                            });
                                                            // Mostrar campo de grupo
                                                            groupContainer.style.display = "block";
                                                        }
                                                    }
                                                };
                                                // Agregar el ID de la carrera a la URL de la solicitud AJAX
                                                xhr.open("GET", "/carreras/" + careerId + "/grupos", true);
                                                xhr.send();
                                            } else {
                                                groupContainer.style.display = "none";
                                            }
                                        });
                                    });
                                </script>




                            </div>
                        </div>

                        <div idModal="teacherAdd"
                            class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
                            <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
                                <div class="border-b px-4 py-2 flex justify-between items-center">
                                    <h3 class="font-semibold text-lg ml-60 text-white">Agregar Asesor</h3>
                                    <button class="close-modal bg-white rounded-full">
                                        <p class="text-2xl"><i class="fa-solid fa-circle-xmark"
                                                style="color: #d50101;"></i></p>
                                    </button>
                                </div>
                                <div class="bg-white p-2">
                                    <div
                                        class="modal-body flex-row gap-4 mb-0 overflow-y-auto flex items-center justify-center p-10">
                                        <div class="flex flex-col items-center justify-center">
                                            <h1 class="text-xl font-bold mb-4">Crear Asesor</h1>
                                            <form action="{{ route('maestros.store') }}" method="POST"
                                                class="flex flex-col gap-4">
                                                @csrf
                                                <div class="flex flex-col md:flex-row md:gap-4">
                                                    <div class="flex flex-col gap-4 md:w-1/2">
                                                        <label
                                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                            for="grid-last-name">Correo Electrónico</label>
                                                        <input type="email" name="email"
                                                            placeholder="Correo electrónico" class="rounded input-field">
                                                        @error('email')
                                                            <span class="text-red-500">{{ $message }}</span>
                                                        @enderror
                                                        <label
                                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                            for="grid-last-name">Contraseña</label>
                                                        <input type="password" name="password" placeholder="Contraseña"
                                                            class="rounded input-field">
                                                        @error('password')
                                                            <span class="text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="flex flex-col gap-4 md:w-1/2">
                                                        <label
                                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                            for="grid-last-name">Nombre del asesor</label>
                                                        <input type="text" name="teacher_name" id="teacher_name"
                                                            placeholder="Nombre del asesor"
                                                            class="flex-1 rounded-md border border-gray-300 p-2">
                                                        @error('teacher_name')
                                                            <span class="text-red-500">{{ $message }}</span>
                                                        @enderror
                                                        <label
                                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                            for="grid-last-name">Número de nómina</label>
                                                        <input type="number" name="payroll" id="payroll"
                                                            placeholder="Número de nómina"
                                                            class="flex-1 rounded-md border border-gray-300 p-2"
                                                            oninput="maxLengthCheck(this)">
                                                        @error('payroll')
                                                            <span class="text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="flex flex-col gap-4">
                                                    <label
                                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                        for="division_id">División</label>
                                                    <select name="division_id" id="division_id_teacher"
                                                        class="rounded-md border border-gray-300 p-2">
                                                        <option value="">Selecciona una división</option>
                                                        @foreach ($Divisions as $division)
                                                            <option value="{{ $division->id }}">
                                                                {{ $division->division_name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('division_id')
                                                        <span class="text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="flex flex-col gap-4" id="careerContainerTeacher"
                                                    style="display: none;">
                                                    <label
                                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                        for="career">Carrera</label>
                                                    <select name="careers_id" id="career"
                                                        class="rounded-md border border-gray-300 p-2">
                                                        <option value="">Selecciona una carrera</option>
                                                    </select>
                                                    @error('careers_id')
                                                        <span class="text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="flex justify-center">
                                                    <button type="submit"
                                                        class="bg-[#01A080] text-white rounded p-2">Guardar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                var careerContainerTeacher = document.getElementById("careerContainerTeacher");
                                var divisionSelect = document.getElementById("division_id_teacher");

                                careerContainerTeacher.style.display = "none";

                                document.getElementById("division_id_teacher").addEventListener("change", function() {
                                    var divisionId = this.value;

                                    if (divisionId) {
                                        careerContainerTeacher.style.display = "block";
                                    } else {
                                        careerContainerTeacher.style.display = "none";
                                    }
                                });

                                document.getElementById("division_id_teacher").addEventListener("change", function() {
                                    var divisionId = this.value;

                                    if (divisionId) {
                                        var xhr = new XMLHttpRequest();
                                        xhr.onreadystatechange = function() {
                                            if (xhr.readyState === XMLHttpRequest.DONE) {
                                                if (xhr.status === 200) {
                                                    var careers = JSON.parse(xhr.responseText);
                                                    var careerSelect = document.getElementById("career");
                                                    careerSelect.innerHTML =
                                                        "<option value=''>Selecciona una carrera</option>";
                                                    careers.forEach(function(career) {
                                                        careerSelect.innerHTML += "<option value='" + career.id +
                                                            "'>" + career.career_name + "</option>";
                                                    });
                                                }
                                            }
                                        };
                                        xhr.open("GET", "/divisiones/" + divisionId + "/carreras", true);
                                        xhr.send();
                                    } else {
                                        careerContainerTeacher.style.display = "none";
                                    }
                                });




                            })
                        </script>




                        <div class="table_conteiner">
                            <table class="standar_table">
                                <thead class="standar_thead">
                                    <tr>
                                        <th class="theader">
                                            #</th>
                                        <th class="theader">

                                            Matrícula/Nómina</th>
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
                                            <td class="trowc">
                                                @if ($user->student)
                                                {{ $user->student->id_student}}
                                                @elseif($user->teachers)
                                                    {{$user->teachers->payroll}}
                                                @endif
                                            </td>
                                            <td class="trowc"> {{ $user->email }} </td>
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
                                                <button class="show-permission"
                                                    data-target="#permissions{{ $user->id }}">
                                                    <div class="button_permission_green">
                                                        <i class="fa-solid fa-gear"></i>
                                                    </div>
                                                </button>
                                                @if ($user->teachers)
                                                    <button class="show-modal-asesor-view"
                                                        data-modal="#view{{ $user->id }}">
                                                        <div class="button_see_blue">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>
                                                    </button>
                                                    <button class="show-modal-edit-teacher"
                                                        data-target="#edit{{ $user->id }}">
                                                        <div class="button_edit_yellow">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </div>
                                                    </button>
                                                    <!-- Validar si el usuario es el mismo que el usuario autenticado -->
                                                    @if ($user->id == Auth::user()->id)
                                                        <button onclick="alert('No puedes borrar tu usuario')">
                                                            <div class="button_delete_red">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </div>
                                                        </button>
                                                    @else
                                                        <button class="show-modal-delete-teacher"
                                                            data-modal="#delete{{ $user->id }}">
                                                            <div class="button_delete_red">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </div>
                                                        </button>
                                                    @endif
                                                    <!-- Validar si el usuario es el mismo que el usuario autenticado -->
                                                @elseif($user->student)
                                                    <button class="show-modal-student-view"
                                                        data-modal="#view{{ $user->id }}">
                                                        <div class="button_see_blue">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>

                                                        <button class="show-modal-edit-student"
                                                            data-target="#edit{{ $user->id }}">
                                                            <div class="button_edit_yellow">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </div>
                                                        </button>

                                                        @if ($user->id == Auth::user()->id)
                                                            <button onclick="alert('No puedes borrar tu usuario')">
                                                                <div class="button_delete_red">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </div>
                                                            </button>
                                                        @else
                                                            <button class="show-modal-delete-student"
                                                                data-modal="#delete{{ $user->id }}">
                                                                <div class="button_delete_red">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </div>
                                                            </button>
                                                        @endif
                                                    @elseif($user->presidencies)
                                                        <button class="show-modal"
                                                            data-modal="view_presidencies{{ $user->id }}">
                                                            <div class="button_see_blue">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </div>
                                                        </button>

                                                        <button class="show-modal"
                                                            data-modal="edit_president{{ $user->id }}">
                                                            <div class="button_edit_yellow">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </div>
                                                        </button>
                                                        <!-- Validar si el usuario es el mismo que el usuario autenticado -->
                                                        @if ($user->id == Auth::user()->id)
                                                            <button onclick="alert('No puedes borrar tu usuario')">
                                                                <div class="button_delete_red">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </div>
                                                            </button>
                                                        @else
                                                            <button class="show-modal"
                                                                data-modal="delete_president{{ $user->id }}">
                                                                <div class="button_delete_red">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </div>
                                                            </button>
                                                        @endif
                                                        <!-- Validar si el usuario es el mismo que el usuario autenticado -->
                                                    @elseif($user->coordinators)
                                                        <button class="show-modal-edit-coordination"
                                                            data-target="#edit{{ $user->id }}">
                                                            <div class="button_edit_yellow">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </div>
                                                        </button>
                                                        @if ($user->id == Auth::user()->id)
                                                            <button onclick="alert('No puedes borrar tu usuario')">
                                                                <div class="button_delete_red">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </div>
                                                            </button>
                                                        @else
                                                            <button class="show-modal-delete-coordination"
                                                                data-modal="#delete{{ $user->id }}">
                                                                <div class="button_delete_red">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </div>
                                                            </button>
                                                        @endif
                                                        <button class="show-modal-coordination-view"
                                                            data-modal="#view{{ $user->id }}">
                                                            <div class="button_see_blue">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </div>
                                                        </button>
                                                        </p>
                                                    @else
                                                        <button class="show-modal"
                                                            data-modal="Show_User_{{ $user->id }}">
                                                            <div class="button_see_blue">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </div>
                                                        </button>
                                                        <button class="show-modal" data-modal="edit_{{ $user->id }}">
                                                            <div class="button_edit_yellow">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </div>
                                                        </button>

                                                        <button class="show-modal"
                                                            data-modal="delete_{{ $user->id }}">
                                                            <div class="button_delete_red">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </div>
                                                        </button>
                                                @endif
                                            </td>
                                        </tr>
                                        @if ($user->teachers)
                                            <p>
                                                @include('UserManagement.edit_modal_teacher')
                                                @include('UserManagement.delete_modal_teacher')
                                                @include('UserManagement.view_modal_teachers')
                                            </p>
                                        @elseif($user->student)
                                            <p>
                                                @include('UserManagement.view_modal_student')
                                                @include('UserManagement.edit_modal_student')
                                                @include('UserManagement.delete_modal_student')
                                            </p>
                                        @endif
                                        @include('UserManagement.UserPermission')
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="mt-1">{{ $users->links() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Seleccionar todos los campos de entrada con el nombre "payroll"
        var payrollInputs = document.querySelectorAll('input[name="payroll"]');

        // Iterar sobre cada campo de entrada y asignarle el evento oninput con la función maxLengthCheck
        payrollInputs.forEach(function(input) {
            input.oninput = function() {
                maxLengthCheck(this);
            };
        });

        // Función maxLengthCheck
        function maxLengthCheck(object) {
            if (object.value.length > 11)
                object.value = object.value.slice(0, 11);
        }
    </script>

    <script src="{!! asset('js/modals.js') !!}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const searchStudentBtn = document.getElementById('searchStudentBtn');
            searchStudentBtn.addEventListener('click', function() {
                const matricula = document.getElementById('id_student').value;
                if (matricula.trim() !== '') {
                    fetch(`http://localhost:3000/api/estudiantes/matricula/${matricula}`)
                        .then(response => {
                            if (response.ok) {
                                return response.json();
                            }
                            throw new Error('No se encontró ningún estudiante con esa matrícula');
                        })
                        .then(data => {
                            document.getElementById('student').value = data.student_name;
                            document.getElementById('grupo').value = data.gruop_id;
                            document.getElementById('division').value = data.division_id;
                        })
                        .catch(error => {
                            console.error(error.message);
                        });
                } else {
                    console.error('La matrícula no puede estar vacía');
                }
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const openAddStudentModalBtn = document.getElementById('openAddStudentModal');
            const addStudentModal = document.getElementById('studentAdd');

            openAddStudentModalBtn.addEventListener('click', function() {
                addStudentModal.classList.remove('hidden');
            });
        });
    </script>




    <script>
        // teacher modal

        const modal_edit_asesor = document.querySelectorAll('.modal-edit-asesor')
        const show_modal_edit_teacher = document.querySelectorAll('.show-modal-edit-teacher')
        show_modal_edit_teacher.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                const modalId = button.dataset.target
                const modal = document.querySelector(modalId)
                modal.classList.remove('hidden')
            })
        })


        const modal_delete_asesor = document.querySelectorAll('.modal-delete-asesor')
        const show_modal_delete_teacher = document.querySelectorAll('.show-modal-delete-teacher')
        show_modal_delete_teacher.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                const modalId = button.dataset.modal
                const modal = document.querySelector(modalId)
                modal.classList.remove('hidden')
            })
        })
    </script>

    <script>
        const modal_view_student = document.querySelectorAll('.modal-view-student')
        const show_modal_student_view = document.querySelectorAll('.show-modal-student-view')
        show_modal_student_view.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                const modalId = button.dataset.modal
                const modal = document.querySelector(modalId)
                modal.classList.remove('hidden')
            })
        })
    </script>

    <script>
        // Coordination modal

        const modal_edit_coordination = document.querySelectorAll('.modal-edit-coordination')
        const show_modal_edit_coordination = document.querySelectorAll('.show-modal-edit-coordination')
        show_modal_edit_coordination.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                const modalId = button.dataset.target
                const modal = document.querySelector(modalId)
                modal.classList.remove('hidden')
            })
        })

        const modal_delete_coordination = document.querySelectorAll('.modal-delete-coordination')
        const show_modal_delete_coordination = document.querySelectorAll('.show-modal-delete-coordination')
        show_modal_delete_coordination.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                const modalId = button.dataset.modal
                const modal = document.querySelector(modalId)
                modal.classList.remove('hidden')
            })
        })

        const modal_view_coordination = document.querySelectorAll('.modal-view-coordination')
        const show_modal_coordination_view = document.querySelectorAll('.show-modal-coordination-view')
        show_modal_coordination_view.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                const modalId = button.dataset.modal
                const modal = document.querySelector(modalId)
                modal.classList.remove('hidden')
            })
        })
    </script>

    <script>
        // student modal

        const modal_edit_student = document.querySelectorAll('.modal-edit-student')
        const show_modal_edit_student = document.querySelectorAll('.show-modal-edit-student')
        show_modal_edit_student.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                const modalId = button.dataset.target
                const modal = document.querySelector(modalId)
                modal.classList.remove('hidden')
            })
        })
    </script>

    <script>
        const modal_delete_student = document.querySelectorAll('.modal-delete-student')
        const show_modal_delete_student = document.querySelectorAll('.show-modal-delete-student')
        show_modal_delete_student.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                const modalId = button.dataset.modal
                const modal = document.querySelector(modalId)
                modal.classList.remove('hidden')
            })
        })
    </script>


    <script>
        const modal_view_asesor = document.querySelectorAll('.modal-view-asesor')
        const show_modal_asesor_view = document.querySelectorAll('.show-modal-asesor-view')
        show_modal_asesor_view.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                const modalId = button.dataset.modal
                const modal = document.querySelector(modalId)
                modal.classList.remove('hidden')
            })
        })
    </script>

    <script>
        const modal_view_permission = document.querySelectorAll('.modal-view-permission')
        const show_permission = document.querySelectorAll('.show-permission')

        show_permission.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                const modalId = button.dataset.target
                const modal = document.querySelector(modalId)
                modal.classList.remove('hidden')
            })
        })
    </script>





    <script>
        const close_modals = document.querySelectorAll('.close-modal')

        close_modals.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault()

                const modalAsesor = button.closest('.view-modal-asesor')
                const modalEditAsesor = button.closest('.modal-edit-asesor')
                const modalDeleteAsesor = button.closest('.modal-delete-asesor')
                const modalViewPermission = button.closest('.modal-permission')
                const modalViewStudent = button.closest('.view-modal-student')
                const modalEditStudent = button.closest('.modal-edit-student')
                const modalDeleteStudent = button.closest('.modal-delete-student')
                const modalViewCoordination = button.closest('.modal-view-coordination')
                const modalDeleteCoordination = button.closest('.modal-delete-coordination')
                const modalEditCoordination = button.closest('.modal-edit-coordination')

                if (modalAsesor) {
                    modalAsesor.classList.add('hidden')
                }


                if (modalEditAsesor) {
                    modalEditAsesor.classList.add('hidden')
                }


                if (modalDeleteAsesor) {
                    modalDeleteAsesor.classList.add('hidden')
                }

                if (modalViewPermission) {
                    modalViewPermission.classList.add('hidden')
                }

                if (modalViewStudent) {
                    modalViewStudent.classList.add('hidden')
                }

                if (modalEditStudent) {
                    modalEditStudent.classList.add('hidden')
                }

                if (modalDeleteStudent) {
                    modalDeleteStudent.classList.add('hidden')
                }
                if (modalViewCoordination) {
                    modalViewCoordination.classList.add('hidden')
                }
                if (modalDeleteCoordination) {
                    modalDeleteCoordination.classList.add('hidden')
                }
                if (modalEditCoordination) {
                    modalEditCoordination.classList.add('hidden')
                }




            })
        })
    </script>





@endsection
