<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('id_student')->unique();
            $table->foreignId('careers_id')->nullable()->constrained('careers')->onUpdate('restrict')->onDelete('restrict');
            $table->foreignId('group_id')->nullable()->constrained('groups')->onUpdate('restrict')->onDelete('restrict');
            $table->foreignId('user_id')->nullable()->constrained('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreignId('division_id')->nullable()->constrained('divisions')->onUpdate('restrict')->onDelete('restrict');
            $table->foreignId('anteproject_id')->nullable()->constrained('anteprojects')->onUpdate('restrict')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
