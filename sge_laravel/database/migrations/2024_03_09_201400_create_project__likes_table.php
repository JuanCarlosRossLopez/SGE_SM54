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
        Schema::create('project__likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('Teachers')
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->foreignId('project_management_id')->constrained('project_management')
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
        Schema::dropIfExists('project__likes');
    }
};
