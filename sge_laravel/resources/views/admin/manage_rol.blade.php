@extends('test.test_template')

@section('title')
Historial de memorias
@endsection
@section('contenido')

<div class="min-h-screen ">


    <div class="back_conteiner ">
        <div class="top_conteiner">
            <div class="w-[1600px]">
                <label>Historial de memorias</label>
                <label>
                    <!-- Este svg es el icono -->
                    <i class="fa-solid fa-bars-progress"></i>
                </label>
            </div>

        </div>
        <div class="content_conteiner  h-fit">
            <div class="flex flex-row items-center justify-start gap-2">
                <label class="conteiner_word_title items-center">Tabla de memorias</label>
                <label id="infoButton" class="cursor-pointer mt-[0.8rem]" data-tooltip="Aquí usted puede realizar amonestaciones, explicando el por qué de la misma.">
                    <i class="fas fa-exclamation-circle text-[#01A080] text-xl "></i>
                </label>
            </div>
            <div class="inside_content_conteiner">
                <div class="search_conteiner">
                    <button class="search_button">
                        <i class="fas fa-search text-gray-500"></i>
                    </button>
                    <input type="text" class="search_input" placeholder="Buscar..." />
                </div>
                <div class="search_button_conteiner">
                    <!-- En caso que necesites el boton dejalo, sino aplica hidden en el class -->
                    <button class="standar_button hidden"><span class="inside_button ">Si lo necesitas</span></button>
                </div>
            </div>

            <div class="table_conteiner">
                <table class="standar_table">
                    <thead class="standar_thead">
                        <tr>
                            <th class="theader">Nombre Rol</th>
                            <th class="theader">PermisoS</th>
                            <th class="theader">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                    @foreach($roles as $role)

                        <tr class="trow">
                            <td class="trowc">

                                {{ $role->name }}

                            </td>
                            <td class="trowc">
                            @foreach($role->permissions as $permission)

                                {{ $permission->name }}
                                @endforeach

                            </td>
                            <td class="trowc">
                                <div>
                                    Ver
                                </div>

                                <button class="show-modal-rol" data-target="#edit{{$role->id}}">
                                    Editar
                                    </button>
                                    
                                <div>
                                    Eliminar
                                </div>


                            </td>
                        </tr>
                        @include('admin.view-modal-rol')
                        @endforeach

                        <tr class="trow">
                       
                            <td class="trowc">
                                <div>
                              
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Esto solo es una paginación para entregar, en laravel ya hicimos una paginacion chida asi que ignoren esto-->
            <div class="text-gray-700 w-full flex flex-row justify-between mt-1">
                <div>
                    <button class="border-1 border-gray-500 bg-gray-300 px-2 rounded-l-md focus:outline-none focus:ring focus:border-[#01A080]">
                        < </button>
                            <button class="border-1 border-gray-500 bg-gray-300 px-2 focus:outline-none focus:ring focus:border-[#01A080]">
                                1
                            </button>
                            <button class="border-1 border-gray-500 bg-gray-300 px-2 focus:outline-none focus:ring focus:border-[#01A080]">
                                2
                            </button>
                            <button class="border-1 border-gray-500 bg-gray-300 px-2 focus:outline-none focus:ring focus:border-[#01A080]">
                                3
                            </button>
                            <button class="border-1 border-gray-500 bg-gray-300 px-2 rounded-r-md focus:outline-none focus:ring focus:border-[#01A080]">
                                >
                            </button>
                </div>
                <div>
                    <span>Cantidad de registros :</span>
                    <span id="rowCount"></span>
                </div>
            </div>
        </div>
    </div>
</div>


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

            // showModal.addEventListener('click', function() {    
            //     modal_permision.classList.remove('hidden')
            // })
            

            showModalRoles.forEach(button =>{
                button.addEventListener('click',(e)=>{
                    e.preventDefault()
                    console.log("click")
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>
@endsection