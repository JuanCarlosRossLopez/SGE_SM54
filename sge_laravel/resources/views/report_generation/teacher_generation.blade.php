@extends('templates.template_teacher')
@section('title')
    visualizar
@endsection
@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <label>Generación de informes</label>
            <label>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                </svg>
            </label>
        </div>
        <div class="bg-[#E9E9E9] min-h-screen rounded-xl ">
            <div class="flex flex-raw ml-[100px] py-12">
                <div class="w-[260px] h-[250px] rounded-[20px] bg-[#F6F6F6] mt-[20px] p-[10px] mr-[20px] flex flex-col">
                    <label>
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 text-[#F6F6F6] relative ml-[20px] mt-[10px]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg> --}}
                    </label>
                    <h3 class="text-[#01A080] font-bold mt-[20px] text-2xl text-center">Cédula de Anteproyecto</h3>
                    <div class="">
                        <button type="button"
                            class="bg-[#01A080] text-[#F6F6F6] font-bold cursor-pointer text-center rounded-[5px] mt-[50px] border-none hover:bg-[#DFDFDF] p-[8px] ml-20">
                            <a href="{{ route('envio') }}">Generar</a>
                        </button>
                    </div>
                </div>
                <div class="w-[260px] h-[250px] rounded-[20px] bg-[#F6F6F6] mt-[20px] p-[10px] mr-[20px] flex flex-col">
                    <label>
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 text-white sticky ml-[20px] mt-[10px]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg> --}}
                    </label>
                    <h3 class="text-[#01A080] font-bold mt-[20px] text-2xl text-center">Carta de Autorización Digitalización
                    </h3>
                    <div class="">
                        <button type="button"
                            class="bg-[#01A080] text-[#F6F6F6] font-bold cursor-pointer text-center rounded-[5px] mt-[20px] border-none hover:bg-[#DFDFDF] p-[8px] ml-20">
                            <a href="{{ route('envio') }}">Generar</a>
                        </button>
                    </div>
                </div>
                <div class="w-[260px] h-[250px] rounded-[20px] bg-[#F6F6F6] mt-[20px] p-[10px] mr-[10px] flex flex-col">
                    <label>
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 text-[#F6F6F6] relative ml-[20px] mt-[10px]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg> --}}
                    </label>
                    <h3 class="text-[#01A080] font-bold mt-[20px] text-2xl text-center">Carta de Aprobación Memoria</h3>
                    <div class="">
                        <button type="button"
                            class="bg-[#01A080] text-[#F6F6F6] font-bold cursor-pointer text-center rounded-[5px] mt-[50px] border-none hover:bg-[#DFDFDF] p-[8px] ml-20">
                            <a href="{{ route('envio') }}">Generar</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
