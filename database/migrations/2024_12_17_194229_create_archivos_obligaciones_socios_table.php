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
        Schema::create('archivos_obligaciones_socios', function (Blueprint $table) {
            $table->id();
            $table->integer('id_socio');
            $table->integer('id_entidad');
            $table->integer('id_obligacion');
            $table->text('ruta_archivo')->nullable();
            $table->integer('validado');
            $table->unsignedBigInteger('subido_por'); // Usuario que subió el archivo
            $table->integer('estado');
            $table->timestamps();

            $table->unique(['id_socio', 'id_entidad', 'id_obligacion'], 'unique_archivos_socios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archivos_obligaciones_socios');
    }
};
