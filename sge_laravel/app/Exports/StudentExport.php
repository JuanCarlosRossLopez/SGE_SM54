<?php

namespace App\Exports;

use App\Models\Teaching_advice;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        // Obtener los datos que necesitas exportar
        $teachingAdvices = Teaching_advice::with(['teacher', 'student.projectManagement'])->get();

        // Formatear los datos para exportarlos
        $data = [];
        foreach ($teachingAdvices as $advice) {
            $data[] = [
                'Asesor' => $advice->teacher ? $advice->teacher->name_teacher : '',
                'Alumno' => $advice->student ? $advice->student->student_name : '',
                'Anteproyecto' => $this->getProjectTitles($advice),
                'Amonestaciones' => $advice->student ? $advice->student->strike : '',
            ];
        }

        return collect($data);
    }

    // Método para obtener los títulos de los anteproyectos
    protected function getProjectTitles($advice)
    {
        if ($advice->student && $advice->student->projectManagement->isNotEmpty()) {
            $titles = $advice->student->projectManagement->pluck('project_title')->implode(', ');
            return $titles;
        } else {
            return 'Sin anteproyecto';
        }
    }

    // Encabezados de las columnas en el archivo Excel
    public function headings(): array
    {
        return [
            'Asesor',
            'Alumno',
            'Anteproyecto',
            'Amonestaciones',
        ];
    }
}

