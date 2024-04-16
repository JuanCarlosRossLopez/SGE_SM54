<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project_management;
use Illuminate\Support\Facades\Log;

class ChartController extends Controller
{
    public function projectApprovalData()
{

   
    try {
        // Obtener la cantidad de proyectos aprobados por carrera
        $approvedProjectsByCareer = Project_management::selectRaw('career, COUNT(*) AS approved_count')
            ->whereHas('project_status', function ($query) {
                $query->whereIn('status_project', ['Aprobado', 'Finalizado']);
            })
            ->groupBy('career')
            ->get();

        // Preparar los datos en un formato compatible con Chart.js
        $labels = [];
        $counts = [];

        foreach ($approvedProjectsByCareer as $project) {
            $labels[] = $project->career;
            $counts[] = $project->approved_count;
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
        Log::error('Error al obtener la cantidad de proyectos aprobados por carrera: ' . $e->getMessage());

        $response = [
            'success' => false,
            'message' => 'Error al obtener la cantidad de proyectos aprobados por carrera. Por favor, contacta al administrador.'
        ];

        return response()->json($response, 500);
    }
}

}
