<?php

namespace App\Http\Controllers\Calendar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        $month = date("Y-m");
        $data = $this->calendarMonth($month);
        $mes = $data['month'];

        // Obtiene el mes en español
        $mesSpanish = $this->spanishMonth($mes);

        return view('index', [
            'data' => $data,
            'mes' => $mes,
            'mesSpanish' => $mesSpanish,
        ]);
    }

    // Ruta para un mes específico
    public function indexMonth($month)
    {
        $data = $this->calendarMonth($month);
        $mes = $data['month'];

        // Obtiene el mes en español
        $mesSpanish = $this->spanishMonth($mes);

        return view('index', [
            'data' => $data,
            'mes' => $mes,
            'mesSpanish' => $mesSpanish,
        ]);
    }

    public static function calendarMonth($month)
    {
        $dayLast = date("Y-m-d", strtotime("last day of " . $month));
        $fecha = date("Y-m-d", strtotime("first day of " . $month));

        $newDate = strtotime($fecha);
        $weekDay = date("N", $newDate) % 7;
        $newDate -= $weekDay * 86400;
        $dateIni = date("Y-m-d", $newDate);

        $week1 = date("W", strtotime($fecha));
        $week2 = date("W", strtotime($dayLast));

        $semana = $week1 == 1 && $week2 >= 52 ? 5 : $week2 - $week1 + 1;
        
        $dataFecha = $dateIni;
        $calendario = [];
        $iWeek = 0;
        while ($iWeek < $semana) {
            $iWeek++;
            $weekData = [];
            for ($iDay = 0; $iDay < 7; $iDay++) {
                $dataFecha = date("Y-m-d", strtotime($dataFecha . "+ 1 day"));
                $dataNew = [
                    'mes' => date("M", strtotime($dataFecha)),
                    'dia' => date("d", strtotime($dataFecha)),
                    'fecha' => $dataFecha,
                ];
                array_push($weekData, $dataNew);
            }
            $dataWeek = [
                'semana' => $iWeek,
                'datos' => $weekData,
            ];
            array_push($calendario, $dataWeek);
        }

        $nextMonth = date("Y-m", strtotime($month . "+ 1 month"));
        $lastMonth = date("Y-m", strtotime($month . "- 1 month"));
        $monthStr = date("M", strtotime($month));
        $yearMonth = date("Y", strtotime($month));

        return [
            'next' => $nextMonth,
            'month' => $monthStr,
            'year' => $yearMonth,
            'last' => $lastMonth,
            'calendar' => $calendario,
        ];
    }

    public static function spanishMonth($month)
    {
        $meses = [
            'Jan' => 'Enero',
            'Feb' => 'Febrero',
            'Mar' => 'Marzo',
            'Apr' => 'Abril',
            'May' => 'Mayo',
            'Jun' => 'Junio',
            'Jul' => 'Julio',
            'Aug' => 'Agosto',
            'Sep' => 'Septiembre',
            'Oct' => 'Octubre',
            'Nov' => 'Noviembre',
            'Dec' => 'Diciembre',
        ];

        return $meses[$month] ?? $month;
    }
}