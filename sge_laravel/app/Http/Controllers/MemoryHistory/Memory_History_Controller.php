<?php

namespace App\Http\Controllers\MemoryHistory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Memories;
use Illuminate\Support\Facades\Storage;


class Memory_History_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $memories = Memories::paginate(10);
        return view('Memories.memory_history',["memories"=>$memories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Test_memory.create_memory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'memory_name'=>'required|string',
            'memorie_pdf'=>'required|string',
            'student_id'=>'null'
        ]);

        $memories = new Memories();
        $memories->memory_name = $request->input('memory_name');
        $memories->memorie_pdf = $request->input('memorie_pdf');
        $memories->student_id = $request->input('student_id');
        $memories->save();


        return redirect('memory')->with('Notification', 'Memory created successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $memory=Memories::find($id);
        return view('memory_history', compact('memory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $memory = Memories::find($id);
        return view('Test_memory.edit_memory', ['memory' => $memory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RediectResponse
    {
        //
        $memory = Memories::find($id);

        $memory->update($request->all());
        return redirect('Test_memory.memory_history')->with('success', 'Memory update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $memory = Memories::find($id);
        $memory->delete();
        
        return redirect('Test_memory.memory_history');
    }

    public function downloadPdf(string $id) {

        $memory=Memories::find($id);

        if(!$memory){
            abort(404, 'Memory not found');
        }

        $pdfPath = $memory->memorie_pdf;

        if(Storage::exists($pdfPath)){
            return response()->download(storage_path('app/' . $pdfPath));
        } else {
            abort(404, 'PDF file Not Found');
        }
    }
}
