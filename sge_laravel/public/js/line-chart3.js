document.addEventListener('DOMContentLoaded', function () {
    // Obtener los datos iniciales para la gráfica
    $.ajax({
        url: '/project_approval_data_2',
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            if (response.success) {
                var labels = response.labels;
                var counts = response.counts;

                // Crear la gráfica inicial
                var ctx = document.getElementById('MyChart').getContext('2d');
                var MyChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Proyectos Aprobados por grupo',
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
                                MyChart.data.labels = [response.group_name];
                                MyChart.data.datasets[0].data = [response.approved_count];
                                MyChart.update();
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
