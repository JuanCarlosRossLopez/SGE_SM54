@extends('templates.template_admin')
@section('titulo')
    Registro
@endsection
@section('contenido')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .info-container {
            display: flex;
            flex-direction: column;
            padding: 20px;
            background-color: #f7f7f7;
            border-radius: 8px;
            margin-top: 20px;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .info-label {
            font-weight: bold;
            font-size: 16px;
            margin-right: 10px;
        }

        .info-value {
            font-size: 14px;
        }
    </style>
    <button class="show-modal flex justify-center items-center"> Agregar </button>
    <div class="modal-wrapper">
        <div class="modal hidden fixed top-0 left-0 w-full h-[500px] overflow-hidden flex justify-center items-center bg-opacity-500">
            <div class="bg-green-500 w-[400px] rounded shadow-lg max-w-2xl ">
                <div class="border-b px-4 py-2 flex justify-between items-center">
                    <h3 class="font-semibold text-lg justify-center items-center text-white text-center"></h3>
                    <button class="close-modal bg-white rounded-full">
                        <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                    </button>
                </div>
                <div class="bg-white p-2">
                    <div class="modal-body mb-0 overflow-y-auto h-[400px]">
                        <div class="container mx-auto px-4 py-8">
                            <div class="mb-4">
                                <label for="photo" class="text-gray-700 block mb-2">Fotografía:</label>
                                <input type="file" name="photo" id="photo" accept="image/*" class="form-control w-full border rounded-lg py-2 px-4">
                            </div>
                            <div id="photo-display"></div>
                                <div class="flex">
                                    <div class="mr-4">
                                        <span class="font-semibold mb-1">Nombre:</span>
                                        <span class="">Soto</span>
                                    </div>
                                </div>

                                    <div class="flex">

                                    <div>
                                        <span class="font-semibold mr-1">Matrícula:</span>
                                        <span class="">22393452</span>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const modal = document.querySelector('.modal');
        const showModal = document.querySelector('.show-modal');
        const closeModal = document.querySelectorAll('.close-modal');
        const addStudentBtn = document.querySelector('.add-student');
        const photoInput = document.getElementById('photo');
        const photoDisplay = document.getElementById('photo-display');

        showModal.addEventListener('click', function() {
            modal.classList.remove('hidden');
        });

        closeModal.forEach(close => {
            close.addEventListener('click', function() {
                modal.classList.add('hidden');
            });
        });

        addStudentBtn.addEventListener('click', function() {
            const form = document.getElementById('studentForm');
            const formData = new FormData(form);

            const photoFile = formData.get('photo');
            if (photoFile) {
                const photoURL = URL.createObjectURL(photoFile);
                photoDisplay.innerHTML = `<img src="${photoURL}" alt="Fotografía" class="w-full h-auto">`;
            }

            alert('Alumno Agregado correctamente');

            form.reset();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
@endsection
