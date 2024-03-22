/*
Instrucciones para utilizar los modals con este JavaScript:

0. Incluye lo siguiente en tu vista o template:
        <script src="{!! asset('js/modals.js') !!}"></script>

1. Agrega el atributo 'data-modal' al botón que abre el modal, con el valor igual al 'idModal' del modal que deseas abrir.
   Ejemplo: 
            <button data-modal="editMaestro" class="show-modal">Abrir Modal</button>

2. Asegúrate de que el botón tenga la clase 'show-modal'. Esta clase activará la apertura del modal al ser clickeado.

3. En el modal, agrega el atributo 'idModal' con el mismo valor que el 'data-modal' del botón correspondiente, y la clase 'modal'.
   Ejemplo:
            <div idModal="idMaestro" class="modal">...</div>

4. El botón para cerrar el modal debe tener la clase 'close-modal'. Al ser clickeado, cerrará el modal correspondiente.
   Ejemplo: 
            <button class="close-modal">Cerrar Modal</button>

Si tu modal usa una variable de Laravel, como {{ $teacher->id }}, puedes utilizar la misma variable en el atributo 'idModal':
    Ejemplo: 
            <div idModal="editMaestro_{{ $teacher->id }}" class="modal">
                <h3 >Datos del maestro: {{ $teacher->name }}</h3>
            </div>
*/

// Lista de modals
const modals = document.querySelectorAll(".modal");

// Acciones para cada modal
function handleModal(action, idModal) {
    const modal = document.querySelector(.modal[idModal="${idModal}"]);

    modals.forEach((m) => m.classList.add("hidden"));

    // Abrir o cerrar modal
    if (action === "open") {
        modal.classList.remove("hidden");
    } else if (action === "close") {
        modal.classList.add("hidden");
    }
}

// Guardar todos los botones para abrir y cerrar
const modalTriggers = document.querySelectorAll(".show-modal");
const closeModalButtons = document.querySelectorAll(".close-modal");

modalTriggers.forEach((trigger) => {
    trigger.addEventListener("click", () => {
        const idModal = trigger.dataset.modal;
        handleModal("open", idModal);
    });
});

closeModalButtons.forEach((button) => {
    button.addEventListener("click", () => {
        const idModal = button.closest(".modal").getAttribute("idModal");
        handleModal("close", idModal);
    });
});