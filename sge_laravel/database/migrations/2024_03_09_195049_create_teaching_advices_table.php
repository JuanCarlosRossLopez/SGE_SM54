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
        Schema::create('teaching_advices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('Teachers')
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->foreignId('student_id')->constrained('students')
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
        Schema::dropIfExists('teaching_advices');
    }
};
