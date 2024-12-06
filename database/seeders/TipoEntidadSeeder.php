<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoEntidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tipo_entidad')->insert([  
            'descripcion' => 'PÚBLICA' 
        ]); 

        DB::table('tipo_entidad')->insert([  
            'descripcion' => 'PRIVADA' 
        ]); 
    }
}
