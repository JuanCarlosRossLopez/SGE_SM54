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
            margin-top: -50px;
        }

        img {
            width: 100%;
            max-width: 720px;
            height: auto;
            display: block;
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
            padding: 8px;
            text-align: left;
            font-size: 15px;
        }

        h3 {
            text-align: center;
            margin-bottom: 10px;
        }

        h5 {
            text-align: justify;
            margin-bottom: 10px;
        }

        .footer-table {
            margin-top: 20px;
            width: 100%;
            text-align: right;
        }

        .footer-table td {
            font-size: 12px;
            padding-top: 10px;
        }

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


        .containerr {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .containerr p {
            margin-left: 1px;
            text-align: right;
        }

        .contenido {
            margin-top: 70px;
            display: flex;
            text-align: center;
        }

        .table-contain {
            margin-top: 50px;
            display: flex;
            text-align: center;
        }

        .table-contain td {
            border: 1px solid black;
            padding: 3px;
            text-align: left;
            font-size: 15px;
        }

        .columna {
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="{{ $imagen_path }}" alt="Logo UT">



        <div class="containerr">
            <p><b>Asunto:</b> Sanción por incumplimiento.<br />
                <a>Cancún, Q. Roo;</a> <span>a <span style="text-decoration: underline;">16</span> de <span
                        style="text-decoration: underline;">Abril</span> de 20<span
                        style="text-decoration: underline;">24</span></span>
            </p>
        </div>


        <p style="text-decoration: underline; font-weight: bold;">
            {{ Auth::user()->student ? Auth::user()->student->student_name : 'No se encontró un estudiante asociado' }}
        </p>

        <p style="text-decoration: underline; font-weight: bold; margin-top: -10px;">
            {{ Auth::user()->student ? Auth::user()->student->id_student : 'No se encontró un estudiante asociado' }}
        </p>
        <p style="text-decoration: underline; font-weight: bold; margin-top: -10px;">
            {{ Auth::user()->student->projects->educational_program }}</p>


        <p>Debido a que a la fecha no ha cumplido con la entrega de los avances de memoria y/o documentación para
            Gestión Empresarial, por este conducto le informo que de conformidad con el Procedimiento y el Reglamento de
            las Prácticas Profesionales se ha hecho acreedor a una sanción que consiste en:</p>
        <div class="table-contain">
            <div style="display: inline-block;">
                <table style="margin-left: -5px; margin-bottom: 18px;">
                    <tr>
                        <td style="width: 40px" colspan="6">POR MOTIVOS ACADÉMICOS</td>
                    </tr>
                    <tr>
                        <th style="width: 15px;"></th>
                        <td colspan="5">Amonestación escrita.</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td colspan="5">Amonestación con *__ horas de labor social.</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td colspan="5">Cancelación de la Estadía</td>
                    </tr>
                </table>
            </div>
            <div style="display: inline-block;">
                <table style="margin-left: -15px;">
                    <tr>
                        <td style="width: 40px" colspan="6">POR TEMAS RELACIONADOS EN GESTIÓN EMPRESARIAL</td>
                    </tr>
                    <tr>
                        <th style="width: 15px;"></th>
                        <td colspan="5">Amonestación escrita.</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td colspan="5">Amonestación con * __ horas de labor social.</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td colspan="5">Cancelación de la Estadía</td>
                    </tr>
                </table>
            </div>
        </div>

        <p>Asimismo, y con el fin de evitar la cancelación del proceso, se le exhorta a
            cumplir dentro de los cinco
            días hábiles a partir de la recepción de la presente.<br /><br />
            Sin otro particular, quedo de usted para cualquier aclaración al respecto.</p>

        <div class="contenido" style="margin-top: 9.5%;">
            <div class="columna" style="margin-right: 20px;">
                <p><b>A T E N T A M E N T E</b></p>
                <br />
                <br />
                <br />
                <hr style="width: 300px;" />
                <p>Nombre y firma del Asesor (a) Académico (a)</p>
            </div>
            <div class="columna">
                <p><b>ENTERADO</b></p>
                <br />
                <br />
                <br />
                <hr style="width: 300px" />
                <p>Nombre y firma del (a) Estudiante</p>
            </div>
        </div>

        <p style="margin-top: -10px;"><b>* Nota:</b>La sanción deberá ser entre 10 a 20 horas de labor social en la
            Dirección o departamento
            que correspondan
            las amonestaciones.
        </p>
        <div style="">
            <h6 style="">C.c.p Dirección de División</h6>
            <h6 style="margin-top: -25px;">C.c.p Expediente del(a) Estudiante</h6>
        </div>

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
