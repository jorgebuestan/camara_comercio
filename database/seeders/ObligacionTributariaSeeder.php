<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObligacionTributariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('obligaciones_tributarias')->insert([ 
            'codigo' => 'COD001', 
            'nombre' => 'Obligacion Tributria 1' 
        ]); 

        DB::table('obligaciones_tributarias')->insert([ 
            'codigo' => 'COD002', 
            'nombre' => 'Obligacion Tributria 2' 
        ]);

        DB::table('obligaciones_tributarias')->insert([ 
            'codigo' => 'COD003', 
            'nombre' => 'Obligacion Tributria 3' 
        ]);

        DB::table('obligaciones_tributarias')->insert([ 
            'codigo' => 'COD004', 
            'nombre' => 'Obligacion Tributria 4' 
        ]);

        DB::table('obligaciones_tributarias')->insert([ 
            'codigo' => 'COD005', 
            'nombre' => 'Obligacion Tributria 5' 
        ]);

        DB::table('obligaciones_tributarias')->insert([ 
            'codigo' => 'COD006', 
            'nombre' => 'Obligacion Tributria 6' 
        ]); 

        DB::table('obligaciones_tributarias')->insert([ 
            'codigo' => 'COD007', 
            'nombre' => 'Obligacion Tributria 7' 
        ]);

        DB::table('obligaciones_tributarias')->insert([ 
            'codigo' => 'COD008', 
            'nombre' => 'Obligacion Tributria 8' 
        ]);

        DB::table('obligaciones_tributarias')->insert([ 
            'codigo' => 'COD009', 
            'nombre' => 'Obligacion Tributria 9' 
        ]);

        DB::table('obligaciones_tributarias')->insert([ 
            'codigo' => 'COD010', 
            'nombre' => 'Obligacion Tributria 10' 
        ]);
    }
}
