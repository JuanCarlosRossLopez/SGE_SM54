// Variables para el primer círculo de progreso
let percent1 = 0;
let counter1 = 0;
let intervalID1 = null;

// Variables para el segundo círculo de progreso (estado "Finalizado")
let percent2 = 0;
let counter2 = 0;
let intervalID2 = null;

function updateNumber1() {
  fetch('/get-project-percentage')
    .then(response => response.json())
    .then(data => {
      percent1 = data.percentage.toFixed(1);
      
      let step = 4;
      if (counter1 + step >= percent1) {
        counter1 = percent1;
        document.getElementById('percentage1').innerHTML = counter1 + '%';
        clearInterval(intervalID1);
        return;
      }
      counter1 += step;
      document.getElementById('percentage1').innerHTML = counter1 + '%';

      let front = document.querySelector('.progress-front1');
      let progress = counter1 / 100 * 522; 
      front.style.strokeDasharray = `${progress} 1000000`; 
    })
    .catch(error => {
      console.error('Error al obtener el porcentaje:', error);
    });
}

function updateNumber2() {
  // Aquí ajusta la ruta según tu controlador y ruta para obtener el porcentaje del estado "Finalizado"
  fetch('/get-finished-project-percentage')
    .then(response => response.json())
    .then(data => {
      percent2 = data.percentage.toFixed(1);
      
      let step = 4;
      if (counter2 + step >= percent2) {
        counter2 = percent2;
        document.getElementById('percentage2').innerHTML = counter2 + '%';
        clearInterval(intervalID2);
        return;
      }
      counter2 += step;
      document.getElementById('percentage2').innerHTML = counter2 + '%';

      let front = document.querySelector('.progress-front2');
      let progress = counter2 / 100 * 522; 
      front.style.strokeDasharray = `${progress} 1000000`; 
    })
    .catch(error => {
      console.error('Error al obtener el porcentaje:', error);
    });
}

// Inicializar los scripts cuando el documento esté listo
document.addEventListener('DOMContentLoaded', () => {
  intervalID1 = setInterval(updateNumber1, 100);
  intervalID2 = setInterval(updateNumber2, 100);
});
