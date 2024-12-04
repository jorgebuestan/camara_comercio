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
        Schema::create('socios', function (Blueprint $table) {
            $table->id();
            $table->text('logo');
            $table->text('numero_consecutivo');
            $table->date('fecha_ingreso'); 
            $table->integer('id_tipo_persona');
            $table->integer('id_tipo_personeria');
            $table->integer('id_tipo_identificacion');
            $table->string('identificacion');
            $table->text('razon_social');
            $table->text('correo')->nullable();
            $table->text('telefono')->nullable();
            $table->string('cedula_representante_legal')->nullable();
            $table->string('nombres_representante_legal')->nullable();
            $table->string('apellidos_representante_legal')->nullable();
            $table->string('telefono_representante_legal')->nullable();
            $table->string('correo_representante_legal')->nullable();
            $table->date('fecha_registro_mercantil')->nullable(); 
            $table->date('fecha_vencimiento_nombramiento')->nullable();  
            $table->date('fecha_desafiliacion')->nullable();
            $table->text('motivo_desafiliacion')->nullable();
            $table->integer('estado');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socios');
    }
};
