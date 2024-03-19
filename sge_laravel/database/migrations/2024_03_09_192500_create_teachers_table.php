<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name_teacher')->unique();
            $table->integer('payroll')->unique();
            $table->foreignId('id_user')->nullable()->constrained('users')
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->foreignId('division_id')->nullable()->constrained('divisions')
                ->onUpdate('restrict')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Teachers');
    }
};
db.createUser({user:"root",pwd:passwordPrompt(),roles:[{role:"userAdminAnyDatabase","db":"admin"},{"role":"readWriteAnyDatabase","db":"admin"}]})