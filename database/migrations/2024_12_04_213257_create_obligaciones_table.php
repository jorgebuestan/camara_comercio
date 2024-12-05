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
        Schema::create('obligaciones', function (Blueprint $table) {
            $table->id();
            $table->text('obligacion');
            $table->integer('id_tiempo_presentacion');
            $table->integer('id_tipo_presentacion')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->date('fecha_presentacion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obligaciones');
    }
};
