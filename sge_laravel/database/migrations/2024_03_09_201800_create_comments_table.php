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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            //De momento aun sigo pensando como voy a trabajar el estado de los comentarios
            $table->string('general_comment');
            $table->string('title_comment');
            $table->string('objective_comment');
            $table->string('planteamiento_comment');
            $table->string('justification_comment');
            $table->string('activities_comment');
            $table->foreignId('teacher_id')->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->foreignId('anteproject_id')->constrained()
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
        Schema::dropIfExists('comments');
    }
};
