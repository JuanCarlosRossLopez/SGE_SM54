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
        Schema::create('Teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name_teacher')->unique();
            $table->string('payroll', 11)->unique();
            $table->foreignId('id_user')->nullable()->constrained('users')
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->foreignId('division_id')->nullable()->constrained('divisions')
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->foreignId('careers_id')->nullable()->constrained('careers')->onUpdate('restrict')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Teachers');
    }
};
