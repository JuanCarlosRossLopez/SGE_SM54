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


Route::get('/Perfil_Teacher', function () {return view('teachers.userTeacher');})->name('perfil_maestro');
Route::get('/Perfil_Student', function () {return view('students.userStudent');})->name('perfil_estudiante');
Route::get('/Perfil_Admin', function () {return view('super_admin.userAdmin');})->name('perfil_admin');
Route::get('/registro', function (){return view ('registro');});
Route::get('/DashboardD', function (){return view ('dashDireccion');});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
