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
        Schema::create('project_management', function (Blueprint $table) {
            $table->id();
            $table->string('educational_program'); // Programa educativo
            $table->string('student_name');
            $table->string('student_group');
            $table->string('student_email');
            $table->string('student_phone', 10);
            $table->integer('student_id');  
            $table->string('project_title');
            $table->string('project_company');
            $table->string('direction');
            $table->string('position');
            $table->string('email_asesor');
            $table->string('project_advisor');
            $table->string('project_advisor_phone', 10);
            $table->text('general_objective');
            $table->text('problem_statement');
            $table->text('justification');
            $table->text('activities');
            //Se le agrego like
            $table->integer('likes')->default(0);
            $table->date('start_date'); // Fecha de inicio
            $table->date('end_date'); // Fecha de finalizacion
            // $table->foreignId('user_id')->nullable()->constrained('users')
            // ->onUpdate('restrict')
            // ->onDelete('restrict');
            $table->foreignId('id_student')->nullable()->constrained('students')
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->timestamps();
            //Aqui en adelante mover

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_management');
    }
};
