<?php

namespace App\Http\Controllers\Comments;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Cargar los comentarios junto con las relaciones 'teacher' y 'anteproject' si es necesario
        $comments = Comments::with('teacher')->get();

        // Pasar los comentarios a la vista
        return view('students.activities_calendar', ['dashboard_alumno'=>$comments]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("teacher_dates.create_comment");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'general_comment'=>'required|string'
        ]);

        $comments = new Comments();
        $comments->general_comment = $request->input('general_comment');
        $comments->save();

        return redirect('information_project')->with('Notification', 'Comentario creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment = Comments::find($id);
        return view('information_project', compact('comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comment = Comments::find($id);
        return view('teacher_dates.edit_comment', ['memory' => $comment]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $comment = Comments::find($id);

        $comment->general_comment = $request->all();
        return redirect('teacher_dates.information_project')->with('success', '¡El comentario se realizó correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comment = Comments::find($id);
        $comment->delete();

        return redirect('teacher_dates.information_project')->with('success','¡El comentario se borró correctamente!');
    }
}
