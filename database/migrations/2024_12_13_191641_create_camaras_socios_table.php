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
        Schema::create('camaras_socios', function (Blueprint $table) {
            $table->id();
            $table->integer('id_camara');
            $table->integer('id_socio');
            $table->date('fecha_afiliacion');
            $table->date('fecha_desafiliacion')->nullable();
            $table->text('motivo_desafiliacion')->nullable();
            $table->integer('estado');
            $table->timestamps();

            $table->unique(['id_camara', 'id_socio'], 'unique_camara_socio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camaras_socios');
    }
};
