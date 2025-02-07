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
        Schema::create('documentos_camaras', function (Blueprint $table) {
            $table->id();
            $table->integer('id_camara');
            $table->integer('id_tipo_documento');
            $table->string('url');
            $table->string('nombre');
            $table->string('titulo');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos_camaras');
    }
};
