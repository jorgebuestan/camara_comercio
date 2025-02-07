<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('tipo_documento')->insert([
            'descripcion' => 'CÉDULA',
        ]);

        DB::table('tipo_documento')->insert([ 
            'descripcion' => 'ESCRITURAS',
        ]);

        DB::table('tipo_documento')->insert([ 
            'descripcion' => 'ESTATUTOS',
        ]);


        DB::table('tipo_documento')->insert([
            'descripcion' => 'FOTO',
        ]);

        DB::table('tipo_documento')->insert([ 
            'descripcion' => 'NOMBRAMIENTO',
        ]);

        DB::table('tipo_documento')->insert([ 
            'descripcion' => 'RUC',
        ]);

        DB::table('tipo_documento')->insert([ 
            'descripcion' => 'SOLICITUD',
        ]);

        DB::table('tipo_documento')->insert([ 
            'descripcion' => 'VARIOS',
        ]); 
    }
}
