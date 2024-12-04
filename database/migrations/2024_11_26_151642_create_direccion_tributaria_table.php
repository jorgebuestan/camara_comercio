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
        Schema::create('direccion_tributaria', function (Blueprint $table) {
            $table->id();
            $table->integer('id_camara'); 
            $table->integer('id_pais');
            $table->integer('id_provincia');
            $table->integer('id_canton');
            $table->integer('id_parroquia');
            $table->text('calle');
            $table->text('manzana');
            $table->text('numero');
            $table->text('interseccion');
            $table->text('referencia');
            $table->integer('direccion_principal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direccion_tributaria');
    }
};
