document.addEventListener('DOMContentLoaded', function () {
    // Obtener los datos iniciales para la gráfica
    $.ajax({
        url: '/project_approval_data_3',
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            if (response.success) {
                var labels = response.labels;
                var counts = response.counts;

                // Crear la gráfica inicial
                var ctx = document.getElementById('MYChart').getContext('2d');
                var MYChart = new Chart(ctx, {
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

                // Manejar el cambio en el select
                $('#groupSelect').change(function () {
                    var selectedGroup = $(this).val();
                    
                    $.ajax({
                        url: '/filter_by_groups',
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            group_name: selectedGroup
                        },
                        dataType: 'json',
                        success: function (response) {
                            if (response.success) {
                                // Actualizar el gráfico con los nuevos datos
                                MYChart.data.labels = [response.group_name];
                                MYChart.data.datasets[0].data = [response.approved_count];
                                MYChart.update();
                            } else {
                                console.error('Error al obtener los datos del servidor:', response.message);
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error('Error al obtener los datos del servidor:', error);
                        }
                    });
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
