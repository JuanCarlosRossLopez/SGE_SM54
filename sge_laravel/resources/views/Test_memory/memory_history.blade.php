<h1>MEMORIA</h1>

<table class="w-[70rem] mx-auto table-auto border-collapse border border-gray-800">
    <thead>
        <tr class="bg-gray-800 text-white text-sm">
            <th class="px-2 py-1">Nombre de memoria</th>
            <th class="px-2 py-1">Pdf de memoria</th>
            <th class="px-2 py-1">Estudiante</th>
        </tr>
    </thead>
    <tbody>
        {{$memories}}
        @foreach($memories as $memory)
            <tr class="hover:bg-gray-100 transition-colors">
                <td class="border px-2 py-2">{{$memory->id}}</td>
                <td class="border px-2 py-2">{{$memory->memory_name}}</td>
                <td class="border px-2 py-2">{{$memory->memorie_pdf}}</td>
                <td class="border px-2 py-2">{{$memory->student_id}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
