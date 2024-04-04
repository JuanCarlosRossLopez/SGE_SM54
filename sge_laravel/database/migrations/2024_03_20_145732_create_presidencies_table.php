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
        Schema::create('presidencies', function (Blueprint $table) {
            $table->id();
            $table->string('presidencies_name');
            $table->float('payroll_presidencies');
            $table->foreignid('users')
            ->nullable()
            ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->foreignid('divisions')
            ->nullable()
            ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->foreignid('careers')
            ->nullable()
            ->constrained()
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
        Schema::dropIfExists('precidencies');
    }
};
