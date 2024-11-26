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
        Schema::create('datos_tributarios', function (Blueprint $table) {
            $table->id();
            $table->integer('id_camara');
            $table->string('tipo_regimen');
            $table->date('fecha_registro_sri'); 
            $table->date('fecha_constitucion'); //No debe ser menor a fecha_registro
            $table->integer('agente_retencion');  
            $table->integer('contribuyente_especial'); 
            $table->integer('id_pais');
            $table->integer('id_provincia');
            $table->integer('id_canton');
            $table->integer('id_parroquia');
            $table->string('calle');
            $table->string('manzana');
            $table->string('numero');
            $table->string('interseccion');
            $table->string('referencia'); 
            $table->json('actividades_economicas')->nullable();
            $table->json('obligaciones_tributarias')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos_tributarios');
    }
};
