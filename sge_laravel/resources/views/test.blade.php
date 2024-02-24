@extends('welcome')

@section('titulo')
    Ferrecun nunca muere
@endsection

@section('contenido')
    <div class="flex justify-left">
        <div class="w-full m-4">
            <h2 class="sombra_letras text-2xl text-[#000000] font-bold mb-4 uppercase">Inicio - test</h2>

            <div class="flex justify-between mb-4">
                <button class="bg-green-700 h-fit text-white p-2 rounded-md flex flex-row items-center gap-2 shadow-md">
                    <h3 class="text-lg font-bold">Crear usuarios</h3>
                    <i class="fa-solid fa-user-plus"></i>
                </button>
                <div class="flex flex-row items-center h-fit bg-white border p-2 rounded-lg shadow-md">
                    <input class="w-[25rem] h-6 text-base font-normal pl-2 border-white" type="text"
                        placeholder="Buscar por matricula/nomina" />
                    <button class="w-fit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>

            <div class="overflow-x-auto shadow-md">
                <table class="table-auto w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-[#434343] text-[#b9b9b9] uppercase">
                            <th class="text-center w-fit">#</th>
                            <th class="text-center w-fit">Nombre usuario</th>
                            <th class="text-center w-fit">Nomina/Matrícula</th>
                            <th class="text-center w-fit">Email</th>
                            <th class="text-center w-fit">Rol asignado</th>
                            <th class="text-center w-fit">Opciones</th>
                        </tr>
                    </thead>
                    <tbody class=" transition-colors bg-white">
                        <tr class="hover:bg-[#cacaca]">
                            <td class="border text-center">1</td>
                            <td class="border text-center">Marco H.</td>
                            <td class="border text-center">22786654</td>
                            <td class="border text-center">marco.hau@test.com</td>
                            <td class="border text-center">docente</td>
                            <td class="border py-2 text-center flex flex-row items-center gap-2 justify-center">
                                editar ver eliminar
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
