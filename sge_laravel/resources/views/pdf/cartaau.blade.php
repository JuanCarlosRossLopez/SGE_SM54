<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta de Autorización</title>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            margin: 0 auto;
        }

        th,
        td {
            border: 1px solid black;
            padding: 6px;
            text-align: left;
            font-size: 15px;
        }

        .border {
            border-top: none;
            border-bottom: none;
        }

        .contenido {
            margin-top: 20px;
            display: flex;
            text-align: center;
        }

        .columna {
            display: inline-block;
        }

        .texto {
            text-align: right;
        }

        .footer-table {
            position: absolute;
            padding: 2.5rem;
            bottom: 100px;
            left: 0;
            right: 0;
        }
        img {
            width: 720px;
            height: 140px;
            margin-left: -60px;
        }
    </style>
</head>


<body>
    <div class="container">
        <img src="{{ $imagen_path }}" alt="logo UT" style="align-self: center">
        <div>
            <h5 class="texto">Cancún, Quintana Roo; <span>a 27 de Noviembre de 2023</span></h5>
            <h5 class="texto">Of.:UTC/DDIT/M-39/2023</h5>
            <h5 class="texto">Asunto: Autorización de Digitalización</h5>
        </div>
        <br />
        <h4>Se autoriza al estudiante <span>{{ Auth::user()->student->student_name }}</span> del grupo
            <span>{{ Auth::user()->student->projects->student_group }}</span> con número de matrícula:
            <span>{{ Auth::user()->student->id_student }}</span> la digitalización de la MEMORIA en
            modalidad:
        </h4>
        <br>

        <table>
            <tr>
                <th style="width: 20px;">X</th>
                <th>Tradicional</th>
                <th style="width: 120px;">Titulo de Memoria</th>
            </tr>

            <tr>
                <th></th>
                <th>Excelencia académica</th>
                <th class="border"></th>
            </tr>
            <tr>
                <th style=""></th>
                <th style="width: 150px">Movilidad Internacional</th>
                <th class="border" style="text-align: center">{{ Auth::user()->student->projects->project_title }}</th>
            </tr>   
            <tr>
                <th style=""></th>
                <th style="width: 150px">Proyecto de Investigación</th>
                <th style="border-top: none;"></th>
            </tr>
        </table>
        <br/>
        <br/>
        <h5>Lo anterior para los trámites correspondientes a su titulación</h5>
        <br>
        <h5 style="text-align: center;">Vo. Bo.</h5>
        <div class="contenido">
            <div class="columna" style="margin-right: 20px; margin-bottom:22px;">
                <p>ASESOR ACADÉMICO</p>
                <br />
                <hr style="width: 250px;" />
                <p>[asesor académico]</p>
                {{-- <p style="font-size: 10px"><span style="color: white">.</span></p> --}}
            </div>
            <div class="columna" style="margin-bottom:0.5px;">
                <p style="margin-top: 20px;">COMISIÓN ACADÉMICA</p>
                <br />
                <hr style="width: 250px" />
                <p>Mtra. Mayra Guadalupe Fuentes Sosa</p>
                <p style="font-size: 10px">Presidente de la Comisión Académica de T.I</p>
            </div>
        </div>

        <table class="footer-table" style="width: 100%;">
            <tbody>
                <tr>
                    <td style="border: 1px solid black; padding: 8px;">Fecha de Revisión: 03 de Mayo</td>
                    <td style="border: 1px solid black; padding: 8px;">Revisión No.5</td>
                    <td style="border: 1px solid      ; padding: 8px;">AEP-P03-F05</td>
                </tr>
            </tbody>
        </table>


    </div>
</body>

</html>
