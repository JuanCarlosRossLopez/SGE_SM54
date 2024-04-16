<div id="edit{{ $user->id }}" class="modal-edit-coordination  h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <form method="POST" action="{{ url('coordinacion', $user->coordinators->id) }}">
        @method('PUT')
        @csrf

        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Editar al Coordinador</h3>
                <button class="close-modal bg-white rounded-full">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2">
                <div class="modal-body flex-col gap-4 mb-0 overflow-y-auto flex items-center justify-center p-10">
                    <div class="flex flex-col items-center justify-center">
                        <div class="flex items-center justify-between w-full mb-4">
                            <h1 class="text-xl font-bold">Editando al coordinacion</h1>
                        </div>
                        <form action="{{ route('coordinacion.update', $user->coordinators->id) }}" method="POST" class="flex flex-col gap-4">
                            @csrf
                            @method('PUT')
                            <div class="flex gap-4">
                                <div class="flex flex-col gap-4">

                                    <input type="email" value="{{$user->email}}" name="email" id="email" placeholder="Correo electrónico" class="rounded-md border border-gray-300 p-2">
                                    @error('email')
                                    <p class="text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                    <input type="password" name="password" id="password" placeholder="Contraseña" class="rounded-md border border-gray-300 p-2" value="{{$user->password}}">
                                    @error('password')
                                    <p class="text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                    <input type="text" value="{{$user->coordinators->coordinator_name}}" name="coordinator_name" id="coordinator_name" placeholder="Nombre del coordinador" class="rounded-md border border-gray-300 p-2">
                                    @error('coordinator_name')
                                    <p class="text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="flex flex-col gap-4">
                                    <input type="number" value="{{$user->coordinators->payroll}}" name="payroll" id="payroll" placeholder="Número de nómina del coordinador" class="rounded-md border border-gray-300 p-2">
                                    @error('payroll')
                                    <p class="text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                    <script>
                                        function maxLengthCheck(object) {
                                            if (object.value.length > 11)
                                                object.value = object.value.slice(0, 11);
                                        }
                                    </script>
                                    <select name="division_id" id="division_id" class="rounded-md border border-gray-300 p-2">
                                        <option value="{{$user->coordinators->division_id}}" selected>{{$user->coordinators->division ? $user->coordinators->division->division_name : 'Sin división'}}</option>

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