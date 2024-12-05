<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiempoPresentacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tiempo_presentacion')->insert([  
            'nombre' => 'ÚNICA VEZ' 
        ]); 

        DB::table('tiempo_presentacion')->insert([  
            'nombre' => 'CONSECUTIVA' 
        ]); 
    }
}
