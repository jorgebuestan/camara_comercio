<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoPersoneriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void  
    {
        //
        DB::table('tipo_personeria')->insert([ 
            'descripcion' => 'NATURAL SIN RUC' 
        ]); 

        
        DB::table('tipo_personeria')->insert([ 
            'descripcion' => 'NATURAL CON RUC' 
        ]); 

        DB::table('tipo_personeria')->insert([ 
            'descripcion' => 'JURÍDICA' 
        ]); 
    }
}
