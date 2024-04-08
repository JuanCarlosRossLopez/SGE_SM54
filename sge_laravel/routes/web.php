<?php
use App\Http\Controllers\DocumentSend\DocumentsController;
use App\Http\Controllers\DocumentSend\DocumentsDownloadController;
use App\Http\Controllers\Anteprojects\Anteprojects2Controller;
use App\Http\Controllers\Comments\CommentsController;
use App\Http\Controllers\Divisions\DivisionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherDashboard\AnteprotecMapDashController;
use App\Http\Controllers\TeacherDashboard\TeacherDashboardController;
use App\Http\Controllers\TeachingAdvice\TeachingAdviceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoryHistory\Memory_History_Controller;
use App\Http\Controllers\Roles\RoleController;
use App\Http\Controllers\Teachers\TeachersController;
use App\Http\Controllers\Companies\CompaniesController;
use App\Http\Controllers\Users\UsersController;
use App\Http\Controllers\Books\BooksController;
use App\Http\Controllers\Books\BookCordinacionController;
use FontLib\Table\Type\name;
use App\Http\Controllers\Calendar\ControllerCalendar;
use App\Http\Controllers\Users\UsersCreateManyController;
use Spatie\Permission\Contracts\Role;
use App\Http\Controllers\Projects_management\Projects_managementController;
use App\Http\Controllers\Calendar\Calendar2Controller;
use App\Http\Controllers\Calendar\ControllerEvent;
use App\Http\Controllers\Students\StudentsController;
use App\Http\Controllers\Coordination\CoordinatorsController;
use App\Http\Controllers\Presidencies\PresidenciesController;
use App\Models\Project_management;
use Spatie\Permission\Middlewares\RoleMiddleware;
use App\Http\Controllers\Pdf\PdfController;
use App\Http\Controllers\Careers\CareerController;
use App\Http\Controllers\Groups\GroupController;


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


Route::get('/Perfil_Maestro', function () {
    return view('teachers.userTeacher');
})->name('perfil_profesor');
Route::get('/Perfil_Estudiante', function () {
    return view('students.userStudent');
})->name('perfil_estudiante');
Route::get('/Perfil_Administrador', function () {
    return view('super_admin.userAdmin');
})->name('perfil_admin');
Route::get('/Perfil_Teacher', function () {
    return view('teachers.userTeacher');
})->name('perfil_maestro');
Route::get('/Perfil_Student', function () {
    return view('students.userStudent');
})->name('perfil_estudiante');
Route::get('/Perfil_Admin', function () {
    return view('super_admin.userAdmin');
})->name('perfil_admin');
Route::get('/registro', function () {
    return view('registro');
});
Route::get('/Dashboard_Direccion', function () {
    return view('dashDireccion');
});


Route::get('/plantilla', function () {
    return view('test.test_standars');
});

//Mision, vision, valores
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => ['auth', 'role:Asesor']], function () {
    //aaaaaaa
    Route::resource('/dashboard_asesor', AnteprotecMapDashController::class);

    Route::resource('alumnos_asesorados', TeacherDashboardController::class);
    Route::resource('test_dash_ante', AnteprotecMapDashController::class);
    
    //Route::resource('information_project', CommentsController::class);
});

//Dashboard Asesor


//Dashboard Alumno
Route::get('/dashboard_alumno', function () {
    return view('students.activities_calendar');
})->name('activities_calendar');


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

Route::get('/gestion_roles', function () {
    return view('admin.manage_rol');
});

Route::get('dashboard_maestro', function() {
    return view('teachers.teacher_dashboard');
});

Route::resource('/gestion_libros',BookCordinacionController::class);   
    
Route::resource('libros',BooksController::class);
// Route::post('/libros',[BooksController::class, 'store'])->name('libros.store');



Route::resource('maestros', TeachersController::class);
Route::resource('empresas', CompaniesController::class);
Route::resource('carreras', CareerController::class);
Route::resource('grupos',GroupController::class);






//Route::get('/empresas',function(){
//    return view('companies.companies');
//});



//Route::post('/teachers', [TeachersController::class, 'store'])->name('teachers.store');

//End equipo rocha

Route::get('/ListaEstudiantes', function () {
    return view('students.manager_student');
});

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


// Route::get('/estudiantes/{id}', 'StudentController@show')->name('estudiantes.show');
Route::resource('maestros', TeachersController::class);
Route::resource('estudiantes', StudentsController::class);
Route::resource('asignar_alumnos', TeachingAdviceController::class);

Route::resource('mis_asesorados', TeacherDashboardController::class);



//Equipo valier
// Route::get('/ante', function () {
//     return view('anteproject_cedule.table_anteprojects');
// })->name('gestion_asesor_anteproyecto');

// Route::get('gestion_asesor_anteproyecto',[ Anteprojects2Controller::class, 'index']);
Route::resource('gestion_asesor_anteproyecto', Anteprojects2Controller::class);
//Memoria getsion Valier
Route::get('/memory-history/{id}/download-pdf', 'App\Http\Controllers\MemoryHistory\Memory_History_Controller@downloadPdf')->name('memory_history.download_pdf');
Route::resource('historial_de_memorias', Memory_History_Controller::class);
Route::get('/crear_memoria', function () {
    return view('Test_memory.create_memory');
});
Route::get('/edit_memory', function () {
    return view('Test_memory.edit_memory');
});

    //Crud division
    Route::resource('division',DivisionController::class);
    Route::get('/crear_division', function(){
        return view('division_forms.create_division');
    });
    Route::get('/editar_division', function(){
        return view('division_forms.edit_division');
    });
    //End crud division

    //Comentarios gestion Valier
    

    Route::get('/editar_cita', function () {
        return view('teacher_dates.edit_meet_date');
    });


//Ignorar de mientras
//Comentarios gestion Valier
Route::resource('informacion_anteproyecto', AnteprotecMapDashController::class);




Route::post('/crear_comentario', [CommentsController::class, 'store'])->name('crear_comentario.store');

Route::get('/editar_cita', function () {
    return view('teacher_dates.edit_meet_date');
});
Route::get('/alumnos_asesorados', function () {
    return view('strikes.advised_students');
});

Route::get('/datos_proyecto', [Calendar2Controller::class, 'index'])->name('teacher_dates.information_project');
Route::post('/datos_proyecto', [ControllerEvent::class, 'store'])->name('datos_proyecto.store');
Route::get('/calendario/{month}', [Calendar2Controller::class, 'indexMonth'])->where('month', '[0-9]{4}-[0-9]{2}')->name('calendar.month');



//End equipo valier

//Equipo dano
//PDF

Route::get('/autodigit', [PdfController::class, 'auto_digit']);
Route::get('/anteproyectosss', [PdfController::class, 'anteproyecto']);
Route::get('/aprobacion', [PdfController::class, 'aprobacion']);
Route::get('/amonestacionn', [PdfController::class, 'amonestacion']);

Route::resource('documents', DocumentsController::class);
Route::resource('descarga', DocumentsDownloadController::class);
Route::post('/documents', [DocumentsController::class, 'enviar'])->name('documents.enviar');

Route::resource('/coordinacion', CoordinatorsController::class);

Route::get('/envio_informes', function () {
    return view('report_generation.teacher_table');
})->name('envio');
Route::get('/descarga_informes', function () {
    return view('report_generation.student_download');
});
Route::get('/informes', function () {
    return view('report_generation.teacher_generation');
});

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
Route::get('/users/filterByRole', [UsersController::class, 'filterByRole'])->name('users.filterByRole');

Route::resource('muchos-usuarios', UsersCreateManyController::class);
Route::resource('presidentes', PresidenciesController::class);
//Route::put('usuarios/{id}', 'UserController@update')->name('usuarios.update');



Route::group(['middleware' => ['auth', 'role:Presidente']], function () {
    // Coloca aquí las rutas que deseas proteger con el middleware 'role'
Route::get('/dashboard-presidencial', function(){
    return view('super_admin.dashboard_presidencia');
})->name('dashboard-presidencial');
});

Route::get('/ejemplo', function () {
    return view('UserManagement.cuadro');
});

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    // equipo rocha
    // End equipo rocha
    //     return view('super_admin.dashboard.dashboard');


});


Route::group(['middleware' => ['auth', 'role:Administrador']], function () {
    // Coloca aquí las rutas que deseas proteger con el middleware 'role'
    Route::get('/dashboard', function () {
        return view('super_admin.dashboard.dashboard');
    })->name('dashboard');
});

Route::group(['middleware' => ['auth', 'role:Estudiante']], function () {
    
    Route::get('/dashboard_alumno', [ControllerCalendar::class, 'index'])->name('students.activities_calendar');
}); 
//esto si
Route::resource('roles',RoleController::class);
Route::post('roles/store_permision', [RoleController::class, 'store_permision'])->name('roles.store_permision');
Route::delete('roles/{id}/permissions', [RoleController::class, 'delete_permission'])->name('roles.delete_permission');
Route::put('roles/{id}/permissions', [RoleController::class, 'update_permission'])->name('roles.update_permission');


Route::get('/calendario/{month}', [ControllerCalendar::class, 'indexMonth'])->where('month', '[0-9]{4}-[0-9]{2}')->name('calendar.month');
Route::get('/dashboard_alumno/events', [ControllerEvent::class, 'indexView'])->name('students.activities_calendar.events');

Route::get('/dashboard_alumno', [CommentsController::class, 'index'])->name('students.activities_calendar');

Route::middleware('auth')->group(function () {
});


require __DIR__ . '/auth.php';
