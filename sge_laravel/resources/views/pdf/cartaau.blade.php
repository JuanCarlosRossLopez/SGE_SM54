<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="resources/css/app.css" rel="stylesheet">
    <title>Carta de Autorización</title>
    @vite('resources/css/app.css')
</head>
<style>
    .firma {
        display: flex;
        justify-content: space-around;
        /* Distribuir el espacio horizontalmente */
        align-items: center;
        /* Alineación vertical */
        margin-top: 20px;
        width: 100%;
        /* Ancho del contenedor */
    }

    .persona {
        text-align: center;
        width: 200px;
        /* Ancho de cada persona */
    }

    hr {
        margin: 0;
        /* Eliminar el margen para que esté en línea con los textos */
        border: none;
        border-top: 1px solid black;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid black;
        padding: 6px;
        text-align: left;
        font-size: 15px;
    }
</style>

<body>


    <div style="text-align: right;">
        <h5>Cancún, Quintana Roo; a 27 de Noviembre de 2023</h5>
        <h5>Of.:UTC/DDIT/M-39/2023</h5>
        <h5>Asunto: Autorización de Digitalización</h5>
    </div>

    <br>
    <div style="text-align: justify;">
        <h4>Se autoriza al estudiante <span>Paola Alejandra Galan Zacarias</span> del grupo <span>MI62BIS</span> con
        </h4>
        <h4>número de matrícula: <span>20333105</span> la digitalización de la MEMORIA en modalidad:</h4>
    </div>

    <table border="1">
        <tr>
            <th>X</th>
            <td colspan="3">Tradicional</td>
            <td colspan="2">Título de Memoria</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="3">Excelencia Académica</td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="3">Experiencia Laboral</td>
            <td colspan="2">Plan de Mantenimiento para servicios técnicos</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="3">Movilidad Internacional</td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="3">Proyecto de Investigación</td>
            <td colspan="2"></td>
        </tr>
    </table>


    <h5>Lo anterior para los trámites correspondientes a su titulación</h5>
    <br>
    <h5 style="text-align: center; ">Vo. Bo.</h5>
    <br>
    <div>
        <div class="firma">
            <div class="persona">
                <p>ASESOR ACADÉMICO</p>
                <hr>
                <p>Mtra. Karla Vanessa Cabrera Castillo</p>
            </div>
        </div>
        <div>
            <div class="persona">
                <p>COMISIÓN ACADÉMICA</p>
                <hr>
                <p>Mtra. Mayra Guadalupe Fuentes Sosa</p>
                <p>Presidente de la Comisión Académica de T.I</p>
            </div>
        </div>
    </div>

    <br>
    <footer>
        <table style="width:100%">
            <tr>
                <td style="border: 1px solid black; padding: 8px;">Fecha de Revisión: 03 de Mayo</td>
                <td style="border: 1px solid black; padding: 8px;">Revisión No.5</td>
                <td style="border: 1px solid; padding: 8px;">AEP-P03-F05</td>
            </tr>
        </table>
    </footer>
</body>


</html>
