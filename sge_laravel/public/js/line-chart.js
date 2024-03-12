// Datos del gráfico lineal
const data = {
    labels: ['Mayo', 'Junio', 'Julio', 'Agosto'],
    datasets: [
      {
        label: 'Infraestructura de redes digitales',
        data: [12, 19, 3, 5],
        borderColor: '#CC3333',
        tension: 0.1
      },
      {
        label: 'Desarrollo de software multiplataforma',
        data: [5, 6, 7, 8],
        borderColor: '#169B06',
        tension: 0.1
      },
      {
        label: 'Mantenimiento',
        data: [3, 7, 10, 15,],
        borderColor: '#1064E1',
        tension: 0.1
      }
    ]
  };
  
  // Opciones del gráfico lineal
  const options = {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  };
  
  // Inicializar el gráfico lineal
  const lineChart = new Chart(document.getElementById('line-chart'), {
    type: 'line',
    data: data,
    options: options
  });
  