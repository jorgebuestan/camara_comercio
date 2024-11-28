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
        Schema::create('camaras', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->date('fecha_ingreso'); 
            $table->string('ruc')->unique();
            $table->string('razon_social');
            $table->string('cedula_representante_legal');
            $table->string('nombres_representante_legal');
            $table->string('apellidos_representante_legal');
            $table->string('telefono_representante_legal');
            $table->string('correo_representante_legal');
            $table->string('cargo_representante_legal');
            $table->string('direccion_representante_legal');
            $table->integer('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camaras');
    }
};
