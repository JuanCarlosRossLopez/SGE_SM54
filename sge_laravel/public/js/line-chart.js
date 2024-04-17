document.addEventListener('DOMContentLoaded', function() {
  $.ajax({
    url: '/project_approval_data4',
    type: 'GET',
    dataType: 'json',
    success: function(response) {
        if (response.success) {
            var labels = response.labels;
            var counts = response.counts;

            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Proyectos Aprobados por Carrera',
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
    error: function(xhr, status, error) {
        console.error('Error al obtener los datos del servidor:', error);
    }
});

});