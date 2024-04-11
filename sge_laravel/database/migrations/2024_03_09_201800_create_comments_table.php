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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('general_comment');
            $table->foreignId('teacher_id')->nullable()->constrained('teachers')
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->foreignId('project_management_id')->nullable()->constrained('project_management')
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
