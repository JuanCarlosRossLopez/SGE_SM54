<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Group; // Importa el modelo Group
use Illuminate\Support\Facades\Log;

class ChartController3 extends Controller
{
    public function projectApprovalData3()
    {
        try {
            // Obtener la cantidad de estudiantes aprobados por grupo con el nombre del grupo
            $approvedStudentsByGroup = Students::join('groups', 'students.group_id', '=', 'groups.id')
                ->selectRaw('groups.group_name AS group_name, COUNT(students.id) AS approved_count')
                ->groupBy('students.group_id', 'groups.group_name')
                ->get();

            // Preparar los datos en un formato compatible con Chart.js
            $labels = [];
            $counts = [];

            foreach ($approvedStudentsByGroup as $student) {
                $labels[] = $student->group_name; // Nombre del grupo en lugar del ID
                $counts[] = $student->approved_count;
            }

            // Preparar la respuesta en formato JSON
            $response = [
                'success' => true,
                'labels' => $labels,
                'counts' => $counts
            ];

            // Devolver la respuesta como JSON
            return response()->json($response);
        } catch (\Exception $e) {
            Log::error('Error al obtener la cantidad de estudiantes aprobados por grupos: ' . $e->getMessage());

            $response = [
                'success' => false,
                'message' => 'Error al obtener la cantidad de estudiantes aprobados por grupos. Por favor, contacta al administrador.'
            ];

            return response()->json($response, 500);
        }
    }
}
