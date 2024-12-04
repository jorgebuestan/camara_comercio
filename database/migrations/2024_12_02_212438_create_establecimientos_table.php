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
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->id();
            $table->text('nombre_comercial');
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
            $table->text('correo'); 
            $table->text('telefono1')->nullable();
            $table->text('telefono2')->nullable();
            $table->text('telefono3')->nullable();
            $table->date('fecha_inicio_actividades'); 
            $table->date('fecha_reinicio_actividades')->nullable();
            $table->date('fecha_cese_actividades')->nullable();
            $table->json('actividades_economicas')->nullable();
            $table->integer('estado');
            $table->timestamps();
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('establecimientos');
    }
};
