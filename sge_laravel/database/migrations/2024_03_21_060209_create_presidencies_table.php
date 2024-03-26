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
            $table->string('president_name');
            $table->string('president_lastname');
            $table->float('payroll_president');
            $table->foreignid('user_id')
            //->nullable()
            ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->foreignid('division_id')
            //->nullable()
            ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->foreignid('career_id')
            //->nullable()
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
        Schema::dropIfExists('presidencies');
    }
};
