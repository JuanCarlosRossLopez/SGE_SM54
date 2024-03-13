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
        Schema::create('anteprojects', function (Blueprint $table) {
            $table->id();
            $table->string('anteproject_title');
            $table->string('information');
            $table->foreignId('company_id')
            ->nullable()
            ->constrained('companies')
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->foreignId('project_status_id')
            ->nullable()
            ->constrained('status_projects')
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->foreignId('intership_id')->constrained('interships')
            ->nullable()
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->date('start_date');
            $table->date('finished_date')
            ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anteprojects');
    }
};
