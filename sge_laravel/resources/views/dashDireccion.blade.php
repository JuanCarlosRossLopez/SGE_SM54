@extends('test.template')

@section('title') 
Dashboard dirección 
@endsection


@section('contenido')
<div class="back_conteiner">
  <div class="top_conteiner">
      <label>Aqui el titulo de tu vista, te recomiendo cambiar el icono</label>
      <label>
          <!-- Este svg es el icono -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round"
                  d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
          </svg>
      </label>
  </div>

  <div class="content_conteiner">
      <div class="flex flex-row items-center gap-2">
          <label class="conteiner_word_title">Si tiene un subtema tu vista ponlo aqui</label>
          <label id="infoButton" class="cursor-pointer mt-3"
              data-tooltip="Recomiendo ponerle una descripción a la vista">
              <i class="fas fa-exclamation-circle text-[#01A080] text-2xl "></i>
          </label>
      </div>

      <label>De aqui en adelante puedes trabajar 🚬</label>
      <!-- Aqui va todo lo que esta en tu vista -->
  </div>
</div>

<!-- De aqui para abajo es tu vista -->
<div class="content-wrapper">
  <div class="container">  

  <div class="progress-container flex flex-row">
    <!-- Círculos de progreso -->
    <div class="progress-box flex flex-col items-center">
      <h2>PROGRESO DE ANTEPROYECTOS </h2>
      <div class="progress-item h-fit w-fit">
        <svg width="190" height="190" class="progress-chart">
          <circle cx="85" cy="85" r="80" class="progress-back" fill="none"></circle>
          <circle cx="85" cy="85" r="80" class="progress-front" fill="none" stroke-dasharray="0 1000000"></circle>
          <g class="progress-text">
            <text x="92" y="88" alignment-baseline="middle" text-anchor="middle" id="percentage">0%</text>
          </g>
        </svg>
      </div>
      <button class="Button-progress">VISUALIZAR</button>
    </div>

    <!--Segundo círculo de progreso -->
    <div class="progress-box flex flex-col items-center">
      <h2>PROGRESO DE PROYECTOS</h2>
      <div class="progress-item">
        <svg width="190" height="190" class="progress-chart">
          <circle cx="85" cy="85" r="80" class="progress-back" fill="none"></circle>
          <circle cx="85" cy="85" r="80" class="progress-front2" fill="none" stroke-dasharray="0 1000000"></circle>
          <g class="progress-text">
            <text x="92" y="88" alignment-baseline="middle" text-anchor="middle" id="percentage2">0%</text>
          </g>
        </svg>
      </div>
      <button class="Button-progress">VISUALIZAR</button>
    </div>

    <!-- Tercer círculo de progreso -->
    <div class="progress-box flex flex-col items-center">
      <h2>ESTADIAS FINBALIZADAS</h2>
      <div class="progress-item ">
        <svg width="190" height="190" class="progress-chart">
          <circle cx="85" cy="85" r="80" class="progress-back" fill="none"></circle>
          <circle cx="85" cy="85" r="80" class="progress-front3" fill="none" stroke-dasharray="0 1000000"></circle>
          <g class="progress-text">
            <text x="92" y="88" alignment-baseline="middle" text-anchor="middle" id="percentage3">0%</text>
          </g>
        </svg>
      </div>
      <button class="Button-progress">VISUALIZAR</button>
    </div>
  </div>

  <!-- Cuadrados con título, icono y botón -->
<div class="action-boxes">
  <div class="action-box">
    <h2>HISTORIAL DE MEMORIAS</h2>
    <div class="button-wrapper">
      <i class="bi bi-journal-bookmark"></i>
      <button class="action-button">VISUALIZAR</button>
    </div>
  </div>
  <div class="action-box">
    <h2>PROYECTOS FINALIZADOS</h2>
    <div class="button-wrapper">
      <i class="bi bi-file-check"></i>
      <button class="action-button">VISUALIZAR</button>
    </div>
  </div>
  <div class="action-box">
    <h2>PROYECTOS APROBADOS</h2>
    <div class="button-wrapper">
    <i class="bi bi-patch-check"></i>
      <button class="action-button">VISUALIZAR</button>
    </div>
  </div>
  <div class="action-box">
    <h2>ASESORES ACADEMICOS</h2>
    <div class="button-wrapper">
      <i class="bi bi-people-fill"></i>
      <button class="action-button">VISUALIZAR</button>
    </div>
  </div>
</div>

  <div class="line-chart-container">
    <h3>AVANCE DE LOS ALUMNOS</h3>
    <canvas id="line-chart"></canvas>
  </div>

</div>
</div>

  <script src="{{ asset('js/progress.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="{{ asset('js/line-chart.js') }}"></script>
</body>
</html>
@endsection