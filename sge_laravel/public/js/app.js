document.addEventListener("DOMContentLoaded", function() {
    ocultarMenu(); // Ocultar el menú al cargar la página por primera vez
});

function ocultarMenu() {
    var div = document.getElementById("miDiv");
    div.classList.add("ocultoz");
}

function mostrarMenu() {
    var div = document.getElementById("miDiv");
    div.classList.remove("oculto");
}