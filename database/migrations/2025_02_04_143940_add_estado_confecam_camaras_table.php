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
        Schema::table('camaras', function (Blueprint $table) {
            //
            $table->integer('estado_confecam')->default(1)->nullable()->after('estado');  
            $table->date('fecha_desafiliacion')->nullable()->after('estado_confecam');  
            $table->text('motivo_desafiliacion')->nullable()->after('fecha_desafiliacion');  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('camaras', function (Blueprint $table) {
            //
            $table->dropColumn('estado_confecam'); 
            $table->dropColumn('fecha_desafiliacion');
            $table->dropColumn('motivo_desafiliacion');
        });
    }
};
