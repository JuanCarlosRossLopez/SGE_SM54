    <div
        id="edit{{ $division->id }}" class="modal-edit-division h-screen w-full fixed left-0 top-0 flex justify-center hidden items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-fit rounded shadow-lg max-w-4xl">
            <div class="border-b px-4 py-2 flex justify-between">
                <h3 class="font-semibold text-lg text-white">Editar división</h3>
                <button class="close-modal bg-white rounded-full h-[1rem] flex items-center">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="modal_conteiner">
                <!-- Aqui en esta parte ajusta el valor de h segun tus necesidades, si es muy grande el contenido recomiendo dejar como h-[85vh]-->
                <div class="modal-body h-fit">
                    <form action="{{ route('division.update', $division->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col items-center">
                            <div class="flex flex-col items-center w-full pb-2">
                                <label for="division_name" class="conteiner_word_title flex flex-col items-center">
                                    Nombre de la division
                                </label>
                                <input type="text" name="division_name" value="{{$division->division_name}}" id="division_name" class="w-[20rem]">
                                @error('division_name')
                                    <span class="text-red-500 w-full">{{ $message }}</span>
                                    <hr class="border-2 w-full h-0 border-[#00000059]" />
                                @enderror
                            </div>
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded w-fit mt-4 ">
                                Editar división
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

