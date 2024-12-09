<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('entidades', function (Blueprint $table) {
            $table->id();
            $table->string('ruc', 13)->unique(); // RUC con longitud de 13 caracteres
            $table->string('entidad', 255)->unique();
            $table->text('entidad_busqueda'); // Esta columna tendrá el índice FULLTEXT 
            $table->integer('id_tipo_entidad');
            $table->integer('alcance');
            $table->text('direccion');
            $table->text('telefono');
            $table->text('representante')->nullable();
            $table->text('telefono_representante')->nullable();
            $table->integer('id_pais')->nullable();
            $table->integer('id_provincia')->nullable();
            $table->integer('id_canton')->nullable();  
            $table->integer('estado');
            $table->timestamps();
        });
        // Agregar el índice FULLTEXT después de la creación de la tabla
        //DB::statement('ALTER TABLE entidades ADD FULLTEXT fulltext_entidad (entidad)');
        DB::statement('ALTER TABLE entidades ADD FULLTEXT fulltext_entidad_busqueda (entidad_busqueda)');
    } 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entidades');
    }
};
