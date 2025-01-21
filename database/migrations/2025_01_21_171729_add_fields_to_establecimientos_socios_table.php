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
        Schema::table('establecimientos_socios', function (Blueprint $table) {
            //
            $table->text('nombres_contacto')->nullable()->default(null)->after('actividades_economicas');
            $table->text('apellidos_contacto')->nullable()->default(null)->after('nombres_contacto');
            $table->text('telefono_contacto')->nullable()->default(null)->after('apellidos_contacto');
            $table->text('email_contacto')->nullable()->default(null)->after('telefono_contacto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('establecimientos_socios', function (Blueprint $table) {
            //
            $table->dropColumn(['nombres_contacto', 'apellidos_contacto', 'telefono_contacto', 'email_contacto']);
        });
    }
};
