<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta de Amonestación</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        img {
            width: 100%;
            max-width: 720px;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            font-size: 15px;
        }

        h3 {
            text-align: center;
            margin-bottom: 10px;
        }

        h4 {
            text-align: justify;
            margin: 20px 0;
        }

        h5 {
            text-align: justify;
            margin-bottom: 10px;
        }

        .footer-table {
            margin-top: 50px;
            width: 100%;
            text-align: right;
        }

        .footer-table td {
            font-size: 12px;
            padding-top: 10px;
        }

        .firma {
    display: flex;
    justify-content: space-around; /* Distribuir el espacio horizontalmente */
    align-items: center; /* Alineación vertical */
    margin-top: 20px;
    width: 100%; /* Ancho del contenedor */
}

.persona {
    text-align: center;
    width: 200px; /* Ancho de cada persona */
}

hr {
    margin: 0; /* Eliminar el margen para que esté en línea con los textos */
    border: none;
    border-top: 1px solid black;
}

    </style>
</head>

<body>
    <div class="container">
        <img src="{{ $imagen_path }}" alt="Logo UT">
        <h3>SANCIÓN POR INCUMPLIMIENTO</h3>
        <table>
            <tr>
                <th>Nombre del estudiante:</th>
                <td class="solid-border">{{ Auth::user()->student ? Auth::user()->student->student_name : 'No se encontró un estudiante asociado' }}</td>
            </tr>
            <tr>
                <th>Matrícula:</th>
                <td class="solid-border">{{ Auth::user()->student ? Auth::user()->student->id_student : 'No se encontró un estudiante asociado' }}</td>
            </tr>
            <tr>
                <th>Programa educativo:</th>
                <td class="solid-border">{{ Auth::user()->student->projects->educational_program }}</td>
            </tr>
        </table>

        <h4>Debido a que a la fecha no ha cumplido con la entrega de los avances de memoria y/o documentación para
            Gestión Empresarial, por este conducto le informo que de conformidad con el Procedimiento y el Reglamento de
            las Prácticas Profesionales se ha hecho acreedor a una sanción que consiste en:</h4>

        <table>
            <tr>
                <td colspan="6">POR MOTIVOS ACADÉMICOS</td>
            </tr>
            <tr>
                <th></th>
                <td colspan="5">Amonestación escrita.</td>
            </tr>
            <tr>
                <th></th>
                <td colspan="5">Amonestación con * horas de labor social.</td>
            </tr>
            <tr>
                <th></th>
                <td colspan="5">Cancelación de la Estadía</td>
            </tr>
        </table>

        <table>
            <tr>
                <td colspan="6">POR TEMAS RELACIONADOS EN GESTIÓN EMPRESARIAL</td>
            </tr>
            <tr>
                <th></th>
                <td colspan="5">Amonestación escrita.</td>
            </tr>
            <tr>
                <th></th>
                <td colspan="5">Amonestación con * horas de labor social.</td>
            </tr>
            <tr>
                <th></th>
                <td colspan="5">Cancelación de la Estadía</td>
            </tr>
        </table>

        <h4>Asimismo, y con el fin de evitar la cancelación del proceso, se le exhorta a cumplir dentro de los cinco
            días hábiles a partir de la recepción de la presente.</h4>

        <h4>Sin otro particular, quedo de usted para cualquier aclaración al respecto.</h4>


        <div>
            <div class="firma">
                <div class="persona">
                    <p>Atentamente</p>
                    <hr>
                    <p>Nombre y firma del Asesor(a) Académico</p>
                </div>
            </div>
            <div>
                <div class="persona">
                    <p>Enterado</p>
                    <hr>
                    <p>Nombre y firma del(a) Estudiante</p>
                </div>
            </div>
        </div>


        <h4>*Nota:</h4>
        <h5>La sanción deberá ser entre 10 a 20 horas de labor social en la Dirección o departamento que correspondan
            las amonestaciones.</h5>


        <h6>C.c.p Dirección de División</h6>
        <h6>C.c.p Expediente del(a) Estudiante</h6>

        <table class="footer-table">
            <tr>
                <td>Fecha de revisión: 03 de mayo de 2019</td>
                <td>Revisión No. 5</td>
                <td>AEP-P03-F04</td>
            </tr>
        </table>
    </div>
</body>

</html>