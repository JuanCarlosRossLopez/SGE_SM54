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
            $table->string('nombreCompleto'); // Cambiado el nombre del campo
            $table->string('matricula')->unique(); // Manteniendo la matrícula como única
            $table->string('carrera')->nullable(); // Agregando carrera, permitiendo valores nulos
            $table->string('curp')->nullable(); // Agregando CURP, permitiendo valores nulos
            $table->string('grupo')->nullable(); // Agregando grupo, permitiendo valores nulos
            $table->string('cuatrimestre')->nullable(); // Agregando cuatrimestre, permitiendo valores nulos
            $table->date('fechaNacimiento')->nullable(); // Agregando fecha de nacimiento, permitiendo valores nulos
            $table->string('sexo')->nullable(); // Agregando sexo, permitiendo valores nulos
            $table->string('division')->nullable(); // Agregando división, permitiendo valores nulos
            $table->string('seguro')->nullable(); // Agregando seguro, permitiendo valores nulos
            $table->boolean('reingreso')->default(false); // Agregando reingreso con valor predeterminado
            $table->foreignId('user_id')->nullable()->constrained('users')
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->foreignId('division_id')->nullable()->constrained('divisions')
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->foreignId('anteproject_id')->nullable()->constrained('anteprojects') // Cambiado el nombre de la tabla de relación
                ->onUpdate('restrict')
                ->onDelete('restrict');
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
