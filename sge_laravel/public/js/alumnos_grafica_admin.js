// Datos del gráfico de donut
const datos_admin = {
  labels: ['SM51', 'SM54', 'SM55', 'SM56'],
  datasets: [
    {
      labels:"HOla",
      data: [39, 26,21,15], // Datos de cada sección del donut
      backgroundColor: ['#CC3333', '#169B06','#18A689','#923394'] // Colores de cada sección
    }
  ]
};

// Opciones del gráfico de donut
const opciones_admin = {
  scales: {
    x: {
      beginAtZero: true
    }
  },
  plugins: {
    title:{
      display: true,
      text: 'Proyectos por grupo',
      padding: 12,
      position: 'top',
      color: 'black',
      font: {
        size: 12
      }
    },
    legend: {
      position: 'bottom'
    }
  }
};


// Inicializar el gráfico de donut
const donutChart = new Chart(document.getElementById('bar-chart'), {
  type: 'bar', // Tipo de gráfico de donut
  data: datos_admin,
  options: opciones_admin
});
