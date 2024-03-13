@extends('test.template')
@section('titulo')
    Gestión de roles
@endsection
@section('contenido')


<style>
    .comment-icon {
        position: relative;
        width: 30px;
        height: 22px;
        background-color: #007bff;
        border-radius: 50%;
    }

    .comment-icon::after {
        content: '';
        position: absolute;
        bottom: -5px;
        right: 4px;
        width: 20px;
        height: 15px;
        border-style: solid;
        border-width: 0 8px 8px 0;
        border-color: transparent #007bff transparent transparent;
    }
</style>

@section('contenido')
    <div class="mr-5">
        <div class="w-full pr-4 pl-12 items-center">
            <div class="bg-gray-100 text-3xl rounded border mt-2 p-2 flex flex-row items-center gap-2">
                <div>
                    <label class="font-sans">Gestión de roles</label>
                    <label>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                        </svg>
                    </label>
                </div>

            </div>

            <div class="bg-gray-100 rounded border mt-1 p-2">

                <div class="w-full flex flex-row justify-between mt-2 ">
                    <div class="flex">
                        <button class="border border-gray-500 bg-gray-300 px-4 py-1 rounded-l-md focus:outline-none focus:ring focus:border-[#01A080]">
                            <i class="fas fa-search text-gray-500"></i>
                        </button>
                        <input type="text" class="border border-gray-300 w-[30rem] px-2 py-1 rounded-r-md  "
                            placeholder="Buscar..." />

                    </div>
                </div>
                <table class="w-full mt-2 border">
                    <thead class="bg-[#01A080] text-center text-white">
                        <tr>
                            <th class="px-4 py-2 border-b">id</th>
                            <th class="px-4 py-2 border-b">Alumnos</th>
                            <th class="px-4 py-2 border-b">Proyectos</th>
                            <th class="px-4 py-2 border-b">Proyectos</th>
                            <th class="px-4 py-2 border-b">Proyectos</th>
                            <th class="px-4 py-2 border-b">Proyectos</th>
                            <th class="px-4 py-2 border-b">Proyectos</th>
                            <th class="px-4 py-2 border-b">Proyectos</th>
                            <th class="py-2 border-b">Opcion</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="bg-red-white hover:bg-[#5e5f5f46]">
                            @foreach ($users as $user)
                            <td class="px-4 py-2 border-b">{{$user->id}}</td>
                            <td class="px-4 border-b">{{$user-> name}}</td>
                            <td class="px-4 border-b">Comercio web e-commer</td>
                            <td class="px-4 border-b">Lorum</td>
                            <td class="px-4 border-b">Lorum</td>
                            <td class="px-4 border-b">Lorum</td>
                            <td class="px-4 border-b">Lorum</td>
                            <td class="px-4 border-b">Lorum</td>
                            <td class="w-full  flex flex-row items-center justify-center py-2 gap-2 border-b">
                                <button class="show-modal-rol" type="button" data-target="#add{{$user->id}}">
                                    Rol
                                </button>
                                <button class="show-modal">
                                   Permiso
                                </button>
                                <button>
                                    <i class="fi fi-sr-journal-alt"></i>
                                </button>

                            </td>
                        </tr>
                        @include('admin.view-modal-rol')

                        @endforeach
                    </tbody>
                </table>
                <div class="text-gray-700">Total de registros: <span id="rowCount">2</span></div>
            </div>
        </div>
                <!-- modal roles -->

        <!-- Modal -->
     


        <script>
            //Lo hizo roto, es un contador
            const tableBody = document.querySelector('tbody');
            const rowCount = tableBody.querySelectorAll('tr').length;
            document.getElementById('rowCount').textContent = rowCount;
            const modal_permision = document.querySelector('.modal-permision');
            const modal_roles = document.querySelector('.modal-roles');
            //Funcionamiento de modal
            const showModal = document.querySelector('.show-modal');
            const showModalRoles = document.querySelectorAll('.show-modal-rol');


            const closeModal = document.querySelectorAll('.close-modal');

            showModal.addEventListener('click', function() {    
                modal_permision.classList.remove('hidden')
            })
            

            showModalRoles.forEach(button =>{
                button.addEventListener('click',(e)=>{
                    e.preventDefault()
                    const modalId =button.dataset.target
                    const modal = document.querySelector(modalId)
                    modal.classList.remove('hidden')
                    console.log(modalId)

                })
            })

         closeModal.forEach(closeModal=>{
            closeModal.addEventListener('click',(e)=>{
                e.preventDefault();
                const modal = closeModal.closest('.modal-roles')
                modal.classList.add('hidden')
            })
         })
            
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
    </div>
    <h1 class="text-center">Sin rol</h1>
    @role('admin')
    <h1 class="text-center">Admin</h1>
    @endrole
    @role('teacher')
    <h1 class="text-center">Maestro</h1>
    @endrole
    @role('student')
    <h1 class="text-center">Alumno</h1>
    @endrole
    @role('coordination')
    <h1 class="text-center">Coordinación</h1>
    @endrole
    @role('president')
    <h1 class="text-center">Presidencia</h1>
    @endrole

   
@endsection
