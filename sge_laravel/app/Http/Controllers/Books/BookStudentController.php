<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;

class BookStudentController extends Controller
{
    public function create(){
        return view ('Students.Boks.index');
    }
}
