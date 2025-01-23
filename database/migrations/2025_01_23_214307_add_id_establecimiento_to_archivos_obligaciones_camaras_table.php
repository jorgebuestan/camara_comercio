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
        Schema::table('archivos_obligaciones_camaras', function (Blueprint $table) {
            //
            $table->integer('id_establecimiento')->after('id_camara');

            // Eliminar el índice único existente
            $table->dropUnique('unique_archivos_camaras');

            // Crear el nuevo índice único con el nuevo campo incluido
            $table->unique(['id_camara', 'id_establecimiento', 'id_entidad', 'id_obligacion'], 'unique_archivos_camaras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('archivos_obligaciones_camaras', function (Blueprint $table) {
            //
            $table->dropUnique('unique_archivos_camaras');

             // Eliminar el nuevo campo
             $table->dropColumn('id_establecimiento');
 
             // Restaurar el índice único anterior
             $table->unique(['id_camara', 'id_entidad', 'id_obligacion'], 'unique_archivos_camaras');
        });
    }
};
