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
            font-family: Arial, sans-serif;
            font-size: 18px;
            text-align: right;
        }
        h5 {
    font-weight: normal; /* Establece el peso de la fuente como normal para todos los elementos h5 */
}

h5 span {
    font-weight: bold; /* Mantén el texto dentro de los spans en negrita */
}


        .footer-table {
            position: absolute;
            padding: 2.5rem;
            bottom: 100px;
            left: 0;
            right: 0;
        }

        .footer-table td {
            border: 1px solid black;
            padding: 6px;
            text-align: left;
            font-size: 15px;
            font-family: Arial, sans-serif;
        }

        img {
            width: 720px;
            height: 140px;
            margin-left: -60px;
        }
        h5{
            font-family: Arial, sans-serif;
            font-size: 18px;
            margin-top: 8px;
            color: #000000;
            text-align: right;
        }
    
        
    </style>
</head>


<body>
    <div class="container">
        <img src="{{ $imagen_path }}" alt="logo UT" style="align-self: center">
        <div>
            <h5><a>Cancún, Quintana Roo;</a> <span>a 16 de Abril de 2024</span></h5>
            <h5>Of.: UTC/DDIT/M-39/2023</h5>
            <h5><span>Asunto:</span> Autorización de Digitalización</h5>
        </div>
        
        <br />
        <p style="text-align: justify; font-weight:normal; font-family: Arial, sans-serif; font-size:18px; ">
            Se autoriza al estudiante <b style=" text-decoration: underline;">{{ Auth::user()->student->student_name }}</b> del grupo
            <b style=" text-decoration: underline;">{{ Auth::user()->student->projects->student_group }}</b> con número de matrícula:
            <b style=" text-decoration: underline;">{{ Auth::user()->student->id_student }}</b> la digitalización de la MEMORIA en
            modalidad:
        </p>
        
        <br>

        
        <table>
            <tr style="font-weight:normal; font-family: Arial, sans-serif;">
                <th style="width: 20px; ">X</th>
                <th>Tradicional</th>
                <th style="width: 120px;">Título de Memoria</th>
            </tr>

            <tr style="font-weight:normal; font-family: Arial, sans-serif;">
                <th></th>
                <th>Excelencia Académica</th>
                <th class="border"></th>
            </tr>
            <tr style="font-weight:normal; font-family: Arial, sans-serif;">
                <th></th>
                <th>Excelencia Laboral</th>
                <th class="border" style="text-align: center">{{ Auth::user()->student->projects->project_title }}</th>
            </tr>
            <tr style="font-weight:normal; font-family: Arial, sans-serif;">
                <th style=""></th>
                <th style="width: 150px">Movilidad Internacional</th>
                <th class="border"></th>
            </tr>
            <tr style="font-weight:normal; font-family: Arial, sans-serif;">
                <th style=""></th>
                <th style="width: 150px">Proyecto de Investigación</th>
                <th style="border-top: none;"></th>
            </tr>
        </table>
        <br />
        <br />
        <h5 style="text-align: justify;">Lo anterior para los trámites correspondientes a su titulación.</h5>
        <br>
        <h5 style="text-align: center;"><b>Vo. Bo.</b></h5>
        <div class="contenido">
            <div class="columna" style="margin-right: 20px; margin-bottom:22px;">
                <p><b style="font-family: Arial, sans-serif;">ASESOR ACADÉMICO</b></p>
                <br />
                <hr style="width: 250px;" />
                <p><b style="font-family: Arial, sans-serif;"> Mtro. {{ $adviser_name }}</b></p>
                {{-- <p style="font-size: 10px"><span style="color: white">.</span></p> --}}
            </div>
            <div class="columna" style="margin-bottom:0.5px;">
                <p style="margin-top: 20px;"><b style="font-family: Arial, sans-serif;">COMISIÓN ACADÉMICA</b></p>
                <br />
                <hr style="width: 250px" />
                <p style="font-family: Arial, sans-serif;">Mtro. Mayra Guadalupe Fuentes Sosa</p>
                <p style="font-size: 10px"><b style="font-family: Arial, sans-serif;">Presidente de la Comisión Académica de T.I.</b></p>
            </div>
        </div>

        <table class="footer-table" style="width: 100%;">
            <tbody>
                <tr>
                    <td style="border: 1px solid black; padding: 8px;">Fecha de Revisión: 03 de Mayo de 2019</td>
                    <td style="border: 1px solid black; padding: 8px;">Revisión No.5</td>
                    <td style="border: 1px solid      ; padding: 8px;">AEP-P03-F05</td>
                </tr>
            </tbody>
        </table>


    </div>
</body>

</html>