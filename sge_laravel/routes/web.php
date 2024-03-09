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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/memoria', function(){
    return view('Memorias.memoria');
})->name('/memoria');

Route::get('/memorias', function(){
    return view('Memorias.memorias');
})->name('/memorias');

Route::get('/HMemorias', function(){
    return view('Memorias.historial_memoria');
})->name('/HMemorias');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/gestion-anteproyecto', function () {
    return view('anteproject_cedule.table_anteprojects');
});

require __DIR__.'/auth.php';
