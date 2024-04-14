<div id="edit{{ $teachers->id }}" class="modal-edit-asesor  h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <form method="POST" action="{{ url('maestros', $teachers->id) }}">
        @method('PUT')
        @csrf
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Editar al Asesor</h3>
                <button class="close-modal bg-white rounded-full">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2">
                <div class="modal-body flex-col gap-4 mb-0 overflow-y-auto flex items-center justify-center p-10">
                    <div class="flex flex-col items-center justify-center">
                        <div class="flex items-center justify-between w-full mb-4">
                            <h1 class="text-xl font-bold">Editando al asesor</h1>
                        </div>
                        <form action="{{ route('maestros.update', $teachers->id) }}" method="POST" class="flex flex-col gap-4">
                            @csrf
                            @method('PUT')
                            <div class="flex gap-4">
                                <div class="flex flex-col gap-4">

                                    <input type="text" value="{{$teachers->name_teacher}}" name="name_teacher" id="name_teacher" placeholder="Nombre del asesor" class="rounded-md border border-gray-300 p-2">

                                    <select name="id_user" id="" class="rounded-md border border-gray-300 p-2">
                                        <option value="{{ $teachers->user->id}}" selected>{{ $teachers->user->name}}</option>
                                        @php
                                        $asesorEncontrado = false;
                                        @endphp
                                        @foreach ($users as $user)
                                        @if ($user->hasRole('Asesor'))
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @php
                                        $asesorEncontrado = true;
                                        @endphp
                                        @endif
                                        @endforeach
                                        @if (!$asesorEncontrado)
                                        <option value="" disabled>No hay usuarios asesores</option>
                                        @endif
                                    </select>

                                </div>
                                <div class="flex flex-col gap-4">
                                    <input type="number" value="{{$teachers->payroll}}" name="payroll" id="payroll" placeholder="Número de nómina del asesor" class="rounded-md border border-gray-300 p-2">

                                    <select name="division_id" id="division_id" class="rounded-md border border-gray-300 p-2">
                                        <option value="{{$teachers->division_id}}" selected>{{$teachers->division ? $teachers->division->division_name : 'Sin división'}}</option>

                                        @foreach ($division as $divisions)
                                        <option value="{{$divisions->id}}">{{$divisions->division_name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <!-- Puedes agregar más campos aquí según sea necesario -->
                            <div class="flex justify-end mt-4">
                                <button type="submit" class="bg-[#01A080] text-white rounded p-2">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>