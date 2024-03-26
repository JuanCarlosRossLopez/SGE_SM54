<?php

namespace App\Http\Controllers\ProjectLikes;

use App\Http\Controllers\Controller;
use App\Models\Project_Likes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectLikesController extends Controller
{
    public function like(Project_Likes $project_Likes)
    {
        if (Auth::check()) {
            $usuario = Auth::user();
            $project_Likes->likes()->attach($usuario);
        }
        return back();

        /* prueben esto luego a ver si está bien xd
        if (Auth::check()) {
            $user = Auth::user();
    
            // Validar si ya se hizo like
            $hasLiked = $project_Likes->likes()->where('user_id', $user->id)->exists();
    
            if ($hasLiked) {
                // Si hay uno entonces se quita
                $project_Likes->likes()->detach($user);
            } else {
                // Si no hay uno entonces se agrega
                $project_Likes->likes()->attach($user);
            }
        }
    
        return back();*/
    }

    public function unlike(Project_Likes $project_Likes)
    {
        if (Auth::check()) {
            $usuario = Auth::user();
            $project_Likes->likes()->detach($usuario);
        }
        return back();
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
