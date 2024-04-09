<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use \App\Models\Students;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user = User::factory(1)->create()->first(); // Obtener el primer usuario de la colección

        $role = Role::where('name', 'Administrador')->first(); // Reemplaza 'nombre_del_rol' con el nombre real del rol

        if ($role) {
            $user->assignRole($role);
        }
       
        // Students::factory(1)->create(); {


        //     \App\Models\User::factory()->create([
        //         'name' => 'Test User',
        //         'email' => 'test@example.com',
        //     ]);
        // }
    }
}