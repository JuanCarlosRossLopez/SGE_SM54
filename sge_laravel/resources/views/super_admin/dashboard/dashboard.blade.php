@extends('templates.template_admin')
@section('titulo')
Panel de control administrador
@endsection
@section('contenido')

<div class="p-3 ml-5 bg-[#E9E9E9]  ">
    <!-- container titulo -->
    <div class="p-2 m-2 rounded-md bg-[#E3E3E3] poppins-light text-[40px] ">
        <h1>Bienvenido Rafael Villegas</h1>
    </div>
    <div class="bg-[#C8C8C8] m-2 p-2 rounded-md poppins-light text-[30px]">
        <h2>
            Panel de administración
        </h2>
    </div>


    <style>
.item1{
    grid-area: graph1;
}

.item2{
    grid-area: graph2;
}
.item3{
    grid-area: cards;
}
.item4{
    grid-area: graph3;
}

.grid-container{
    display: grid;
    grid-template-areas: 
    'graph1 graph1 graph2 graph2 '
    'graph3 graph3 cards cards ';
    grid-gap: 10px;
    padding: 10px;
    ;

}
    </style>

    <!-- cuerpo del dashboard -->
    <div class="grid-container   ml-10">
        <div class="w-[800px] item1 ml-5 ">
            <div class="bg-white w-[1000px] h-96 rounded-md flex items-center ">
                <img src="{{ asset('image/Group 16.png') }}" alt="Logo Image" class=" object-cover m-auto mt-10 ">
            </div>
        </div>

        <div class="w-[450px] item2 mr-[200px]">
            <div class="bg-white w-[450px] h-96 rounded-md ">
                <img src="{{ asset('image/Group 9.png') }}" alt="Logo Image" class=" object-cover m-auto mt-10 ">
            </div>
        </div>

        <div class="w-[170px] item3 mr-20 ">
            <div class="bg-white  w-[200px] h-[200px] rounded-md text-center p-10">
                <h1 class="poppins-light m-3">Historial de memoria</h1>
                <button class="bg-[#18A689] text-white w-32 h-9 rounded-md text-sm">Visualizar</button>
            </div>
            <div class="bg-white   w-[200px] h-[200px] rounded-md text-center">
                <h1 class="poppins-light m-3">Proyectos finalizados</h1>
                <button class="bg-[#18A689] text-white w-32 h-9 rounded-md text-sm bottom-6">Visualizar</button>
            </div>
            <div class="bg-white  w-[200px] h-[200px] rounded-md text-center">
                <h1 class="poppins-light m-3">Proyectos aprobados</h1>
                <button class="bg-[#18A689] text-white w-32 h-9 rounded-md text-sm">Visualizar</button>

            </div>
            <div class="bg-white   w-[200px] h-[200px] rounded-md text-center">
                <h1 class="poppins-light m-3"> Asesores</h1>
                <button class="bg-[#18A689] text-white w-32 h-9 rounded-md text-sm">Visualizar</button>
            </div>
        </div>
        <div class="ml-4 h-auto mb-20 justify-center item4">
    <canvas class="w-[1300px] h-10" id="myChart"></canvas>
</div>


    </div>


    <script>

  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgba(255, 99, 132, 1)',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
    }
  });
</script>





</div>
@endsection