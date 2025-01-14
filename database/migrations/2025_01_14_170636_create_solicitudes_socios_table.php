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
        Schema::create('solicitudes_socios', function (Blueprint $table) {
            $table->id();
            $table->integer('id_tipo_personeria');
            $table->integer('id_tipo_identificacion');
            $table->string('cedula_ruc');
            $table->text('razon_social');
            $table->string('correo')->nullable();
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->text('ruta_archivo1')->nullable();
            $table->text('ruta_archivo2')->nullable();
            $table->integer('id_estado_formulario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes_socios');
    }
};
