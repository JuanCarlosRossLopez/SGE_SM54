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

//Mision, vision, valores
Route::get('/', function () { 
    return view('welcome');
});

//Dashboard Alumno
Route::get('/dashboard_alumno', function () {
    return view('students.activities_calendar');
})->name('activities_calendar');


//Rutas principales en dashboard alumno
Route::get('/anteproyecto', function () {
    return view('students.anteproyecto');
})->name('anteproyecto');




//End quipo coronado


//Equipo rocha
Route::get('/iniciar_session',function(){
    return view('login.login');
});

Route::get('/recuperar_contraseña',function(){
    return view('login.recovery_password');
});

Route::get('/cambiar_contraseña',function(){
    return view('login.change_password');
});

Route::get('/gestion_roles',function(){
    return view('admin.manage_rol');
});
//End equipo rocha


//Ruteo jomar
Route::get('/Perfil_Teacher', function () {return view('teachers.userTeacher');});
Route::get('/Perfil_Student', function () {return view('students.userStudent');});
Route::get('/Perfil_Admin', function () {return view('super_admin.userAdmin');});
Route::get('/agregar', function (){return view('registro');})->name('registro');



//General
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//Equipo valier
Route::get('/memorias', function(){
    return view('Memorias.memorias');
});
Route::get('/historial-memorias', function(){
    return view('Memorias.historial_memoria');
});
Route::get('/gestion_anteproyecto', function () {
    return view('anteproject_cedule.table_anteprojects');
});

Route::get('/prueba_estandares', function () {
    return view('anteproject_cedule.test_standars');
});
//End equipo valier

//Equipo dano
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

Route::get('/pdf_muestra', function(){
    return view('report_generation.pdf_cedula');
});
//End equipo dano

#RUTAS EQUIPO YAHIR

Route::get('/usuarios', function(){
    return view('UserManagement.users');
});

Route::get('/dashboard-presidencial', function(){
    return view('super_admin.dashboard_presidencia');
});

Route::get('/ejemplo', function(){
    return view('UserManagement.cuadro');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
