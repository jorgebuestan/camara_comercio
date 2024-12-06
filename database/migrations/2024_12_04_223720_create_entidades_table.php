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
        Schema::create('entidades', function (Blueprint $table) {
            $table->id();
            $table->text('ruc');
            $table->text('entidad');
            $table->integer('id_tipo_entidad');
            $table->integer('alcance');
            $table->text('direccion');
            $table->text('telefono');
            $table->text('representante')->nullable();
            $table->text('telefono_representante')->nullable();
            $table->integer('id_pais')->nullable();
            $table->integer('id_parroquia')->nullable();
            $table->integer('id_canton')->nullable();
            $table->integer('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entidades');
    }
};
