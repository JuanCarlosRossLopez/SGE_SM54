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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('book_name', 255);
            $table->text('voucher'); //Comprobante de pago que se subirá como imagen (Eso me dijo dano)
            $table->text('book_front_page'); //Portada del libro que se subirá como imagen (Eso me dijo dano)
            $table->text('book_description');
            $table->string('author');
            $table->float('price');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
