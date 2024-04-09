<div id="view2{{ $book->id }}"
    class="modalView2 h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <div class="bg-[#01A080] w-max rounded shadow-lg max-w-4xl">
        <div class="border-b px-4 py-2 flex justify-between items-center text-center">
            <h3 class="font-semibold text-lg ml-60 text-white ">{{ $book->book_name }}</h3>
            <button class="close-modal bg-white rounded-full h-[1rem] flex items-center">
                <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
            </button>
        </div>

        <div class="bg-white p-10">
            <!-- Aqui en esta parte ajusta el valor de h segun tus necesidades, si es muy grande el contenido recomiendo dejar como h-[85vh]-->
            <div class="modal-body max-h-full h-auto flex gap-7">
                <div class="w-full md:w-auto">
                    <img src="{{asset ('books/'.$book->book_front_page) }}" alt="" class=" w-fit md:w-[22rem] h-fit">
                </div>
                <div class=" w-[32rem]  mb-0   items-center justify-center">

                    <label class=" font-semibold" for="">Nombre del libro</label>
                    <h1 class="poppins-light text-[20px]">
                        {{ $book->book_name }}
                    </h1>

                    <label class="font-semibold" for="">Descripción:</label>
                    <p class="poppins-light text-[15px]">
                        {{ $book->book_description }}
                    </p>

                    <label class="font-semibold text-[15px]" for="">Autor:</label>
                    <p class="poppins-light text-[15px]">
                        {{ $book->author }}
                    </p>
                    <label class="font-semibold text-[15px]" for="">Precio:</label>
                    <p class="poppins-light text-[15px]">
                        {{ $book->price }} MXN
                    </p>
                    
                  
                </div>


            </div>
        </div>
    </div>
</div>
