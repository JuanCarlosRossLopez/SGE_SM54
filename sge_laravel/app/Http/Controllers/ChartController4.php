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
            $projectCountsByStatus = Project_management::join('status_project', 'project_management.status_id', '=', 'status_project.id')
                ->selectRaw('status_project.status_project AS status_name, COUNT(project_management.id) AS status_count')
                ->groupBy('project_management.status_id', 'status_project.status_project')
                ->get();

            $labels = [];
            $status_count = [];

            foreach ($projectCountsByStatus as $project) {
                $labels[] = $project->status_name;
                $status_count[] = $project->status_count;
            }

            $response = [
                'success' => true,
                'labels' => $labels,
                'status_count' => $status_count
            ];

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
