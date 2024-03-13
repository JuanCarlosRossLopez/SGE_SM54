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
        Schema::create('project_management', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_group');
            $table->string('student_email');
            $table->integer('student_phone');
            $table->foreignId('student_id')->constrained('students')
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->string('project_title');
            $table->string('project_company');
            $table->string('project_advisor');
            $table->integer('project_advisor_phone');
            $table->text('general_objective');
            $table->text('specific_objectives');
            $table->text('project_scope');
            $table->date('start_date'); // Fecha de inicio
            $table->date('end_date'); // Fecha de finalización
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_management');
    }
};
