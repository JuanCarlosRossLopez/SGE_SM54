<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project_management;
use App\Models\Students;
use Illuminate\Support\Facades\Log;

class ChartController3 extends Controller
{
    public function projectApprovalData3()
{
    try {
        // Obtener la cantidad de proyectos aprobados por carrera
        $approvedStudentsByGroup = Students::selectRaw('group_id, COUNT(*) AS approved_count')
            ->groupBy('group_id')
            ->get();
            // $groups = Group::all(); // Ajusta esto según el modelo y la relación real
            // return view('super_admin.dashboard_presidencia', compact('groups'));

        // Preparar los datos en un formato compatible con Chart.js
        $labels = [];
        $counts = [];

        foreach ($approvedStudentsByGroup as $student) {
            $labels[] = $student->group_id;
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
        Log::error('Error al obtener la cantidad de proyectos aprobados por grupos: ' . $e->getMessage());

        $response = [
            'success' => false,
            'message' => 'Error al obtener la cantidad de proyectos aprobados por grupos. Por favor, contacta al administrador.'
        ];

        return response()->json($response, 500);
    }
}

public function filterByGroups(Request $request)
    {
        try {
            $groupName = $request->input('group_name');

            $approvedProjectsByGroup = Project_management::selectRaw('student_group, COUNT(*) AS approved_count')
                ->where('student_group', $groupName)
                ->whereHas('project_status', function ($query) {
                    $query->whereIn('status_project', ['Aprobado', 'Finalizado']);
                })
                ->groupBy('student_group')
                ->first();

            $response = [
                'success' => true,
                'group_name' => $groupName,
                'approved_count' => $approvedProjectsByGroup ? $approvedProjectsByGroup->approved_count : 0
            ];

            return response()->json($response);
        } catch (\Exception $e) {
            Log::error('Error al filtrar proyectos por grupo: ' . $e->getMessage());

            $response = [
                'success' => false,
                'message' => 'Error al filtrar proyectos por grupo. Por favor, contacta al administrador.'
            ];

            return response()->json($response, 500);
        }
    }
}

