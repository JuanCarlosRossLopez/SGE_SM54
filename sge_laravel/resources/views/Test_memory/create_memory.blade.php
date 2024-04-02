@extends('test.template')


@section('contenido')
    <div class="modalf h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-fit rounded shadow-lg max-w-4xl">
            <div class="border-b px-4 py-2 flex justify-between">
                <h3 class="font-semibold text-lg text-white">Subir memoria</h3>
                <a href="/dashboard_asesor" class="close-modalf bg-white rounded-full h-[1rem] flex items-center">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </a>
            </div>
            <div class="modal_conteiner">
                <!-- Aqui en esta parte ajusta el valor de h segun tus necesidades, si es muy grande el contenido recomiendo dejar como h-[85vh]-->
                <div class="modal-body h-fit">
                    <form action="{{ route('memory.store') }}" method="POST">
                        @csrf
                        <div class="flex flex-col items-center" >
                            <div class="flex flex-col items-center w-full pb-2">
                                <label for="memory_name" class="conteiner_word_title flex flex-col items-center">Titulo de memoria</label>
                                <input type="text" name="memory_name" id="memory_name" class="w-[20rem]">
                                
                                <label for="memorie_pdf" class="conteiner_word_title flex flex-col items-center pt-4">Subir archivo PDF</label>
                                <input type="file" name="memorie_pdf" id="memorie_pdf" class="form-control w-fit bg-[#979797] px-2" required>                                
                            </div>
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded w-fit mt-4">Subir</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
