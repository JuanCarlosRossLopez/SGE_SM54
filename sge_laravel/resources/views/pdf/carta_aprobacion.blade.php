<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aprobación de Memoria</title>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        .contenido {
            margin-top: 70px;
            display: flex;
            text-align: center;
        }
        .columna {
            display: inline-block;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td {
            border: 1px solid black;
            padding: 6px;
            text-align: left;
            font-size: 15px;
        }

        h4,
        p {
            font-size: 17px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        ,
        .ptext {
            line-height: 1.6;
        }

        img {
            width: 720px;
            height: 140px;
            margin-left: -60px;
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
    <div class="container" style="">
        <img src="{{ $imagen_path }}" alt="logo UT" style="align-self: center">
        <h4 style="text-align: center;">CARTA DE APROBACIÓN DE MEMORIA</h4>
        <p style="text-align: right;">Cancún, Quintana Roo; a 16 de Abril de 2024</p>
        <h4>DRA.ROCÍO ARCEO DÍAZ</h4>
        <h4>DIRECTORA DE LA CARRERA DE TSU EN TI, ÁREA<br /> DESAROLLO DE SOFTWARE MULTIPLATAFORMA <br /> DIVISIÓN DE
            INGENIERÍA Y TECNOLOGÍA </h4>
        <h4>P R E S E N T E</h4>
        <p class="ptext">
            Sirva la presente para informarle que el estudiante 
            ha concluido satisfactoriamente la elaboración de su memoria titulada {{ Auth::user()->student->projects->project_title }} que
            como requisito para la conclusión de su estadía y proceso de titulación
            establece la normatividad de la Universidad Tecnológica de Cancún.
        </p>
        <p class="ptext">
            Así mismo, hago de su conocimiento que la memoria en mención<br />
            cuenta con la correspondiente revisión y por consiguiente aprobación<br />
            por quienes fungimos como asesores en el ámbito empresarial y<br />
            académico.
        </p>
        <p class="ptext">Sin otro particular al respecto, quedamos de usted.</p>
        <div class="contenido">
            <div class="columna" style="margin-right: 20px;">
                <p>ASESOR EMPRESARIAL</p>
                <br/>
                <hr style="width: 250px;"/>
                <p>{{ Auth::user()->student->projects->project_advisor}}</p>
            </div>
            <div class="columna">
                <p>ASESOR ACADÉMICO</p>
                <br/>
                <hr style="width: 250px"/>
                <p>Mtro/a. {{$adviser_name}}</p>
            </div>
        </div>
        <table class="footer-table">
            <tbody>
                <tr>
                    <td>Fecha de revisión: 03 de mayo de 2024</td>
                    <td>Revisión No. 5</td>
                    <td>AEP-P03-F04</td>
                </tr>
            </tbody>
        </table>


    </div>

</body>

</html>
