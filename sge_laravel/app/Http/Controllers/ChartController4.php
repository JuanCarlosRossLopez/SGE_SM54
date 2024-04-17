<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use App\Models\Project_management;
use Illuminate\Support\Facades\Log;

class ChartController4 extends Controller
{
    public function projectApprovalData4()
    {
        try {
            // Obtener la cantidad de proyectos por grupo con diferentes estados y nombres de estado
            $projectCountsByStatus = Project_management::join('status_projects', 'project_management.status_id', '=', 'status_projects.id')
                ->selectRaw('status_projects.status_project AS status_name, COUNT(project_management.id) AS status_count')
                ->groupBy('status_projects.status_project')
                ->get();
    
            // Preparar los datos en un formato compatible con Chart.js
            $labels = [];
            $status_count = [];
    
            foreach ($projectCountsByStatus as $project) {
                $labels[] = $project->status_name; // Usar el nombre del estado como label
                $status_count[] = $project->status_count;
                
            }
    
            // Preparar la respuesta en formato JSON
            $response = [
                'success' => true,
                'labels' => $labels,
                'status_count' => $status_count
            ];
    
            // Devolver la respuesta como JSON
            return response()->json($response);
        } catch (\Exception $e) {
            Log::error('Error al obtener la cantidad de proyectos por grupos: ' . $e->getMessage());
    
            $response = [
                'success' => false,
                'message' => 'Error al obtener la cantidad de proyectos por grupos. Por favor, contacta al administrador.'
            ];
    
            return response()->json($response, 500);
        }
    }
}