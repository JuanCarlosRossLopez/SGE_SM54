// Datos del gráfico lineal
const data2 = {
    labels: ['Mayo', 'Junio', 'Julio', 'Agosto'],
    datasets: [
      {
        label: 'SM51',
        data: [12, 19, 3, 5],
        borderColor: '#CC3333',
        tension: 0.1
      },
      {
        label: 'SM52',
        data: [5, 6, 7, 8],
        borderColor: '#169B06',
        tension: 0.1
      },
      {
        label: 'SM53',
        data: [16, 8, 4, 2],
        borderColor: '#ffe75d',
        tension: 0.1
      },
      {
        label: 'SM54',
        data: [3, 7, 10, 15,],
        borderColor: '#1064E1',
        tension: 0.1
      }
    ]
  };
  
  // Opciones del gráfico lineal
  const options2 = {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  };
  
  // Inicializar el gráfico lineal
  const lineChart2 = new Chart(document.getElementById('line-chart2'), {
    type: 'line',
    data: data2,
    options: options2
  });
  