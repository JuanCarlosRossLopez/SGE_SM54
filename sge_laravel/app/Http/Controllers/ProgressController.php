<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project_management;
use Illuminate\Support\Facades\Log;

class ProgressController extends Controller
{
    public function getPercentage()
    {
        try {
            // Contar el total de proyectos
            $totalProjects = Project_management::count();

            // Contar los proyectos finalizados (estado = "Aprobado")
            $completedProjects = Project_management::whereHas('project_status', function ($query) {
                $query->whereIn('status_project', ['Aprobado', 'Finalizado']);
            })->count();
            

            // Calcular el porcentaje de proyectos finalizados
            if ($totalProjects > 0) {
                $percentage = ($completedProjects / $totalProjects) * 100;
            } else {
                $percentage = 0;
            }
            
            // Preparar la respuesta en formato JSON
            $response = array(
                'success' => true,
                'percentage' => $percentage
            );
            
            // Devolver la respuesta como JSON
            return response()->json($response);
        } catch (\Exception $e) {
            Log::error('Error al obtener el porcentaje: ' . $e->getMessage());

            $response = array(
                'success' => false,
                'message' => 'Error al obtener el porcentaje. Por favor, contacta al administrador.'
            );

            return response()->json($response, 500);
        }
    }

    public function getFinishedPercentage()
    {
        try {
            // Contar el total de proyectos
            $totalProjects = Project_management::count();

            // Contar los proyectos finalizados (estado = "Finalizado")
            $finishedProjects = Project_management::whereHas('project_status', function ($query) {
                $query->where('status_project', 'Finalizado');
            })->count();

            // Calcular el porcentaje de proyectos finalizados
            if ($totalProjects > 0) {
                $percentage = ($finishedProjects / $totalProjects) * 100;
            } else {
                $percentage = 0;
            }
            
            // Preparar la respuesta en formato JSON
            $response = array(
                'success' => true,
                'percentage' => $percentage
            );
            
            // Devolver la respuesta como JSON
            return response()->json($response);
        } catch (\Exception $e) {
            Log::error('Error al obtener el porcentaje: ' . $e->getMessage());

            $response = array(
                'success' => false,
                'message' => 'Error al obtener el porcentaje. Por favor, contacta al administrador.'
            );

            return response()->json($response, 500);
        }
    }
}
