<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cédula de Anteproyecto de Estadía</title>
    <style>
        .container {
            position: relative;
            height: 100vh;
            padding: 3.8rem;
            padding-bottom: 50px;
            font-family: Arial, Helvetica, sans-serif;
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

        h4,
        p {
            font-size: 15px;
        }

        .no-bottom-border {
            border-bottom: 1px solid white;
        }

        .solid-border {
            border: 1px solid white;
        }

        img {
            width: 720px;
            height: 140px;
            margin-left: -60px;
        }

        textarea {
            width: 100%;
            min-height: 100px;
            resize: none;
            overflow: hidden;
        }

        .footer-table {
            position: absolute;
            padding: 2.5rem;
            bottom: 100px;
            left: 0;
            right: 0;
        }
    </style>

<body>
    <div class="container" style="margin-top: -100px">
        <img src="{{ $imagen_path }}" alt="logo UT" style="align-self: center">
        <h4 style="text-align: center;">CÉDULA DE ANTEPROYECTO DE ESTADÍA</h1>
            <table>
                <tr>
                    <th> </th>
                    <td class="solid-border">TSU</td>
                </tr>
                </br>
                <tr>
                    <th> </th>
                    <td class="solid-border">LICENCIATURA / INGENIERÍA</td>
                </tr>
            </table>
            </br>

            <table>
                <tr>
                    <th>División:</th>
                    <td colspan="5">Ingeniería y Tecnología.</td>
                </tr>

                <tr>
                    <th>Programa educativo:</th>
                    <td colspan="5"></td>
                </tr>

                <tr>
                    <th>Título del anteproyecto:</th>
                    <td colspan="5"></td>
                </tr>

                <tr>
                    <th>Nombre del alumno:</th>
                    <td colspan="5"></td>
                </tr>

                <tr>
                    <th>Matrícula:</th>
                    <td colspan="2"></td>
                    <th style="width: 120px;">Grupo:</th>
                    <td colspan="2"></td>
                </tr>

                <tr>
                    <th>Teléfono:</th>
                    <td colspan="2"></td>
                    <th>Correo electrónico:</th>
                    <td colspan="2"></td>
                </tr>

                <tr>
                    <th style="width: 140px;">Fecha de inicio del Proyecto:</th>
                    <td colspan="2"></td>
                    <th style="width: 150px">Fecha de término del proyecto:</th>
                    <td colspan="2"></td>
                </tr>
            </table>
            </br></br>
            <table>
                <tr>
                    <th style="width: 150px;">Empresa:</th>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <th>Dirección:</th>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <th>Nombre del asesor empresarial:</th>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <th>Cargo:</th>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <th>Teléfono:</th>
                    <td></td>
                    <th style="width: 50px;">Correo:</th>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <th>Área donde se realizará el proyecto:</th>
                    <td colspan="4"></td>
                </tr>
            </table>
            <table class="footer-table">
                <tbody>
                    <tr>
                        <td>Fecha de revisión: 03 de mayo de 2019</td>
                        <td>Revisión No. 5</td>
                        <td>AEP-P03-F04</td>
                    </tr>
                </tbody>
            </table>
            </br>
            <img src="{{ $imagen_path }}" alt="logo UT">
            <ol>
                <li>
                    <h4>Objetivo general.</h4>
                    <textarea rows="10"></textarea>
                </li>
                <li>
                    <h4>Planteamiento del Problema: exponer los aspectos, elementos y relaciones del problema.</h4>
                    <textarea rows="10"></textarea>
                </li>
                <li>
                    <h4>Justificación: debe manifestarse de manera clara y precisa del por qué y para qué se va llevar a
                        cabo el estudio. Causas y propósitos que motivan la investigación. Contesta las preguntas:
                        ¿Cuáles son los beneficios que este trabajo proporcionará? ¿Quiénes serán los beneficiados?
                        ¿Cuál es su utilidad?</h4>
                    <textarea rows="10"></textarea>
                </li>
                <li>
                    <h4>Actividades para realizar: listar las actividades a llevar a cabo en orden.</h4>
                    <textarea rows="10"></textarea>
                </li>
            </ol>
            <table class="footer-table">
                <tbody>
                    <tr>
                        <td>Fecha de revisión: 03 de mayo de 2019</td>
                        <td>Revisión No. 5</td>
                        <td>AEP-P03-F04</td>
                    </tr>
                </tbody>
            </table>

            <img src="{{ $imagen_path }}" alt="logo UT">
            <h4 style="text-align: center;">EVALUACIÓN DEL ANTEPROYECTO</h4>
            <p style="text-align: center; margin-top: -20px;">Para ser llenado por la Comisión de Estadía</p>
            <p>Se aprueba: _____ Si _____ No</p>

            <table>
                <tr>
                    <th style="width: 120px;" rowspan="8">Observaciones y/o comentarios</th>
                    <td rowspan="8" style="border-right: 1px solid white;"></td>
                    <td class="no-bottom-border"></td>
                </tr>
                <tr>
                    <td class="no-bottom-border"></td>
                </tr>
                <tr>
                    <td class="no-bottom-border"></td>
                </tr>
                <tr>
                    <td class="no-bottom-border"></td>
                </tr>
                <tr>
                    <td class="no-bottom-border"></td>
                </tr>
                <tr>
                    <td class="no-bottom-border"></td>
                </tr>
                <tr>
                    <td class="no-bottom-border"></td>
                </tr>
                <tr>
                    <td></td>
                </tr>

            </table>
            </br></br>
            <table>
                <tr>
                    <th style="width: 120px;">Asesor académico</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Correo electrónico</th>
                    <td></td>
                </tr>
            </table>
            </br>
            <table class="footer-table">
                <tbody>
                    <tr>
                        <td>Fecha de revisión: 03 de mayo de 2019</td>
                        <td>Revisión No. 5</td>
                        <td>AEP-P03-F04</td>
                    </tr>
                </tbody>
            </table>

    </div>

</body>

</html>
