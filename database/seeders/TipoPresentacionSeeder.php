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
            'nombre' => 'MENSUAL' 
        ]); 

        DB::table('tipo_presentacion')->insert([  
            'nombre' => 'BIMENSUAL' 
        ]); 

        DB::table('tipo_presentacion')->insert([  
            'nombre' => 'TRIMESTRAL' 
        ]); 

        DB::table('tipo_presentacion')->insert([  
            'nombre' => 'SEMESTRAL' 
        ]); 

        DB::table('tipo_presentacion')->insert([  
            'nombre' => 'ANUAL' 
        ]); 
    }
}
