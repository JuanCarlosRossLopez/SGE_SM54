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
        Schema::create('project_collaborators', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->foreignId('project_id')->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrati  ons.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_collaborators');
    }
};
