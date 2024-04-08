<?php

namespace App\Http\Controllers\ActivitiesCalendar;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Comments;
use Illuminate\Http\Request;

class ActivitiesCalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comments::with('teacher')->get();

        //dd($comments);
        //$data[0] = ['label' => 'Data'];

        return view('students.activities_calendar', compact('comments'));

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