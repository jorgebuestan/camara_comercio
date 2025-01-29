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
        Schema::table('datos_tributarios_socio', function (Blueprint $table) {
            // 
            $table->json('actividades_economicas')->nullable()->after('referencia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('datos_tributarios_socio', function (Blueprint $table) {
            //
            $table->dropColumn('actividades_economicas');
        });
    }
};
