<?php

namespace App\Http\Controllers\Calendar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerCalendar extends Controller
{
    public function index()
    {
        $month = date("Y-m");
        $data = $this->calendar_month($month);
        $mes = $data['month'];

        //Aquí se obtendrá el mes en español
        $mespanish = $this->spanish_month($mes);
        $mes = $data['month'];

        return view(
            'index',
            [
                'data' => $data,
                'mes' => $mes,
                'mespanish' => $mespanish
            ]
        );
    }

    //Esta es para una ruta con mes
    public function index_month($month)
    {
        $data = $this->calendar_month($month);
        $mes = $data['month'];

        //Aquí también se obtendrá el mes con español
        $mespanish = $this->spanish_month($mes);
        $mes = $data['month'];

        return view(
            'index',
            [
                'data' => $data,
                'mes' => $mes,
                'mespanish' => $mespanish
            ]
        );
    }

    public static function calendar_month($month)
    {
        //Es $mes = date("Y-m")
        $mes = $month;

        //Obtener el último día de cada mes
        $daylast = date("Y-m-d", strtotime("last day of" . $mes));

        //Obtener el día del mesa
        $fecha = date("Y-m-d", strtotime("first day of" . $mes));
        $dasymonth = date("d", strtotime($fecha));
        $monthmonth = date("m", strtotime($fecha));
        $yearsmonth = date("Y", strtotime($fecha));

        //Obtener Lunes de la semana 1
        $newDate = mktime(0,0,0,$monthmonth,$dasymonth, $yearsmonth);
        $weekDay = date("w", $newDate);
        $newDate = $newDate - ($weekDay*24*3600); //Se restan los segundos totales de los días transcurridos

        $dateini = date("Y-m-d", $newDate);
        //$dateini = date("Y-m-d", strtotime($dateini."+ 1 day"))
        //Primera semana del mes
        $semana1 = date("W",strtotime($fecha));
        //Última semana del mes
        $semana2 = date("W",strtotime("$daylast"));

        //Para el mes de diciembre
        if (date("m", strtotime($mes)) == 12) {
            $semana = 5;
        } else {
            $semana = ($semana2-$semana1) + 1;
        }
        //Semana todal del mes
        $datafecha = $dateini;
        $calendario = array();
        $iweek = 0;
        while ($iweek < $semana):
            $iweek++;
            //echo "Semana $iweek <br>"
            //
            $weekdata = [];
            for ($iday=0; $iday < 7; $iday++){
                $datafecha = date("Y-m-d",strtotime($datafecha."+ 1 day"));
                $datanew['mes'] = date("M", strtotime($datafecha));
                $datanew['dia'] = date("d", strtotime($datafecha));
                $datanew['fecha'] = $datafecha;

                //PARA AGREGAR LA CONSULTA DE LOS EVENTOS
                //++++++++++
                array_push($weekdata,$datanew);
            }
            $dataweek['semana'] = $iweek;
            $dataweek['datos'] = $weekdata;
            //$datafecha['horario] = $datahorario;
            array_push($calendario,$dataweek);
        endwhile;

        $nextmonth = date("Y-M",strtotime($mes."+ 1 month"));
        $lastmonth = date("Y-M",strtotime($mes."- 1 month"));
        $month = date("M",strtotime($mes));
        $yearsmonth = date("Y",strtotime($mes));
        //$month = date("M",strtotime("2024-03"));
        $data = array(
            'next' => $nextmonth,
            'month' => $month,
            'year' => $yearsmonth,
            'last' => $lastmonth,
            'calendar' => $calendario,
        );
        return $data;
    }

    public static function spanish_month($month)
    {
        $mes = $month;
        if ($month=="Jan") {
            $mes = "Enero";
        }
        elseif ($month=="Feb") {
            $mes = "Febrero";
        }
        elseif ($month=="Mar") {
            $mes = "Marzo";
        }
        elseif ($month=="Apr") {
            $mes = "Abril";
        }
        elseif ($month=="May") {
            $mes = "Mayo";
        }
        elseif ($month=="Jun") {
            $mes = "Junio";
        }
        elseif ($month=="Jul") {
            $mes = "Julio";
        }
        elseif ($month=="Aug") {
            $mes = "Agosto";
        }
        elseif ($month=="Sep") {
            $mes = "Septiembre";
        }
        elseif ($month=="Oct") {
            $mes = "Octubre";
        }
        elseif ($month=="Nov") {
            $mes = "Noviembre";
        }
        elseif ($month=="Dec") {
            $mes = "Diciembre";
        }
        else {
            $mes = $month;
        }
        return $mes;
    }
}

