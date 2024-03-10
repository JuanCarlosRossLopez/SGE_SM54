<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Progress Circle</title>
  <link rel="stylesheet" href="{{ asset('css/progress.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
@extends('templates.template_admin')

<div class="content-wrapper">
  <div class="container">  

  <div class="progress-container">
    <!-- Círculos de progreso -->
    <div class="progress-box">
      <h2>PROGRESO DE ANTEPROYECTOS </h2>
      <div class="progress-item">
        <svg width="200" height="200" class="progress-chart">
          <circle cx="100" cy="100" r="80" class="progress-back" fill="none"></circle>
          <circle cx="100" cy="100" r="80" class="progress-front" fill="none" stroke-dasharray="0 1000000"></circle>
          <g class="progress-text">
            <text x="100" y="110" alignment-baseline="middle" text-anchor="middle" id="percentage">0%</text>
          </g>
        </svg>
      </div>
      <button class="Button-progress">VISUALIZAR</button>
    </div>

    <!-- Segundo círculo de progreso -->
    <div class="progress-box">
      <h2>PROGRESO DE PROYECTOS</h2>
      <div class="progress-item">
        <svg width="200" height="200" class="progress-chart">
          <circle cx="100" cy="100" r="80" class="progress-back" fill="none"></circle>
          <circle cx="100" cy="100" r="80" class="progress-front2" fill="none" stroke-dasharray="0 1000000"></circle>
          <g class="progress-text">
            <text x="100" y="110" alignment-baseline="middle" text-anchor="middle" id="percentage2">0%</text>
          </g>
        </svg>
      </div>
      <button class="Button-progress">VISUALIZAR</button>
    </div>

    <!-- Tercer círculo de progreso -->
    <div class="progress-box">
      <h2>ESTADIAS FINBALIZADAS</h2>
      <div class="progress-item">
        <svg width="200" height="200" class="progress-chart">
          <circle cx="100" cy="100" r="80" class="progress-back" fill="none"></circle>
          <circle cx="100" cy="100" r="80" class="progress-front3" fill="none" stroke-dasharray="0 1000000"></circle>
          <g class="progress-text">
            <text x="100" y="110" alignment-baseline="middle" text-anchor="middle" id="percentage3">0%</text>
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
