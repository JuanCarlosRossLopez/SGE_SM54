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
    {   $permission0 = Permission::create(['name' => 'Ninguno']);
        $permission1 = Permission::create(['name' => 'Crear']);
        $permission2 = Permission::create(['name' => 'Leer']);
        $permission3 = Permission::create(['name' => 'Actualizar']);
        $permission4 = Permission::create(['name' => 'Eliminar']);
   

         $roles = Role::all();
        $roles[0]->givePermissionTo([$permission1, $permission2, $permission3, $permission4]);
        $roles[1]->givePermissionTo([$permission1, $permission2, $permission3, $permission4]);
        $roles[2]->givePermissionTo([$permission1, $permission2, $permission3, $permission4]);
        $roles[3]->givePermissionTo([$permission1, $permission2, $permission3, $permission4]);
        $roles[4]->givePermissionTo([$permission1, $permission2, $permission3, $permission4]);
        $roles[5]->givePermissionTo([$permission1, $permission2, $permission3, $permission4]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
