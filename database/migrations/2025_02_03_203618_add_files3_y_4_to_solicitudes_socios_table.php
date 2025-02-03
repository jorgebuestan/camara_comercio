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
        Schema::table('solicitudes_socios', function (Blueprint $table) {
            //
            $table->text('ruta_archivo3')->nullable()->after('ruta_archivo2'); 
            $table->text('ruta_archivo4')->nullable()->after('ruta_archivo3');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('solicitudes_socios', function (Blueprint $table) {
            //
            $table->dropColumn('ruta_archivo3');
            $table->dropColumn('ruta_archivo4');
        });
    }
};
