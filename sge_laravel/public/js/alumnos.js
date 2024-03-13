// Datos del gráfico de donut
const datos = {
  labels: ['SM51', 'SM54', 'SM55', 'SM56'],
  datasets: [
    {
      data: [39, 26,21,15], // Datos de cada sección del donut
      backgroundColor: ['#CC3333', '#169B06','#18A689','#923394'] // Colores de cada sección
    }
  ]
};

// Opciones del gráfico de donut
const opciones = {
  responsive: true,
  plugins: {
    title:{
      display: true,
      text: 'Proyectos de desarrollo por grupo',
      padding: 20,
      position: 'top',
      color: 'black',
      font: {
        size: 20
      }
    },
    legend: {
      position: 'left'
    }
  }
};


// Inicializar el gráfico de donut
const donutChart = new Chart(document.getElementById('donut-chart'), {
  type: 'doughnut', // Tipo de gráfico de donut
  data: datos,
  options: opciones
});
