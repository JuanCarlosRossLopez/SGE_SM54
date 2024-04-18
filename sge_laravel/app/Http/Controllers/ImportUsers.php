<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Imports\TeachersImport;
use Illuminate\Http\Request;

class ImportUsers extends Controller
{
    public function import(Request $request)
    {
        $file = $request->file('excel_file');

        Excel::import(new UsersImport, $file);

        return redirect()->back()->with('success', 'Usuarios importados correctamente.');
    }
    public function importTeacher(Request $request)
    {
        $file = $request->file('excel_file');

        Excel::import(new TeachersImport, $file);

        return redirect()->back()->with('success', 'Usuarios importados correctamente.');
    }

}
