document.addEventListener('DOMContentLoaded', function () {
    // Declara MYChartA fuera de la función success para tener un ámbito más amplio
    var MYChartA;

    // Obtener los datos iniciales para la gráfica
    $.ajax({
        url: '/project_approval_data_5',
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            if (response.success) {
                var labels = response.labels;
                var counts = response.counts;

                // Destruye la instancia anterior si existe
                if (MYChartA) {
                    MYChartA.destroy();
                }

                // Crea la nueva instancia de Chart.js
                var ctx = document.getElementById('MYChartA').getContext('2d');
                MYChartA = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Estudiantes de cada grupo',
                            data: counts,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

            } else {
                console.error('Error al obtener los datos del servidor:', response.message);
            }
        },
        error: function (xhr, status, error) {
            console.error('Error al obtener los datos del servidor:', error);
        }
    });
});
