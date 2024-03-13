import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();




document.addEventListener('DOMContentLoaded', function () {
    var canvas = document.getElementById('miCanvas');
    var ctx = canvas.getContext('2d');

    // Dibujar aquí en el canvas
    // Por ejemplo:
    ctx.fillStyle = 'red';
    ctx.fillRect(50, 50, 100, 100);
});