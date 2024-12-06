<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoPresentacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tipo_presentacion')->insert([  
            'descripcion' => 'MENSUAL' 
        ]); 

        DB::table('tipo_presentacion')->insert([  
            'descripcion' => 'BIMENSUAL' 
        ]); 

        DB::table('tipo_presentacion')->insert([  
            'descripcion' => 'TRIMESTRAL' 
        ]); 

        DB::table('tipo_presentacion')->insert([  
            'descripcion' => 'SEMESTRAL' 
        ]); 

        DB::table('tipo_presentacion')->insert([  
            'descripcion' => 'ANUAL' 
        ]); 
    }
}
