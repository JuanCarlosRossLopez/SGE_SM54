// Variables
let percent1 = 90;
let percent2 = 50; // Cambia el valor del porcentaje para el segundo círculo
let percent3 = 10; // Cambia el valor del porcentaje para el tercer círculo

let counter1 = 0;
let counter2 = 0;
let counter3 = 0;

let intervalID1 = null;
let intervalID2 = null;
let intervalID3 = null;

// Función para actualizar el número y la barra de progreso
function updateNumber1() {
  let step = 4;
  if (counter1 + step >= percent1) {
    counter1 = percent1;
    document.getElementById('percentage').innerHTML = counter1 + '%';
    clearInterval(intervalID1);
    return;
  }
  counter1 += step;
  document.getElementById('percentage').innerHTML = counter1 + '%';
  
  let front = document.querySelector('.progress-front');
  let progress = counter1 / 100 * 522; // Calculando el valor de stroke-dasharray
  front.style.strokeDasharray = `${progress} 1000000`; // Actualizando stroke-dasharray
}

function updateNumber2() {
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
  let progress = counter2 / 100 * 522; // Calculando el valor de stroke-dasharray
  front.style.strokeDasharray = `${progress} 1000000`; // Actualizando stroke-dasharray
}

function updateNumber3() {
  let step = 4;
  if (counter3 + step >= percent3) {
    counter3 = percent3;
    document.getElementById('percentage3').innerHTML = counter3 + '%';
    clearInterval(intervalID3);
    return;
  }
  counter3 += step;
  document.getElementById('percentage3').innerHTML = counter3 + '%';
  
  let front = document.querySelector('.progress-front3');
  let progress = counter3 / 100 * 522; // Calculando el valor de stroke-dasharray
  front.style.strokeDasharray = `${progress} 1000000`; // Actualizando stroke-dasharray
}

// Inicializar el script cuando el documento esté listo
document.addEventListener('DOMContentLoaded', () => {
  intervalID1 = setInterval(updateNumber1, 100);
  intervalID2 = setInterval(updateNumber2, 100);
  intervalID3 = setInterval(updateNumber3, 100);
});
