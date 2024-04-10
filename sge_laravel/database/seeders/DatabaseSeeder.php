<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use \App\Models\Students;
use App\Models\Division;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Crear un usuario administrador y asignarle el rol
        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('admin1234'),
        ]);
        $adminRole = Role::where('name', 'Administrador')->first();
        if ($adminRole) {
            $admin->assignRole($adminRole);
        }

        // Crear un usuario estudiante y asignarle el rol
        $student = User::factory()->create([
            'name' => 'Student',
            'email' => 'student@test.com',
            'password' => bcrypt('student1234'),
        ]);
        $studentRole = Role::where('name', 'Estudiante')->first();
        if ($studentRole) {
            $student->assignRole($studentRole);
        }

        // Crear un usuario profesor y asignarle el rol
        $teacher = User::factory()->create([
            'name' => 'Teacher',
            'email' => 'teacher@test.com',
            'password' => bcrypt('teacher1234'),
        ]);
        $teacherRole = Role::where('name', 'Asesor')->first();
        if ($teacherRole) {
            $teacher->assignRole($teacherRole);
        }

        // Crear un usuario presidente y asignarle el rol
        $president = User::factory()->create([
            'name' => 'President',
            'email' => 'president@test.com',
            'password' => bcrypt('president1234'),
        ]);
        $presidentRole = Role::where('name', 'Presidente')->first();
        if ($presidentRole) {
            $president->assignRole($presidentRole);
        }

        // Crear un usuario coordinador y asignarle el rol
        $coordinator = User::factory()->create([
            'name' => 'Coordinator',
            'email' => 'coordinator@test.com',
            'password' => bcrypt('coordinator1234'),
        ]);
        $coordinatorRole = Role::where('name', 'Cordinacion')->first();
        if ($coordinatorRole) {
            $coordinator->assignRole($coordinatorRole);
        }

        // Crear divisiones utilizando los estados definidos en DivisionsFactory
        Division::factory()->create(); // Esto crea una división con el estado por defecto
        Division::factory()->gastronomy()->create();
        Division::factory()->administrativeEconomic()->create();
        Division::factory()->tourism()->create();
    }
}
