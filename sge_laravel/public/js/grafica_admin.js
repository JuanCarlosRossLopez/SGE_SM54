// Datos del gráfico lineal
const data1 = {
    labels: ['Mayo', 'Junio', 'Julio', 'Agosto'],
    datasets: [
      {
        label: 'Reprobados',
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
  const options1 = {
    responsive: true,
    plugins:{
    title:{
      display: true,
      text: 'Grafica de alumnos por grupo',
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
    },
  };
  
  // Inicializar el gráfico lineal
  const NewChart = new Chart(document.getElementById('hola-chart'), {
    type: 'line',
    data: data1,
    options: options1
  });
  