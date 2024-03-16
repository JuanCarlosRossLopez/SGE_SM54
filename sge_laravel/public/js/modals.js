/* 
Instrucciones para utilizar los modals con este js:

<!-- Paso 1: Agrega el atributo data-modal a tu botón que abre el modal con el valor igual al id del modal que deseas abrir. -->

    <button type="button">
        <!-- Agregamos el atributo data-modal con el valor "modal1" -->
        <a href="/test" target="_blank" data-modal="modal1" class="show-modal">
            <span>Descargar</span>
        </a>
    </button>

<!-- Paso 2: Asegúrate de que el botón tenga la clase "show-modal". -->
<!-- El botón debe tener la clase "show-modal". Esto significa que activará la apertura del modal al ser clickeado. -->


Modal correspondiente:
<!-- Paso 3: En el modal, asegúrate de que el id coincida con el valor de data-modal en el botón y que tenga la clase "modal". -->
<!-- Este modal tiene el id "modal1" y la clase "modal" -->

    <div id="modal1" class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded-2xl shadow-lg max-w-[300px]">
            <div class="border-b px-4 py-2 flex justify-content-end">
                <!-- Paso 4: El botón para cerrar el modal debe tener la clase close-modal. -->
                <!-- Este botón tiene la clase close-modal -->
                <!-- Al ser clickeado, cerrará el modal -->
                <button class="close-modal">
                    <!-- Icono de cierre -->
                    <p class="text-2xl">
                        <i class="fa-solid fa-circle-xmark items-end bg-white rounded-full" style="color: #c97979;"></i>
                    </p>
                </button>
            </div>
        </div>
    </div>
*/

// Lista de modals
const modals = document.querySelectorAll(".modal");

// Acciones para cada modal
function handleModal(action, modalId) {
    const modal = document.getElementById(modalId);
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
        const modalId = trigger.dataset.modal;
        handleModal("open", modalId);
    });
});

closeModalButtons.forEach((button) => {
    button.addEventListener("click", () => {
        const modalId = button.closest(".modal").id;
        handleModal("close", modalId);
    });
});

