<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {   
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Asesor']);
        $role3 = Role::create(['name' => 'Estudiante']);
        $role4 = Role::create(['name' => 'Cordinacion']);
        $role5 = Role::create(['name' => 'Presidente']);
        $role6 = Role::create(['name'=> 'Aspirante ']);
      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
