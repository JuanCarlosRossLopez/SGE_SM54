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
            $table->integer('id_student'); //matricula
            $table->string('project_creator');
            $table->string('strike'); //amonestacion
            $table->foreignId('user_id')->constrained('users')
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->foreignId('division_id')->constrained('divisions') //carre
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->foreignId('anteproject_id')->constrained('anteprojects') 
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->foreignId('adviser_id')->constrained('teachers')
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->foreignId('evaluation_date_id')->constrained('activity_histories')
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
