<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Roles\RoleController;
use App\Http\Controllers\Teachers\TeachersController;
use App\Http\Controllers\Users\UsersController;
use App\Http\Controllers\Books\BooksController;
use FontLib\Table\Type\name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Calendar\ControllerCalendar;
use App\Http\Controllers\Users\UsersCreateManyController;
use Spatie\Permission\Contracts\Role;
use App\Http\Controllers\Projects_management\Projects_managementController;
use App\Http\Controllers\Students\StudentsController;
use App\Http\Controllers\Coordination\CoordinatorsController;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

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
    return view('auth.login');
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
Route::resource('/anteproyecto', Projects_managementController::class);




//End equipo coronado


//Equipo rocha
Route::get('/iniciar_session', function () {
    return view('auth.login');
});

Route::get('/recuperar_contraseña', function () {
    return view('login.recovery_password');
});

Route::get('/cambiar_contraseña', function () {
    return view('login.change_password');
});



Route::get('/panel_admin', function () {
    return view('super_admin.dashboard.dashboard');
});

// Route::get('libros',[BooksController::class, 'index'])->name('libros.index');
// Route::post('/libros',[BooksController::class, 'store'])->name('libros.store');

Route::resource('libros', BooksController::class);

Route::resource('maestros', TeachersController::class);



//Route::post('/teachers', [TeachersController::class, 'store'])->name('teachers.store');

//End equipo rocha


//Ruteo jomar

Route::get('/Perfil_Estudiante', function () {
    return view('students.userStudent');
});
Route::get('/Perfil', function () {
    return view('super_admin.userAdmin');
});
Route::get('/agregar', function () {
    return view('registro');
})->name('registro');


Route::resource('estudiantes', StudentsController::class);

Route::resource('estudiantes', StudentsController::class);


// General
// Route::get('/dashboard', function () {
//     return view('super_admin.dashboard.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


//Equipo valier
Route::get('/memorias', function () {
    return view('Memories.memory');
});
Route::get('/historial-memorias', function () {
    return view('Memories.memory_history');
});

Route::get('/gestion_asesor_anteproyecto', function () {
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
Route::get('/test', function () {

    $pdf = PDF::loadView('pdf.cartaau');
    return $pdf->stream('cedula.pdf');
});

Route::get('/anteproyectosss', function () {
    $imagen_path = public_path("img/LogoUT.png");

    $pdf = PDF::loadView('pdf.carta_cedula_ante', ["imagen_path"=>$imagen_path]);
    return $pdf->stream('cedula.pdf');
});
Route::resource('/coordinacion', CoordinatorsController::class);

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
Route::get('/libro', function () {
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

Route::get('/ejemplo', function () {
    return view('UserManagement.cuadro');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/dashboard', function () {
        return view('super_admin.dashboard.dashboard');
    })->name('dashboard');
    // equipo rocha
    // End equipo rocha
    //     return view('super_admin.dashboard.dashboard');


});
Route::resource('roles',RoleController::class);
Route::post('roles/store_permision', [RoleController::class, 'store_permision'])->name('roles.store_permision');
Route::delete('roles/{id}/permissions', [RoleController::class, 'delete_permission'])->name('roles.delete_permission');
Route::put('roles/{id}/permissions', [RoleController::class, 'update_permission'])->name('roles.update_permission');



Route::middleware('auth')->group(function () {
Route::get('/dashboard_alumno', [ControllerCalendar::class, 'index'])->name('students.activities_calendar');
Route::get('/calendario/{month}', [ControllerCalendar::class, 'indexMonth'])->where('month', '[0-9]{4}-[0-9]{2}')->name('calendar.month');
});

require __DIR__.'/auth.php';
