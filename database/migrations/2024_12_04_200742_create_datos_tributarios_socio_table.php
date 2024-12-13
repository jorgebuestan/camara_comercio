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
        Schema::create('datos_tributarios_socio', function (Blueprint $table) {
            $table->id();
            $table->integer('id_socio');
            $table->integer('estado_sri');
            $table->integer('id_tipo_regimen');
            $table->date('fecha_registro_sri');
            $table->date('fecha_actualizacion_ruc')->nullable();
            $table->date('fecha_constitucion')->nullable(); //No debe ser menor a fecha_registro
            $table->date('fecha_nacimiento')->nullable();
            $table->integer('agente_retencion');
            $table->integer('contribuyente_especial');
            $table->integer('id_pais');
            $table->integer('id_provincia');
            $table->integer('id_canton');
            $table->integer('id_parroquia');
            $table->text('calle');
            $table->text('manzana');
            $table->text('numero');
            $table->text('interseccion');
            $table->text('referencia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos_tributarios_socio');
    }
};
