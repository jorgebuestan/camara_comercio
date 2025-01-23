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
        Schema::table('camaras_obligaciones', function (Blueprint $table) {
            //
            // Agregar el nuevo campo después de id_camara
            $table->integer('id_establecimiento')->after('id_camara');

            // Eliminar el índice único existente
            $table->dropUnique('unique_camara_entidad_obligacion');

            // Crear el nuevo índice único con el nuevo campo incluido
            $table->unique(['id_camara', 'id_establecimiento', 'id_entidad', 'id_obligacion'], 'unique_camara_establecimiento_entidad_obligacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('camaras_obligaciones', function (Blueprint $table) {
            //
             // Eliminar el índice único actualizado
             $table->dropUnique('unique_camara_establecimiento_entidad_obligacion');

             // Eliminar el nuevo campo
             $table->dropColumn('id_establecimiento');
 
             // Restaurar el índice único anterior
             $table->unique(['id_camara', 'id_entidad', 'id_obligacion'], 'unique_camara_entidad_obligacion');
        });
    }
};
