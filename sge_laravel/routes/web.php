<?php

use App\Http\Controllers\Comments\CommentsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoryHistory\Memory_History_Controller;
use App\Http\Controllers\Roles\RoleController;
use App\Http\Controllers\Users\UsersController;
use App\Http\Controllers\Books\BooksController;
use App\Http\Controllers\Calendar\ControllerCalendar;
use App\Http\Controllers\Users\UsersCreateManyController;
use Spatie\Permission\Contracts\Role;
use App\Http\Controllers\Projects_management\Projects_managementController;
use App\Http\Controllers\Students\StudentsController;

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


Route::get('/Perfil_Maestro', function () {return view('teachers.userTeacher');})->name('perfil_profesor');
Route::get('/Perfil_Estudiante', function () {return view('students.userStudent');})->name('perfil_estudiante');
Route::get('/Perfil_Administrador', function () {return view('super_admin.userAdmin');})->name('perfil_admin');
Route::get('/Perfil_Teacher', function () {return view('teachers.userTeacher');})->name('perfil_maestro');
Route::get('/Perfil_Student', function () {return view('students.userStudent');})->name('perfil_estudiante');
Route::get('/Perfil_Admin', function () {return view('super_admin.userAdmin');})->name('perfil_admin');
Route::get('/registro', function (){return view ('registro');});
Route::get('/Dashboard_Direccion', function (){return view ('dashDireccion');});


Route::get('/plantilla', function () {
    return view('test.test_standars');
});

//Mision, vision, valores
Route::get('/', function () { 
    return view('welcome');
});

Route::get('/', function () {
    return view('login.login');
});

//Dashboard Asesor
Route::get('/dashboard_asesor', function () {
    return view('teachers.teacher_dashboard');
});

//Dashboard Alumno
Route::get('/dashboard_alumno', function () {
    return view('students.activities_calendar');
})->name('activities_calendar');


//Rutas principales en dashboard alumno
Route::resource('/anteproyecto', Projects_managementController::class);




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

Route::get('/panel_admin',function(){
    return view('super_admin.dashboard.dashboard');
});
Route::resource('/libros', BooksController::class);
//End equipo rocha


//Ruteo jomar
Route::get('/Perfil_Teacher', function () {return view('teachers.userTeacher');});
Route::get('/Perfil_Student', function () {return view('students.userStudent');});
Route::get('/Perfil_Admin', function () {return view('super_admin.userAdmin');});
Route::get('/agregar', function (){return view('registro');})->name('registro');


Route::resource('estudiantes', StudentsController::class);


//General
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//Equipo valier
Route::get('/gestion_asesor_anteproyecto', function () {
    return view('anteproject_cedule.table_anteprojects');
});

    //Memoria getsion Valier
    Route::get('/memory-history/{id}/download-pdf', 'App\Http\Controllers\MemoryHistory\Memory_History_Controller@downloadPdf')->name('memory_history.download_pdf');
    Route::resource('memory',Memory_History_Controller::class);
    Route::get('/crear_memoria', function(){
        return view('Test_memory.create_memory');
    });
    Route::get('/edit_memory', function(){
        return view('Test_memory.edit_memory');
    });

    //Comentarios gestion Valier
    Route::resource('information_project', CommentsController::class);
    Route::get('/crear_comentario', function () {
        return view('teacher_dates.create_comment');
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
// Route::get('/pdf_muestra', function () {
//     return view('report_generation.pdf_cedula');
// });
Route::get('/dashboard_coordinacion', function () {
    return view('coordination.dashboard_coordination');
});
Route::get('/libros', function () {
    return view('coordination.books_table');
});

Route::get('/registro_libros', function () {
    return view('report_generation.form_books');
});

//End equipo dano

#RUTAS EQUIPO YAHIR

Route::resource('usuarios', UsersController::class);
Route::resource('muchos-usuarios', UsersCreateManyController::class);
//Route::put('usuarios/{id}', 'UserController@update')->name('usuarios.update');

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
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    // equipo rocha
    //End equipo rocha

});
Route::resource('roles',RoleController::class);



require __DIR__.'/auth.php';
