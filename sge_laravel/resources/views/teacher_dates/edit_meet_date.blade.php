@extends('templates.template_teacher')

@section('title')
    Plantilla base
@endsection

@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <label>Editar Cita de Revisión</label>
        </div>


        <div class="flex justify-center">
            <div class="mt-6 w-[40rem]">
                <form class="bg-gray-200 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <h1 class="text-center text-3xl font-bold">Editar Cita</h1>
                    <div class="modal-body h-fit">
                        <h1 class="titles">Fecha de Revisión</h1>
                        <input type="date" class="border-2 rounded-md w-full px-2 py-1 mb-3"></input>
                        <h1 class="titles">Hora de Revisión</h1>
                        <input type="time" class="border-2 rounded-md w-full px-2 py-1 mb-3"></input>
                        <h1 class="titles">Motivo de Cita</h1>
                        <textarea placeholder="cometarios...." class="border-2 rounded-md w-full h-[7rem] px-2 py-1 mb-3"></textarea>
                        <div class="flex justify-center items-center w-full border-t pt-2">
                            <button class="bg-green-500 hover:bg-green-600 p-12 py-1 rounded text-white mr-10">Confirmar
                                Cita</button>
                            <button class="bg-red-500 hover:bg-red-600 p-12 py-1 rounded text-white ml-10">Cancelar</button>
                        </div>
                </form>
            </div>
        </div>




        <script>
            //Lo hizo roto, es un contador
            const tableBody = document.querySelector('tbody');
            const rowCount = tableBody.querySelectorAll('tr').length;
            document.getElementById('rowCount').textContent = rowCount;
            const modal = document.querySelector('.modal');
            const modalb = document.querySelector('.modalb');

            //Funcionamiento de modal

            const showModal = document.querySelector('.show-modal');
            const closeModal = document.querySelectorAll('.close-modal');

            showModal.addEventListener('click', function() {
                modal.classList.remove('hidden')
            })

            closeModal.forEach(close => {
                close.addEventListener('click', function() {
                    modal.classList.add('hidden')
                })
            })

            //
            const showModalb = document.querySelector('.show-modalb');
            const closeModalb = document.querySelectorAll('.close-modalb');

            showModalb.addEventListener('click', function() {
                modalb.classList.remove('hidden')
            })

            closeModalb.forEach(close => {
                close.addEventListener('click', function() {
                    modalb.classList.add('hidden')
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
@endsection
