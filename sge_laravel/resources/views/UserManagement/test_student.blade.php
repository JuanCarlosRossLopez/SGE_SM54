<form id="searchForm">
    <input type="text" id="matricula" name="matricula" placeholder="Ingrese la matrícula del estudiante">
    <button type="submit">Buscar Estudiante</button>
</form>

<div id="studentData" style="display: none;">
    <!-- Aquí se mostrarán los datos del estudiante obtenidos de la API -->
</div>

<form id="confirmForm" style="display: none;">
    <!-- Aquí se mostrarán los datos del estudiante para confirmación -->
    <button type="submit">Confirmar</button>
</form>

<script>
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault();
        
        var matricula = document.getElementById('matricula').value;
        
        // Realizar solicitud AJAX para obtener los datos del estudiante
        fetch('/students/getStudentData/' + matricula)
            .then(response => response.json())
            .then(data => {
                // Mostrar los datos del estudiante
                document.getElementById('studentData').innerHTML = JSON.stringify(data, null, 2);
                document.getElementById('studentData').style.display = 'block';

                // Mostrar el formulario de confirmación
                document.getElementById('confirmForm').style.display = 'block';
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });

    document.getElementById('confirmForm').addEventListener('submit', function(event) {
        // Enviar el formulario para almacenar el estudiante en la base de datos
        // Código para enviar el formulario...
    });
</script>
