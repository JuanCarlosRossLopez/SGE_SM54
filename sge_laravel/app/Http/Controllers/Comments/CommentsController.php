<?php

namespace App\Http\Controllers\Comments;

use App\Http\Controllers\Controller;
use App\Models\Comments;
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
        $comment = Comments::paginate(10);
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
    public function store(Request $request) : RedirectResponse
    {
        // $request->validate([
        //     'general_comment'=>'required|string',
        //     'teacher_id'=>'required|string',
        //     'anteproject_id'=>'required|string'
        // ]);

        $comments = new Comments();
        $comments->general_comment = $request->input('general_comment');
        $comments->teacher_id = $request->input('teacher_id');
        $comments->project_management_id = $request->input('project_management_id');
        $comments->save();

        $proyectoid = $comments -> project_management_id;

        return redirect('information_project')->with('Notification', 'Comentario creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $projects = Project_management::find($id);
        $comment = Comments::find($id);
        
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
