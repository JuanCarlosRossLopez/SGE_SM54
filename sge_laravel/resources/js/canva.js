// Obtén el elemento canvas por su ID
var canvas = document.getElementById('miCanvas');
// Obtiene el contexto 2D del canvas
var ctx = canvas.getContext('2d');

// Dibuja un cuadrado rojo
ctx.fillStyle = 'red'; // Establece el color de relleno
ctx.fillRect(50, 50, 100, 100); // Dibuja un rectángulo

// Dibuja un círculo azul
ctx.beginPath();
ctx.arc(200, 200, 50, 0, 2 * Math.PI); // Crea un arco de círculo
ctx.fillStyle = 'blue'; // Establece el color de relleno
ctx.fill(); // Rellena el círculo

// Dibuja una línea verde
ctx.beginPath();
ctx.moveTo(300, 300); // Establece el punto de inicio de la línea
ctx.lineTo(400, 300); // Establece el punto final de la línea
ctx.strokeStyle = 'green'; // Establece el color de trazo
ctx.lineWidth = 5; // Establece el ancho de línea
ctx.stroke(); // Dibuja la línea