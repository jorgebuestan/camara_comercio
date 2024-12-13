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
        Schema::create('historial_socios_adherentes', function (Blueprint $table) {
            $table->id();
            $table->integer('id_socio_adherente');
            $table->integer('id_socio_anterior')->nullable();
            $table->date('fecha_afiliacion')->nullable();
            $table->date('fecha_desafiliacion')->nullable();
            $table->date('fecha_reafiliacion')->nullable();
            $table->text('motivo_desafiliacion')->nullable();
            $table->text('motivo_reafiliacion')->nullable();
            $table->timestamps();

            // Restricción única para evitar duplicados
            $table->unique(['id_socio_adherente', 'fecha_afiliacion'], 'unique_socio_adherente_fecha_afiliacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_socios_adherentes');
    }
};
