<?php

namespace App\Http\Controllers\Comments;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Project_management;
class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comment = Comment::paginate(10);
        return view('teacher_dates.information_project',["comments"=>$comment]);
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

        $comments = new Comment();
        $comments->general_comment = $request->input('general_comment');
        $comments->save();

        return redirect('information_project')->with('Notification', 'Comentario creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $projects = Project_management::find($id);
        $comment = Comment::find($id);
        // return view('comment', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comment = Comment::find($id);
        return view('teacher_dates.edit_comment', ['memory' => $comment]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $comment = Comment::find($id);

        $comment->general_comment = $request->all();
        return redirect('teacher_dates.information_project')->with('success', '¡El comentario se realizó correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        return redirect('teacher_dates.information_project')->with('success','¡El comentario se borró correctamente!');
    }
}
