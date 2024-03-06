@extends('templates.template_admin')

@section('titulo', 'Usuarios')
@section('contenido')

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    </head>
    <div class="flex justify-center">
        <div class="w-3/4">
            <h1 class="text-black text-3xl mb-4 mt-4">Gestión de Usuarios</h1>
            <div class="flex justify-end mb-4">
                <div class="relative">
                    <input class="bg-slate-200 pl-10 py-2 rounded-lg text-lg outline-none w-64" placeholder="Buscar...">
                    <i class="bi bi-search absolute left-3 top-1/2 transform -translate-y-1/2"></i>
                </div>
                <a href="{{ url('estudiantes/create') }}"
                    class="text-white bg-emerald-600 rounded-lg py-2 px-4 inline-block ml-4">Agregar Usuario</a>
            </div>

            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-emerald-300">
                    <tr>
                        <th scope="col"
                            class="rounded-tl-lg bg-emerald-600 px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                            #</th>
                        <th scope="col"
                            class="bg-emerald-600 px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                            Nombre
                        </th>
                        <th scope="col"
                            class="bg-emerald-600 px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                            Apellidos
                        </th>
                        <th scope="col"
                            class="bg-emerald-600 px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                            Nombre de
                            Usuario</th>
                        <th scope="col"
                            class="bg-emerald-600 px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                            Rol de
                            Usuario</th>
                        <th scope="col"
                            class="rounded-tr-lg bg-emerald-600 px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap space-x-2">
                            <i class="bi bi-eye-fill"></i>
                            <i class="bi bi-pencil-square" style="color: blue;"></i>
                            <i class="bi bi-trash" style="color: red;"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
