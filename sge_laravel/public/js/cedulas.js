// Datos del gráfico lineal
const data = {
    labels: ['Mayo', 'Junio', 'Julio', 'Agosto'],
    datasets: [
      {
        label: 'Pendientes',
        data: [12, 19, 3, 5],
        borderColor: '#CC3333',
        tension: 0.1
      },
      {
        label: 'Aprobados',
        data: [5, 6, 7, 8],
        borderColor: '#169B06',
        tension: 0.1
      },
      
    ]
  };
  
  // Opciones del gráfico lineal
  const options = {
    responsive: true,
    plugins: {
      title:{
        display: true,
        text: 'Gráfica de cedulas de anteproyecto',
        padding: 20,
        position: 'top',
        color: 'black',
        font: {
          size: 20
        }
      },
      legend: {
        position: 'bottom'
      }
    }
  };
  
  // Inicializar el gráfico lineal
  const Pie = new Chart(document.getElementById('line-chart'), {
    type: 'line',
    data: data,
    options: options
  });
  