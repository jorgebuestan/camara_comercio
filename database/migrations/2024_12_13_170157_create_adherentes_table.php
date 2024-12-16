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
        Schema::create('adherentes', function (Blueprint $table) {
            $table->id();
            $table->text('foto');
            $table->date('fecha_ingreso');
            $table->integer('id_tipo_identificacion');
            $table->string('identificacion');
            $table->string('ruc')->nullable();
            $table->text('nombres');
            $table->text('apellidos');
            $table->text('correo');
            $table->text('telefono');
            $table->integer('id_pais');
            $table->integer('id_provincia');
            $table->integer('id_canton');
            $table->integer('id_parroquia');
            $table->text('calle');
            $table->text('manzana');
            $table->text('numero');
            $table->text('interseccion');
            $table->text('referencia')->nullable();
            $table->text('observaciones')->nullable();
            $table->text('archivos_adjuntos')->nullable();
            $table->integer('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adherentes');
    }
};
