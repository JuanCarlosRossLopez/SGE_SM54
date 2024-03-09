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
        //Aqui chambea team guayabo
        Schema::create('companies', function (Blueprint $table) {
            $table->id_company();
            $table->company_name();
            $table->addres();
            $table->asesor_name();
            $table->job();
            $table->company_phone_number();
            $table->company_email();
            $table->work_area();
            $table->company_description();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
