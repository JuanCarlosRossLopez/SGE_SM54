<?php

namespace App\Http\Controllers\DocumentSend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Notifications;
use Auth;

class DocumentsDownloadController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;

        if ($userId) {
            $downloadAccess = Notifications::where('user_id', $userId)->get();
            $access = $downloadAccess->map(function ($access) {
                switch($access->type_notification) {
                    case "Cédula de Anteproyecto":
                        return 1;
                        break;
                    case "Carta de Autorización Digitalización":
                        return 2;
                        break;
                    case "Carta de Aprobación Memoria":
                        return 3;
                        break;
                    case "Carta de Amonestación":
                        return 4;
                        break;
                    default:
                        return 0;
                }
            });
            
            return view('report_generation.student_download', compact('access'));
        }
    
        return redirect()->back();
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
