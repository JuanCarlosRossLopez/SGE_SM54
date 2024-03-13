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
        // $permission1 = Permission::create(['name' => 'create']);
        // $permission2 = Permission::create(['name' => 'read']);
        // $permission3 = Permission::create(['name' => 'update']);
        // $permission4 = Permission::create(['name' => 'delete']);
   


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
