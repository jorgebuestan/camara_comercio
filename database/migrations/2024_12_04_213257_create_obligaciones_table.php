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
            $table->string('obligacion', 255)->unique();
            $table->text('obligacion_busqueda'); // Esta columna tendrá el índice FULLTEXT 
            $table->integer('id_tiempo_presentacion');
            $table->integer('id_tipo_presentacion')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->date('fecha_presentacion')->nullable();
            $table->integer('estado');
            $table->timestamps();
        });
        DB::statement('ALTER TABLE obligaciones ADD FULLTEXT fulltext_obligacion_busqueda (obligacion_busqueda)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obligaciones');
    }
};
