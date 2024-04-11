<div id="edit{{ $user->id }}" class="modal-edit-asesor  h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <form method="POST" action="{{ url('maestros', $user->id) }}">
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
                        <form action="{{ route('maestros.update', $user->id) }}" method="POST" class="flex flex-col gap-4">
                            @csrf
                            @method('PUT')
                            <div class="flex gap-4">
                                <div class="flex flex-col gap-4">
                                    <input type="text" value="{{$user->name}}" name="name" id="name" placeholder="Nombre del usuario" class="rounded-md border border-gray-300 p-2" readonly>
                                    @error('name')
                                    <p class="text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                    <input type="email" value="{{$user->email}}" name="email" id="email" placeholder="Correo electrónico" class="rounded-md border border-gray-300 p-2">
                                    @error('email')
                                    <p class="text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                    <input type="password" name="password" id="password" placeholder="Contraseña" class="rounded-md border border-gray-300 p-2" value="{{$user->password}}">
                                    @error('password')
                                    <p class="text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                    <input type="text" value="{{$user->teachers->name_teacher}}" name="name_teacher" id="name_teacher" placeholder="Nombre del asesor" class="rounded-md border border-gray-300 p-2">
                                    @error('name_teacher')
                                    <p class="text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="flex flex-col gap-4">
                                    <input type="number" value="{{$user->teachers->payroll}}" name="payroll" id="payroll" placeholder="Número de nómina del asesor" class="rounded-md border border-gray-300 p-2">
                                    @error('nomina')
                                    <p class="text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                    <select name="division_id" id="division_id" class="rounded-md border border-gray-300 p-2">
                                        <option value="{{$user->teachers->division_id}}" selected>{{$user->teachers->division ? $user->teachers->division->division_name : 'Sin división'}}</option>

                                        @foreach ($Divisions as $divisions)
                                        <option value="{{$divisions->id}}">{{$divisions->division_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('division_id')
                                    <p class="text-red-500 text-xs">{{ $message }}</p>
                                    @enderror


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