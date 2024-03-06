<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/envio_informes', function(){
    return view('report_generation.teacher_table');
})->name('envio');
Route::get('/descarga_informes', function(){
    return view('report_generation.student_download');
});
Route::get('/informes', function(){
    return view('report_generation.student_generation');
});
Route::get('/visualizar', function(){
    return view('report_generation.teacher_generation');
});
Route::get('/aprobacion_memoria', function(){
    return view('report_generation.pdf_');
});
Route::get('/pdf_cedula', function(){
    return view('report_generation.pdf_cedula');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
