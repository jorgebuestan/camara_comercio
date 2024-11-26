<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActividadEconomicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('actividades_economicas')->insert([ 
            'codigo' => 'COD001', 
            'nombre' => 'Actividad 1' 
        ]); 

        DB::table('actividades_economicas')->insert([ 
            'codigo' => 'COD002', 
            'nombre' => 'Actividad 2' 
        ]);

        DB::table('actividades_economicas')->insert([ 
            'codigo' => 'COD003', 
            'nombre' => 'Actividad 3' 
        ]);

        DB::table('actividades_economicas')->insert([ 
            'codigo' => 'COD004', 
            'nombre' => 'Actividad 4' 
        ]);

        DB::table('actividades_economicas')->insert([ 
            'codigo' => 'COD005', 
            'nombre' => 'Actividad 5' 
        ]);

        DB::table('actividades_economicas')->insert([ 
            'codigo' => 'COD006', 
            'nombre' => 'Actividad 6' 
        ]); 

        DB::table('actividades_economicas')->insert([ 
            'codigo' => 'COD007', 
            'nombre' => 'Actividad 7' 
        ]);

        DB::table('actividades_economicas')->insert([ 
            'codigo' => 'COD008', 
            'nombre' => 'Actividad 8' 
        ]);

        DB::table('actividades_economicas')->insert([ 
            'codigo' => 'COD009', 
            'nombre' => 'Actividad 9' 
        ]);

        DB::table('actividades_economicas')->insert([ 
            'codigo' => 'COD010', 
            'nombre' => 'Actividad 10' 
        ]);
    }
}
