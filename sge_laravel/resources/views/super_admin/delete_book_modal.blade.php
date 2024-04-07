<div id="delete{{$book->id}}" class="modalDelete h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <input type="hidden" name="role_id" > <!-- Incluimos el ID del rol en un campo oculto -->
    <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
        <div class="border-b px-4 py-2 flex justify-between items-center">
            <h3 class="font-semibold text-lg ml-60 text-white">Asignación de roles</h3>
            <button class="close-modal bg-white rounded-full">
                <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
            </button>
        </div>
        <div class="bg-white p-2">
            <div class="modal-body flex-col gap-4 mb-0 overflow-y-auto flex items-center justify-center P-10 ">
                <h1 class="poppins-light text-[20px]">
                    ¿Estas seguro de eliminar Este libro?
                </h1>
                <div class="flex flex-row gap-4 text-white ">
                    <form action="{{route('gestion_libros.destroy', $book->id)}} " method="POST">
                        @csrf
                        @method('delete')
                        <button class="bg-red-500 p-2 rounded-md">
                        Si
                    </button>
                    </form>
                    <button class="bg-blue-500 p-2 rounded-md close-modal">
                        No
                    </button>
                </div>
                


                <div>



                </div>
            </div>
        </div>
    </div>
</div>
</div>