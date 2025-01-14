<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoFormularioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('estados_formulario_socio')->insert([  
            'descripcion' => 'En Proceso' 
        ]); 

        DB::table('estados_formulario_socio')->insert([  
            'descripcion' => 'En Revisión' 
        ]); 

        DB::table('estados_formulario_socio')->insert([  
            'descripcion' => 'Aprobado' 
        ]); 

        DB::table('estados_formulario_socio')->insert([  
            'descripcion' => 'Rechazado' 
        ]); 
    }
}
