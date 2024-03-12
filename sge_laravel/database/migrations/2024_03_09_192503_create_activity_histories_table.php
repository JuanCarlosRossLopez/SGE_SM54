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
        Schema::disableForeignKeyConstraints();
        Schema::create('activity_histories', function (Blueprint $table) {
            $table->id();
            //Aun no se cuantas citas hay por cuatri de estadias
<<<<<<< HEAD:sge_laravel/database/migrations/2024_03_09_192503_create_activity_histories_table.php
            $table->string('title');
            $table->string('description');
            $table->date('date');
            $table->foreignId('teacher_id')
            ->nullable()
            ->constrained('teachers')
            ->onUpdate('restrict')
            ->onDelete('restrict');

            $table->foreignId('anteprojects_id')
            ->nullable()
            ->constrained('anteprojects')
            ->onUpdate('restrict')
            ->onDelete('restrict');
=======
            $table->string('meet_one');
            $table->string('meet_two');
            $table->string('meet_three');
            $table->foreignId('teacher_id')->constrained('teachers')
            ->onUpdate('restrict')
            ->onDelete('restrict');
>>>>>>> origin/Equipo_Yahir:sge_laravel/database/migrations/2024_03_09_192501_create_activity_histories_table.php
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
