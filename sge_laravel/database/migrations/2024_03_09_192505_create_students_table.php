<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->integer('id_student')->unique(); // matricula
            $table->boolean('project_creator')-> nullable();
            $table->integer('strike')->default(0); // amonestacion
            $table->foreignId('user_id')->nullable()->constrained('users')
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->foreignId('division_id')->nullable()->constrained('divisions')
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->foreignId('anteproject_id')->nullable()->constrained('project_management')
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->foreignId('adviser_id')->nullable()->constrained('teachers')
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};