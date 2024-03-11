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
        Schema::create('activity_histories', function (Blueprint $table) {
            $table->id();
            //Aun no se cuantas citas hay por cuatri de estadias
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('fecha');
            $table->foreignId('teacher_id')->constrained('teachers')
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
        Schema::dropIfExists('activity_histories');
    }
};
