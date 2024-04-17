document.addEventListener('DOMContentLoaded', function () {
    $.ajax({
        url: '/project_approval_data_4', // Ruta actualizada según el controlador
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            if (response.success) {
                var labels = response.labels;
                var statusCounts = response.status_count;

                var ctx = document.getElementById('mychart').getContext('2d');
                var mychart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Anteproyectos por estado',
                            data: statusCounts,
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

    $('#groupSelect').change(function () {
        var selectedGroup = $(this).val();

        $.ajax({
            url: '/filter_by_group', // Ruta actualizada según el controlador
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                group_name: selectedGroup
            },
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    // Actualizar el gráfico con los nuevos datos
                    mychart.data.labels = [response.group_name];
                    mychart.data.datasets[0].data = [response.approved_count];
                    mychart.update();
                } else {
                    console.error('Error al obtener los datos del servidor:', response.message);
                }
            },
            error: function (xhr, status, error) {
                console.error('Error al obtener los datos del servidor:', error);
            }
        });
    });

});
