<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoRegimenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tipo_regimen')->insert([  
            'nombre' => 'EMPRENDEDOR' 
        ]); 

        DB::table('tipo_regimen')->insert([  
            'nombre' => 'GENERAL' 
        ]); 
    }
}
