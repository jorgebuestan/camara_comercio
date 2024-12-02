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

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>17,
            'nombre' =>'ÁNGEL POLIBIO CHÁVES',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>17,
            'nombre' =>'GABRIEL IGNACIO VEINTIMILLA',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>17,
            'nombre' =>'GUANUJO',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>17,
            'nombre' =>'GUARANDA',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>17,
            'nombre' =>'FACUNDO VELA',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>17,
            'nombre' =>'GUANUJO',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>17,
            'nombre' =>'JULIO E. MORENO (CATANAHUÁN GRANDE)',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>17,
            'nombre' =>'LAS NAVES',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>17,
            'nombre' =>'SALINAS',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>17,
            'nombre' =>'SAN LORENZO',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>17,
            'nombre' =>'SAN SIMÓN (YACOTO)',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>17,
            'nombre' =>'SANTA FÉ (SANTA FÉ)',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>17,
            'nombre' =>'SIMIÁTUG',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>17,
            'nombre' =>'SAN LUIS DE PAMBIL',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>18,
            'nombre' =>'CHILLANES',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>18,
            'nombre' =>'SAN JOSÉ DEL TAMBO (TAMBOPAMBA)',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>19,
            'nombre' =>'SAN JOSÉ DE CHIMBO',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>19,
            'nombre' =>'ASUNCIÓN (ASANCOTO)',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>19,
            'nombre' =>'CALUMA',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>19,
            'nombre' =>'MAGDALENA (CHAPACOTO)',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>19,
            'nombre' =>'SAN SEBASTIÁN',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>19,
            'nombre' =>'TELIMBELA',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>20,
            'nombre' =>'ECHEANDÍA',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>21,
            'nombre' =>'SAN MIGUEL',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>21,
            'nombre' =>'BALSAPAMBA',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>21,
            'nombre' =>'BILOVÁN',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>21,
            'nombre' =>'RÉGULO DE MORA',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>21,
            'nombre' =>'SAN PABLO (SAN PABLO DE ATENAS)',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>21,
            'nombre' =>'SANTIAGO',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>21,
            'nombre' =>'SAN VICENTE',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>22,
            'nombre' =>'CALUMA',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>23,
            'nombre' =>'LAS MERCEDES',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>23,
            'nombre' =>'LAS NAVES',
            'estado' =>'1',
         ]);
         
         
         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>3,
            'id_canton' =>23,
            'nombre' =>'LAS NAVES',
            'estado' =>'1',
         ]);

         DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	24	,
            'nombre' => 'AURELIO BAYAS MARTÍNEZ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	24	,
            'nombre' => 'AZOGUES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	24	,
            'nombre' => 'BORRERO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	24	,
            'nombre' => 'SAN FRANCISCO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	24	,
            'nombre' => 'AZOGUES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	24	,
            'nombre' => 'COJITAMBO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	24	,
            'nombre' => 'DÉLEG',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	24	,
            'nombre' => 'GUAPÁN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	24	,
            'nombre' => 'JAVIER LOYOLA (CHUQUIPATA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	24	,
            'nombre' => 'LUIS CORDERO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	24	,
            'nombre' => 'PINDILIG',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	24	,
            'nombre' => 'RIVERA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	24	,
            'nombre' => 'SAN MIGUEL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	24	,
            'nombre' => 'SOLANO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	24	,
            'nombre' => 'TADAY',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	25	,
            'nombre' => 'BIBLIÁN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	25	,
            'nombre' => 'NAZÓN (CAB. EN PAMPA DE DOMÍNGUEZ)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	25	,
            'nombre' => 'SAN FRANCISCO DE SAGEO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	25	,
            'nombre' => 'TURUPAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	25	,
            'nombre' => 'JERUSALÉN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	26	,
            'nombre' => 'CAÑAR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	26	,
            'nombre' => 'CHONTAMARCA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	26	,
            'nombre' => 'CHOROCOPTE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	26	,
            'nombre' => 'GENERAL MORALES (SOCARTE)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	26	,
            'nombre' => 'GUALLETURO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	26	,
            'nombre' => 'HONORATO VÁSQUEZ (TAMBO VIEJO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	26	,
            'nombre' => 'INGAPIRCA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	26	,
            'nombre' => 'JUNCAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	26	,
            'nombre' => 'SAN ANTONIO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	26	,
            'nombre' => 'SUSCAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	26	,
            'nombre' => 'TAMBO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	26	,
            'nombre' => 'ZHUD',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	26	,
            'nombre' => 'VENTURA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	26	,
            'nombre' => 'DUCUR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	27	,
            'nombre' => 'LA TRONCAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	27	,
            'nombre' => 'MANUEL J. CALLE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	27	,
            'nombre' => 'PANCHO NEGRO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	28	,
            'nombre' => 'EL TAMBO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	29	,
            'nombre' => 'DÉLEG',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	29	,
            'nombre' => 'SOLANO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>4,
            'id_canton' =>	30	,
            'nombre' => 'SUSCAL',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>31,
            'nombre' => 'GONZÁLEZ SUÁREZ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>31,
            'nombre' => 'TULCÁN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>31,
            'nombre' => 'TULCÁN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>31,
            'nombre' => 'EL CARMELO (EL PUN)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>31,
            'nombre' => 'HUACA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>31,
            'nombre' => 'JULIO ANDRADE (OREJUELA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>31,
            'nombre' => 'MALDONADO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>31,
            'nombre' => 'PIOTER',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>31,
            'nombre' => 'TOBAR DONOSO (LA BOCANA DE CAMUMBÍ)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>31,
            'nombre' => 'TUFIÑO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>31,
            'nombre' => 'URBINA (TAYA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>31,
            'nombre' => 'EL CHICAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>31,
            'nombre' => 'MARISCAL SUCRE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>31,
            'nombre' => 'SANTA MARTHA DE CUBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>32,
            'nombre' => 'BOLÍVAR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>32,
            'nombre' => 'GARCÍA MORENO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>32,
            'nombre' => 'LOS ANDES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>32,
            'nombre' => 'MONTE OLIVO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>32,
            'nombre' => 'SAN VICENTE DE PUSIR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>32,
            'nombre' => 'SAN RAFAEL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>33,
            'nombre' => 'EL ÁNGEL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>33,
            'nombre' => '27 DE SEPTIEMBRE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>33,
            'nombre' => 'EL ANGEL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>33,
            'nombre' => 'EL GOALTAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>33,
            'nombre' => 'LA LIBERTAD (ALIZO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>33,
            'nombre' => 'SAN ISIDRO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>34,
            'nombre' => 'MIRA (CHONTAHUASI)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>34,
            'nombre' => 'CONCEPCIÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>34,
            'nombre' => 'JIJÓN Y CAAMAÑO (CAB. EN RÍO BLANCO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>34,
            'nombre' => 'JUAN MONTALVO (SAN IGNACIO DE QUIL)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>35,
            'nombre' => 'GONZÁLEZ SUÁREZ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>35,
            'nombre' => 'SAN JOSÉ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>35,
            'nombre' => 'SAN GABRIEL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>35,
            'nombre' => 'CRISTÓBAL COLÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>35,
            'nombre' => 'CHITÁN DE NAVARRETE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>35,
            'nombre' => 'FERNÁNDEZ SALVADOR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>35,
            'nombre' => 'LA PAZ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>35,
            'nombre' => 'PIARTAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>36,
            'nombre' => 'HUACA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>5,
            'id_canton' =>36,
            'nombre' => 'MARISCAL SUCRE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>37,
            'nombre' => 'ELOY ALFARO (SAN FELIPE)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>37,
            'nombre' => 'IGNACIO FLORES (PARQUE FLORES)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>37,
            'nombre' => 'JUAN MONTALVO (SAN SEBASTIÁN)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>37,
            'nombre' => 'LA MATRIZ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>37,
            'nombre' => 'SAN BUENAVENTURA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>37,
            'nombre' => 'LATACUNGA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>37,
            'nombre' => 'ALAQUES (ALÁQUEZ)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>37,
            'nombre' => 'BELISARIO QUEVEDO (GUANAILÍN)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>37,
            'nombre' => 'GUAITACAMA (GUAYTACAMA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>37,
            'nombre' => 'JOSEGUANGO BAJO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>37,
            'nombre' => 'LAS PAMPAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>37,
            'nombre' => 'MULALÓ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>37,
            'nombre' => '11 DE NOVIEMBRE (ILINCHISI)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>37,
            'nombre' => 'POALÓ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>37,
            'nombre' => 'SAN JUAN DE PASTOCALLE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>37,
            'nombre' => 'SIGCHOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>37,
            'nombre' => 'TANICUCHÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>37,
            'nombre' => 'TOACASO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>37,
            'nombre' => 'PALO QUEMADO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>38,
            'nombre' => 'EL CARMEN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>38,
            'nombre' => 'LA MANÁ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>38,
            'nombre' => 'EL TRIUNFO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>38,
            'nombre' => 'LA MANÁ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>38,
            'nombre' => 'GUASAGANDA (CAB.EN GUASAGANDA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>38,
            'nombre' => 'PUCAYACU',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>39,
            'nombre' => 'EL CORAZÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>39,
            'nombre' => 'MORASPUNGO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>39,
            'nombre' => 'PINLLOPATA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>39,
            'nombre' => 'RAMÓN CAMPAÑA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>40,
            'nombre' => 'PUJILÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>40,
            'nombre' => 'ANGAMARCA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>40,
            'nombre' => 'CHUCCHILÁN (CHUGCHILÁN)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>40,
            'nombre' => 'GUANGAJE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>40,
            'nombre' => 'ISINLIBÍ (ISINLIVÍ)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>40,
            'nombre' => 'LA VICTORIA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>40,
            'nombre' => 'PILALÓ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>40,
            'nombre' => 'TINGO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>40,
            'nombre' => 'ZUMBAHUA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>41,
            'nombre' => 'SAN MIGUEL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>41,
            'nombre' => 'ANTONIO JOSÉ HOLGUÍN (SANTA LUCÍA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>41,
            'nombre' => 'CUSUBAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>41,
            'nombre' => 'MULALILLO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>41,
            'nombre' => 'MULLIQUINDIL (SANTA ANA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>41,
            'nombre' => 'PANSALEO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>42,
            'nombre' => 'SAQUISILÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>42,
            'nombre' => 'CANCHAGUA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>42,
            'nombre' => 'CHANTILÍN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>42,
            'nombre' => 'COCHAPAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>43,
            'nombre' => 'SIGCHOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>43,
            'nombre' => 'CHUGCHILLÁN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>43,
            'nombre' => 'ISINLIVÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>43,
            'nombre' => 'LAS PAMPAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>6,
            'id_canton' =>43,
            'nombre' => 'PALO QUEMADO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>44,
            'nombre' => 'LIZARZABURU',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>44,
            'nombre' => 'MALDONADO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>44,
            'nombre' => 'VELASCO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>44,
            'nombre' => 'VELOZ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>44,
            'nombre' => 'YARUQUÍES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>44,
            'nombre' => 'RIOBAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>44,
            'nombre' => 'CACHA (CAB. EN MACHÁNGARA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>44,
            'nombre' => 'CALPI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>44,
            'nombre' => 'CUBIJÍES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>44,
            'nombre' => 'FLORES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>44,
            'nombre' => 'LICÁN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>44,
            'nombre' => 'LICTO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>44,
            'nombre' => 'PUNGALÁ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>44,
            'nombre' => 'PUNÍN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>44,
            'nombre' => 'QUIMIAG',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>44,
            'nombre' => 'SAN JUAN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>44,
            'nombre' => 'SAN LUIS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>45,
            'nombre' => 'ALAUSÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>45,
            'nombre' => 'ACHUPALLAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>45,
            'nombre' => 'CUMANDÁ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>45,
            'nombre' => 'GUASUNTOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>45,
            'nombre' => 'HUIGRA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>45,
            'nombre' => 'MULTITUD',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>45,
            'nombre' => 'PISTISHÍ (NARIZ DEL DIABLO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>45,
            'nombre' => 'PUMALLACTA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>45,
            'nombre' => 'SEVILLA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>45,
            'nombre' => 'SIBAMBE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>45,
            'nombre' => 'TIXÁN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>46,
            'nombre' => 'CAJABAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>46,
            'nombre' => 'SICALPA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>46,
            'nombre' => 'VILLA LA UNIÓN (CAJABAMBA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>46,
            'nombre' => 'CAÑI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>46,
            'nombre' => 'COLUMBE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>46,
            'nombre' => 'JUAN DE VELASCO (PANGOR)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>46,
            'nombre' => 'SANTIAGO DE QUITO (CAB. EN SAN ANTONIO DE QUITO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>47,
            'nombre' => 'CHAMBO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>48,
            'nombre' => 'CHUNCHI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>48,
            'nombre' => 'CAPZOL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>48,
            'nombre' => 'COMPUD',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>48,
            'nombre' => 'GONZOL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>48,
            'nombre' => 'LLAGOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>49,
            'nombre' => 'GUAMOTE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>49,
            'nombre' => 'CEBADAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>49,
            'nombre' => 'PALMIRA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>50,
            'nombre' => 'EL ROSARIO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>50,
            'nombre' => 'LA MATRIZ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>50,
            'nombre' => 'GUANO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>50,
            'nombre' => 'GUANANDO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>50,
            'nombre' => 'ILAPO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>50,
            'nombre' => 'LA PROVIDENCIA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>50,
            'nombre' => 'SAN ANDRÉS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>50,
            'nombre' => 'SAN GERARDO DE PACAICAGUÁN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>50,
            'nombre' => 'SAN ISIDRO DE PATULÚ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>50,
            'nombre' => 'SAN JOSÉ DEL CHAZO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>50,
            'nombre' => 'SANTA FÉ DE GALÁN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>50,
            'nombre' => 'VALPARAÍSO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>51,
            'nombre' => 'PALLATANGA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>52,
            'nombre' => 'PENIPE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>52,
            'nombre' => 'EL ALTAR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>52,
            'nombre' => 'MATUS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>52,
            'nombre' => 'PUELA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>52,
            'nombre' => 'SAN ANTONIO DE BAYUSHIG',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>52,
            'nombre' => 'LA CANDELARIA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>52,
            'nombre' => 'BILBAO (CAB.EN QUILLUYACU)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>7,
            'id_canton' =>53,
            'nombre' => 'CUMANDÁ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>53,
            'nombre' => 'LA PROVIDENCIA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>54,
            'nombre' => 'MACHALA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>54,
            'nombre' => 'PUERTO BOLÍVAR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>54,
            'nombre' => 'NUEVE DE MAYO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>54,
            'nombre' => 'EL CAMBIO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>54,
            'nombre' => 'MACHALA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>54,
            'nombre' => 'EL CAMBIO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>54,
            'nombre' => 'EL RETIRO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>55,
            'nombre' => 'ARENILLAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>55,
            'nombre' => 'CHACRAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>55,
            'nombre' => 'LA LIBERTAD',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>55,
            'nombre' => 'LAS LAJAS (CAB. EN LA VICTORIA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>55,
            'nombre' => 'PALMALES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>55,
            'nombre' => 'CARCABÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>56,
            'nombre' => 'PACCHA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>56,
            'nombre' => 'AYAPAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>56,
            'nombre' => 'CORDONCILLO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>56,
            'nombre' => 'MILAGRO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>56,
            'nombre' => 'SAN JOSÉ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>56,
            'nombre' => 'SAN JUAN DE CERRO AZUL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>57,
            'nombre' => 'BALSAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>57,
            'nombre' => 'BELLAMARÍA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>58,
            'nombre' => 'CHILLA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>59,
            'nombre' => 'EL GUABO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>59,
            'nombre' => 'BARBONES (SUCRE)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>59,
            'nombre' => 'LA IBERIA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>59,
            'nombre' => 'TENDALES (CAB.EN PUERTO TENDALES)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>59,
            'nombre' => 'RÍO BONITO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>60,
            'nombre' => 'ECUADOR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>60,
            'nombre' => 'EL PARAÍSO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>60,
            'nombre' => 'HUALTACO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>60,
            'nombre' => 'MILTON REYES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>60,
            'nombre' => 'UNIÓN LOJANA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>60,
            'nombre' => 'HUAQUILLAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>61,
            'nombre' => 'MARCABELÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>61,
            'nombre' => 'EL INGENIO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>62,
            'nombre' => 'BOLÍVAR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>62,
            'nombre' => 'LOMA DE FRANCO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>62,
            'nombre' => 'OCHOA LEÓN (MATRIZ)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>62,
            'nombre' => 'TRES CERRITOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>62,
            'nombre' => 'PASAJE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>62,
            'nombre' => 'BUENAVISTA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>62,
            'nombre' => 'CASACAY',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>62,
            'nombre' => 'LA PEAÑA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>62,
            'nombre' => 'PROGRESO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>62,
            'nombre' => 'UZHCURRUMI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>62,
            'nombre' => 'CAÑAQUEMADA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>63,
            'nombre' => 'LA MATRIZ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>63,
            'nombre' => 'LA SUSAYA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>63,
            'nombre' => 'PIÑAS GRANDE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>63,
            'nombre' => 'PIÑAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>63,
            'nombre' => 'CAPIRO (CAB. EN LA CAPILLA DE CAPIRO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>63,
            'nombre' => 'LA BOCANA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>63,
            'nombre' => 'MOROMORO (CAB. EN EL VADO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>63,
            'nombre' => 'PIEDRAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>63,
            'nombre' => 'SAN ROQUE (AMBROSIO MALDONADO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>63,
            'nombre' => 'SARACAY',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>64,
            'nombre' => 'PORTOVELO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>64,
            'nombre' => 'CURTINCAPA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>64,
            'nombre' => 'MORALES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>64,
            'nombre' => 'SALATÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>65,
            'nombre' => 'SANTA ROSA',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>65,
            'nombre' => 'PUERTO JELÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>65,
            'nombre' => 'BALNEARIO JAMBELÍ (SATÉLITE)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>65,
            'nombre' => 'JUMÓN (SATÉLITE)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>65,
            'nombre' => 'NUEVO SANTA ROSA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>65,
            'nombre' => 'SANTA ROSA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>65,
            'nombre' => 'BELLAVISTA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>65,
            'nombre' => 'JAMBELÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>65,
            'nombre' => 'LA AVANZADA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>65,
            'nombre' => 'SAN ANTONIO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>65,
            'nombre' => 'TORATA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>65,
            'nombre' => 'VICTORIA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>65,
            'nombre' => 'BELLAMARÍA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>66,
            'nombre' => 'ZARUMA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>66,
            'nombre' => 'ABAÑÍN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>66,
            'nombre' => 'ARCAPAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>66,
            'nombre' => 'GUANAZÁN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>66,
            'nombre' => 'GUIZHAGUIÑA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>66,
            'nombre' => 'HUERTAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>66,
            'nombre' => 'MALVAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>66,
            'nombre' => 'MULUNCAY GRANDE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>66,
            'nombre' => 'SINSAO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>66,
            'nombre' => 'SALVIAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>67,
            'nombre' => 'LA VICTORIA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>67,
            'nombre' => 'PLATANILLOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>67,
            'nombre' => 'VALLE HERMOSO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>67,
            'nombre' => 'LA VICTORIA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>67,
            'nombre' => 'LA LIBERTAD',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>67,
            'nombre' => 'EL PARAÍSO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>8,
            'id_canton' =>67,
            'nombre' => 'SAN ISIDRO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'BARTOLOMÉ RUIZ (CÉSAR FRANCO CARRIÓN)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => '5 DE AGOSTO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'ESMERALDAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'LUIS TELLO (LAS PALMAS)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'SIMÓN PLATA TORRES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'ESMERALDAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'ATACAMES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'CAMARONES (CAB. EN SAN VICENTE)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'CRNEL. CARLOS CONCHA TORRES (CAB.EN HUELE)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'CHINCA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'CHONTADURO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'CHUMUNDÉ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'LAGARTO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'LA UNIÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'MAJUA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'MONTALVO (CAB. EN HORQUETA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'RÍO VERDE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'ROCAFUERTE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'SAN MATEO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'SÚA (CAB. EN LA BOCANA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'TABIAZO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'TACHINA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'TONCHIGÜE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>68,
            'nombre' => 'VUELTA LARGA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>69,
            'nombre' => 'VALDEZ (LIMONES)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>69,
            'nombre' => 'ANCHAYACU',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>69,
            'nombre' => 'ATAHUALPA (CAB. EN CAMARONES)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>69,
            'nombre' => 'BORBÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>69,
            'nombre' => 'LA TOLA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>69,
            'nombre' => 'LUIS VARGAS TORRES (CAB. EN PLAYA DE ORO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>69,
            'nombre' => 'MALDONADO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>69,
            'nombre' => 'PAMPANAL DE BOLÍVAR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>69,
            'nombre' => 'SAN FRANCISCO DE ONZOLE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>69,
            'nombre' => 'SANTO DOMINGO DE ONZOLE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>69,
            'nombre' => 'SELVA ALEGRE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>69,
            'nombre' => 'TELEMBÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>69,
            'nombre' => 'COLÓN ELOY DEL MARÍA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>69,
            'nombre' => 'SAN JOSÉ DE CAYAPAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>69,
            'nombre' => 'TIMBIRÉ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>70,
            'nombre' => 'MUISNE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>70,
            'nombre' => 'BOLÍVAR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>70,
            'nombre' => 'DAULE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>70,
            'nombre' => 'GALERA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>70,
            'nombre' => 'QUINGUE (OLMEDO PERDOMO FRANCO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>70,
            'nombre' => 'SALIMA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>70,
            'nombre' => 'SAN FRANCISCO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>70,
            'nombre' => 'SAN GREGORIO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>70,
            'nombre' => 'SAN JOSÉ DE CHAMANGA (CAB.EN CHAMANGA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>71,
            'nombre' => 'ROSA ZÁRATE (QUININDÉ)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>71,
            'nombre' => 'CUBE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>71,
            'nombre' => 'CHURA (CHANCAMA) (CAB. EN EL YERBERO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>71,
            'nombre' => 'MALIMPIA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>71,
            'nombre' => 'VICHE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>71,
            'nombre' => 'LA UNIÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>72,
            'nombre' => 'SAN LORENZO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>72,
            'nombre' => 'ALTO TAMBO (CAB. EN GUADUAL)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>72,
            'nombre' => 'ANCÓN (PICHANGAL) (CAB. EN PALMA REAL)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>72,
            'nombre' => 'CALDERÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>72,
            'nombre' => 'CARONDELET',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>72,
            'nombre' => '5 DE JUNIO (CAB. EN UIMBI)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>72,
            'nombre' => 'CONCEPCIÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>72,
            'nombre' => 'MATAJE (CAB. EN SANTANDER)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>72,
            'nombre' => 'SAN JAVIER DE CACHAVÍ (CAB. EN SAN JAVIER)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>72,
            'nombre' => 'SANTA RITA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>72,
            'nombre' => 'TAMBILLO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>72,
            'nombre' => 'TULULBÍ (CAB. EN RICAURTE)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>72,
            'nombre' => 'URBINA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>73,
            'nombre' => 'ATACAMES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>73,
            'nombre' => 'LA UNIÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>73,
            'nombre' => 'SÚA (CAB. EN LA BOCANA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>73,
            'nombre' => 'TONCHIGÜE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>73,
            'nombre' => 'TONSUPA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>74,
            'nombre' => 'RIOVERDE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>74,
            'nombre' => 'CHONTADURO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>74,
            'nombre' => 'CHUMUNDÉ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>74,
            'nombre' => 'LAGARTO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>74,
            'nombre' => 'MONTALVO (CAB. EN HORQUETA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>74,
            'nombre' => 'ROCAFUERTE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>75,
            'nombre' => 'LA CONCORDIA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>75,
            'nombre' => 'MONTERREY',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>75,
            'nombre' => 'LA VILLEGAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>9,
            'id_canton' =>75,
            'nombre' => 'PLAN PILOTO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'AYACUCHO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'BOLÍVAR (SAGRARIO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'CARBO (CONCEPCIÓN)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'FEBRES CORDERO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'GARCÍA MORENO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'LETAMENDI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'NUEVE DE OCTUBRE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'OLMEDO (SAN ALEJO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'ROCA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'ROCAFUERTE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'SUCRE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'TARQUI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'URDANETA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'XIMENA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'PASCUALES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'GUAYAQUIL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'CHONGÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'JUAN GÓMEZ RENDÓN (PROGRESO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'MORRO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'PASCUALES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'PLAYAS (GRAL. VILLAMIL)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'POSORJA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'PUNÁ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>76,
            'nombre' => 'TENGUEL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>77,
            'nombre' => 'ALFREDO BAQUERIZO MORENO (JUJÁN)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>78,
            'nombre' => 'BALAO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>79,
            'nombre' => 'BALZAR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>80,
            'nombre' => 'COLIMES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>80,
            'nombre' => 'SAN JACINTO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>81,
            'nombre' => 'DAULE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>81,
            'nombre' => 'LA AURORA (SATÉLITE)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>81,
            'nombre' => 'BANIFE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>81,
            'nombre' => 'EMILIANO CAICEDO MARCOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>81,
            'nombre' => 'MAGRO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>81,
            'nombre' => 'PADRE JUAN BAUTISTA AGUIRRE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>81,
            'nombre' => 'SANTA CLARA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>81,
            'nombre' => 'VICENTE PIEDRAHITA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>81,
            'nombre' => 'DAULE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>81,
            'nombre' => 'ISIDRO AYORA (SOLEDAD)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>81,
            'nombre' => 'JUAN BAUTISTA AGUIRRE (LOS TINTOS)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>81,
            'nombre' => 'LAUREL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>81,
            'nombre' => 'LIMONAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>81,
            'nombre' => 'LOMAS DE SARGENTILLO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>81,
            'nombre' => 'LOS LOJAS (ENRIQUE BAQUERIZO MORENO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>81,
            'nombre' => 'PIEDRAHITA (NOBOL)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>82,
            'nombre' => 'ELOY ALFARO (DURÁN)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>82,
            'nombre' => 'EL RECREO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>82,
            'nombre' => 'ELOY ALFARO (DURÁN)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>83,
            'nombre' => 'VELASCO IBARRA (EL EMPALME)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>83,
            'nombre' => 'GUAYAS (PUEBLO NUEVO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>83,
            'nombre' => 'EL ROSARIO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>84,
            'nombre' => 'EL TRIUNFO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>85,
            'nombre' => 'MILAGRO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>85,
            'nombre' => 'CHOBO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>85,
            'nombre' => 'GENERAL ELIZALDE (BUCAY)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>85,
            'nombre' => 'MARISCAL SUCRE (HUAQUES)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>85,
            'nombre' => 'ROBERTO ASTUDILLO (CAB. EN CRUCE DE VENECIA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>86,
            'nombre' => 'NARANJAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>86,
            'nombre' => 'JESÚS MARÍA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>86,
            'nombre' => 'SAN CARLOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>86,
            'nombre' => 'SANTA ROSA DE FLANDES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>86,
            'nombre' => 'TAURA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>87,
            'nombre' => 'NARANJITO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>88,
            'nombre' => 'PALESTINA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>89,
            'nombre' => 'PEDRO CARBO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>89,
            'nombre' => 'VALLE DE LA VIRGEN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>89,
            'nombre' => 'SABANILLA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>90,
            'nombre' => 'SAMBORONDÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>90,
            'nombre' => 'LA PUNTILLA (SATÉLITE)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>90,
            'nombre' => 'SAMBORONDÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>90,
            'nombre' => 'TARIFA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>91,
            'nombre' => 'SANTA LUCÍA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>92,
            'nombre' => 'BOCANA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>92,
            'nombre' => 'CANDILEJOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>92,
            'nombre' => 'CENTRAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>92,
            'nombre' => 'PARAÍSO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>92,
            'nombre' => 'SAN MATEO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>92,
            'nombre' => 'EL SALITRE (LAS RAMAS)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>92,
            'nombre' => 'GRAL. VERNAZA (DOS ESTEROS)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>92,
            'nombre' => 'LA VICTORIA (ÑAUZA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>92,
            'nombre' => 'JUNQUILLAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>93,
            'nombre' => 'SAN JACINTO DE YAGUACHI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>93,
            'nombre' => 'CRNEL. LORENZO DE GARAICOA (PEDREGAL)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>93,
            'nombre' => 'CRNEL. MARCELINO MARIDUEÑA (SAN CARLOS)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>93,
            'nombre' => 'GRAL. PEDRO J. MONTERO (BOLICHE)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>93,
            'nombre' => 'SIMÓN BOLÍVAR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>93,
            'nombre' => 'YAGUACHI VIEJO (CONE)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>93,
            'nombre' => 'VIRGEN DE FÁTIMA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>94,
            'nombre' => 'GENERAL VILLAMIL (PLAYAS)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>95,
            'nombre' => 'SIMÓN BOLÍVAR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>95,
            'nombre' => 'CRNEL.LORENZO DE GARAICOA (PEDREGAL)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>96,
            'nombre' => 'CORONEL MARCELINO MARIDUEÑA (SAN CARLOS)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>97,
            'nombre' => 'LOMAS DE SARGENTILLO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>97,
            'nombre' => 'ISIDRO AYORA (SOLEDAD)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>98,
            'nombre' => 'NARCISA DE JESÚS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>99,
            'nombre' => 'GENERAL ANTONIO ELIZALDE (BUCAY)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>10,
            'id_canton' =>100,
            'nombre' => 'ISIDRO AYORA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>101,
            'nombre' => 'CARANQUI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>101,
            'nombre' => 'GUAYAQUIL DE ALPACHACA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>101,
            'nombre' => 'SAGRARIO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>101,
            'nombre' => 'SAN FRANCISCO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>101,
            'nombre' => 'LA DOLOROSA DEL PRIORATO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>101,
            'nombre' => 'SAN MIGUEL DE IBARRA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>101,
            'nombre' => 'AMBUQUÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>101,
            'nombre' => 'ANGOCHAGUA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>101,
            'nombre' => 'CAROLINA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>101,
            'nombre' => 'LA ESPERANZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>101,
            'nombre' => 'LITA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>101,
            'nombre' => 'SALINAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>101,
            'nombre' => 'SAN ANTONIO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>102,
            'nombre' => 'ANDRADE MARÍN (LOURDES)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>102,
            'nombre' => 'ATUNTAQUI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>102,
            'nombre' => 'ATUNTAQUI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>102,
            'nombre' => 'IMBAYA (SAN LUIS DE COBUENDO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>102,
            'nombre' => 'SAN FRANCISCO DE NATABUELA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>102,
            'nombre' => 'SAN JOSÉ DE CHALTURA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>102,
            'nombre' => 'SAN ROQUE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>103,
            'nombre' => 'SAGRARIO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>103,
            'nombre' => 'SAN FRANCISCO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>103,
            'nombre' => 'COTACACHI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>103,
            'nombre' => 'APUELA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>103,
            'nombre' => 'GARCÍA MORENO (LLURIMAGUA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>103,
            'nombre' => 'IMANTAG',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>103,
            'nombre' => 'PEÑAHERRERA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>103,
            'nombre' => 'PLAZA GUTIÉRREZ (CALVARIO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>103,
            'nombre' => 'QUIROGA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>103,
            'nombre' => '6 DE JULIO DE CUELLAJE (CAB. EN CUELLAJE)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>103,
            'nombre' => 'VACAS GALINDO (EL CHURO) (CAB.EN SAN MIGUEL ALTO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>104,
            'nombre' => 'JORDÁN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>104,
            'nombre' => 'SAN LUIS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>104,
            'nombre' => 'OTAVALO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>104,
            'nombre' => 'DR. MIGUEL EGAS CABEZAS (PEGUCHE)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>104,
            'nombre' => 'EUGENIO ESPEJO (CALPAQUÍ)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>104,
            'nombre' => 'GONZÁLEZ SUÁREZ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>104,
            'nombre' => 'PATAQUÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>104,
            'nombre' => 'SAN JOSÉ DE QUICHINCHE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>104,
            'nombre' => 'SAN JUAN DE ILUMÁN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>104,
            'nombre' => 'SAN PABLO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>104,
            'nombre' => 'SAN RAFAEL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>104,
            'nombre' => 'SELVA ALEGRE (CAB.EN SAN MIGUEL DE PAMPLONA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>105,
            'nombre' => 'PIMAMPIRO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>105,
            'nombre' => 'CHUGÁ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>105,
            'nombre' => 'MARIANO ACOSTA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>105,
            'nombre' => 'SAN FRANCISCO DE SIGSIPAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>106,
            'nombre' => 'URCUQUÍ CABECERA CANTONAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>106,
            'nombre' => 'CAHUASQUÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>106,
            'nombre' => 'LA MERCED DE BUENOS AIRES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>106,
            'nombre' => 'PABLO ARENAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>106,
            'nombre' => 'SAN BLAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>11,
            'id_canton' =>106,
            'nombre' => 'TUMBABIRO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>107,
            'nombre' => 'EL SAGRARIO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>107,
            'nombre' => 'SAN SEBASTIÁN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>107,
            'nombre' => 'SUCRE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>107,
            'nombre' => 'VALLE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>107,
            'nombre' => 'LOJA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>107,
            'nombre' => 'CHANTACO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>107,
            'nombre' => 'CHUQUIRIBAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>107,
            'nombre' => 'EL CISNE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>107,
            'nombre' => 'GUALEL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>107,
            'nombre' => 'JIMBILLA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>107,
            'nombre' => 'MALACATOS (VALLADOLID)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>107,
            'nombre' => 'SAN LUCAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>107,
            'nombre' => 'SAN PEDRO DE VILCABAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>107,
            'nombre' => 'SANTIAGO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>107,
            'nombre' => 'TAQUIL (MIGUEL RIOFRÍO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>107,
            'nombre' => 'VILCABAMBA (VICTORIA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>107,
            'nombre' => 'YANGANA (ARSENIO CASTILLO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>107,
            'nombre' => 'QUINARA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>108,
            'nombre' => 'CARIAMANGA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>108,
            'nombre' => 'CHILE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>108,
            'nombre' => 'SAN VICENTE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>108,
            'nombre' => 'CARIAMANGA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>108,
            'nombre' => 'COLAISACA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>108,
            'nombre' => 'EL LUCERO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>108,
            'nombre' => 'UTUANA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>108,
            'nombre' => 'SANGUILLÍN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>109,
            'nombre' => 'CATAMAYO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>109,
            'nombre' => 'SAN JOSÉ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>109,
            'nombre' => 'CATAMAYO (LA TOMA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>109,
            'nombre' => 'EL TAMBO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>109,
            'nombre' => 'GUAYQUICHUMA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>109,
            'nombre' => 'SAN PEDRO DE LA BENDITA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>109,
            'nombre' => 'ZAMBI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>110,
            'nombre' => 'CELICA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>110,
            'nombre' => 'CRUZPAMBA (CAB. EN CARLOS BUSTAMANTE)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>110,
            'nombre' => 'CHAQUINAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>110,
            'nombre' => '12 DE DICIEMBRE (CAB. EN ACHIOTES)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>110,
            'nombre' => 'PINDAL (FEDERICO PÁEZ)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>110,
            'nombre' => 'POZUL (SAN JUAN DE POZUL)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>110,
            'nombre' => 'SABANILLA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>110,
            'nombre' => 'TNTE. MAXIMILIANO RODRÍGUEZ LOAIZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>111,
            'nombre' => 'CHAGUARPAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>111,
            'nombre' => 'BUENAVISTA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>111,
            'nombre' => 'EL ROSARIO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>111,
            'nombre' => 'SANTA RUFINA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>111,
            'nombre' => 'AMARILLOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>112,
            'nombre' => 'AMALUZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>112,
            'nombre' => 'BELLAVISTA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>112,
            'nombre' => 'JIMBURA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>112,
            'nombre' => 'SANTA TERESITA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>112,
            'nombre' => '27 DE ABRIL (CAB. EN LA NARANJA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>112,
            'nombre' => 'EL INGENIO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>112,
            'nombre' => 'EL AIRO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>113,
            'nombre' => 'GONZANAMÁ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>113,
            'nombre' => 'CHANGAIMINA (LA LIBERTAD)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>113,
            'nombre' => 'FUNDOCHAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>113,
            'nombre' => 'NAMBACOLA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>113,
            'nombre' => 'PURUNUMA (EGUIGUREN)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>113,
            'nombre' => 'QUILANGA (LA PAZ)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>113,
            'nombre' => 'SACAPALCA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>113,
            'nombre' => 'SAN ANTONIO DE LAS ARADAS (CAB. EN LAS ARADAS)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>114,
            'nombre' => 'GENERAL ELOY ALFARO (SAN SEBASTIÁN)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>114,
            'nombre' => 'MACARÁ (MANUEL ENRIQUE RENGEL SUQUILANDA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>114,
            'nombre' => 'MACARÁ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>114,
            'nombre' => 'LARAMA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>114,
            'nombre' => 'LA VICTORIA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>114,
            'nombre' => 'SABIANGO (LA CAPILLA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>115,
            'nombre' => 'CATACOCHA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>115,
            'nombre' => 'LOURDES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>115,
            'nombre' => 'CATACOCHA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>115,
            'nombre' => 'CANGONAMÁ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>115,
            'nombre' => 'GUACHANAMÁ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>115,
            'nombre' => 'LA TINGUE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>115,
            'nombre' => 'LAURO GUERRERO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>115,
            'nombre' => 'OLMEDO (SANTA BÁRBARA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>115,
            'nombre' => 'ORIANGA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>115,
            'nombre' => 'SAN ANTONIO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>115,
            'nombre' => 'CASANGA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>115,
            'nombre' => 'YAMANA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>116,
            'nombre' => 'ALAMOR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>116,
            'nombre' => 'CIANO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>116,
            'nombre' => 'EL ARENAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>116,
            'nombre' => 'EL LIMO (MARIANA DE JESÚS)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>116,
            'nombre' => 'MERCADILLO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>116,
            'nombre' => 'VICENTINO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>117,
            'nombre' => 'SARAGURO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>117,
            'nombre' => 'EL PARAÍSO DE CELÉN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>117,
            'nombre' => 'EL TABLÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>117,
            'nombre' => 'LLUZHAPA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>117,
            'nombre' => 'MANÚ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>117,
            'nombre' => 'SAN ANTONIO DE QUMBE (CUMBE)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>117,
            'nombre' => 'SAN PABLO DE TENTA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>117,
            'nombre' => 'SAN SEBASTIÁN DE YÚLUC',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>117,
            'nombre' => 'SELVA ALEGRE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>117,
            'nombre' => 'URDANETA (PAQUISHAPA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>117,
            'nombre' => 'SUMAYPAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>118,
            'nombre' => 'SOZORANGA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>118,
            'nombre' => 'NUEVA FÁTIMA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>118,
            'nombre' => 'TACAMOROS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>119,
            'nombre' => 'ZAPOTILLO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>119,
            'nombre' => 'MANGAHURCO (CAZADEROS)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>119,
            'nombre' => 'GARZAREAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>119,
            'nombre' => 'LIMONES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>119,
            'nombre' => 'PALETILLAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>119,
            'nombre' => 'BOLASPAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>120,
            'nombre' => 'PINDAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>120,
            'nombre' => 'CHAQUINAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>120,
            'nombre' => '12 DE DICIEMBRE (CAB.EN ACHIOTES)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>120,
            'nombre' => 'MILAGROS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>121,
            'nombre' => 'QUILANGA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>121,
            'nombre' => 'FUNDOCHAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>121,
            'nombre' => 'SAN ANTONIO DE LAS ARADAS (CAB. EN LAS ARADAS)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>122,
            'nombre' => 'OLMEDO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>12,
            'id_canton' =>122,
            'nombre' => 'LA TINGUE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>123,
            'nombre' => 'CLEMENTE BAQUERIZO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>123,
            'nombre' => 'DR. CAMILO PONCE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>123,
            'nombre' => 'BARREIRO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>123,
            'nombre' => 'EL SALTO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>123,
            'nombre' => 'BABAHOYO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>123,
            'nombre' => 'BARREIRO (SANTA RITA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>123,
            'nombre' => 'CARACOL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>123,
            'nombre' => 'FEBRES CORDERO (LAS JUNTAS)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>123,
            'nombre' => 'PIMOCHA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>123,
            'nombre' => 'LA UNIÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>124,
            'nombre' => 'BABA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>124,
            'nombre' => 'GUARE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>124,
            'nombre' => 'ISLA DE BEJUCAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>125,
            'nombre' => 'MONTALVO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>126,
            'nombre' => 'PUEBLOVIEJO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>126,
            'nombre' => 'PUERTO PECHICHE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>126,
            'nombre' => 'SAN JUAN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>127,
            'nombre' => 'QUEVEDO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>127,
            'nombre' => 'SAN CAMILO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>127,
            'nombre' => 'SAN JOSÉ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>127,
            'nombre' => 'GUAYACÁN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>127,
            'nombre' => 'NICOLÁS INFANTE DÍAZ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>127,
            'nombre' => 'SAN CRISTÓBAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>127,
            'nombre' => 'SIETE DE OCTUBRE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>127,
            'nombre' => '24 DE MAYO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>127,
            'nombre' => 'VENUS DEL RÍO QUEVEDO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>127,
            'nombre' => 'VIVA ALFARO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>127,
            'nombre' => 'QUEVEDO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>127,
            'nombre' => 'BUENA FÉ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>127,
            'nombre' => 'MOCACHE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>127,
            'nombre' => 'SAN CARLOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>127,
            'nombre' => 'VALENCIA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>127,
            'nombre' => 'LA ESPERANZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>128,
            'nombre' => 'CATARAMA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>128,
            'nombre' => 'RICAURTE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>129,
            'nombre' => '10 DE NOVIEMBRE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>129,
            'nombre' => 'VENTANAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>129,
            'nombre' => 'QUINSALOMA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>129,
            'nombre' => 'ZAPOTAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>129,
            'nombre' => 'CHACARITA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>129,
            'nombre' => 'LOS ÁNGELES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>130,
            'nombre' => 'VINCES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>130,
            'nombre' => 'ANTONIO SOTOMAYOR (CAB. EN PLAYAS DE VINCES)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>130,
            'nombre' => 'PALENQUE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>131,
            'nombre' => 'PALENQUE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>132,
            'nombre' => 'SAN JACINTO DE BUENA FÉ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>132,
            'nombre' => '7 DE AGOSTO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>132,
            'nombre' => '11 DE OCTUBRE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>132,
            'nombre' => 'SAN JACINTO DE BUENA FÉ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>132,
            'nombre' => 'PATRICIA PILAR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>133,
            'nombre' => 'VALENCIA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>134,
            'nombre' => 'MOCACHE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>13,
            'id_canton' =>135,
            'nombre' => 'QUINSALOMA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>136,
            'nombre' => 'PORTOVIEJO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>136,
            'nombre' => '12 DE MARZO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>136,
            'nombre' => 'COLÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>136,
            'nombre' => 'PICOAZÁ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>136,
            'nombre' => 'SAN PABLO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>136,
            'nombre' => 'ANDRÉS DE VERA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>136,
            'nombre' => 'FRANCISCO PACHECO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>136,
            'nombre' => '18 DE OCTUBRE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>136,
            'nombre' => 'SIMÓN BOLÍVAR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>136,
            'nombre' => 'PORTOVIEJO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>136,
            'nombre' => 'ABDÓN CALDERÓN (SAN FRANCISCO)',
            'estado' => '1',
        ]);

        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>136,
            'nombre' => 'ALHAJUELA (BAJO GRANDE)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>136,
            'nombre' => 'CRUCITA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>136,
            'nombre' => 'PUEBLO NUEVO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>136,
            'nombre' => 'RIOCHICO (RÍO CHICO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>136,
            'nombre' => 'SAN PLÁCIDO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>136,
            'nombre' => 'CHIRIJOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>137,
            'nombre' => 'CALCETA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>137,
            'nombre' => 'MEMBRILLO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>137,
            'nombre' => 'QUIROGA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>138,
            'nombre' => 'CHONE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>138,
            'nombre' => 'SANTA RITA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>138,
            'nombre' => 'BOYACÁ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>138,
            'nombre' => 'CANUTO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>138,
            'nombre' => 'CONVENTO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>138,
            'nombre' => 'CHIBUNGA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>138,
            'nombre' => 'ELOY ALFARO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>138,
            'nombre' => 'RICAURTE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>138,
            'nombre' => 'SAN ANTONIO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>139,
            'nombre' => 'EL CARMEN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>139,
            'nombre' => '4 DE DICIEMBRE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>139,
            'nombre' => 'EL CARMEN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>139,
            'nombre' => 'WILFRIDO LOOR MOREIRA (MAICITO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>139,
            'nombre' => 'SAN PEDRO DE SUMA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>140,
            'nombre' => 'FLAVIO ALFARO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>140,
            'nombre' => 'SAN FRANCISCO DE NOVILLO (CAB. EN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>140,
            'nombre' => 'ZAPALLO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>141,
            'nombre' => 'DR. MIGUEL MORÁN LUCIO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>141,
            'nombre' => 'MANUEL INOCENCIO PARRALES Y GUALE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>141,
            'nombre' => 'SAN LORENZO DE JIPIJAPA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>141,
            'nombre' => 'JIPIJAPA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>141,
            'nombre' => 'AMÉRICA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>141,
            'nombre' => 'EL ANEGADO (CAB. EN ELOY ALFARO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>141,
            'nombre' => 'JULCUY',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>141,
            'nombre' => 'LA UNIÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>141,
            'nombre' => 'MACHALILLA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>141,
            'nombre' => 'MEMBRILLAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>141,
            'nombre' => 'PEDRO PABLO GÓMEZ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>141,
            'nombre' => 'PUERTO DE CAYO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>141,
            'nombre' => 'PUERTO LÓPEZ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>142,
            'nombre' => 'JUNÍN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>143,
            'nombre' => 'LOS ESTEROS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>143,
            'nombre' => 'MANTA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>143,
            'nombre' => 'SAN MATEO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>143,
            'nombre' => 'TARQUI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>143,
            'nombre' => 'ELOY ALFARO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>143,
            'nombre' => 'MANTA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>143,
            'nombre' => 'SAN LORENZO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>143,
            'nombre' => 'SANTA MARIANITA (BOCA DE PACOCHE)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>144,
            'nombre' => 'ANIBAL SAN ANDRÉS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>144,
            'nombre' => 'MONTECRISTI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>144,
            'nombre' => 'EL COLORADO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>144,
            'nombre' => 'GENERAL ELOY ALFARO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>144,
            'nombre' => 'LEONIDAS PROAÑO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>144,
            'nombre' => 'MONTECRISTI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>144,
            'nombre' => 'JARAMIJÓ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>144,
            'nombre' => 'LA PILA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>145,
            'nombre' => 'PAJÁN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>145,
            'nombre' => 'CAMPOZANO (LA PALMA DE PAJÁN)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>145,
            'nombre' => 'CASCOL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>145,
            'nombre' => 'GUALE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>145,
            'nombre' => 'LASCANO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>146,
            'nombre' => 'PICHINCHA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>146,
            'nombre' => 'BARRAGANETE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>146,
            'nombre' => 'SAN SEBASTIÁN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>147,
            'nombre' => 'ROCAFUERTE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>148,
            'nombre' => 'SANTA ANA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>148,
            'nombre' => 'LODANA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>148,
            'nombre' => 'SANTA ANA DE VUELTA LARGA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>148,
            'nombre' => 'AYACUCHO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>148,
            'nombre' => 'HONORATO VÁSQUEZ (CAB. EN VÁSQUEZ)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>148,
            'nombre' => 'LA UNIÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>148,
            'nombre' => 'OLMEDO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>148,
            'nombre' => 'SAN PABLO (CAB. EN PUEBLO NUEVO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>149,
            'nombre' => 'BAHÍA DE CARÁQUEZ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>149,
            'nombre' => 'LEONIDAS PLAZA GUTIÉRREZ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>149,
            'nombre' => 'BAHÍA DE CARÁQUEZ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>149,
            'nombre' => 'CANOA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>149,
            'nombre' => 'COJIMÍES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>149,
            'nombre' => 'CHARAPOTÓ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>149,
            'nombre' => '10 DE AGOSTO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>149,
            'nombre' => 'JAMA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>149,
            'nombre' => 'PEDERNALES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>149,
            'nombre' => 'SAN ISIDRO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>149,
            'nombre' => 'SAN VICENTE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>150,
            'nombre' => 'TOSAGUA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>150,
            'nombre' => 'BACHILLERO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>150,
            'nombre' => 'ANGEL PEDRO GILER (LA ESTANCILLA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>151,
            'nombre' => 'SUCRE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>151,
            'nombre' => 'BELLAVISTA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>151,
            'nombre' => 'NOBOA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>151,
            'nombre' => 'ARQ. SIXTO DURÁN BALLÉN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>152,
            'nombre' => 'PEDERNALES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>152,
            'nombre' => 'COJIMÍES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>152,
            'nombre' => '10 DE AGOSTO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>152,
            'nombre' => 'ATAHUALPA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>153,
            'nombre' => 'OLMEDO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>154,
            'nombre' => 'PUERTO LÓPEZ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>154,
            'nombre' => 'MACHALILLA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>154,
            'nombre' => 'SALANGO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>155,
            'nombre' => 'JAMA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>156,
            'nombre' => 'JARAMIJÓ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>157,
            'nombre' => 'SAN VICENTE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>14,
            'id_canton' =>157,
            'nombre' => 'CANOA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>158,
            'nombre' => 'MACAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>158,
            'nombre' => 'ALSHI (CAB. EN 9 DE OCTUBRE)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>158,
            'nombre' => 'CHIGUAZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>158,
            'nombre' => 'GENERAL PROAÑO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>158,
            'nombre' => 'HUASAGA (CAB.EN WAMPUIK)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>158,
            'nombre' => 'MACUMA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>158,
            'nombre' => 'SAN ISIDRO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>158,
            'nombre' => 'SEVILLA DON BOSCO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>158,
            'nombre' => 'SINAÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>158,
            'nombre' => 'TAISHA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>158,
            'nombre' => 'ZUÑA (ZÚÑAC)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>158,
            'nombre' => 'TUUTINENTZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>158,
            'nombre' => 'CUCHAENTZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>158,
            'nombre' => 'SAN JOSÉ DE MORONA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>158,
            'nombre' => 'RÍO BLANCO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>159,
            'nombre' => 'GUALAQUIZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>159,
            'nombre' => 'MERCEDES MOLINA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>159,
            'nombre' => 'GUALAQUIZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>159,
            'nombre' => 'AMAZONAS (ROSARIO DE CUYES)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>159,
            'nombre' => 'BERMEJOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>159,
            'nombre' => 'BOMBOIZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>159,
            'nombre' => 'CHIGÜINDA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>159,
            'nombre' => 'EL ROSARIO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>159,
            'nombre' => 'NUEVA TARQUI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>159,
            'nombre' => 'SAN MIGUEL DE CUYES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>159,
            'nombre' => 'EL IDEAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>160,
            'nombre' => 'GENERAL LEONIDAS PLAZA GUTIÉRREZ (LIMÓN)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>160,
            'nombre' => 'INDANZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>160,
            'nombre' => 'PAN DE AZÚCAR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>160,
            'nombre' => 'SAN ANTONIO (CAB. EN SAN ANTONIO CENTRO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>160,
            'nombre' => 'SAN CARLOS DE LIMÓN (SAN CARLOS DEL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>160,
            'nombre' => 'SAN JUAN BOSCO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>160,
            'nombre' => 'SAN MIGUEL DE CONCHAY',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>160,
            'nombre' => 'SANTA SUSANA DE CHIVIAZA (CAB. EN CHIVIAZA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>160,
            'nombre' => 'YUNGANZA (CAB. EN EL ROSARIO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>161,
            'nombre' => 'PALORA (METZERA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>161,
            'nombre' => 'ARAPICOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>161,
            'nombre' => 'CUMANDÁ (CAB. EN COLONIA AGRÍCOLA SEVILLA DEL ORO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>161,
            'nombre' => 'HUAMBOYA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>161,
            'nombre' => 'SANGAY (CAB. EN NAYAMANACA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>162,
            'nombre' => 'SANTIAGO DE MÉNDEZ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>162,
            'nombre' => 'COPAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>162,
            'nombre' => 'CHUPIANZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>162,
            'nombre' => 'PATUCA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>162,
            'nombre' => 'SAN LUIS DE EL ACHO (CAB. EN EL ACHO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>162,
            'nombre' => 'SANTIAGO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>162,
            'nombre' => 'TAYUZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>162,
            'nombre' => 'SAN FRANCISCO DE CHINIMBIMI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>163,
            'nombre' => 'SUCÚA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>163,
            'nombre' => 'ASUNCIÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>163,
            'nombre' => 'HUAMBI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>163,
            'nombre' => 'LOGROÑO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>163,
            'nombre' => 'YAUPI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>163,
            'nombre' => 'SANTA MARIANITA DE JESÚS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>164,
            'nombre' => 'HUAMBOYA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>164,
            'nombre' => 'CHIGUAZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>164,
            'nombre' => 'PABLO SEXTO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>165,
            'nombre' => 'SAN JUAN BOSCO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>165,
            'nombre' => 'PAN DE AZÚCAR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>165,
            'nombre' => 'SAN CARLOS DE LIMÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>165,
            'nombre' => 'SAN JACINTO DE WAKAMBEIS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>165,
            'nombre' => 'SANTIAGO DE PANANZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>166,
            'nombre' => 'TAISHA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>166,
            'nombre' => 'HUASAGA (CAB. EN WAMPUIK)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>166,
            'nombre' => 'MACUMA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>166,
            'nombre' => 'TUUTINENTZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>166,
            'nombre' => 'PUMPUENTSA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>167,
            'nombre' => 'LOGROÑO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>167,
            'nombre' => 'YAUPI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>167,
            'nombre' => 'SHIMPIS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>168,
            'nombre' => 'PABLO SEXTO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>169,
            'nombre' => 'SANTIAGO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>15,
            'id_canton' =>169,
            'nombre' => 'SAN JOSÉ DE MORONA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>170,
            'nombre' => 'TENA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>170,
            'nombre' => 'AHUANO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>170,
            'nombre' => 'CARLOS JULIO AROSEMENA TOLA (ZATZA-YACU)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>170,
            'nombre' => 'CHONTAPUNTA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>170,
            'nombre' => 'PANO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>170,
            'nombre' => 'PUERTO MISAHUALLI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>170,
            'nombre' => 'PUERTO NAPO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>170,
            'nombre' => 'TÁLAG',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>170,
            'nombre' => 'SAN JUAN DE MUYUNA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>171,
            'nombre' => 'ARCHIDONA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>171,
            'nombre' => 'AVILA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>171,
            'nombre' => 'COTUNDO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>171,
            'nombre' => 'LORETO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>171,
            'nombre' => 'SAN PABLO DE USHPAYACU',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>171,
            'nombre' => 'PUERTO MURIALDO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>172,
            'nombre' => 'EL CHACO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>172,
            'nombre' => 'GONZALO DíAZ DE PINEDA (EL BOMBÓN)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>172,
            'nombre' => 'LINARES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>172,
            'nombre' => 'OYACACHI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>172,
            'nombre' => 'SANTA ROSA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>172,
            'nombre' => 'SARDINAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>173,
            'nombre' => 'BAEZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>173,
            'nombre' => 'COSANGA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>173,
            'nombre' => 'CUYUJA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>173,
            'nombre' => 'PAPALLACTA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>173,
            'nombre' => 'SAN FRANCISCO DE BORJA (VIRGILIO DÁVILA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>173,
            'nombre' => 'SAN JOSÉ DEL PAYAMINO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>173,
            'nombre' => 'SUMACO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>16,
            'id_canton' =>174,
            'nombre' => 'CARLOS JULIO AROSEMENA TOLA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>175,
            'nombre' => 'PUYO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>175,
            'nombre' => 'ARAJUNO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>175,
            'nombre' => 'CANELOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>175,
            'nombre' => 'CURARAY',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>175,
            'nombre' => 'DIEZ DE AGOSTO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>175,
            'nombre' => 'FÁTIMA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>175,
            'nombre' => 'MONTALVO (ANDOAS)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>175,
            'nombre' => 'POMONA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>175,
            'nombre' => 'RÍO CORRIENTES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>175,
            'nombre' => 'RÍO TIGRE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>175,
            'nombre' => 'SANTA CLARA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>175,
            'nombre' => 'SARAYACU',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>175,
            'nombre' => 'SIMÓN BOLÍVAR (CAB. EN MUSHULLACTA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>175,
            'nombre' => 'TARQUI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>175,
            'nombre' => 'TENIENTE HUGO ORTIZ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>175,
            'nombre' => 'VERACRUZ (INDILLAMA) (CAB. EN INDILLAMA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>175,
            'nombre' => 'EL TRIUNFO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>176,
            'nombre' => 'MERA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>176,
            'nombre' => 'MADRE TIERRA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>176,
            'nombre' => 'SHELL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>177,
            'nombre' => 'SANTA CLARA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>177,
            'nombre' => 'SAN JOSÉ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>178,
            'nombre' => 'ARAJUNO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>17,
            'id_canton' =>178,
            'nombre' => 'CURARAY',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'BELISARIO QUEVEDO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'CARCELÉN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'CENTRO HISTÓRICO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'COCHAPAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'COMITÉ DEL PUEBLO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'COTOCOLLAO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'CHILIBULO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'CHILLOGALLO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'CHIMBACALLE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'EL CONDADO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'GUAMANÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'IÑAQUITO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'ITCHIMBÍA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'JIPIJAPA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'KENNEDY',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'LA ARGELIA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'LA CONCEPCIÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'LA ECUATORIANA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'LA FERROVIARIA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'LA LIBERTAD',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'LA MAGDALENA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'LA MENA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'MARISCAL SUCRE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'PONCEANO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'PUENGASÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'QUITUMBE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'RUMIPAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'SAN BARTOLO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'SAN ISIDRO DEL INCA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'SAN JUAN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'SOLANDA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'TURUBAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'QUITO DISTRITO METROPOLITANO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'ALANGASÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'AMAGUAÑA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'ATAHUALPA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'CALACALÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'CALDERÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'CONOCOTO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'CUMBAYÁ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'CHAVEZPAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'CHECA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'EL QUINCHE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'GUALEA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'GUANGOPOLO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'GUAYLLABAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'LA MERCED',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'LLANO CHICO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'LLOA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'MINDO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'NANEGAL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'NANEGALITO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'NAYÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'NONO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'PACTO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'PEDRO VICENTE MALDONADO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'PERUCHO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'PIFO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'PÍNTAG',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'POMASQUI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'PUÉLLARO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'PUEMBO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'SAN ANTONIO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'SAN JOSÉ DE MINAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'SAN MIGUEL DE LOS BANCOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'TABABELA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'TUMBACO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'YARUQUÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'ZAMBIZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>179,
            'nombre' => 'PUERTO QUITO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>180,
            'nombre' => 'AYORA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>180,
            'nombre' => 'CAYAMBE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>180,
            'nombre' => 'JUAN MONTALVO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>180,
            'nombre' => 'CAYAMBE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>180,
            'nombre' => 'ASCÁZUBI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>180,
            'nombre' => 'CANGAHUA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>180,
            'nombre' => 'OLMEDO (PESILLO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>180,
            'nombre' => 'OTÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>180,
            'nombre' => 'SANTA ROSA DE CUZUBAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>181,
            'nombre' => 'MACHACHI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>181,
            'nombre' => 'ALÓAG',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>181,
            'nombre' => 'ALOASÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>181,
            'nombre' => 'CUTUGLAHUA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>181,
            'nombre' => 'EL CHAUPI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>181,
            'nombre' => 'MANUEL CORNEJO ASTORGA (TANDAPI)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>181,
            'nombre' => 'TAMBILLO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>181,
            'nombre' => 'UYUMBICHO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>182,
            'nombre' => 'TABACUNDO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>182,
            'nombre' => 'LA ESPERANZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>182,
            'nombre' => 'MALCHINGUÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>182,
            'nombre' => 'TOCACHI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>182,
            'nombre' => 'TUPIGACHI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>183,
            'nombre' => 'SANGOLQUÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>183,
            'nombre' => 'SAN PEDRO DE TABOADA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>183,
            'nombre' => 'SAN RAFAEL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>183,
            'nombre' => 'SANGOLQUI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>183,
            'nombre' => 'COTOGCHOA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>183,
            'nombre' => 'RUMIPAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>184,
            'nombre' => 'SAN MIGUEL DE LOS BANCOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>184,
            'nombre' => 'MINDO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>184,
            'nombre' => 'PEDRO VICENTE MALDONADO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>184,
            'nombre' => 'PUERTO QUITO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>185,
            'nombre' => 'PEDRO VICENTE MALDONADO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>18,
            'id_canton' =>186,
            'nombre' => 'PUERTO QUITO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'ATOCHA – FICOA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'CELIANO MONGE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'HUACHI CHICO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'HUACHI LORETO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'LA MERCED',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'LA PENÍNSULA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'MATRIZ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'PISHILATA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'SAN FRANCISCO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'AMBATO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'AMBATILLO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'ATAHUALPA (CHISALATA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'AUGUSTO N. MARTÍNEZ (MUNDUGLEO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'CONSTANTINO FERNÁNDEZ (CAB. EN CULLITAHUA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'HUACHI GRANDE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'IZAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'JUAN BENIGNO VELA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'MONTALVO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'PASA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'PICAIGUA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'PILAGÜÍN (PILAHÜÍN)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'QUISAPINCHA (QUIZAPINCHA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'SAN BARTOLOMÉ DE PINLLOG',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'SAN FERNANDO (PASA SAN FERNANDO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'SANTA ROSA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'TOTORAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'CUNCHIBAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>187,
            'nombre' => 'UNAMUNCHO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>188,
            'nombre' => 'BAÑOS DE AGUA SANTA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>188,
            'nombre' => 'LLIGUA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>188,
            'nombre' => 'RÍO NEGRO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>188,
            'nombre' => 'RÍO VERDE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>188,
            'nombre' => 'ULBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>189,
            'nombre' => 'CEVALLOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>190,
            'nombre' => 'MOCHA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>190,
            'nombre' => 'PINGUILÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>191,
            'nombre' => 'PATATE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>191,
            'nombre' => 'EL TRIUNFO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>191,
            'nombre' => 'LOS ANDES (CAB. EN POATUG)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>191,
            'nombre' => 'SUCRE (CAB. EN SUCRE-PATATE URCU)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>192,
            'nombre' => 'QUERO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>192,
            'nombre' => 'RUMIPAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>192,
            'nombre' => 'YANAYACU - MOCHAPATA (CAB. EN YANAYACU)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>193,
            'nombre' => 'PELILEO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>193,
            'nombre' => 'PELILEO GRANDE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>193,
            'nombre' => 'PELILEO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>193,
            'nombre' => 'BENÍTEZ (PACHANLICA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>193,
            'nombre' => 'BOLÍVAR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>193,
            'nombre' => 'COTALÓ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>193,
            'nombre' => 'CHIQUICHA (CAB. EN CHIQUICHA GRANDE)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>193,
            'nombre' => 'EL ROSARIO (RUMICHACA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>193,
            'nombre' => 'GARCÍA MORENO (CHUMAQUI)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>193,
            'nombre' => 'GUAMBALÓ (HUAMBALÓ)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>193,
            'nombre' => 'SALASACA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>194,
            'nombre' => 'CIUDAD NUEVA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>194,
            'nombre' => 'PÍLLARO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>194,
            'nombre' => 'PÍLLARO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>194,
            'nombre' => 'BAQUERIZO MORENO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>194,
            'nombre' => 'EMILIO MARÍA TERÁN (RUMIPAMBA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>194,
            'nombre' => 'MARCOS ESPINEL (CHACATA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>194,
            'nombre' => 'PRESIDENTE URBINA (CHAGRAPAMBA -PATZUCUL)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>194,
            'nombre' => 'SAN ANDRÉS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>194,
            'nombre' => 'SAN JOSÉ DE POALÓ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>194,
            'nombre' => 'SAN MIGUELITO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>195,
            'nombre' => 'TISALEO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>19,
            'id_canton' =>195,
            'nombre' => 'QUINCHICOTO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>196,
            'nombre' => 'EL LIMÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>196,
            'nombre' => 'ZAMORA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>196,
            'nombre' => 'ZAMORA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>196,
            'nombre' => 'CUMBARATZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>196,
            'nombre' => 'GUADALUPE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>196,
            'nombre' => 'IMBANA (LA VICTORIA DE IMBANA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>196,
            'nombre' => 'PAQUISHA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>196,
            'nombre' => 'SABANILLA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>196,
            'nombre' => 'TIMBARA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>196,
            'nombre' => 'ZUMBI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>196,
            'nombre' => 'SAN CARLOS DE LAS MINAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>197,
            'nombre' => 'ZUMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>197,
            'nombre' => 'CHITO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>197,
            'nombre' => 'EL CHORRO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>197,
            'nombre' => 'EL PORVENIR DEL CARMEN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>197,
            'nombre' => 'LA CHONTA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>197,
            'nombre' => 'PALANDA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>197,
            'nombre' => 'PUCAPAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>197,
            'nombre' => 'SAN FRANCISCO DEL VERGEL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>197,
            'nombre' => 'VALLADOLID',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>197,
            'nombre' => 'SAN ANDRÉS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>198,
            'nombre' => 'GUAYZIMI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>198,
            'nombre' => 'ZURMI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>198,
            'nombre' => 'NUEVO PARAÍSO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>199,
            'nombre' => '28 DE MAYO (SAN JOSÉ DE YACUAMBI)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>199,
            'nombre' => 'LA PAZ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>199,
            'nombre' => 'TUTUPALI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>200,
            'nombre' => 'YANTZAZA (YANZATZA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>200,
            'nombre' => 'CHICAÑA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>200,
            'nombre' => 'EL PANGUI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>200,
            'nombre' => 'LOS ENCUENTROS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>201,
            'nombre' => 'EL PANGUI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>201,
            'nombre' => 'EL GUISME',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>201,
            'nombre' => 'PACHICUTZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>201,
            'nombre' => 'TUNDAYME',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>202,
            'nombre' => 'ZUMBI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>202,
            'nombre' => 'PAQUISHA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>202,
            'nombre' => 'TRIUNFO-DORADO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>202,
            'nombre' => 'PANGUINTZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>203,
            'nombre' => 'PALANDA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>203,
            'nombre' => 'EL PORVENIR DEL CARMEN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>203,
            'nombre' => 'SAN FRANCISCO DEL VERGEL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>203,
            'nombre' => 'VALLADOLID',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>203,
            'nombre' => 'LA CANELA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>204,
            'nombre' => 'PAQUISHA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>204,
            'nombre' => 'BELLAVISTA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>20,
            'id_canton' =>204,
            'nombre' => 'NUEVO QUITO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>21,
            'id_canton' =>205,
            'nombre' => 'PUERTO BAQUERIZO MORENO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>21,
            'id_canton' =>205,
            'nombre' => 'EL PROGRESO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>21,
            'id_canton' =>205,
            'nombre' => 'A SANTA MARÍA (FLOREANA) (CAB. EN PTO. VELASCO IBARR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>21,
            'id_canton' =>206,
            'nombre' => 'PUERTO VILLAMIL',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>21,
            'id_canton' =>206,
            'nombre' => 'TOMÁS DE BERLANGA (SANTO TOMÁS)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>21,
            'id_canton' =>207,
            'nombre' => 'PUERTO AYORA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>21,
            'id_canton' =>207,
            'nombre' => 'BELLAVISTA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>21,
            'id_canton' =>207,
            'nombre' => 'SANTA ROSA (INCLUYE LA ISLA BALTRA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>208,
            'nombre' => 'NUEVA LOJA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>208,
            'nombre' => 'CUYABENO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>208,
            'nombre' => 'DURENO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>208,
            'nombre' => 'GENERAL FARFÁN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>208,
            'nombre' => 'TARAPOA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>208,
            'nombre' => 'EL ENO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>208,
            'nombre' => 'PACAYACU',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>208,
            'nombre' => 'JAMBELÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>208,
            'nombre' => 'SANTA CECILIA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>208,
            'nombre' => 'AGUAS NEGRAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>209,
            'nombre' => 'EL DORADO DE CASCALES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>209,
            'nombre' => 'EL REVENTADOR',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>209,
            'nombre' => 'GONZALO PIZARRO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>209,
            'nombre' => 'LUMBAQUÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>209,
            'nombre' => 'PUERTO LIBRE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>209,
            'nombre' => 'SANTA ROSA DE SUCUMBÍOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>210,
            'nombre' => 'PUERTO EL CARMEN DEL PUTUMAYO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>210,
            'nombre' => 'PALMA ROJA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>210,
            'nombre' => 'PUERTO BOLÍVAR (PUERTO MONTÚFAR)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>210,
            'nombre' => 'PUERTO RODRÍGUEZ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>210,
            'nombre' => 'SANTA ELENA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>211,
            'nombre' => 'SHUSHUFINDI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>211,
            'nombre' => 'LIMONCOCHA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>211,
            'nombre' => 'PAÑACOCHA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>211,
            'nombre' => 'SAN ROQUE (CAB. EN SAN VICENTE)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>211,
            'nombre' => 'SAN PEDRO DE LOS COFANES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>211,
            'nombre' => 'SIETE DE JULIO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>212,
            'nombre' => 'LA BONITA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>212,
            'nombre' => 'EL PLAYÓN DE SAN FRANCISCO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>212,
            'nombre' => 'LA SOFÍA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>212,
            'nombre' => 'ROSA FLORIDA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>212,
            'nombre' => 'SANTA BÁRBARA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>213,
            'nombre' => 'EL DORADO DE CASCALES',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>213,
            'nombre' => 'SANTA ROSA DE SUCUMBÍOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>213,
            'nombre' => 'SEVILLA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>214,
            'nombre' => 'TARAPOA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>214,
            'nombre' => 'CUYABENO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>22,
            'id_canton' =>214,
            'nombre' => 'AGUAS NEGRAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>215,
            'nombre' => 'PUERTO FRANCISCO DE ORELLANA (EL COCA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>215,
            'nombre' => 'DAYUMA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>215,
            'nombre' => 'TARACOA (NUEVA ESPERANZA: YUCA)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>215,
            'nombre' => 'ALEJANDRO LABAKA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>215,
            'nombre' => 'EL DORADO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>215,
            'nombre' => 'EL EDÉN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>215,
            'nombre' => 'GARCÍA MORENO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>215,
            'nombre' => 'INÉS ARANGO (CAB. EN WESTERN)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>215,
            'nombre' => 'LA BELLEZA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>215,
            'nombre' => 'NUEVO PARAÍSO (CAB. EN UNIÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>215,
            'nombre' => 'SAN JOSÉ DE GUAYUSA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>215,
            'nombre' => 'SAN LUIS DE ARMENIA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>216,
            'nombre' => 'TIPITINI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>216,
            'nombre' => 'NUEVO ROCAFUERTE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>216,
            'nombre' => 'CAPITÁN AUGUSTO RIVADENEYRA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>216,
            'nombre' => 'CONONACO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>216,
            'nombre' => 'SANTA MARÍA DE HUIRIRIMA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>216,
            'nombre' => 'TIPUTINI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>216,
            'nombre' => 'YASUNÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>217,
            'nombre' => 'LA JOYA DE LOS SACHAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>217,
            'nombre' => 'ENOKANQUI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>217,
            'nombre' => 'POMPEYA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>217,
            'nombre' => 'SAN CARLOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>217,
            'nombre' => 'SAN SEBASTIÁN DEL COCA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>217,
            'nombre' => 'LAGO SAN PEDRO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>217,
            'nombre' => 'RUMIPAMBA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>217,
            'nombre' => 'TRES DE NOVIEMBRE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>217,
            'nombre' => 'UNIÓN MILAGREÑA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>218,
            'nombre' => 'LORETO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>218,
            'nombre' => 'AVILA (CAB. EN HUIRUNO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>218,
            'nombre' => 'PUERTO MURIALDO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>218,
            'nombre' => 'SAN JOSÉ DE PAYAMINO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>218,
            'nombre' => 'SAN JOSÉ DE DAHUANO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>23,
            'id_canton' =>218,
            'nombre' => 'SAN VICENTE DE HUATICOCHA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>24,
            'id_canton' =>219,
            'nombre' => 'ABRAHAM CALAZACÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>24,
            'id_canton' =>219,
            'nombre' => 'BOMBOLÍ',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>24,
            'id_canton' =>219,
            'nombre' => 'CHIGUILPE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>24,
            'id_canton' =>219,
            'nombre' => 'RÍO TOACHI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>24,
            'id_canton' =>219,
            'nombre' => 'RÍO VERDE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>24,
            'id_canton' =>219,
            'nombre' => 'SANTO DOMINGO DE LOS COLORADOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>24,
            'id_canton' =>219,
            'nombre' => 'ZARACAY',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>24,
            'id_canton' =>219,
            'nombre' => 'SANTO DOMINGO DE LOS COLORADOS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>24,
            'id_canton' =>219,
            'nombre' => 'ALLURIQUÍN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>24,
            'id_canton' =>219,
            'nombre' => 'PUERTO LIMÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>24,
            'id_canton' =>219,
            'nombre' => 'LUZ DE AMÉRICA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>24,
            'id_canton' =>219,
            'nombre' => 'SAN JACINTO DEL BÚA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>24,
            'id_canton' =>219,
            'nombre' => 'VALLE HERMOSO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>24,
            'id_canton' =>219,
            'nombre' => 'EL ESFUERZO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>24,
            'id_canton' =>219,
            'nombre' => 'SANTA MARÍA DEL TOACHI',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>25,
            'id_canton' =>220,
            'nombre' => 'BALLENITA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>25,
            'id_canton' =>220,
            'nombre' => 'SANTA ELENA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>25,
            'id_canton' =>220,
            'nombre' => 'SANTA ELENA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>25,
            'id_canton' =>220,
            'nombre' => 'ATAHUALPA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>25,
            'id_canton' =>220,
            'nombre' => 'COLONCHE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>25,
            'id_canton' =>220,
            'nombre' => 'CHANDUY',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>25,
            'id_canton' =>220,
            'nombre' => 'MANGLARALTO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>25,
            'id_canton' =>220,
            'nombre' => 'SIMÓN BOLÍVAR (JULIO MORENO)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>25,
            'id_canton' =>220,
            'nombre' => 'SAN JOSÉ DE ANCÓN',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>25,
            'id_canton' =>221,
            'nombre' => 'LA LIBERTAD',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>25,
            'id_canton' =>222,
            'nombre' => 'CARLOS ESPINOZA LARREA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>25,
            'id_canton' =>222,
            'nombre' => 'GRAL. ALBERTO ENRÍQUEZ GALLO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>25,
            'id_canton' =>222,
            'nombre' => 'VICENTE ROCAFUERTE',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>25,
            'id_canton' =>222,
            'nombre' => 'SANTA ROSA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>25,
            'id_canton' =>222,
            'nombre' => 'SALINAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>25,
            'id_canton' =>222,
            'nombre' => 'ANCONCITO',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>25,
            'id_canton' =>222,
            'nombre' => 'JOSÉ LUIS TAMAYO (MUEY)',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>26,
            'id_canton' =>223,
            'nombre' => 'LAS GOLONDRINAS',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>26,
            'id_canton' =>224,
            'nombre' => 'MANGA DEL CURA',
            'estado' => '1',
        ]);
        
        
        DB::table('parroquias')->insert([
            'id_pais' => 57,
            'id_provincia' =>26,
            'id_canton' =>225,
            'nombre' => 'EL PIEDRERO',
            'estado' => '1',
        ]);
    }
}
