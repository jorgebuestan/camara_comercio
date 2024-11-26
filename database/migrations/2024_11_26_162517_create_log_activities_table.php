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
        Schema::create('log_activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // Usuario que realiza la acción
            $table->string('action'); // Tipo de acción: insert, update, delete
            $table->string('table_name'); // Nombre de la tabla afectada
            $table->text('data')->nullable(); // Datos involucrados en la acción
            $table->text('query')->nullable(); // Consulta o URL
            $table->timestamps(); // Timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_activities');
    }
};
