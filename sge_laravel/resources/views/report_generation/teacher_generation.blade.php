@extends('templates.template_students')
@section('titulo')
    visualizar
@endsection
@section('contenido')
    <div class="">
        <div class=" pt-[20px]">
            <h1 class="text-[#2f4050] text-2xl font-bold p-[10px]">GENERACIÓN DE INFORMES</h1>
            <h3 class="text-[#2f4050] text-lg font-bold p-[10px]">Ingresa al apartado para enviar el documento al asesorado
            </h3>
        </div>
        <div class="flex flex-raw justify-center py-12">
            <div
                class="w-[300px] h-[250px] rounded-[10px] bg-[#F6F6F6] mt-[20px] p-[10px] mr-[20px] flex flex-col items-center border-2 border-[#01A080]">
                <h3 class="text-black font-bold mt-[100px] text-center">Cédula de Anteproyecto</h3>
                <button type="button" 
                    class="bg-[#01A080] text-white cursor-pointer text-center rounded-[5px] mt-[70px] border-none hover:bg-green-400 p-[8px]">
                    <a href="{{route('envio')}}">Visualizar</a>
                </button>
            </div>
            <div
                class="w-[300px] h-[250px] rounded-[10px] bg-[#F6F6F6] mt-[20px] p-[10px] mr-[20px] flex flex-col items-center border-2 border-[#01A080]">
                <h3 class="text-black mt-[100px] text-center font-bold">Carta de Autorización Digitalización</h3>
                <button type="button"
                    class="bg-[#01A080] text-white cursor-pointer text-center rounded-[5px] mt-[70px] border-none hover:bg-green-400 p-[8px]">
                    <a href="{{route('envio')}}">Visualizar</a>
                </button>
            </div>
            <div
                class="w-[300px] h-[250px] rounded-[10px] bg-[#F6F6F6] mt-[20px] p-[10px] mr-[20px] flex flex-col items-center border-2 border-[#01A080]">
                <h3 class=" text-black mt-[100px] font-bold text-center">Carta de Aprobación de Memoria</h3>
                <button type="submit"
                    class="bg-[#01A080] text-white cursor-pointer text-center rounded-[5px] mt-[70px] border-none hover:bg-green-400 p-[8px]">
                    <a href="{{route('envio')}}">Visualizar</a>
                </button>
            </div>
        </div>
    </div>
@endsection
