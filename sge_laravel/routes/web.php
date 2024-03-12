<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Roles\RoleController;
use App\Http\Controllers\Users\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Calendar\ControllerCalendar;
use Spatie\Permission\Contracts\Role;

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


Route::get('/Perfil_Maestro', function () {return view('teachers.userTeacher');})->name('perfil_maestro');
Route::get('/Perfil_Estudiante', function () {return view('students.userStudent');})->name('perfil_estudiante');
Route::get('/Perfil_Administrador', function () {return view('super_admin.userAdmin');})->name('perfil_admin');
Route::get('/registro', function (){return view ('registro');});
Route::get('/Dashboard_Direccion', function (){return view ('dashDireccion');});


Route::get('/plantilla', function () {
    return view('test.test_standars');
});

//Mision, vision, valores
Route::get('/', function () {
    return view('welcome');
});

//Dashboard Asesor
Route::get('/dashboard_asesor', function () {
    return view('teachers.teacher_dashboard');
});

//Dashboard Alumno
// Route::get('/dashboard_alumno', function () {
//     return view('students.activities_calendar');
// })->name('activities_calendar');


//Rutas principales en dashboard alumno
Route::get('/anteproyecto', function () {
    return view('students.anteproyecto');
})->name('anteproyecto');




//End quipo coronado


//Equipo rocha
Route::get('/iniciar_session', function () {
    return view('login.login');
});

Route::get('/recuperar_contraseña', function () {
    return view('login.recovery_password');
});

Route::get('/cambiar_contraseña', function () {
    return view('login.change_password');
});

Route::get('/gestion_roles', function () {
    return view('admin.manage_rol');
});

Route::get('/panel_admin', function () {
    return view('super_admin.dashboard.dashboard');
});
//End equipo rocha


//Ruteo jomar
Route::get('/Perfil_Maestro', function () {
    return view('teachers.userTeacher');
});
Route::get('/Perfil_Estudiante', function () {
    return view('students.userStudent');
});
Route::get('/Perfil', function () {
    return view('super_admin.userAdmin');
});
Route::get('/agregar', function () {
    return view('registro');
})->name('registro');



//General
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//Equipo valier
Route::get('/memorias', function () {
    return view('Memorias.memorias');
});
Route::get('/historial-memorias', function () {
    return view('Memorias.historial_memoria');
});
Route::get('/gestion_anteproyecto', function () {
    return view('anteproject_cedule.table_anteprojects');
});

Route::get('/datos_proyecto', function () {
    return view('teacher_dates.information_project');
});
Route::get('/editar_cita', function () {
    return view('teacher_dates.edit_meet_date');
});
Route::get('/alumnos_asesorados' , function () {
    return view('strikes.advised_students');            
});


//End equipo valier

//Equipo dano
Route::get('/envio_informes', function () {
    return view('report_generation.teacher_table');
})->name('envio');

Route::get('/descarga_informes', function () {
    return view('report_generation.student_download');
});
Route::get('/informes', function(){ 
    return view('report_generation.teacher_generation');
});

Route::get('/pdf_muestra', function () {
    return view('report_generation.pdf_cedula');
});
//End equipo dano

#RUTAS EQUIPO YAHIR

Route::resource('usuarios', UsersController::class);

Route::get('/dashboard-presidencial', function(){
    return view('super_admin.dashboard_presidencia');
});

Route::get('/ejemplo', function () {
    return view('UserManagement.cuadro');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    // equipo rocha
    Route::resource('roles',RoleController::class);
    //End equipo rocha

});

Route::get('/dashboard_alumno', [ControllerCalendar::class, 'index'])->name('students.activities_calendar');
Route::get('/calendario/{month}', [ControllerCalendar::class, 'indexMonth'])->where('month', '[0-9]{4}-[0-9]{2}')->name('calendar.month');


require __DIR__.'/auth.php';
