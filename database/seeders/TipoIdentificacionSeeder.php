<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoIdentificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tipo_identificacion')->insert([ 
            'descripcion' => 'RUC' 
        ]);

        DB::table('tipo_identificacion')->insert([ 
            'descripcion' => 'CÉDULA' 
        ]);

        DB::table('tipo_identificacion')->insert([ 
            'descripcion' => 'PASAPORTE' 
        ]);

        DB::table('tipo_identificacion')->insert([ 
            'descripcion' => 'IDENTIFICACIÓN DEL EXTERIOR' 
        ]);
    }
}
