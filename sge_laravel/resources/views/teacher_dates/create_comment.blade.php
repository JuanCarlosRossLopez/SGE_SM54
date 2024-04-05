@extends('test.template')


@section('contenido')
    <div class="modalf h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-4xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Realizar comentario general</h3>
                <a href="/information_project" class="close-modalf bg-white rounded-full h-[1rem] flex items-center">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </a>
            </div>
            <div class="modal_conteiner">
                <!-- Aqui en esta parte ajusta el valor de h segun tus necesidades, si es muy grande el contenido recomiendo dejar como h-[85vh]-->
                <div class="modal-body h-fit">
                    <form action="{{ route('crear_comentario.store') }}" method="POST">
                        @csrf
                        <div class="flex flex-col items-center">
                            <div class="flex flex-col justify-start w-[800px] pb-2">
                                <label for="general_comment"
                                    class="conteiner_word_title flex flex-col items-center">Comentario general</label>
                                <textarea type="text" name="general_comment" id="general_comment" class="rounded h-auto"></textarea>
                            </div>
                            <div>
                                <label for="teacher_id"
                                    class="conteiner_word_title flex flex-col items-center">Asesor</label>
                                @if (Auth::user()->teachers)
                                <input type="text" name="teacher_id" id="teacher_id" class="rounded hidden" value="{{ Auth::user()->teachers->id }}">
                                @else
                                    No se encontró información del asesor para este usuario.
                                @endif
                            </div>
                            <div>
                                <label for="project_management_id"
                                    class="conteiner_word_title flex flex-col items-center">Proyecto</label>
                                <input type="text" name="project_management_id" id="project_management_id"
                                    class="rounded">
                            </div>
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded w-fit">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
