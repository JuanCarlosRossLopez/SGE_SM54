<div  id="add" class="modal2 h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <div class="bg-[#01A080] w-max rounded shadow-lg max-w-4xl">
        <div class="border-b px-4 py-2 flex justify-between items-center text-center">
            <h3 class="font-semibold text-lg ml-60 text-white ">Agregar libro</h3>
            <button class="close-modal bg-white rounded-full h-[1rem] flex items-center">
                <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
            </button>
        </div>
        
        <div class="bg-white p-10">
            <!-- Aqui en esta parte ajusta el valor de h segun tus necesidades, si es muy grande el contenido recomiendo dejar como h-[85vh]-->
            <div class=" max-h-full h-auto">
                <form action={{route('libros.store')}} method="POST" class="w-full max-w-lg">
                    @csrf
                    <div class="flex flex-col flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-first-name">
                                Nombre del libro
                            </label>
                            <input
                                class="appearance-none block w-full h-2 bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-first-name" type="text" name="book_name" placeholder="Jane">
                                @error('book_name')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Comprobante de pago
                            </label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none " name="voucher" type="text">
                                @error('book_front_page')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Portada
                            </label>
                            <input
                                class="appearance-none block w-full h-2 bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" name="book_front_page" type="text" placeholder="Doe">
                                @error('book_front_page')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-password">
                                Descripción
                            </label>
                            <textarea
                                class="appearance-none w-full h-40  bg-gray-200 text-gray-700 border border-gray-200 rounded px-4 text-start  focus:outline-none focus:bg-white focus:border-gray-500"
                                name="book_description"></textarea>
                                @error('book_description')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-city">
                                Autor del libro
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-city" name="author" type="text" placeholder="Carlos">
                                @error('author')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-city">
                                Precio
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-city"  name="price" type="text" placeholder="$$$$">
                                @error('price')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            
                            <input
                                class=" hidden "
                                 name="student_id" type="text" value="{{ Auth::user()->student ? Auth::user()->student->id : 'Sin estudiante asociado' }}">
                            
                                
                        </div>
                
                    </div>
                    <br>
                    <button type="submit" class="bg-[#05af9b] pl-[0.5rem] pr-[0.5rem]  border-[#05af9b] item-center rounded-lg w-full  text-white px-2  py-1 hover:bg-green-950">Añadir libro</button>
                </form>
            
            </div>
        </div>
    </div>
</div>