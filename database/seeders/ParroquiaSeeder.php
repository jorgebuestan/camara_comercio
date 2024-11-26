<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParroquiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('parroquias')->insert([ 
            'id_pais' => 0, 
            'id_provincia' => 0, 
            'id_canton' => 0, 
            'nombre' => 'OTRA', 
            'estado' => '1' 
        ]);

        /* DB::table('parroquias')->insert([ 
            'id_pais' => 57, 
            'id_provincia' => 2, 
            'id_canton' => 0, 
            'nombre' => '', 
            'estado' => '1' 
        ]); */ 

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'CUENCA',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'BELLAVISTA',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'CAÑARIBAMBA',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'EL BATÁN',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'EL SAGRARIO',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'EL VECINO',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'GIL RAMÍREZ DÁVALOS',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'HUAYNACÁPAC',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'MACHÁNGARA',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'MONAY',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'SAN BLAS',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'SAN SEBASTIÁN',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'SUCRE',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'TOTORACOCHA',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'YANUNCAY',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'HERMANO MIGUEL',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'BAÑOS',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'CUMBE',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'CHAUCHA',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'CHECA (JIDCAY)',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'CHIQUINTAD',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'LLACAO',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'MOLLETURO',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'NULTI',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'OCTAVIO CORDERO PALACIOS (SANTA ROSA)',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'PACCHA',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'QUINGEO',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'RICAURTE',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'SAN JOAQUÍN',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'SANTA ANA',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'SAYAUSÍ',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'SIDCAY',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'SININCAY',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'TARQUI',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'TURI',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'VALLE',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 2,
            'nombre' => 'VICTORIA DEL PORTETE (IRQUIS)',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 3,
            'nombre' => 'GIRÓN',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 3,
            'nombre' => 'SAN GERARDO',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 3,
            'nombre' => 'ASUNCIÓN',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 4,
            'nombre' => 'GUALACEO',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 4,
            'nombre' => 'DANIEL CÓRDOVA TORAL (EL ORIENTE)',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 4,
            'nombre' => 'JADÁN',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 4,
            'nombre' => 'CHORDELEG',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 4,
            'nombre' => 'MARIANO MORENO',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 4,
            'nombre' => 'PRINCIPAL',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 4,
            'nombre' => 'REMIGIO CRESPO TORAL (GÚLAG)',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 4,
            'nombre' => 'SAN JUAN',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 4,
            'nombre' => 'ZHIDMAD',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 4,
            'nombre' => 'LUIS CORDERO VEGA',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 4,
            'nombre' => 'SIMÓN BOLÍVAR (CAB. EN GAÑANZOL)',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 5,
            'nombre' => 'NABÓN',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 5,
            'nombre' => 'COCHAPATA',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 5,
            'nombre' => 'EL PROGRESO (CAB.EN ZHOTA)',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 5,
            'nombre' => 'LAS NIEVES (CHAYA)',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 5,
            'nombre' => 'OÑA',
            'estado' => '1', 
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 6,
            'nombre' => 'PAUTE',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 6,
            'nombre' => 'AMALUZA',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 6,
            'nombre' => 'BULÁN (JOSÉ VÍCTOR IZQUIERDO)',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 6,
            'nombre' => 'CHICÁN (GUILLERMO ORTEGA)',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 6,
            'nombre' => 'EL CABO',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 6,
            'nombre' => 'GUACHAPALA',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 6,
            'nombre' => 'GUARAINAG',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 6,
            'nombre' => 'PALMAS',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 6,
            'nombre' => 'PAN',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 6,
            'nombre' => 'SAN CRISTÓBAL (CARLOS ORDÓÑEZ LAZO)',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 6,
            'nombre' => 'SEVILLA DE ORO',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 6,
            'nombre' => 'TOMEBAMBA',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 6,
            'nombre' => 'DUG DUG',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 7,
            'nombre' => 'PUCARÁ',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 7,
            'nombre' => 'CAMILO PONCE ENRÍQUEZ (CAB. EN RÍO 7 DE MOLLETURO)',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 7,
            'nombre' => 'SAN RAFAEL DE SHARUG',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 8,
            'nombre' => 'SAN FERNANDO',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 8,
            'nombre' => 'CHUMBLÍN',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 9,
            'nombre' => 'SANTA ISABEL (CHAGUARURCO)',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 9,
            'nombre' => 'ZHAGLLI (SHAGLLI)',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 9,
            'nombre' => 'SAN SALVADOR DE CAÑARIBAMBA',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 9,
            'nombre' => 'ABDÓN CALDERÓN (LA UNIÓN)',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 9,
            'nombre' => 'EL CARMEN DE PIJILÍ',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 10,
            'nombre' => 'SÍGSIG',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 10,
            'nombre' => 'SAN BARTOLOMÉ',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 10,
            'nombre' => 'CUCHIL (CUTCHIL)',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 10,
            'nombre' => 'GIMA',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 10,
            'nombre' => 'GUEL',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 10,
            'nombre' => 'LUDO',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 10,
            'nombre' => 'SAN JOSÉ DE RARANGA',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 11,
            'nombre' => 'SAN FELIPE DE OÑA CABECERA CANTONAL',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 11,
            'nombre' => 'SUSUDEL',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 12,
            'nombre' => 'CHORDELEG',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 12,
            'nombre' => 'PRINCIPAL',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 12,
            'nombre' => 'LA UNIÓN',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 12,
            'nombre' => 'LUIS GALARZA ORELLANA (CAB.EN DELEGSOL)',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 12,
            'nombre' => 'SAN MARTÍN DE PUZHIO',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 13,
            'nombre' => 'EL PAN',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 13,
            'nombre' => 'AMALUZA',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 13,
            'nombre' => 'PALMAS',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 13,
            'nombre' => 'SAN VICENTE',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 14,
            'nombre' => 'SEVILLA DE ORO',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 14,
            'nombre' => 'AMALUZA',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 14,
            'nombre' => 'PALMAS',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 15,
            'nombre' => 'GUACHAPALA',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 16,
            'nombre' => 'CAMILO PONCE ENRÍQUEZ',
            'estado' => '1',
        ]);
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' => 2,
            'id_canton' => 16,
            'nombre' => 'EL CARMEN DE PIJILÍ',
            'estado' => '1',
        ]);
    }
}
