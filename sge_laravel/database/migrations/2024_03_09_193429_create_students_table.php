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
            $table->string('tuition'); //matricula
            $table->string('project_creator');
            $table->string('admonition'); //amonestacion
            $table->foreignId('user_id')->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->foreignId('division_id')->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->foreignId('project_id')->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->foreignId('adviser_id')->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->foreignId('evaluation_date_id')->constrained()
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
