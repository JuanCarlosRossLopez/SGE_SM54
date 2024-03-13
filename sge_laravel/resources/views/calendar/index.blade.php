<html>

<head>
    <title></title>
    <meta content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Exo', sans-serif;
        }

        .header-col {
            background: #E3E9E5;
            color: #536170;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }

        .header-calendar {
            background: #EE192D;
            color: white;
        }

        .box-day {
            border: 1px solid #E3E9E5;
            height: 150px;
        }

        .box-dayoff {
            border: 1px solid #E3E9E5;
            height: 150px;
            background-color: #ccd1ce;
        }
    </style>

</head>

<body>

    <div class="container">
        <div style="height:50px"></div>
        <h1>
            < tutofox /> <small>Oh my code!</small>
        </h1>
        <h3>Calendario</h3>
        <p>Aquí está un ejemplo de Calendario en PHP</p>

        <hr>

        <div class="row header-calendar">
            <div class="col" style="display: flex; justify-content: space-between; padding: 10px;">
                <!-- Enlace al mes anterior -->
                <a href="{{ route('calendar.month', ['month' => $data['last']]) }}" style="margin:10px;">
                    <i class="fas fa-chevron-circle-left" style="font-size:30px;color:white;"></i>
                </a>
        
                <!-- Nombre del mes y año (corregido para mostrar el mes en español y el año) -->
                <h2 style="font-weight:bold;margin:10px;">{{ $mesSpanish }} <small>{{ $data['year'] }}</small></h2>
        
                <!-- Enlace al mes siguiente -->
                <a href="{{ route('calendar.month', ['month' => $data['next']]) }}" style="margin:10px;">
                    <i class="fas fa-chevron-circle-right" style="font-size:30px;color:white;"></i>
                </a>
            </div>
        </div>
        
        <div class="row">
            <div class="col header-col">Lunes</div>
            <div class="col header-col">Martes</div>
            <div class="col header-col">Miércoles</div>
            <div class="col header-col">Jueves</div>
            <div class="col header-col">Viernes</div>
            <div class="col header-col">Sábado</div>
            <div class="col header-col">Domingo</div>
        </div>
        <!-- inicio de semana -->
        @foreach ($data['calendar'] as $weekData)
            <div class="row">
                <!-- ciclo de día por semana -->
                @foreach ($weekData['datos'] as $dayweek)
                    @if ($dayweek['mes'] == $mes)
                        <div class="col box-day">
                            {{ $dayweek['dia'] }}
                        </div>
                    @else
                        <div class="col box-dayoff">
                        </div>
                    @endif
                @endforeach
            </div>
        @endforeach


    </div> <!-- /container -->

    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
            Developed by Artyom from
            <a href="https://www.tutofox.com/">
                < tutofox />
            </a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

</body>

</html>
