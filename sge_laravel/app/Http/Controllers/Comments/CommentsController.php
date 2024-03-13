<?php

namespace App\Http\Controllers\Comments;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("comments", compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comments");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'general_comment' => 'nullable',
            'title_comment' => 'nullable',
            'objective_comment' => 'nullable',
            'planteamiento_comment' => 'nullable',
            'justification_comment' => 'nullable',
            'activities_comment' => 'nullable'
        ]);

        return redirect()->route('comments.index')->with('success', '¡Se ha realizado con exito el envio!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comments = Comments::find($id);
        //Aqui usa la ruta donde se vayan a mostrar los comentarios
        return view('show-comments', compact('commments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comments = Comments::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comments = Comments::find($id);
        //dd($comments);
        return redirect('comments')->with('notificacion', '¡He ha realizado la edición correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comments = Comments::find($id);
        $comments -> delete();
        return redirect('');
    }
}
