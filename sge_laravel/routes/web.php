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
Route::get('/Perfil_Teacher', function () {return view('teachers.userTeacher');});
Route::get('/Perfil_Student', function () {return view('students.userStudent');});
Route::get('/Perfil_Admin', function () {return view('super_admin.userAdmin');});
Route::get('/registro', function (){return view('registro');})->name('registro');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/memorias', function(){
    return view('Memorias.memorias');
});

Route::get('/historial-memorias', function(){
    return view('Memorias.historial_memoria');
});
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

Route::get('/gestion_anteproyecto', function () {
    return view('anteproject_cedule.table_anteprojects');
});


require __DIR__.'/auth.php';
