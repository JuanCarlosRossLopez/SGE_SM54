<?php

namespace App\Http\Controllers;

use App\Exports\StudentExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function exportToExcel()
    {
        return Excel::download(new StudentExport, 'Control_de_Estadias.xlsx');
    }
}