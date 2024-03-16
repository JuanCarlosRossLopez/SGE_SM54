<div  id="#view{{$book->id}}" class="modalView h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <div class="bg-[#01A080] w-max rounded shadow-lg max-w-4xl">
     
        
        <div class="bg-white p-10">
            <!-- Aqui en esta parte ajusta el valor de h segun tus necesidades, si es muy grande el contenido recomiendo dejar como h-[85vh]-->
            <div class="modal-body max-h-full h-auto">
                    {{$book->id}}
            </div>
        </div>
    </div>
</div>