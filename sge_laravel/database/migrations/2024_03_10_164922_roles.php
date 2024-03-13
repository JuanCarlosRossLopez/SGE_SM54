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
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'teacher']);
        $role3 = Role::create(['name' => 'student']);
        $role4 = Role::create(['name' => 'cordination']);
        $role5 = Role::create(['name' => 'president']);
        $role6 = Role::create(['name' => 'applicants']);
        // $user = User::find(1);
        // $user->assignRole($role1);
        // $user->assignRole($role2);
        // $user->assignRole($role3);
        // $user2 = User::find(2);
        // $user2->assignRole($role1);
        // $user2->assignRole($role2);
        // $user2->assignRole($role3);
        // $user3 = User::find(3);
        // $user3->assignRole($role1);
        // $user3->assignRole($role2);
        // $user3->assignRole($role3);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
