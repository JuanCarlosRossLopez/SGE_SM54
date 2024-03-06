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


#RUTAS EQUIPO ROCHA

Route::get('/iniciar_session',function(){
    return view('login.login');
});
Route::get('/', function () {
    return view('students.activities_calendar');
})->name('activities_calendar');

Route::get('/anteproyecto', function () {
    return view('students.anteproyecto');
})->name('anteproyecto');


Route::get('/recuperar_contraseña',function(){
    return view('login.recovery_password');
});

Route::get('/cambiar_contraseña',function(){
    return view('login.change_password');
});

Route::get('/gestion_roles',function(){
    return view('admin.manage_rol');
});

#RUTAS EQUIPO ROCHA

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/memorias', function(){
    return view('Memorias.memorias');
});

Route::get('/historial-memorias', function(){
    return view('Memorias.historial_memoria');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/gestión_anteproyecto', function () {
    return view('anteproject_cedule.table_anteprojects');
});


require __DIR__.'/auth.php';
