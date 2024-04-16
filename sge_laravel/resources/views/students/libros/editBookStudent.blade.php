<style>
    .image-container:hover .overlay {
    display: flex;
}
</style>
<div id="edit{{ $book->id }}"
    class="modalEdit h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <div class="bg-[#01A080] w-max rounded shadow-lg max-w-4xl">
        <div class="border-b px-4 py-2 flex justify-between items-center text-center">
            <h3 class="font-semibold text-lg ml-60 text-white ">Agregar libro</h3>
            <button class="close-modal bg-white rounded-full h-[1rem] flex items-center">
                <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
            </button>
        </div>

        <div class="bg-white w-[55rem] p-10">
            <!-- Aqui en esta parte ajusta el valor de h segun tus necesidades, si es muy grande el contenido recomiendo dejar como h-[85vh]-->
            <div class="  max-h-full h-[65vh]">
                <form action={{ route('libros.update',$book->id) }} method="POST" enctype="multipart/form-data"
                    class="w-full max-w-lg">
                    
                    
                    @csrf
                    @method('PUT')
                    <div class="modal-body w-[65rem] max-h-full h-auto flex">
                        <div class="w-full  flex  space-x-4">
                            <div class="image-container relative">
                                <label class="font-semibold" for="">Portada del libro</label>
                                <img id="book-image" src="{{ asset('books/' . $book->book_front_page) }}" alt="Portada del libro" class="book-image w-56 h-[22rem]" />
                                <div class="overlay hidden absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center" onclick="document.getElementById('book-image-input').click();">
                                    <p class="text-white text-lg">Editar imagen</p>
                                </div>    
                                <input type="file" id="book-image-input" name="book_front_page"   style="display: none;" />
                            </div>
                            <div class="image-container relative">
                                <label class="font-semibold" for="">Voucher</label>
                                <img id="voucher-image" src="{{ asset('books/' . $book->voucher) }}" alt="Imagen del voucher" class="voucher-image w-56 h-[22rem]" />
                                <div class="overlay hidden absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center" onclick="document.getElementById('voucher-image-input').click();">
                                    <p class="text-white text-lg">Editar imagen</p>
                                </div>
                                <input type="file" id="voucher-image-input" name="voucher"   style="display: none;" />
                            </div>
                        </div>
                        <div class="w-[55rem] flex flex-col">

                            <label class=" font-semibold" for="">Nombre del libro</label>
                            <input
                                class="appearance-none block resize-none h-fit  w-fit  bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                type="text" name="book_name" value="{{ $book->book_name }}">


                            <label class="font-semibold" for="">Descripción:</label>
                            <textarea
                                class=" appearance-none block resize-none h-fit  w-fit  bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                type="text" name="book_description" id="">{{ $book->book_description }}</textarea>




                            <label class="font-semibold text-[15px]" for="">Autor:</label>
                            <input
                                class="appearance-none block resize-none h-fit  w-fit  bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                type="text" value=" {{ $book->author }}" name="author" id="">


                            <label class="font-semibold text-[15px]" for="">Precio:</label>
                            <input
                                class="appearance-none block resize-none h-fit  w-fit  bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                type="text" name="price" value="{{ $book->price }}" name="" id="">
                `<label class=" font-semibold" for="">Estudiantes</label>
                                @foreach ($book->students as $student)
        <p>{{ $student->student_name }}</p>
    @endforeach


                            <div class="flex flex-row gap-4 ">

                                <button class="bg-[#01A080] rounded w-auto h-12 text-white font-semibold"
                                    type="submit">
                                    Actualizar datos del libro
                                </button>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<script>
    document.getElementById('book-image-input').addEventListener('change', function(e) {
    var reader = new FileReader();
    reader.onload = function(e) {
        document.getElementById('book-image').src = e.target.result;
    }
    reader.readAsDataURL(this.files[0]);
});

document.getElementById('voucher-image-input').addEventListener('change', function(e) {
    var reader = new FileReader();
    reader.onload = function(e) {
        document.getElementById('voucher-image').src = e.target.result;
    }
    reader.readAsDataURL(this.files[0]);
});
</script>