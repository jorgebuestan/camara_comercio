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
            'codigo' => '999999901', 
            'descripcion' => 'VERIFICAR' 
        ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01111101', 
                    'descripcion' => 'CULTIVO DE TRIGO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01111201', 
                    'descripcion' => 'CULTIVO DE MAÍZ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01111301', 
                    'descripcion' => 'CULTIVO DE QUINUA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01111901', 
                    'descripcion' => 'OTROS CULTIVOS DE CEREALES N.C.P.: SORGO, CEBADA, CENTENO, AVENA, MIJO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01112101', 
                    'descripcion' => 'CULTIVO DE FRÉJOL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01112201', 
                    'descripcion' => 'CULTIVO DE ARVEJA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01112301', 
                    'descripcion' => 'CULTIVO DE LENTEJA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01112901', 
                    'descripcion' => 'OTROS CULTIVOS LE LEGUMBRES: HABAS, GARBANZOS, VAINITAS, CHOCHO (ALTRAMUCES), ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01113101', 
                    'descripcion' => 'CULTIVO DE GRANOS Y SEMILLAS DE SOYA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01113201', 
                    'descripcion' => 'CULTIVO DE SEMILLAS DE MANÍ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01113901', 
                    'descripcion' => 'OTROS CULTIVOS DE SEMILLAS OLEAGINOSAS: SEMILLAS DE RICINO, SEMILLAS DE LINAZA, SEMILLAS DE MOSTAZA, SEMILLAS DE GIRASOL,  SEMILLAS DE AJONJOLÍ (SÉSAMO), SEMILLAS DE COLZA, SEMILLAS DE CÁRTAMO, SEMILLAS DE NÍGER, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01120001', 
                    'descripcion' => 'CULTIVO DE ARROZ (INCLUIDO EL CULTIVO ORGÁNICO Y EL CULTIVO DE ARROZ GENÉTICAMENTE MODIFICADO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01131101', 
                    'descripcion' => 'CULTIVO DE BRÓCOLI, COL Y COLIFLOR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01131201', 
                    'descripcion' => 'CULTIVO DE ALCACHOFA Y ESPÁRRAGO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01131901', 
                    'descripcion' => 'OTROS CULTIVOS DE HORTALIZAS DE HOJA O DE TALLO, ESPINACA, LECHUGA, BERROS, APIO, PEREJIL, ACELGA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01132101', 
                    'descripcion' => 'CULTIVO DE TOMATES (EXCEPTO TOMATE DE ÁRBOL),  PEPINILLOS Y SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01132201', 
                    'descripcion' => 'CULTIVO DE SANDÍAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01132202', 
                    'descripcion' => 'CULTIVO DE MELONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01132901', 
                    'descripcion' => 'CULTIVO DE ZAPALLO, SAMBO, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01132902', 
                    'descripcion' => 'CULTIVO DE ZUQUINI, BERENJENAS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01133101', 
                    'descripcion' => 'CULTIVO DE CEBOLLAS PAITEÑAS, CEBOLLAS PERLA, CEBOLLAS EN RAMA (PUERROS), AJOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01133201', 
                    'descripcion' => 'CULTIVO DE ZANAHORIA AMARILLA, RÁBANO, REMOLACHA (BETERABA), (EXCEPTO LA REMOLACHA AZUCARERA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01133901', 
                    'descripcion' => 'OTROS CULTIVOS DE HORTALIZAS DE RAÍCES BULBOSAS O TUBEROSAS: PAPANABO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01134101', 
                    'descripcion' => 'CULTIVO DE PAPA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01134202', 
                    'descripcion' => 'CULTIVO DE YUCA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01134901', 
                    'descripcion' => 'OTROS CULTIVOS DE RAÍCES Y TUBÉRCULOS, CAMOTE (BATATA), MELLOCO, OCA, MASHUA, ZANAHORIA BLANCA, PAPA CHINA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01139101', 
                    'descripcion' => 'CULTIVO DE HONGOS CHAMPIÑONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01139102', 
                    'descripcion' => 'CULTIVO DE TRUFAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01139201', 
                    'descripcion' => 'CULTIVO DE SEMILLAS VEGETALES EXCEPTO SEMILLAS DE REMOLACHA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01139301', 
                    'descripcion' => 'CULTIVO DE REMOLACHA AZUCARERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01139901', 
                    'descripcion' => 'CULTIVO DE OTRAS HORTALIZAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01140001', 
                    'descripcion' => 'CULTIVO DE CAÑA DE AZÚCAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01150001', 
                    'descripcion' => 'CULTIVO DE TABACO EN BRUTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01160101', 
                    'descripcion' => 'CULTIVO DE ALGODÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01160201', 
                    'descripcion' => 'CULTIVO DE YUTE, KENAF Y OTRAS PLANTAS DE FIBRAS TEXTILES BLANDAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01160301', 
                    'descripcion' => 'CULTIVO DE LINO Y CÁÑAMO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01160401', 
                    'descripcion' => 'CULTIVO DE SISAL Y OTRAS PLANTAS DE FIBRAS TEXTILES DEL GÉNERO AGAVE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01160501', 
                    'descripcion' => 'CULTIVO DE ALBACÁ, RAMIO Y OTRAS PLANTAS DE FIBRAS TEXTILES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01160901', 
                    'descripcion' => 'CULTIVO DE OTRAS PLANTAS DE FIBRAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01190101', 
                    'descripcion' => 'CULTIVO DE PLANTAS FORRAJERAS: NABOS FORRAJEROS, REMOLACHA FORRAJERA, RAÍCES FORRAJERAS, TRÉBOL, ALFALFA, ESPARCETA, MAÍZ FORRAJERO, KIKUYO, RAYGRÁS Y OTRAS PLANTAS FORRAJERAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01190201', 
                    'descripcion' => 'CULTIVO DE SEMILLAS DE REMOLACHA (EXCEPTUANDO LA REMOLACHA AZUCARERA) Y SEMILLAS DE PLANTAS FORRAJERAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01190301', 
                    'descripcion' => 'CULTIVO DE FLORES, INCLUIDA LA PRODUCCIÓN DE FLORES CORTADAS Y CAPULLOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01190401', 
                    'descripcion' => 'PRODUCCIÓN DE SEMILLAS DE FLORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01210001', 
                    'descripcion' => 'CULTIVO DE UVAS PARA VINO Y UVAS PARA SER CONSUMIDAS COMO FRUTA FRESCA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01220101', 
                    'descripcion' => 'CULTIVO DE BANANOS Y PLÁTANOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01220201', 
                    'descripcion' => 'CULTIVO DE MANGOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01220301', 
                    'descripcion' => 'CULTIVO DE MARACUYÁ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01220401', 
                    'descripcion' => 'CULTIVO DE PIÑAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01220901', 
                    'descripcion' => 'OTROS CULTIVOS DE FRUTAS TROPICALES Y SUBTROPICALES: PAPAYAS, BABACOS, CHAMBUROS, AGUACATES, HIGOS, ARAZÁ, GUAYABAS, GUANÁBANA, GUABA, CHIRIMOYA, NARANJILLAS, ZAPOTES, BOROJÓ, TAMARINDO, GRANADILLAS, DÁTILES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01230101', 
                    'descripcion' => 'CULTIVO DE NARANJAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01230201', 
                    'descripcion' => 'CULTIVO DE MANDARINAS, CLEMENTINAS Y TANGERINAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01230901', 
                    'descripcion' => 'OTROS CULTIVOS DE CÍTRICOS, LIMONES, TORONJAS, LIMAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01240101', 
                    'descripcion' => 'CULTIVO DE MANZANAS, PERAS Y MEMBRILLOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01240201', 
                    'descripcion' => 'CULTIVO DE DURAZNOS (MELOCOTONES), ALBARICOQUES Y NECTARINAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01240901', 
                    'descripcion' => 'OTROS CULTIVOS DE FRUTAS CON HUESO Y CON PEPA: CEREZAS, CIRUELAS, ENDRINAS, CAPULÍES, OVOS, CLAUDIAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01250101', 
                    'descripcion' => 'CULTIVO DE BAYAS GROSELLAS, GROSELLAS ESPINOSAS, KIWIS, FRAMBUESAS, FRESAS (FRUTILLAS), MORAS, MORTIÑOS (ARÁNDANOS), UVILLA Y OTRAS BAYAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01250201', 
                    'descripcion' => 'CULTIVO DE TOMATES DE ÁRBOL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01250301', 
                    'descripcion' => 'PRODUCCIÓN DE SEMILLAS DE FRUTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01250401', 
                    'descripcion' => 'CULTIVOS DE NUECES COMESTIBLES: ALMENDRAS, ANACARDOS, CASTAÑAS, AVELLANAS, PISTACHOS, NUECES DE NOGAL Y OTRAS NUECES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01250901', 
                    'descripcion' => 'OTROS CULTIVOS DE FRUTOS DE ÁRBOLES Y ARBUSTOS: PITAHAYA, TUNA, ALGARROBA, TAXOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01260101', 
                    'descripcion' => 'CULTIVO DE PALMAS DE ACEITE (PALMA AFRICANA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01260901', 
                    'descripcion' => 'OTROS CULTIVOS DE FRUTOS OLEAGINOSOS: COCOS, ACEITUNAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01270101', 
                    'descripcion' => 'CULTIVO DE CAFÉ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01270201', 
                    'descripcion' => 'CULTIVO DE CACAO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01270901', 
                    'descripcion' => 'CULTIVO DE TÉ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01270902', 
                    'descripcion' => 'OTROS CULTIVOS DE PLANTAS CON LAS QUE SE PREPARAN BEBIDAS: MATE, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01280101', 
                    'descripcion' => 'CULTIVO DE ESPECIAS DEL GÉNERO CAPSICUM: AJÍES, PIMIENTOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01280201', 
                    'descripcion' => 'CULTIVO DE ESPECIAS PERENNES Y NO PERENNES: NUEZ MOSCADA, MACIS, CARDAMOMOS, ANÍS, BADIANA, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01280202', 
                    'descripcion' => 'CULTIVO DE ESPECIAS PERENNES Y NO PERENNES: HINOJO, PIMIENTA, CLAVO, JENGIBRE, VAINILLA, LÚPULO, ESTRAGÓN, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01280203', 
                    'descripcion' => 'CULTIVO DE ESPECIAS PERENNES Y NO PERENNES: HINOJO, PIMIENTA, CLAVO, JENGIBRE, VAINILLA, LÚPULO, ESTRAGÓN, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01280301', 
                    'descripcion' => 'CULTIVO DE PLANTAS MEDICINALES, NARCÓTICAS O PROPÓSITOS SIMILARES: ORTIGA, MENTA, BELLADONA, HIERBA LUISA, MANZANILLA, GUANTO, UÑA DE GATO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01280302', 
                    'descripcion' => 'CULTIVO DE PLANTAS MEDICINALES, NARCÓTICAS O PROPÓSITOS SIMILARES: ORÉGANO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01280303', 
                    'descripcion' => 'CULTIVO DE PLANTAS UTILIZADAS PRINCIPALMENTE EN PERFUMERÍA, PARA LA PREPARACIÓN DE INSECTICIDAS, FUNGICIDAS O PROPÓSITOS SIMILARES: ORTIGA, MENTA, BELLADONA, HIERBA LUISA, MANZANILLA, GUANTO, UÑA DE GATO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01280304', 
                    'descripcion' => 'CULTIVO DE PLANTAS UTILIZADAS PRINCIPALMENTE EN PERFUMERÍA, PARA LA PREPARACIÓN DE INSECTICIDAS, FUNGICIDAS O PROPÓSITOS SIMILARES: ORÉGANO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01280305', 
                    'descripcion' => 'CULTIVO DE PLANTAS AROMÁTICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01290101', 
                    'descripcion' => 'CULTIVO DE MATERIALES VEGETALES DE LOS TIPOS UTILIZADOS PRINCIPALMENTE PARA TRENZAR: PAJA TOQUILLA, TOTORA, BAMBÚ, MIMBRE, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01290201', 
                    'descripcion' => 'CULTIVO DE PALMITO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01290901', 
                    'descripcion' => 'CULTIVO DE CAUCHO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01290902', 
                    'descripcion' => 'CULTIVO DE LÁTEX' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01290903', 
                    'descripcion' => 'CULTIVO DE ÁRBOLES PARA LA EXTRACCIÓN DE SAVIA, ÁRBOLES DE PINO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01300001', 
                    'descripcion' => 'EXPLOTACIÓN DE VIVEROS, CULTIVO DE PLANTAS PARA: PLANTAS VIVAS PARA UTILIZAR SUS BULBOS, TUBÉRCULOS Y RAÍCES; ESQUEJES E INJERTOS; ESTACAS; ESPORAS DE HONGOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01300002', 
                    'descripcion' => 'EXPLOTACIÓN DE VIVEROS, CULTIVO DE PLANTAS PARA: EL TRASPLANTE INCLUIDO CÉSPED PARA TRASPLANTE, PLANTAS CON FINES ORNAMENTALES, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01300003', 
                    'descripcion' => 'EXPLOTACIÓN DE VIVEROS, CULTIVO DE ÁRBOLES FRUTALES EN VIVEROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01300004', 
                    'descripcion' => 'CULTIVO DE FLORES EN VIVEROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01410101', 
                    'descripcion' => 'CRÍA Y REPRODUCCIÓN DE GANADO BOVINO INCLUIDO LA OBTENCIÓN DE PELO Y EXCREMENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01410201', 
                    'descripcion' => 'PRODUCCIÓN DE LECHE CRUDA DE VACA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01410301', 
                    'descripcion' => 'PRODUCCIÓN DE SEMEN Y EMBRIONES BOVINOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01410901', 
                    'descripcion' => 'CRÍA Y REPRODUCCIÓN DE OTRO TIPO DE GANADO BOVINO: BÚFALOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01420101', 
                    'descripcion' => 'CRÍA Y REPRODUCCIÓN DE CABALLOS (INCLUIDOS CABALLOS DE CARRERAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01420201', 
                    'descripcion' => 'CRÍA Y REPRODUCCIÓN DE ASNOS (BURROS), MULAS Y BURDÉGANOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01430001', 
                    'descripcion' => 'CRÍA Y REPRODUCCIÓN DE CAMÉLIDOS: ALPACA, LLAMA, VICUÑA, ETCÉTERA INCLUIDO LA OBTENCIÓN DE PELO Y EXCREMENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01440101', 
                    'descripcion' => 'CRÍA Y REPRODUCCIÓN DE OVEJAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01440102', 
                    'descripcion' => 'CRÍA Y REPRODUCCIÓN DE CABRAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01440201', 
                    'descripcion' => 'PRODUCCIÓN DE LECHE CRUDA DE OVEJA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01440202', 
                    'descripcion' => 'PRODUCCIÓN DE LECHE CRUDA DE CABRA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01440301', 
                    'descripcion' => 'PRODUCCIÓN DE LANA CRUDA Y PELO DE OVEJAS Y CABRAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01440401', 
                    'descripcion' => 'PRODUCCIÓN DE SEMEN Y EMBRIONES DE OVEJAS Y CABRAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01450101', 
                    'descripcion' => 'CRÍA Y REPRODUCCIÓN DE CERDOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01450201', 
                    'descripcion' => 'PRODUCCIÓN DE SEMEN Y EMBRIONES DE CERDOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01460101', 
                    'descripcion' => 'EXPLOTACIÓN DE CRIADEROS DE POLLOS Y REPRODUCCIÓN DE AVES DE CORRAL, POLLOS Y GALLINAS (AVES DE LA ESPECIE GALLUS DOMESTICUS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01460201', 
                    'descripcion' => 'CRÍA Y REPRODUCCIÓN DE: CODORNICES, PATOS, GANZOS, PAVOS Y GALLINAS DE GUINEA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01460301', 
                    'descripcion' => 'PRODUCCIÓN DE HUEVOS DE AVES DE CORRAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01491001', 
                    'descripcion' => 'CRÍA Y REPRODUCCIÓN DE AVESTRUCES, EMÚES, PALOMAS, TÓRTOLAS Y OTRAS AVES (EXCEPTO AVES DE CORRAL)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01492001', 
                    'descripcion' => 'CRÍA Y REPRODUCCIÓN DE CONEJOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01492101', 
                    'descripcion' => 'CRÍA Y REPRODUCCIÓN DE CUYES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01493101', 
                    'descripcion' => 'CRÍA Y REPRODUCCIÓN DE INSECTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01493201', 
                    'descripcion' => 'CRÍA Y REPRODUCCIÓN DE REPTILES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01499101', 
                    'descripcion' => 'PRODUCCIÓN DE PIELES FINAS COMO PARTE DE LA EXPLOTACIÓN PECUARIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01499102', 
                    'descripcion' => 'PRODUCCIÓN DE CUEROS DE REPTILES COMO PARTE DE LA EXPLOTACIÓN PECUARIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01499103', 
                    'descripcion' => 'PRODUCCIÓN DE PLUMAS DE AVES COMO PARTE DE LA EXPLOTACIÓN PECUARIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01499201', 
                    'descripcion' => 'EXPLOTACIÓN DE CRIADEROS DE GUSANOS (LOMBRICULTURA), MOLUSCOS TERRESTRES, CARACOLES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01499301', 
                    'descripcion' => 'CRÍA DE GUSANOS DE SEDA, PRODUCCIÓN DE CAPULLOS DE GUSANOS DE SEDA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01499401', 
                    'descripcion' => 'APICULTURA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01499402', 
                    'descripcion' => 'PRODUCCIÓN DE CERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01499403', 
                    'descripcion' => 'PRODUCCIÓN DE MIEL DE ABEJA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01499501', 
                    'descripcion' => 'CRÍA Y REPRODUCCIÓN DE ANIMALES DOMÉSTICOS (EXCEPTO PECES): GATOS, PERROS, PÁJAROS, HÁMSTERS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01499601', 
                    'descripcion' => 'CRÍA DE DIVERSOS ANIMALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01499701', 
                    'descripcion' => 'OBTENCIÓN DE PELO Y EXCREMENTO DE OTROS ANIMALES, N.C.P' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01499801', 
                    'descripcion' => 'PRODUCCIÓN DE PIELES MEDIANTE ACTIVIDADES DE CAZA ORDINARIA Y CON TRAMPA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01499802', 
                    'descripcion' => 'PRODUCCIÓN DE CUEROS DE REPTILES MEDIANTE ACTIVIDADES DE CAZA ORDINARIA Y CON TRAMPA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01499803', 
                    'descripcion' => 'PRODUCCIÓN DE PLUMAS DE AVES MEDIANTE ACTIVIDADES DE CAZA ORDINARIA Y CON TRAMPA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01500001', 
                    'descripcion' => 'EXPLOTACIÓN MIXTA DE CULTIVOS Y ANIMALES SIN ESPECIALIZACIÓN EN NINGUNA DE LAS ACTIVIDADES. EL TAMAÑO DEL CONJUNTO DE LA EXPLOTACIÓN AGRÍCOLA NO ES UN FACTOR DETERMINANTE. SI EL CULTIVO DE PRODUCTOS AGRÍCOLAS O LA CRÍA DE ANIMALES REPRESENTAN EN UNA UNIDAD DETERMINADA UNA PROPORCIÓN IGUAL O SUPERIOR AL 66% DE LOS MÁRGENES BRUTOS CORRIENTES, LA ACTIVIDAD MIXTA NO DEBE CLASIFICARSE EN ESTA CLASE, SINO ENTRE LOS CULTIVOS O LAS ACTIVIDADES DE CRÍA DE ANIMALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01610101', 
                    'descripcion' => 'ACTIVIDADES DE TRANSPLANTE DE ARROZ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01610102', 
                    'descripcion' => 'ACTIVIDADES DE ACONDICIONAMIENTO Y MANTENIMIENTO DE TERRENOS PARA USOS AGRÍCOLAS: PLANTACIÓN O SIEMBRA DE CULTIVOS Y COSECHA, PODA DE ÁRBOLES FRUTALES Y VIÑAS Y ENTRESACADO DE REMOLACHA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01610201', 
                    'descripcion' => 'ACTIVIDADES DE FUMIGACIÓN DE CULTIVOS, INCLUIDA LA FUMIGACIÓN AÉREA; TRATAMIENTO DE CULTIVOS, CONTROL DE PLAGAS (INCLUIDOS LOS CONEJOS); EN RELACIÓN CON LA AGRICULTURA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01610301', 
                    'descripcion' => 'SUMINISTRO DE MAQUINARIA AGRÍCOLA CON OPERADORES Y PERSONAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01610401', 
                    'descripcion' => 'MANEJO DE SISTEMAS DE RIEGO CON FINES AGRÍCOLAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01610501', 
                    'descripcion' => 'ENFRIAMIENTO DE FIBRAS VEGETALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01620101', 
                    'descripcion' => 'ACTIVIDADES PARA MEJORAR LA REPRODUCCIÓN, CRECIMIENTO Y RENDIMIENTO DE LOS ANIMALES RELACIONADAS CON LA INSEMINACIÓN ARTIFICIAL, SERVICIOS DE SEMENTALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01620201', 
                    'descripcion' => 'SERVICIOS DE INSPECCIÓN SANITARIA, ARREO Y PASTURAJE DE GANADO, CAPADURA DE ANIMALES, LIMPIEZA DE GALLINEROS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01620901', 
                    'descripcion' => 'ACTIVIDADES DE ALBERGUE Y CUIDADES DE ANIMALES DE GRANJA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01620902', 
                    'descripcion' => 'ACTIVIDADES DE ESQUILA DE OVEJAS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01620903', 
                    'descripcion' => 'ACTIVIDADES DE HERRADORES, DESUELLO DE ANIMALES, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01620904', 
                    'descripcion' => 'CONTRATISTAS DE MANO DE OBRA PARA EL SECTOR AGROPECUARIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01620905', 
                    'descripcion' => 'LIMPIEZA Y CLASIFICACIÓN DE HUEVOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01630101', 
                    'descripcion' => 'ACTIVIDADES DE PREPARACIÓN DE LA COSECHA PARA SU COMERCIALIZACIÓN EN LOS MERCADOS PRIMARIOS: LIMPIEZA, RECORTE, CLASIFICACIÓN, DESINFECCIÓN, EMPACADO POSCOSECHA, ENCERADO DE FRUTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01630901', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE POSCOSECHA: DESMOTADO DE ALGODÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01630902', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE POSCOSECHA: PREPARACIÓN DE HOJAS DE TABACO, PREPARACIÓN DE CACAO Y CAFÉ EN GRANO, SECADO AL SOL DE FRUTAS Y HORTALIZAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01640001', 
                    'descripcion' => 'ACTIVIDADES POSCOSECHA DIRIGIDAS A MEJORAR LA CALIDAD DE LAS SEMILLAS PARA PROPAGACIÓN, A TRAVÉS DE LA ELIMINACIÓN DE LOS MATERIALES QUE NO SON SEMILLA, SEMILLAS DE TAMAÑO INFERIOR AL NORMAL, SEMILLAS DAÑADAS MECÁNICAMENTE O POR INSECTOS Y SEMILLAS INMADURAS, ASÍ COMO LA ELIMINACIÓN DE LA HUMEDAD DE LAS SEMILLAS HASTA UN NIVEL QUE PERMITA SU ALMACENAMIENTO SEGURO. ESTA ACTIVIDAD INCLUYE EL SECADO, LIMPIEZA, CLASIFICACIÓN Y TRATAMIENTO DE SEMILLAS HASTA SU COMERCIALIZACIÓN. SE INCLUYE ASI MISMO EL TRATAMIENTO DE SEMILLAS GENÉTICAMENTE MODIFICADAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01700101', 
                    'descripcion' => 'ACTIVIDADES DE CAZA ORDINARIA Y MEDIANTE TRAMPAS PARA FINES COMERCIALES. ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01700102', 
                    'descripcion' => 'CAPTURA DE ANIMALES (VIVOS O MUERTOS) PARA CARNE, PRODUCCIÓN DE PIELES INCLUSO PIELES FINAS, CUEROS (CUEROS DE REPTILES), PLUMAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01700103', 
                    'descripcion' => 'CAPTURA DE ANIMALES (VIVOS O MUERTOS) PARA UTILIZARLOS EN LA INVESTIGACIÓN, EN ZOOLÓGICOS O COMO ANIMALES DOMÉSTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01700201', 
                    'descripcion' => 'CAPTURA EN TIERRA DE MAMÍFEROS MARINOS, COMO FOCAS Y MORSAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A01700301', 
                    'descripcion' => 'ACTIVIDADES Y SERVICIOS PARA PROMOVER LA CAZA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A02100101', 
                    'descripcion' => 'EXPLOTACIÓN DE MADERA EN PIE : PLANTACIÓN, REPLANTE, TRANSPLANTE, ACLAREO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A02100102', 
                    'descripcion' => 'EXPLOTACIÓN DE VIVEROS FORESTALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A02100103', 
                    'descripcion' => 'CONSERVACIÓN DE BOSQUES Y ZONAS FORESTADAS (ESTAS ACTIVIDADES PUEDEN SER LLEVADAS A CABO EN BOSQUES NATURALES O EN PLANTACIONES FORESTALES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A02100201', 
                    'descripcion' => 'CULTIVO DE MONTE BAJO (ARBUSTOS), MADERA PARA PASTA Y PARA LEÑA (ESTA ACTIVIDAD PUEDE SER LLEVADA A CABO EN BOSQUES NATURALES O EN PLANTACIONES FORESTALES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A02100202', 
                    'descripcion' => 'OTROS CULTIVOS DE ESPECIALIDADES HORTICOLAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A02200101', 
                    'descripcion' => 'PRODUCCIÓN DE MADERA EN BRUTO (ROLLOS) PARA LAS INDUSTRIAS MANUFACTURERAS QUE UTILIZAN PRODUCTOS FORESTALES, CHONTA, BALSA, CIPRÉS, PINO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A02200201', 
                    'descripcion' => 'PRODUCCIÓN DE MADERA EN BRUTO (ROLLOS) UTILIZADA EN FORMA NO PROCESADA COMO PUNTALES, ESTACAS, CERCAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A02200301', 
                    'descripcion' => 'ACTIVIDADES DE RECOLECCIÓN Y PRODUCCIÓN DE LEÑA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A02300001', 
                    'descripcion' => 'RECOLECCIÓN DE MATERIALES SILVESTRES: HONGOS, TRUFAS, BAYAS, NUECES, BALATA Y OTRAS GOMAS SIMILARES AL CAUCHO, CORCHO, GOMA LACA Y RESINAS, BÁLSAMOS, CRIN VEGETAL, CRIN MARINA (ZOSTERA), BELLOTAS Y CASTAÑAS DE INDIAS, MUSGOS Y LÍQUENES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A02400101', 
                    'descripcion' => 'ACTIVIDADES DE INVENTARIOS FORESTALES Y EVALUACIÓN DE EXISTENCIAS MADERABLES, LUCHA CONTRA PLAGAS FORESTALES Y SERVICIOS DE CONSULTORÍA DE GESTIÓN FORESTAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A02400201', 
                    'descripcion' => 'ACTIVIDADES DE EXTINCIÓN Y PREVENCIÓN DE INCENDIOS FORESTALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A02400301', 
                    'descripcion' => 'TRANSPORTE DE TRONCOS DENTRO DEL BOSQUE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A02400401', 
                    'descripcion' => 'PLANIFICACIÓN, DISEÑO, CUIDADO, INSTALACIÓN Y CONSERVACION DE PRADOS Y JARDINES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A02400501', 
                    'descripcion' => 'ACTIVIDADES FITOSANITARIAS PARA EL CUIDADO DE ÁRBOLES Y ARBUSTOS ORNAMENTALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A02400601', 
                    'descripcion' => 'ACTIVIDADES DE SERVICIOS DE CORTA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A03110101', 
                    'descripcion' => 'ACTIVIDADES DE PESCA DE ALTURA Y COSTERA: EXTRACCIÓN DE PECES, CRUSTÁCEOS Y MOLUSCOS MARINOS, TORTUGAS, ERIZOS DE MAR, ASCIDIAS Y OTROS TUNICADOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A03110201', 
                    'descripcion' => 'ACTIVIDADES DE CAPTURA DE BALLENAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A03110301', 
                    'descripcion' => 'ACTIVIDADES DE BUQUES DEDICADOS TANTO A LA PESCA MARINA COMO A LA PREPARACIÓN Y CONSERVACIÓN DE PESCADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A03110401', 
                    'descripcion' => 'ACTIVIDADES DE BUQUES DEDICADOS TANTO A LA PESCA MARINA COMO A LA PREPARACIÓN Y CONSERVACIÓN DE CRUSTÁCEOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A03110501', 
                    'descripcion' => 'ACTIVIDADES DE BUQUES DEDICADOS TANTO A LA PESCA MARINA COMO A LA PREPARACIÓN Y CONSERVACIÓN DE MOLUSCOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A03110901', 
                    'descripcion' => 'RECOLECCIÓN DE OTROS MATERIALES Y ORGANISMOS MARINOS: PERLAS NATURALES, ESPONJAS, CORALES Y ALGAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A03120101', 
                    'descripcion' => 'PESCA EN AGUAS INTERIORES, EXTRACCIÓN DE PECES, CRUSTÁCEOS Y MOLUSCOS DE AGUA DULCE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A03120201', 
                    'descripcion' => 'RECOLECCIÓN DE MATERIALES DE AGUA DULCE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A03210101', 
                    'descripcion' => 'ACTIVIDADES DE ACUICULTURA EN AGUA DEL MAR O EN TANQUES DE AGUA SALADA: CRÍA DE PECES INCLUIDO LA CRIA DE PECES ORNAMENTALES MARINOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A03210201', 
                    'descripcion' => 'EXPLOTACIÓN DE CRIADEROS DE CAMARONES (CAMARONERAS), CRIADEROS DE LARVAS  DE CAMARÓN (LABORATORIOS DE LARVAS DE CAMARÓN)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A03210301', 
                    'descripcion' => 'PRODUCCIÓN DE LARVAS DE BIVALVOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A03210302', 
                    'descripcion' => 'PRODUCCIÓN DE OSTRAS, MEJILLONES, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A03210303', 
                    'descripcion' => 'PRODUCCIÓN DE LANGOSTAS Y LANGOSTINOS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A03210304', 
                    'descripcion' => 'PRODUCCIÓN DE ALEVINES Y JARAMUGOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A03210401', 
                    'descripcion' => 'ACTIVIDADES DE CULTIVO OSTRAS PARA OBTENER PERLAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A03210402', 
                    'descripcion' => 'ACTIVIDADES DE CULTIVO DE LAVER Y OTRAS ALGAS COMESTIBLES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A03220101', 
                    'descripcion' => 'CRÍA Y EXPLOTACIÓN DE CRIADEROS DE PECES (DE AGUA DULCE) INCLUIDO PECES ORNAMENTALES, TRUCHAS, TILAPIAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A03220201', 
                    'descripcion' => 'CRÍA DE CRUSTÁCEOS, BIVALVOS, MOLUSCOS Y OTROS ANIMALES ACUÁTICOS DE AGUA DULCE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A03220301', 
                    'descripcion' => 'CRÍA DE RANAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A03220401', 
                    'descripcion' => 'ACTIVIDADES DE TIPO SERVICIO RELACIONADAS CON LA PESCA DE MAR Y DE AGUA DULCE Y CON CRIADEROS DE PECES Y GRANJAS PISCÍCOLAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'A03220501', 
                    'descripcion' => 'ACTIVIDADES DE TIPO SERVICIO RELACIONADAS CON CRIADEROS DE PECES Y GRANJAS PISCÍCOLAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B05100001', 
                    'descripcion' => 'ACTIVIDADES DE EXTRACCIÓN DE CARBÓN DE PIEDRA EN MINAS, INCLUYENDO LA EXTRACCIÓN A TRAVÉS DE MÉTODOS DE LICUEFACCIÓN, RECUPERACIÓN DE CARBÓN DE PIEDRA DE ESCOMBRERAS, LIMPIEZA, CRIBADO, CLASIFICACIÓN, PULVERIZACIÓN, COMPRESIÓN, ETCÉTERA; DEL CARBÓN PARA CLASIFICARLO, MEJORAR SU CALIDAD O FACILITAR SU TRANSPORTE O ALMACENAMIENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B05110001', 
                    'descripcion' => 'ACTIVIDADES DE EXTRACCIÓN DE ANTRACITA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B05120001', 
                    'descripcion' => 'ACTIVIDADES DE EXTRACCIÓN DE HULLA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B05120002', 
                    'descripcion' => 'ACTIVIDADES DE EXTRACCIÓN DE CARBONES BITUMINOSOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B05130001', 
                    'descripcion' => 'ACTIVIDADES DE EXTRACCIÓN DE OTROS TIPOS DE CARBÓN MINERAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B05200001', 
                    'descripcion' => 'EXTRACCIÓN DE LIGNITO (CARBÓN PARDO) EN MINAS, INCLUYENDO LA EXTRACCIÓN A TRAVÉS DE MÉTODOS DE LICUEFACCIÓN, ACTIVIDADES DE LIMPIEZA, DESHIDRATACIÓN, PULVERIZACIÓN, COMPRESIÓN, ETCÉTERA; DE LIGNITO PARA MEJORAR SU CALIDAD O FACILITAR SU TRANSPORTE O ALMACENAMIENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B06100001', 
                    'descripcion' => 'EXTRACCIÓN DE ACEITES CRUDOS DE PETRÓLEO, ESQUISTOS BITUMINOSOS Y ARENAS ALQUITRANADAS, PRODUCCIÓN DE PETRÓLEO CRUDO DE ESQUISTOS Y ARENAS BITUMINOSAS, PROCESOS DE OBTENCIÓN DE CRUDOS: DECANTACIÓN, DESALADO, DESHIDRATACIÓN, ESTABILIZACIÓN, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B06200101', 
                    'descripcion' => 'PRODUCCIÓN DE HIDROCARBUROS CRUDOS EN ESTADO GASEOSO (GAS NATURAL), EXTRACCIÓN DE CONDENSADOS, DRENAJE Y SEPARACIÓN DE LAS FRACCIONES LÍQUIDAS, DESULFURIZACIÓN DE GAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B06200201', 
                    'descripcion' => 'EXTRACCIÓN DE HIDROCARBUROS LÍQUIDOS, OBTENIDOS A TRAVÉS DE LICUEFACCIÓN O PIROLISIS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B07100101', 
                    'descripcion' => 'EXTRACCIÓN DE MINERALES ESTIMADOS PRINCIPALMENTE POR SU CONTENIDO EN HIERRO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B07100201', 
                    'descripcion' => 'BENEFICIO Y AGLOMERACIÓN DE MINERALES DE HIERRO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B07100301', 
                    'descripcion' => 'PRODUCCIÓN DE MINERALES DE HIERRO SINTERIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B07210001', 
                    'descripcion' => 'EXTRACCIÓN DE MINERALES ESTIMADOS PRINCIPALMENTE POR SU CONTENIDO DE URANIO Y TORIO: PECBLENDA, ÓXIDO NATURAL DE URANIO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B07210002', 
                    'descripcion' => ' CONCENTRACIÓN DE URANIO Y TORIO, PRODUCCIÓN DE TORTA AMARILLA (CONCENTRADO DE URANIO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B07220001', 
                    'descripcion' => 'EXTRACCIÓN DE METAL DE URANIO A PARTIR DE LA PECBLENDA U OTROS MINERALES QUE CONTIENEN URANIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B07290101', 
                    'descripcion' => 'EXTRACCIÓN DE ALUMINIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B07290102', 
                    'descripcion' => 'EXTRACCIÓN DE COBRE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B07290103', 
                    'descripcion' => 'EXTRACCIÓN DE PLOMO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B07290104', 
                    'descripcion' => 'EXTRACCIÓN DE ZINC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B07290105', 
                    'descripcion' => 'EXTRACCIÓN DE ESTAÑO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B07290106', 
                    'descripcion' => 'EXTRACCIÓN DE MANGANESO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B07290107', 
                    'descripcion' => 'EXTRACCIÓN DE NÍQUEL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B07290108', 
                    'descripcion' => 'EXTRACCIÓN DE COBALTO, MOLIBDENO, TÁNTALO, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B07290109', 
                    'descripcion' => 'EXTRACCIÓN DE VANADIO, CROMO, TUNGSTENO, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B07290201', 
                    'descripcion' => 'EXTRACCIÓN DE METALES PRECIOSOS: ORO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B07290202', 
                    'descripcion' => 'EXTRACCIÓN DE METALES PRECIOSOS: PLATA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B07290203', 
                    'descripcion' => 'EXTRACCIÓN DE METALES PRECIOSOS: PLATINO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08101101', 
                    'descripcion' => 'EXTRACCIÓN, TALLA SIN LABRAR Y ASERRADO DE PIEDRA DE CONSTRUCCIÓN, GRANITO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08101102', 
                    'descripcion' => 'EXTRACCIÓN, TALLA SIN LABRAR Y ASERRADO DE PIEDRA DE CONSTRUCCIÓN, COMO MÁRMOL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08101103', 
                    'descripcion' => 'EXTRACCIÓN, TALLA SIN LABRAR Y ASERRADO DE PIEDRA DE CONSTRUCCIÓN, COMO PIZARRA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08101104', 
                    'descripcion' => 'EXTRACCIÓN, TALLA SIN LABRAR Y ASERRADO DE PIEDRA DE CONSTRUCCIÓN, COMO ARENISCA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08101201', 
                    'descripcion' => 'EXTRACCIÓN DE PIEDRA CALIZA, PARA UTILIZARLA EN LA FABRICACIÓN DE CAL O CEMENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08101202', 
                    'descripcion' => 'TRITURACIÓN Y FRAGMENTACIÓN DE PIEDRA CALIZA, PARA UTILIZARLA EN LA FABRICACIÓN DE CAL O CEMENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08101301', 
                    'descripcion' => 'EXTRACCIÓN DE YESO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08101302', 
                    'descripcion' => 'EXTRACCIÓN DE ANHIDRITA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08101401', 
                    'descripcion' => 'EXTRACCIÓN DE CRETA Y DOLOMITA SIN CALCINAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08102101', 
                    'descripcion' => 'EXTRACCIÓN Y DRAGADO DE ARENAS PARA LA INDUSTRIA, ARENAS PARA LA CONSTRUCCIÓN, GRAVA (RIPIO) Y GRAVILLA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08102102', 
                    'descripcion' => 'EXTRACCIÓN DE ARENA DE SILICE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08102103', 
                    'descripcion' => 'EXTRACCIÓN DE ARENA DE CUARZO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08102104', 
                    'descripcion' => 'EXPLOTACIÓN DE DEPÓSITOS DE ARENAS ALQUITRANADAS O ESQUISTOS BITUMINOSOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08102201', 
                    'descripcion' => 'FRAGMENTACIÓN Y TRITURACIÓN DE PIEDRA, GRAVA (RIPIO), GRAVILLA Y ARENA, PARA LA CONSTRUCCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08102301', 
                    'descripcion' => 'EXTRACCIÓN DE ARCILLAS, ARCILLAS REFRACTARIAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08102302', 
                    'descripcion' => 'EXTRACCIÓN DE CAOLÍN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08910101', 
                    'descripcion' => 'EXTRACCIÓN DE FOSFATOS Y SALES DE POTASIO NATURALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08910201', 
                    'descripcion' => 'EXTRACCIÓN DE AZUFRE NATURAL (NATIVO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08910301', 
                    'descripcion' => 'EXTRACCIÓN Y PREPARACIÓN DE PIRITA Y PIRROTINA, EXCEPTO EL TOSTADO DE PIRITA Y PIRROTINA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08910401', 
                    'descripcion' => 'EXTRACCIÓN DE BARIO NATURALES (BARITINA Y WITHERITA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08910402', 
                    'descripcion' => 'EXTRACCIÓN DE BORATOS NATURALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08910403', 
                    'descripcion' => 'EXTRACCIÓN DE SULFATO DE MAGNESIO NATURALES (KIESERITA) Y CARBONATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08910501', 
                    'descripcion' => 'EXTRACCIÓN DE TIERRAS COLORANTES, ESPATOFLÚOR Y OTROS MINERALES ESTIMADOS PRINCIPALMENTE COMO FUENTE DE SUSTANCIAS QUÍMICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08910601', 
                    'descripcion' => 'EXTRACCIÓN DE GUANO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08910701', 
                    'descripcion' => 'EXTRACCIÓN DE TIERRAS RARAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08920001', 
                    'descripcion' => 'EXTRACCIÓN DE TURBA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08920101', 
                    'descripcion' => 'AGLOMERACIÓN, PREPARACIÓN DE TURBA PARA MEJORAR SU CALIDAD, FACILITAR SU TRANSPORTE O ALMACENAMIENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08930101', 
                    'descripcion' => 'EXTRACCIÓN DE SAL EN YACIMIENTOS SUBTERRÁNEOS, INCLUSO MEDIANTE DISOLUCIÓN Y BOMBEO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08930201', 
                    'descripcion' => 'PRODUCCIÓN DE SAL MEDIANTE EVAPORACIÓN AL SOL DE AGUA DE MAR Y OTRAS AGUAS SALINAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08930301', 
                    'descripcion' => 'TRITURACIÓN, PURIFICACIÓN Y REFINADO DE LA SAL POR EL PRODUCTOR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08990101', 
                    'descripcion' => 'EXTRACCIÓN DE BITUMEN NATURAL SÓLIDO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08990102', 
                    'descripcion' => 'EXTRACCIÓN DE ASFALTO NATURAL, ASFALTITAS Y ROCA ASFÁLTICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08990201', 
                    'descripcion' => 'EXTRACCIÓN DE PIEDRAS PRECIOSAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08990202', 
                    'descripcion' => 'EXTRACCIÓN DE PIEDRAS SEMIPRECIOSAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08990203', 
                    'descripcion' => 'EXTRACCIÓN DE CUARZO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08990204', 
                    'descripcion' => 'EXTRACCIÓN DE CUARCITA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08990205', 
                    'descripcion' => 'EXTRACCIÓN DE MICA, GEMA, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08990301', 
                    'descripcion' => 'EXTRACCIÓN DE GRAFITO NATURAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08990302', 
                    'descripcion' => 'EXTRACCIÓN DE CORINDÓN, PIEDRA PÓMEZ, ESMERIL, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08990303', 
                    'descripcion' => 'EXTRACCIÓN DE FELDESPATOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08990901', 
                    'descripcion' => 'EXTRACCIÓN DE ANTIMONIO, MAGNESITA, ESTEATITA (TALCO), ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08990902', 
                    'descripcion' => 'EXTRACCIÓN DE PEOLITA, VERMICULITA, CLORITA, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08990903', 
                    'descripcion' => 'EXTRACCIÓN DE ASBESTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08990904', 
                    'descripcion' => 'EXTRACCIÓN DE FÓSILES SILÍCEOS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B08991001', 
                    'descripcion' => 'EXTRACCIÓN DE OTROS FUNDENTES NATURALES, LEUCITA, NEFELINA, SIENITA NEFILIMICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B09100101', 
                    'descripcion' => 'ACTIVIDADES DE SERVICIOS DE EXTRACCIÓN DE PETRÓLEO Y GAS REALIZADAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO: SONDEOS, EXPLORACIÓN (POR EJEMPLO: MÉTODOS TRADICIONALES DE PROSPECCIÓN, COMO OBSERVACIONES GEOLÓGICAS EN POSIBLES YACIMIENTOS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B09100102', 
                    'descripcion' => 'ACTIVIDADES DE SERVICIOS DE PERFORACIÓN DIRIGIDA Y REPERFORACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B09100103', 
                    'descripcion' => 'ACTIVIDADES DE SERVICIOS DE PERFORACIÓN INICIAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B09100104', 
                    'descripcion' => 'ACTIVIDADES DE SERVICIOS DE ERECCIÓN, REPARACIÓN Y DESMANTELAMIENTO DE TORRES DE PERFORACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B09100105', 
                    'descripcion' => 'ACTIVIDADES DE SERVICIOS DE CEMENTACIÓN DE TUBOS DE ENCAMISADO DE LOS POZOS DE PETRÓLEO Y GAS, BOMBEO, TAPONAMIENTO Y ABANDONO DE POZOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B09100106', 
                    'descripcion' => 'ACTIVIDADES DE SERVICIOS DE LICUEFACCIÓN Y REGASIFICACIÓN DE GAS NATURAL PARA SU TRANSPORTE, REALIZADAS EN EL LUGAR DE EXTRACCIÓN; DRENAJE Y BOMBEO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B09100201', 
                    'descripcion' => 'SERVICIOS DE PREVENCIÓN Y EXTINCIÓN DE INCENDIOS EN CAMPOS DE PETRÓLEO Y GAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B09900101', 
                    'descripcion' => 'SERVICIOS DE APOYO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO, REQUERIDAS PARA LA EXTRACCIÓN DE CARBÓN DE PIEDRA, LIGNITO Y TURBA: EXPLORACIÓN (POR EJEMPLO: MÉTODOS DE PROSPECCIÓN TRADICIONALES, COMO RECOGIDA DE MUESTRAS Y REALIZACIÓN DE OBSERVACIONES GEOLÓGICAS EN POSIBLES YACIMIENTOS); PERFORACIONES DE PRUEBA Y SONDEOS; DRENAJE Y BOMBEO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B09900201', 
                    'descripcion' => 'SERVICIOS DE APOYO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO, REQUERIDAS PARA LA EXTRACCIÓN DE MINERALES METALÍFEROS: PERFORACIONES DE PRUEBA Y SONDEOS, EXPLORACIÓN (POR EJEMPLO: MÉTODOS DE PROSPECCIÓN TRADICIONALES, COMO RECOGIDA DE MUESTRAS Y REALIZACIÓN DE OBSERVACIONES GEOLÓGICAS EN POSIBLES YACIMIENTOS; DRENAJE Y BOMBEO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B09900301', 
                    'descripcion' => 'SERVICIOS DE GASIFICACIÓN DEL CARBÓN IN SITU, PARA OBTENER PRODUCTOS TALES COMO EL METANO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B09900401', 
                    'descripcion' => 'OPERACIONES MINERAS DE LIMPIEZA, CRIBADO, CLASIFICACIÓN, PULVERIZACIÓN U OTRAS ACTIVIDADES PARA MEJORAR LA CALIDAD Y FACILITAR EL TRANSPORTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B09900501', 
                    'descripcion' => 'LAVADO, DESHIDRATACIÓN, PULVERIZACIÓN U OTRAS OPERACIONES PARA MEJORAR LA CALIDAD DE LA AGLOMERACIÓN DE LIGNITO Y FACILITAR EL TRANSPORTE O ALMACENAMIENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'B09900901', 
                    'descripcion' => 'SERVICIOS DE APOYO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO, REQUERIDAS PARA LA EXPLOTACIÓN DE OTRAS MINAS Y CANTERAS: PERFORACIONES DE PRUEBA Y SONDEOS, EXPLORACIÓN (POR EJEMPLO: MÉTODOS DE PROSPECCIÓN TRADICIONALES, COMO RECOGIDA DE MUESTRAS Y REALIZACIÓN DE OBSERVACIONES GEOLÓGICAS EN POSIBLES YACIMIENTOS); DRENAJE Y BOMBEO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10101101', 
                    'descripcion' => 'EXPLOTACIÓN DE MATADEROS QUE REALIZAN ACTIVIDADES DE SACRIFICIO, FAENAMIENTO, PREPARACIÓN, PRODUCCIÓN Y EMPACADO DE CARNE FRESCA REFRIGERADA O CONGELADA EN CANALES O PIEZAS O PORCIONES INDIVIDUALES DE: BOVINO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10101102', 
                    'descripcion' => 'EXPLOTACIÓN DE MATADEROS QUE REALIZAN ACTIVIDADES DE SACRIFICIO, FAENAMIENTO, PREPARACIÓN, PRODUCCIÓN Y EMPACADO DE CARNE FRESCA REFRIGERADA O CONGELADA EN CANALES O PIEZAS O PORCIONES INDIVIDUALES DE: PORCINO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10101103', 
                    'descripcion' => 'EXPLOTACIÓN DE MATADEROS QUE REALIZAN ACTIVIDADES DE SACRIFICIO, FAENAMIENTO, PREPARACIÓN, PRODUCCIÓN Y EMPACADO DE CARNE FRESCA REFRIGERADA O CONGELADA EN CANALES O PIEZAS O PORCIONES INDIVIDUALES DE: OVINO Y CAPRINO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10101201', 
                    'descripcion' => 'EXPLOTACIÓN DE MATADEROS QUE REALIZAN ACTIVIDADES DE SACRIFICIO, FAENAMIENTO, PREPARACIÓN, PRODUCCIÓN Y EMPACADO DE CARNE FRESCA REFRIGERADA O CONGELADA INCLUSO EN PIEZAS O PORCIONES INDIVIDUALES DE AVES DE CORRAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10101301', 
                    'descripcion' => 'ACTIVIDADES DE SACRIFICIO, FAENAMIENTO, PREPARACIÓN, PRODUCCIÓN Y EMPACADO DE CARNE FRESCA REFRIGERADA O CONGELADA INCLUSO EN PIEZAS O PORCIONES INDIVIDUALES DE: CUYES, CONEJOS, RANA (ANCAS DE RANA) ETCÉTERA,' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10101401', 
                    'descripcion' => 'CAPTURA, SACRIFICIO Y PROCESAMIENTO DE BALLENAS EN TIERRA O SOBRE EMBARCACIONES ESPECIALIZADAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10102101', 
                    'descripcion' => 'PREPARACIÓN Y CONSERVACIÓN DE CARNE MEDIANTE: DESECACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10102102', 
                    'descripcion' => 'PREPARACIÓN Y CONSERVACIÓN DE CARNE MEDIANTE: SALADURA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10102103', 
                    'descripcion' => 'PREPARACIÓN Y CONSERVACIÓN DE CARNE MEDIANTE: AHUMADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10102104', 
                    'descripcion' => 'PREPARACIÓN Y CONSERVACIÓN DE CARNE MEDIANTE: ENLATADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10102201', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS CÁRNICOS: SALCHICHAS, SALCHICHÓN, CHORIZO, SALAME, MORCILLAS, MORTADELA, PATÉS, CHICHARRONES FINOS, JAMONES, EMBUTIDOS, ETCÉTERA. INCLUSO SNACKS DE CERDO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10102301', 
                    'descripcion' => 'PRODUCCIÓN DE CUEROS Y PIELES ORIGINADOS EN MATADEROS INCLUIDA PIELES DEPILADAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10102401', 
                    'descripcion' => 'EXTRACCIÓN DE OTRAS GRASAS COMESTIBLES DE ORIGEN ANIMAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10102402', 
                    'descripcion' => 'EXTRACCIÓN DE MANTECA DE CERDO DE ORIGEN ANIMAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10102501', 
                    'descripcion' => 'OBTENCIÓN DE DESPOJOS DE ANIMALES, LANA DE MATADERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10102502', 
                    'descripcion' => 'OBTENCIÓN DE DESPOJOS DE ANIMALES, PELO ORDINARIO, PLUMAS (PLUMÓN) Y PELUSAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10102601', 
                    'descripcion' => 'PRODUCCIÓN DE SÉMOLAS DE CARNE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10102602', 
                    'descripcion' => 'PRODUCIÓN DE HARINAS DE CARNE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10102701', 
                    'descripcion' => 'PRODUCCIÓN DE CARNES PROVIENTES DE LA CAZA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10102801', 
                    'descripcion' => 'ELABORACIÓN DE DESPOJOS DE CARNE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10102901', 
                    'descripcion' => 'PREPARACIÓN Y CONSERVACIÓN DE OTROS PRODUCTOS CÁRNICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10103001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA ELABORACIÓN Y CONSERVACIÓN DE CARNE A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10200101', 
                    'descripcion' => 'PREPARACIÓN Y CONSERVACIÓN DE CAMARÓN Y LANGOSTINOS MEDIANTE EL CONGELADO, ULTRACONGELADO SECADO, AHUMADO, SALADO, SUMERGIDO EN SALMUERA Y ENLATADO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10200201', 
                    'descripcion' => 'PREPARACIÓN Y CONSERVACIÓN DE PESCADO MEDIANTE EL CONGELADO, ULTRACONGELADO, SECADO, AHUMADO, SALADO, SUMERGIDO EN SALMUERA Y ENLATADO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10200202', 
                    'descripcion' => 'PREPARACIÓN Y CONSERVACIÓN DE CRUSTÁCEOS Y OTROS MOLUSCOS MEDIANTE EL CONGELADO, ULTRACONGELADO, SECADO, AHUMADO, SALADO, SUMERGIDO EN SALMUERA Y ENLATADO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10200203', 
                    'descripcion' => 'PREPARACIÓN Y CONSERVACIÓN DE PRODUCTOS DE PESCADO, MEDIANTE EL CONGELADO, ULTRACONGELADO, SECADO, AHUMADO, SALADO, SUMERGIDO EN SALMUERA Y ENLATADO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10200301', 
                    'descripcion' => 'ELABORACIÓN DE PRODUCTOS DE CAMARÓN Y LANGOSTINOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10200401', 
                    'descripcion' => 'ELABORACIÓN DE PRODUCTOS DE PESCADO: COCINADO, FILETES DE PESCADO, HUEVOS DE PESCADO, CAVIAR Y SUSTITUTOS DEL CAVIAR, ETCÉTERA. ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10200402', 
                    'descripcion' => 'ELABORACIÓN DE PRODUCTOS DE CRUSTÁCEOS (EXCEPTO CAMARÓN Y LANGOSTINOS) Y OTROS MOLUSCOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10200501', 
                    'descripcion' => 'ELABORACIÓN DE HARINA DE PESCADO PARA CONSUMO HUMANO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10200601', 
                    'descripcion' => 'ELABORACIÓN DE HARINA Y SOLUBLES DE PESCADO Y OTROS ANIMALES ACUÁTICOS PARA ALIMENTO DE ANIMALES, NO APTOS PARA EL CONSUMO HUMANO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10200701', 
                    'descripcion' => 'ACTIVIDADES DE BUQUES-FACTORÍA QUE SE DEDICAN A LA PESCA Y A LA CONSERVACIÓN DE PESCADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10200702', 
                    'descripcion' => 'ACTIVIDADES DE BUQUES-FACTORÍA QUE SE DEDICAN A LA PESCA Y A LA CONSERVACIÓN DE CRUSTÁCEOS Y MOLUSCOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10200801', 
                    'descripcion' => 'ELABORACIÓN DE PRODUCTOS DE ALGAS Y OTROS RECURSOS MARINOS, MEDIANTE EL SECADO, SALAZÓN, CONSERVACIÓN EN SALMUERA, ENLATADOS, AHUMADO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10200901', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA ELABORACIÓN Y CONSERVACIÓN DE PESCADOS, CRUSTÁCEOS Y MOLUSCOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10201001', 
                    'descripcion' => 'PRODUCCIÓN DE PESCADO Y FILETES DE PESCADO, INCLUSO PESCADO PICADO, TROZADO O MOLIDO, FRESCOS, REFRIGERADOS O CONGELADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10301101', 
                    'descripcion' => 'ELABORACIÓN DE ALIMENTOS COMPUESTOS (MEZCLA) PRINCIPALMENTE DE FRUTAS EXCEPTO PLATOS PREPARADOS EN FORMA CONGELADA O ENLATADA LISTOS PARA CONSUMIR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10301102', 
                    'descripcion' => 'ELABORACIÓN DE ALIMENTOS COMPUESTOS (MEZCLA) PRINCIPALMENTE DE LEGUMBRES U HORTALIZAS, EXCEPTO PLATOS PREPARADOS EN FORMA CONGELADA O ENLATADA LISTOS PARA CONSUMIR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10301201', 
                    'descripcion' => 'CONSERVACIÓN DE FRUTAS MEDIANTE CONGELADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10301202', 
                    'descripcion' => 'CONSERVACIÓN DE FRUTAS MEDIANTE ENLATADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10301203', 
                    'descripcion' => 'CONSERVACIÓN DE FRUTAS MEDIANTE SECADO, DESHIDRATADO, INMERSIÓN EN ACEITE O VINAGRE, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10301204', 
                    'descripcion' => 'CONSERVACIÓN DE LEGUMBRES MEDIANTE CONGELADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10301205', 
                    'descripcion' => 'CONSERVACIÓN DE LEGUMBRES MEDIANTE ENLATADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10301206', 
                    'descripcion' => 'CONSERVACIÓN DE LEGUMBRES MEDIANTE SECADO, DESHIDRATADO, INMERSIÓN EN ACEITE O VINAGRE, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10301207', 
                    'descripcion' => 'CONSERVACIÓN DE HORTALIZAS MEDIANTE CONGELADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10301208', 
                    'descripcion' => 'CONSERVACIÓN DE HORTALIZAS MEDIANTE ENLATADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10301209', 
                    'descripcion' => 'CONSERVACIÓN DE HORTALIZAS MEDIANTE SECADO, DESHIDRATADO, INMERSIÓN EN ACEITE O VINAGRE, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10301301', 
                    'descripcion' => 'CONSERVACIÓN DE NUECES (PASTA DE NUECES) Y OTROS FRUTOS SECOS MEDIANTE EL TOSTADO, SALADO, ASADO, ENLATADO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10301401', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS ALIMENTICIOS A PARTIR DE (UN SOLO COMPONENTE) FRUTAS, LEGUMBRES Y HORTALIZAS; INCLUSO SNACKS DE PLÁTANO (CHIFLES), YUCA, FRUTAS, ETCÉTERA, EXCEPTO PAPA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10301501', 
                    'descripcion' => 'ELABORACIÓN DE JUGOS (ZUMOS), NÉCTARES, CONCENTRADOS DE FRUTA FRESCA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10301502', 
                    'descripcion' => 'ELABORACIÓN DE JUGOS (ZUMOS), NÉCTARES, CONCENTRADOS DE HORTALIZAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10301601', 
                    'descripcion' => 'ELABORACIÓN DE COMPOTAS, MERMELADAS Y JALEAS, PURÉS Y OTRAS CONFITURAS DE FRUTAS O FRUTOS SECOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10301701', 
                    'descripcion' => 'FABRICACIÓN DE ALIMENTOS PERECIBLES A BASE DE FRUTAS, LEGUMBRES Y HORTALIZAS COMO: ENSALADAS EMPAQUETADAS, HORTALIZAS PELADAS Y CORTADAS, TOFU (CUAJADA DE SOYA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10302101', 
                    'descripcion' => 'ELABORACIÓN Y CONSERVACIÓN DE PAPAS PREPARADAS CONGELADAS U OTRO TIPO DE CONSERVACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10302201', 
                    'descripcion' => 'ELABORACIÓN DE PURÉ DE PAPAS DESHIDRATADO, HARINA Y SÉMOLA DE PAPA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10302301', 
                    'descripcion' => 'ELABORACIÓN DE PAPAS FRITAS Y SNACKS DE PAPAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10303001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA ELABORACIÓN Y CONSERVACIÓN DE FRUTAS, LEGUMBRES Y HORTALIZAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO: PELADO INDUSTRIAL DE PAPAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10401101', 
                    'descripcion' => 'ELABORACIÓN DE ACEITES CRUDOS VEGETALES (SIN REFINAR) DE: OLIVA, SOYA, PALMA, SEMILLA DE GIRASOL, SEMILLA DE ALGODÓN, COLZA, REPOLLO O MOSTAZA, LINAZA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10401201', 
                    'descripcion' => 'ELABORACIÓN DE HARINA Y SÉMOLA SIN DESGRASAR DE SEMILLAS, NUECES Y ALMENDRAS OLEAGINOSAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10401301', 
                    'descripcion' => 'ELABORACIÓN DE ACEITES VEGETALES REFINADOS: ACEITE DE OLIVA, ACEITE DE SOYA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10401401', 
                    'descripcion' => 'ELABORACIÓN DE ACEITES VEGETALES: OXIDACIÓN POR CORRIENTE DE AIRE, COCCIÓN, DESHIDRATACIÓN, HIDROGENACIÓN, ETCÉTERA; MEZCLAS DE ACEITES DE OLIVA, Y PRODUCTOS SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10401402', 
                    'descripcion' => 'ELABORACIÓN DE MARGARINAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10401403', 
                    'descripcion' => 'ELABORACIÓN DE GRASAS COMPUESTAS PARA COCINAR Y PRODUCTOS SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10401404', 
                    'descripcion' => 'PRODUCCIÓN DE MANTECAS PARA COCINAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10401501', 
                    'descripcion' => 'PRODUCCIÓN DE BORRAS DE ALGODÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10401502', 
                    'descripcion' => 'PRODUCCIÓN DE TORTAS Y OTROS PRODUCTOS RESIDUALES DE LA PRODUCCIÓN DE ACEITE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10402101', 
                    'descripcion' => 'ELABORACIÓN DE ACEITES Y GRASAS DE ORIGEN ANIMAL NO COMESTIBLES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10402201', 
                    'descripcion' => 'EXTRACCIÓN DE ACEITES DE PESCADO (HÍGADO DE PESCADO) Y MAMÍFEROS MARINOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10402301', 
                    'descripcion' => 'EXTRACCIÓN Y REFINACIÓN DE MANTECA Y OTRAS GRASAS DE ORIGEN ANIMAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10402401', 
                    'descripcion' => 'PRODUCCIÓN DE RESIDUOS DE LA EXTRACCIÓN DE ACEITES Y MANTECAS ANIMALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10402501', 
                    'descripcion' => 'PRODUCCIÓN DE OTROS ELABORADOS DE ACEITES Y MANTECAS ANIMALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10403001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA ELABORACIÓN DE ACEITES Y GRASAS DE ORIGEN VEGETAL Y ANIMAL A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10500101', 
                    'descripcion' => 'ELABORACIÓN DE LECHE FRESCA LÍQUIDA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10500102', 
                    'descripcion' => 'ELABORACIÓN DE CREMA DE LECHE LÍQUIDA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10500103', 
                    'descripcion' => 'ELABORACIÓN DE BEBIDAS A BASE DE LECHE, YOGURT, PASTEURIZADA, ESTERILIZADA, HOMOGENEIZADA Y/O TRATADA A ALTAS TEMPERATURAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10500104', 
                    'descripcion' => 'ELABORACIÓN DE CASEÍNA PASTEURIZADA, ESTERILIZADA, HOMOGENEIZADA Y/O TRATADA A ALTAS TEMPERATURAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10500105', 
                    'descripcion' => 'ELABORACIÓN DE LACTOSA, PASTEURIZADA, ESTERILIZADA, HOMOGENEIZADA Y/O TRATADA A ALTAS TEMPERATURAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10500201', 
                    'descripcion' => 'ELABORACIÓN DE LECHE EN POLVO, CONDENSADA SEA O NO AZUCARADA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10500301', 
                    'descripcion' => 'ELABORACIÓN DE CREMA EN FORMA SÓLIDA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10500401', 
                    'descripcion' => 'ELABORACIÓN DE MANTEQUILLA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10500402', 
                    'descripcion' => 'ELABORACIÓN DE QUESO Y CUAJADA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10500403', 
                    'descripcion' => 'ELABORACIÓN DE SUERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10500501', 
                    'descripcion' => 'ELABORACIÓN DE HELADOS (DE TODO TIPO), SORBETES, BOLOS, GRANIZADOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10500601', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA ELABORACIÓN DE PRODUCTOS LÁCTEOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10500701', 
                    'descripcion' => 'PRODUCCIÓN DE LECHE EN FORMA SÓLIDA YA SEA EN BLOQUE O GRÁNULOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10500901', 
                    'descripcion' => 'ELABORACIÓN DE OTROS PRODUCTOS LÁCTEOS: MANJAR DE LECHE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10501001', 
                    'descripcion' => 'OTROS TIPOS DE PROCESAMIENTO DE LA LECHE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10611101', 
                    'descripcion' => 'MOLIENDA DE CEREALES, PRODUCCIÓN DE HARINA DE: TRIGO, AVENA, MAÍZ Y OTROS CEREALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10611102', 
                    'descripcion' => 'MOLIENDA DE SEMOLINA, SÉMOLA, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10611103', 
                    'descripcion' => 'PRODUCCIÓN DE SEMOLINA, SÉMOLA Y OTROS CEREALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10611104', 
                    'descripcion' => 'MOLIENDA DE CEREALES, PRODUCCIÓN DE HARINA DE CENTENO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10611201', 
                    'descripcion' => 'MOLIENDA O PILADO DE ARROZ: PRODUCCIÓN DE ARROZ DESCASCARILLADO, BLANQUEADO, PULIDO, SEMICOCIDO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10611202', 
                    'descripcion' => 'MOLIENDA O PILADO DE HARINA DE ARROZ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10611301', 
                    'descripcion' => 'MOLIENDA DE OTROS PRODUCTOS DE ORIGEN VEGETAL: PRODUCCIÓN DE HARINAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10611302', 
                    'descripcion' => 'MOLIENDA DE OTROS PRODUCTOS DE ORIGEN VEGETAL: SÉMOLAS DE LEGUMINOSAS DESECADAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10611303', 
                    'descripcion' => 'MOLIENDA DE OTROS PRODUCTOS DE ORIGEN VEGETAL: RAÍCES Y TUBÉRCULOS (EXCEPTO PATATAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10611304', 
                    'descripcion' => 'MOLIENDA DE OTROS PRODUCTOS DE ORIGEN VEGETAL: DE NUECES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10611305', 
                    'descripcion' => 'MOLIENDA DE OTROS PRODUCTOS DE ORIGEN VEGETAL: DE FRUTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10612101', 
                    'descripcion' => 'ELABORACIÓN DE ALIMENTOS A BASE DE CEREALES TOSTADOS, INSUFLADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10612102', 
                    'descripcion' => 'ELABORACIÓN DE ALIMENTOS A BASE DE CEREALES MACERADOS, HOJALDRADOS, GRANOS PULIDOS Y CEREALES PARTIDOS O TRITURADOS, CEREALES PARA EL DESAYUNO Y SNACKS A BASE DE CEREALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10612201', 
                    'descripcion' => 'ELABORACIÓN DE HARINAS PARA LA FABRICACIÓN DE PAN, PASTELES, BIZCOCHOS O PANQUEQUES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10612202', 
                    'descripcion' => 'ELABORACIÓN DE MASAS MEZCLADAS PREPARADAS PARA LA FABRICACIÓN DE PAN, PASTELES, BIZCOCHOS O PANQUEQUES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10612301', 
                    'descripcion' => 'ELABORACIÓN DE GRANOS DE CEREALES PRECOCIDOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10613001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA ELABORACIÓN DE PRODUCTOS DE MOLINERÍA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10613101', 
                    'descripcion' => 'TRATAMIENTO DE SEMILLAS CERTIFICADAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10620101', 
                    'descripcion' => 'ELABORACIÓN DE ALMIDONES A PARTIR DE ARROZ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10620102', 
                    'descripcion' => 'ELABORACIÓN DE ALMIDONES A PARTIR DE MAIZ (MAICENA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10620103', 
                    'descripcion' => 'ELABORACIÓN DE ALMIDONES A PARTIR DE PATATAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10620104', 
                    'descripcion' => 'ELABORACIÓN DE ALMIDONES A PARTIR DE YUCA, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10620105', 
                    'descripcion' => 'ELABORACIÓN DE ALMIDONES A PARTIR DE OTROS TUBÉRCULOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10620106', 
                    'descripcion' => 'ELABORACIÓN DE ALMIDONES A PARTIR DE OTRAS MATERIAS VEGETALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10620107', 
                    'descripcion' => 'ELABORACIÓN DE GLUTEN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10620108', 
                    'descripcion' => 'ELABORACIÓN DE ALMIDONES A PARTIR DE DEXTRINA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10620201', 
                    'descripcion' => 'MOLIENDA EN HÚMEDO DE MAÍZ, ELABORACIÓN DE ACEITE DE MAÍZ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10620301', 
                    'descripcion' => 'ELABORACIÓN DE GLUCOSA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10620302', 
                    'descripcion' => 'ELABORACIÓN DE JARABE DE GLUCOSA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10620303', 
                    'descripcion' => 'ELABORACIÓN DE JARABE DE MALTOSA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10620401', 
                    'descripcion' => 'ELABORACIÓN DE TAPIOCA Y SUSTITUTOS DE TAPIOCA PREPARADOS A PARTIR DE ALMIDONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10620501', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA ELABORACIÓN DE ALMIDONES Y PRODUCTOS DERIVADOS DEL ALMIDÓN A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10710101', 
                    'descripcion' => 'ELABORACIÓN DE PAN, PANECILLOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10710102', 
                    'descripcion' => 'ELABORACIÓN DE BIZCOCHOS, GALLETAS, ETCÉTERA, INCLUSO ENVASADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10710103', 
                    'descripcion' => 'ELABORACIÓN DE PAN DE TODO TIPO, TOSTADAS, ETCÉTERA, INCLUSO ENVASADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10710104', 
                    'descripcion' => 'ELABORACIÓN DE OTROS PRODUCTOS DE PANADERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10710201', 
                    'descripcion' => 'ELABORACIÓN DE PASTELES Y PASTELES DE FRUTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10710202', 
                    'descripcion' => 'ELABORACIÓN DE TORTAS, TARTAS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10710203', 
                    'descripcion' => 'ELABORACIÓN DE CHURROS, BUÑUELOS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10710204', 
                    'descripcion' => 'ELABORACIÓN DE OTROS PRODUCTOS DE PASTELERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10710205', 
                    'descripcion' => 'ELABORACIÓN DE BOCADILLOS DULCES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10710206', 
                    'descripcion' => 'ELABORACIÓN DE BOCADILLOS SALADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10710301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA ELABORACIÓN DE PRODUCTOS DE PANADERÍA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10710901', 
                    'descripcion' => 'ELABORACIÓN DE OTROS PRODUCTOS DE PANADERÍA, INCLUSO CONGELADOS: TORTILLAS DE MAÍZ O TRIGO, CONOS DE HELADO, OBLEAS, WAFFLES, PANQUEQUES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10710902', 
                    'descripcion' => 'ELABORACIÓN DE PIZZA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10710903', 
                    'descripcion' => 'ELABORACIÓN DE MASA DE HOJALDRE Y SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10710904', 
                    'descripcion' => 'ELABORACIÓN DE PRODUCTOS DE REPOSTERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10720101', 
                    'descripcion' => 'MOLIENDA Y EXTRACCIÓN DE JUGO DE CAÑA (TRAPICHE)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10720102', 
                    'descripcion' => 'PRODUCCIÓN DE PANELA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10720201', 
                    'descripcion' => 'ELABORACIÓN DE AZÚCAR DE CAÑA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10720202', 
                    'descripcion' => 'ELABORACIÓN Y REFINADO DE AZÚCAR DE REMOLACHA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10720203', 
                    'descripcion' => 'ELABORACIÓN DE AZÚCAR DE CAÑA REFINADA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10720204', 
                    'descripcion' => 'ELABORACIÓN Y REFINADO DE REMOLACHA AZUCARERA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10720205', 
                    'descripcion' => 'ELABORACIÓN DE MELAZA DE CAÑA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10720206', 
                    'descripcion' => 'ELABORACIÓN DE MELAZA DE REMOLACHA AZUCARERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10720207', 
                    'descripcion' => 'ELABORACIÓN DE MELAZA DE MAÍZ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10720208', 
                    'descripcion' => 'ELABORACIÓN DE AZÚCAR EN POLVO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10720209', 
                    'descripcion' => 'ELABORACIÓN DE OTROS TIPOS DE AZÚCAR Y PRODUCTOS DERIVADOS DEL AZÚCAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10720301', 
                    'descripcion' => 'ELABORACIÓN DE JARABE DE: CAÑA DE AZÚCAR, PALMA, REMOLACHA AZUCARERA, STEVIA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10720401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA ELABORACIÓN DE AZÚCAR A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10731101', 
                    'descripcion' => 'ELABORACIÓN DE CACAO SIN DESGRASAR, LICOR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10731102', 
                    'descripcion' => 'ELABORACIÓN DE CACAO DESGRASADO, TORTA DE CACAO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10731103', 
                    'descripcion' => 'ELABORACIÓN DE CACAO EN POLVO O EN BLOQUES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10731104', 
                    'descripcion' => 'ELABORACIÓN DE MANTECA DE CACAO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10731105', 
                    'descripcion' => 'ELABORACIÓN DE GRASA Y ACEITE DE CACAO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10731106', 
                    'descripcion' => 'ELABORACIÓN DE OTROS PRODUCTOS DE CACAO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10731201', 
                    'descripcion' => 'ELABORACIÓN DE CHOCOLATE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10731202', 
                    'descripcion' => 'ELABORACIÓN DE PRODUCTOS DE CHOCOLATE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10732101', 
                    'descripcion' => 'ELABORACIÓN DE PRODUCTOS DE CONFITERÍA: CARAMELOS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10732102', 
                    'descripcion' => 'ELABORACIÓN DE PRODUCTOS DE CONFITERÍA A BASE DE CHOCOLATE, CHOCOLATE BLANCO, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10732103', 
                    'descripcion' => 'ELABORACIÓN DE GOMA DE MASCAR, CHICLES, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10732104', 
                    'descripcion' => 'ELABORACIÓN DE PRODUCTOS DE CONFITERÍA: GRAGEAS Y PASTILLAS DE CONFITERÍA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10732105', 
                    'descripcion' => 'ELABORACIÓN DE TURRÓN, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10732106', 
                    'descripcion' => 'ELABORACIÓN DE CONFITES BLANDOS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10732201', 
                    'descripcion' => 'CONSERVACIÓN EN AZÚCAR DE FRUTAS Y FRUTOS SECOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10732202', 
                    'descripcion' => 'CONSERVACIÓN EN AZÚCAR DE NUECES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10732203', 
                    'descripcion' => 'CONSERVACIÓN EN AZÚCAR DE CÁSCARA DE FRUTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10732204', 
                    'descripcion' => 'CONSERVACIÓN EN AZÚCAR DE OTRAS PARTES DE LAS PLANTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10732901', 
                    'descripcion' => 'ELABORACIÓN DE OTROS DULCES: MELCOCHAS, COCADAS, NOGADAS, DULCE DE GUAYABA, ALFEÑIQUES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10733001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA ELABORACIÓN DE CACAO, CHOCOLATE Y PRODUCTOS DE CONFITERÍA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10740101', 
                    'descripcion' => 'ELABORACIÓN DE PASTAS: TALLARÍN, ESPAGUETIS, MACARRONES, FIDEOS, SEAN O NO COCIDOS, SIN RELLENO, O CONGELADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10740102', 
                    'descripcion' => 'ELABORACIÓN DE PASTAS: LASAÑAS, CANELONES, RAVIOLES SEAN O NO COCIDOS, RELLENOS O CONGELADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10740103', 
                    'descripcion' => 'ELABORACIÓN DE ALCUZCUZ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10740201', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA ELABORACIÓN DE MACARRONES, FIDEOS, ALCUZCUZ Y PRODUCTOS FARINÁCEOS SIMILARES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10750101', 
                    'descripcion' => 'ELABORACIÓN DE PLATOS A BASE DE CARNE O DE POLLO, ESTOFADOS Y COMIDAS PREPARADOS AL VACIO, CONGELADAS, ENVASADAS, ENLATADAS O CONSERVADAS DE OTRA MANERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10750201', 
                    'descripcion' => 'ELABORACIÓN DE PLATOS DE PESCADO Y MARISCOS, INCLUYENDO PESCADO CON PAPAS FRITAS, ENVASADO O CONGELADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10750301', 
                    'descripcion' => 'ELABORACIÓN DE PLATOS PREPARADOS A BASE DE LEGUMBRES Y HORTALIZAS, CONGELADAS, ENVASADAS, ENLATADAS O CONSERVADAS DE OTRA MANERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10750401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA ELABORACIÓN DE COMIDAS Y PLATOS PREPARADOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10750901', 
                    'descripcion' => 'ELABORACIÓN DE OTRAS COMIDAS PREPARADAS: CONGELADAS, ENVASADAS, ENLATADAS O CONSERVADAS DE OTRA MANERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10791101', 
                    'descripcion' => 'ACTIVIDADES DE EXTRACTOS Y CONCENTRADOS DE CAFÉ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10791102', 
                    'descripcion' => 'ACTIVIDADES DE DESCASCARILLADO DE CAFÉ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10791103', 
                    'descripcion' => 'ACTIVIDADES DE TOSTADO DE CAFÉ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10791104', 
                    'descripcion' => 'ACTIVIDADES DE MOLIDO DE CAFÉ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10791105', 
                    'descripcion' => 'ACTIVIDADES DE DESCAFEINADO DE CAFÉ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10791106', 
                    'descripcion' => 'ACTIVIDADES DE ENVASADO DE CAFÉ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10791201', 
                    'descripcion' => 'ELABORACIÓN DE SUCEDÁNEOS (SUSTITUTOS) DEL CAFÉ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10791202', 
                    'descripcion' => 'ELABORACIÓN DE PASTAS, EXTRACTOS Y CONCENTRADOS DEL CAFÉ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10791301', 
                    'descripcion' => 'ELABORACIÓN DE EXTRACTOS Y PREPARADOS A BASE DE TÉ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10791302', 
                    'descripcion' => 'ELABORACIÓN DE TÉ EMPACADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10791303', 
                    'descripcion' => 'ELABORACIÓN DE EXTRACTOS Y PREPARADOS A BASE DE MATE; MEZCLA DE TÉ Y MATE, INFUSIONES DE HIERBAS (MENTA, MANZANILLA, VERBENA, ETCÉTERA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10792101', 
                    'descripcion' => 'ELABORACIÓN DE ALIMENTOS ESPECIALES, LECHE MATERNIZADA, LECHE Y OTROS ALIMENTOS COMPLEMENTARIOS PARA EL CRECIMIENTO, ALIMENTOS QUE CONTIENEN INGREDIENTES HOMOGENEIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10792102', 
                    'descripcion' => 'ELABORACIÓN DE ALIMENTOS ESPECIALES, LECHE MATERNIZADA, LECHE Y OTROS ALIMENTOS COMPLEMENTARIOS PARA DEPORTISTAS, ALIMENTOS QUE CONTIENEN INGREDIENTES HOMOGENEIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10792103', 
                    'descripcion' => 'ELABORACIÓN DE ALIMENTOS ESPECIALES PARA INFANTES, LECHE MATERNIZADA, LECHE Y OTROS ALIMENTOS COMPLEMENTARIOS, ALIMENTOS QUE CONTIENEN INGREDIENTES HOMOGENEIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10792104', 
                    'descripcion' => 'ELABORACIÓN DE ALIMENTOS ESPECIALES, LECHE MATERNIZADA, LECHE Y OTROS ALIMENTOS COMPLEMENTARIOS, ALIMENTOS QUE CONTIENEN INGREDIENTES HOMOGENEIZADOS PARA FINES MÉDICOS ESPECIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10792105', 
                    'descripcion' => 'ELABORACIÓN DE LECHES A BASE DE HARINAS, ALMIDÓN (FÉCULAS) O EXTRACTOS DE MALTA PARA BEBÉS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10792106', 
                    'descripcion' => 'ELABORACIÓN DE DERIVADOS DE LECHE A BASE DE HARINAS, ALMIDÓN (FÉCULAS) O EXTRACTOS DE MALTA PARA BEBÉS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10792201', 
                    'descripcion' => 'ELABORACIÓN DE SUSTITUTOS NO LÁCTEOS DE LECHE Y QUESOS NO LÁCTEOS (LECHE DE SOYA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10792901', 
                    'descripcion' => 'ELABORACIÓN DE OTROS ALIMENTOS ESPECIALES: CONCENTRADOS DE PROTEÍNAS; ALIMENTOS PREPARADOS CON FINES DIETÉTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10792902', 
                    'descripcion' => 'ELABORACIÓN DE OTROS ALIMENTOS ESPECIALES: ALIMENTOS SIN GLUTEN, ALIMENTOS PARA COMBATIR EL DESGASTE CAUSADO POR EL ESFUERZO MUSCULAR, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10793101', 
                    'descripcion' => 'PROCESAMIENTO DE ESPECIAS Y CONDIMENTOS: LAUREL, TOMILLO, ALBAHACA, CILANTRO, COMINO, CANELA, PIMIENTA, NUEZ MOSCADA, JENGIBRE, SAL DE AJO, DE APIO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10793201', 
                    'descripcion' => 'ELABORACIÓN DE SALSAS LÍQUIDAS O EN POLVO: MAYONESA, HARINA Y SÉMOLA DE MOSTAZA, MOSTAZA PREPARADA, SALSAS DE: TOMATE, AJÍ, SOYA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10793301', 
                    'descripcion' => 'ELABORACIÓN DE VINAGRE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10793401', 
                    'descripcion' => 'PROCESAMIENTO DE SAL DE MESA; POR EJEMPLO: SAL YODADA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10793501', 
                    'descripcion' => 'ELABORACIÓN DE SALSA DE CHAMPIÑONES, BOLOÑESA, SAL DE AJO, DE APIO, CEBOLLA, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10793502', 
                    'descripcion' => 'ELABORACIÓN DE OTRAS ESPECIAS, SALSAS O CONDIMENTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10794001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA ELABORACIÓN DE OTROS PRODUCTOS ALIMENTICIOS N.C.P A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10799101', 
                    'descripcion' => 'ELABORACIÓN DE LEVADURA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10799102', 
                    'descripcion' => 'ELABORACIÓN DE POLVOS DE HORNEAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10799201', 
                    'descripcion' => 'ELABORACIÓN DE SOPAS Y CALDOS DE DIVERSOS INGREDIENTES, LÍQUIDOS, POLVO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10799202', 
                    'descripcion' => 'ELABORACIÓN DE SOPAS Y CALDOS DE DIVERSOS INGREDIENTES EN TABLETAS,SÓLIDOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10799301', 
                    'descripcion' => 'ELABORACIÓN DE EXTRACTOS Y JUGOS DE CARNE, PESCADO, CRUSTÁCEOS O MOLUSCOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10799401', 
                    'descripcion' => 'ELABORACIÓN DE CONCENTRADOS ARTIFICIALES; POLVOS SOLUBLES PARA LA PREPARACIÓN DE POSTRES, TORTAS, FLANES, BUDINES, GELATINAS, REFRESCOS EN POLVO SIN DILUIR, EDULCORANTES, SABORIZANTES, ESPESANTES, COLORANTES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10799901', 
                    'descripcion' => 'ELABORACIÓN DE OTROS PRODUCTOS ALIMENTICIOS: ELABORACIÓN DE MIEL ARTIFICIAL, PRODUCTOS DE HUEVO, CLARAS DE HUEVO, OVOALBÚMINA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10799902', 
                    'descripcion' => 'ELABORACIÓN DE OTROS PRODUCTOS ALIMENTICIOS NO CLASIFICADOS EN OTRA PARTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10800101', 
                    'descripcion' => 'ELABORACIÓN DE ALIMENTOS PREPARADOS PARA ANIMALES DOMÉSTICOS COMO: PERROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10800102', 
                    'descripcion' => 'ELABORACIÓN DE ALIMENTOS PREPARADOS PARA ANIMALES DOMÉSTICOS COMO: GATOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10800103', 
                    'descripcion' => 'ELABORACIÓN DE ALIMENTOS PREPARADOS PARA ANIMALES DOMÉSTICOS COMO: PÁJAROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10800104', 
                    'descripcion' => 'ELABORACIÓN DE ALIMENTOS PREPARADOS PARA ANIMALES DOMÉSTICOS COMO: PECES, ETCÉTERA; INCLUIDOS LOS OBTENIDOS DEL TRATAMIENTO DE DESPERDICIOS DE MATADEROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10800201', 
                    'descripcion' => 'FABRICACIÓN DE ALIMENTOS PREPARADOS PARA ANIMALES DE GRANJA (AVES, GANADO VACUNO, PORCINO, ETCÉTERA), INCLUIDOS ALIMENTOS CONCENTRADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10800202', 
                    'descripcion' => 'FABRICACIÓN DE ALIMENTOS PREPARADOS PARA ANIMALES ACUÁTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10800203', 
                    'descripcion' => 'FABRICACIÓN DE ALIMENTOS SIN MEZCLAR (ELABORADOS A PARTIR DE UN ÚNICO PRODUCTO) Y LOS OBTENIDOS DEL TRATAMIENTO DE DESPERDICIOS DE MATADEROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10800204', 
                    'descripcion' => 'FABRICACIÓN DE ALIMENTOS PREPARADOS PARA ANIMALES,  SUPLEMENTOS ALIMENTICIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C10800301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA ELABORACIÓN DE ALIMENTOS PREPARADOS PARA ANIMALES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11010101', 
                    'descripcion' => 'ELABORACIÓN DE BEBIDAS ALCOHÓLICAS DESTILADAS: WHISKY, COÑAC, BRANDY, GINEBRA, AGUARDIENTE DE CAÑA DE AZÚCAR, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11010201', 
                    'descripcion' => 'ELABORACIÓN DE MEZCLA DE BEBIDAS ALCOHÓLICAS DESTILADAS Y PREPARADOS ALCOHÓLICOS COMPUESTOS: CREMAS Y OTRAS BEBIDAS ALCOHÓLICAS AROMATIZADAS Y AZUCARADAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11010301', 
                    'descripcion' => 'PRODUCCIÓN DE AGUARDIENTES NEUTROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11010302', 
                    'descripcion' => 'PRODUCCIÓN DE ALCOHOLES BASE PARA ELABORAR BEBIDAS ALCOHÓLICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11010401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA DESTILACIÓN, RECTIFICACIÓN Y MEZCLA DE BEBIDAS ALCOHÓLICAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11010501', 
                    'descripcion' => 'ELABORACIÓN DE HIELO Y NIEVE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11020101', 
                    'descripcion' => 'ELABORACIÓN DE VINOS, VINOS ESPUMOSOS (CHAMPAGNE)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11020102', 
                    'descripcion' => 'ELABORACIÓN DE VINO A PARTIR DE MOSTO DE UVA CONCENTRADO (VINO TINTO, JEREZ, OPORTO, ETCÉTERA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11020201', 
                    'descripcion' => 'ELABORACIÓN DE BEBIDAS ALCOHÓLICAS FERMENTADAS PERO NO DESTILADAS: SAKE, SIDRA, PERADA, VERMOUTH, AGUAMIEL Y OTROS VINOS DE FRUTAS Y MEZCLAS DE BEBIDAS QUE CONTIENEN ALCOHOL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11020301', 
                    'descripcion' => 'ELABORACION DE VINOS DE BAJA GRADUACION Y MEZCLAS DE VINOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11020302', 
                    'descripcion' => 'ELABORACION DE VINOS SIN ALCOHOL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11020401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA ELABORACIÓN DE VINOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11030101', 
                    'descripcion' => 'ELABORACION DE BEBIDAS MALTEADAS COMO CERVEZAS CORRIENTES DE FERMENTACION ALTA NEGRAS Y FUERTES INCLUIDA CERVEZA DE BAJA GRADUACION CERVEZA ARTESANAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11030102', 
                    'descripcion' => 'ELABORACION DE BEBIDAS MALTEADAS SIN ALCOHOL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11030103', 
                    'descripcion' => 'ELABORACION DE BEBIDAS MALTEADAS COMO CERVEZAS CORRIENTES DE FERMENTACION ALTA NEGRAS Y FUERTES INCLUIDA CERVEZA DE BAJA GRADUACION CERVEZA INDUSTRIAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11030201', 
                    'descripcion' => 'ELABORACIÓN DE MALTA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11030301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA ELABORACIÓN DE BEBIDAS MALTEADAS Y DE MALTA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11040101', 
                    'descripcion' => 'ELABORACIÓN DE BEBIDAS NO ALCOHÓLICAS EMBOTELLADAS (EXCEPTO CERVEZA Y VINO SIN ALCOHOL): BEBIDAS A BASE DE LECHE Y CACAO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11040102', 
                    'descripcion' => 'ELABORACIÓN DE BEBIDAS NO ALCOHÓLICAS EMBOTELLADAS (EXCEPTO CERVEZA Y VINO SIN ALCOHOL): LIMONADAS, NARANJADAS, BEBIDAS ARTIFICIALES DE JUGOS DE FRUTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11040103', 
                    'descripcion' => 'ELABORACIÓN DE BEBIDAS NO ALCOHÓLICAS EMBOTELLADAS: JARABES DE FRUTAS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11040104', 
                    'descripcion' => 'ELABORACIÓN DE BEBIDAS NO ALCOHÓLICAS EMBOTELLADAS (EXCEPTO CERVEZA Y VINO SIN ALCOHOL): BEBIDAS GASEOSAS (COLAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11040105', 
                    'descripcion' => 'ELABORACIÓN DE BEBIDAS NO ALCOHÓLICAS EMBOTELLADAS (EXCEPTO CERVEZA Y VINO SIN ALCOHOL): BEBIDAS AROMATIZADAS Y/O EDULCORADAS, AGUAS TÓNICAS, GELATINA COMESTIBLE, BEBIDAS HIDRATANTES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11040201', 
                    'descripcion' => 'PRODUCCIÓN DE AGUAS MINERALES NATURALES Y OTRAS AGUAS EMBOTELLADAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11040301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA ELABORACIÓN DE BEBIDAS NO ALCOHÓLICAS; PRODUCCIÓN DE AGUAS MINERALES Y OTRAS AGUAS EMBOTELLADAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C11040401', 
                    'descripcion' => 'ELABORACIÓN DE CONCENTRADOS PARA BEBIDAS GASEOSAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C12000101', 
                    'descripcion' => 'ELABORACIÓN DE PRODUCTOS DE TABACO Y SUSTITUTOS DE PRODUCTOS DE TABACO: CIGARRILLOS, PICADURA PARA CIGARRILLOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C12000102', 
                    'descripcion' => 'ELABORACIÓN DE PRODUCTOS DE TABACO Y SUSTITUTOS DE PRODUCTOS DE TABACO: CIGARRILLOS (PUROS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C12000103', 
                    'descripcion' => 'ELABORACIÓN DE PRODUCTOS DE TABACO Y SUSTITUTOS DE PRODUCTOS DE TABACO: TABACO DE PIPA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C12000104', 
                    'descripcion' => 'ELABORACIÓN DE PRODUCTOS DE TABACO Y SUSTITUTOS DE PRODUCTOS DE TABACO: TABACO DE MASCAR, RAPE, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C12000105', 
                    'descripcion' => 'ELABORACIÓN DE PRODUCTOS DE TABACO Y SUSTITUTOS DE PRODUCTOS DE TABACO: TABACO HOMOGENEIZADO O RECONSTITUIDO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C12000201', 
                    'descripcion' => 'DESNERVADO Y SECADO DE LAS HOJAS DE TABACO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C12000301', 
                    'descripcion' => 'ELABORACIÓN DE EXTRACTOS Y ESENCIAS DE TABACO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C12000401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA ELABORACIÓN DE PRODUCTOS DE TABACO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13110101', 
                    'descripcion' => 'ACTIVIDADES DE OPERACIONES PREPARATORIAS DE FIBRAS TEXTILES: DEVANADO DE SEDA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13110102', 
                    'descripcion' => 'ACTIVIDADES DE OPERACIONES PREPARATORIAS DE FIBRAS TEXTILES: LAVADO DE SEDA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13110103', 
                    'descripcion' => 'ACTIVIDADES DE OPERACIONES PREPARATORIAS DE FIBRAS TEXTILES: DESENGRASE DE TODA CLASE DE FIBRAS ANIMALES, VEGETALES, ARTIFICIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13110104', 
                    'descripcion' => 'ACTIVIDADES DE OPERACIONES PREPARATORIAS DE FIBRAS TEXTILES: CARBONIZACIÓN Y TEÑIDO TODA CLASE DE FIBRAS ANIMALES, VEGETALES, ARTIFICIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13110105', 
                    'descripcion' => 'ACTIVIDADES DE OPERACIONES PREPARATORIAS DE FIBRAS TEXTILES: CARDADO Y PEINADO DE LANA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13110106', 
                    'descripcion' => 'ACTIVIDADES DE OPERACIONES PREPARATORIAS DE FIBRAS TEXTILES: CARDADO Y PEINADO DE FIBRAS DE ALGODÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13110107', 
                    'descripcion' => 'ACTIVIDADES DE OPERACIONES PREPARATORIAS DE FIBRAS TEXTILES: CARDADO Y PEINADO DE FIBRAS DE LINO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13110108', 
                    'descripcion' => 'ACTIVIDADES DE OPERACIONES PREPARATORIAS DE FIBRAS TEXTILES: CARDADO Y PEINADO DE YUTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13110109', 
                    'descripcion' => 'ACTIVIDADES DE OPERACIONES PREPARATORIAS DE FIBRAS TEXTILES: CARDADO Y PEINADO DE CÁÑAMO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13110110', 
                    'descripcion' => 'ACTIVIDADES DE OPERACIONES PREPARATORIAS DE FIBRAS TEXTILES: CARDADO Y PEINADO DE OTRAS FIBRAS VEGETALES O ANIMALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13110111', 
                    'descripcion' => 'ACTIVIDADES DE OPERACIONES PREPARATORIAS DE FIBRAS TEXTILES ARTIFICIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13110112', 
                    'descripcion' => 'ACTIVIDADES DE OPERACIONES PREPARATORIAS DE FIBRAS TEXTILES SINTÉTICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13110201', 
                    'descripcion' => 'HILATURA Y FABRICACIÓN DE HILADOS E HILOS PARA TEJEDURÍA O COSTURA, PARA EL COMERCIO O PARA PROCESAMIENTO POSTERIOR, TEXTURIZACIÓN, RETORCIDO, PLEGADO, CABLEADO Y REMOJO DE HILATURAS FILAMENTOSAS DE ALGODÓN, LANA, SINTÉTICAS O ARTIFICIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13110202', 
                    'descripcion' => 'HILATURA Y FABRICACIÓN DE HILADOS E HILOS PARA TEJEDURÍA O COSTURA, PARA EL COMERCIO O PARA PROCESAMIENTO POSTERIOR, TEXTURIZACIÓN, RETORCIDO, PLEGADO, CABLEADO Y REMOJO DE HILATURAS FILAMENTOSAS DE PELOS FINOS DE ANIMALES O LINO, SINTÉTICAS O ARTIFICIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13110203', 
                    'descripcion' => 'HILATURA Y FABRICACIÓN DE HILADOS E HILOS PARA TEJEDURÍA O COSTURA, PARA EL COMERCIO O PARA PROCESAMIENTO POSTERIOR, TEXTURIZACIÓN, RETORCIDO, PLEGADO, CABLEADO Y REMOJO DE HILATURAS FILAMENTOSAS DE HILOS DE SEDA, SINTÉTICAS O ARTIFICIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13110204', 
                    'descripcion' => 'HILATURA Y FABRICACIÓN DE HILADOS E HILOS PARA TEJEDURÍA O COSTURA, PARA EL COMERCIO O PARA PROCESAMIENTO POSTERIOR, TEXTURIZACIÓN, RETORCIDO, PLEGADO, CABLEADO Y REMOJO DE HILATURAS FILAMENTOSAS DE YUTE, CÁÑAMO, COCO (BONOTE), FIBRAS DE LIBER, SINTÉTICAS O ARTIFICIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13110205', 
                    'descripcion' => 'HILATURA Y FABRICACIÓN DE HILADOS E HILOS PARA TEJEDURÍA O COSTURA, PARA EL COMERCIO O PARA PROCESAMIENTO POSTERIOR, TEXTURIZACIÓN, RETORCIDO, PLEGADO, CABLEADO Y REMOJO DE HILATURAS FILAMENTOSAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13110206', 
                    'descripcion' => 'HILATURA Y FABRICACIÓN DE HILADOS E HILOS PARA TEJEDURÍA O COSTURA, PARA EL COMERCIO O PARA PROCESAMIENTO POSTERIOR, TEXTURIZACIÓN, RETORCIDO, PLEGADO, CABLEADO Y REMOJO DE TODA CLASE DE FIBRAS ANIMALES, VEGETALES, SINTÉTICAS O ARTIFICIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13110301', 
                    'descripcion' => 'FABRICACIÓN DE HILADOS DE PAPEL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13110401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA PREPARACIÓN E HILATURA DE FIBRAS TEXTILES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13120101', 
                    'descripcion' => 'FABRICACIÓN DE TEJIDOS (TELAS) ANCHOS DE ALGODÓN, LANA O SEDA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13120102', 
                    'descripcion' => 'FABRICACIÓN DE TEJIDOS (TELAS) ANCHOS A PARTIR DE MEZCLAS O DE HILADOS SINTÉTICOS O ARTIFICIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13120103', 
                    'descripcion' => 'FABRICACIÓN DE TEJIDOS (TELAS) ANCHOS DE RAYÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13120104', 
                    'descripcion' => 'FABRICACIÓN DE TEJIDOS (TELAS) ANCHOS DE HILADOS SINTÉTICOS O ARTIFICIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13120105', 
                    'descripcion' => 'FABRICACIÓN DE TEJIDOS (TELAS) ANCHOS DE POLIÉSTER' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13120201', 
                    'descripcion' => 'FABRICACIÓN DE TEJIDOS (TELAS) ATERCIOPELADOS Y DE FELPILLA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13120202', 
                    'descripcion' => 'FABRICACIÓN DE TEJIDOS DE RIZO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13120203', 
                    'descripcion' => 'FABRICACIÓN DE TEJIDOS DE GASA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13120301', 
                    'descripcion' => 'FABRICACIÓN DE TEJIDOS (TELAS) DE FIBRA DE VIDRIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13120401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA ELABORACIÓN DE TEJIDOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13120901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS TEJIDOS (TELAS) ANCHOS DE YUTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13120902', 
                    'descripcion' => 'FABRICACIÓN DE OTROS TEJIDOS (TELAS) ANCHOS DE CÁÑAMO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13120903', 
                    'descripcion' => 'FABRICACIÓN DE OTROS TEJIDOS (TELAS) ANCHOS DE LINO, RAMIO, FIBRAS BLANDAS Y DE HILADOS ESPECIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13120904', 
                    'descripcion' => 'FABRICACIÓN DE OTROS TEJIDOS QUE IMITAN LAS PIELES FINAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13120905', 
                    'descripcion' => 'FABRICACIÓN DE OTROS TEJIDOS DE HILADOS DE PAPEL, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13120906', 
                    'descripcion' => 'FABRICACIÓN DE OTROS TEJIDOS DE FIBRA DE CARBONO E HILOS ARÁMIDOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13130101', 
                    'descripcion' => 'SERVICIO DE TEÑIDO DE FIBRAS, HILADOS, TEJIDOS (TELAS) Y ARTÍCULOS TEXTILES, INCLUIDO PRENDAS DE VESTIR: PANTALONES VAQUEROS (JEANS) ETCÉTERA, REALIZADO POR TERCEROS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13130102', 
                    'descripcion' => 'SERVICIO DE BLANQUEO DE FIBRAS, HILADOS, TEJIDOS (TELAS) Y ARTÍCULOS TEXTILES, INCLUIDO PRENDAS DE VESTIR: PANTALONES VAQUEROS (JEANS) ETCÉTERA, REALIZADO POR TERCEROS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13130201', 
                    'descripcion' => 'SERVICIO DE CALANDRADO, PLISADO DE TEXTILES Y ARTÍCULOS TEXTILES, INCLUIDO PRENDAS DE VESTIR REALIZADO POR TERCEROS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13130202', 
                    'descripcion' => 'SERVICIO DE APRESTO, SECADO, VAPORIZADO, ENCOGIMIENTO,REALIZADO POR TERCEROS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13130203', 
                    'descripcion' => 'SERVICIO DE PERCHADO, REMALLADO, SANFORIZADO, MERCERIZADO REALIZADO POR TERCEROS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13130301', 
                    'descripcion' => 'SERVICIO DE IMPERMEABILIZADO, REVESTIMIENTO, CAUCHUTADO O IMPREGNACIÓN DE PRENDAS REALIZADO POR TERCEROS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13130401', 
                    'descripcion' => 'SERVICIO DE ESTAMPADO SERIGRÁFICO DE PRODUCTOS TEXTILES Y PRENDAS DE VESTIR, REALIZADO POR TERCEROS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13910101', 
                    'descripcion' => 'FABRICACIÓN DE TEJIDOS (TELAS) DE PUNTO O GANCHILLO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13910102', 
                    'descripcion' => 'FABRICACIÓN DE TEJIDOS ATERCIOPELADOS Y DE RIZO, PIELES DE IMITACIÓN DE PUNTO OBTENIDAS MEDIANTE EL TRICOTAJE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13910201', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE TEJIDOS DE PUNTO Y GANCHILLO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13920101', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS CONFECCIONADOS CON CUALQUIER TIPO DE MATERIAL TEXTIL, INCLUIDOS TEJIDOS (TELAS) DE PUNTO Y GANCHILLO: FRAZADAS, MANTAS DE VIAJE, SOBRECAMAS, COBIJAS, EDREDONES Y ARTÍCULOS DE COCINA, EDREDONES, ARTÍCULOS PARA EL BAÑO, ETCÉTERA, INCLUIDO  TEJIDOS PARA MANTAS ELÉCTRICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13920102', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS CONFECCIONADOS CON CUALQUIER TIPO DE MATERIAL TEXTIL, INCLUIDOS TEJIDOS (TELAS) DE PUNTO Y GANCHILLO: ROPA DE CAMA, SÁBANAS, MANTELERÍA, TOALLAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13920103', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS CONFECCIONADOS CON CUALQUIER TIPO DE MATERIAL TEXTIL, ARTÍCULOS ACOLCHADOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13920104', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS CONFECCIONADOS CON CUALQUIER TIPO DE MATERIAL TEXTIL, COJINES, PUFÉS, ALMOHADAS,  ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13920105', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS CONFECCIONADOS CON CUALQUIER TIPO DE MATERIAL TEXTIL, SACOS DE DORMIR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13920201', 
                    'descripcion' => 'FABRICACIÓN DE ACCESORIOS CONFECCIONADOS PARA EL HOGAR: CORTINAS, CENEFAS, VISILLOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13920301', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE LONA O ENCERADOS: ARTÍCULOS DE ACAMPADA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13920302', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE LONA O ENCERADOS: TIENDAS DE CAMPAÑA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13920303', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE LONA O ENCERADOS: TOLDOS DE PROTECCIÓN CONTRA EL SOL, CARPAS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13920304', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE LONA O ENCERADOS: VELAS PARA EMBARCACIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13920305', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE LONA O ENCERADOS: FUNDAS PARA PISTOLAS, MOCHILAS, POLAINAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13920306', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE LONA O ENCERADOS: FUNDAS PARA EMBALAR MERCADERÍAS, TEJIDOS PARA MANTAS ELÉCTRICAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13920401', 
                    'descripcion' => 'FABRICACIÓN DE TAPICES TEJIDOS A MANO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13920501', 
                    'descripcion' => 'FABRICACIÓN DE BANDERAS, BANDERINES, GALLARDETES, ESTANDARTES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13920601', 
                    'descripcion' => 'FABRICACIÓN DE FUNDAS (FORROS) O COBERTORES DE ASIENTOS PARA AUTOMÓVILES, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13920602', 
                    'descripcion' => 'FABRICACIÓN DE FUNDAS (FORROS) PARA MAQUINARIAS, MUEBLES, NEUMÁTICOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13920701', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE ARTÍCULOS CONFECCIONADOS DE MATERIALES TEXTILES, EXCEPTO PRENDAS DE VESTIR A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13920901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS CONFECCIONADOS CON TEXTILES: PAÑOS PARA DESEMPOLVAR, PAÑOS DE COCINA Y ARTÍCULOS SIMILARES, CHALECOS SALVAVIDAS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13920902', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS CONFECCIONADOS CON TEXTILES: PARACAÍDAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13930101', 
                    'descripcion' => 'FABRICACIÓN DE RECUBRIMIENTOS PARA PISOS DE MATERIALES TEXTILES: TAPICES, ALFOMBRAS, ESTERAS, RECUADROS DE MOQUETA (ALFOMBRA), DE LANA, PELOS FINOS O ALGODÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13930102', 
                    'descripcion' => 'FABRICACIÓN DE RECUBRIMIENTOS PARA PISOS DE MATERIALES TEXTILES: TAPICES, ALFOMBRAS, ESTERAS, RECUADROS DE MOQUETA (ALFOMBRA), DE YUTE, FIBRA DE COCO, SISAL O FIBRAS SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13930201', 
                    'descripcion' => 'FABRICACIÓN DE RECUBRIMIENTOS PARA PISOS DE FIELTRO PUNZONADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13930301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE TAPICES Y ALFOMBRAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13940101', 
                    'descripcion' => 'FABRICACIÓN DE CUERDAS, CORDELES, BRAMANTES E HILOS DE FIBRAS TEXTILES O DE CINTAS O SIMILARES, ESTÉN O NO IMPREGNADOS, REVESTIDOS, CUBIERTOS O FORRADOS CON CAUCHO O PLÁSTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13940102', 
                    'descripcion' => 'FABRICACIÓN DE OTRAS CUERDAS, CORDELES Y REDES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13940201', 
                    'descripcion' => 'FABRICACIÓN DE MALLAS ANUDADAS DE CUERDA, CORDEL O BRAMANTE: DEFENSAS PARA BORDOS, COJINES PARA DESCARGA,ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13940202', 
                    'descripcion' => 'FABRICACIÓN DE MALLAS ANUDADAS DE CUERDA, CORDEL O BRAMANTE: ESLINGAS, CUERDAS Y MAROMAS CON AROS METÁLICOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13940203', 
                    'descripcion' => 'FABRICACIÓN DE MALLAS ANUDADAS DE CUERDA, CORDEL O BRAMANTE: REDES DE PESCA, ETCÉTERA, INCLUIDO FABRICACIÓN DE HAMACAS, BOLSAS DE RED PARA PELOTAS, REDES PARA DEPORTES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13940301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE CUERDAS, CORDELES, BRAMANTES Y REDES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13990101', 
                    'descripcion' => 'FABRICACIÓN DE TEJIDOS (TELAS) ESTRECHOS, INCLUIDOS LOS DE URDIMBRE SIN TRAMA SUJETOS POR UNA SUSTANCIA ADHESIVA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13990102', 
                    'descripcion' => 'FABRICACIÓN DE MARBETES, INSIGNIAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13990103', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE PASAMANERÍA: CORDONES DE MATERIALES TEXTILES PARA ZAPATOS, TRENCILLAS, BORLAS, MADROÑOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13990104', 
                    'descripcion' => 'FABRICACIÓN DE TULES Y OTROS TEJIDOS (TELAS) DE MALLAS ANUDADAS, DE ENCAJE Y BORDADOS, EN PIEZAS, TIRAS O MOTIVOS DECORATIVOS, TEJIDOS (TELAS) DE RED Y DEL TIPO QUE SE UTILIZA PARA LA CONFECCIÓN DE VISILLOS TRICOTADOS EN MÁQUINAS RASCHEL O MÁQUINAS SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13990201', 
                    'descripcion' => 'FABRICACIÓN DE TEJIDOS (TELAS) IMPREGNADOS, REVESTIDOS, RECUBIERTOS O LAMINADOS CON PLÁSTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13990301', 
                    'descripcion' => 'FABRICACIÓN DE HILADOS METALIZADOS E HILADOS ENTORCHADOS; HILOS Y CUERDAS DE CAUCHO REVESTIDOS DE MATERIALES TEXTILES; HILADOS Y BANDAS TEXTILES RECUBIERTOS IMPREGNADOS, REVESTIDOS O FORRADOS CON CAUCHO O PLÁSTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13990401', 
                    'descripcion' => 'FABRICACIÓN DE TEJIDOS DE HILADOS DE GRAN RESISTENCIA PARA CUERDAS DE NEUMÁTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13990501', 
                    'descripcion' => 'FABRICACIÓN DE TEJIDOS TRATADOS O REVESTIDOS: PAPEL TELA, LIENZOS PREPARADOS PARA PINTORES, BOCACÍ Y TEJIDOS RÍGIDOS SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13990502', 
                    'descripcion' => 'FABRICACIÓN DE TEJIDOS REVESTIDOS CON GOMA O SUSTANCIAS AMILÁCEAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13990601', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS TEXTILES DIVERSOS: TEJIDOS TUBULARES PARA SU FABRICACIÓN, MANGUERAS, CORREAS TRANSPORTADORAS Y CORREAJE DE TRANSMISIÓN (ESTÉN REFORZADOS O NO CON METALES U OTROS MATERIALES), FIELTRO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13990602', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS TEXTILES DIVERSOS: MECHAS DE MATERIALES TEXTILES, CAMISAS PARA MECHEROS DE GAS INCANDESCENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13990603', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS TEXTILES DIVERSOS: TELA PARA TAMICES, TELA DE FILTRACIÓN, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13990701', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE OTROS PRODUCTOS TEXTILES N.C.P A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C13990901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS TEXTILES: ADORNOS PARA VEHÍCULOS AUTOMOTORES, CINTA-TEJIDO SENSIBLE A LA PRESIÓN, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100101', 
                    'descripcion' => 'FABRICACIÓN DE PRENDAS DE VESTIR DE CUERO O CUERO REGENERADO, DE ROPA EXTERIOR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100102', 
                    'descripcion' => 'FABRICACIÓN DE PRENDAS DE VESTIR DE CUERO O CUERO REGENERADO, DE DIARIO Y DE ETIQUETA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100103', 
                    'descripcion' => 'FABRICACIÓN DE PRENDAS DE VESTIR DE CUERO O CUERO REGENERADO, INCLUIDOS ACCESORIOS DE TRABAJO DE CUERO COMO: MANDILES PARA SOLDADORES, ROPA DE TRABAJO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100104', 
                    'descripcion' => 'FABRICACIÓN DE PRENDAS DE VESTIR DE CUERO O CUERO REGENERADO, PARA PRACTICAR DEPORTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100201', 
                    'descripcion' => 'FABRICACIÓN DE PRENDAS DE VESTIR DE TELAS TEJIDAS, DE TELAS NO TEJIDAS, ENTRE OTRAS, PARA HOMBRES, MUJERES, NIÑOS Y BEBES: PANTALONES, FALDAS, CAMISETAS, ETCÉTERA DE ROPA EXTERIOR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100202', 
                    'descripcion' => 'FABRICACIÓN DE PRENDAS DE VESTIR DE TELAS TEJIDAS, DE TELAS NO TEJIDAS, ENTRE OTRAS, PARA HOMBRES, MUJERES, NIÑOS Y BEBES: ABRIGOS, TRAJES, CONJUNTOS, CHAQUETAS, CAMISAS, ETCÉTERA DE DIARIO Y DE ETIQUETA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100203', 
                    'descripcion' => 'FABRICACIÓN DE PRENDAS DE VESTIR DE TELAS TEJIDAS, DE TELAS NO TEJIDAS, ENTRE OTRAS, PARA HOMBRES, MUJERES, NIÑOS Y BEBES: UNIFORMES, ROPA DE TRABAJO, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100204', 
                    'descripcion' => 'FABRICACIÓN DE PRENDAS DE VESTIR DE TELAS TEJIDAS, DE TELAS NO TEJIDAS, ENTRE OTRAS, PARA HOMBRES, MUJERES, NIÑOS Y BEBES: CALENTADORES, TRAJES DE BAÑO, ROPA DE ESQUÍ, ROPA PARA PRACTICAR DEPORTES, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100301', 
                    'descripcion' => 'FABRICACIÓN DE ROPA INTERIOR DE TELAS TEJIDAS, DE ENCAJE, DE PUNTO Y GANCHILLO,MUJERES Y NIÑOS: PANTIES, CALZONCILLOS, SLIPS, SUJETADORES, FAJAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100302', 
                    'descripcion' => 'FABRICACIÓN DE ROPA DE DORMIR DE TELAS TEJIDAS, DE PUNTO Y GANCHILLO, DE ENCAJE, ETCÉTERA, PARA HOMBRES, MUJERES Y NIÑOS: PIJAMAS, CAMISONES, BATAS, BLUSAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100401', 
                    'descripcion' => 'ACTIVIDADES DE CONFECCIÓN A LA MEDIDA DE PRENDAS DE VESTIR (COSTURERAS, SASTRES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100501', 
                    'descripcion' => 'FABRICACIÓN DE SOMBREROS DE CUALQUIER MATERIAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100502', 
                    'descripcion' => 'FABRICACIÓN DE GORROS Y TOCADOS DE CUALQUIER MATERIAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100503', 
                    'descripcion' => 'FABRICACIÓN DE SOMBREROS DE PAJA TOQUILLA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100601', 
                    'descripcion' => 'ACTIVIDADES ADMINISTRATIVAS DE COMPRA DE MATERIAS PRIMAS PARA LA ELABORACIÓN DE PRENDAS DE VESTIR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100602', 
                    'descripcion' => 'ACTIVIDADES ADMINISTRATIVAS DE CONTRATACIÓN CON FÁBRICAS DE CONFECCIONES DE PRENDAS DE VESTIR USANDO MATERIALES PROPIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100603', 
                    'descripcion' => 'ACTIVIDADES ADMINISTRATIVAS DE DISEÑO Y PREPARACIÓN DE MUESTRAS PARA LA FABRICACIÓN DE PRENDAS DE VESTIR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100604', 
                    'descripcion' => 'ACTIVIDADES ADMINISTRATIVAS VINCULADAS A LA FABRICACIÓN DE PRENDAS DE VESTIR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ACCESORIOS DE VESTIR: CALZADO DE MATERIALES TEXTILES SIN APLICACIÓN DE SUELAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100902', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ACCESORIOS DE VESTIR: CHALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100903', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ACCESORIOS DE VESTIR: CORBATAS, CORBATINES, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100904', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ACCESORIOS DE VESTIR: GUANTES, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100905', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ACCESORIOS DE VESTIR: CINTURONES, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100906', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ACCESORIOS DE VESTIR: INCLUIDO LA FABRICACIÓN DE PARTES DE PRODUCTOS O PRENDAS TEXTILES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14100907', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ACCESORIOS DE VESTIR: REDECILLAS PARA EL CABELLO, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14200101', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE PIEL (CON PELO NATURAL): INCLUIDO LOS CONFECCIONADOS CON PIELES ALARGADAS, PLANCHAS, CUADRADOS, TIRAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14200102', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE PIEL (CON PELO NATURAL): PRENDAS DE VESTIR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14200103', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE PIEL (CON PELO NATURAL): ACCESORIOS DE PIEL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14200201', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DIVERSOS DE PIEL (CON PELO NATURAL): ALFOMBRAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14200202', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DIVERSOS DE PIEL (CON PELO NATURAL): PUFS SIN RELLENO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14200203', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DIVERSOS DE PIEL (CON PELO NATURAL): PAÑOS PARA PULIMENTO INDUSTRIAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14200204', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DIVERSOS DE PIEL (CON PELO NATURAL): CONJUNTOS DE PELETERÍA, CUADROS, PLANCHAS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14200301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE ARTÍCULOS DE PIEL A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14200401', 
                    'descripcion' => 'FABRICACIÓN DE PIELES ARTIFICIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14200402', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS CONFECCIONADOS CON PIELES ARTIFICIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14300101', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE CONFECCIÓN DE PUNTO Y GANCHILLO: JERSEYS, SUÉTERES, CHALECOS, CAMISETAS Y ARTÍCULOS SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14300201', 
                    'descripcion' => 'FABRICACIÓN DE MEDIAS, INCLUIDOS CALCETINES, LEOTARDOS Y PANTIMEDIAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C14300301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE ARTÍCULOS DE PUNTO Y GANCHILLO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C15110101', 
                    'descripcion' => 'ACTIVIDADES DE DESCARNADURA, TUNDIDO, DEPILADO, ENGRASE, CURTIDO, BLANQUEO, TEÑIDO, ADOBO DE PIELES Y CUEROS DE PIELES FINAS Y CUEROS CON PELO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C15110201', 
                    'descripcion' => 'FABRICACIÓN DE CUEROS REGENERADOS (ARTIFICIALES), ADOBADOS, VEGETAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C15110202', 
                    'descripcion' => 'FABRICACIÓN DE CUEROS REGENERADOS (ARTIFICIALES), ADOBADOS MINERAL O QUÍMICAMENTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C15110203', 
                    'descripcion' => 'FABRICACIÓN DE CUEROS REGENERADOS (ARTIFICIALES), CHAROL Y CUEROS METALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C15110204', 
                    'descripcion' => 'FABRICACIÓN DE CUEROS REGENERADOS (ARTIFICIALES), CUEROS GAMUZADOS Y APERGAMINADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C15110205', 
                    'descripcion' => 'FABRICACIÓN DE PLANCHAS, QUE CONTENGAN CUERO O FIBRAS DE CUERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C15110206', 
                    'descripcion' => 'FABRICACIÓN DE HOJAS O TIRAS, QUE CONTENGAN CUERO O FIBRAS DE CUERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C15110301', 
                    'descripcion' => 'SERVICIOS DE APOYO AL CURTIDO Y ADOBO DE CUEROS; ADOBO Y TEÑIDO DE PIELES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C15120101', 
                    'descripcion' => 'FABRICACIÓN DE MALETAS, BOLSOS DE MANO, MOCHILAS Y ARTÍCULOS SIMILARES, DE CUERO, CUERO REGENERADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C15120102', 
                    'descripcion' => 'FABRICACIÓN DE MALETAS, BOLSOS DE MANO, MOCHILAS Y ARTÍCULOS SIMILARES, CUALQUIER OTRO MATERIAL, COMO PLÁSTICO, MATERIALES TEXTILES, FIBRAS VULCANIZADAS O CARTÓN, CUANDO SE USA LA MISMA TECNOLOGÍA QUE EN EL CASO DEL CUERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C15120201', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE TALABARTERÍA Y GUARNICIONERÍA: SILLAS DE MONTAR, ARREOS, LÁTIGOS Y FUSTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C15120301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE MALETAS, BOLSOS DE MANO Y ARTÍCULOS SIMILARES, ARTÍCULOS DE TALABARTERÍA Y GUARNICIONERÍA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C15120901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DIVERSOS DE CUERO O CUERO REGENERADO: CORREAS DE TRANSMISIÓN, CORDONES DE CUERO PARA ZAPATOS, CORREAS NO METÁLICAS PARA RELOJES (DE MATERIALES TEXTILES, CUERO Y PLÁSTICO), ARTÍCULOS DE ENVASE O EMBALAJE, ARTÍCULOS USADOS CON FINES TÉCNICOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C15200101', 
                    'descripcion' => 'FABRICACIÓN DE CALZADO DE CUERO Y MEDIANTE CUALQUIER PROCESO, INCLUIDO EL MOLDEADO (APARADO DE CALZADO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C15200102', 
                    'descripcion' => 'FABRICACIÓN DE CALZADO DE CAUCHO Y PLÁSTICO Y MEDIANTE CUALQUIER PROCESO, INCLUIDO EL MOLDEADO (APARADO DE CALZADO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C15200103', 
                    'descripcion' => 'FABRICACIÓN DE BOTINES, POLAINAS Y ARTÍCULOS SIMILARES DE CUALQUIER MATERIAL Y MEDIANTE CUALQUIER PROCESO, INCLUIDO EL MOLDEADO (APARADO DE CALZADO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C15200104', 
                    'descripcion' => 'FABRICACIÓN DE OTROS TIPOS DE CALZADO DE CUALQUIER MATERIAL Y MEDIANTE CUALQUIER PROCESO, INCLUIDO EL MOLDEADO (APARADO DE CALZADO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C15200201', 
                    'descripcion' => 'FABRICACIÓN DE PARTES DE CUERO PARA CALZADO: PALAS Y PARTES DE PALAS, SUELAS Y PLANTILLAS, TACONES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C15200301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE CALZADO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16100101', 
                    'descripcion' => 'ACTIVIDADES DE SECADO, ASERRADO (MADERA EN BRUTO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16100102', 
                    'descripcion' => 'ACTIVIDADES DE ACEPILLADURA Y MAQUINADO DE MADERA (MADERA PREPARADA O TRATADA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16100103', 
                    'descripcion' => 'ACTIVIDADES DE TABLEADO, DESCORTEZADO Y DESMENUZAMIENTO DE TRONCOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16100104', 
                    'descripcion' => 'ACTIVIDADES DE OBTENCIÓN DE LANA DE MADERA, HARINA DE MADERA Y PARTÍCULAS DE MADERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16100105', 
                    'descripcion' => 'ACTIVIDADES DE IMPREGNACIÓN Y TRATAMIENTO QUÍMICO DE LA MADERA CON AGENTES CONSERVANTES Y OTRAS SUSTANCIAS (MADERA PREPARADA O TRATADA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16100201', 
                    'descripcion' => 'FABRICACIÓN DE TABLETAS PARA LA ENSAMBLADURA DE PISOS DE MADERA (DUELA, MEDIA DUELA, PARQUET)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16100301', 
                    'descripcion' => 'SERVICIOS DE APOYO AL ASERRADO Y ACEPILLADURA DE MADERA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16100901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS TIPOS DE MADERA EN BRUTO: RODRIGONES, ESTACAS, TABLILLAS, TRAVIESAS DE MADERA (DURMIENTES) PARA VÍAS FÉRREAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16210101', 
                    'descripcion' => 'FABRICACIÓN DE HOJAS DE MADERA (ALISADAS, TEÑIDAS, BAÑADAS, IMPREGNADAS, REFORZADAS CON PAPEL O TELA, CORTADAS EN FIGURAS) PARA ENCHAPADO SUFICIENTEMENTE DELGADAS PARA PRODUCIR MADERA ENCHAPADA Y HOJAS DE MADERA LAMINADA, MADERA COMPACTADA, MADERA LAMINADA ENCOLADA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16210102', 
                    'descripcion' => 'FABRICACIÓN DE MADERA (ALISADAS, TEÑIDAS, BAÑADAS, IMPREGNADAS, REFORZADAS CON PAPEL O TELA, CORTADAS EN FIGURAS) PARA ENCHAPADO SUFICIENTEMENTE DELGADAS PARA PRODUCIR MADERA ENCHAPADA, COMPACTADA, LAMINADA ENCOLADA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16210103', 
                    'descripcion' => 'FABRICACIÓN DE MADERA COMPACTADA, MADERA LAMINADA ENCOLADA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16210104', 
                    'descripcion' => 'FABRICACIÓN DE TABLEROS CONTRACHAPADOS, TABLEROS DE MADERA ENCHAPADA Y OTROS TABLEROS, TABLEROS DE FIBRA Y TABLEROS DE PARTÍCULAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16210201', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE HOJAS DE MADERA PARA ENCHAPADO Y TABLEROS A BASE DE MADERA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16220101', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS DE MADERA UTILIZADOS PRINCIPALMENTE POR LA INDUSTRIA DE LA CONSTRUCCIÓN: VIGAS, CABRÍOS, JABALCONES, PUNTALES, ARMAZONES DE MADERA LAMINADA ENCOLADA Y ARMAZONES DE MADERA PREFABRICADOS CON UNIONES DE METAL, ANDAMIOS, POSTES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16220201', 
                    'descripcion' => 'FABRICACIÓN DE PUERTAS, VENTANAS, CONTRAVENTANAS Y SUS MARCOS, TENGAN O NO HERRAJES, COMO BISAGRAS, CERRADURAS, ESCALERAS, BARANDALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16220202', 
                    'descripcion' => 'FABRICACIÓN DE BOCELES Y MOLDURAS; RIPIAS, DUELAS DE MADERA, BLOQUES, LISTONES, ETCÉTERA, ENSAMBLADOS EN TABLEROS PARA PISOS DE PARQUÉT; TABIQUES (MAMPARAS) DE MADERA (EXCEPTO LOS AUTOESTABLES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16220301', 
                    'descripcion' => 'FABRICACIÓN DE CASAS MÓVILES, EDIFICIOS PREFABRICADOS Y COMPONENTES DE LOS MISMOS, PREDOMINANTEMENTE DE MADERA, POR EJEMPLO SAUNAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16220401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE PARTES Y PIEZAS DE CARPINTERÍA PARA EDIFICIOS Y CONSTRUCCIONES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16230101', 
                    'descripcion' => 'FABRICACIÓN DE TONELES, BARRICAS, CUBAS, TINAS  Y OTROS PRODUCTOS DE TONELERÍA DE MADERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16230102', 
                    'descripcion' => 'FABRICACIÓN DE CAJAS, CAJONES, BARRILES Y ENVASES SIMILARES, TONELES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16230103', 
                    'descripcion' => 'FABRICACIÓN DE OTROS RECIPIENTES DE MADERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16230201', 
                    'descripcion' => 'FABRICACIÓN DE PALETAS, PALETAS-CAJA Y OTRAS BANDEJAS DE MADERA PARA OPERACIONES DE CARGA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16230301', 
                    'descripcion' => 'FABRICACIÓN DE CARRETES DE MADERA PARA CABLES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16230401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE RECIPIENTES DE MADERA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16291101', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS DE MADERA: MANGOS Y MONTURAS DE HERRAMIENTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16291102', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS DE MADERA: CEPILLOS Y ESCOBAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16291201', 
                    'descripcion' => 'FABRICACIÓN DE PARTES DE MADERA PARA BOTAS O ZAPATOS (TACONES), HORMAS Y TENSORES PARA BOTAS O ZAPATOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16291301', 
                    'descripcion' => 'FABRICACIÓN DE UTENSILIOS DE COCINA Y PARA USO DOMÉSTICO DE MADERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16291401', 
                    'descripcion' => 'FABRICACIÓN DE ESTATUILLAS Y ORNAMENTOS DE MADERA Y ARTÍCULOS DE MARQUETERÍA Y TARACEA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16291501', 
                    'descripcion' => 'FABRICACIÓN DE MARCOS DE MADERA PARA ESPEJOS Y CUADROS, FABRICACIÓN DE BASTIDORES DE MADERA PARA LIENZOS DE PINTOR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16291601', 
                    'descripcion' => 'FABRICACIÓN DE CAJAS DE MADERA PARA JOYAS, CUCHILLOS Y ARTÍCULOS SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16291701', 
                    'descripcion' => 'FABRICACIÓN DE CARRETES, TAPAS, CANILLAS DE BOBINAS, CARRETES PARA HILOS DE COSER Y ARTÍCULOS SIMILARES DE MADERA TORNEADA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16291801', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE MADERA PARA MOBLAJE DEL TIPO APLIQUE COMO: PERCHEROS PARA ROPA Y SOMBREROS, PERO NO MUEBLES EN PIE, PERCHAS DE MADERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16291901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DE MADERA: MANGOS (EMPUÑADURAS) PARA PARAGUAS, BASTONES Y SIMILARES, BLOQUES DE MADERA PARA LA ELABORACIÓN DE PIPAS; PALILLOS, PALETAS PARA HELADOS, PINCHOS, BAJA LENGUAS, ETCÉTERA, TRONCOS DE CHIMENEA HECHOS DE MADERA PRENSADA O DE OTROS MATERIALES PRENSADOS, COMO MOLEDURAS DE CAFÉ O DE HABAS DE SOYA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16292101', 
                    'descripcion' => 'FABRICACIÓN Y PROCESAMIENTO DE CORCHO NATURAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16292102', 
                    'descripcion' => 'FABRICACIÓN Y PROCESAMIENTO DE CORCHO AGLOMERADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16292201', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE CORCHO NATURAL O CORCHO AGLOMERADO, INCLUIDOS CUBRIMIENTOS PARA PISOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16292301', 
                    'descripcion' => 'FABRICACIÓN DE CESTOS Y ARTÍCULOS DE MIMBRE, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16292302', 
                    'descripcion' => 'FABRICACIÓN DE ESTERAS, ESTERILLAS, PERSIANAS, CAJAS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16292303', 
                    'descripcion' => 'FABRICACIÓN DE TRENZAS Y ARTÍCULOS SIMILARES DE MATERIALES TRENZABLES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C16293001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE OTROS PRODUCTOS DE MADERA; FABRICACIÓN DE ARTÍCULOS DE CORCHO, PAJA Y MATERIALES TRENZABLES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17010101', 
                    'descripcion' => 'FABRICACIÓN DE PASTA DE MADERA BLANQUEADA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17010102', 
                    'descripcion' => 'FABRICACIÓN DE PASTA DE MADERA BLANQUEADA, SEMIBLANQUEADA O SIN BLANQUEAR MEDIANTE PROCESOS QUÍMICOS (CON O SIN DISOLUCIÓN) O SEMIQUÍMICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17010103', 
                    'descripcion' => 'FABRICACIÓN DE PASTA DE MADERA BLANQUEADA, SEMIBLANQUEADA O SIN BLANQUEAR MEDIANTE PROCESOS MECÁNICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17010201', 
                    'descripcion' => 'FABRICACIÓN DE PASTA DE PAPEL A PARTIR DE LA ELIMINACIÓN DE LA TINTA Y FABRICACIÓN DE PASTA DE DESECHOS DE PAPEL PAPELES USADOS; O A PARTIR DE RESIDUOS TEXTILES, COMO BORRAS DE ALGODÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17010301', 
                    'descripcion' => 'FABRICACIÓN DE PAPEL Y CARTÓN SIN REVESTIR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17010302', 
                    'descripcion' => 'FABRICACIÓN DE PAPEL Y CARTÓN MULTILAMINAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17010303', 
                    'descripcion' => 'FABRICACIÓN DE PAPEL SEMIQUÍMICO SIN REVESTIR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17010304', 
                    'descripcion' => 'FABRICACIÓN DE PAPEL ABSORVENTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17010401', 
                    'descripcion' => 'TRATAMIENTO INDUSTRIAL POSTERIOR DE PAPEL Y CARTÓN: REVESTIMIENTO, RECUBRIMIENTO E IMPREGNACIÓN DE PAPEL Y CARTÓN; PAPELES LAMINADOS, PAPEL ALUMINIO, PAPEL KRAFT, CARTULINA, PAPEL MULTILAMINAR, PAPELES ABSORBENTES, PAPEL PERGAMINO, PAPEL CIGARRILLO, PAPEL RIZADO O PLEGADO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17010501', 
                    'descripcion' => 'FABRICACIÓN DE PAPEL PERIÓDICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17010502', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PAPELES PARA IMPRIMIR Y ESCRIBIR: PAPEL PERGAMINO VEGETAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17010503', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PAPELES PARA ESCRIBIR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17010601', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE PASTA DE MADERA, PAPEL Y CARTÓN A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17010901', 
                    'descripcion' => 'FABRICACIÓN DE GUATA DE CELULOSA Y TIRAS DE FIBRAS DE CELULOSA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17010902', 
                    'descripcion' => 'FABRICACIÓN DE PAPEL KRAFT PARA FORROS SIN REVESTIR PARA ENVOLVER O EMBALAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17010903', 
                    'descripcion' => 'FABRICACIÓN DE PAPEL A MANO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17010904', 
                    'descripcion' => 'ELABORACIÓN DE OTROS TIPOS DE PAPEL: PAPEL CARBÓN O PAPEL ESTÉNCIL EN ROLLOS U HOJAS GRANDES, PAPEL DE CALCAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17011001', 
                    'descripcion' => 'FABRICACIÓN DE PAPEL REVESTIDO, RECUBIERTO O IMPREGNADO: PARA ESCRIBIR O IMPRIMIR, PAPEL KRAFT, CUBIERTO DE PLÁSTICO, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17011101', 
                    'descripcion' => 'FABRICACIÓN DE PAPEL RIZADO O PLEGADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17011201', 
                    'descripcion' => 'FABRICACIÓN DE PAPEL Y CARTÓN COMPUESTO (PAPEL LAMINADO CON BETÚN U OTRAS SUSTANCIAS ADHERENTES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17011301', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS DE LA REELABORACIÓN DE PAPEL Y CARTÓN DE BASE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17020101', 
                    'descripcion' => 'FABRICACIÓN DEL PAPEL Y CARTÓN ONDULADOS O CORRUGADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17020201', 
                    'descripcion' => 'FABRICACIÓN DE ENVASES DE PAPEL O DE CARTÓN RÍGIDO: CAJAS, CAJONES, ESTUCHES, ENVASES, ARCHIVADORES DE CARTÓN DE OFICINA Y ARTÍCULOS SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17020202', 
                    'descripcion' => 'FABRICACIÓN DE ENVASES DE PAPEL O DE CARTÓN ONDULADO O PLEGABLE: CAJAS, CAJONES, ESTUCHES, ENVASES, ARCHIVADORES DE CARTÓN DE OFICINA Y ARTÍCULOS SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17020301', 
                    'descripcion' => 'FABRICACIÓN DE SACOS Y DE BOLSAS DEL PAPEL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17020401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE PAPEL Y CARTÓN ONDULADO Y DE ENVASES DE PAPEL Y CARTÓN A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17091101', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS DE PAPEL DE HIGIENE PERSONAL Y PRODUCTOS DE GUATA DE CELULOSA Y MATERIALES TEXTILES: PAÑUELOS DE LIMPIEZA, TOALLAS, SERVILLETAS, PAPEL HIGIÉNICO, TOALLAS SANITARIAS Y TAMPONES, TOALLAS PARA DESMAQUILLAR, PAÑALES PARA BEBES Y SIMILARES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17091201', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE USO DOMÉSTICOS VASOS, PLATOS Y BANDEJAS, BANDEJAS PARA GUARDAR HUEVOS Y OTROS PRODUCTOS PARA ENVASADO, DE PAPEL O CARTÓN MOLDEADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17091301', 
                    'descripcion' => 'ELABORACIÓN DE BOBINAS DE PAPEL O CARTÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17091302', 
                    'descripcion' => 'ELABORACIÓN DE CARRETES, TAPAS, ETCÉTERA, DE PAPEL O CARTÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17091401', 
                    'descripcion' => 'ELABORACIÓN DE PAPEL PARA EMPAPELAR Y CUBRIMIENTOS SIMILARES PARA PARED' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17091402', 
                    'descripcion' => 'ELABORACIÓN DE PAPEL PARA REVESTIMIENTO PARA VIDRIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17091403', 
                    'descripcion' => 'ELABORACIÓN DE PAPEL PARA EMPAPELAR TEXTIL Y RECUBIERTO DE VINILO, REVESTIMIENTO PARA PISOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17091501', 
                    'descripcion' => 'ELABORACIÓN DE PRENDAS Y COMPLEMENTOS DE VESTIR DE PAPEL O GUATA DE CELULOSA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17091601', 
                    'descripcion' => 'FABRICACIÓN DE BLOQUES, PLANCHAS Y PLACAS FILTRANTES DE PASTA DE PAPEL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17092101', 
                    'descripcion' => 'FABRICACIÓN DE PAPEL PARA IMPRESORA DE COMPUTADORA; PAPEL PARA IMPRIMIR Y ESCRIBIR U OTROS USOS GRÁFICOS LISTO PARA USAR, CORTADO O PERFORADO, RAYADO, ETCÉTERA (PAPEL BOND, ETIQUETA, COUCHÉ)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17092201', 
                    'descripcion' => 'ELABORACIÓN DE PAPEL DE ESTÉNCIL, AUTOCOPIA Y OTROS PAPELES PARA COPIAR O TRANSFERIR, LISTO PARA USAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17092301', 
                    'descripcion' => 'FABRICACIÓN DE PAPEL ENGOMADO O ADHESIVO LISTO PARA USAR (CINTAS O ROLLOS), ELABORACIÓN DE SOBRES, AEROGRAMAS, CARTAS Y TARJETAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17092401', 
                    'descripcion' => 'FABRICACIÓN DE REGISTROS, LIBROS DE CONTABILIDAD, CUADERNOS Y ARTÍCULOS DE PAPELERÍA SIMILARES DE USO EDUCATIVO O COMERCIAL, CUANDO LA INFORMACIÓN IMPRESA NO CONSTITUYA SU CARACTERÍSTICA PRINCIPAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17092501', 
                    'descripcion' => 'FABRICACIÓN DE CAJAS, BOLSAS (FUNDAS), CARPETAS Y JUEGOS DE ESCRITORIO QUE CONTENGAN UNA VARIEDAD DE ARTÍCULOS DE PAPELERÍA, RECADOS DE ESCRIBIR QUE CONTIENEN PAPEL PARA CORRESPONDENCIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17092502', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE PAPELERÍA, ESQUELAS O TARJETAS POSTALES EN BLANCO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17092901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DE PAPEL: ARTÍCULOS DE FANTASÍA DE PAPEL, ARTÍCULOS PROMOCIONALES Y DE REGALO DE PAPEL,  CUERDAS Y CORDAJES DE PAPEL, PAPEL REGALO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17092902', 
                    'descripcion' => 'FABRICACIÓN DE PAPEL Y CARTÓN FILTRO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17092903', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DE PAPEL: ETIQUETAS IMPRESAS O SIN IMPRIMIR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17092904', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DE PAPEL O CARTÓN: PAPEL IMPRESO PARA APARATOS DE GRABACIÓN AUTOMÁTICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17092905', 
                    'descripcion' => 'FABRICACIÓN DE PAPEL CIGARRILLO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C17093001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE OTROS ARTÍCULOS DEL PAPEL Y CARTÓN A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18110101', 
                    'descripcion' => 'ACTIVIDADES DE IMPRESIÓN DE PERIÓDICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18110102', 
                    'descripcion' => 'ACTIVIDADES DE IMPRESIÓN DE REVISTAS Y OTRAS PUBLICACIONES PERIÓDICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18110201', 
                    'descripcion' => 'ACTIVIDADES DE IMPRESIÓN DE LIBROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18110202', 
                    'descripcion' => 'ACTIVIDADES DE FOLLETOS, MANUSCRITOS MUSICALES Y PARTITURA, MAPAS, ATLAS, CARTELES, ETCÉTERA; MEDIANTE IMPRESIÓN POR OFFSET, FOTOGRABACIÓN, IMPRESIÓN FLEXOGRÁFICA E IMPRESIÓN EN OTROS TIPOS DE PRENSA, MAQUINAS AUTOCOPISTAS, IMPRESORAS ESTAMPADORAS, ETCÉTERA, INCLUIDA LA IMPRESIÓN RÁPIDA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18110203', 
                    'descripcion' => 'ACTIVIDADES DE DICCIONARIOS, ENCICLOPEDIAS, ETCÉTERA; MEDIANTE IMPRESIÓN POR OFFSET, FOTOGRABACIÓN, IMPRESIÓN FLEXOGRÁFICA E IMPRESIÓN EN OTROS TIPOS DE PRENSA, MAQUINAS AUTOCOPISTAS, IMPRESORAS ESTAMPADORAS, ETCÉTERA, INCLUIDA LA IMPRESIÓN RÁPIDA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18110301', 
                    'descripcion' => 'ACTIVIDADES DE IMPRESIÓN DE SELLOS DE CORREO, ESTAMPILLAS Y TIMBRES FISCALES, DOCUMENTOS DE TÍTULOS, BOLETOS DE ENTRADAS A ESPECTÁCULOS, CHEQUES Y OTROS VALORES O DOCUMENTOS DE GARANTÍA Y DE SEGURIDAD, MEDIANTE IMPRESIÓN POR OFFSET, FOTOGRABACIÓN, IMPRESIÓN FLEXOGRÁFICA E IMPRESIÓN EN OTROS TIPOS DE PRENSA, MAQUINAS AUTOCOPISTAS, IMPRESORAS ESTAMPADORAS, ETCÉTERA, INCLUIDA LA IMPRESIÓN RÁPIDA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18110401', 
                    'descripcion' => 'ACTIVIDADES DE IMPRESIÓN DE CATÁLOGOS PARA FABRICANTES DE MÁQUINAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18110402', 
                    'descripcion' => 'ACTIVIDADES DE IMPRESIÓN DE PÓSTERS, GIGANTOGRAFÍAS, CATÁLOGOS DE PUBLICIDAD, PROSPECTOS Y OTROS IMPRESOS PUBLICITARIOS MEDIANTE IMPRESIÓN POR OFFSET, FOTOGRABACIÓN, IMPRESIÓN FLEXOGRÁFICA E IMPRESIÓN EN OTROS TIPOS DE PRENSA, MAQUINAS AUTOCOPISTAS, IMPRESORAS ESTAMPADORAS, ETCÉTERA, INCLUIDA LA IMPRESIÓN RÁPIDA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18110403', 
                    'descripcion' => 'ACTIVIDADES DE IMPRESIÓN DE CALENDARIOS, FORMULARIOS COMERCIALES, DIRECTORIOS Y OTROS MATERIALES IMPRESOS DE USO COMERCIAL, PAPEL DE CORRESPONDENCIA ÁLBUMES, AGENDAS PERSONALES, DIARIOS, TARJETAS DE INVITACIÓN, DE VISITA, DE PRESENTACIÓN Y OTROS MATERIALES IMPRESOS MEDIANTE IMPRESIÓN POR OFFSET, FOTOGRABACIÓN, IMPRESIÓN FLEXOGRÁFICA E IMPRESIÓN EN OTROS TIPOS DE PRENSA, MAQUINAS AUTOCOPISTAS, IMPRESORAS ESTAMPADORAS, ETCÉTERA, INCLUIDA LA IMPRESIÓN RÁPIDA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18110501', 
                    'descripcion' => 'ACTIVIDADES DE IMPRESIÓN DIRECTA EN TEXTILES, PLÁSTICOS, VIDRIO, METAL, MADERA Y CERÁMICA (EXCEPTO SERIGRAFÍA SOBRE TEXTILES O PRENDAS DE VESTIR)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18110601', 
                    'descripcion' => 'ACTIVIDADES DE IMPRESIÓN EN ETIQUETAS O MARBETES (POR PROCEDIMIENTOS LITOGRÁFICOS, DE ROTOGRABADO, FLEXOGRÁFICOS, U OTROS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18110701', 
                    'descripcion' => 'IMPRESIÓN DE PAPEL MONEDA PARA EL GOBIERNO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18120101', 
                    'descripcion' => 'ACTIVIDADES DE ENCUADERNACIÓN DE HOJAS IMPRESAS PARA CONFECCIONAR LIBROS, FOLLETOS, REVISTAS, CATÁLOGOS ETCÉTERA, MEDIANTE EL COLADO, CORTADO, ENSAMBLADO, ENGOMADO, COMPAGINADO, HILVANADO (COSIDO), ENCUADERNADO CON ADHESIVO, RECORTADO, ESTAMPADO EN ORO, ENCUADERNACIÓN ESPIRAL, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18120201', 
                    'descripcion' => 'ACTIVIDADES DE SERVICIOS DE PREPARACIÓN DE PLACAS, PLANCHAS Y TINTES PARA EL ESTAMPADO Y LA IMPRESIÓN E IMPRESIÓN EN RELIEVE (INCLUIDAS PLANCHAS DE FOTOPOLÍMEROS), PREPARACIÓN DE LA COMPOSICIÓN DE IMÁGENES Y PLACAS PARA IMPRENTAS TIPOGRÁFICAS Y DE OFFSET. COMPOSICIÓN TIPOGRAFÍA, FOTOCOMPOSICIÓN, LA INCORPORACIÓN DE DATOS ANTES DE LA IMPRESIÓN, INCLUSO MEDIANTE EL ESCANEO Y RECONOCIMIENTO ÓPTICO DE CARACTERES, COMPAGINACIÓN ELECTRÓNICA Y GRABADO DE CILINDROS PARA ROTOGRABADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18120301', 
                    'descripcion' => 'ACTIVIDADES DE DISEÑO DE PRODUCTOS IMPRESOS POR EJEMPLO BOCETOS, DIAGRAMAS, PATRONES, CROQUIS, MAQUETAS, ETCÉTERA, PRODUCCIÓN DE PRUEBAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18120401', 
                    'descripcion' => 'ACTIVIDADES DE PRODUCCIÓN DE OBRAS ARTÍSTICAS INCLUSO PIEDRAS LITOGRÁFICAS Y PLANCHAS DE MADERA PREPARADAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18120501', 
                    'descripcion' => 'ACTIVIDADES DE PRODUCCIÓN DE PRODUCTOS DE REPROGRAFÍA (COPIADORA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18120601', 
                    'descripcion' => 'ACTIVIDADES DE SERVICIOS COMBINADOS DE IMPRESIÓN DE TEXTO E IMÁGENES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18120701', 
                    'descripcion' => 'ACTIVIDADES GRAFICAS, COMO EL ESTAMPADO EN HUECO Y ESTAMPADO A TROQUEL, IMPRESIÓN DE LIBROS BRAILLE, TROQUELADO Y PERFORADO, ESTAMPADO EN RELIEVE, BARNIZADO Y LAMINADO, ALZADO, ENCARTACIÓN Y PLEGADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18120901', 
                    'descripcion' => 'OTROS ACTIVIDADES DE SERVICIOS RELACIONADOS CON LA IMPRESIÓN: SERVICIOS DE PREPARACIÓN DE DATOS DIGITALES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18200101', 
                    'descripcion' => 'ACTIVIDADES DE REPRODUCCIÓN A PARTIR DE COPIAS MATRICES (ORIGINALES) DE: DISCOS GRAMOFÓNICOS, DISCOS COMPACTOS Y CINTAS CON MÚSICA U OTRAS GRABACIONES DE SONIDO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18200201', 
                    'descripcion' => 'ACTIVIDADES DE REPRODUCCIÓN DE COPIAS MATRICES (ORIGINALES) DE DISCOS, DISCOS COMPACTOS, CINTAS CON PELÍCULAS Y OTRAS GRABACIONES DE VIDEO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C18200301', 
                    'descripcion' => 'ACTIVIDADES DE REPRODUCCIÓN A PARTIR DE COPIAS MATRICES DE PROGRAMAS INFORMÁTICOS Y DATOS EN DISCOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C19100101', 
                    'descripcion' => 'EXPLOTACIÓN DE HORNOS DE COQUE PARA LA PRODUCCIÓN DE ALQUITRANES DE HULLA Y CARBÓN DE RETORTA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C19100102', 
                    'descripcion' => 'EXPLOTACIÓN DE HORNOS DE COQUE PARA LA PRODUCCIÓN DE LIGNITO CRUDOS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C19100103', 
                    'descripcion' => 'EXPLOTACIÓN DE HORNOS DE COQUE PARA LA PRODUCCIÓN DE COQUE O SEMICOQUE, BREA Y COQUE DE BREA, GAS DE HORNO DE COQUE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C19100201', 
                    'descripcion' => 'AGLOMERACIÓN DE COQUE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C19100301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE PRODUCTOS DE HORNO DE COQUE A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C19200101', 
                    'descripcion' => 'PRODUCCIÓN DE COMBUSTIBLES PARA MOTORES: GASOLINA, QUEROSENO ETCÉTERA; FUELOIL LIGERO, MEDIO Y PESADO, GASES DE REFINERÍA COMO ETANO, BUTANO O PROPANO, ETCÉTERA, RECUPERACIÓN DE GASES DE PETRÓLEO LICUADOS EN EL REFINAMIENTO DE PETRÓLEO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C19200201', 
                    'descripcion' => 'FABRICACIÓN DE ACEITES LUBRICANTES A BASE DE PETRÓLEO, INCLUIDO LOS FABRICADOS A PARTIR DE RESIDUOS DEL PETRÓLEO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C19200202', 
                    'descripcion' => 'FABRICACIÓN DE GRASAS LUBRICANTES A BASE DE PETRÓLEO, INCLUIDO LOS FABRICADOS A PARTIR DE RESIDUOS DEL PETRÓLEO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C19200301', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS PARA LA INDUSTRIA PETROQUÍMICA Y PARA LA FABRICACIÓN DE PAVIMENTOS DE CARRETERAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C19200401', 
                    'descripcion' => 'FABRICACIÓN DE BRIQUETAS DE CARBÓN DE PIEDRA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C19200402', 
                    'descripcion' => 'FABRICACIÓN DE BRIQUETAS DE LIGNITO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C19200501', 
                    'descripcion' => 'FABRICACIÓN DE BIOCOMBUSTIBLES, ES DECIR LA MEZCLA DE ALCOHOLES CON PETRÓLEO POR EJEMPLO: GASOHOL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C19200601', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE PRODUCTOS DE LA REFINACIÓN DEL PETRÓLEO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C19200901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS DE LA REFINACIÓN DEL PETRÓLEO: VASELINA, CERA DE PARAFINA, JALEA DE PETRÓLEO (PETROLATO), BRIQUETAS DE PETRÓLEO ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C19200902', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS DE LA REFINACIÓN DEL PETRÓLEO: BENCINA MINERAL (AGUARRÁS), ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20111101', 
                    'descripcion' => 'FABRICACIÓN DE AIRE LÍQUIDO O COMPRIMIDO (OXIGENO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20111102', 
                    'descripcion' => 'FABRICACIÓN DE GASES INDUSTRIALES O MÉDICOS INORGÁNICOS, LICUADOS O COMPRIMIDOS: GASES INERTES COMO EL DIÓXIDO DE CARBONO (ANHÍDRIDO CARBÓNICO), GASES AISLANTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20111103', 
                    'descripcion' => 'FABRICACIÓN DE GASES REFRIGERANTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20111104', 
                    'descripcion' => 'FABRICACIÓN DE MEZCLAS DE GASES INDUSTRIALES (GASES CARBÓNICOS), GASES ELEMENTALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20111201', 
                    'descripcion' => 'FABRICACIÓN DE ÁLCALIS, LEJÍAS Y OTRAS BASES INORGÁNICAS: PIGMENTOS INORGÁNICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20111202', 
                    'descripcion' => 'FABRICACIÓN DE ÁLCALIS, LEJÍAS Y OTRAS BASES INORGÁNICAS: HIPOCLORITO DE SODIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20111301', 
                    'descripcion' => 'ELABORACIÓN DE ELEMENTOS QUÍMICOS (EXCEPTO GASES INDUSTRIALES Y METALES BÁSICOS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20111401', 
                    'descripcion' => 'FABRICACIÓN DE ÁCIDOS INORGÁNICOS EXCEPTO ACIDO NÍTRICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20111901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS COMPUESTOS QUÍMICOS INORGÁNICOS ( COMO CLORO DOMÉSTICO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20112101', 
                    'descripcion' => 'FABRICACIÓN DE ALCOHOLES CÍCLICOS Y ACÍCLICOS, FENOLES Y FENOLES-ALCOHOLES, SORBITOL, METANOL Y ALCOHOLES SUPERIORES (INCLUSO ALCOHOL ETÍLICO SINTÉTICO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20112201', 
                    'descripcion' => 'FABRICACIÓN DE COMPUESTOS ORGÁNICOS DE FUNCIÓN NITRÓGENO, INCLUSO AMINAS (CUERPO DERIVADO DEL AMONÍACO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20112202', 
                    'descripcion' => 'FABRICACIÓN DE COMPUESTOS DE FUNCIÓN NITRILO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20112301', 
                    'descripcion' => 'FABRICACIÓN DE HIDROCARBUROS CÍCLICOS Y ACÍCLICOS, SATURADOS Y NO SATURADOS, BENCENO, TOLUENO, XILENO Y OTROS PRODUCTOS DE LA DESTILACIÓN DE ALQUITRÁN, HULLA O ACEITE MINERAL, PRODUCCIÓN DE BREA Y COQUE DE BREA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20112401', 
                    'descripcion' => 'FABRICACIÓN DE ÁCIDOS MONOCARBOXÍLICOS Y POLICARBOXÍLICOS, INCLUIDO ACIDO ACÉTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20112501', 
                    'descripcion' => 'FERMENTACIÓN DE CAÑA DE AZÚCAR, MAÍZ O SIMILARES PARA PRODUCIR ALCOHOL Y ESTERES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20112601', 
                    'descripcion' => 'FABRICACIÓN DE COMPUESTOS DE FUNCIÓN OXIGENO, INCLUSO ALDEHÍDOS, CETONAS, QUINONAS Y COMPUESTOS DUALES O MÚLTIPLES DE FUNCIÓN OXÍGENO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20112701', 
                    'descripcion' => 'FABRICACIÓN DE CARBÓN VEGETAL Y OTROS PRODUCTOS DE LA DESTILACIÓN DE MADERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20112901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS COMPUESTOS ORGÁNICOS, GLICERINA SINTÉTICA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20113001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE SUBSTANCIAS QUÍMICAS BÁSICAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20113101', 
                    'descripcion' => 'FABRICACIÓN DE ALEACIONES, DISPERSIONES, MEZCLAS DE URANIO NATURAL O SUS COMPUESTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20113201', 
                    'descripcion' => 'FABRICACIÓN DE URANIO 235 EMPROBECIDO Y SUS COMPUESTOS, TORIO Y SUS COMPUESTOS O ALEACIONES, DISPERSIONES O MEZCLAS DE ESTOS COMPUESTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20113301', 
                    'descripcion' => 'FABRICACIÓN DE URANIO ENRIQUECIDO Y SUS COMPUESTOS, PLUTONIO Y SUS COMPUESTOS O ALEACIONES, DISPERSIONES O MEZCLAS DE ESTOS COMPUESTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20113401', 
                    'descripcion' => 'FABRICACIÓN DE ELEMENTOS COMBUSTIBLES NO IRRADIADOS PARA SU UTILIZACIÓN EN REACTORES NUCLEARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20113501', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ELEMENTOS, ISÓTOPOS O COMPUESTOS RADIACTIVOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20119101', 
                    'descripcion' => 'FABRICACIÓN DE MATERIAS COLORANTES, TINTES Y PIGMENTOS DE CUALQUIER ORIGEN EN FORMA BÁSICA O COMO CONCENTRADO, DE ORIGEN ORGÁNICO SINTÉTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20119102', 
                    'descripcion' => 'FABRICACIÓN DE MATERIAS COLORANTES, TINTES Y PIGMENTOS DE CUALQUIER ORIGEN EN FORMA BÁSICA O COMO CONCENTRADO, DE ORIGEN VEGEAL O ANIMAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20119201', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS USADOS COMO AGENTES AVIVADORES FLUORESCENTES O COMO LUMINÓFOROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20119301', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS AROMÁTICOS ORGÁNICOS Y SINTÉTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20119401', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS CURTIENTES SINTÉTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20119402', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS CURTIENTES DE ORIGEN VEGETAL O ANIMAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20119501', 
                    'descripcion' => 'ACTIVIDADES DE ENRIQUECIMIENTO DE MINERALES DE URANIO, PLUTONIO, TORIO Y PRODUCCIÓN DE ELEMENTOS COMBUSTIBLES PARA REACTORES NUCLEARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20119601', 
                    'descripcion' => 'FABRICACIÓN DE AGUA DESTILADA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20119701', 
                    'descripcion' => 'ACTIVIDADES DE TOSTADO DE PIRITAS DE HIERRO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20119801', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS QUÍMICOS INORGÁNICOS BÁSICOS N.C.P' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20120101', 
                    'descripcion' => 'FABRICACIÓN DE ABONOS NITROGENADOS PUROS O COMPLEJOS, ÚREA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20120102', 
                    'descripcion' => 'FABRICACIÓN DE ABONOS FOSFATADOS, PUROS O COMPLEJOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20120103', 
                    'descripcion' => 'FABRICACIÓN DE ABONOS POTÁSICOS PUROS O COMPLEJOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20120104', 
                    'descripcion' => 'FABRICACIÓN DE FOSFATOS NATURALES EN CRUDO Y SALES DE POTASIO NATURALES CRUDAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20120201', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS NITROGENADOS CONEXOS: ACIDO NÍTRICO Y SULFONÍTRICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20120202', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS NITROGENADOS CONEXOS: AMONÍACO, CLORURO DE AMONIO, CARBONATO DE AMONIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20120203', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS NITROGENADOS CONEXOS: NITRITOS Y NITRATOS DE POTASIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20120301', 
                    'descripcion' => 'FABRICACIÓN DE SUSTRATOS (TIERRA PARA MACETAS) HECHOS PRINCIPALMENTE DE TURBA; DE MEZCLAS DE TIERRA NATURAL, ARENA, ARCILLA Y MINERALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20120401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE ABONOS Y COMPUESTOS DE NITRÓGENO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20131101', 
                    'descripcion' => 'FABRICACIÓN DE PLÁSTICOS EN FORMAS PRIMARIAS: AMINORESINAS, RESINAS FENÓLICAS Y POLIURETANOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20131102', 
                    'descripcion' => 'FABRICACIÓN DE PLÁSTICOS EN FORMAS PRIMARIAS: RESINAS EPOXÍDICAS, RESINAS DE POLIÉSTER, POLIACETALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20131103', 
                    'descripcion' => 'FABRICACIÓN DE PLÁSTICOS EN FORMAS PRIMARIAS: POLICARBONATOS, RESINAS ALQUÍDICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20131104', 
                    'descripcion' => 'FABRICACIÓN DE PLÁSTICOS EN FORMAS PRIMARIAS: POLÍMEROS, INCLUIDOS LOS POLÍMEROS DE ETILENO, PROPILENO, ESTIRENO, CLORURO DE VINILLO, ACETATO DE VINILLO Y ACRÍLICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20131105', 
                    'descripcion' => 'FABRICACIÓN DE PLÁSTICOS EN FORMAS PRIMARIAS: RESINAS DE PETRÓLEO, POLITERPENOS, POLISULFUROS, POLISULFONAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20131106', 
                    'descripcion' => 'FABRICACIÓN DE PLÁSTICOS EN FORMAS PRIMARIAS: SILICONAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20131107', 
                    'descripcion' => 'FABRICACIÓN DE POLÍMEROS NATURALES, ÁCIDO ALGÍNICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20131108', 
                    'descripcion' => 'FABRICACIÓN DE PLÁSTICOS EN FORMAS PRIMARIAS: INTERCAMBIADORES DE IONES BASADOS EN POLÍMEROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20131109', 
                    'descripcion' => 'FABRICACIÓN DE PLÁSTICOS EN FORMAS PRIMARIAS: POLIAMIDAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20131110', 
                    'descripcion' => 'FABRICACIÓN DE OTRAS FORMAS PRIMARIAS DE PLÁSTICOS: ESTERES DE POLIALILO, OLEFINAS HALOGENADAS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20131201', 
                    'descripcion' => 'FABRICACIÓN DE CELULOSA Y SUS DERIVADOS QUÍMICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20131301', 
                    'descripcion' => 'FABRICACIÓN DE PLACAS DE IDENTIFICACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20131302', 
                    'descripcion' => 'FABRICACIÓN DE TARJETAS Y OTROS SIMILARES DE PLÁSTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20131401', 
                    'descripcion' => 'FABRICACIÓN DE LINOLEO Y OTROS MATERIALES DUROS PARA REVESTIR PISOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20132101', 
                    'descripcion' => 'FABRICACIÓN DE CAUCHO SINTÉTICO EN FORMAS PRIMARIAS: CAUCHO SINTÉTICO, ARTIFICIAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20132201', 
                    'descripcion' => 'FABRICACIÓN DE ACEITE VEGETAL VULCANIZADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20132301', 
                    'descripcion' => 'FABRICACIÓN DE MEZCLAS DE CAUCHO SINTÉTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20132302', 
                    'descripcion' => 'FABRICACIÓN DE MEZCLAS DE CAUCHO NATURAL O GOMAS SIMILARES AL CAUCHO (BALATA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20133001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE PLÁSTICOS Y DE CAUCHOS SINTÉTICO EN FORMAS PRIMARIAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20210101', 
                    'descripcion' => 'FABRICACIÓN DE INSECTICIDAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20210102', 
                    'descripcion' => 'FABRICACIÓN DE RATICIDAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20210103', 
                    'descripcion' => 'FABRICACIÓN DE FUNGICIDAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20210104', 
                    'descripcion' => 'FABRICACIÓN DE HERBICIDAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20210105', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS ANTIGERMINANTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20210106', 
                    'descripcion' => 'FABRICACIÓN DE REGULADORES DEL CRECIMIENTO DE LAS PLANTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20210201', 
                    'descripcion' => 'FABRICACIÓN DE DESINFECTANTES DE USO AGROPECUARIO Y PARA OTROS USOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20210301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE PLAGUICIDAS Y OTROS PRODUCTOS QUÍMICOS DE USO AGROPECUARIO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20210901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS QUÍMICOS DE USO AGROPECUARIO N.C.P' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20220101', 
                    'descripcion' => 'FABRICACIÓN DE PINTURAS, BARNICES, ESMALTES O LACAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20220102', 
                    'descripcion' => 'FABRICACIÓN DE PIGMENTOS Y TINTES, OPACIFICADORES Y COLORES PREPARADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20220103', 
                    'descripcion' => 'FABRICACIÓN DE OTRAS PINTURAS Y PRODUCTOS SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20220201', 
                    'descripcion' => 'FABRICACIÓN DE ESMALTES VITRIFICABLES Y BARNICES PARA VIDRIAR Y ENLUCIDOS CERÁMICOS Y PREPARADOS SIMILARES; PIGMENTOS Y TINTES, OPACIFICADORES Y COLORES PREPARADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20220301', 
                    'descripcion' => 'FABRICACIÓN DE MASILLAS, COMPUESTOS PARA CALAFATEAR Y PREPARADOS SIMILARES NO REFRACTARIOS PARA RELLENO Y ENLUCIDO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20220401', 
                    'descripcion' => 'FABRICACIÓN DE DISOLVENTES Y DILUYENTES COMPUESTOS ORGÁNICOS: DECAPANTES (REMOVEDORES) DE PINTURA Y BARNIZ PREPARADOS (THIÑER)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20220501', 
                    'descripcion' => 'FABRICACIÓN DE TINTA DE IMPRENTA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20220601', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE PINTURAS, BARNICES Y PRODUCTOS DE REVESTIMIENTO SIMILARES, TINTAS DE IMPRENTA Y MASILLAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20231101', 
                    'descripcion' => 'FABRICACIÓN DE AGENTES ORGÁNICOS TENSOACTIVOS Y PREPARADOS TENSOACTIVOS (DETERGENTES) PARA LAVAR EN POLVO O LÍQUIDOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20231102', 
                    'descripcion' => 'FABRICACIÓN DE BARRAS (JABÓN), PASTILLAS, PIEZAS, PREPARADOS PARA FREGAR PLATOS (LAVAVAJILLAS); SUAVIZANTES TEXTILES, INCLUIDO JABÓN COSMÉTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20231201', 
                    'descripcion' => 'FABRICACIÓN DE DETERGENTES Y OTROS MATERIALES IMPREGNADOS, REVESTIDOS O RECUBIERTOS CON JABÓN O DETERGENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20231202', 
                    'descripcion' => 'FABRICACIÓN DE GLICERINA EN BRUTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20231203', 
                    'descripcion' => 'FABRICACIÓN DE PAPEL, GUATA, FIELTRO Y OTROS MATERIALES IMPREGNADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20232101', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS DE LIMPIEZA: PREPARADOS PARA PERFUMAR Y DESODORIZAR AMBIENTES, POLVOS O PASTAS DE LIMPIEZA INCLUIDOS PAPEL, GUATA, ETCÉTERA, REVESTIDO O RECUBIERTO CON ESTOS PRODUCTOS DE LIMPIEZA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20232201', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS PARA PULIR Y ABRILLANTAR: LUSTRES Y CREMAS PARA PISOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20232202', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS PARA PULIR Y ABRILLANTAR:  LUSTRES PARA CARROCERÍAS DE AUTOMÓVILES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20232203', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS PARA PULIR Y ABRILLANTAR: LUSTRES Y CREMAS PARA VIDRIO Y METAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20232204', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS PARA PULIR Y ABRILLANTAR: BETUNES Y CREMAS PARA EL CALZADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20232205', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS PARA PULIR Y ABRILLANTAR: CERAS ARTIFICIALES Y CERAS PREPARADAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20232206', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS PARA PULIR Y ABRILLANTAR: PLÁSTICOS CELULARES O DE CAUCHO CELULAR IMPREGNADOS, REVESTIDOS O RECUBIERTOS DE LUSTRADORES O CREMAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20233101', 
                    'descripcion' => 'FABRICACIÓN DE PERFUMES Y AGUAS DE COLONIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20233102', 
                    'descripcion' => 'FABRICACIÓN DE COSMÉTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20233103', 
                    'descripcion' => 'FABRICACIÓN DE PREPARADOS DE BELLEZA Y DE MAQUILLAJE, CREMAS SOLARES Y PREPARADOS BRONCEADORES, PREPARADOS PARA MANICURA Y PEDICURA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20233201', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS PARA PELUQUERÍA Y CUIDADO DEL CABELLO: CHAMPÚ, TINTES, LACAS PARA EL CABELLO, PREPARADOS PARA ONDULAR Y ALISAR EL CABELLO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20233901', 
                    'descripcion' => 'FABRICACIÓN DE PREPARADOS PARA EL AFEITADO, INCLUSO PARA ANTES Y DESPUÉS DE AFEITAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20233902', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS DE PERFUMERÍA Y TOCADOR: DEPILADORES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20233903', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS DE PERFUMERÍA Y TOCADOR: DENTÍFRICO Y PREPARADOS DE HIGIENE BUCAL Y DENTAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20233904', 
                    'descripcion' => 'FABRICACIÓN DE PREPARADOS PARA LA FIJACIÓN DE DENTADURAS POSTIZAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20233905', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS DE PERFUMERÍA Y TOCADOR: PREPARADOS PARA PERFUMAR O DESODORIZAR EL AMBIENTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20233906', 
                    'descripcion' => 'FABRICACIÓN DE DESODORANTES Y SALES DE BAÑO; ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20234001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE JABONES Y DETERGENTES, PREPARADOS PARA LIMPIAR Y PULIR, PERFUMES Y PREPARADOS DE TOCADOR A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20291101', 
                    'descripcion' => 'FABRICACIÓN DE GRASAS Y ACEITES MODIFICADOS QUÍMICAMENTE; ACEITES ESENCIALES; RESINOIDES, AGUAS DESTILADAS AROMÁTICAS; FABRICACIÓN DE MEZCLAS DE PRODUCTOS ODORÍFEROS PARA LA ELABORACIÓN DE PERFUMES O ALIMENTOS; FABRICACIÓN DE EXTRACTOS DE PRODUCTOS AROMÁTICOS NATURALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20291201', 
                    'descripcion' => 'FABRICACIÓN DE CARBÓN ACTIVADO, ADITIVOS PARA ACEITES LUBRICANTES, PREPARADOS PARA ACELERAR LA VULCANIZACIÓN DEL CAUCHO, CATALIZADORES; PREPARADOS ADITIVOS PARA CEMENTOS Y OTROS PRODUCTOS QUÍMICOS DE USO INDUSTRIAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20291301', 
                    'descripcion' => 'FABRICACIÓN DE MATERIALES PARA EL ACABADO DE PRODUCTOS TEXTILES Y DE CUERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20291401', 
                    'descripcion' => 'FABRICACIÓN DE PREPARADOS ANTIDETONANTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20291402', 
                    'descripcion' => 'FABRICACIÓN DE PREPARADOS ANTICONGELANTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20291403', 
                    'descripcion' => 'FABRICACIÓN DE LÍQUIDOS PARA TRANSMISIONES HIDRÁULICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20291501', 
                    'descripcion' => 'FABRICACIÓN DE REACTIVOS COMPUESTOS PARA DIAGNÓSTICO Y LABORATORIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20291601', 
                    'descripcion' => 'FABRICACIÓN DE GELATINA Y DERIVADOS DE LA GELATINA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20291602', 
                    'descripcion' => 'FABRICACIÓN DE PEGAMENTO (COLAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20291603', 
                    'descripcion' => 'FABRICACIÓN DE PREPARADOS ADHESIVOS, INCLUYENDO PEGAMENTO Y ADHESIVO A BASE DE CAUCHO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20292001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE OTROS PRODUCTOS QUÍMICOS N.C.P A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20299101', 
                    'descripcion' => 'FABRICACIÓN DE EXPLOSIVOS Y PRODUCTOS PIROTÉCNICOS, INCLUIDOS CÁPSULAS FULMINANTES, DETONADORES, BENGALAS DE SEÑALES Y ARTÍCULOS SIMILARES, PÓLVORAS PROPULSORAS, CERILLAS (FÓSFOROS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20299201', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS FOTOQUÍMICOS: PLACAS Y PELÍCULAS FOTOGRÁFICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20299202', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS FOTOQUÍMICOS: PAPEL SENSIBLE Y OTROS MATERIALES SENSIBILIZADOS SIN IMPRIMIR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20299203', 
                    'descripcion' => 'FABRICACIÓN DE PREPARADOS QUÍMICOS DE USO FOTOGRÁFICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20299301', 
                    'descripcion' => 'FABRICACIÓN DE TINTAS PARA ESCRIBIR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20299302', 
                    'descripcion' => 'FABRICACIÓN DE TINTAS PARA DIBUJAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20299401', 
                    'descripcion' => 'FABRICACIÓN DE GRANADAS Y BOMBAS EXTINTORAS DE FUEGO, PREPARACIÓN Y CARGA DE APARATOS EXTINTORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20299501', 
                    'descripcion' => 'FABRICACIÓN DE MATERIALES VÍRGENES DE REPRODUCCIÓN PARA GRABACIONES SONORAS O DE OTRO TIPO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20299901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS QUÍMICOS: PEPTONAS Y SUS DERIVADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20299902', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS QUÍMICOS: OTRAS SUSTANCIAS PROTEÍNICAS Y SUS DERIVADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20299903', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS QUÍMICOS: SUBSTANCIAS PARA EL DECAPADO DE METALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20299904', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS QUÍMICOS: POLVOS Y PASTAS PARA SOLDADURA BLANDA, DURA O AUTÓGENA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20300101', 
                    'descripcion' => 'FABRICACIÓN DE ESTOPAS DE FILAMENTO ARTIFICIAL O SINTÉTICO (WAIPE)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20300201', 
                    'descripcion' => 'FABRICACIÓN DE FIBRAS DISCONTINUAS SINTÉTICAS O ARTIFICIALES, SIN CARDAR, PEINAR NI ELABORAR DE OTRO MODO PARA SU HILADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20300301', 
                    'descripcion' => 'FABRICACIÓN DE HILADOS (HILOS) DE FILAMENTO SINTÉTICO O ARTIFICIAL, INCLUIDOS HILADOS (HILOS) DE GRAN RESISTENCIA, MONOFILAMENTO O HEBRAS SINTÉTICAS O ARTIFICIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C20300401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE FIBRAS ARTIFICIALES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C21000101', 
                    'descripcion' => 'FABRICACIÓN DE SUSTANCIAS MEDICINALES ACTIVAS QUE SE UTILIZAN POR SUS PROPIEDADES FARMACOLÓGICAS EN LA FABRICACIÓN DE MEDICAMENTOS: ANTIBIÓTICOS, VITAMINAS BÁSICAS, ÁCIDO SALICÍLICO Y ACETILSALICÍLICO, ETCÉTERA, TRATAMIENTO DE LA SANGRE, FABRICACIÓN DE MEDICAMENTOS: ANTISUEROS Y OTRAS FRACCIONES DE SANGRE, AZÚCARES QUÍMICAMENTE PUROS, PRODUCTOS Y EXTRACTOS ENDOCRINOS,  VACUNAS. INCLUIDOS PREPARADOS HOMEOPÁTICOS, FABRICACIÓN Y PROCESAMIENTO DE GLÁNDULAS Y EXTRACTOS GLANDULARES, FABRICACIÓN DE PRODUCTOS QUÍMICOS ANTICONCEPTIVOS DE USO EXTERNO Y DE MEDICAMENTOS ANTICONCEPTIVOS HORMONALES, FABRICACIÓN DE PREPARADOS PARA EL DIAGNÓSTICO MÉDICO, INCLUIDAS PRUEBAS DE EMBARAZO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C21000201', 
                    'descripcion' => 'FABRICACIÓN DE SUSTANCIAS RADIACTIVAS PARA DIAGNÓSTICO EN VIVO, ETCÉTERA, PRODUCTOS DE BIOTECNOLOGÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C21000301', 
                    'descripcion' => 'FABRICACIÓN DE GUATAS, GASAS, HILOS, VENDAS Y APÓSITOS MÉDICOS IMPREGNADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C21000401', 
                    'descripcion' => 'PREPARACIÓN DE PRODUCTOS BOTÁNICOS (TRITURACIÓN, CRIBADO, MOLIDO) PARA USO FARMACÉUTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C21000501', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS FARMACÉUTICOS PARA USO VETERINARIO, SEAN GENÉRICOS O DE MARCA REGISTRADA, DE VENTA AL PÚBLICO EN GENERAL O REGLAMENTADA POR LAS AUTORIDADES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C21000601', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE PRODUCTOS FARMACÉUTICOS, SUSTANCIAS QUÍMICAS MEDICINALES Y PRODUCTOS BOTÁNICOS DE USO FARMACÉUTICO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22110101', 
                    'descripcion' => 'FABRICACIÓN DE CUBIERTAS DE CAUCHO PARA: VEHÍCULOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22110102', 
                    'descripcion' => 'FABRICACIÓN DE CUBIERTAS DE CAUCHO PARA: EQUIPO, MAQUINARIA MÓVIL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22110103', 
                    'descripcion' => 'FABRICACIÓN DE CUBIERTAS DE CAUCHO PARA: AERONAVES, JUGUETES, MUEBLES Y OTROS USOS: NEUMÁTICOS, LLANTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22110201', 
                    'descripcion' => 'FABRICACIÓN DE CÁMARAS DE CAUCHO PARA CUBIERTAS DE VEHÍCULOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22110202', 
                    'descripcion' => 'FABRICACIÓN DE CÁMARAS DE CAUCHO PARA CUBIERTAS DE AERONAVES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22110203', 
                    'descripcion' => 'FABRICACIÓN DE CÁMARAS DE CAUCHO PARA CUBIERTAS DE JUGUETES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22110204', 
                    'descripcion' => 'FABRICACIÓN DE CÁMARAS DE CAUCHO PARA CUBIERTAS DE MUEBLES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22110205', 
                    'descripcion' => 'FABRICACIÓN DE CÁMARAS DE CAUCHO PARA CUBIERTAS DE TUBOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22110206', 
                    'descripcion' => 'FABRICACIÓN DE CUBIERTAS DE NEUMÁTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22110207', 
                    'descripcion' => 'FABRICACIÓN DE CUBIERTAS SÓLIDAS Y MULLIDAS (ESPONJOSAS, BLANDAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22110208', 
                    'descripcion' => 'FABRICACIÓN DE BANDAS DE RODADURA INTERCAMBIABLES, CÁMARAS PARA CUBIERTAS, FAJAS DE PROTECCIÓN DE LA CÁMARA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22110209', 
                    'descripcion' => 'FABRICACIÓN DE TIRAS DE REMIENDO PARA RECAUCHUTAR CUBIERTAS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22110301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE CUBIERTAS Y CÁMARAS DE CAUCHO; RENOVACIÓN DE CUBIERTAS DE CAUCHO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22110302', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE CUBIERTAS Y CÁMARAS DE CAUCHO; RECAUCHUTADO DE CUBIERTAS DE CAUCHO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22190101', 
                    'descripcion' => 'FABRICACIÓN DE PLANCHAS DE CAUCHO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22190102', 
                    'descripcion' => 'FABRICACIÓN DE LÁMINAS DE CAUCHO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22190103', 
                    'descripcion' => 'FABRICACIÓN DE VARILLAS DE CAUCHO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22190104', 
                    'descripcion' => 'FABRICACIÓN  DE EMPAQUES DE CAUCHO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22190105', 
                    'descripcion' => 'FABRICACIÓN DE RODELES DE CAUCHO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22190106', 
                    'descripcion' => 'FABRICACIÓN DE PERFILES DE CAUCHO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22190107', 
                    'descripcion' => 'FABRICACIÓN DE HOJAS DE CAUCHO VULCANIZADO SIN ENDURECER' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22190108', 
                    'descripcion' => 'FABRICACIÓN DE TIRAS DE CAUCHO VULCANIZADO SIN ENDURECER' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22190109', 
                    'descripcion' => 'FABRICACIÓN DE TUBOS, CAÑOS Y MANGUERAS; ARANDELAS, EMPAQUES, CONECTORES, Y CIERRES DE CAUCHO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22190201', 
                    'descripcion' => 'FABRICACIÓN DE CORREAS Y CINTAS TRANSPORTADORAS Y DE TRANSMISIÓN DE CAUCHO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22190301', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS HIGIÉNICOS Y CUIDADO PERSONAL DE CAUCHO: CEPILLOS DE CAUCHO, PEINES DE CAUCHO DURO, HORQUILLAS, RULOS Y ARTÍCULOS SIMILARES DE CAUCHO ENDURECIDO; PRESERVATIVOS, TETINAS, BOLSAS DE AGUA CALIENTE, ETCÉTERA, INCLUIDO LA FABRICACIÓN DE ARTÍCULOS ERÓTICOS DE CAUCHO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22190401', 
                    'descripcion' => 'FABRICACIÓN DE PRENDAS DE VESTIR DE CAUCHO (SOLO SI ESTÁN SELLADOS, Y NO COSIDOS): TRAJES DE BUCEO DE CAUCHO, GORRAS DE BAÑO, GUANTES Y DELANTALES DE CAUCHO, LIGAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22190501', 
                    'descripcion' => 'FABRICACIÓN DE HILOS IMPREGNADOS, REVESTIDOS, RECUBIERTOS O LAMINADOS DE CAUCHO EN LOS QUE EL CAUCHO ES EL PRINCIPAL COMPONENTE, CUBIERTAS DE CAUCHO PARA RODILLOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22190502', 
                    'descripcion' => 'FABRICACIÓN DE CUERDAS, HILATURA, TEJIDOS DE CAUCHO, TEJIDOS TEXTILES IMPREGNADOS, REVESTIDOS, RECUBIERTOS O LAMINADOS DE CAUCHO EN LOS QUE EL CAUCHO ES EL PRINCIPAL COMPONENTE, CUBIERTAS DE CAUCHO PARA RODILLOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22190601', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE OTROS PRODUCTOS DE CAUCHO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22190901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS DE CAUCHO ENDURECIDO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22190902', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS DE CAUCHO NATURAL O SINTÉTICO SIN VULCANIZAR, VULCANIZADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22190903', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS DE CAUCHO NATURAL O SINTÉTICO VULCANIZADO SIN ENDURECER, LOSETAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22190904', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS DE CAUCHO NATURAL O SINTÉTICO VULCANIZADO SIN ENDURECER, REVESTIMIENTO DE PISOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22190905', 
                    'descripcion' => 'FABRICACIÓN DE COLCHONES INFLABLES DE CAUCHO, COLCHONES DE CAUCHO PARA CAMAS DE AGUA, GLOBOS INFLABLES, CAÑONES DE PIPA DE CAUCHO ENDURECIDO, PARTES DE CALZADO DE CAUCHO, MATERIALES DE REPARACIÓN DE CAUCHO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22201101', 
                    'descripcion' => 'FABRICACIÓN DE SEMIMANUFACTURAS (SEMIELABORADAS) DE PRODUCTOS DE PLÁSTICO: PLANCHAS, LÁMINAS, PELÍCULAS, HOJAS, TIRAS, ETCÉTERA (AUTOADHESIVAS O NO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22201102', 
                    'descripcion' => 'FABRICACIÓN DE SEMIMANUFACTURAS (SEMIELABORADAS) DE PRODUCTOS DE PLÁSTICO: LÁMINAS DE ACRÍLICOS, ESPONJA, ESPÚMAFLEX, PELÍCULA O LÁMINA DE CELOFÁN, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22201201', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS ACABADOS DE PLÁSTICOS: TUBOS, CAÑOS Y MANGUERAS DE PLÁSTICO, ACCESORIOS PARA TUBERÍAS, CAÑOS Y MANGUERAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22202101', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS PLÁSTICOS PARA LA CONSTRUCCIÓN: PUERTAS, VENTANAS, MARCOS, CONTRAPUERTAS, PERSIANAS, ZÓCALOS, TANQUES PARA DEPÓSITOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22202201', 
                    'descripcion' => 'FABRICACIÓN DE CUBRIMIENTOS PLÁSTICOS PARA PISOS, RESISTENTES, COMO VINILO, LINÓLEO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22202202', 
                    'descripcion' => 'FABRICACIÓN DE CUBRIMIENTOS PLÁSTICOS PARA PAREDES O TECHOS EN ROLLOS O EN FORMA DE LOSETAS, DOMOS, PIEDRA ARTIFICIAL (MÁRMOL ARTIFICIAL)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22202301', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS PLÁSTICOS SANITARIOS COMO BAÑERAS, PLATOS DE DUCHA, LAVABOS, INODOROS, CISTERNAS DE INODOROS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22202401', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS PRIMARIOS DE PLÁSTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22203001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE PRODUCTOS DE PLÁSTICO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22209101', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE PLÁSTICO PARA EL ENVASADO DE PRODUCTOS: BOLSAS, SACOS, CAJONES, CAJAS, GARRAFONES, BOTELLAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22209201', 
                    'descripcion' => 'FABRICACIÓN DE VAJILLAS DE PLÁSTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22209202', 
                    'descripcion' => 'FABRICACIÓN DE UTENSILIOS DE MESA DE PLÁSTICO. ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22209203', 
                    'descripcion' => 'FABRICACIÓN DE UTENSILIOS DE COCINA DE PLÁSTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22209204', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE TOCADOR DE PLÁSTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22209301', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE PLÁSTICO PARA USO ESCOLAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22209302', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE PLÁSTICO PARA OFICINA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22209401', 
                    'descripcion' => 'FABRICACIÓN DE CUBRECABEZAS, PRENDAS DE VESTIR (SÓLO SI LAS PIEZAS SE UNEN POR ADHESIÓN Y NO POR COSTURA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22209501', 
                    'descripcion' => 'FABRICACIÓN DE PIEZAS DE LÁMPARAS Y ACCESORIOS DE ILUMINACIÓN, ACCESORIOS PARA AISLAMIENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22209502', 
                    'descripcion' => 'FABRICACIÓN DE LETREROS O SEÑALES NO ELÉCTRICAS DE PLÁSTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22209601', 
                    'descripcion' => 'FABRICACIÓN DE ACCESORIOS DE PLÁSTICO PARA CARROCERÍAS DE VEHÍCULOS Y ARTÍCULOS SIMILARES DE RESINA DE POLIÉSTER Y FIBRA DE VIDRIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22209701', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DE PLÁSTICO: PARACHOQUES DE MUELLES O EMBARCACIONES, BALLENAS DE CORSE, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22209901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DE PLÁSTICO DIVERSOS: ACCESORIOS PARA MUEBLES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C22209902', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DE PLÁSTICO DIVERSOS: ESTATUILLAS, ARTESANÍAS, CORREAS DE TRANSPORTE Y TRANSMISIÓN, CINTAS AUTOADHESIVAS, PAPEL DE EMPAPELAR, HORMAS DE ZAPATO, BOQUILLAS DE CIGARROS Y CIGARRILLOS, PEINES, RULEROS, ARTÍCULOS DE FANTASÍA PROMOCIÓNALES Y DE REGALO DE PLÁSTICO, CANASTAS DE PLÁSTICO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23101101', 
                    'descripcion' => 'FABRICACIÓN DE VIDRIO COLADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23101102', 
                    'descripcion' => 'FABRICACIÓN DE VIDRIO ESTIRADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23101103', 
                    'descripcion' => 'FABRICACIÓN DE VIDRIO SOPLADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23101104', 
                    'descripcion' => 'FABRICACIÓN DE VIDRIO TEMPLADO O LAMINADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23101105', 
                    'descripcion' => 'FABRICACIÓN DE VIDRIO PLANO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23101106', 
                    'descripcion' => 'FABRICACIÓN DE VIDRIO ARMADO DE ALAMBRE, COLOREADO O TEÑIDO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23101201', 
                    'descripcion' => 'FABRICACIÓN DE VIDRIO EN MASA, EN ESFERAS (EXCEPTO MICROESFERAS), VARILLAS O TUBOS, SEA O NO LABRADO, PERFILES DE VIDRIO Y VIDRIO LAMINADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23101301', 
                    'descripcion' => 'FABRICACIÓN DE ESPEJOS DE VIDRIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23101302', 
                    'descripcion' => 'FABRICACIÓN DE ESPEJOS RETROVISORES PARA VEHÍCULOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23102101', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DOMÉSTICOS DE VIDRIO O CRISTAL: VASOS, BOTELLAS, COPAS, PLATOS, JARRONES Y OTROS RECIPIENTES DE VIDRIO O CRISTAL INCLUIDO PIEZAS DE VIDRIO UTILIZADAS EN LA COCINA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23102102', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DOMÉSTICOS DE VIDRIO O CRISTAL: UTILIZADOS EN SERVICIOS DE MESA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23102103', 
                    'descripcion' => 'FABRICACIÓN DE RECIPIENTES DE VIDRIO O CRISTAL INCLUIDO PIEZAS DE VIDRIO UTILIZADAS EN BISUTERÍA FIGURILLAS DE VIDRIO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23102201', 
                    'descripcion' => 'FABRICACIÓN DE BLOQUES DE VIDRIO PARA PAVIMENTAR U OTROS ELEMENTOS PARA LA CONSTRUCCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23102301', 
                    'descripcion' => 'FABRICACIÓN DE FIBRAS DE VIDRIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23102302', 
                    'descripcion' => 'FABRICACIÓN DE LANA DE VIDRIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23102303', 
                    'descripcion' => 'FABRICACIÓN DE HILADOS DE FIBRA DE VIDRIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23102304', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS NO TEJIDOS DE LANA DE VIDRIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23102401', 
                    'descripcion' => 'FABRICACIÓN DE CRISTALERÍA DE LABORATORIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23102402', 
                    'descripcion' => 'FABRICACIÓN DE CRISTALERÍA HIGIÉNICA Y FARMACÉUTICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23102501', 
                    'descripcion' => 'FABRICACIÓN DE VIDRIO PARA RELOJES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23102502', 
                    'descripcion' => 'FABRICACIÓN DE VIDRIO ÓPTICO Y ELEMENTOS ÓPTICOS NO TRABAJADOS ÓPTICAMENTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23102601', 
                    'descripcion' => 'FABRICACIÓN DE AISLADORES DE VIDRIO Y ACCESORIOS AISLANTES DE VIDRIO; UNIDADES AISLANTES DE VIDRIO DE CAPAS MÚLTIPLES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23102701', 
                    'descripcion' => 'FABRICACIÓN DE ENVOLTURAS DE VIDRIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23102702', 
                    'descripcion' => 'FABRICACIÓN DE PIEZAS DE VIDRIO UTILIZADAS EN JOYAS DE FANTASÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23102703', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE VIDRIO PARA LA OFICINA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23102901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS Y MANUFACTURAS DE VIDRIO: AMPOLLAS DE VIDRIO PARA LÁMPARAS, TUBOS PARA LÁMPARAS FLUORESCENTES, ACCESORIOS PARA ALUMBRADO, FAROLES, RÓTULOS ILUMINADOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23103001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE VIDRIO Y PRODUCTOS DE VIDRIO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23910101', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS PARA CONSTRUCCIÓN: LOSETAS, TEJAS, AZULEJOS Y OTROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23910102', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS PARA CONSTRUCCIÓN: CERÁMICA REFRACTARIA; MORTEROS, CEMENTOS Y OTROS MATERIALES REFRACTARIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23910201', 
                    'descripcion' => 'FABRICACIÓN DE RETORTAS, CRISOLES, MUFLAS (HORNOS), TOBERAS, TUBOS, CAÑOS, ETCÉTERA, DE CERÁMICA REFRACTARIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23910301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE PRODUCTOS REFRACTARIOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23910901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DE CERÁMICA REFRACTARIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23910902', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DE CERÁMICA PARA AISLAMIENTO TÉRMICO A BASE DE DIATOMITAS (TIERRAS) SILÍCEAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23910903', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS REFRACTARIOS QUE CONTIENEN MAGNESITA, DOLOMITA O CROMITA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23920101', 
                    'descripcion' => 'FABRICACIÓN DE TESELAS DE MOSAICO, AZULEJOS, BALDOSAS Y LOSAS PARA PAVIMENTO ETCÉTERA, DE CERÁMICA NO REFRACTARIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23920102', 
                    'descripcion' => 'FABRICACIÓN DE LOSETAS PARA LA PARED Y PARA CAÑONES DE CHIMENEAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23920201', 
                    'descripcion' => 'FABRICACIÓN DE MATERIALES DE CONSTRUCCIÓN DE ARCILLA,  LADRILLOS, TEJAS, SOMBRERETES DE CHIMENEA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23920202', 
                    'descripcion' => 'FABRICACIÓN DE TUBOS, CONDUCTOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23920203', 
                    'descripcion' => 'FABRICACIÓN DE MATERIALES DE CONSTRUCCIÓN DE CERÁMICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23920204', 
                    'descripcion' => 'FABRICACIÓN DE MATERIALES DE CONSTRUCCIÓN DE CERÁMICA NO REFRACTARIA PARA USO ESTRUCTURAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23920301', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS SANITARIOS DE CERÁMICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23920302', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS SANITARIOS DE PORCELANA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23920303', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS SANITARIOS DE MÁRMOL SINTÉTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23920304', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS SANITARIOS DE CERÁMICA PARA USO NO ESTRUCTURAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23920401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE MATERIALES DE CONSTRUCCIÓN DE ARCILLA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23930101', 
                    'descripcion' => 'FABRICACIÓN DE VAJILLAS Y OTROS ARTÍCULOS DE USO DOMÉSTICOS Y DE ASEO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23930201', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS ORNAMENTALES DE CERÁMICA O PORCELANA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23930202', 
                    'descripcion' => 'FABRICACIÓN DE ESTATUILLAS, ARTESANÍAS Y OTROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23930301', 
                    'descripcion' => 'FABRICACIÓN DE AISLADORES ELÉCTRICOS Y ACCESORIOS AISLANTES DE CERÁMICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23930401', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE CERÁMICA PARA LABORATORIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23930402', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE CERÁMICA LA INDUSTRIA EN GENERAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23930403', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE CERÁMICA PARA LA INDUSTRIA QUÍMICA Y LA AGRICULTURA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23930501', 
                    'descripcion' => 'FABRICACIÓN DE TARROS, VASIJAS Y ARTÍCULOS SIMILARES DE CERÁMICA, UTILIZADOS PARA TRANSPORTAR O ENVASAR PRODUCTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23930601', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE OTROS PRODUCTOS DE PORCELANA Y DE CERÁMICA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23930901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS DE CERÁMICA N.C.P: MUEBLES DE CERÁMICA; IMANES DE CERÁMICA Y FERRITA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23940101', 
                    'descripcion' => 'FABRICACIÓN DE CEMENTOS HIDRÁULICOS, INCLUIDO CEMENTO DE PÓRTLAND, CEMENTO ALUMINOSO, CEMENTO DE ESCORIAS Y CEMENTO HIPERSULFATADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23940201', 
                    'descripcion' => 'FABRICACIÓN DE CAL VIVA, APAGADA E HIDRÁULICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23940202', 
                    'descripcion' => 'FABRICACIÓN DE YESOS, CON YESO CALCINADO O SULFATO DE CALCIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23940301', 
                    'descripcion' => 'FABRICACIÓN DE DOLOMITA CALCINADA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23940401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE CEMENTO, CAL Y YESO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23950101', 
                    'descripcion' => 'FABRICACIÓN DE COMPONENTES ESTRUCTURALES Y MATERIALES PREFABRICADOS PARA OBRAS DE CONSTRUCCIÓN O DE INGENIERÍA CIVIL DE HORMIGÓN: LOSETAS, LOSAS, BALDOSAS, LADRILLOS, BLOQUES, PLANCHAS, PANELES, LÁMINAS, TABLEROS, CAÑOS, TUBOS, POSTES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23950102', 
                    'descripcion' => 'FABRICACIÓN DE COMPONENTES ESTRUCTURALES Y MATERIALES PREFABRICADOS PARA OBRAS DE CONSTRUCCIÓN O DE INGENIERÍA CIVIL DE CEMENTO, PIEDRA ARTIFICIAL O YESO: LOSETAS, LOSAS, BALDOSAS, LADRILLOS, BLOQUES, PLANCHAS, PANELES, LÁMINAS, TABLEROS, CAÑOS, TUBOS, POSTES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23950201', 
                    'descripcion' => 'FABRICACIÓN DE MATERIALES DE YESO PARA LA CONSTRUCCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23950202', 
                    'descripcion' => 'FABRICACIÓN DE MATERIALES PARA LA CONSTRUCCIÓN DE SUSTANCIAS VEGETALES (LANA DE MADERA, PAJA, CAÑAS, JUNCOS) AGLOMERADAS CON CEMENTO, YESO U OTRO AGLUTINANTE MINERAL: ESTUCADOS, CIELOS RASOS DE CARRIZO O YESO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23950301', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE ASBESTO-CEMENTO, FIBRO-CEMENTO DE CELULOSA Y MATERIALES SIMILARES: LÁMINAS ONDULADAS, OTRAS LAMINAS, PANELES, TABLEROS, LOSETAS, TUBOS, CAÑOS, DEPÓSITOS, TANQUES DE AGUA, CISTERNAS, LAVABOS, LAVADEROS, VASIJAS, MUEBLES, MARCOS PARA VENTANAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23950401', 
                    'descripcion' => 'FABRICACIÓN DE MEZCLAS PREPARADAS Y SECAS PARA HORMIGÓN Y MORTERO (INCLUSO MORTERO EN POLVO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23950501', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE ARTÍCULOS DE HORMIGÓN, DE CEMENTO Y YESO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23950601', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DE HORMIGÓN PARA LA CONSTRUCCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23950602', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DE CEMENTO PARA LA CONSTRUCCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23950603', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DE YESO PARA LA CONSTRUCCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23950901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DE HORMIGÓN, INCLUSO LOS USADOS CON FINES DECORATIVOS: ESTATUAS, MUEBLES, BAJORRELIEVES Y ALTORRELIEVES, JARRONES, MACETAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23950902', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DE CEMENTO O PIEDRA ARTIFICIAL, INCLUSO LOS USADOS CON FINES DECORATIVOS: ESTATUAS, MUEBLES, BAJORRELIEVES Y ALTORRELIEVES, JARRONES, MACETAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23950903', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DE YESO, INCLUSO LOS USADOS CON FINES DECORATIVOS: ESTATUAS, MUEBLES, BAJORRELIEVES Y ALTORRELIEVES, JARRONES, MACETAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23960101', 
                    'descripcion' => 'CORTE, TALLADO Y ACABADO DE LA PIEDRA PARA CONSTRUCCIÓN: CEMENTERIOS, CARRETERAS, TECHOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23960102', 
                    'descripcion' => 'CORTE, TALLADO Y ACABADO DE MÁRMOL:  CEMENTERIOS, CARRETERAS, TECHOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23960201', 
                    'descripcion' => 'FABRICACIÓN DE MUEBLES DE PIEDRA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23960301', 
                    'descripcion' => 'SERVICIOS DE APOYO AL CORTE, TALLADO Y ACABADO DE LA PIEDRA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23990101', 
                    'descripcion' => 'FABRICACIÓN DE MUELAS DE MOLINO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23990102', 
                    'descripcion' => 'FABRICACIÓN DE PIEDRAS DE AMOLAR, PULIMENTAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23990103', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS ABRASIVOS NATURALES Y ARTIFICIALES, INCLUIDOS PRODUCTOS ABRASIVOS SOBRE UNA BASE FLEXIBLE COMO EL PAPEL LIJA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23990201', 
                    'descripcion' => 'FABRICACIÓN DE MATERIALES DE FRICCIÓN, LANA DE ESCORIAS, LANA DE ROCA Y OTRAS LANAS MINERALES SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23990202', 
                    'descripcion' => 'FABRICACIÓN DE MATERIALES DE FRICCIÓN, VERMICULITA ESCAMADA Y MATERIALES SIMILARES PARA AISLAMIENTO TÉRMICO Y SONORO, Y PARA ABSORBER EL SONIDO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23990203', 
                    'descripcion' => 'FABRICACIÓN DE MATERIALES DE FRICCIÓN, ARCILLAS DILATADAS Y MATERIALES SIMILARES PARA AISLAMIENTO TÉRMICO Y SONORO, Y PARA ABSORBER EL SONIDO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23990204', 
                    'descripcion' => 'FABRICACIÓN DE MATERIALES DE FRICCIÓN Y ARTÍCULOS SIN MONTAR DE ESOS MATERIALES CON UNA BASE DE SUSTANCIAS MINERALES O DE CELULOSA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23990205', 
                    'descripcion' => 'FABRICACIÓN DE MATERIALES DE FRICCIÓN: LANA DE VIDRIO Y MATERIALES SIMILARES PARA AISLAMIENTO TÉRMICO Y SONORO, Y PARA ABSORBER EL SONIDO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23990301', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE DIVERSAS SUSTANCIAS MINERALES: DE TURBA Y DE GRAFITO (QUE NO SEAN ARTÍCULOS ELÉCTRICOS), ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23990302', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE DIVERSAS SUSTANCIAS MINERALES: MICA TRABAJADA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23990303', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE DIVERSAS SUSTANCIAS MINERALES: ARTÍCULOS DE MICA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23990401', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE ASFALTO O DE MATERIALES SIMILARES, POR EJEMPLO ADHESIVOS A BASE DE ASFALTO (IMPERMEABILIZANTES PARA LA CONSTRUCCIÓN), BREA, ALQUITRÁN, HULLA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23990501', 
                    'descripcion' => 'FABRICACIÓN DE FIBRAS Y PRODUCTOS DE CARBONO Y GRAFITO (EXCEPTO ELECTRODOS Y APLICACIONES ELÉCTRICAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23990601', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE OTROS PRODUCTOS MINERALES NO METÁLICOS N.C.P A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C23990701', 
                    'descripcion' => 'FABRICACIÓN DE HILADOS, TELA DE ASBESTO Y ARTÍCULOS DE HILADOS O TELA DE ASBESTO: ROPA, CUBRECABEZAS, CALZADO, CORDELES, PAPEL, FIELTRO, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24101101', 
                    'descripcion' => 'EXPLOTACIÓN Y PRODUCCIÓN DE ARRABIO Y HIERRO ESPECULAR EN LINGOTES, BLOQUES Y OTRAS FORMAS PRIMARIAS, INCLUSO HIERRO EN GRANALLA (GRANOS) Y EN POLVO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24101102', 
                    'descripcion' => 'REFUNDICIÓN DE LINGOTES DE CHATARRA DE HIERRO O ACERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24101103', 
                    'descripcion' => 'EXPLOTACIÓN DE ALTOS HORNOS, CONVERTIDORES DE ACERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24101104', 
                    'descripcion' => 'TALLERES DE LAMINADO Y ACABADO, REFUNDICIÓN DE LINGOTES DE CHATARRA DE HIERRO O ACERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24101201', 
                    'descripcion' => 'PRODUCCIÓN DE FERROALEACIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24101301', 
                    'descripcion' => 'PRODUCCIÓN DE HIERRO DE PUREZA EXCEPCIONAL POR ELECTROLISIS O MEDIANTE OTROS PROCESOS QUÍMICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24101302', 
                    'descripcion' => 'PRODUCCIÓN DE OTROS PRODUCTOS FERROSOS ESPONJOSOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24101303', 
                    'descripcion' => 'PRODUCCIÓN DE BARRAS, PALASTROS U OTRAS FORMAS DE HIERRO NO ALEADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24101304', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS SEMIACABADOS DE HIERRO POR REDUCCIÓN DIRECTA DE MINERALES DE HIERRO (MENA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24101401', 
                    'descripcion' => 'PRODUCCIÓN DE ACERO OTRAS FORMAS PRIMARIAS, MEDIANTE PROCESOS NEUMÁTICOS O DE COCCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24101402', 
                    'descripcion' => 'PRODUCCIÓN DE LINGOTES U OTRAS FORMAS PRIMARIAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24101501', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS SEMIACABADOS DE ACERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24102101', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS DE ACERO LAMINADOS PLANOS EN CALIENTE Y FRÍO, SECCIONES LAMINADAS, ACERO EN LINGOTES Y SECCIONES SÓLIDAS DE ACERO POR TREFILADO, MOLIDO O DOBLADO EN FRÍO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24102201', 
                    'descripcion' => 'FABRICACIÓN DE BARRAS, VARILLAS Y SECCIONES SÓLIDAS DE HIERRO Y ACERO LAMINADAS EN CALIENTE Y MEDIANTE ESTIRADO EN FRÍO Y EN CALIENTE, RECTIFICACIÓN O TORNEADO; FABRICACIÓN DE ALAMBRE DE ACERO MEDIANTE ESTIRADO O ALARGAMIENTO EN FRÍO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24102301', 
                    'descripcion' => 'FABRICACIÓN DE MATERIALES PARA VÍAS DE FERROCARRIL (CARRILES NO ENSAMBLADOS) DE ACERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24102401', 
                    'descripcion' => 'FABRICACIÓN DE TUBOS, TUBERÍAS PERFILES, HUECOS DE ACERO SIN COSTURA Y CAÑOS SOLDADOS MEDIANTE CONFORMACIÓN EN FRÍO O EN CALIENTE Y SOLDADURA, ENTREGADOS EN ESE ESTADO O TRANSFORMADOS POSTERIORMENTE MEDIANTE EXTRUSIÓN O ESTIRADO O LAMINACIÓN EN FRÍO O MEDIANTE CONFORMACIÓN EN CALIENTE, SOLDADURA Y REDUCCIÓN. FABRICACIÓN DE CONEXIONES DE SOLDADURA A TOPE, ROSCADAS, CON SOLDADURA MACHIHEMBRADA, CONEXIONES DE TUBO DE ACERO, COMO: CONEXIONES DE BRIDA PLANAS Y CONEXIONES DE BRIDA CON COLLARES DE ACERO DE FORJA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24102501', 
                    'descripcion' => 'FABRICACIÓN DE ÁNGULOS, PERFILES Y SECCIONES ABIERTAS DE ACERO LAMINADAS EN CALIENTE Y MEDIANTE CONFORMACIÓN PROGRESIVA EN UN LAMINADOR DE RULOS O MEDIANTE PLEGADO EN UNA PRENSA DE PRODUCTOS LAMINADOS PLANOS DE ACERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24102601', 
                    'descripcion' => 'FABRICACIÓN DE ÁNGULOS, PERFILES, ALAMBRE TREFILADO Y SECCIONES ABIERTAS DE HIERRO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24102901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS ACABADOS DE HIERRO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24102902', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS DE ACERO: TABLESTACAS DE ACERO Y SECCIONES ABIERTAS SOLDADAS DE ACERO, VIRUTA DE HOJAS DE ACERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24103001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LAS INDUSTRIAS BÁSICAS DE HIERRO Y ACERO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24201101', 
                    'descripcion' => 'PRODUCCIÓN DE METALES PRECIOSOS BÁSICOS: PRODUCCIÓN Y REFINACIÓN DE METALES PRECIOSOS SIN LABRAR Y LABRADOS: ORO, PLATA, PLATINO, ETCÉTERA A PARTIR DE MINERALES Y RESIDUOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24201102', 
                    'descripcion' => 'PRODUCCIÓN DE SEMIPRODUCTOS DE METALES PRECIOSOS; FABRICACIÓN DE LAMINADOS CON HOJAS DE METALES PRECIOSOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24201201', 
                    'descripcion' => 'PRODUCCIÓN DE ALEACIONES DE METALES PRECIOSOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24201301', 
                    'descripcion' => 'FABRICACIÓN DE ENCHAPADOS: DE METALES COMUNES CON PLATA; DE METALES COMUNES Ó PLATA CON ORO; DE METALES COMUNES, ORO Y PLATA CON PLATINO O CON METALES DEL GRUPO DEL PLATINO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24201401', 
                    'descripcion' => 'PRODUCCIÓN DE ORO AMONEDADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24202101', 
                    'descripcion' => 'PRODUCCIÓN DE METALES COMUNES NO FERROSOS A PARTIR DE MINERALES EN BRUTO O EN MATA, ALÚMINA U ÓXIDOS: ALUMINIO, PLOMO ZINC, ESTAÑO, COBRE, CROMO, MANGANESO, NÍQUEL, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24202201', 
                    'descripcion' => 'PRODUCCIÓN DE METALES COMUNES NO FERROSOS A PARTIR DE MINERALES O MEDIANTE LA REFINACIÓN ELECTROLÍTICA DE DESECHOS Y CHATARRA DE PLOMO, ZINC, ESTAÑO, COBRE, CROMO, MANGANESO, NÍQUEL, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24202301', 
                    'descripcion' => 'PRODUCCIÓN DE ALEACIONES DE: ALUMINIO; PLOMO, ZINC, ESTAÑO, COBRE, CROMO, MANGANESO, NÍQUEL, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24202401', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS SEMIELABORADOS DE ALUMINIO, PLOMO, ZINC, ESTAÑO, COBRE, CROMO, MANGANESO, NÍQUEL, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24202501', 
                    'descripcion' => 'FABRICACIÓN DE ALAMBRE DE METALES COMUNES NO FERROSOS: ALUMINIO; PLOMO, ZINC Y ESTAÑO COBRE CROMO, MANGANESO, NÍQUEL, ETCÉTERA MEDIANTE TREFILADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24202601', 
                    'descripcion' => 'PRODUCCIÓN DE ALUMINIO A PARTIR DE ALÚMINA Y DE LA REFINACIÓN ELECTROLÍTICA DE DESECHOS Y CHATARRA DE ALUMINIO INCLUIDO LA PRODUCCIÓN DE OXIDO DE ALUMINIO (ALÚMINA), MATAS DE NÍQUEL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24202602', 
                    'descripcion' => 'PRODUCCIÓN DE ALÚMINA Y MATAS DE COBRE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24203001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE PRODUCTOS PRIMARIOS DE METALES PRECIOSOS Y METALES NO FERROSOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24310101', 
                    'descripcion' => 'FUNDICIÓN DE HIERRO GRIS, HIERRO GRAFITO ESFEROIDAL, PRODUCTOS DE HIERRO MALEABLE; PRODUCTOS SEMIACABADOS DE HIERRO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24310102', 
                    'descripcion' => 'OTRAS FUNDICIONES DE HIERRO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24310201', 
                    'descripcion' => 'FUNDICIÓN DE PIEZAS DE ACERO; PRODUCTOS SEMIACABADOS DE ACERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24310202', 
                    'descripcion' => 'OTRAS FUNDICIONES DE ACERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24310301', 
                    'descripcion' => 'FABRICACIÓN DE TUBOS, CAÑOS, PERFILES HUECOS, CONEXIONES DE TUBOS Y CAÑOS DE HIERRO Y ACERO SIN COSTURA MEDIANTE FUNDICIÓN CENTRÍFUGA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24320101', 
                    'descripcion' => 'FUNDICIÓN DE PIEZAS Y PRODUCTOS SEMIACABADOS DE METALES NO FERROSOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24320102', 
                    'descripcion' => 'FUNDICIÓN A PRESIÓN DE: ALUMINIO, MAGNESIO, TITANIO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C24320201', 
                    'descripcion' => 'FUNDICIÓN DE METALES PRECIOSOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25110101', 
                    'descripcion' => 'FABRICACIÓN DE ESTRUCTURAS DE METAL MARCOS O ARMAZONES PARA CONSTRUCCIÓN Y PARTES DE ESAS ESTRUCTURAS: TORRES, MÁSTILES, ARMADURAS, PUENTES, ETCÉTERA; MARCOS INDUSTRIALES DE METAL: MARCOS PARA ALTOS HORNOS, EQUIPOS DE ELEVACIÓN Y MANIPULACIÓN, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25110201', 
                    'descripcion' => 'FABRICACIÓN DE EDIFICIOS PREFABRICADOS PRINCIPALMENTE DE METAL: CASETAS, MÓDULOS DE EXHIBICIÓN DE ELEMENTOS, CABINAS TELEFÓNICAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25110301', 
                    'descripcion' => 'FABRICACIÓN DE PUERTAS Y VENTANAS DE METAL Y SUS MARCOS (INCLUSO ENROLLABLES), POSTIGOS(PUERTAS) Y PORTALES, BALCONES, ESCALERAS, REJAS, TABIQUES DE METAL PARA FIJAR AL SUELO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25110401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE PRODUCTOS METÁLICOS PARA USO ESTRUCTURAL A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25110501', 
                    'descripcion' => 'FABRICACIÓN DE OTRAS ESTRUCTURAS Y SUS PARTES DE METAL: PLANCHAS, VARILLAS, PERFILES, TUBOS, ÁNGULOS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25120101', 
                    'descripcion' => 'FABRICACIÓN DE TANQUES, DEPÓSITOS Y RECIPIENTES SIMILARES DE METAL, DEL TIPO HABITUALMENTE UTILIZADO PARA ALMACENAMIENTO Y ELABORACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25120201', 
                    'descripcion' => 'FABRICACIÓN DE RECIPIENTES DE METAL PARA GASES COMPRIMIDOS O LICUADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25120301', 
                    'descripcion' => 'FABRICACIÓN DE CALDERAS Y RADIADORES PARA CALEFACCIÓN CENTRAL, PARTES Y PIEZAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25120401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE TANQUES, DEPÓSITOS Y RECIPIENTES DE METAL A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25130101', 
                    'descripcion' => 'FABRICACIÓN DE GENERADORES (CALDERAS) DE VAPOR DE AGUA Y OTROS VAPORES; INSTALACIONES AUXILIARES PARA GENERADORES (CALDERAS) DE VAPOR: CONDENSADORES, ECONOMIZADORES, RECALENTADORES, RECOLECTORES Y ACUMULADORES DE VAPOR, INCLUSO DESHOLLINADORES, RECUPERADORES DE GASES SACABARROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25130201', 
                    'descripcion' => 'FABRICACIÓN DE REACTORES NUCLEARES, EXCEPTO SEPARADORES DE ISÓTOPOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25130301', 
                    'descripcion' => 'FABRICACIÓN DE PIEZAS PARA CALDERAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25130401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE GENERADORES DE VAPOR, EXCEPTO CALDERAS DE AGUA CALIENTE PARA CALEFACCIÓN CENTRAL A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25200101', 
                    'descripcion' => 'FABRICACIÓN DE ARMAS PESADAS (ARTILLERÍA, CAÑONES MÓVILES, ETCÉTERA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25200102', 
                    'descripcion' => 'FABRICACIÓN DE ARMAS PESADAS LANZACOHETES, LANZAPROYECTÍLES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25200103', 
                    'descripcion' => 'FABRICACIÓN DE TUBOS LANZATORPEDOS, AMETRALLADORAS PESADAS, ETCÉTERA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25200201', 
                    'descripcion' => 'FABRICACIÓN DE ARMAS LIGERAS (REVÓLVERES, ESCOPETAS, AMETRALLADORAS LIGERAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25200202', 
                    'descripcion' => 'FABRICACIÓN DE ARMAS LIGERAS DE FUEGO Y MUNICIONES DE CAZA, DE DEPORTE O DE PROTECCIÓN, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25200203', 
                    'descripcion' => 'FABRICACIÓN DE ARMAS QUE DISPARAN BALAS DE FOGUEO, PISTOLAS PARA LANZAR BENGALAS DE SEÑALES, PISTOLAS DE MATARIFE, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25200301', 
                    'descripcion' => 'FABRICACIÓN DE ESCOPETAS Y PISTOLAS DE AIRE Y GAS COMPRIMIDO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25200401', 
                    'descripcion' => 'FABRICACIÓN DE MUNICIONES DE GUERRA; APARATOS EXPLOSIVOS TALES COMO BOMBAS, MINAS Y TORPEDOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25200501', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE ARMAS Y MUNICIONES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25910001', 
                    'descripcion' => 'ACTIVIDADES DE FORJA, PRENSADO, ESTAMPADO Y LAMINADO DE METALES; PULVIMETALURGIA, PRODUCCIÓN DE OBJETOS DE METAL DIRECTAMENTE A PARTIR DE POLVOS DE METAL QUE SE SOMETEN A TRATAMIENTO CALORÍFICO (SINTERIZACIÓN) O DE COMPRESIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25910002', 
                    'descripcion' => 'PRODUCCIÓN DE OBJETOS METÁLICOS, MEDIANTE PULVIMETALURGIA (POLVOS DE METAL SOMETIDOS A TRATAMIENTO CALORÍFICO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25910003', 
                    'descripcion' => 'OTROS TRABAJOS DE METAL FORJADO, PRENSADO, ESTAMPADO Y LAMINADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25920101', 
                    'descripcion' => 'ACTIVIDADES DE SERVICIO DE TRATAMIENTO CALORÍFICO DE METALES, ENDURECIMIENTO DE METALES REALIZADAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25920201', 
                    'descripcion' => 'ACTIVIDADES DE SERVICIO DE REVESTIMIENTO DE METALES: ENCHAPADO, ANODIZACIÓN, COLOREADO, PLASTIFICADO, ESMALTADO, LACADO, CROMADO, ETCÉTERA, REALIZADAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25920301', 
                    'descripcion' => 'ACTIVIDADES DE SERVICIO DE LIMPIEZA DE METALES: DESBARBADO, LIMPIEZA CON CHORRO DE ARENA, PULIMENTO EN TAMBOR GIRATORIO, BRUÑIDO, PULIDO, LIMPIEZA DE METALES, REALIZADAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25920401', 
                    'descripcion' => 'ACTIVIDADES DE SERVICIO DE MAQUINADO DE METALES: TALADRADO, TORNEADO, FRESADO, EROSIÓN, ALISADO, LAPIDADO, BROCHADO, APLANADO, ASERRADO, ESMERILADO, AFILADO, SOLDADURA, EMPALME, CORTADO, GRABADO, ETCÉTERA, DE PIEZAS DE METAL REALIZADAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25931101', 
                    'descripcion' => 'FABRICACIÓN DE CUBERTERÍA DE USO DOMÉSTICO, COMO CUCHILLOS, TENEDORES, CUCHARAS, ETCÉTERA INCLUSO REVESTIDOS DE METALES PRECIOSOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25931201', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DE CUCHILLERÍA: DESTRALES, CUCHILLOS, NAVAJAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25931202', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DE CUCHILLERÍA: MAQUINILLAS DE AFEITAR Y HOJAS DE AFEITAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25931203', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DE CUCHILLERÍA: TIJERAS COMUNES Y DE PELUQUERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25931301', 
                    'descripcion' => 'FABRICACIÓN DE CUCHILLAS Y CIZALLAS PARA MÁQUINAS Y PARA APARATOS MECÁNICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25931401', 
                    'descripcion' => 'FABRICACIÓN DE MACHETES, ESPADAS, BAYONETAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25931501', 
                    'descripcion' => 'FABRICACIÓN DE ESPADAS Y ARMAS SIMILARES DE METAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25932101', 
                    'descripcion' => 'FABRICACIÓN DE HERRAMIENTAS DE MANO TALES COMO ALICATE, DESTORNILLADORES, LIMAS, LLAVES INGLESAS, MARTILLOS, OTRAS HERRAMIENTAS MANUALES Y HERRAMIENTAS DE MANO PARA CARPINTERÍA, EBANISTERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25932102', 
                    'descripcion' => 'FABRICACIÓN DE HERRAMIENTAS DE MANO TALES COMO ALICATE, DESTORNILLADORES, LIMAS, LLAVES INGLESAS, MARTILLOS, OTRAS HERRAMIENTAS MANUALES Y HERRAMIENTAS DE MANO PARA ENSAMBLADURA MECÁNICA, CHAPISTERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25932103', 
                    'descripcion' => 'FABRICACION DE HERRAMIENTAS DE MANO CON MOTOR ELECTRICO O NO ELECTRICO O DE FUNCIONAMIENTO CON AIRE COMPRIMIDO: TALADRADORES ROTATARIOS O DE PERCUSION , SIERRAS DE CADENA, LIMADORAS, MAQUINAS EQUIPADAS CON ESCOBILLAS DE ALAMBRE, MARTILLOS MECANICOS Y CORT' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25932201', 
                    'descripcion' => 'FABRICACIÓN DE SIERRAS Y HOJAS PARA SIERRAS, INCLUIDAS SIERRAS CIRCULARES Y DE CADENA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25932301', 
                    'descripcion' => 'FABRICACIÓN DE ACCESORIOS INTERCAMBIABLES PARA HERRAMIENTAS DE MANO MOTORIZADAS O NO: BROCAS, PUNZONES, FRESAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25932302', 
                    'descripcion' => 'FABRICACIÓN DE ACCESORIOS INTERCAMBIABLES PARA MÁQUINAS HERRAMIENTAS: BROCAS, PUNZONES, FRESAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25932401', 
                    'descripcion' => 'FABRICACIÓN DE HERRAMIENTAS DE HERRERÍA: MACHOS DE FORJA, YUNQUES, ETCÉTERA; MOLDES Y CAJAS DE MOLDEO (EXCEPTO LINGOTERAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25932501', 
                    'descripcion' => 'FABRICACIÓN DE CANDADOS, CERRADURAS, PASADORES, LLAVES, DUPLICACIÓN DE LLAVES, BISAGRAS Y ARTÍCULOS SIMILARES, ACCESORIOS DE FERRETERÍA PARA EDIFICIOS, MUEBLES, VEHÍCULOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25932601', 
                    'descripcion' => 'FABRICACIÓN DE HERRAMIENTAS DE MANO NO MOTORIZADAS: (AZADONES, PICOS, PALAS, ETCÉTERA) PARA USO AGRÍCOLA, CONSTRUCCIÓN, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25932701', 
                    'descripcion' => 'FABRICACIÓN DE MORDAZAS, ABRAZADERAS, ESTAMPAS Y TROQUELES DE PRENSA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25933001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE ARTÍCULOS DE CUCHILLERÍA, HERRAMIENTAS DE MANO Y ARTÍCULOS DE FERRETERÍA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25991101', 
                    'descripcion' => 'FABRICACIÓN DE RECIPIENTES METÁLICOS UTILIZADOS PARA EL ENVASE O TRANSPORTE DE MERCANCÍAS: BARRILES, LATAS, TAMBORES, CUBOS, CAJAS, TARROS, INCLUSO TAPAS CORONA (CIERRES METÁLICOS) Y LATAS PARA PRODUCTOS ALIMENTICIOS, TUBOS Y CAJAS PLEGABLES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25991201', 
                    'descripcion' => 'FABRICACIÓN DE CABLES DE METAL CON O SIN AISLAMIENTO QUE NO SE PUEDEN UTILIZAR COMO CONDUCTORES DE ELECTRICIDAD, TRENZAS DE METAL, ALAMBRE Y ARTÍCULOS SIMILARES DE HIERRO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25991202', 
                    'descripcion' => 'FABRICACIÓN DE CABLES DE METAL CON O SIN AISLAMIENTO QUE NO SE PUEDEN UTILIZAR COMO CONDUCTORES DE ELECTRICIDAD, TRENZAS DE METAL, ALAMBRE Y ARTÍCULOS SIMILARES DE ACERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25991203', 
                    'descripcion' => 'FABRICACIÓN DE CABLES DE METAL CON O SIN AISLAMIENTO QUE NO SE PUEDEN UTILIZAR COMO CONDUCTORES DE ELECTRICIDAD, TRENZAS DE METAL, ALAMBRE Y ARTÍCULOS SIMILARES DE ALUMINIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25991204', 
                    'descripcion' => 'FABRICACIÓN DE CABLES DE METAL CON O SIN AISLAMIENTO QUE NO SE PUEDEN UTILIZAR COMO CONDUCTORES DE ELECTRICIDAD, TRENZAS DE METAL, ALAMBRE Y ARTÍCULOS SIMILARES DE COBRE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25991301', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE ALAMBRE: ALAMBRE DE PÚAS, CERCAS DE ALAMBRE, REJILLAS, REDES, TELAS METÁLICAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25991401', 
                    'descripcion' => 'FABRICACIÓN DE MUELLES (EXCEPTO MUELLES PARA RELOJES): DE BALLESTA, HELICOIDALES, BARRAS DE TORSIÓN, BALLESTAS PARA MUELLES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25991501', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS DE TORTILLERÍA: TORNILLOS, TUERCAS, PERNOS Y ARTÍCULOS CON ROSCA SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25991601', 
                    'descripcion' => 'FABRICACIÓN DE SUJETADORES HECHOS DE METAL: CLAVOS, ALFILERES, TACHUELAS, REMACHES, ABRAZADERAS, ARANDELAS Y ARTÍCULOS SIN ROSCAS SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25991701', 
                    'descripcion' => 'FABRICACIÓN DE CADENAS, EXCEPTO LAS DE TRANSMISIÓN DE ENERGÍA (MECÁNICA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25991801', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS DE TORNILLERÍA, SUJETADORES Y OTROS ARTÍCULOS HECHOS DE ALAMBRE O METAL: RUEDAS ORIENTABLES, PERCHAS, GANCHOS ( PARA SOMBREROS, SOPORTES DE REPISAS), ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25992101', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE METAL DE USO DOMESTICO: VAJILLA DE MESA Y DE COCINA, SEAN O NO DE METALES COMUNES Y ENCHAPADOS O NO CON METALES PRECIOSOS: PLATOS, TAZAS, ETCÉTERA; SERVICIO DE MESA: BOLES, BANDEJAS, ETCÉTERA; BATERÍAS DE COCINA: CACEROLAS, RECIPIENTES PARA HERVIR AGUA, ETCÉTERA, CAZOS (CAZUELAS), SARTENES Y OTROS UTENSILIOS NO ELÉCTRICOS PARA USAR EN LA MESA O EN LA COCINA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25992201', 
                    'descripcion' => 'FABRICACIÓN DE PEQUEÑOS APARATOS Y ACCESORIOS MANUALES DE COCINA ACCIONADOS A MANO PARA PREPARAR, ACONDICIONAR O SERVIR ALIMENTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25992301', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS SANITARIOS DE METAL, BAÑERAS, PILAS (FUENTES), LAVABOS Y ARTÍCULOS SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25993001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE OTROS PRODUCTOS ELABORADOS DE METAL N.C.P A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25999101', 
                    'descripcion' => 'FABRICACIÓN DE ACCESORIOS PARA VÍAS DE FERROCARRIL O TRANVÍA POR EJEMPLO: CARRILES ENSAMBLADOS, PLATAFORMAS GIRATORIAS, POTROS DE CONTENCIÓN, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25999201', 
                    'descripcion' => 'FABRICACIÓN DE HÉLICES PARA EMBARCACIONES Y SUS PALAS, ANCLAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25999301', 
                    'descripcion' => 'FABRICACIÓN DE CAJAS FUERTES O DE SEGURIDAD, CAJAS DE CAUDALES, PÓRTICOS, PUERTAS BLINDADAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25999401', 
                    'descripcion' => 'FABRICACIÓN DE IMANES METÁLICOS PERMANENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25999502', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE METAL PARA OFICINA, EXCEPTO MUEBLES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25999601', 
                    'descripcion' => 'FABRICACIÓN DE SEÑALES METÁLICAS (LETREROS NO ELÉCTRICOS), MARCOS DE METAL PARA CUADROS, PLACAS DE METAL E INSIGNIAS MILITARES; ARTÍCULOS SIMILARES DE METAL (EXCEPTO METALES PRECIOSOS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25999901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DE METAL: CASCOS DE SEGURIDAD, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C25999902', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DE METAL: CIERRES, HEBILLAS, CORCHETES; CAMPANAS, ALMOHADILLAS METÁLICAS PARA FREGAR (ESTROPAJOS); TERMOS Y OTROS RECIPIENTES HERMÉTICOS DE METAL: JARROS Y BOTELLAS DE METAL; RULOS PARA EL PELO, EMPUÑADURAS Y SOPORTES PARA PARAGUAS Y PEINES DE METAL, BOLSAS DE PAPEL ALUMINIO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26101101', 
                    'descripcion' => 'FABRICACIÓN DE SEMICONDUCTORES, CONDENSADORES ELECTRÓNICOS, MICROPROCESADORES, TABLEROS DE CIRCUITOS IMPRESOS Y TABLEROS SIN IMPRIMIR, INCLUIDO LA CARGA DE COMPONENTES EN TABLEROS DE CIRCUITOS IMPRESOS Y OTROS COMPONENTES PARA APLICACIONES ELECTRÓNICAS DE ELECTRODOMÉSTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26101201', 
                    'descripcion' => 'FABRICACIÓN DE RESISTORES ELECTRÓNICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26101301', 
                    'descripcion' => 'FABRICACIÓN DE TUBOS ELECTRÓNICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26102001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE COMPONENTES Y TABLEROS ELECTRÓNICOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26109101', 
                    'descripcion' => 'FABRICACIÓN DE CIRCUITOS INTEGRADOS (ANÁLOGOS, DIGITALES O HÍBRIDOS), TARJETAS INTELIGENTES (TARJETAS BANCARIAS, DE IDENTIFICACIÓN Y ACCESO, FIDELIZACIÓN, ETCÉTERA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26109201', 
                    'descripcion' => 'FABRICACIÓN DE DIODOS, TRANSISTORES Y DISPOSITIVOS SEMICONDUCTORES SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26109301', 
                    'descripcion' => 'FABRICACIÓN DE INDUCTORES (AUTOINDUCTORES, BOBINAS, TRANSFORMADORES) DEL TIPO DE LOS UTILIZADOS COMO COMPONENTES ELECTRÓNICO; CRISTALES Y JUEGOS DE CRISTALES ELECTRÓNICOS; PLAQUETAS U OBLEAS, DE SEMICONDUCTORES, ACABADOS O SEMIACABADOS; SOLENOIDES, CONMUTADORES Y TRANSDUCTORES PARA APLICACIONES ELÉCTRICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26109401', 
                    'descripcion' => 'FABRICACIÓN DE TARJETAS DE INTERFAZ (DE SONIDO, VIDEO, CONTROL, RED, MÓDEMS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26109501', 
                    'descripcion' => 'FABRICACIÓN DE COMPONENTES DE PANTALLAS (PLASMA, POLÍMEROS, CRISTAL LÍQUIDO LCD) Y DIODOS EMISORES DE LUZ (LED)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26109901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS PRODUCTOS ELECTRÓNICOS: CABLES DE IMPRESORA, MONITOR, CABLES USB, CONECTORES ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26200101', 
                    'descripcion' => 'FABRICACIÓN DE ORDENADORES (COMPUTADORAS) CENTRALES, MICROCOMPUTADORAS; DE ESCRITORIO, PORTÁTILES (LAPTOPS, NOTEBOOKS); ORDENADORES DE MANO (ASISTENTES DIGITALES PERSONALES), SERVIDORES INFORMÁTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26200201', 
                    'descripcion' => 'FABRICACIÓN DE UNIDADES DE DISCO MAGNÉTICO, UNIDADES DE USB: MP3, MP4, PEN DRIVES Y OTROS DISPOSITIVOS DE ALMACENAMIENTO; UNIDADES DE DISCO ÓPTICO (CD-RW, CD-ROM, DVD-ROM, DVD-RW)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26200301', 
                    'descripcion' => 'FABRICACIÓN DE IMPRESORAS; MONITORES, TECLADOS, TODO TIPO DE RATONES, PALANCAS DE MANDO Y BOLAS RODANTES, EQUIPO DE OFICINA MULTIFUNCIONES COMO COMBINACIONES DE FAX-ESCÁNER-COPIADORA, ESCÁNERES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26200401', 
                    'descripcion' => 'FABRICACIÓN DE TERMINALES INFORMÁTICAS ESPECIALIZADAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26200501', 
                    'descripcion' => 'FABRICACIÓN DE TERMINALES COMO CAJEROS AUTOMÁTICOS (ATM); TERMINALES DE PUNTOS DE VENTA, NO ACCIONADOS MECÁNICAMENTE, MONEDEROS AUTOMÁTICOS, LECTORES DE CÓDIGOS DE BARRA; LECTORES DE TARJETAS INTELIGENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26200601', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE ORDENADORES Y EQUIPO PERIFÉRICO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26200901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS EQUIPOS INFORMÁTICOS: CASCOS DE REALIDAD VIRTUAL; PROYECTORES INFORMÁTICOS (PROYECTORES DE VÍDEO) ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26300101', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS PARA LA CONMUTACIÓN Y TRANSMISIÓN DE DATOS: CENTRALES TELEFÓNICAS - PBX; MÓDEMS, BRIDGES, ROUTERS, GATEWAYS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26300201', 
                    'descripcion' => 'FABRICACIÓN DE TELÉFONOS INALÁMBRICOS; EQUIPOS TELEFÓNICOS Y DE FAX, INCLUIDOS LOS CONTESTADORES AUTOMÁTICOS, EQUIPO MÓVIL DE COMUNICACIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26300301', 
                    'descripcion' => 'FABRICACIÓN DE TELÉFONOS CELULARES, MENSÁFONOS, LOCALIZADORES (BUSCAPERSONAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26300401', 
                    'descripcion' => 'FABRICACIÓN DE TRANSMISORES DE RADIO Y TELEVISIÓN, EQUIPOS DE TELEVISIÓN POR CABLE (DECODIFICADORES), DISPOSITIVOS DE INFRARROJOS (CONTROL REMOTO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26300402', 
                    'descripcion' => 'FABRICACIÓN DE CÁMARAS DE TELEVISIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26300501', 
                    'descripcion' => 'FABRICACIÓN DE SISTEMAS DE ALARMA CONTRA INCENDIO Y ROBO, QUE TRANSMITEN SEÑALES A UN CENTRO DE CONTROL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26300601', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE EQUIPO DE COMUNICACIONES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26300901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS EQUIPOS DE TELECOMUNICACIONES DIVERSOS: MANIPULADORES MORSE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26300902', 
                    'descripcion' => 'FABRICACIÓN DE OTROS EQUIPOS DE TELECOMUNICACIONES DIVERSOS: GRABADORES DE TIPO MORSE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26300903', 
                    'descripcion' => 'FABRICACIÓN DE OTROS EQUIPOS DE TELECOMUNICACIONES DIVERSOS: TRANSMISORES TELEGRÁFICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26300904', 
                    'descripcion' => 'FABRICACIÓN DE OTROS EQUIPOS DE TELECOMUNICACIONES DIVERSOS: ANTENAS DE TRANSMISIÓN Y RECEPCIÓN, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26300905', 
                    'descripcion' => 'FABRICACIÓN DE OTROS EQUIPOS DE TELECOMUNICACIONES DIVERSOS: RECEPTORES TELEGRÁFICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26300906', 
                    'descripcion' => 'FABRICACIÓN DE OTROS EQUIPOS DE TELECOMUNICACIONES DIVERSOS: APARATOS PARA TELEFONÍA Y TELEGRAFÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26400101', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO DE GRABACIÓN Y REPRODUCCIÓN DE VIDEO, INCLUSO CÁMARAS DE VIDEO DE TIPO FAMILIAR; REPRODUCTORES DE DVD' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26400201', 
                    'descripcion' => 'FABRICACIÓN DE TELEVISORES, INCLUSO MONITORES Y PANTALLAS DE TELEVISIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26400301', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPOS DE SONIDO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26400302', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO DE GRABACIÓN Y REPRODUCCIÓN DE SONIDO; REPRODUCTORES DE CD; EQUIPOS ESTEREOFÓNICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26400303', 
                    'descripcion' => 'FABRICACIÓN DE RECEPTORES DE RADIO, INCLUSO CON DISPOSITIVOS DE GRABACIÓN O REPRODUCCIÓN DE SONIDO O CON UN RELOJ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26400304', 
                    'descripcion' => 'FABRICACIÓN DE RECEPTORES DE RADIOTELEFONÍA O RADIOTELEGRAFÍA, INCLUSO CON DISPOSITIVOS DE GRABACIÓN O REPRODUCCIÓN DE SONIDO O CON UN RELOJ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26400401', 
                    'descripcion' => 'FABRICACIÓN DE AMPLIFICADORES PARA INSTRUMENTOS MUSICALES Y SISTEMAS DE MEGAFONÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26400402', 
                    'descripcion' => 'FABRICACIÓN DE MICRÓFONOS; AUDÍFONOS (PARA RADIOS, EQUIPOS ESTEREOFÓNICOS, ORDENADORES); PARLANTES, SISTEMAS DE ALTAVOCES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26400501', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE APARATOS ELECTRÓNICOS DE CONSUMO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26400601', 
                    'descripcion' => 'FABRICACIÓN DE PIEZAS Y PARTES ESPECIALES PARA LOS APARATOS RECEPTORES DE RADIO Y TELEVISIÓN Y PRODUCTOS CONEXOS: FONOCAPTORES, PLATOS PARA GIRADISCOS, ANTENAS,  BRAZOS Y CABEZAS ACÚSTICAS DE FONOCAPTORES, REFLECTORES DE ANTENA ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26400701', 
                    'descripcion' => 'FABRICACIÓN DE EMISORES IJOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26400702', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS DE RADIOTELEFONÍA PARA EQUIPO DE TRANSPORTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26400703', 
                    'descripcion' => 'FABRICACIÓN DE EMISORES - RECEPTORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26400704', 
                    'descripcion' => 'FABRICACIÓN DE RADIOTELÉFONOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26400705', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS DE RADIO TELEGRÁFICOS DEL TIPO FACSIMILE Y OTROS RESPONDEDORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26400801', 
                    'descripcion' => 'FABRICACIÓN DE TUBOS DE IMAGEN PARA CÁMARAS DE TELEVISIÓN Y PARA RECEPTORES DE TELEVISIÓN, CONVERTIDORES E INTENSIFICADORES DE IMAGEN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26400802', 
                    'descripcion' => 'FABRICACIÓN DE TUBOS DE MICROONDAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26400803', 
                    'descripcion' => 'FABRICACIÓN DE TUBOS O VÁLVULAS TERMIÓNICOS, DE CÁTODO FRIO O FOTO CATÓDICOS, TUBOS O VÁLVULAS RECEPTORES O AMPLIFICADORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26400901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS APARATOS ELECTRÓNICOS DIVERSOS: APARATOS DE KARAOKE; CONSOLAS DE VIDEOJUEGOS, ROCOLAS (JUKEBOXES), ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511101', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS PARA MOTORES DE AERONAVES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511201', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO DE PRUEBA DE EMISIONES DE VEHÍCULOS AUTOMOTORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511301', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS METEOROLÓGICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511302', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS GEOFÍSICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511303', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS DE PROSPECCIÓN, NIVELAR, AGRIMENSURA (TEODOLITOS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511304', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS HIDROLÓGICOS,  OCEANOGRÁFICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511305', 
                    'descripcion' => 'FABRICACIÓN DE SISMÓMETROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511306', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS DE GEODESIA, PILOTES AUTOMÁTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511307', 
                    'descripcion' => 'FABRICACIÓN DE SONDAS ULTRASÓNICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511401', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPOS DE PRUEBAS E INSPECCIÓN DE PROPIEDADES FÍSICAS O QUÍMICAS; POLÍGRAFOS (MÁQUINAS DETECTORAS DE MENTIRAS); INSTRUMENTOS DE ANÁLISIS DE LABORATORIO (EQUIPOS DE ANÁLISIS DE SANGRE)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511501', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS PARA MEDICIÓN Y PRUEBAS DE ELECTRICIDAD Y SEÑALES ELÉCTRICAS (INCLUIDOS LOS DESTINADOS A ACTIVIDADES DE TELECOMUNICACIONES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511601', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS DE DETECCIÓN Y VIGILANCIA DE RADIACIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511701', 
                    'descripcion' => 'FABRICACIÓN DE HIDRÓMETROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511702', 
                    'descripcion' => 'FABRICACIÓN DE TERMÓMETROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511703', 
                    'descripcion' => 'FABRICACIÓN DE BARÓMETROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511704', 
                    'descripcion' => 'FABRICACIÓN DE CUENTARREVOLUCIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511705', 
                    'descripcion' => 'FABRICACIÓN DE TAXÍMETROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511706', 
                    'descripcion' => 'FABRICACIÓN DE PODÓMETROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511707', 
                    'descripcion' => 'FABRICACIÓN DE TACÓMETROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511708', 
                    'descripcion' => 'FABRICACIÓN DE BANCOS DE PRUEBA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511709', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS PARA VERIFICAR RELOJES O PIEZAS DE RELOJES EXCEPTO EQUIPO DE CONTROL DE PROCESOS INDUSTRIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26511801', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS Y APARATOS DE MEDICIÓN Y REGULACIÓN CONSTANTE Y AUTOMÁTICA DE VARIABLES COMO: TEMPERATURA, PRESIÓN, VISCOSIDAD, ETC., DE MATERIALES O PRODUCTOS DURANTE SU FABRICACIÓN U OTRO TIPO DE ELABORACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26512101', 
                    'descripcion' => 'FABRICACIÓN DE TERMÓMETROS DE BOLA DE VIDRIO RELLENA CON LÍQUIDO Y DE TERMÓMETROS BIMETÁLICOS (EXCEPTO TERMÓMETROS DE USO MÉDICO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26512201', 
                    'descripcion' => 'FABRICACIÓN DE MEDIDORES DE FLUJÓMETRO Y DISPOSITIVOS CONTADORES, MANÓMETROS, CONTADORES TOTALIZADORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26512202', 
                    'descripcion' => 'FABRICACIÓN DE CONTADORES DE CONSUMO DE AGUA, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26512203', 
                    'descripcion' => 'FABRICACIÓN DE CONTADORES DE GAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26512301', 
                    'descripcion' => 'FABRICACIÓN DE BALANZAS Y BÁSCULAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26512401', 
                    'descripcion' => 'FABRICACIÓN DE MICROSCOPIOS ELECTRÓNICOS Y PROTÓNICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26512501', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS DE DIBUJO, TRAZADO O CÁLCULO MATEMÁTICO, INCLUSO INSTRUMENTOS DE MANO PARA MEDIR LONGITUDES (CINTAS MÉTRICAS, MICRÓMETROS, CALIBRADORES Y CALIBRES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26512601', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS Y APARATOS PARA EFECTUAR ANÁLISIS FÍSICOS O QUÍMICOS: POLARÍMETROS, REFRACTÓMETROS, COLORÍMETROS, APARATOS DE ORSAT PARA EL ANÁLISIS DE GASES, MEDIDORES DEL PH, VISCOSÍMETROS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26512701', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS Y APARATOS DE ENSAYO PARA DETERMINAR LAS PROPIEDADES FÍSICAS DE MATERIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26512702', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS PARA DETERMINAR LA DUREZA Y OTRAS PROPIEDADES DE LOS METALES, LA RESISTENCIA DE PRODUCTOS TEXTILES, PROPIEDADES FÍSICAS DEL PAPEL, PLÁSTICO, LINÓLEO, CAUCHO, MADERA Y HORMIGÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26512801', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS PARA MEDIR Y VERIFICAR MAGNITUDES ELÉCTRICAS, CON O SIN DISPOSITIVO REGISTRADOR: OSCILOSCOPIOS, ESPECTROSCOPIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26512802', 
                    'descripcion' => 'FABRICACIÓN DE OSCILOSCOPIOS, ESPECTROSCOPIOS E INSTRUMENTOS PARA VERIFICAR LA CORRIENTE, EL VOLTAJE O LA RESISTENCIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26512901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS EQUIPOS PARA MEDICIÓN Y VERIFICACIÓN: REGISTRADORES DE VUELO (CAJA NEGRA), ESPECTRÓMETROS, MEDIDORES DE NEUMÁTICOS, INCUBADORAS Y APARATOS DE LABORATORIO SIMILARES PARA MEDICIONES, PRUEBAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26513001', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS Y APARATOS PARA MEDIR Y VERIFICAR EL FLUJO, NIVEL, PRESIÓN U OTRAS  VARIABLES DE LÍQUIDOS O GASES (MEDIDORES DE FLUJO, INDICADORES DE NIVEL, MANÓMETROS, CALORÍMETROS, ETC.)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26513002', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO DE CONTROL DE PROCESOS INDUSTRIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26513101', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO AERONÁUTICO DE BÚSQUEDA, DETECCIÓN, INCLUIDAS SONARES, SONOBOYAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26513102', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO NÁUTICO DE BÚSQUEDA, DETECCIÓN Y NAVEGACIÓN, INCLUIDAS SONARES, SONOBOYAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26513103', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPOS DE RADAR Y FABRICACIÓN DE DISPOSITIVOS GPS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26513201', 
                    'descripcion' => 'FABRICACIÓN DE DETECTORES DE MOVIMIENTO; DETECTORES DE MINAS, GENERADORES DE IMPULSOS (SEÑALES); DETECTORES DE METAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26513901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS DISPOSITIVOS: DISPOSITIVOS DE CLIMATIZACIÓN Y DISPOSITIVOS AUTOMÁTICOS DE CONTROL PARA APARATOS DE USO DOMÉSTICO, LIMITADORES HIDRÓNICOS, DISPOSITIVOS DE CONTROL DE LA LLAMA Y DEL QUEMADOR, CONTROLES MEDIOAMBIENTALES Y CONTROLES AUTOMÁTICOS PARA DIVERSOS APARATOS, INSTRUMENTOS DE MEDIDA DE LA HUMEDAD (HIGROSTATOS), ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26514001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE EQUIPOS DE MEDICIÓN, PRUEBA, NAVEGACIÓN, CONTROL Y DE RELOJES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26520101', 
                    'descripcion' => 'FABRICACIÓN DE RELOJES DE TODO TIPO, INCLUIDO RELOJES PARA PANELES DE INSTRUMENTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26520201', 
                    'descripcion' => 'FABRICACIÓN DE CAJAS DE RELOJES, INCLUIDAS CAJAS DE METALES PRECIOSOS Y SUS PARTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26520301', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS PARA REGISTRAR LA HORA DEL DÍA Y APARATOS PARA MEDIR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26520302', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS PARA REGISTRAR O INDICAR DE OTRO MODO INTERVALOS DE TIEMPO MEDIANTE UN MECANISMO DE RELOJERÍA O UN MOTOR SINCRÓNICO COMO: PARQUÍMETROS, RELOJES DE CONTROL DE ENTRADA, MARCADORES DE FECHA Y HORA, CRONÓMETROS DE TIEMPOS DE FABRICACIÓN, CONMUTADORES HORARIOS Y OTROS DISPOSITIVOS DE PUESTA EN MARCHA CON MECANISMO DE RELOJERÍA O CON MOTOR SINCRÓNICO (CERRADURAS TEMPORIZADAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26520401', 
                    'descripcion' => 'FABRICACIÓN DE PIEZAS SUELTAS PARA RELOJES: MUELLES, RUBÍES, ESFERAS, CHAPAS, PUENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26520402', 
                    'descripcion' => 'FABRICACIÓN DE PIEZAS PARA RELOJES, MECANISMOS DE RELOJERÍA Y OTRAS PIEZAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26520501', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE RELOJES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26520601', 
                    'descripcion' => 'FABRICACIÓN DE CORREAS , CINTAS Y PULSERAS DE METAL PARA RELOJES DE BOLSILLO Y PULSERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26520602', 
                    'descripcion' => 'FABRICACIÓN DE CORREAS , CINTAS Y PULSERAS DE METALES PRECIOSOS PARA RELOJES DE BOLSILLO Y PULSERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26600101', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS DE IRRADIACIÓN SIMILARES (INDUSTRIALES O DE USO DIAGNÓSTICO, TERAPÉUTICO, CIENTÍFICO O DE INVESTIGACIÓN): EQUIPO DE RAYOS BETA, DE RAYOS GAMMA, DE RAYOS X Y OTROS TIPOS DE EQUIPO DE RADIACIÓN; ESCÁNERES DE TOMOGRAFÍA COMPUTADORIZADA (CT) Y POR EMISIÓN DE POSITRONES (PET); EQUIPO DE IRRADIACIÓN DE ALIMENTOS Y LECHE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26600201', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO MÉDICO PARA ELECTRODIAGNÓSTICO: EQUIPO DE TOMOGRAFÍA POR RESONANCIA MAGNÉTICA MRI, EQUIPO MÉDICO DE ULTRASONIDO, ELECTROCARDIÓGRAFOS, EQUIPO ELECTRÓNICO DE ENDOSCOPIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26600301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE EQUIPO DE IRRADIACIÓN, Y EQUIPO ELECTRÓNICO DE USO MÉDICO Y TERAPÉUTICO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26600901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS EQUIPOS ELECTROMÉDICOS: MARCAPASOS, AUDÍFONOS, EQUIPO MÉDICO DE LÁSER, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26701101', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPOS DE POSICIONAMIENTO ÓPTICOS; REVESTIMIENTO, PULIDO Y MONTADURA DE LENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26701102', 
                    'descripcion' => 'FABRICACIÓN DE ESPEJOS ÓPTICOS, LENTES, PRISMAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26701201', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS DE AUMENTO ÓPTICOS; DISPOSITIVOS ÓPTICOS DE PUNTERÍA (MIRAS PARA ARMAS); INSTRUMENTOS ÓPTICOS DE PRECISIÓN PARA MECÁNICOS; COMPARADORES ÓPTICOS; ENSAMBLADOS DE LÁSER' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26701202', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS DE AUMENTO ÓPTICOS; DISPOSITIVOS ÓPTICOS DE PUNTERÍA (MIRAS PARA ARMAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26701203', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS DE AUMENTO ÓPTICOS; ENSAMBLADOS DE LÁSER' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26701204', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS DE AUMENTO ÓPTICOS; INSTRUMENTOS ÓPTICOS DE PRECISIÓN PARA MECÁNICOS; LUPAS, CRISTALES DE AUMENTO PARA USO MANUAL, ESPEJOS DE VIDRIO, MIRILLAS DE PUERTAS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26701301', 
                    'descripcion' => 'FABRICACIÓN DE MICROSCOPIOS ÓPTICOS, TELESCOPIOS Y BINOCULARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26701302', 
                    'descripcion' => 'FABRICACIÓN DE MICROSCOPIOS ÓPTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26701303', 
                    'descripcion' => 'FABRICACIÓN DE MICROSCOPIOS PARA MICROFOTOGRAFÍA Y MICROPROYECCIÓN, TELESCOPIOS Y BINOCULARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26701401', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS ÓPTICOS COMO: GEMELOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26701402', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS ÓPTICOS COMO: CATALEJOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26701501', 
                    'descripcion' => 'FABRICACIÓN DE ELEMENTOS ÓPTICOS DE VIDRIO O DE CUALQUIER OTRO MATERIAL (CUARZO, ESPATO, FLÚOR, PLÁSTICO O METAL)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26701601', 
                    'descripcion' => 'FABRICACIÓN DE ELEMENTOS ÓPTICOS MONTADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26702101', 
                    'descripcion' => 'FABRICACIÓN DE CÁMARAS DE PELÍCULA Y CÁMARAS DIGITALES, PARA TODO USO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26702102', 
                    'descripcion' => 'FABRICACIÓN DE CÁMARAS DE PELÍCULA Y CÁMARAS DIGITALES, SUBACUÁTICAS Y AÉREAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26702201', 
                    'descripcion' => 'FABRICACIÓN DE PROYECTORES DE PELÍCULAS Y DIAPOSITIVAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26702202', 
                    'descripcion' => 'FABRICACIÓN DE PROYECTORES, RETROPROYECTORES DE TRANSPARENCIAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26702301', 
                    'descripcion' => 'FABRICACIÓN DE DISPOSITIVOS E INSTRUMENTOS ÓPTICOS DE MEDICIÓN Y VERIFICACIÓN (EQUIPOS DE CONTROL DE TIRO, FOTÓMETROS Y TELÉMETROS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26702401', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS Y EQUIPO PARA LABORATORIO FOTOGRÁFICO (INCLUSO CINEMATOGRAFÍA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26702501', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS PARA LA PROYECCIÓN DEL DISEÑO DE CIRCUITOS SOBRE MATERIALES SEMICONDUCTORES SENSIBILIZADOS Y PANTALLAS DE PROTECCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26703001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE INSTRUMENTOS ÓPTICOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26703002', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE INSTRUMENTOS Y EQUIPO FOTOGRÁFICOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26800101', 
                    'descripcion' => 'FABRICACIÓN DE CINTAS, CASSETTES, DISQUETES, TARJETAS CON BANDAS MAGNÉTICAS, SOPORTES PARA DISCO DURO VÍRGENES (EN BLANCO) DE: SONIDO, VIDEO Y DATOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26800201', 
                    'descripcion' => 'FABRICACIÓN DE DISCOS ÓPTICOS VÍRGENES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C26800301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE SOPORTES MAGNÉTICOS Y ÓPTICOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27101101', 
                    'descripcion' => 'FABRICACIÓN DE TRANSFORMADORES DE DISTRIBUCIÓN, PARA SOLDADURA CON ARCO ELÉCTRICO, DE SUBESTACIÓN PARA LA DISTRIBUCIÓN DE ENERGÍA ELÉCTRICA, DE REACTANCIAS (ES DECIR, TRANSFORMADORES) PARA LÁMPARAS FLUORESCENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27101201', 
                    'descripcion' => 'FABRICACIÓN DE MOTORES ELÉCTRICOS (EXCEPTO LOS MOTORES DE ARRANQUE PARA MOTORES DE COMBUSTIÓN INTERNA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27101202', 
                    'descripcion' => 'FABRICACIÓN DE MOTORES ELÉCTRICOS (EXCEPTO LOS MOTORES DE ARRANQUE PARA MOTORES DE COMBUSTIÓN INTERNA)DE CORRIENTE CONTINUA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27101301', 
                    'descripcion' => 'FABRICACIÓN DE GENERADORES DE FUERZA (EXCEPTO LOS ALTERNADORES CARGADOS POR BATERÍAS PARA MOTORES DE COMBUSTIÓN INTERNA); MOTORES GENERADORES (EXCEPTO TURBOGENERADORES); GENERADORES DE IMPULSIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27101302', 
                    'descripcion' => 'FABRICACIÓN DE GRUPOS ELECTRÓGENOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27101401', 
                    'descripcion' => 'FABRICACIÓN DE REGULADORES DEL VOLTAJE DE TRANSMISIÓN Y DISTRIBUCIÓN; REBOBINADO DE INDUCIDOS EN FÁBRICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27101501', 
                    'descripcion' => 'FABRICACIÓN DE PARTES DE: GENERADORES, MOTORES Y TRANSFORMADORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27101601', 
                    'descripcion' => 'FABRICACIÓN DE COVERTIDORES ROTATORIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27102101', 
                    'descripcion' => 'FABRICACIÓN DE DISYUNTORES DE CIRCUITOS ELÉCTRICOS; LIMITADORES DE SOBRETENSIÓN (PARA VOLTAJES DE DISTRIBUCIÓN); FUSIBLES ELÉCTRICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27102201', 
                    'descripcion' => 'FABRICACIÓN DE PANELES DE CONTROL PARA LA DISTRIBUCIÓN DE ENERGÍA ELÉCTRICA; CONDUCTOS PARA CUADROS DE DISTRIBUCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27102301', 
                    'descripcion' => 'FABRICACIÓN DE RELÉS ELÉCTRICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27102401', 
                    'descripcion' => 'FABRICACIÓN DE CONMUTADORES (EXCEPTO LOS DE PULSADOR, DE RESORTE, SOLENOIDALES, OSCILANTES), EQUIPOS DE CONMUTACIÓN, PORTALÁMPARAS, CLAVIJAS, TERMINALES Y OTROS CONECTORES ELÉCTRICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27103001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE APARATOS DE DISTRIBUCIÓN Y CONTROL DE LA ENERGÍA ELÉCTRICA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27103002', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE MOTORES, GENERADORES, TRANSFORMADORES ELÉCTRICOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27200101', 
                    'descripcion' => 'FABRICACIÓN DE PILAS Y BATERÍAS PRIMARIAS: PILAS DE DIÓXIDO DE MANGANESO, DIÓXIDO DE MERCURIO, ÓXIDO DE PLATA, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27200102', 
                    'descripcion' => 'FABRICACIÓN DE PILAS Y BATERÍAS PRIMARIAS: PLOMO-ÁCIDO, NÍQUEL-CADMIO, NÍQUEL E HIDRURO METÁLICO, LITIO, PILAS SECAS Y HÚMEDAS, ETCÉTERA (BATERÍAS PARA AUTOMOTORES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27200201', 
                    'descripcion' => 'FABRICACIÓN DE ACUMULADORES ELÉCTRICOS Y PARTES DE ACUMULADORES, SEPARADORES, CONTENEDORES, TAPAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27200301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE PILAS, BATERÍAS Y ACUMULADORES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27310101', 
                    'descripcion' => 'FABRICACIÓN DE CABLES DE FIBRA ÓPTICA PARA LA TRANSMISIÓN DE DATOS O LA TRANSMISIÓN DE IMÁGENES EN DIRECTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27310201', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE CABLES DE FIBRA ÓPTICA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27310301', 
                    'descripcion' => 'FABRICACIÓN DE FIBRAS ÓPTICAS Y CABLES DE FIBRAS ÓPTICAS NO RECUBIERTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27310401', 
                    'descripcion' => 'FABRICACIÓN DE PLACAS DE METAL AISLANTES (UTILIZADAS EN MÁQUINAS DE GRAN POTENCIA O EQUIPO DE CONTROL)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27320101', 
                    'descripcion' => 'FABRICACIÓN DE HILOS Y CABLES AISLADOS DE ACERO, COBRE, ALUMINIO Y OTROS JUEGOS DE CABLES ELÉCTRICOS AISLADOS Y ENCHUFE. ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27320201', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE OTROS HILOS Y CABLES ELÉCTRICOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27320301', 
                    'descripcion' => 'FABRICACIÓN DE JUEGOS DE CABLES, INCLUSO DE ENCENDIDO PARA MOTORES DE AERONAVES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27320302', 
                    'descripcion' => 'FABRICACIÓN DE JUEGOS DE CABLES, INCLUSO DE ENCENDIDO PARA MOTORES DE EMBARCACIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27320303', 
                    'descripcion' => 'FABRICACIÓN DE JUEGOS DE CABLES, INCLUSO DE ENCENDIDO PARA MOTORES DE VEHÍCULOS O PARA OTRO TIPO DE MAQUINARIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27330101', 
                    'descripcion' => 'FABRICACIÓN DE BARRAS COLECTORAS Y OTROS CONDUCTORES ELÉCTRICOS (EXCEPTO DEL TIPO DE LOS UTILIZADOS EN CONMUTADORES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27330201', 
                    'descripcion' => 'FABRICACIÓN DE INTERRUPTORES DE CIRCUITO POR FALTA DE CONEXIÓN A TIERRA (GFCI)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27330301', 
                    'descripcion' => 'FABRICACIÓN DE PORTALÁMPARAS, PARARRAYOS, CONMUTADORES (DE PRESIÓN, DE BOTÓN, DE RESORTE, OSCILANTES), ENCHUFES Y TOMAS DE CORRIENTE, CAJAS PARA CABLEADO (DE CONEXIONES, DE TOMA DE CORRIENTE, DE CONMUTACIÓN)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27330401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE DISPOSITIVOS DE CABLEADO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27330901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS DISPOSITIVOS DE CABLEADO: DISPOSITIVOS DE CABLEADO DE PLÁSTICO NO PORTADORES DE CORRIENTE, COMO CAJAS DE CONEXIONES, CHAPAS FRONTALES Y ARTÍCULOS SIMILARES, ACCESORIOS DE PLÁSTICO PARA TENDIDOS AÉREOS, DISPOSITIVOS PARA POSTES Y LÍNEAS DE TRANSMISIÓN, CONDUCTOS Y ACCESORIOS ELÉCTRICOS (CANALETAS), ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27400101', 
                    'descripcion' => 'FABRICACIÓN DE LÁMPARAS, TUBOS Y BOMBILLAS DE DESCARGA DE MESA, DE PIE, CANDELABROS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27400102', 
                    'descripcion' => 'FABRICACIÓN DE LÁMPARAS DE ARCO, INCANDESCENTES, FLUORESCENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27400103', 
                    'descripcion' => 'FABRICACIÓN DE LÁMPARAS DE DESTELLOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27400104', 
                    'descripcion' => 'FABRICACIÓN DE LÁMPARAS DE RAYOS ULTRAVIOLETAS, DE RAYOS INFRARROJOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27400201', 
                    'descripcion' => 'FABRICACIÓN DE LÁMPARAS DE TECHO, ARAÑAS COLGANTES, LÁMPARAS DE MESA, JUEGOS DE LUCES PARA DECORAR ÁRBOLES DE NAVIDAD, LÁMPARAS ELÉCTRICAS CONTRA INSECTOS, TRONCOS ELÉCTRICOS PARA CHIMENEA, LÁMPARAS PARA LA ILUMINACIÓN DE LAS CALLES (EXCEPTO SEÑALES DE TRÁFICO), PROYECTORES DE TEATRO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27400301', 
                    'descripcion' => 'FABRICACIÓN DE LINTERNAS (DE CARBURO, ELÉCTRICAS, DE GAS, DE GASOLINA, DE QUEROSENO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27400401', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO DE ILUMINACIÓN PARA EQUIPO DE TRANSPORTE (AERONAVES, EMBARCACIONES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27400402', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO DE ILUMINACIÓN PARA EQUIPO DE TRANSPORTE (VEHÍCULOS AUTOMOTORES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27400501', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO DE ILUMINACIÓN NO ELÉCTRICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27400601', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE EQUIPO ELÉCTRICO DE ILUMINACIÓN A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27400701', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS CON LÁMPARAS DE DESCARGA ( ELECTRÓNICOS) Y OTROS CON LÁMPARAS DE DESTELLO, EXCEPTO BOMBILLAS DE MAGNESIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27500101', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS ELÉCTRICOS DE USO DOMÉSTICO: REFRIGERADORES, CONGELADORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27500102', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS ELÉCTRICOS DE USO DOMÉSTICO: LAVAPLATOS, LAVADORAS Y SECADORAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27500103', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS ELÉCTRICOS DE USO DOMÉSTICO: ASPIRADORAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27500104', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS ELÉCTRICOS DE USO DOMÉSTICO: ENCERADORAS DE PISOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27500105', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS ELÉCTRICOS DE USO DOMÉSTICO: TRITURADORAS DE DESPERDICIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27500106', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS ELÉCTRICOS DE USO DOMÉSTICO: MOLINILLOS DE CAFÉ, LICUADORAS, EXPRIMIDORAS, ABRELATAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27500107', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS ELÉCTRICOS DE USO DOMÉSTICO: MÁQUINAS DE AFEITAR ELÉCTRICAS, CEPILLOS DENTALES ELÉCTRICOS Y OTROS APARATOS ELÉCTRICOS DE CUIDADO PERSONAL, AFILADORAS DE CUCHILLOS, CAMPANAS DE VENTILACIÓN O DE ABSORCIÓN DE HUMOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27500201', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS TERMOELÉCTRICOS DE USO DOMÉSTICO: CALENTADORES DE AGUA ELÉCTRICOS, CALENTADORES ELÉCTRICOS DE RESISTENCIA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27500202', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS TERMOELÉCTRICOS DE USO DOMÉSTICO: SECADORES, PEINES, CEPILLOS Y TENACILLAS ELÉCTRICOS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27500203', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS TERMOELÉCTRICOS DE USO DOMÉSTICO: PLANCHAS ELÉCTRICAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27500204', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS TERMOELÉCTRICOS DE USO DOMÉSTICO: CALENTADORES DE AMBIENTE Y VENTILADORES PORTÁTILES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27500205', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS TERMOELÉCTRICOS DE USO DOMÉSTICO: HORNOS ELÉCTRICOS, HORNOS DE MICROONDAS, COCINILLAS Y PLANCHAS DE COCINAR ELÉCTRICAS, TOSTADORAS, CAFETERAS Y TETERAS, SARTENES, ASADORES, PARRILLAS, CAMPANAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27500206', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS TERMOELÉCTRICOS DE USO DOMÉSTICO: MANTAS ELÉCTRICAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27500301', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO DE COCINA Y CALEFACCIÓN DE USO DOMÉSTICO NO ELÉCTRICO: CALENTADORES DE AMBIENTE, COCINILLAS, PARRILLAS, COCINAS, HORNOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27500302', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO DE COCINA Y CALEFACCIÓN DE USO DOMÉSTICO NO ELÉCTRICO: CALENTADORES DE AGUA (CALEFONES), APARATOS DE COCINA Y CALENTADORES DE PLATOS NO ELÉCTRICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27500401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE APARATOS DE USO DOMÉSTICO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27901101', 
                    'descripcion' => 'FABRICACIÓN DE INVERTIDORES, RECTIFICADORES, CÉLULAS ENERGÉTICAS, UNIDADES DE SUMINISTRO DE POTENCIA REGULADA Y NO REGULADA DE ESTADO SÓLIDO; FABRICACIÓN DE CARGADORES DE PILAS, BATERÍAS DE ESTADO SÓLIDO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27901201', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO ELÉCTRICO DE SEÑALIZACIÓN COMO: SEMÁFOROS Y SEÑALES PEATONALES, SEÑALES ELÉCTRICAS, MARCADORES ELECTRÓNICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27901202', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO ELÉCTRICO DE SEÑALIZACIÓN COMO:  DISPOSITIVOS ELÉCTRICOS DE APERTURA Y CIERRE DE PUERTAS, TIMBRES ELÉCTRICOS, SIRENAS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27901301', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO ELÉCTRICO DE SOLDADURA AUTÓGENA Y DE SOLDADURA BLANDA, INCLUIDOS SOLDADORES MANUALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27901401', 
                    'descripcion' => 'FABRICACIÓN DE LIMPIAPARABRISAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27901402', 
                    'descripcion' => 'FABRICACIÓN DE ELIMINADORES DE ESCARCHA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27901403', 
                    'descripcion' => 'FABRICACIÓN DE DESEMPAÑADORES ELÉCTRICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27901501', 
                    'descripcion' => 'FABRICACIÓN DE AISLADORES ELÉCTRICOS (EXCEPTO DE VIDRIO O DE CERÁMICA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27901502', 
                    'descripcion' => 'FABRICACIÓN DE PIEZAS AISLANTES PARA APARATOS O EQUIPOS ELÉCTRICOS (EXCEPTO DE CERÁMICA O PLÁSTICO), ELECTRODOS DE CARBÓN O DE GRAFITO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27901503', 
                    'descripcion' => 'FABRICACIÓN DE TUBOS Y JUNTAS DE METAL COMÚN FORRADOS DE MATERIAL AISLANTE PARA LA CONDUCCIÓN DE ELECTRICIDAD' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27901601', 
                    'descripcion' => 'FABRICACIÓN DE PARTES ELECTRÓNICAS DE MOTORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27901901', 
                    'descripcion' => 'FABRICACIÓN DE OTROS TIPOS DE EQUIPO ELÉCTRICO: LIMPIADORES ULTRASÓNICOS (EXCEPTO LOS DE USO ODONTOLÓGICO Y DE LABORATORIO), CAMAS BRONCEADORAS, LIMITADORES DE SOBRETENSIÓN (EXCEPTO PARA VOLTAJES DE DISTRIBUCIÓN), ACELERADORES DE PARTÍCULAS, UNIDADES DE SUMINISTRO ININTERRUMPIDO DE ENERGÍA, APARATOS ELÉCTRICOS CON FUNCIONES ESPECIALES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27902001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE OTROS TIPOS DE EQUIPO ELÉCTRICO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27909101', 
                    'descripcion' => 'FABRICACIÓN DE CONDENSADORES Y COMPONENTES ELÉCTRICOS SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27909102', 
                    'descripcion' => 'FABRICACIÓN DE RESISTORES Y COMPONENTES ELÉCTRICOS SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27909103', 
                    'descripcion' => 'FABRICACIÓN DE CAPACITORES Y COMPONENTES ELÉCTRICOS SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27909201', 
                    'descripcion' => 'FABRICACIÓN DE ELECTROIMANES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C27909401', 
                    'descripcion' => 'FABRICACIÓN DE ELECTRODOS Y CONTACTOS DE CARBONO Y GRAFITO Y OTROS PRODUCTOS ELÉCTRICOS DE CARBÓN Y GRAFITO, AISLADORES ELÉCTRICOS (EXCEPTO LOS DE VIDRIO O PORCELANA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28110101', 
                    'descripcion' => 'FABRICACIÓN DE MOTORES DE COMBUSTIÓN INTERNA DE PISTONES, EXCEPTO MOTORES DE PROPULSIÓN DE VEHÍCULOS AUTOMOTORES, AERONAVES Y MOTOCICLETAS: MOTORES MARINOS, MOTORES PARA LOCOMOTORAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28110201', 
                    'descripcion' => 'FABRICACIÓN DE PISTONES, AROS DE PISTÓN, VÁLVULAS DE ADMISIÓN, ESCAPES, CARBURADORES Y PIEZAS SIMILARES PARA TODO TIPO DE MOTORES DE COMBUSTIÓN INTERNA, MOTORES DIESEL, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28110301', 
                    'descripcion' => 'FABRICACIÓN DE TURBINAS Y PARTES DE TURBINAS: TURBINAS DE GAS, EXCEPTO TURBOPROPULSORES DE REACCIÓN O DE HÉLICE PARA LA PROPULSIÓN DE AERONAVES,  TURBOALTERNADORES, GRUPOS TURBOGENERADORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28110302', 
                    'descripcion' => 'FABRICACIÓN DE TURBINAS Y PARTES DE TURBINAS: TURBINAS DE VAPOR DE AGUA Y OTROS TIPOS DE VAPOR, TURBOCALDERAS (CONJUNTOS DE CALDERA Y TURBINA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28110303', 
                    'descripcion' => 'FABRICACIÓN DE TURBINAS Y PARTES DE TURBINAS: TURBINAS HIDRÁULICAS, RUEDAS HIDRÁULICAS Y MAQUINARIA PARA SU REGULACIÓN, TURBINAS EÓLICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28110401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE MOTORES Y TURBINAS, EXCEPTO MOTORES PARA AERONAVES, VEHÍCULOS AUTOMOTORES Y MOTOCICLETAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28110501', 
                    'descripcion' => 'FABRICACIÓN DE OTROS MOTORES Y TURBINAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28120101', 
                    'descripcion' => 'FABRICACIÓN DE COMPONENTES HIDRÁULICOS Y NEUMÁTICOS: MOTORES HIDRÁULICOS; EQUIPO DE PREPARACIÓN DEL AIRE PARA SISTEMAS NEUMÁTICOS, CILINDROS, VÁLVULAS, TUBOS Y EMPALMES HIDRÁULICOS Y NEUMÁTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28120102', 
                    'descripcion' => 'FABRICACIÓN DE COMPONENTES HIDRÁULICOS Y NEUMÁTICOS: BOMBAS Y SISTEMAS DE PROPULSIÓN DE FLUIDOS, EQUIPO DE TRANSMISIÓN HIDRÁULICO, TRANSMISIONES HIDROSTÁTICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28120201', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE EQUIPO DE PROPULSIÓN DE FLUIDOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28130101', 
                    'descripcion' => 'FABRICACIÓN DE BOMBAS DE AIRE O DE VACÍO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28130102', 
                    'descripcion' => 'FABRICACIÓN DE COMPRESORES DE AIRE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28130103', 
                    'descripcion' => 'FABRICACIÓN DE OTROS COMPRESORES DE GAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28130201', 
                    'descripcion' => 'FABRICACIÓN DE BOMBAS PARA LÍQUIDOS, TENGAN O NO DISPOSITIVOS DE MEDICIÓN; BOMBAS PARA MOTORES DE COMBUSTIÓN INTERNA, BOMBAS MANUALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28130202', 
                    'descripcion' => 'FABRICACIÓN DE BOMBAS DE ACEITE, AGUA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28130203', 
                    'descripcion' => 'FABRICACIÓN DE BOMBAS DE COMBUSTIBLE PARA VEHÍCULOS AUTOMOTORES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28130301', 
                    'descripcion' => 'FABRICACIÓN DE GRIFOS Y VÁLVULAS INDUSTRIALES, SANITARIOS, CALEFACCIÓN, INCLUIDOS VÁLVULAS DE REGULACIÓN Y GRIFOS DE ADMISIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28130401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE OTRAS BOMBAS, COMPRESORES, GRIFOS Y VÁLVULAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28140101', 
                    'descripcion' => 'FABRICACIÓN DE COJINETES DE BOLA Y DE RODILLO Y DE PARTES DE COJINETES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28140201', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO MECÁNICO DE TRANSMISIÓN: EJES Y MANIVELAS DE TRANSMISIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28140202', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO MECÁNICO DE TRANSMISIÓN: EJES DE LEVAS, CIGÜEÑALES, MANIVELAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28140203', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO MECÁNICO DE TRANSMISIÓN: CAJAS DE COJINETES Y COJINETES SIMPLES PARA EJES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28140301', 
                    'descripcion' => 'FABRICACIÓN DE ESLABONES ARTICULADOS Y CADENAS DE TRANSMISIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28140302', 
                    'descripcion' => 'FABRICACIÓN DE ENGRANAJES, TRENES DE ENGRANAJES, CAJAS DE ENGRANAJES Y OTROS DISPOSITIVOS PARA CAMBIOS DE MARCHAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28140303', 
                    'descripcion' => 'FABRICACIÓN DE EMBRAGUES Y ACOPLAMIENTOS DE EJES; VOLANTES Y POLEAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28140401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE COJINETES, ENGRANAJES, TRENES DE ENGRANAJES Y PIEZAS DE TRANSMISIÓN A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28150101', 
                    'descripcion' => 'FABRICACIÓN DE HORNOS ELÉCTRICOS PARA USO INDUSTRIAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28150102', 
                    'descripcion' => 'FABRICACIÓN DE HORNOS ELÉCTRICOS DE LABORATORIO, INCLUIDOS INCINERADORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28150103', 
                    'descripcion' => 'FABRICACIÓN DE HORNOS ELÉCTRICOS Y DE OTRO TIPO, INCLUIDOS INCINERADORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28150201', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO FIJO DE CALEFACCIÓN DE USO DOMÉSTICO COMO CALEFACCIÓN: SOLAR, POR VAPOR, DE FUEL Y EQUIPO SIMILAR, CALENTADORES DE AMBIENTE ELÉCTRICOS FIJOS Y CALENTADORES ELÉCTRICOS PARA PISCINAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28150301', 
                    'descripcion' => 'FABRICACIÓN DE CARGADORES MECÁNICOS, PARRILLAS MECÁNICAS, DESCARGADORES MECÁNICOS DE CENIZAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28150302', 
                    'descripcion' => 'FABRICACIÓN DE QUEMADORES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28150401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE HORNOS Y QUEMADORES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28160101', 
                    'descripcion' => 'FABRICACIÓN DE MANIPULADORES MECÁNICOS Y ROBOTS INDUSTRIALES DISEÑADOS ESPECIALMENTE PARA OPERACIONES DE CARGA O DESCARGA, MAQUINARIA SENCILLA Y COMPLEJA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28160102', 
                    'descripcion' => 'FABRICACIÓN DE MANIPULADORES MECÁNICOS Y ROBOTS INDUSTRIALES DISEÑADOS ESPECIALMENTE PARA OPERACIONES DE CARGA O DESCARGA, DE ACCIÓN CONTINUA O INTERMITENTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28160103', 
                    'descripcion' => 'FABRICACIÓN DE MANIPULADORES MECÁNICOS Y ROBOTS INDUSTRIALES DISEÑADOS ESPECIALMENTE PARA OPERACIONES DE CARGA O DESCARGA, ESTACIONARIAS Y MÓVILES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28160104', 
                    'descripcion' => 'FABRICACIÓN DE MANIPULADORES MECÁNICOS Y ROBOTS INDUSTRIALES DISEÑADOS ESPECIALMENTE PARA OPERACIONES DE CARGA O DESCARGA, MONTADAS PERMANENTEMENTE EN BASTIDORES CON RUEDAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28160105', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA DE ELEVACIÓN, MANIPULACIÓN, CARGA O DESCARGA, MANUAL O ELÉCTRICA: POLIPASTOS Y ELEVADORES, CABRIAS, CABRESTANTES Y GATOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28160106', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA DE ELEVACIÓN, MANIPULACIÓN, CARGA O DESCARGA, MANUAL O ELÉCTRICA: GRÚAS DE BRAZO MÓVIL, GRÚAS CORRIENTES. ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28160107', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA DE ELEVACIÓN, MANIPULACIÓN, CARGA O DESCARGA, MANUAL O ELÉCTRICA: BASTIDORES ELEVADORES MÓVILES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28160108', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA DE ELEVACIÓN, MANIPULACIÓN, CARGA O DESCARGA, MANUAL O ELÉCTRICA: CAMIONES DE PÓRTICO ALTO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28160109', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA DE ELEVACIÓN, MANIPULACIÓN, CARGA O DESCARGA, MANUAL O ELÉCTRICA: CARRETILLAS DE FAENA, ESTÉN PROVISTAS O NO DE EQUIPO DE ELEVACIÓN O MANIPULACIÓN, Y SEAN AUTOPROPULSADAS O NO, COMO LAS QUE SE UTILIZAN EN FÁBRICAS (INCLUIDOS CARRETILLAS Y CARROS DE MANO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28160110', 
                    'descripcion' => 'FABRICACIÓN DE ELEVADORES DE LÍQUIDOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28160111', 
                    'descripcion' => 'FABRICACIÓN DE MONTACARGAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28160201', 
                    'descripcion' => 'FABRICACIÓN DE ASCENSORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28160202', 
                    'descripcion' => 'FABRICACIÓN DE ESCALERAS MECÁNICAS Y PASILLOS RODANTES, CINTAS TRANSPORTADORAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28160203', 
                    'descripcion' => 'FABRICACIÓN DE TELEFÉRICOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28160301', 
                    'descripcion' => 'FABRICACIÓN DE PARTES Y PIEZAS ESPECIALES PARA EQUIPO DE ELEVACIÓN Y MANIPULACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28160401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE EQUIPO DE ELEVACIÓN Y MANIPULACIÓN A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28170101', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS CALCULADORAS ELECTRÓNICAS O NO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28170102', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS DE CONTABILIDAD, MÁQUINAS DE SUMAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28170103', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS REGISTRADORAS INCLUSO ACCIONADAS MECÁNICAMENTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28170201', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS DE ESTENOTIPIA, MÁQUINAS PARA RELLENAR CHEQUES, HECTÓGRAFOS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28170202', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS DE ESCRIBIR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28170301', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS PARA EL FRANQUEO Y LA MANIPULACIÓN DE CORRESPONDENCIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28170302', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS DISTRIBUIDORAS DE BILLETES, MÁQUINAS DE VOTACIÓN, DICTÁFONOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28170303', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS IMPRIMIR DIRECCIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28170304', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS DE ENCOLAR, MÁQUINAS PARA CONTAR Y ENVOLVER MONEDAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28170305', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS PARA EL FRANQUEO Y LA MANIPULACIÓN DE CORRESPONDENCIA (MÁQUINAS PARA LLENAR Y CERRAR SOBRES, MÁQUINAS PARA ABRIR, CLASIFICAR Y ESCANEAR CORRESPONDENCIA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28170401', 
                    'descripcion' => 'FABRICACIÓN DE FOTOCOPIADORAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28170501', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO DE ENCUADERNACIÓN DEL TIPO UTILIZADO EN OFICINAS (ES DECIR, PARA ENCUADERNAR CON PLÁSTICO O CON CINTA ADHESIVA), PUNZONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28170601', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE MAQUINARIA Y EQUIPO DE OFICINA (EXCEPTO ORDENADORES Y EQUIPO PERIFÉRICO) A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28170701', 
                    'descripcion' => 'FABRICACIÓN DE IMPRESORAS OFFSET DE CARGA MANUAL PARA OFICINAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28170901', 
                    'descripcion' => 'FABRICACIÓN DE AFILADORES DE LÁPICES, GRAPADORAS, QUITAGRAPAS, PORTARROLLOS PARA CINTA ADHESIVA, CARTUCHOS DE TINTA (TONER), PIZARRAS, ENCERADOS Y TABLEROS PARA ESCRIBIR CON ROTULADOR, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28180101', 
                    'descripcion' => 'FABRICACIÓN DE HERRAMIENTAS DE MANO CON MOTOR AUTÓNOMO ELÉCTRICO O NO ELÉCTRICO, COMO: CIZALLAS Y RECORTADORAS DE CHAPA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28180102', 
                    'descripcion' => 'FABRICACIÓN DE HERRAMIENTAS DE MANO CON MOTOR AUTÓNOMO ELÉCTRICO O NO ELÉCTRICO, COMO: SIERRAS CIRCULARES O CON MOVIMIENTO ALTERNATIVO, TALADROS, PULIDORAS, TUPÍES, LIJADORAS, AFILADORAS, CLAVADORAS MOTORIZADAS, CEPILLADORAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28180201', 
                    'descripcion' => 'FABRICACIÓN DE HERRAMIENTAS DE MANO DE AIRE COMPRIMIDO, COMO: PERFORADORAS DE PERCUSIÓN, CLAVADORAS NEUMÁTICAS, ENGRAPADORAS, REMACHADORAS NEUMÁTICAS, APRIETA TUERCAS NEUMÁTICOS DE PERCUSIÓN, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28180301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE HERRAMIENTAS DE MANO MOTORIZADAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28180401', 
                    'descripcion' => 'FABRICACIÓN DE PRENSAS PARA LA ELABORACIÓN DE TABLEROS DE PARTÍCULAS O FIBRAS DE MADERA U OTROS MATERIALES LEÑOSOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28180402', 
                    'descripcion' => 'FABRICACIÓN DE OTRA MAQUINARIA PARA TRATAR LA MADERA O EL CORCHO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28180501', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS HERRAMIENTA PARA ESTAMPAR O PRENSAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28180601', 
                    'descripcion' => 'FABRICACIÓN DE OTRAS MÁQUINAS HERRAMIENTA PARA TRABAJAR MADERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28180701', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS HERRAMIENTA DE DISEÑO SENCILLO (PRENSAS DE PEDAL)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28180702', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS HERRAMIENTA DE DISEÑO DE DISEÑO TRADICIONAL (ACCIONADAS A MANO O POR MOTOR)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28180703', 
                    'descripcion' => 'FABRICACIÓN DE DISEÑO MODERNO (DE MANDO NUMÉRICO Y PARA HACER PASAR EL PRODUCTO POR  VARIAS ESTACIONES DE TRABAJO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28191101', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO INDUSTRIAL DE REFRIGERACIÓN O DE CONGELACIÓN PARA USO COMERCIAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28191102', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO INDUSTRIAL DE REFRIGERACIÓN O DE CONGELACIÓN PARA DIVERSOS USOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28191103', 
                    'descripcion' => 'FABRICACIÓN Y ENSAMBLADURA DE CONJUNTOS MONTADOS DE COMPONENTES PRINCIPALES DE EQUIPOS DE REFRIGERACIÓN Y CONGELACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28191201', 
                    'descripcion' => 'FABRICACIÓN DE BÁSCULAS Y BALANZAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28191202', 
                    'descripcion' => 'FABRICACIÓN DE BALANZAS DE PLATAFORMA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28191203', 
                    'descripcion' => 'FABRICACIÓN DE BALANZAS DE PESADA CONTINUA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28191204', 
                    'descripcion' => 'FABRICACIÓN DE BALANZAS PARA VEHÍCULOS,  ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28191205', 
                    'descripcion' => 'FABRICACIÓN DE BÁSCULAS Y BALANZAS (EXCEPTO BALANZAS DE PRECISIÓN PARA LABORATORIOS): BALANZAS DE USO DOMÉSTICO, PESAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28191301', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA EMPAQUETAR Y ENVOLVER: MÁQUINAS PARA LLENAR, CERRAR, SELLAR, ENCAPSULAR, ETIQUETAR, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28191302', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA LIMPIAR O SECAR BOTELLAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28191303', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA LA AIREACIÓN DE BEBIDAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28191401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN: INSTALACIÓN, MANTENIMIENTO Y REPARACIÓN DE MAQUINARIA PARA PESAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28191402', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN: INSTALACIÓN, MANTENIMIENTO Y REPARACIÓN DE MAQUINARIA PARA EMBALAJE Y ACONDICIONAMIENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28191403', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN: INSTALACIÓN, MANTENIMIENTO, REPARACIÓN Y ACONDICIONAMIENTO Y EQUIPO DE REFRIGERACIÓN Y CONGELACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28192101', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS DE ACONDICIONAMIENTO DE AIRE, EXTRACTORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28192102', 
                    'descripcion' => 'FABRICACIÓN DE VENTILADORES DISTINTOS DE LOS DE USO DOMÉSTICO, DISPOSITIVOS DE VENTILACIÓN DE DESVANES (VENTILADORES DE TEJADO, ETCÉTERA), VENTILADORES INDUSTRIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28192103', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS DE ACONDICIONAMIENTO DE AIRE DE USO COMERCIAL, INDUSTRIAL O DE LABORATORIOS, CAMPANAS DE VENTILACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28192201', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA Y APARATOS DE FILTRADO O DEPURACIÓN DE LÍQUIDOS, INCLUSO FILTROS DE ACEITE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28192202', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA Y APARATOS DE FILTRADO O DEPURACIÓN DE AIRE, GAS PARA MOTORES DE COMBUSTIÓN INTERNA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28192301', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO PARA PROYECTAR, DISPERSAR O PULVERIZAR LÍQUIDOS O POLVOS: MÁQUINAS DE LIMPIEZA POR CHORRO, MÁQUINAS DE LIMPIEZA AL VAPOR, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28192302', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO PARA PROYECTAR, DISPERSAR O PULVERIZAR LÍQUIDOS O POLVOS: PISTOLAS DE PULVERIZACIÓN, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28192303', 
                    'descripcion' => 'FABRICACIÓN DE EXTINTORES DE INCENDIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28192304', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO PARA PROYECTAR, DISPERSAR O PULVERIZAR LÍQUIDOS O POLVOS: MÁQUINAS DE LIMPIEZA POR CHORRO DE ARENA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28192401', 
                    'descripcion' => 'FABRICACIÓN DE PLANTAS DESTILADORAS Y RECTIFICADORAS PARA LAS REFINERÍAS DE PETRÓLEO, LA INDUSTRIA QUÍMICA, LA INDUSTRIA DE ELABORACIÓN DE BEBIDAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28192402', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA LICUAR AIRE O GAS, GENERADORES DE GAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28192501', 
                    'descripcion' => 'FABRICACIÓN DE INTERCAMBIADORES DE CALOR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28192601', 
                    'descripcion' => 'FABRICACIÓN DE GASÓGENOS DE GAS POBRE O GAS DE AGUA O GASÓGENOS DE ACETILENO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28193001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE OTROS TIPOS DE MAQUINARIA DE USO GENERAL A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28193101', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE VENTILADORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28193102', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE ACONDICIONADORES DE AIRE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28193201', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE APARATOS PARA LA FILTRACIÓN, DEPURACIÓN Y DISTRIBUCIÓN DE LÍQUIDOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28193202', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE APARATOS PARA LA FILTRACIÓN, DEPURACIÓN Y DISTRIBUCIÓN DE GASES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28193203', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE APARATOS PARA LA FILTRACIÓN, DEPURACIÓN Y DISTRIBUCIÓN DE POLVOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28199101', 
                    'descripcion' => 'FABRICACIÓN DE CALANDRIAS Y OTRAS MÁQUINAS DE LAMINADO, Y DE RODILLOS PARA ESAS MÁQUINAS (EXCEPTO LAS LAMINADORAS DE METAL Y VIDRIO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28199201', 
                    'descripcion' => 'FABRICACIÓN DE CENTRIFUGADORAS (EXCEPTO DESCREMADORAS Y SECADORAS DE ROPA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28199301', 
                    'descripcion' => 'FABRICACIÓN DE JUNTAS Y PIEZAS DE EMPALME SIMILARES HECHAS DE UNA COMBINACIÓN DE MATERIALES Y DE CAPAS DE UN MISMO MATERIAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28199401', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS AUTOMÁTICAS DE VENTA DE PRODUCTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28199501', 
                    'descripcion' => 'FABRICACIÓN DE NIVELES, CINTAS MÉTRICAS Y HERRAMIENTAS DE MANO SIMILARES, HERRAMIENTAS DE PRECISIÓN PARA MECÁNICOS (EXCEPTO INSTRUMENTOS ÓPTICOS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28199601', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO NO ELÉCTRICO DE SOLDADURA AUTÓGENA Y DE SOLDADURA BLANDA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28199701', 
                    'descripcion' => 'FABRICACIÓN DE PARTES Y PIEZAS DE MAQUINARIA DE USO GENERAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28199801', 
                    'descripcion' => 'FABRICACIÓN DE CAJAS DE MOLDEAR PARA TALLERES DE FUNDICIÓN DE METAL, FONDOS DE MOLDE, PATRONES PARA MOLDEAR, MOLDES PARA METAL (EXCEPTO LINGOTERAS), CARBUROS METÁLICOS, VIDRIO, MATERIAS MINERALES, CAUCHO O PLÁSTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28199901', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS PARA LA PRODUCCIÓN O EL TRABAJO EN CALIENTE DE VIDRIO O PRODUCTOS DE CRISTALERÍA, FIBRAS O HILADOS DE VIDRIO POR EJEMPLO: LAMINADORAS DE VIDRIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28210101', 
                    'descripcion' => 'FABRICACIÓN DE TRACTORES UTILIZADOS EN ACTIVIDADES AGROPECUARIAS Y SILVÍCOLA: TRACTORES DE MANEJO A PIE (DIRIGIDOS POR UNA PERSONA DESDE FUERA), MOTOCULTORES, SEGADORAS, INCLUIDAS SEGADORAS DE CÉSPED, REMOLQUES Y SEMIRREMOLQUES DE CARGA Y DESCARGA AUTOMÁTICA PARA USO AGRÍCOLA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28210201', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS UTILIZADAS EN LA AGRICULTURA PARA PREPARAR LOS SUELOS, PLANTAR O ABONAR: ARADOS, ESPARCIDORAS DE ESTIÉRCOL, SEMBRADORAS, RASTRILLADORAS, ETCÉTERA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28210301', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS PARA LA RECOLECCIÓN Y TRILLA: COSECHADORAS, TRILLADORAS, CRIBADORAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28210401', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS DE ORDEÑAR, MAQUINAS USADAS EN LA AVÍCULTURA, API' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28210501', 
                    'descripcion' => 'FABRICACIÓN DE ASPERSORES DE USO AGRÍCOLA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28210601', 
                    'descripcion' => 'FABRICACIÓN DE OTRA MAQUINARIA DE USO AGROPECUARIO: EQUIPO PARA LA PREPARACIÓN DE PIENSO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28210602', 
                    'descripcion' => 'FABRICACIÓN DE OTRA MAQUINARIA DE USO AGROPECUARIO: MÁQUINAS PARA LIMPIAR, SELECCIONAR Y CLASIFICAR HUEVOS, FRUTA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28210603', 
                    'descripcion' => 'FABRICACIÓN DE OTRA MAQUINARIA DE USO AGROPECUARIO: MÁQUINAS UTILIZADAS EN LA AVICULTURA, APICULTURA, HORTICULTURA Y SILVICULTURA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28210701', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE MAQUINARIA AGROPECUARIA Y FORESTAL A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28211001', 
                    'descripcion' => 'FABRICACIÓN DE LECTORES MAGNÉTICOS U ÓPTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28211002', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS PARA TRANSCRIPCIÓN DE DATOS CODIFICADOS EN MATERIALES DE GRABACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28211003', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS PARA PROCESAR Y DESCIFRAR DATOS Y PRESENTAR LOS RESULTADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28211101', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS DE PROCESAMIENTO ANALÓGICO DE DATOS PROVISTAS DE ELEMENTOS ANALÓGICOS, CONTROL Y PROGRAMACIÓN, ELEMENTOS ADICIONALES PARA COMPUTADORAS ANALÓGICAS CON FUNCIÓN DE ENTRADA Y SALIDA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28211201', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS DE PROCESAMIENTO AUTOMÁTICO DE DATOS DE TIPO DIGITAL, ANALÓGICO O HÍBRIDO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28211301', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS HÍBRIDAS (ANALOGICODIGITALES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28211401', 
                    'descripcion' => 'FABRICACIÓN DE SISTEMAS DIGITALES COMPUESTOS DE UNIDAD CENTRAL DE PROCESAMIENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28211402', 
                    'descripcion' => 'FABRICACIÓN DE SISTEMAS DIGITALES PROVISTOS DE DISPOSITIVOS PERIFÉRICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28211403', 
                    'descripcion' => 'FABRICACIÓN DE UNIDADES DE PROCESAMIENTO CENTRAL DE DATOS O UNIDADES PERIFERIAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28211501', 
                    'descripcion' => 'FABRICACIÓN DE UNIDADES PERIFÉRICAS PARA MAQUINAS ANALÓGICAS (LECTORAS DE CINTAS, PERFORADORAS, GRAFICADORES, ETC.)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28220101', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS HERRAMIENTA PARA TRABAJAR METALES QUE UTILIZAN RAYOS LÁSER, ONDAS ULTRASÓNICAS, ARCOS DE PLASMA, IMPULSOS MAGNÉTICOS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28220102', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS HERRAMIENTA PARA TRABAJAR METALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28220103', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS HERRAMIENTA PARA TRABAJAR OTROS MATERIALES (MADERA, HUESO, PIEDRA, CAUCHO ENDURECIDO, PLÁSTICOS DUROS, VIDRIO EN FRÍO, ETCÉTERA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28220104', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS HERRAMIENTA PARA TRABAJAR OTROS MATERIALES QUE UTILIZAN RAYOS LÁSER, ONDAS ULTRASÓNICAS, ARCOS DE PLASMA, IMPULSOS MAGNÉTICOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28220201', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS HERRAMIENTA PARA TORNEAR, PERFORAR, FRESAR, CONFORMAR, CEPILLAR, RECTIFICAR, TALADRAR (TALADRADORAS ROTATORIAS Y DE PERCUSIÓN), LIMADORAS, REMACHADORAS, CORTADORAS DE LÁMINAS DE METAL, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28220301', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS HERRAMIENTA PARA ESTAMPAR Y PRENSAR, PUNZONADORAS, PRENSAS HIDRÁULICAS, MACHACADORAS HIDRÁULICAS, MARTINETES, MÁQUINAS DE FORJAR, ETCÉTERA, FABRICACIÓN DE BANCOS DE TREFILAR, MÁQUINAS DE ATERRAJAR POR LAMINADO A PRESIÓN Y MÁQUINAS PARA TRABAJAR ALAMBRE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28220401', 
                    'descripcion' => 'FABRICACIÓN DE PRENSAS PARA LA FABRICACIÓN DE TABLEROS DE PARTÍCULAS Y PRODUCTOS SIMILARES; MAQUINARIA PARA GALVANOPLASTIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28220501', 
                    'descripcion' => 'FABRICACIÓN DE PARTES, PIEZAS Y ACCESORIOS PARA LAS MÁQUINAS HERRAMIENTA ANTERIORMENTE ENUMERADAS: MANDRILES DE SUJECIÓN, CABEZALES DIVISORIOS Y OTROS ACCESORIOS ESPECIALES PARA MÁQUINAS HERRAMIENTA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28220601', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE MAQUINARIA PARA LA CONFORMACIÓN DE METALES Y DE MÁQUINAS HERRAMIENTA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28230101', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS Y EQUIPO PARA LA MANIPULACIÓN DE METALES EN CALIENTE: CONVERTIDORES, LINGOTERAS, CALDEROS DE COLADA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28230102', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS Y EQUIPO PARA LA MANIPULACIÓN DE METALES EN CALIENTE: MÁQUINAS DE FUNDIR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28230201', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS LAMINADORAS DE METAL Y DE RODILLOS PARA ESAS MÁQUINAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28230301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE MAQUINARIA METALÚRGICA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28240101', 
                    'descripcion' => 'FABRICACIÓN DE ELEVADORES Y CINTAS TRANSPORTADORAS DE MARCHA CONTINÚA PARA USO EN OBRAS SUBTERRÁNEAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28240201', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA PERFORAR, CORTAR, HINCAR Y TUNELAR (DESTINADA O NO A OBRAS SUBTERRÁNEAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28240301', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA EL TRATAMIENTO DE MINERALES MEDIANTE CRIBADO, CLASIFICACIÓN, SEPARACIÓN, LAVADO, TRITURACIÓN, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28240401', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS ESPARCIDORAS DE HORMIGÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28240402', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS ESPARCIDORAS DE ASFALTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28240403', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA PAVIMENTAR CON HORMIGÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28240404', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS PARA HINCAR Y ARRANCAR PILOTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28240405', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS MEZCLADORAS DE HORMIGÓN Y MORTERO, COMPACTADORAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28240501', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA EL MOVIMIENTO DE TIERRAS: TOPADORAS CORRIENTES, TOPADORAS DE PALA ANGULAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28240502', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA EL MOVIMIENTO DE TIERRAS: EXPLANADORAS, NIVELADORAS, TRABILLAS, PALAS MECÁNICAS, CARGADORAS DE CUCHARÓN, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28240503', 
                    'descripcion' => 'FABRICACIÓN DE PALAS PARA TOPADORAS CORRIENTES Y DE PALA ANGULAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28240504', 
                    'descripcion' => 'FABRICACIÓN DE TRACTORES DE ORUGA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28240505', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA EL MOVIMIENTO DE TIERRAS: TRACTORES UTILIZADOS EN OBRAS DE CONSTRUCCIÓN Y EN LA EXPLOTACIÓN DE MINAS Y CANTERAS, CAMIONES CON VOLQUETE PARA TODO TERRENO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28240601', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE MAQUINARIA PARA LA EXPLOTACIÓN DE MINAS Y CANTERAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28240602', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE MAQUINARIA PARA OBRAS DE CONSTRUCCIÓN A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28250101', 
                    'descripcion' => 'FABRICACIÓN DE SECADORAS AGRÍCOLAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28250201', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA LA INDUSTRIA LECHERA: PARA HACER QUESOS (HOMOGENIZADORAS, MOLDEADORAS, PRENSAS), ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28250202', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA LA INDUSTRIA LECHERA: DESCREMADORAS, MAQUINARIA PARA LA ELABORACIÓN DE LA LECHE (HOMOGENEIZADORAS), PARA LA TRANSFORMACIÓN DE LA LECHE (MANTEQUERAS, MALAXADORAS Y MOLDEADORAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28250301', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA LA MOLIENDA DE GRANOS: DESCASCARILLADORAS DE ARROZ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28250302', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA LA MOLIENDA DE GRANOS: PARTIDORAS DE GUISANTES, LEGUMBRES, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28250303', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA LIMPIAR, SELECCIONAR Y CLASIFICAR SEMILLAS, GRANOS Y LEGUMINOSAS SECAS (AVENTADORAS, CRIBADORAS, CINTAS CRIBADORAS, SEPARADORAS, CEPILLADORAS, ETCÉTERA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28250304', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA LA PRODUCCIÓN DE HARINAS Y SÉMOLAS, ETCÉTERA (TRITURADORAS, ALIMENTADORAS, CRIBADORAS, DEPURADORAS DE AFRECHO (SALVADO), MEZCLADORAS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28250401', 
                    'descripcion' => 'FABRICACIÓN DE PRENSAS, TRITURADORAS, TRAPICHES, ETCÉTERA, UTILIZADAS EN LA ELABORACIÓN DE VINO, SIDRA, JUGOS DE FRUTAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28250501', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA USO EN PANADERÍA Y PARA HACER MACARRONES, ESPAGUETIS O PRODUCTOS SIMILARES: HORNOS DE PANADERÍA, AMASADORAS, FRACCIONADORAS Y MOLDEADORAS DE MASA, CORTADORAS, MÁQUINAS PARA DEPOSITAR TARTAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28250601', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA LA EXTRACCIÓN O PREPARACIÓN DE GRASAS Y ACEITES ANIMALES O VEGETALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28250701', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA LA PREPARACIÓN DEL TABACO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28250702', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA LA ELABORACIÓN DE CIGARRILLOS Y CIGARROS, TABACO PARA PIPA, TABACO DE MASCAR Y RAPÉ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28250801', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE MAQUINARIA PARA LA ELABORACIÓN DE ALIMENTOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28250802', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE MAQUINARIA PARA LA ELABORACIÓN DE BEBIDAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28250803', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE MAQUINARIA PARA LA ELABORACIÓN DE TABACO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28250901', 
                    'descripcion' => 'FABRICACIÓN DE OTRA MAQUINARIA Y EQUIPO PARA LA ELABORACIÓN DE CERVEZA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28250902', 
                    'descripcion' => 'FABRICACIÓN DE OTRA MAQUINARIA Y EQUIPO PARA LA ELABORACIÓN DE CARNE DE BOVINO Y DE AVES DE CORRAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28250903', 
                    'descripcion' => 'FABRICACIÓN DE OTRA MAQUINARIA Y EQUIPO PARA LA FABRICACIÓN DE AZÚCAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28250904', 
                    'descripcion' => 'FABRICACIÓN DE OTRA MAQUINARIA Y EQUIPO PARA LA ELABORACIÓN DE DIVERSOS ALIMENTOS: MAQUINARIA PARA LA ELABORACIÓN DE CACAO, CHOCOLATE Y PRODUCTOS DE CONFITERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28250905', 
                    'descripcion' => 'FABRICACIÓN DE OTRA MAQUINARIA Y EQUIPO PARA LA PREPARACIÓN DE FRUTAS, NUECES Y HORTALIZAS Y LEGUMBRES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28250906', 
                    'descripcion' => 'FABRICACIÓN DE OTRA MAQUINARIA Y EQUIPO PARA LA ELABORACIÓN DE DIVERSOS ALIMENTOS: MAQUINARIA PARA LA PREPARACIÓN DE PESCADO, CRUSTÁCEOS Y MOLUSCOS Y OTROS PRODUCTOS MARINOS COMESTIBLES, MAQUINARIA PARA FILTRAR Y DEPURAR, OTROS TIPOS DE MAQUINARIA PARA LA PREPARACIÓN Y LA ELABORACIÓN INDUSTRIAL DE ALIMENTOS Y BEBIDAS, MAQUINARIA PARA LA PREPARACIÓN DE ALIMENTOS EN HOTELES Y RESTAURANTES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28261101', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA TEXTIL: MÁQUINAS PARA PREPARAR, PRODUCIR FIBRAS TEXTILES: DESMOTADORAS DE ALGODÓN, ABRIDORAS DE BALAS, TRANSFORMADORAS DE HILACHAS EN FIBRA, BATANES DE ALGODÓN, DESENGRASADORAS Y CARBONIZADORAS DE LANA, PEINADORAS, CARDADORAS, MECHERAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28261102', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA TEXTIL: MÁQUINAS PARA EXTRUIR, ESTIRAR, TEXTURIZAR O CORTAR FIBRAS Y MATERIALES TEXTILES E HILADOS ARTIFICIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28261201', 
                    'descripcion' => 'MÁQUINAS PARA TRANSFORMAR LAS MECHAS EN HILOS, PREPARAR HILADOS TEXTILES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28261202', 
                    'descripcion' => 'MÁQUINAS PARA TRANSFORMAR LAS MECHAS EN HILOS, PREPARAR HILADOS TEXTILES: TELARES CORRIENTES, INCLUIDOS TELARES MANUALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28261203', 
                    'descripcion' => 'MÁQUINAS PARA TRANSFORMAR LAS MECHAS EN HILOS, PREPARAR HILADOS TEXTILES: TELARES PARA TEJIDOS DE PUNTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28261204', 
                    'descripcion' => 'MÁQUINAS PARA TRANSFORMAR LAS MECHAS EN HILOS, PREPARAR HILADOS TEXTILES: MÁQUINAS PARA HACER TEJIDOS DE MALLAS ANUDADAS, TULES, ENCAJES, TRENCILLAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28261205', 
                    'descripcion' => 'MÁQUINAS PARA PREPARAR HILADOS TEXTILES: DEVANADORAS, URDIDORAS Y MÁQUINAS SIMILARES. ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28261301', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS Y EQUIPO AUXILIAR PARA LA MAQUINARIA TEXTIL: LIZOS, MECANISMOS DE JACQUARD, MECANISMOS DE PARADA AUTOMÁTICOS, MECANISMOS DE CAMBIO DE LANZADERA, HUSOS Y ALETAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28261401', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA EL TRATAMIENTO DE TEJIDOS: MAQUINARIA PARA LAVAR, BLANQUEAR, TEÑIR, APRESTAR, ACABAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28261402', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA EL TRATAMIENTO DE TEJIDOS: MAQUINARIA PARA REVESTIR E IMPREGNAR TELAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28261403', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS PARA ENROLLAR, DESENROLLAR, PLEGAR, CORTAR Y CALAR TELAS; MAQUINARIA PARA EL ESTAMPADO DE TEXTILES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28261501', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA DE LAVANDERÍA: MÁQUINAS DE PLANCHAR, INCLUIDAS PLANCHAS DE FUSIÓN, LAVADORAS Y SECADORAS COMERCIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28261502', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS DE LIMPIEZA EN SECO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28261601', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS DE COSER, DE CABEZALES (SEAN O NO DE USO DOMÉSTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28261602', 
                    'descripcion' => 'FABRICACIÓN DE AGUJAS PARA MÁQUINAS DE COSER (SEAN O NO DE USO DOMÉSTICO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28261603', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS PARA LA MANUFACTURA Y EL ACABADO DE FIELTROS Y DE TEXTILES NO TEJIDOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28261604', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS PARA LA MANUFACTURA DE SOMBREROS DE FIELTRO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28261701', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE MAQUINARIA PARA LA PREPARACIÓN, ELABORACIÓN Y ACABADOS DE FIBRAS, HILADOS Y TEXTILES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28262101', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS PARA CUEROS: MAQUINARIA PARA PREPARAR, CURTIR Y TRABAJAR CUEROS Y PIELES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28262201', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA FABRICAR Y REPARAR CALZADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28262202', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA FABRICAR Y REPARAR OTROS ARTÍCULOS DE CUERO O PIEL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28263001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE MAQUINARIA PARA LA ELABORACIÓN DE PRODUCTOS TEXTILES, PRENDAS DE VESTIR Y CUEROS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28291101', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA LA ELABORACIÓN DE PASTA DE PAPEL. ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28291102', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA LA TRANSFORMACIÓN DE PASTA DE PAPEL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28291103', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA LA FABRICACIÓN DE PAPEL Y CARTÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28291104', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA EL ACABADO DE PAPEL Y CARTÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28291105', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA LA ELABORACIÓN DE ARTÍCULOS DE PAPEL O CARTÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28291106', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA LA ELABORACIÓN E INDUSTRIA DE SECADORAS PARA MADERA, PASTA DE MADERA, PAPEL O CARTÓN Y ARTÍCULOS DE PAPEL O CARTÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28291201', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA TRABAJAR EL CAUCHO Y LOS PLÁSTICOS BLANDOS Y PARA FABRICAR PRODUCTOS DE ESOS MATERIALES: MÁQUINAS PARA EXTRUIR, MOLDEAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28291202', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA RECAUCHUTAR CUBIERTAS NEUMÁTICAS Y OTRAS MÁQUINAS PARA FABRICAR DETERMINADOS PRODUCTOS DE CAUCHO O PLÁSTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28292001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE OTROS TIPOS DE MAQUINARIA DE USO ESPECIAL A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28299101', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA IMPRIMIR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28299102', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS AUXILIARES PARA LA IMPRESIÓN SOBRE DIVERSOS MATERIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28299103', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA ENCUADERNAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28299201', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA PRODUCIR BALDOSAS, LADRILLOS, PASTAS DE CERÁMICA MOLDEADAS, TUBOS, ELECTRODOS DE GRAFITO, TIZA DE PIZARRÓN, MOLDES DE FUNDICIÓN, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28299301', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA LA ELABORACIÓN DE SEMICONDUCTORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28299401', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS PARA MONTAR LÁMPARAS, TUBOS (VÁLVULAS) Y BOMBILLAS ELÉCTRICAS Y ELECTRÓNICAS MÁQUINAS PARA LA PRODUCCIÓN Y EL TRABAJO EN CALIENTE DE VIDRIO Y PRODUCTOS DE CRISTALERÍA, FIBRAS E HILADOS DE VIDRIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28299501', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS DE FUNCIONES ESPECIALES, SISTEMAS CENTRALES DE ENGRASADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28299601', 
                    'descripcion' => 'FABRICACIÓN DE TIOVIVOS, COLUMPIOS, GALERÍAS DE TIRO Y ATRACCIONES DE FERIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28299701', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA PARA FUNDICIÓN DE CARACTERES DE IMPRENTA (FUNDIDORAS MANUALES O AUTOMÁTICAS DE CARACTERES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28299702', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA DE COMPOSICIÓN TIPOGRÁFICA (MONOTIPIAS Y OTRAS MÁQUINAS DE FUNDICIÓN Y COMPOSICIÓN PROVISTAS DE TECLADO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28299703', 
                    'descripcion' => 'FABRICACIÓN DE CARACTERES DE IMPRENTA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28299704', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS DE ELABORACIÓN DE MATRICES Y PLANCHAS IMPRESAS DE ESTEREOTIPIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28299705', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA DE ELABORACIÓN DE PLANCHAS DE GRABADO AL AGUA FUERTE Y DE FOTOTIPIA Y COMPOSICIÓN TIPOGRÁFICA, CLICHÉS, PLANCHAS, CILINDROS Y OTROS MEDIOS DE IMPRESIÓN (PIEDRAS TIPOGRÁFICAS, CLICHÉS DE METAL O PLÁSTICO PARA IMPRESORAS OFFSET' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28299801', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE MAQUINARIA PARA IMPRENTA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C28299901', 
                    'descripcion' => 'FABRICACIÓN DE OTRO TIPO DE MAQUINARIA Y EQUIPO DE USO ESPECIAL: MAQUINARIA O APARATOS PARA LA SEPARACIÓN DE ISÓTOPOS, ROBOTS INDUSTRIALES DE USO ESPECIAL PARA LA REALIZACIÓN DE MÚLTIPLES TAREAS, SECADORES DE OTROS MATERIALES, MAQUINAS PARA FABRICAR CUERDAS, EQUIPO DE ALINEACIÓN Y EQUILIBRADO (BALANCEO) DE NEUMÁTICOS; EQUIPO DE EQUILIBRADO (EXCEPTO EL DE EQUILIBRADO DE RUEDAS), EQUIPO AUTOMÁTICO PARA BOLERAS, ARTEFACTOS DE LANZAMIENTO PARA AERONAVES, CATAPULTAS PARA PORTAAVIONES Y EQUIPO CONEXO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29100101', 
                    'descripcion' => 'FABRICACIÓN DE AUTOMÓVILES DE PASAJEROS, VEHÍCULOS PARA TODO TERRENO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29100102', 
                    'descripcion' => 'FABRICACIÓN DE AUTOBUSES, TROLEBUSES, GO-CARTS Y VEHÍCULOS SIMILARES, INCLUIDOS VEHÍCULOS DE CARRERAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29100201', 
                    'descripcion' => 'FABRICACIÓN DE VEHÍCULOS PARA EL TRANSPORTE DE MERCANCÍAS: CAMIONETAS, CAMIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29100202', 
                    'descripcion' => 'FABRICACIÓN DE CAMIONES, VOLQUETAS, RECOLECTORES DE BASURA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29100203', 
                    'descripcion' => 'FABRICACIÓN DE TRACTORES PARA SEMIRREMOLQUES DE CIRCULACIÓN POR CARRETERA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29100301', 
                    'descripcion' => 'FABRICACIÓN DE MOTORES PARA VEHÍCULOS AUTOMOTORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29100401', 
                    'descripcion' => 'FABRICACIÓN DE CHASIS EQUIPADOS CON MOTORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29100501', 
                    'descripcion' => 'FABRICACIÓN DE OTROS VEHÍCULOS AUTOMOTORES: TRINEOS MOTORIZADOS, CARRITOS AUTOPROPULSADOS PARA CAMPOS DE GOLF, VEHÍCULOS ANFIBIOS, CAMIONES DE BOMBEROS, CAMIONES BARREDORES, BIBLIOTECAS MÓVILES, VEHÍCULOS BLINDADOS, CAMIONES HORMIGONERA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29100601', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE VEHÍCULOS AUTOMOTORES, RECONSTRUCCIÓN, RECTIFICACIÓN EN FÁBRICA DE SUS MOTORES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29200101', 
                    'descripcion' => 'FABRICACIÓN DE CARROCERÍAS, INCLUIDAS CABINAS PARA VEHÍCULOS AUTOMOTORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29200102', 
                    'descripcion' => 'FABRICACIÓN DE CARROCERÍAS PARA VEHÍCULOS AUTOMOTORES, DE TURISMO, CAMIONES, VEHÍCULOS DE USO ESPECIAL, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29200201', 
                    'descripcion' => 'FABRICACIÓN DE REMOLQUES Y SEMIRREMOLQUES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29200202', 
                    'descripcion' => 'FABRICACIÓN DE REMOLQUES Y SEMIRREMOLQUES: PARA EL TRANSPORTE DE MERCANCÍAS: CAMIONES CISTERNA, DE MUDANZAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29200203', 
                    'descripcion' => 'FABRICACIÓN DE REMOLQUES Y SEMIRREMOLQUES: PARA EL TRANSPORTE DE PASAJEROS: CARAVANAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29200204', 
                    'descripcion' => 'FABRICACIÓN DE PARTES Y PIEZAS DE REMOLQUES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29200205', 
                    'descripcion' => 'FABRICACIÓN DE PARTES Y PIEZAS DE SEMIRREMOLQUES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29200301', 
                    'descripcion' => 'FABRICACIÓN DE CONTENEDORES PARA SU ACARREO POR UNO O MÁS MEDIOS DE TRANSPORTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29200401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN, ENSAMBLAJE Y EQUIPAMIENTO DE CARROCERÍAS PARA VEHÍCULOS AUTOMOTORES, REMOLQUES Y SEMIRREMOLQUES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29300101', 
                    'descripcion' => 'FABRICACIÓN DE PARTES, PIEZAS Y ACCESORIOS DE CARROCERÍAS PARA VEHÍCULOS AUTOMOTORES: CINTURONES DE SEGURIDAD, DISPOSITIVOS INFLABLES DE SEGURIDAD (AIRBAG), PUERTAS, PARACHOQUES, ASIENTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29300201', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO ELÉCTRICO PARA VEHÍCULOS AUTOMOTORES, COMO GENERADORES, ALTERNADORES, BUJÍAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29300202', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO ELÉCTRICO PARA VEHÍCULOS AUTOMOTORES MONTAJE DE TABLEROS DE INSTRUMENTOS, REGULADORES DE TENSIÓN, ACCIONADORES DE ENGRANAJES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29300203', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO ELÉCTRICO PARA VEHÍCULOS AUTOMOTORES, COMO CABLEADOS PREFORMADOS PARA EL SISTEMA DE ENCENDIDO, SISTEMAS ELÉCTRICOS DE APERTURA Y CIERRE DE VENTANILLAS Y PUERTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29300301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE PARTES, PIEZAS Y ACCESORIOS PARA VEHÍCULOS AUTOMOTORES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C29300901', 
                    'descripcion' => 'FABRICACIÓN DE OTRAS PARTES, PIEZAS Y ACCESORIOS PARA VEHÍCULOS AUTOMOTORES: FRENOS, CAJAS DE CAMBIOS, EJES, AROS DE RUEDAS, AMORTIGUADORES, RADIADORES, SILENCIADORES, TUBOS DE ESCAPE, CATALIZADORES, EMBRAGUES, VOLANTES, COLUMNAS Y CAJAS DE DIRECCIÓN, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30110101', 
                    'descripcion' => 'CONSTRUCCIÓN DE BUQUES COMERCIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30110102', 
                    'descripcion' => 'CONSTRUCCIÓN DE BUQUES DE PASAJEROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30110103', 
                    'descripcion' => 'CONSTRUCCIÓN DE TRANSBORDADORES, BUQUES MERCANTES, PETROLEROS, REMOLCADORES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30110201', 
                    'descripcion' => 'CONSTRUCCIÓN DE BUQUES DE GUERRA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30110301', 
                    'descripcion' => 'CONSTRUCCIÓN DE PESQUEROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30110302', 
                    'descripcion' => 'CONSTRUCCIÓN DE BUQUES FACTORÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30110303', 
                    'descripcion' => 'CONSTRUCCIÓN DE EMBARCACIONES DISEÑADAS O EQUIPADAS PARA LA INVESTIGACIÓN CIENTÍFICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30110401', 
                    'descripcion' => 'CONSTRUCCIÓN DE DIQUES FLOTANTES,  PLATAFORMAS DE PERFORACIÓN FLOTANTES O SUMERGIBLES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30110402', 
                    'descripcion' => 'CONSTRUCCIÓN DE PANTALANES FLOTANTES, PONTONES, EMBARCADEROS FLOTANTES, BOYAS, DEPÓSITOS FLOTANTES, BALSAS INFLABLES DISTINTAS DE LAS DE RECREO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30110403', 
                    'descripcion' => 'CONSTRUCCIÓN DE GRÚAS FLOTANTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30110404', 
                    'descripcion' => 'CONSTRUCCIÓN DE ESTRUCTURAS FLOTANTES: GABARRAS,, AERODESLIZADORES (EXCEPTO LOS DE RECREO), SECCIONES PARA BUQUES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30110501', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA CONSTRUCCIÓN DE BUQUES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30110502', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA CONSTRUCCIÓN DE ESTRUCTURAS FLOTANTES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30110601', 
                    'descripcion' => 'DESGUAZAMIENTO DE EMBARCACIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30120101', 
                    'descripcion' => 'FABRICACIÓN DE BOTES Y BALSAS INFLABLES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30120201', 
                    'descripcion' => 'CONSTRUCCIÓN DE VELEROS, PROVISTOS O NO DE MOTOR AUXILIAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30120301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA CONSTRUCCIÓN DE EMBARCACIONES DE RECREO Y DEPORTE A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30120901', 
                    'descripcion' => 'FABRICACIÓN DE OTRAS EMBARCACIONES DE RECREO Y DEPORTE: EMBARCACIONES PERSONALES, ESQUIFES AERODESLIZADORES DE RECREO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30120902', 
                    'descripcion' => 'FABRICACIÓN DE MOTOS ACUÁTICAS, EMBARCACIONES DE MOTOR, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30120903', 
                    'descripcion' => 'FABRICACIÓN DE OTRAS EMBARCACIONES DE RECREO Y DEPORTE: CANOAS, KAYAKS, BOTES DE REMO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30200101', 
                    'descripcion' => 'FABRICACIÓN DE LOCOMOTORAS ELÉCTRICAS, DIESEL, INCLUIDO VAGONES PARA FERROCARRILES MINEROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30200102', 
                    'descripcion' => 'FABRICACIÓN DE LOCOMOTORAS DE VAPOR Y DE OTROS TIPOS, INCLUIDO VAGONES PARA FERROCARRILES MINEROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30200201', 
                    'descripcion' => 'FABRICACIÓN DE VAGONES DE PASAJEROS, FURGONES Y VAGONES DE PLATAFORMA AUTOPROPULSADOS DE TRANVÍA Y DE FERROCARRIL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30200202', 
                    'descripcion' => 'FABRICACIÓN DE VEHÍCULOS AUTOPROPULSADOS DE MANTENIMIENTO Y DE SERVICIO PARA TRANVÍAS Y FERROCARRILES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30200301', 
                    'descripcion' => 'FABRICACIÓN DE MATERIAL RODANTE NO AUTOPROPULSADO PARA TRANVÍAS Y FERROCARRILES: VAGONES DE PASAJEROS, FURGONES DE CARGA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30200302', 
                    'descripcion' => 'FABRICACIÓN DE VAGONES CISTERNA, FURGONES Y VAGONES DE VOLTEO, FURGONES TALLER, VAGONES GRÚA, TÉNDERES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30200401', 
                    'descripcion' => 'FABRICACIÓN DE PARTES Y PIEZAS ESPECIALES DE LOCOMOTORAS Y TRANVÍAS Y DE SU MATERIAL RODANTE: BOGIES, EJES Y RUEDAS, FRENOS Y PIEZAS DE FRENOS, GANCHOS Y MECANISMOS DE ENGANCHE, TOPES Y PIEZAS DE TOPES, AMORTIGUADORES, BASTIDORES DE VAGONES Y LOCOMOTORAS, CARROCERÍAS, PLATAFORMAS DE INTERCOMUNICACIÓN, ETCÉTERA, INCLUIDO ASIENTOS PARA VAGONES DE FERROCARRIL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30200501', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO MECÁNICO Y ELECTROMECÁNICO DE SEÑALIZACIÓN, SEGURIDAD Y CONTROL DE TRÁFICO PARA FERROCARRILES, TRANVÍAS, CARRETERAS, VÍAS DE NAVEGACIÓN INTERIORES, APARCAMIENTOS, AEROPUERTOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30200601', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE LOCOMOTORAS Y MATERIAL RODANTE A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30300101', 
                    'descripcion' => 'FABRICACIÓN DE AERONAVES PARA EL TRANSPORTE DE MERCANCÍAS O DE PASAJEROS, PARA DEFENSA MILITAR, DEPORTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30300102', 
                    'descripcion' => 'FABRICACIÓN DE AVIONES, HELICÓPTEROS; FABRICACIÓN APARATOS DE ENTRENAMIENTO DE VUELO EN TIERRA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30300201', 
                    'descripcion' => 'FABRICACIÓN DE DIRIGIBLES Y GLOBOS DE AIRE CALIENTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30300202', 
                    'descripcion' => 'FABRICACIÓN DE PLANEADORES, ALAS DELTA, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30300301', 
                    'descripcion' => 'FABRICACIÓN DE NAVES ESPACIALES Y VEHÍCULOS DE LANZAMIENTO DE NAVES ESPACIALES, SATÉLITES, SONDAS PLANETARIAS, ESTACIONES ORBITALES Y TRANSBORDADORES ESPACIALES INCLUIDO MISILES BALÍSTICOS INTERCONTINENTALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30300401', 
                    'descripcion' => 'FABRICACIÓN DE PARTES, PIEZAS Y ACCESORIOS PARA AERONAVES DE ESTA CLASE: MOTORES DEL TIPO UTILIZADO GENERALMENTE EN AERONAVES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30300402', 
                    'descripcion' => 'FABRICACIÓN DE ESTATORREACTORES, PULSORREACTORES Y MOTORES DE COHETES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30300403', 
                    'descripcion' => 'FABRICACIÓN DE PARTES, PIEZAS Y ACCESORIOS PARA TURBOPROPULSORES DE REACCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30300404', 
                    'descripcion' => 'FABRICACIÓN DE PARTES, PIEZAS Y ACCESORIOS PARA TURBOPROPULSORES DE HÉLICE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30300405', 
                    'descripcion' => 'FABRICACIÓN DE TURBOPROPULSORES DE REACCIÓN Y DE HÉLICE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30300406', 
                    'descripcion' => 'FABRICACIÓN DE PARTES, PIEZAS Y ACCESORIOS PARA AERONAVES DE ESTA CLASE: ENSAMBLADURAS PRINCIPALES, COMO FUSELAJES, ALAS, PUERTAS, ASIENTOS PARA AERONAVES, PANELES DE MANDO, TRENES DE ATERRIZAJE, DEPÓSITOS DE COMBUSTIBLE, GÓNDOLAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30300407', 
                    'descripcion' => 'FABRICACIÓN DE PARTES, PIEZAS Y ACCESORIOS PARA GLOBOS, DIRIGIBLES Y NAVES ESPECIALES: ENSAMBLADURAS PRINCIPALES, COMO FUSELAJES, ALAS, PUERTAS, ASIENTOS PARA AERONAVES, PANELES DE MANDO, TRENES DE ATERRIZAJE, DEPÓSITOS DE COMBUSTIBLE, GÓNDOLAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30300408', 
                    'descripcion' => 'FABRICACIÓN DE PARTES, PIEZAS Y ACCESORIOS PARA AERONAVES DE ESTA CLASE: HÉLICES, ROTORES DE HELICÓPTERO Y PALAS DE HÉLICE PROPULSADAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30300501', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE AERONAVES Y NAVES ESPECIALES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30300502', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE MOTORES DE AERONAVES Y NAVES ESPECIALES Y MAQUINARIA CONEXA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30400101', 
                    'descripcion' => 'FABRICACIÓN DE VEHÍCULOS MILITARES DE COMBATE: TANQUES DE COMBATE, VEHÍCULOS ANFIBIOS BLINDADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30400201', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE VEHÍCULOS MILITARES DE COMBATE A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30910101', 
                    'descripcion' => 'FABRICACIÓN DE MOTOCICLETAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30910102', 
                    'descripcion' => 'FABRICACIÓN DE VELOMOTORES Y BICICLETAS CON MOTOR AUXILIAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30910201', 
                    'descripcion' => 'FABRICACIÓN DE MOTORES PARA MOTOCICLETAS, PIEZAS, PARTES Y ACCESORIOS DE MOTOCICLETAS INCLUIDO SIDECARS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30910301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE MOTOCICLETAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30920101', 
                    'descripcion' => 'FABRICACIÓN DE BICICLETAS NO MOTORIZADAS Y OTROS VEHÍCULOS SIMILARES, COMO TRICICLOS DE REPARTO O PARA OTROS USOS, TÁNDEMS, BICICLETAS Y TRICICLOS PARA NIÑOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30920102', 
                    'descripcion' => 'FABRICACIÓN DE PARTES, PIEZAS Y ACCESORIOS DE BICICLETAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30920201', 
                    'descripcion' => 'FABRICACIÓN DE SILLAS DE RUEDAS PARA INVÁLIDOS, MOTORIZADOS O NO, FABRICACIÓN DE PARTES, PIEZAS Y ACCESORIOS DE SILLAS DE RUEDAS PARA INVÁLIDOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30920301', 
                    'descripcion' => 'FABRICACIÓN DE COCHECITOS PARA BEBÉS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30920401', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE BICICLETAS Y DE SILLAS DE RUEDAS PARA INVÁLIDOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30990101', 
                    'descripcion' => 'FABRICACIÓN DE VEHÍCULOS DE PROPULSIÓN MANUAL: CARRITOS PARA EQUIPAJE, CARRETILLAS, TRINEOS, CARRITOS PARA SUPERMERCADOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30990201', 
                    'descripcion' => 'FABRICACIÓN DE VEHÍCULOS DE TRACCIÓN ANIMAL: CALESAS, CALESINES, CARROZAS FÚNEBRES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C30990301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE OTROS TIPOS DE EQUIPO DE TRANSPORTE N.C.P A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C31000101', 
                    'descripcion' => 'FABRICACIÓN DE MUEBLES DE MADERA Y SUS PARTES: PARA EL HOGAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C31000102', 
                    'descripcion' => 'FABRICACIÓN DE MUEBLES DE MADERA Y SUS PARTES: PARA OFICINAS, TALLERES, HOTELES, RESTAURANTES, IGLESIAS, ESCUELAS, MUEBLES ESPECIALES PARA LOCALES COMERCIALES, MUEBLES PARA MÁQUINAS DE COSER, TELEVISIONES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C31000201', 
                    'descripcion' => 'FABRICACIÓN DE MUEBLES DE METAL Y SUS PARTES: PARA EL HOGAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C31000202', 
                    'descripcion' => 'FABRICACIÓN DE MUEBLES DE METAL Y SUS PARTES: OFICINA, TALLERES, HOTELES, RESTAURANTES, IGLESIAS, ESCUELAS, MUEBLES ESPECIALES PARA LOCALES COMERCIALES Y OTROS USOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C31000301', 
                    'descripcion' => 'FABRICACIÓN DE MUEBLES DE MATERIALES PLÁSTICOS Y SUS PARTES PARA CUALQUIER USO (EXCEPTO MUEBLES PARA USO MÉDICO O AFINES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C31000401', 
                    'descripcion' => 'FABRICACIÓN DE MUEBLES DE OTROS MATERIALES Y SUS PARTES (EXCEPTO DE CERÁMICA, HORMIGÓN O PIEDRA) PARA CUALQUIER USO COMO: SILLAS Y ASIENTOS DE JARDÍN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C31000501', 
                    'descripcion' => 'FABRICACIÓN DE COLCHONES: COLCHONES DE MUELLES Y RELLENOS O PROVISTOS DE ALGÚN MATERIAL DE SUSTENTACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C31000502', 
                    'descripcion' => 'FABRICACIÓN DE COLCHONES: COLCHONES DE CAUCHO CELULAR Y DE PLÁSTICO SIN FORRO, FABRICACIÓN DE BASES DE COLCHÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C31000601', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN, REPARACIÓN Y ACABADO (TAPIZADO DE SILLAS Y SILLONES, LACADO, PINTADO, BARNIZADO CON MUÑEQUILLA, ETCÉTERA) DE MUEBLES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C31000602', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN: RESTAURACIÓN DE MUEBLES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C31000701', 
                    'descripcion' => 'FABRICACIÓN DE MUEBLES PARA TODO TIPO DE TRANSPORTE DE CUALQUIER MATERIAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C31000801', 
                    'descripcion' => 'FABRICACIÓN DE PARTES Y PIEZAS DE TODO TIPO DE MUEBLES DE CUALQUIER MATERIAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32110101', 
                    'descripcion' => 'PRODUCCIÓN DE PERLAS LABRADAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32110102', 
                    'descripcion' => 'PRODUCCIÓN DE PIEDRAS PRECIOSAS Y SEMIPRECIOSAS LABRADAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32110103', 
                    'descripcion' => 'PRODUCCIÓN DE PIEDRAS DE CALIDAD INDUSTRIAL Y DE PIEDRAS PRECIOSAS Y SEMIPRECIOSAS SINTÉTICAS Y RECONSTRUIDAS, TALLA DE DIAMANTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32110201', 
                    'descripcion' => 'FABRICACIÓN DE JOYAS DE METALES PRECIOSOS, INCLUIDO LA FABRICACIÓN DE CORREAS Y CINTAS PARA RELOJES, PULSERAS Y PITILLERAS DE METALES PRECIOSOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32110202', 
                    'descripcion' => 'FABRICACIÓN DE METALES COMUNES CHAPADOS CON METALES PRECIOSOS, DE PIEDRAS PRECIOSAS Y SEMIPRECIOSAS; Y DE COMBINACIONES DE METALES PRECIOSOS Y PIEDRAS PRECIOSAS Y SEMIPRECIOSAS Y OTROS MATERIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32110301', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE ORFEBRERÍA ELABORADOS CON METALES PRECIOSOS O METALES COMUNES CHAPADOS CON METALES PRECIOSOS: CUBERTERÍAS, VAJILLAS Y SERVICIOS DE MESA, ARTÍCULOS DE TOCADOR, ARTÍCULOS DE ESCRITORIO Y OFICINA, ARTÍCULOS DE USO RELIGIOSO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32110401', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE USO TÉCNICO Y DE LABORATORIO ELABORADOS CON METALES PRECIOSOS (EXCEPTO INSTRUMENTOS Y PIEZAS DE INSTRUMENTOS): CRISOLES, ESPÁTULAS, ÁNODOS DE GALVANOPLASTIA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32110501', 
                    'descripcion' => 'FABRICACIÓN DE MONEDAS, INCLUIDAS MONEDAS DE CURSO LEGAL, SEAN O NO DE METALES PRECIOSOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32110601', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE JOYAS Y ARTÍCULOS CONEXOS COMO: EL GRABADO DE OBJETOS PERSONALES DE METALES PRECIOSOS Y DE METALES NO PRECIOSOS, A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32110701', 
                    'descripcion' => 'FABRICACIÓN DE MEDALLAS Y MEDALLONES, SEAN O NO DE METALES PRECIOSOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32110801', 
                    'descripcion' => 'FABRICACIÓN DE PARTES Y PIEZAS DE JOYAS O DE ARTÍCULOS DE ORFEBRERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32110901', 
                    'descripcion' => 'FABRICACIÓN Y PRODUCCIÓN DE OTROS OBJETOS DE JOYERÍA Y ARTÍCULOS CONEXOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32120101', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE BISUTERÍA: ANILLOS, BRAZALETES, COLLARES Y ARTÍCULOS DE BISUTERÍAS SIMILARES DE METALES COMUNES CHAPADOS CON METALES PRECIOSOS, JOYAS QUE CONTIENEN PIEDRAS DE IMITACIÓN, COMO DIAMANTES U OTRAS GEMAS DE IMITACIÓN Y SIMILARES, INCLUIDO LA FABRICACIÓN DE CORREAS DE METAL PARA RELOJES (EXCEPTO LAS DE METALES PRECIOSOS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32120201', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE BISUTERÍA Y ARTÍCULOS CONEXOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32200101', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS DE CUERDA, INSTRUMENTOS DE CUERDA CON TECLADO, INCLUIDOS PIANOS AUTOMÁTICOS, GUITARRAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32200201', 
                    'descripcion' => 'FABRICACIÓN DE CAJAS DE MÚSICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32200202', 
                    'descripcion' => 'FABRICACIÓN DE ORGANILLOS, ÓRGANOS DE VAPOR, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32200203', 
                    'descripcion' => 'FABRICACIÓN DE ÓRGANOS DE TUBO Y TECLADO, INCLUIDOS ARMONIOS E INSTRUMENTOS DE TECLADO SIMILARES CON LENGÜETAS METÁLICAS LIBRES, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32200301', 
                    'descripcion' => 'FABRICACIÓN DE ACORDEONES E INSTRUMENTOS SIMILARES, INCLUIDAS ARMÓNICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32200302', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS DE VIENTO: DE MADERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32200303', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS DE VIENTO: DE BRONCE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32200304', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS DE VIENTO: CUERNOS DE LLAMADA Y OTROS INSTRUMENTOS SONOROS DE BOCA PARA LLAMADA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32200305', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS DE VIENTO: SILBATOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32200401', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS DE PERCUSIÓN: TAMBORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32200402', 
                    'descripcion' => 'FABRICACIÓN DE XILÓFONOS, CASTAÑUELAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32200501', 
                    'descripcion' => 'FABRICACIÓN DE PARTES, PIEZAS Y ACCESORIOS DE INSTRUMENTOS: METRÓNOMOS, DIAPASONES DE PERCUSIÓN Y DE BOCA, TARJETAS, DISCOS Y ROLLOS PARA INSTRUMENTOS MECÁNICOS AUTOMÁTICOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32200601', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE INSTRUMENTOS MUSICALES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32200901', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS MUSICALES CUYO SONIDO SE PRODUCE ELECTRÓNICAMENTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32200902', 
                    'descripcion' => 'FABRICACIÓN DE OTROS INSTRUMENTOS MUSICALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32300101', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO PARA GIMNASIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32300102', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS Y EQUIPO DE CUALQUIER MATERIAL PARA LA PRÁCTICA DE DEPORTES Y JUEGOS AL AIRE LIBRE Y BAJO TECHO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32300103', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS Y EQUIPO PARA ATLETISMO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32300104', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS Y EQUIPO DE CUALQUIER MATERIAL PARA LA PRÁCTICA DE DEPORTES DE PISCINA Y PISTA DE REMO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32300105', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS Y EQUIPO DE CUALQUIER MATERIAL PARA LA PRÁCTICA DE DEPORTES: BALONES DUROS, BLANDOS E INFLABLES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32300106', 
                    'descripcion' => 'FABRICACIÓN DE RAQUETAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32300107', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS Y EQUIPO DE CUALQUIER MATERIAL PARA LA PRÁCTICA DE DEPORTES Y JUEGOS AL AIRE LIBRE Y BAJO TECHO: BATES Y MAZOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32300108', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS Y EQUIPO DE CUALQUIER MATERIAL PARA LA PRÁCTICA DE DEPORTES: ESQUÍES, FIJACIONES Y BASTONES DE ESQUÍ, BOTAS DE ESQUÍ, TABLAS DE VELA Y DE SURF, PATINES DE HIELO, PATINES DE RUEDAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32300201', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS PARA LA CAZA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32300202', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS PARA ALPINISMO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32300203', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS PARA LA PESCA DEPORTIVA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32300204', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DEPORTIVOS: REDES DE MANO, ARCOS Y BALLESTAS, GUANTES Y TOCADOS DE CUERO PARA LA PRÁCTICA DE DEPORTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32300301', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE ARTÍCULOS DE DEPORTE A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32400101', 
                    'descripcion' => 'FABRICACIÓN DE MUÑECOS QUE REPRESENTAN PERSONAJES, ANIMALES DE JUGUETE, MUÑECAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32400102', 
                    'descripcion' => 'FABRICACIÓN DE PIEZAS Y ACCESORIOS (VESTIDOS) PARA MUÑECAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32400201', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS MUSICALES DE JUGUETE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32400301', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS PARA JUEGOS DE FERIAS DE ATRACCIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32400302', 
                    'descripcion' => 'FABRICACIÓN DE MESAS DE PING PONG' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32400303', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS PARA JUEGOS DE BOLOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32400304', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS PARA JUEGOS DE MESA O JUEGOS DE SALÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32400305', 
                    'descripcion' => 'FABRICACIÓN DE JUEGOS ACCIONADOS CON MONEDAS, BILLARES, MESAS ESPECIALES PARA JUEGOS DE CASINO, AJEDREZ, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32400306', 
                    'descripcion' => 'FABRICACIÓN DE JUEGOS ELECTRÓNICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32400307', 
                    'descripcion' => 'FABRICACIÓN DE VIDEO JUEGOS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32400308', 
                    'descripcion' => 'FABRICACIÓN DE JUEGOS DE CHASCO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32400401', 
                    'descripcion' => 'FABRICACIÓN DE JUGUETES CON RUEDAS UTILIZABLES COMO VEHÍCULOS, MONOPATINES, INCLUIDOS BICICLETAS Y TRICICLOS DE PLÁSTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32400501', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE JUEGOS Y JUGUETES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32400901', 
                    'descripcion' => 'FABRICACIÓN DE MODELOS A ESCALA REDUCIDA Y MODELOS RECREATIVOS SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32400902', 
                    'descripcion' => 'FABRICACIÓN DE ROMPECABEZAS Y ARTÍCULOS SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32400903', 
                    'descripcion' => 'FABRICACIÓN DE TRENES Y JUEGOS ELÉCTRICOS, ARTÍCULOS SIMILARES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32400904', 
                    'descripcion' => 'FABRICACIÓN DE OTROS JUEGOS Y JUGUETES: ARMAS DE JUGUETES, JUGUETES PARA MASCOTAS, JUEGOS DE CONSTRUCCIONES, JUEGOS DE TABLERO, NAIPES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32501101', 
                    'descripcion' => 'FABRICACIÓN DE HORNOS PARA LABORATORIOS DENTALES, APARATOS DE DESTILACIÓN Y CENTRIFUGADORAS PARA LABORATORIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32501201', 
                    'descripcion' => 'FABRICACIÓN DE MAQUINARIA DE LIMPIEZA POR ULTRASONIDOS  Y ESTERILIZADORES PARA LABORATORIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32501301', 
                    'descripcion' => 'FABRICACIÓN DE MESAS DE OPERACIONES, CAMILLAS DE RECONOCIMIENTO MÉDICO, CAMAS DE HOSPITAL CON DISPOSITIVOS MECÁNICOS, (INCLUIDOS SILLONES DE DENTISTA CON EQUIPO ODONTOLÓGICO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32501302', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS PARA MEDICINA, CIRUGÍA, ODONTOLOGÍA Y VETERINARIA BASADOS EN EL USO DE RAYOS X' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32501303', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS PARA MEDICINA, CIRUGÍA, ODONTOLOGÍA Y VETERINARIA, COMO: BISTURÍS, ALICATES DE CIRUGÍA, PINZAS DE CIRUGÍA, INSTRUMENTOS DE ODONTOLOGÍA, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32501304', 
                    'descripcion' => 'FABRICACIÓN DE INSTRUMENTOS PARA MEDICINA, CIRUGÍA, ODONTOLOGÍA Y VETERINARIA COMO: ESPEJOS REFLECTORES, ENDOSCOPIOS, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32501401', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS ORTOPÉDICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32501402', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS PROSTÉTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32501403', 
                    'descripcion' => 'FABRICACIÓN DE OJOS DE CRISTAL, DIENTES POSTIZOS, PUENTES, ETCÉTERA, EN LABORATORIOS MÉDICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32501501', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS DE MECANOTERAPIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32501502', 
                    'descripcion' => 'FABRICACIÓN DE MÁQUINAS DE MASAJE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32501503', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS PARA PRUEBAS PSICOLÓGICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32501504', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS DE OZONOTERAPIA, OXIGENOTERAPIA Y RESPIRACIÓN ARTIFICIAL, APARATOS RESPIRATORIOS TERAPÉUTICOS Y OTROS APARATOS DE RESPIRACIÓN Y MÁSCARAS DE GAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32501601', 
                    'descripcion' => 'FABRICACIÓN DE OTRO EQUIPO MÉDICO Y QUIRÚRGICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32502101', 
                    'descripcion' => 'FABRICACIÓN DE SABANILLAS, HILOS Y GASAS ESTÉRILES DE USO QUIRÚRGICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32502201', 
                    'descripcion' => 'FABRICACIÓN DE EMPASTES Y CEMENTOS DENTALES (EXCEPTO ADHESIVOS PARA DENTADURAS), CERAS DENTALES Y OTRAS PREPARACIONES DE USO ODONTOLÓGICO; FABRICACIÓN DE CEMENTOS PARA LA RECONSTRUCCIÓN DE HUESO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32502301', 
                    'descripcion' => 'FABRICACIÓN DE PLACAS Y TORNILLOS PARA FIJACIÓN DE HUESOS, JERINGUILLAS, AGUJAS, CATÉTERES, CÁNULAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32502401', 
                    'descripcion' => 'FABRICACIÓN DE PRODUCTOS OFTÁLMICOS, LENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32502402', 
                    'descripcion' => 'FABRICACIÓN DE GAFAS, GAFAS DE SOL, LENTES DE GRADUACIÓN, LENTES DE CONTACTO, ANTEOJOS DE PROTECCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32503001', 
                    'descripcion' => 'SERVICIOS DE APOYO A LA FABRICACIÓN DE INSTRUMENTOS Y MATERIALES MÉDICOS Y ODONTOLÓGICOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32901101', 
                    'descripcion' => 'FABRICACIÓN DE SELLOS PARA FECHAR, CERRAR O NUMERAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32901102', 
                    'descripcion' => 'FABRICACIÓN DE APARATOS MANUALES PARA IMPRIMIR Y ESTAMPAR EN RELIEVE, MEMBRETES, APARATOS DE IMPRESIÓN MANUAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32901103', 
                    'descripcion' => 'FABRICACIÓN DE CINTAS PREPARADAS PARA MÁQUINAS DE ESCRIBIR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32901104', 
                    'descripcion' => 'FABRICACIÓN DE ALMOHADILLAS ENTINTADAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32901201', 
                    'descripcion' => 'FABRICACIÓN DE PLUMAS Y LÁPICES DE TODA CLASE, SEAN O NO MECÁNICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32901202', 
                    'descripcion' => 'FABRICACIÓN DE MINAS PARA LÁPICES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32901301', 
                    'descripcion' => 'FABRICACIÓN DE GLOBOS TERRÁQUEOS Y OTROS INSTRUMENTOS, APARATOS Y MODELOS DISEÑADOS PARA DEMOSTRACIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32902101', 
                    'descripcion' => 'FABRICACIÓN DE BOTONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32902102', 
                    'descripcion' => 'FABRICACIÓN DE BROCHES DE PRESIÓN, CORCHETES DE PRESIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32902103', 
                    'descripcion' => 'FABRICACIÓN DE CIERRES DE CREMALLERA (EXCEPTO METÁLICOS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32902201', 
                    'descripcion' => 'FABRICACIÓN DE ENCENDEDORES SEAN O NO MECÁNICOS, ELÉCTRICOS Y DE OTRO TIPO INCLUIDO SUS REPUESTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32902301', 
                    'descripcion' => 'FABRICACIÓN DE PARAGUAS, SOMBRILLAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32902302', 
                    'descripcion' => 'FABRICACIÓN DE BASTONES, BASTONES-ASIENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32902303', 
                    'descripcion' => 'FABRICACIÓN DE LÁTIGOS Y FUSTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32902401', 
                    'descripcion' => 'FABRICACIÓN DE PIPAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32902402', 
                    'descripcion' => 'FABRICACIÓN PEINES, PASADORES PARA EL CABELLO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32902403', 
                    'descripcion' => 'FABRICACIÓN DE PELUCAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32902404', 
                    'descripcion' => 'FABRICACIÓN DE BARBAS Y CEJAS POSTIZAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32902405', 
                    'descripcion' => 'FABRICACIÓN DE VAPORIZADORES DE PERFUME' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32902501', 
                    'descripcion' => 'FABRICACIÓN DE TERMOS PARA USO PERSONAL Y DOMÉSTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32902502', 
                    'descripcion' => 'FABRICACIÓN DE RECIPIENTES HERMÉTICOS PARA USO PERSONAL Y DOMÉSTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32902601', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DE BAZAR Y USO PERSONAL: BORLAS DE POLVOS, BLOQUES DESBASTADOS DE MADERA PARA LA FABRICACIÓN DE PIPAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32903101', 
                    'descripcion' => 'FABRICACIÓN DE EQUIPO DE PROTECCIÓN Y SEGURIDAD: ROPA IGNÍFUGA Y OTRAS PRENDAS DE PROTECCIÓN, CINTURONES DE SEGURIDAD PARA INSTALADORES Y CELADORES DE LÍNEAS TELEFÓNICAS Y DE ELECTRICIDAD Y OTROS CINTURONES DE USO OCUPACIONAL, SALVAVIDAS DE CORCHO, CASCOS DE PLÁSTICO Y OTRO EQUIPO PERSONAL DE SEGURIDAD DE PLÁSTICO (POR EJEMPLO, CASCOS PARA DEPORTES), ROPA DE PROTECCIÓN PARA BOMBEROS, CASCOS DE METAL Y OTRO EQUIPO PERSONAL DE SEGURIDAD DE METAL, TAPONES PARA LOS OÍDOS Y LA NARIZ (POR EJEMPLO, PARA NADAR O PARA PROTEGERSE DEL RUIDO), MÁSCARAS DE GAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32903201', 
                    'descripcion' => 'FABRICACIÓN DE ESCOBAS Y CEPILLOS, INCLUIDOS CEPILLOS QUE FORMAN PARTE DE MÁQUINAS, MOPAS Y PLUMEROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32903202', 
                    'descripcion' => 'FABRICACIÓN DE BROCHAS, ALMOHADILLAS Y RODILLOS PARA PINTAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32903203', 
                    'descripcion' => 'FABRICACIÓN DE BARREDORAS MECÁNICOS MANUALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32903204', 
                    'descripcion' => 'FABRICACIÓN DE CEPILLOS PARA ASEO PERSONAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32903205', 
                    'descripcion' => 'FABRICACIÓN DE ESCOBILLAS DE GOMA Y OTROS CEPILLAS, ESCOBAS, CEPILLOS DE CALZADO Y DE ROPA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32903301', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE MATERIALES ANIMALES: HUESOS, MARFIL, CAREY, PLUMAS, HUESOS, TRIPAS, VEJIGAS, ETCÉTERA, INCLUIDO ACTIVIDADES DE TAXIDERMIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32903401', 
                    'descripcion' => 'FABRICACIÓN DE ATAÚDES Y URNAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32903501', 
                    'descripcion' => 'FABRICACIÓN DE VELAS, CIRIOS Y ARTÍCULOS SIMILARES, MANUFACTURAS MOLDEADAS DE CERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32903601', 
                    'descripcion' => 'FABRICACIÓN DE ARTÍCULOS DE BROMA Y ARTÍCULOS DE FANTASÍA (PIÑATAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32903901', 
                    'descripcion' => 'FABRICACIÓN DE CEDAZOS Y CRIBAS MANUALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32903902', 
                    'descripcion' => 'FABRICACIÓN DE MANIQUÍES DE SASTRE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32903903', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DIVERSOS: RAMILLETES Y CORONAS DE FLORES, CESTAS CON ARREGLOS FLORALES; FLORES, ARTIFICIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32903904', 
                    'descripcion' => 'FABRICACIÓN DE FRUTAS ARTIFICIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32903905', 
                    'descripcion' => 'FABRICACIÓN DE PLANTAS ARTIFICIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32903906', 
                    'descripcion' => 'FABRICACIÓN DE OTROS ARTÍCULOS DIVERSOS: PRODUCTOS DE TAGUA, ARTESANÍAS DE OTROS MATERIALES (EXCEPTO PLÁSTICO, PORCELANA, CERÁMICA Y MADERA), GELATINAS, MATERIAS VEGETALES O MINERALES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C32904001', 
                    'descripcion' => 'SERVICIOS DE APOYO A OTRAS INDUSTRIAS MANUFACTURERAS N.C.P A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33110101', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN DE: TANQUES, CISTERNAS, DEPÓSITOS, TAMBORES, CONTENEDORES DE METAL Y RECIPIENTES DE METAL, INCLUIDO LA REPARACIÓN DE LA CHAPA DE CALDERAS Y RADIADORES DE CALEFACCIÓN CENTRAL A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33110201', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE CAÑOS Y TUBERÍAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33110301', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN MEDIANTE SERVICIOS MÓVILES DE SOLDADURA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33110401', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE GENERADORES DE VAPOR DE AGUA Y OTROS VAPORES, INSTALACIONES AUXILIARES PARA GENERADORES DE VAPOR: CONDENSADORES, ECONOMIZADORES, RECALENTADORES, RECOLECTORES Y ACUMULADORES DE VAPOR, REACTORES NUCLEARES (EXCEPTO SEPARADORES DE ISÓTOPOS), PARTES PARA CALDERAS MARINAS O DE POTENCIA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33110901', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE OTROS PRODUCTOS ELABORADOS DE METAL: CARRITOS DE COMPRAS Y EQUIPO DE MANEJO DE MATERIALES, ARMAS DE FUEGO Y MUNICIONES (INCLUIDA LA REPARACIÓN DE ESCOPETAS DEPORTIVAS Y DE RECREO) A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33121101', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE MAQUINARIA Y TRACTORES DE USO AGROPECUARIO, FORESTAL Y PARA LA EXPLOTACIÓN MADERERA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33121201', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE MAQUINARIA PARA LA MINERÍA Y LA EXTRACCIÓN DE PETRÓLEO Y GAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33121202', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE MAQUINARIA PARA LA CONSTRUCCIÓN A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33121301', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE MAQUINARIA PARA LA ELABORACIÓN DE ALIMENTOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33121302', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE MAQUINARIA PARA LA ELABORACIÓN DE BEBIDAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33121303', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE MAQUINARIA PARA LA ELABORACIÓN DE TABACO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33121401', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE MAQUINARIA PARA LA PRODUCCIÓN DE TEXTILES, PRENDAS DE VESTIR Y ARTÍCULOS DE CUERO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33121501', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE MAQUINARIA PARA LA FABRICACIÓN DE PAPEL A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33121601', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE HORNOS PARA PROCESOS INDUSTRIALES, MAQUINARIA METALÚRGICA, HERRAMIENTAS Y ACCESORIOS PARA CORTAR Y CONFORMAR METALES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33121701', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE BOMBAS, EQUIPO DE PROPULSIÓN DE FLUIDOS Y EQUIPOS AFINES, ELEMENTOS DE TRANSMISIÓN E IMPULSIÓN A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33121801', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN DE VÁLVULAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33129101', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE MÁQUINAS Y HERRAMIENTAS DE OFICINA Y CONTABILIDAD A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO: MÁQUINAS DE ESCRIBIR, FOTOCOPIADORAS, BÁSCULAS, CALCULADORAS, SEAN O NO ELECTRÓNICAS ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33129201', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN DE MAQUINARIA DE USO COMERCIAL, MÁQUINAS DE VENTA AUTOMÁTICA, MÁQUINAS REGISTRADORAS, EQUIPO COMERCIAL DE REFRIGERACIÓN Y PURIFICACIÓN DE AIRE A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33129301', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE MOTORES DISTINTOS DE LOS DE VEHÍCULOS AUTOMOTORES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO: MOTORES DE BUQUES O DE LOCOMOTORAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33129901', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE OTROS TIPOS DE MAQUINARIA DE USO ESPECIAL DE LA DIVISIÓN 28 (FABRICACIÓN DE MAQUINARIA Y EQUIPO N.C.P.): EQUIPO DE MANIPULACIÓN DE MATERIALES (EQUIPO DE ELEVACIÓN Y MANIPULACIÓN, CARGA Y DESCARGA) Y OTRAS HERRAMIENTAS DE MANO MOTORIZADAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33130101', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DEL EQUIPO DE MEDICIÓN, PRUEBA, NAVEGACIÓN Y CONTROL A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO: INSTRUMENTOS DE MOTORES DE AERONAVES, EQUIPO DE MEDICIÓN DE EMISIONES DE VEHÍCULOS AUTOMOTORES, INSTRUMENTOS METEOROLÓGICOS, EQUIPO DE ENSAYO E INSPECCIÓN DE PROPIEDADES FÍSICAS, ELÉCTRICAS Y QUÍMICAS, INSTRUMENTOS DE PROSPECCIÓN, INSTRUMENTOS DE DETECCIÓN Y VIGILANCIA DE RADIACIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33130201', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE EQUIPO DE IRRADIACIÓN Y EQUIPO ELECTRÓNICO DE USO MÉDICO Y TERAPÉUTICO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO: EQUIPO DE TOMOGRAFÍA POR RESONANCIA MAGNÉTICA, ULTRASONIDOS DE USO MÉDICO, MARCAPASOS, APARATOS PARA SORDOS, ELECTROCARDIÓGRAFOS, EQUIPO ELECTRÓNICO DE ENDOSCOPIA, APARATOS DE IRRADIACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33130301', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE INSTRUMENTOS Y EQUIPO ÓPTICO DE LA CLASE SI SE UTILIZAN PRINCIPALMENTE CON FINES COMERCIALES, A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO COMO: BINOCULARES, MICROSCOPIOS (EXCEPTO LOS ELECTRÓNICOS Y PROTÓNICOS), TELESCOPIOS, PRISMAS Y LENTES (EXCEPTO LAS OFTÁLMICAS), EQUIPO FOTOGRÁFICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33140101', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE TRANSFORMADORES DE FUERZA Y DE DISTRIBUCIÓN,  TRANSFORMADORES PARA USOS ESPECIALES, MOTORES ELÉCTRICOS, GENERADORES Y MOTORES GENERADORES, CONVERTIDORES ELÉCTRICOS COMO: RECTIFICADORES E INVERSORES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33140201', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE DISPOSITIVOS Y APARATOS DE CONMUTACIÓN, RELÉS Y CONTROLES INDUSTRIALES, DISPOSITIVOS DE CABLEADO PORTADORES DE CORRIENTE Y DISPOSITIVOS DE CABLEADO NO PORTADORES DE CORRIENTE PARA CIRCUITOS ELÉCTRICOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33140301', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE EQUIPO DE ILUMINACIÓN (ALUMBRADO) ELÉCTRICO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33140901', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE OTROS EQUIPOS ELÉCTRICOS: BATERÍAS PRIMARIAS Y DE ALMACENAMIENTO, ETCÉTERA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO: MULTIMETROS, ELECTRÓMETROS ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33150101', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO CORRIENTE DE BUQUES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33150201', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE EMBARCACIONES DE RECREO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33150301', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE LOCOMOTORAS Y VAGONES (EXCEPTO LA RECONSTRUCCIÓN O CONVERSIÓN EN FÁBRICA) A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33150401', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE AERONAVES (EXCEPTO LA CONVERSIÓN, EL REACONDICIONAMIENTO Y LA RECONSTRUCCIÓN EN FÁBRICA) A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33150501', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN Y MANTENIMIENTO DE MOTORES DE AERONAVES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33150601', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN DE VAGONES Y VAGONETAS DE TRACCIÓN ANIMAL A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33190101', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN DE REDES DE PESCA, INCLUIDO SU REMIENDO, CORDAJES, APAREJOS, LONAS Y LONAS IMPERMEABLES, SACOS DE ALMACENAMIENTO DE ABONOS Y PRODUCTOS QUÍMICOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33190201', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN O REACONDICIONAMIENTO DE PALETAS, TONELES, BARRICAS Y EQUIPO SIMILAR DE MADERA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33190301', 
                    'descripcion' => 'SERVICIOS DE REPARACIÓN DE MÁQUINAS TRAGAMONEDAS Y OTROS JUEGOS ACCIONADOS CON MONEDAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33190401', 
                    'descripcion' => 'SERVICIOS DE RESTAURACIÓN DE ÓRGANOS Y OTROS INSTRUMENTOS MUSICALES HISTÓRICOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33200101', 
                    'descripcion' => 'SERVICIOS DE INSTALACIÓN DE MAQUINARIA INDUSTRIAL EN PLANTAS INDUSTRIALES, EQUIPO DE CONTROL DE PROCESOS INDUSTRIALES, ACTIVIDADES DE MECÁNICOS INSTALADORES, MONTAJE DE MÁQUINAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33200201', 
                    'descripcion' => 'SERVICIOS DE DESMANTELAMIENTO DE MAQUINARIA Y EQUIPO EN GRAN ESCALA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33200901', 
                    'descripcion' => 'SERVICIOS DE INSTALACIÓN DE OTROS TIPOS DE EQUIPO INDUSTRIAL A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO, COMO: EQUIPO DE COMUNICACIONES, ORDENADORES CENTRALES Y SIMILARES, EQUIPO DE IRRADIACIÓN, EQUIPO ELECTROMÉDICO, ELÉCTRICO, ETCÉTERA, INCLUIDO LA INSTALACIÓN DE EQUIPO PARA BOLERAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'C33200902', 
                    'descripcion' => 'SERVICIOS DE MANTENIMIENTO Y REPARACIÓN DE EQUIPO CINEMATOGRÁFICO PROFESIONAL Y NO PROFESIONAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'D35100101', 
                    'descripcion' => 'ACTIVIDADES DE OPERACIÓN DE INSTALACIONES DE GENERACIÓN DE ENERGÍA ELÉCTRICA, POR DIVERSOS MEDIOS: TÉRMICA (TURBINA DE GAS O DIESEL), NUCLEAR, HIDROELÉCTRICA, SOLAR, MAREAL Y DE OTROS TIPOS INCLUSO DE ENERGÍA RENOVABLE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'D35100201', 
                    'descripcion' => 'OPERACIÓN DE SISTEMAS DE TRANSMISIÓN Y DISTRIBUCIÓN DE ENERGÍA ELÉCTRICA (QUE CONSTAN DE POSTES, MEDIDORES Y CABLEADO), QUE TRANSPORTAN LA ENERGÍA ELÉCTRICA RECIBIDA DESDE LAS INSTALACIONES DE GENERACIÓN O TRANSMISIÓN HACIA EL CONSUMIDOR FINAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'D35100301', 
                    'descripcion' => 'ACTIVIDADES DE AGENTES DE ENERGÍA ELÉCTRICA QUE ORGANIZA LA VENTA DE ELECTRICIDAD VÍA SISTEMAS DE DISTRIBUCIÓN DE ENERGÍA OPERADOS POR OTROS. GESTIÓN DE INTERCAMBIADORES ELÉCTRICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'D35200101', 
                    'descripcion' => 'PRODUCCIÓN DE GAS PARA SU SUMINISTRO MEDIANTE LA DESTILACIÓN DEL CARBÓN A PARTIR DE SUB PRODUCTOS DE LA AGRICULTURA O A PARTIR DE DESECHOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'D35200201', 
                    'descripcion' => 'FABRICACIÓN DE COMBUSTIBLES GASEOSOS CON UN VALOR CALORÍFICO ESPECÍFICO, MEDIANTE LA PURIFICACIÓN, LA MEZCLA Y OTROS PROCESOS DE GASES DE DIVERSOS TIPOS, INCLUIDO EL GAS NATURAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'D35200301', 
                    'descripcion' => 'ACTIVIDADES DE TRANSPORTE, DISTRIBUCIÓN Y SUMINISTRO DE COMBUSTIBLES GASEOSOS DE CUALQUIER TIPO POR MEDIO DE UN SISTEMA DE TUBERÍAS, VENTA DE GAS A LOS USUARIOS POR MEDIO DE TUBERÍAS, ACTIVIDADES DE LOS AGENTES O CORREDORES QUE VENDEN GAS A TRAVÉS DE SISTEMAS DE DISTRIBUCIÓN OPERADOS POR OTROS Y ACTIVIDADES DE BOLSAS DE PRODUCTOS BÁSICOS Y MERCADOS DE CAPACIDAD DE TRANSPORTE PARA COMBUSTIBLES GASEOSOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'D35300101', 
                    'descripcion' => 'PRODUCCIÓN, CAPTACIÓN Y DISTRIBUCIÓN DE VAPOR Y AGUA CALIENTE PARA CALEFACCIÓN, PARA LA PRODUCCIÓN DE ENERGÍA Y PARA OTROS FINES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'D35300201', 
                    'descripcion' => 'PRODUCCIÓN Y DISTRIBUCIÓN DE AIRE REFRIGERADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'D35300301', 
                    'descripcion' => 'PRODUCCIÓN Y DISTRIBUCIÓN DE AGUA FRÍA CON FINES DE REFRIGERACIÓN. INCLUYE LA PRODUCCIÓN DE HIELO, INCLUIDO HIELO PARA LA ELABORACIÓN DE PRODUCTOS ALIMENTICIOS Y PARA OTROS FINES (P. EJ., PARA REFRIGERACIÓN)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E36000101', 
                    'descripcion' => 'ACTIVIDADES DE CAPTACIÓN DE AGUA DE: RÍOS, LAGOS, POZOS, LLUVIA ETCÉTERA; PURIFICACIÓN DE AGUA PARA SU DISTRIBUCIÓN; TRATAMIENTO DE AGUA PARA USO INDUSTRIAL Y OTROS USOS; DISTRIBUCIÓN DE AGUA POR MEDIO DE: TUBERÍAS, CAMIONES (TANQUEROS) U OTROS MEDIOS, A USUARIOS RESIDENCIALES, COMERCIALES, INDUSTRIALES Y DE OTRO TIPO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E36000201', 
                    'descripcion' => 'DESALINIZACIÓN DE AGUA DE MAR O AGUA SUBTERRÁNEA PARA PRODUCIR AGUA COMO PRINCIPAL PRODUCTO DE INTERÉS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E36000301', 
                    'descripcion' => 'OPERACIÓN DE CANALES DE RIEGO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E37000001', 
                    'descripcion' => 'SERVICIO PÚBLICO DE GESTIÓN DE SISTEMAS DE ALCANTARILLADO Y DE INSTALACIONES DE TRATAMIENTO DE AGUAS RESIDUALES; RECOLECCIÓN Y TRANSPORTE DE AGUAS RESIDUALES HUMANAS O INDUSTRIALES DE UNO O DIVERSOS USUARIOS, ASÍ COMO DE AGUA DE LLUVIA, POR MEDIO DE REDES DE ALCANTARILLADO, COLECTORES, TANQUES Y OTROS MEDIOS DE TRANSPORTE (CAMIONES CISTERNA DE RECOGIDA DE AGUAS NEGRAS, ETCÉTERA); VACIADO Y LIMPIEZA DE POZOS NEGROS Y FOSAS SÉPTICAS, FOSOS Y POZOS DE ALCANTARILLADOS; MANTENIMIENTO Y LIMPIEZA DE CLOACAS Y ALCANTARILLAS, INCLUIDO EL DESATASCO DE CLOACAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E37000002', 
                    'descripcion' => 'MANTENIMIENTO DE INODOROS DE ACCIÓN QUÍMICA, ASÍ COMO LAS ACTIVIDADES DE DISOLUCIÓN, CRIBADO, FILTRACIÓN, SEDIMENTACIÓN Y PRECIPITACIÓN QUÍMICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E37000003', 
                    'descripcion' => 'SERVICIO PÚBLICO DE TRATAMIENTO DE AGUAS RESIDUALES (INCLUIDAS AGUAS RESIDUALES HUMANAS E INDUSTRIALES, AGUA DE PISCINAS, ETCÉTERA) MEDIANTE PROCESOS FÍSICOS, QUÍMICOS Y BIOLÓGICOS COMO LOS DE DILUCIÓN, CRIBADO, FILTRACIÓN, SEDIMENTACIÓN, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E37000004', 
                    'descripcion' => 'SERVICIO PRIVADO DE GESTIÓN DE SISTEMAS DE ALCANTARILLADO Y DE INSTALACIONES DE TRATAMIENTO DE AGUAS RESIDUALES; RECOLECCIÓN Y TRANSPORTE DE AGUAS RESIDUALES HUMANAS O INDUSTRIALES DE UNO O DIVERSOS USUARIOS, ASÍ COMO DE AGUA DE LLUVIA, POR MEDIO DE REDES DE ALCANTARILLADO, COLECTORES, TANQUES Y OTROS MEDIOS DE TRANSPORTE (CAMIONES CISTERNA DE RECOGIDA DE AGUAS NEGRAS, ETCÉTERA); VACIADO Y LIMPIEZA DE POZOS NEGROS Y FOSAS SÉPTICAS, FOSOS Y POZOS DE ALCANTARILLADOS; MANTENIMIENTO Y LIMPIEZA DE CLOACAS Y ALCANTARILLAS, INCLUIDO EL DESATASCO DE CLOACAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E37000005', 
                    'descripcion' => 'SERVICIO PRIVADO DE TRATAMIENTO DE AGUAS RESIDUALES (INCLUIDAS AGUAS RESIDUALES HUMANAS E INDUSTRIALES, AGUA DE PISCINAS, ETCÉTERA) MEDIANTE PROCESOS FÍSICOS, QUÍMICOS Y BIOLÓGICOS COMO LOS DE DILUCIÓN, CRIBADO, FILTRACIÓN, SEDIMENTACIÓN, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E38110001', 
                    'descripcion' => 'SERVICIO PÚBLICO DE RECOLECCIÓN DE DESECHOS SÓLIDOS NO PELIGROSOS (BASURA) EN UNA ZONA DELIMITADA: RESIDUOS DE HOGARES Y EMPRESAS POR MEDIO DE CONTENEDORES; DESECHOS RECUPERABLES MEZCLADOS DE MATERIALES RECICLABLES; ACEITES Y GRASAS USADOS EN LA COCINA; DESPERDICIOS COLOCADOS EN LUGARES PÚBLICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E38110002', 
                    'descripcion' => 'SERVICIO PRIVADO DE RECOLECCIÓN DE DESECHOS SÓLIDOS NO PELIGROSOS (BASURA) EN UNA ZONA DELIMITADA: RESIDUOS DE HOGARES Y EMPRESAS POR MEDIO DE CONTENEDORES; DESECHOS RECUPERABLES MEZCLADOS DE MATERIALES RECICLABLES; ACEITES Y GRASAS USADOS EN LA COCINA; DESPERDICIOS COLOCADOS EN LUGARES PÚBLICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E38110003', 
                    'descripcion' => 'RECOLECCIÓN DE DESECHOS DE ACTIVIDADES PROVENIENTES DE LA CONSTRUCCIÓN Y DEMOLICIÓN, RECOLECCIÓN Y REMOCIÓN DE ESCOMBROS; DESECHOS PRODUCIDOS POR FÁBRICAS TEXTILES. INCLUYE LA GESTIÓN DE ESTACIONES DE TRANSFERENCIA DE DESECHOS NO PELIGROSOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E38120001', 
                    'descripcion' => 'ACTIVIDADES DE RECOLECCIÓN DE DESECHOS PELIGROSOS: SUSTANCIAS EXPLOSIVAS, OXIDANTES, INFLAMABLES, TÓXICAS, IRRITANTES, CARCINÓGENAS, CORROSIVAS O INFECCIOSAS Y OTRAS SUBSTANCIAS Y PREPARADOS NOCIVOS PERJUDICIALES PARA LA SALUD HUMANA Y EL MEDIO AMBIENTE COMO: ACEITES USADOS DE BUQUES O GARAJES, RESIDUOS BIOLÓGICOS PELIGROSOS, PILAS Y BATERÍAS USADAS; LA IDENTIFICACIÓN, TRATAMIENTO, EMBALADO Y ETIQUETADO DE LOS DESECHOS PARA SU TRANSPORTE. SE INCLUYEN LAS SIGUIENTES ACTIVIDADES DE RECOLECCIÓN DE DESECHOS PELIGROSOS Y GESTIÓN DE ESTACIONES DE EXPEDICIÓN DE DESECHOS PELIGROSOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E38210101', 
                    'descripcion' => 'ACTIVIDADES DE OPERACIÓN DE RELLENOS SANITARIOS PARA LA ELIMINACIÓN DE DESECHOS NO PELIGROSOS; ELIMINACIÓN DE DESECHOS NO PELIGROSOS MEDIANTE COMBUSTIÓN O INCINERACIÓN O POR OTROS MÉTODOS, CON O SIN PRODUCCIÓN RESULTANTE DE ELECTRICIDAD O VAPOR, COMBUSTIBLES SUSTITUTIVOS, BIOGÁS, CENIZAS U OTROS SUBPRODUCTOS PARA SU UTILIZACIÓN POSTERIOR, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E38210201', 
                    'descripcion' => 'ACTIVIDADES DE TRATAMIENTO DE DESECHOS ORGÁNICOS PARA SU TRANSFORMACIÓN. INCLUYE LA PRODUCCIÓN DE COMPOST CON DESECHOS ORGÁNICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E38220001', 
                    'descripcion' => 'OPERACIÓN DE INSTALACIONES PARA EL TRATAMIENTO DE DESECHOS PELIGROSOS, TRATAMIENTO Y ELIMINACIÓN DE ANIMALES TÓXICOS VIVOS Y MUERTOS Y OTROS DESECHOS CONTAMINADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E38220002', 
                    'descripcion' => 'INCINERACIÓN DE DESECHOS PELIGROSOS, REMOCIÓN DE PRODUCTOS USADOS COMO REFRIGERADORES, CON OBJETO DE ELIMINAR LOS DESECHOS PELIGROSOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E38220003', 
                    'descripcion' => 'TRATAMIENTO, REMOCIÓN Y ALMACENAMIENTO DE DESECHOS NUCLEARES RADIACTIVOS, INCLUIDO EL TRATAMIENTO Y ELIMINACIÓN DE DESECHOS RADIACTIVOS DE TRANSICIÓN, ES DECIR QUE SE DESINTEGRAN DURANTE EL PERÍODO DE TRANSPORTE, PROCEDENTES DE HOSPITALES, ENCAPSULACIÓN, PREPARACIÓN Y OTRAS FORMAS DE TRATAMIENTO DE DESECHOS NUCLEARES PARA SU ALMACENAMIENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E38300101', 
                    'descripcion' => 'ACTIVIDADES DE PROCESAMIENTO DE DESPERDICIOS METÁLICOS PARA CONVERTIRLOS EN MATERIAS PRIMAS SECUNDARIAS, NORMALMENTE MEDIANTE UN PROCESO DE TRANSFORMACIÓN MECÁNICO O QUÍMICO; RECUPERACIÓN DE MATERIALES DE CORRIENTES DE DESECHOS: SEPARACIÓN Y CLASIFICACIÓN DE MATERIALES RECUPERABLES DE CORRIENTES DE DESECHOS NO PELIGROSOS (BASURA); SEPARACIÓN Y CLASIFICACIÓN EN CATEGORÍAS DISTINTAS DE MATERIALES RECUPERABLES MEZCLADOS COMO: PAPEL, PLÁSTICOS, LATAS DE BEBIDAS USADAS, Y METALES. ENTRE LOS PROCESOS DE TRANSFORMACIÓN MECÁNICA O QUÍMICA QUE SE REALIZAN SE CUENTAN LOS SIGUIENTES: APLASTAMIENTO MECÁNICO DE DESPERDICIOS METÁLICOS, COMO: AUTOMÓVILES USADOS, LAVADORAS USADAS, BICICLETAS USADAS, ETCÉTERA, PARA SU POSTERIOR CLASIFICACIÓN Y SEPARACIÓN; DESGUACE DE AUTOMÓVILES, BUQUES, COMPUTADORAS, APARATOS DE TELEVISIÓN Y OTROS EQUIPOS PARA LA RECUPERACIÓN DE MATERIALES; REDUCCIÓN MECÁNICA DE GRANDES VOLÚMENES DE METAL, COMO VAGONES DE FERROCARRIL; TRITURACIÓN DE DESECHOS DE METAL, VEHÍCULOS DESECHADOS, ETCÉTERA; OTROS MÉTODOS DE TRATAMIENTO MECÁNICO, COMO EL CORTE Y EL PRENSADO PARA REDUCIR EL VOLUMEN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E38300102', 
                    'descripcion' => 'ACTIVIDADES DE PROCESAMIENTO DE DESECHOS METÁLICOS PARA CONVERTIRLOS EN MATERIAS PRIMAS SECUNDARIAS, NORMALMENTE MEDIANTE UN PROCESO DE TRANSFORMACIÓN MECÁNICO O QUÍMICO; RECUPERACIÓN DE MATERIALES DE CORRIENTES DE DESECHOS: SEPARACIÓN Y CLASIFICACIÓN DE MATERIALES RECUPERABLES DE CORRIENTES DE DESECHOS NO PELIGROSOS (BASURA); SEPARACIÓN Y CLASIFICACIÓN EN CATEGORÍAS DISTINTAS DE MATERIALES RECUPERABLES MEZCLADOS COMO: PAPEL, PLÁSTICOS, LATAS DE BEBIDAS USADAS, Y METALES. ENTRE LOS PROCESOS DE TRANSFORMACIÓN MECÁNICA O QUÍMICA QUE SE REALIZAN SE CUENTAN LOS SIGUIENTES: APLASTAMIENTO MECÁNICO DE DESPERDICIOS METÁLICOS, COMO: AUTOMÓVILES USADOS, LAVADORAS USADAS, BICICLETAS USADAS, ETCÉTERA, PARA SU POSTERIOR CLASIFICACIÓN Y SEPARACIÓN; DESGUACE DE AUTOMÓVILES, BUQUES, COMPUTADORAS, APARATOS DE TELEVISIÓN Y OTROS EQUIPOS PARA LA RECUPERACIÓN DE MATERIALES; REDUCCIÓN MECÁNICA DE GRANDES VOLÚMENES DE METAL, COMO VAGONES DE FERROCARRIL; TRITURACIÓN DE DESECHOS DE METAL, VEHÍCULOS DESECHADOS, ETCÉTERA; OTROS MÉTODOS DE TRATAMIENTO MECÁNICO, COMO EL CORTE Y EL PRENSADO PARA REDUCIR EL VOLUMEN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E38300103', 
                    'descripcion' => 'ACTIVIDADES DE PROCESAMIENTO DE OTROS ARTÍCULOS METÁLICOS PARA CONVERTIRLOS EN MATERIAS PRIMAS SECUNDARIAS, NORMALMENTE MEDIANTE UN PROCESO DE TRANSFORMACIÓN MECÁNICO O QUÍMICO; RECUPERACIÓN DE MATERIALES DE CORRIENTES DE DESECHOS: SEPARACIÓN Y CLASIFICACIÓN DE MATERIALES RECUPERABLES DE CORRIENTES DE DESECHOS NO PELIGROSOS (BASURA); SEPARACIÓN Y CLASIFICACIÓN EN CATEGORÍAS DISTINTAS DE MATERIALES RECUPERABLES MEZCLADOS COMO: PAPEL, PLÁSTICOS, LATAS DE BEBIDAS USADAS, Y METALES. ENTRE LOS PROCESOS DE TRANSFORMACIÓN MECÁNICA O QUÍMICA QUE SE REALIZAN SE CUENTAN LOS SIGUIENTES: APLASTAMIENTO MECÁNICO DE DESPERDICIOS METÁLICOS, COMO: AUTOMÓVILES USADOS, LAVADORAS USADAS, BICICLETAS USADAS, ETCÉTERA, PARA SU POSTERIOR CLASIFICACIÓN Y SEPARACIÓN; DESGUACE DE AUTOMÓVILES, BUQUES, COMPUTADORAS, APARATOS DE TELEVISIÓN Y OTROS EQUIPOS PARA LA RECUPERACIÓN DE MATERIALES; REDUCCIÓN MECÁNICA DE GRANDES VOLÚMENES DE METAL, COMO VAGONES DE FERROCARRIL; TRITURACIÓN DE DESECHOS DE METAL, VEHÍCULOS DESECHADOS, ETCÉTERA; OTROS MÉTODOS DE TRATAMIENTO MECÁNICO, COMO EL CORTE Y EL PRENSADO PARA REDUCIR EL VOLUMEN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E38300104', 
                    'descripcion' => 'ACTIVIDADES DE PROCESAMIENTO DE DESPERDICIOS Y DESECHOS NO METÁLICOS PARA CONVERTIRLOS EN MATERIAS PRIMAS SECUNDARIAS, NORMALMENTE MEDIANTE UN PROCESO DE TRANSFORMACIÓN MECÁNICO O QUÍMICO; RECUPERACIÓN DE MATERIALES DE CORRIENTES DE DESECHOS: SEPARACIÓN Y CLASIFICACIÓN DE MATERIALES RECUPERABLES DE CORRIENTES DE DESECHOS NO PELIGROSOS (BASURA); SEPARACIÓN Y CLASIFICACIÓN EN CATEGORÍAS DISTINTAS DE MATERIALES RECUPERABLES MEZCLADOS COMO: PAPEL, PLÁSTICOS, LATAS DE BEBIDAS USADAS, Y METALES. ENTRE LOS PROCESOS DE TRANSFORMACIÓN MECÁNICA O QUÍMICA QUE SE REALIZAN SE CUENTAN LOS SIGUIENTES: APLASTAMIENTO MECÁNICO DE DESPERDICIOS METÁLICOS, COMO: AUTOMÓVILES USADOS, LAVADORAS USADAS, BICICLETAS USADAS, ETCÉTERA, PARA SU POSTERIOR CLASIFICACIÓN Y SEPARACIÓN; DESGUACE DE AUTOMÓVILES, BUQUES, COMPUTADORAS, APARATOS DE TELEVISIÓN Y OTROS EQUIPOS PARA LA RECUPERACIÓN DE MATERIALES; REDUCCIÓN MECÁNICA DE GRANDES VOLÚMENES DE METAL, COMO VAGONES DE FERROCARRIL; TRITURACIÓN DE DESECHOS DE METAL, VEHÍCULOS DESECHADOS, ETCÉTERA; OTROS MÉTODOS DE TRATAMIENTO MECÁNICO, COMO EL CORTE Y EL PRENSADO PARA REDUCIR EL VOLUMEN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E38300105', 
                    'descripcion' => 'ACTIVIDADES DE PROCESAMIENTO DE OTROS ARTÍCULOS NO METÁLICOS PARA CONVERTIRLOS EN MATERIAS PRIMAS SECUNDARIAS, NORMALMENTE MEDIANTE UN PROCESO DE TRANSFORMACIÓN MECÁNICO O QUÍMICO; RECUPERACIÓN DE MATERIALES DE CORRIENTES DE DESECHOS: SEPARACIÓN Y CLASIFICACIÓN DE MATERIALES RECUPERABLES DE CORRIENTES DE DESECHOS NO PELIGROSOS (BASURA); SEPARACIÓN Y CLASIFICACIÓN EN CATEGORÍAS DISTINTAS DE MATERIALES RECUPERABLES MEZCLADOS COMO: PAPEL, PLÁSTICOS, LATAS DE BEBIDAS USADAS, Y METALES. ENTRE LOS PROCESOS DE TRANSFORMACIÓN MECÁNICA O QUÍMICA QUE SE REALIZAN SE CUENTAN LOS SIGUIENTES: APLASTAMIENTO MECÁNICO DE DESPERDICIOS METÁLICOS, COMO: AUTOMÓVILES USADOS, LAVADORAS USADAS, BICICLETAS USADAS, ETCÉTERA, PARA SU POSTERIOR CLASIFICACIÓN Y SEPARACIÓN; DESGUACE DE AUTOMÓVILES, BUQUES, COMPUTADORAS, APARATOS DE TELEVISIÓN Y OTROS EQUIPOS PARA LA RECUPERACIÓN DE MATERIALES; REDUCCIÓN MECÁNICA DE GRANDES VOLÚMENES DE METAL, COMO VAGONES DE FERROCARRIL; TRITURACIÓN DE DESECHOS DE METAL, VEHÍCULOS DESECHADOS, ETCÉTERA; OTROS MÉTODOS DE TRATAMIENTO MECÁNICO, COMO EL CORTE Y EL PRENSADO PARA REDUCIR EL VOLUMEN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E38300201', 
                    'descripcion' => 'RECUPERACIÓN DE METALES QUE CONTIENEN LOS DESECHOS DE MATERIAL FOTOGRÁFICO; POR EJEMPLO, SOLUCIÓN FIJADORA, PELÍCULAS O PAPEL FOTOGRÁFICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E38300202', 
                    'descripcion' => 'RECUPERACIÓN DE PRODUCTOS DE CAUCHO, COMO LLANTAS USADAS, PARA OBTENER MATERIAS PRIMAS SECUNDARIAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E38300203', 
                    'descripcion' => 'CLASIFICACIÓN Y NODULIZACIÓN DE PLÁSTICOS PARA PRODUCIR MATERIAS PRIMAS SECUNDARIAS PARA LA FABRICACIÓN DE TUBOS, MACETAS, BANDEJAS DE CARGA Y PRODUCTOS SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E38300204', 
                    'descripcion' => 'PROCESAMIENTO (LIMPIEZA, FUSIÓN, TRITURACIÓN) DE DESECHOS DE PLÁSTICO O CAUCHO PARA CONVERTIRLOS EN GRÁNULOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E38300205', 
                    'descripcion' => 'TRITURACIÓN, LIMPIEZA Y CLASIFICACIÓN DE DESECHOS DE VIDRIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E38300206', 
                    'descripcion' => 'TRITURACIÓN, LIMPIEZA Y CLASIFICACIÓN DE OTROS DESECHOS, COMO LOS DE DEMOLICIONES PARA OBTENER MATERIAS PRIMAS SECUNDARIAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E38300207', 
                    'descripcion' => 'PROCESAMIENTO DE ACEITES Y GRASAS DE COCINA Y DE OTROS DESECHOS Y SUSTANCIAS RESIDUALES DE PRODUCTOS ALIMENTICIOS, BEBIDAS Y TABACO PARA OBTENER MATERIAS PRIMAS SECUNDARIAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E39000101', 
                    'descripcion' => 'DESCONTAMINACIÓN DE SUELOS Y AGUAS SUBTERRÁNEAS EN EL LUGAR DE CONTAMINACIÓN UTILIZANDO; POR EJEMPLO, MÉTODOS MECÁNICOS, QUÍMICOS O BIOLÓGICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E39000201', 
                    'descripcion' => 'ACTIVIDADES DE DESCONTAMINACIÓN DE INSTALACIONES O TERRENOS INDUSTRIALES, INCLUIDOS LOS NUCLEARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E39000202', 
                    'descripcion' => 'DESCONTAMINACIÓN Y LIMPIEZA DE AGUAS SUPERFICIALES TRAS SU CONTAMINACIÓN ACCIDENTAL; POR EJEMPLO, MEDIANTE LA RECOGIDA DE LOS CONTAMINANTES O LA APLICACIÓN DE SUSTANCIAS QUÍMICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E39000203', 
                    'descripcion' => 'LIMPIEZA DE DERRAMES DE PETRÓLEO Y OTRAS FORMAS DE CONTAMINACIÓN EN TIERRA, AGUAS SUPERFICIALES, MARES Y OCÉANOS, INCLUIDAS ZONAS COSTERAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E39000204', 
                    'descripcion' => 'ELIMINACIÓN DE ASBESTO, PINTURA DE PLOMO Y OTROS MATERIALES TÓXICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'E39000901', 
                    'descripcion' => 'OTRAS ACTIVIDADES ESPECIALIZADAS DE CONTROL DE LA CONTAMINACIÓN, INCLUIDO LA REMOCIÓN DE MINAS TERRESTRES Y ARTEFACTOS SIMILARES (INCLUIDA SU DETONACIÓN)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F41001001', 
                    'descripcion' => 'CONSTRUCCIÓN DE TODO TIPO DE EDIFICIOS RESIDENCIALES: EDIFICIOS DE ALTURAS ELEVADAS, VIVIENDAS PARA ANCIANATOS, CASAS PARA BENEFICENCIA, ORFANATOS, CÁRCELES, CUARTELES, CONVENTOS, CASAS RELIGIOSAS. INCLUYE REMODELACIÓN, RENOVACIÓN O REHABILITACIÓN DE ESTRUCTURAS EXISTENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F41001002', 
                    'descripcion' => 'CONSTRUCCIÓN DE TODO TIPO DE EDIFICIOS RESIDENCIALES: CASAS FAMILIARES INDIVIDUALES, EDIFICIOS MULTIFAMILIARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F41002001', 
                    'descripcion' => 'CONSTRUCCIÓN DE TODO TIPO DE EDIFICIOS NO RESIDENCIALES: EDIFICIOS DE PRODUCCIÓN INDUSTRIAL, EJEMPLO. EDIFICIOS DE OFICINAS, HOTELES, ALMACENES, CENTROS COMERCIALES, BODEGAS, RESTAURANTES, OBSERVATORIOS, IGLESIAS, MUSEOS, INCLUYE REMODELACIÓN, RENOVACIÓN O REHABILITACIÓN DE ESTRUCTURAS EXISTENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F41002002', 
                    'descripcion' => 'CONSTRUCCIÓN DE TODO TIPO DE EDIFICIOS NO RESIDENCIALES: EDIFICIOS DE PRODUCCIÓN INDUSTRIAL, EJEMPLO, AEROPORTUARIOS. INCLUYE REMODELACIÓN, RENOVACIÓN O REHABILITACIÓN DE ESTRUCTURAS EXISTENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F41003001', 
                    'descripcion' => 'MONTAJE Y LEVANTAMIENTO DE CONSTRUCCIONES PREFABRICADAS EN EL LUGAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F42101101', 
                    'descripcion' => 'CONSTRUCCIÓN DE CARRETERAS, CALLES, AUTOPISTAS Y OTRAS VÍAS PARA VEHÍCULOS O PEATONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F42101201', 
                    'descripcion' => 'OBRAS DE SUPERFICIE EN CALLES, CARRETERAS, AUTOPISTAS, PUENTES O TÚNELES, ASFALTADO DE CARRETERA, PINTURA Y OTROS TIPOS DE MARCADO DE CARRETERA, INSTALACIÓN DE BARRERAS DE EMERGENCIA, SEÑALES DE TRÁFICO Y ELEMENTOS SIMILARES. INCLUYE LA CONSTRUCCIÓN DE PISTAS PARA AEROPUERTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F42102001', 
                    'descripcion' => 'CONSTRUCCIÓN DE LÍNEAS DE FERROCARRIL Y DE METRO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F42103101', 
                    'descripcion' => 'CONSTRUCCIÓN DE TÚNELES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F42103201', 
                    'descripcion' => 'CONSTRUCCIÓN DE PUENTES Y VIADUCTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F42201101', 
                    'descripcion' => 'CONSTRUCCIÓN DE OBRAS DE INGENIERÍA CIVIL RELACIONADAS CON: TUBERÍAS URBANAS, CONSTRUCCIÓN DE CONDUCTOS PRINCIPALES Y ACOMETIDAS DE REDES DE DISTRIBUCIÓN DE AGUA SISTEMAS DE RIEGO (CANALES), ESTACIONES DE BOMBEO, DEPÓSITOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F42201201', 
                    'descripcion' => 'CONSTRUCCIÓN DE SISTEMAS DE ALCANTARILLADO, INCLUIDA SU REPARACIÓN, INSTALACIONES DE EVACUACIÓN DE AGUAS RESIDUALES Y PERFORACIÓN DE POZOS DE AGUA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F42201202', 
                    'descripcion' => 'PERFORACIÓN DE POZOS DE AGUA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F42202001', 
                    'descripcion' => 'CONSTRUCCIÓN DE OBRAS CIVILES PARA: CENTRALES ELÉCTRICAS, LÍNEAS DE TRANSMISIÓN DE ENERGÍA ELÉCTRICA Y COMUNICACIONES; OBRAS AUXILIARES EN ZONAS URBANAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F42901101', 
                    'descripcion' => 'CONSTRUCCIÓN DE VÍAS DE NAVEGACIÓN, OBRAS PORTUARIAS Y FLUVIALES, PUERTOS DEPORTIVOS, ESCLUSAS, PRESAS Y DIQUES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F42901201', 
                    'descripcion' => 'DRAGADO DE VÍAS DE NAVEGACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F42909101', 
                    'descripcion' => 'CONSTRUCCIÓN DE INSTALACIONES INDUSTRIALES REFINERÍAS, FÁBRICAS DE PRODUCTOS QUÍMICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F42909201', 
                    'descripcion' => 'OBRAS DE CONSTRUCCIONES DISTINTAS DE LAS DE EDIFICIOS POR EJEMPLO: INSTALACIONES DEPORTIVAS AL AIRE LIBRE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F42909301', 
                    'descripcion' => 'SUBDIVISIÓN (LOTIZACIÓN) DE TIERRAS CON MEJORA (POR EJEMPLO, CONSTRUCCIÓN DE CARRETERAS, INFRAESTRUCTURA DE SUMINISTRO PÚBLICO, ETCÉTERA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43110001', 
                    'descripcion' => 'DEMOLICIÓN O DERRIBO DE EDIFICIOS Y OTRAS ESTRUCTURAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43120101', 
                    'descripcion' => 'LIMPIEZA DE TERRENOS DE CONSTRUCCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43120201', 
                    'descripcion' => 'MOVIMIENTO DE TIERRAS: EXCAVACIÓN, NIVELACIÓN Y ORDENACIÓN DE TERRENOS DE CONSTRUCCIÓN, EXCAVACIÓN DE ZANJAS, REMOCIÓN DE PIEDRAS, VOLADURA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43120301', 
                    'descripcion' => 'PERFORACIONES DE PRUEBA, SONDEOS DE EXPLORACIÓN Y RECOGIDA DE MUESTRAS DE SONDEO PARA ACTIVIDADES DE CONSTRUCCIÓN Y PARA FINES GEOFÍSICOS, GEOLÓGICOS O SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43120401', 
                    'descripcion' => 'CONSTRUCCIÓN DE DRENAJE DE TERRENOS DE CONSTRUCCIÓN INCLUIDO TIERRAS AGRÍCOLAS O FORESTALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43120501', 
                    'descripcion' => 'PREPARACIÓN DE TERRENOS PARA ACTIVIDADES DE EXPLOTACIÓN DE MINAS Y CANTERAS: REMOCIÓN DEL ESTÉRIL (DESTAPE DE MINAS) Y ACTIVIDADES DE OTRO TIPO PARA PREPARAR Y APROVECHAR TERRENOS Y PROPIEDADES MINEROS, EXCEPTO YACIMIENTOS DE PETRÓLEO Y GAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43210101', 
                    'descripcion' => 'INSTALACIÓN DE ACCESORIOS ELÉCTRICOS, LÍNEAS DE TELECOMUNICACIONES, REDES INFORMÁTICAS Y LÍNEAS DE TELEVISIÓN POR CABLE, INCLUIDAS LÍNEAS DE FIBRA ÓPTICA, ANTENAS PARABÓLICAS. INCLUYE CONEXIÓN DE APARATOS ELÉCTRICOS, EQUIPO DOMÉSTICO Y SISTEMAS DE CALEFACCIÓN RADIANTE (INCLUYE MANTENIMIENTO Y REPARACIÓN)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43210102', 
                    'descripcion' => 'INSTALACION, MANTENIMIENTO Y REPARACION DE CENTRALES DE ENERGIA ELECTRICA Y TRANSFORMADORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43210201', 
                    'descripcion' => 'INSTALACIÓN DE SISTEMAS DE ILUMINACIÓN, SISTEMAS DE ALARMA CONTRA INCENDIOS (INCLUYE MANTENIMIENTO Y REPARACIÓN)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43210202', 
                    'descripcion' => 'INSTALACIÓN DE SISTEMAS DE ILUMINACIÓN, SISTEMAS DE ALARMA CONTRA ROBOS(INCLUYE MANTENIMIENTO Y REPARACIÓN)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43210301', 
                    'descripcion' => 'INSTALACIÓN DE SISTEMAS DE ALUMBRADO Y SEÑALES ELÉCTRICAS DE CALLES, ALUMBRADO DE PISTAS DE AEROPUERTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43220101', 
                    'descripcion' => 'INSTALACIÓN EN EDIFICIOS Y OTROS PROYECTOS DE CONSTRUCCIÓN DE: SISTEMAS DE CALEFACCIÓN (ELÉCTRICOS, DE GAS Y DE GASÓLEO), CALDERAS, TORRES DE REFRIGERACIÓN, COLECTORES DE ENERGÍA SOLAR NO ELÉCTRICOS, EQUIPO DE FONTANERÍA Y SANITARIO, EQUIPO Y CONDUCTOS DE VENTILACIÓN, CONDUCCIONES DE GAS, TUBERÍAS DE VAPOR, SISTEMAS DE ASPERSORES CONTRA INCENDIOS, SISTEMAS DE RIEGO POR ASPERSIÓN PARA EL CÉSPED. (INCLUYE AMPLIACIONES, REPARACIONES, REFORMAS Y MANTENIMIENTO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43220201', 
                    'descripcion' => 'INSTALACIÓN EN EDIFICIOS Y OTROS PROYECTOS DE CONSTRUCCIÓN DE: SISTEMAS DE REFRIGERACIÓN O AIRE ACONDICIONADO, (INCLUYE AMPLIACIONES, REPARACIONES, REFORMAS Y MANTENIMIENTO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43220301', 
                    'descripcion' => 'INSTALACIÓN DE CANALIZACIÓN (CONDUCTOS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43220401', 
                    'descripcion' => 'INSTALACIÓN, MANTENIMIENTO Y REPARACIÓN DE TUBERÍAS PARA PROCESOS INSUSTRIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43290101', 
                    'descripcion' => 'INSTALACIÓN, REPARACIÓN Y EL MANTENIMIENTO DE ASCENSORES ASÍ COMO ESCALERAS MECÁNICAS EN EDIFICIOS U OTROS PROYECTOS DEDICADOS A LA CONSTRUCCIÓN DE PUERTAS AUTOMÁTICAS Y GIRATORIAS EN EDIFICIOS U OTROS PROYECTOS DE CONSTRUCCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43290201', 
                    'descripcion' => 'INSTALACIÓN, REPARACIÓN Y EL MANTENIMIENTO DE PARARRAYOS EN EDIFICIOS U OTROS PROYECTOS DE CONSTRUCCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43290301', 
                    'descripcion' => 'SISTEMAS DE LIMPIEZA POR ASPIRACIÓN EN EDIFICIOS U OTROS PROYECTOS DE CONSTRUCCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43290401', 
                    'descripcion' => 'AISLAMIENTO TÉRMICO, ACÚSTICO O CONTRA LAS VIBRACIONES EN EDIFICIOS U OTROS PROYECTOS DE CONSTRUCCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43301001', 
                    'descripcion' => 'APLICACIÓN EN EDIFICIOS Y OTROS PROYECTOS DE CONSTRUCCIÓN DE YESO Y ESTUCO PARA INTERIORES Y EXTERIORES, CON LOS MATERIALES DE ENLISTONAR CORRESPONDIENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43302001', 
                    'descripcion' => 'INSTALACIÓN DE PUERTAS (EXCEPTO AUTOMÁTICAS Y GIRATORIAS), VENTANAS, MARCOS DE PUERTAS Y VENTANAS. INSTALACIÓN DE ACCESORIOS DE COCINAS, ARMARIOS EMPOTRADOS, ESCALERAS, MOBILIARIO DE TIENDAS Y SIMILARES DE MADERA U OTROS MATERIALES, ÉTCETERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43302002', 
                    'descripcion' => 'ACTIVIDADES PARA HABILITAR EDIFICIOS ACABADOS INTERIORES COMO TECHOS CUBIERTA DE MADERA DE PAREDES MAMPARAS MOVILES CHAPISTERIA ETCETERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43303101', 
                    'descripcion' => 'INSTALACIÓN DE CERÁMICAS BALDOSAS, LOSAS Y LOSETAS DE CERÁMICA, HORMIGÓN O PIEDRA TALLADA PARA PAREDES Y PISOS, ACCESORIOS DE CERÁMICA PARA COCINAS, PARQUÉ Y OTROS REVESTIMIENTOS DE MADERA PARA PISOS, ALFOMBRAS Y CUBRIMIENTOS DE LINÓLEO PARA PISOS, INCLUIDOS LOS DE CAUCHO O PLÁSTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43303201', 
                    'descripcion' => 'INSTALACIÓN DE PAPEL TAPIZ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43303301', 
                    'descripcion' => 'INSTALACIÓN DE PARQUET Y OTROS REVESTIMIENTOS DE MADERA PARA PAREDES Y PISOS EN EDIFICIOS U OTROS PROYECTOS DE CONSTRUCCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43304101', 
                    'descripcion' => 'PINTURA INTERIOR O EXTERIOR DE EDIFICIOS. INCLUYE PINTURA DE OBRAS DE INGENIERÍA CIVIL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43304201', 
                    'descripcion' => 'INSTALACIÓN DE VIDRIOS, ESPEJOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43309101', 
                    'descripcion' => 'LIMPIEZA DE EDIFICIOS NUEVOS DESPUÉS DE SU CONSTRUCCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43309901', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE TERMINACIÓN DE EDIFICIOS N.C.P.: INSTALACIÓN DE INTERIORES DE TIENDAS, CASAS MÓVILES, EMBARCACIONES, INSONORIZACIÓN, PULIMIENTO DE PISOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43901101', 
                    'descripcion' => 'ACTIVIDADES DE CONSTRUCCIÓN ESPECIALIZADAS EN UN ASPECTO COMÚN A DIFERENTES TIPOS DE ESTRUCTURAS Y QUE REQUIEREN CONOCIMIENTOS O EQUIPO ESPECIALIZADOS: CIMENTACIÓN, INCLUIDA LA HINCADURA DE PILOTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43901102', 
                    'descripcion' => 'ACTIVIDADES DE CONSTRUCCIÓN ESPECIALIZADAS EN UN ASPECTO COMÚN A DIFERENTES TIPOS DE ESTRUCTURAS Y QUE REQUIEREN CONOCIMIENTOS O EQUIPO ESPECIALIZADOS: INSTALACIÓN Y DESMONTAJE DE ANDAMIOS Y PLATAFORMAS DE TRABAJO, EXCLUIDO EL ALQUILER DE ANDAMIOS Y PLATAFORMAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43901103', 
                    'descripcion' => 'COLOCACIÓN DE MAMPUESTOS DE LADRILLO Y DE PIEDRA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43901201', 
                    'descripcion' => 'TRABAJOS DE TRATAMIENTO DE LA HUMEDAD DE EDIFICIOS Y DE IMPERMEABILIZACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43901301', 
                    'descripcion' => 'MONTAJE DE PIEZAS ERECCIÓN DE ELEMENTOS DE ACERO NO FABRICADOS POR LA PROPIA UNIDAD CONSTRUCTORA, CURVADO DE ACERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43901401', 
                    'descripcion' => 'CONSTRUCCIÓN DE CHIMENEAS Y HORNOS INDUSTRIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43901501', 
                    'descripcion' => 'TRABAJOS EN LUGARES DE DIFÍCIL ACCESO QUE REQUIEREN LA UTILIZACIÓN DE TÉCNICAS DE ESCALADA Y DEL EQUIPO CORRESPONDIENTE, COMO, POR EJEMPLO, LOS TRABAJOS A GRAN ALTURA EN ESTRUCTURAS ELEVADAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43901601', 
                    'descripcion' => 'CONSTRUCCIÓN DE CUBIERTA DE TECHOS Y TEJADOS DE EDIFICIOS RESIDENCIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43902001', 
                    'descripcion' => 'ALQUILER DE GRÚAS CON OPERADOR Y OTROS EQUIPOS DE CONSTRUCCIÓN QUE NO PUEDEN ASIGNARSE A UN TIPO DE CONSTRUCCIÓN ESPECÍFICO CON OPERARIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43902002', 
                    'descripcion' => 'ALQUILER DE GRÚAS CON OPERADOR Y OTROS EQUIPOS DE DEMOLICIÓN QUE NO PUEDEN ASIGNARSE A UN TIPO DE CONSTRUCCIÓN ESPECÍFICO CON OPERARIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43909101', 
                    'descripcion' => 'CONSTRUCCIÓN DE PISCINAS AL AIRE LIBRE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43909201', 
                    'descripcion' => 'LIMPIEZA DE EXTERIORES DE EDIFICIOS CON VAPOR, CON CHORRO DE ARENA Y CON OTROS MEDIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'F43909301', 
                    'descripcion' => 'CONSTRUCCIÓN DE OBRAS SUBTERRÁNEAS: PROFUNDIZACIÓN (PERFORACIÓN) DE POZOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45100101', 
                    'descripcion' => 'VENTA DE VEHÍCULOS NUEVOS Y USADOS: VEHÍCULOS PARA TODO TERRENO (JEEPS, ETCÉTERA), INCLUIDO LA VENTA AL POR MAYOR POR COMISIONISTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45100102', 
                    'descripcion' => 'VENTA DE VEHÍCULOS NUEVOS Y USADOS: VEHÍCULOS PARA TODO TERRENO (JEEPS, ETCÉTERA), INCLUIDO LA VENTA AL POR MENOR POR COMISIONISTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45100103', 
                    'descripcion' => 'VENTA DE VEHÍCULOS NUEVOS Y USADOS: CAMIONES, REMOLQUES Y SEMIREMOLQUES, INCLUIDO LA VENTA AL POR MAYOR POR COMISIONISTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45100104', 
                    'descripcion' => 'VENTA DE VEHÍCULOS NUEVOS Y USADOS: CAMIONES, REMOLQUES Y SEMIREMOLQUES, INCLUIDO LA VENTA AL POR MENOR POR COMISIONISTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45100105', 
                    'descripcion' => 'VENTA DE VEHÍCULOS NUEVOS Y USADOS: VEHÍCULOS ESPECIALIZADOS COMO: AMBULANCIAS Y MINIBUSES, INCLUIDO LA VENTA AL POR MAYOR POR COMISIONISTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45100106', 
                    'descripcion' => 'VENTA DE VEHÍCULOS NUEVOS Y USADOS: VEHÍCULOS ESPECIALIZADOS COMO AMBULANCIAS Y MINIBUSES, INCLUIDO LA VENTA AL POR MENOR POR COMISIONISTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45100107', 
                    'descripcion' => 'VENTA DE VEHÍCULOS NUEVOS Y USADOS: VEHÍCULOS DE PASAJEROS, INCLUIDO LA VENTA AL POR MAYOR POR COMISIONISTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45100108', 
                    'descripcion' => 'VENTA DE VEHÍCULOS NUEVOS Y USADOS: VEHÍCULOS DE PASAJEROS, INCLUIDO LA VENTA AL POR MENOR POR COMISIONISTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45100109', 
                    'descripcion' => 'VENTA DE VEHÍCULOS NUEVOS Y USADOS: VEHÍCULOS DE ACAMPADA COMO CARAVANAS Y AUTOCARAVANAS, INCLUIDO LA VENTA AL POR MAYOR POR COMISIONISTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45100110', 
                    'descripcion' => 'VENTA DE VEHÍCULOS NUEVOS Y USADOS: VEHÍCULOS DE ACAMPADA COMO CARAVANAS Y AUTOCARAVANAS, INCLUIDO LA VENTA AL POR MENOR POR COMISIONISTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45100111', 
                    'descripcion' => 'VENTA DE OTROS VEHÍCULOS NUEVOS Y USADOS, INCLUIDO LA VENTA AL POR MAYOR POR COMISIONISTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45100112', 
                    'descripcion' => 'VENTA DE OTROS VEHÍCULOS NUEVOS Y USADOS, INCLUIDO LA VENTA AL POR MENOR POR COMISIONISTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45100201', 
                    'descripcion' => 'SUBASTA DE AUTOMÓVILES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45200101', 
                    'descripcion' => 'MANTENIMIENTO Y REPARACIÓN DE VEHÍCULOS AUTOMOTORES: REPARACIÓN MECÁNICA, ELÉCTRICA, SISTEMAS DE INYECCIÓN ELÉCTRICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45200102', 
                    'descripcion' => 'MANTENIMIENTO Y REPARACIÓN DE VEHÍCULOS AUTOMOTORES: CARROCERÍAS, PARTES DE VEHÍCULOS AUTOMOTORES: PARABRISAS, VENTANAS, ASIENTOS Y TAPICERÍAS. INCLUYE EL TRATAMIENTO ANTI ÓXIDO, PINTURAS A PISTOLA O BROCHA A LOS VEHÍCULOS Y AUTOMOTORES Y CARGA DE BATERIAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45200201', 
                    'descripcion' => 'MANTENIMIENTO Y REPARACIÓN, INSTALACIÓN, CAMBIO DE NEUMÁTICOS (LLANTAS) Y TUBOS (VULCANIZADORAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45200301', 
                    'descripcion' => 'SERVICIOS DE LAVADO, ENGRASADO, PULVERIZADO, ENCERADO, CAMBIOS DE ACEITE, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45300001', 
                    'descripcion' => 'VENTA AL POR MAYOR DE TODO TIPO DE PARTES, COMPONENTES, SUMINISTROS, HERRAMIENTAS Y ACCESORIOS PARA VEHÍCULOS AUTOMOTORES COMO: NEUMÁTICOS (LLANTAS), CÁMARAS DE AIRE PARA NEUMÁTICOS (TUBOS). INCLUYE BUJÍAS, BATERÍAS, EQUIPO DE ILUMINACIÓN PARTES Y PIEZAS ELÉCTRICAS. ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45300002', 
                    'descripcion' => 'VENTA AL POR MENOR DE TODO TIPO DE PARTES, COMPONENTES, SUMINISTROS, HERRAMIENTAS Y ACCESORIOS PARA VEHÍCULOS AUTOMOTORES COMO: NEUMÁTICOS (LLANTAS), CÁMARAS DE AIRE PARA NEUMÁTICOS (TUBOS). INCLUYE BUJÍAS, BATERÍAS, EQUIPO DE ILUMINACIÓN PARTES Y PIEZAS ELÉCTRICAS. ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45400101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE MOTOCICLETAS, INCLUSO CICLOMOTORES (VELOMOTORES), TRICIMOTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45400102', 
                    'descripcion' => 'VENTA AL POR MENOR DE MOTOCICLETAS, INCLUSO CICLOMOTORES (VELOMOTORES), TRICIMOTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45400201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PARTES, PIEZAS Y ACCESORIOS PARA MOTOCICLETAS (INCLUSO POR COMISIONISTAS Y COMPAÑÍAS DE VENTA POR CORREO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45400202', 
                    'descripcion' => 'VENTA AL POR MENOR DE PARTES, PIEZAS Y ACCESORIOS PARA MOTOCICLETAS (INCLUSO POR COMISIONISTAS Y COMPAÑÍAS DE VENTA POR CORREO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45400301', 
                    'descripcion' => 'ACTIVIDADES DE MANTENIMIENTO Y REPARACIÓN DE MOTOCICLETAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G45400401', 
                    'descripcion' => 'OTRAS ACTIVIDADES CONCERNIENTES A LA VENTA, MANTENIMIENTO Y REPARACIÓN DE MOTOCICLETAS Y TRINEOS MOTORIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46100101', 
                    'descripcion' => 'INTERMEDIARIOS DEL COMERCIO DE MATERIAS PRIMAS AGRARIAS, ANIMALES VIVOS, MATERIAS PRIMAS TEXTILES Y PRODUCTOS SEMIELABORADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46100201', 
                    'descripcion' => 'INTERMEDIARIOS DEL COMERCIO DE COMBUSTIBLES, MINERALES, METALES, Y PRODUCTOS QUÍMICOS INDUSTRIALES, INCLUIDOS ABONOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46100301', 
                    'descripcion' => 'INTERMEDIARIOS DEL COMERCIO DE LA MADERA Y MATERIALES DE CONSTRUCCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46100401', 
                    'descripcion' => 'INTERMEDIARIOS DEL COMERCIO DE MAQUINARIA, EQUIPO INDUSTRIAL, EMBARCACIONES Y AERONAVES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46100501', 
                    'descripcion' => 'INTERMEDIARIOS DEL COMERCIO DE MUEBLES, ARTÍCULOS PARA EL HOGAR Y FERRETERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46100601', 
                    'descripcion' => 'INTERMEDIARIOS DEL COMERCIO DE TEXTILES, PRENDAS DE VESTIR, PELETERÍA, CALZADO Y ARTÍCULOS DE CUERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46100701', 
                    'descripcion' => 'INTERMEDIARIOS DEL COMERCIO DE PRODUCTOS ALIMENTICIOS, BEBIDAS Y TABACO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46100801', 
                    'descripcion' => 'ACTIVIDADES DE CASAS DE SUBASTAS AL POR MAYOR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46100901', 
                    'descripcion' => 'INTERMEDIARIOS DEL COMERCIO DE PRODUCTOS DIVERSOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46100902', 
                    'descripcion' => 'INTERMEDIACION A TRAVES DE PLATAFORMAS TECNOLOGICAS PARA LA OFERTA Y VENTA EN LINEA DE BIENES YO SERVICIOS DE TERCEROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46201101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE CEREALES (GRANOS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46201102', 
                    'descripcion' => 'VENTA AL POR MAYOR DE SEMILLAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46201201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE FRUTOS Y SEMILLAS OLEAGINOSAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46201301', 
                    'descripcion' => 'VENTA AL POR MAYOR DE TABACO SIN ELABORAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46201401', 
                    'descripcion' => 'VENTA AL POR MAYOR DE DESECHOS, RESIDUOS Y PRODUCTOS DERIVADOS USADOS PARA ALIMENTAR ANIMALES (FORRAJE), INCLUYE MATERIAS PRIMAS AGRARIAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46201501', 
                    'descripcion' => 'VENTA AL POR MAYOR DE FLORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46201502', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PLANTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46201901', 
                    'descripcion' => 'VENTA AL POR MAYOR DE OTRAS MATERIAS PRIMAS AGROPECUARIAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46202101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ANIMALES VIVOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46202201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE CUEROS, PIELES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46202202', 
                    'descripcion' => 'VENTA AL POR MAYOR DE OTROS PRODUCTOS ANIMALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46301101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE BANANO Y PLÁTANO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46301201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE FRUTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46301202', 
                    'descripcion' => 'VENTA AL POR MAYOR DE LEGUMBRES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46301203', 
                    'descripcion' => 'VENTA AL POR MAYOR DE HORTALIZAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46301204', 
                    'descripcion' => 'VENTA AL POR MAYOR DE VERDURAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46301301', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PAPA Y TUBÉRCULOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46301401', 
                    'descripcion' => 'VENTA AL POR MAYOR DE CAFÉ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46301402', 
                    'descripcion' => 'VENTA AL POR MAYOR DE CACAO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46301403', 
                    'descripcion' => 'VENTA AL POR MAYOR DE TÉ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46301404', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ESPECIAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46302101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRODUCTOS LÁCTEOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46302102', 
                    'descripcion' => 'VENTA AL POR MAYOR DE HELADOS, BOLOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46302201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE HUEVOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46302202', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRODUCTOS A BASE DE HUEVOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46302301', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ACEITES Y GRASAS COMESTIBLES DE ORIGEN ANIMAL O VEGETAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46303101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE CARNE Y PRODUCTOS CÁRNICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46303102', 
                    'descripcion' => 'VENTA AL POR MAYOR DE CARNES DE AVES DE CORRAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46303201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE CAMARÓN Y LANGOSTINOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46303301', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PESCADO, CRUSTÁCEOS, MOLUSCOS Y PRODUCTOS DE LA PESCA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46303401', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRODUCTOS DE LA CAZA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46309101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARROZ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46309201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE AZÚCAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46309202', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRODUCTOS DE CONFITERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46309203', 
                    'descripcion' => 'VENTA AL POR MAYOR DE CHOCOLATE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46309301', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRODUCTOS DE PANADERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46309302', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRODUCTOS DE REPOSTERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46309401', 
                    'descripcion' => 'VENTA AL POR MAYOR DE BEBIDAS NO ALCOHÓLICAS (JUGOS, GASEOSAS, AGUA MINERAL, ETCÉTERA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46309501', 
                    'descripcion' => 'VENTA AL POR MAYOR DE BEBIDAS ALCOHÓLICAS, INCLUSO EL ENVASADO DE VINO A GRANEL SIN TRANSFORMACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46309601', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRODUCTOS DE TABACO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46309701', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ALIMENTO PARA MASCOTAS (ANIMALES DOMÉSTICOS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46309901', 
                    'descripcion' => 'VENTA AL POR MAYOR DE OTROS PRODUCTOS COMESTIBLES (ENLATADOS Y CONSERVAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46411101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE HILOS (HILADOS), LANAS  Y TEJIDOS (TELAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46411201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE LENCERÍA PARA EL HOGAR CORTINAS, VISILLOS, MANTELERÍA, TOALLAS Y DIVERSOS ARTÍCULOS DOMÉSTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46411301', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTÍCULOS DE MERCERÍAS: AGUJAS, HILO DE COSTURA, BOTONES, CIERRES, CINTAS, ENCAJES, ALFILERES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46412101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRENDAS DE VESTIR, INCLUIDAS PRENDAS (ROPA) DEPORTIVAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46412201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ACCESORIOS DE VESTIR GUANTES, CORBATAS, INCLUYE PARAGUAS Y TIRANTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46412301', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRENDAS DE CUERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46412302', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRENDAS DE PIEL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46412401', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTÍCULOS DE BAZAR EN GENERAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46413101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE CALZADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46413201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTÍCULOS DE CUERO (CON PELO NATURAL)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46413301', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRODUCTOS DE ZAPATERÍA: PLANTILLAS, TALONERAS Y ARTÍCULOS ANÁLOGOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46491101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ELECTRODOMÉSTICOS: REFRIGERADORAS, COCINAS, LAVADORAS, ETCÉTERA. ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46491102', 
                    'descripcion' => 'VENTA AL POR MAYOR DE APARATOS DE USO DOMÉSTICO: INCLUYE EQUIPOS DE TELEVISIÓN, ESTÉREOS (EQUIPOS DE SONIDO), EQUIPOS DE GRABACIÓN Y REPRODUCTORES DE CD Y DVD' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46491103', 
                    'descripcion' => 'VENTA AL POR MAYOR DE APARATOS DE USO DOMÉSTICO: CINTAS DE AUDIO Y VIDEO CDS, DVD GRABADAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46491201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTÍCULOS Y ACCESORIOS FOTOGRÁFICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46491202', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTÍCULOS Y ACCESORIOS ÓPTICOS (LENTES DE SOL, BINOCULARES, LUPAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46491301', 
                    'descripcion' => 'VENTA AL POR MAYOR DE MUEBLES DE HOGAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46491302', 
                    'descripcion' => 'VENTA AL POR MAYOR DE COLCHONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46491303', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ALFOMBRAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46491401', 
                    'descripcion' => 'VENTA AL POR MAYOR DE EQUIPOS DE ILUMINACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46491402', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTEFACTOS DE ILUMINACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46491501', 
                    'descripcion' => 'VENTA AL POR MAYOR DE JUEGOS DE LUCES PARA ÁRBOLES DE NAVIDAD' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46492101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRODUCTOS DE PERFUMERÍA, COSMÉTICOS (PRODUCTOS DE BELLEZA) ARTÍCULOS DE USO PERSONAL (JABONES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46492102', 
                    'descripcion' => 'VENTA AL POR MAYOR DE COSMÉTICOS (PRODUCTOS DE BELLEZA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46492103', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTÍCULOS DE USO PERSONAL (JABONES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46492201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRODUCTOS FARMACÉUTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46492202', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRODUCTOS VETERINARIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46492301', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRODUCTOS MEDICINALES (NATURISTAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46492401', 
                    'descripcion' => 'VENTA AL POR MAYOR DE INSTRUMENTOS, DISPOSITIVOS, MATERIALES MÉDICOS Y QUIRÚRGICOS, DENTALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46492402', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTÍCULOS ORTOPÉDICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTÍCULOS DE MADERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499102', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTÍCULOS DE CORCHO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499103', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTÍCULOS DE MIMBRE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499104', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTÍCULOS DE TONELERÍA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE BICICLETAS, PARTES Y ACCESORIOS INCLUYEN LOS ARTÍCULOS DEPORTIVOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499301', 
                    'descripcion' => 'VENTA AL POR MAYOR DE MATERIAL DE PAPELERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499302', 
                    'descripcion' => 'VENTA AL POR MAYOR DE LIBROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499303', 
                    'descripcion' => 'VENTA AL POR MAYOR DE REVISTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499304', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PERIÓDICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499305', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ÚTILES DE ESCRITORIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499401', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTÍCULOS DE CUERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499402', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ACCESORIOS DE VIAJE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499501', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTÍCULOS DE PORCELANA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499502', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTÍCULOS DE CERÁMICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499503', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTÍCULOS DE CRISTALERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499504', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTÍCULOS DE PLÁSTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499505', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTÍCULOS DE CAUCHO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499506', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTÍCULOS ARTÍCULOS ORNAMENTALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499507', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTÍCULOS DE CUBERTERÍA (CUBIERTOS), VAJILLA, INCLUIDO DESECHABLES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499601', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTÍCULOS DE LIMPIEZA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499602', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRODUCTOS DE LIMPIEZA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499701', 
                    'descripcion' => 'VENTA AL POR MAYOR DE RELOJES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499702', 
                    'descripcion' => 'VENTA AL POR MAYOR DE JOYAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499703', 
                    'descripcion' => 'VENTA AL POR MAYOR DE BISUTERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499801', 
                    'descripcion' => 'VENTA AL POR MAYOR DE CUBIERTOS, UTENSILIOS DOMÉSTICOS DE METAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499901', 
                    'descripcion' => 'VENTA AL POR MAYOR DE JUEGOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499902', 
                    'descripcion' => 'VENTA AL POR MAYOR DE JUGUETES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499903', 
                    'descripcion' => 'VENTA AL POR MAYOR DE INSTRUMENTOS MUSICALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46499904', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PARTITURAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46510101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE COMPUTADORAS Y EQUIPO PERIFÉRICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46510201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PROGRAMAS INFORMÁTICOS (SOFTWARE)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46520101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE VÁLVULAS Y TUBOS ELECTRÓNICOS, DISPOSITIVOS DE SEMICONDUCTORES, MICROCHIPS, CIRCUITOS INTEGRADOS Y DE IMPRESIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46520201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE TELÉFONOS Y EQUIPOS DE COMUNICACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46520202', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PARTES Y PIEZAS PARA APARATOS Y EQUIPOS DE COMUNICACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46520301', 
                    'descripcion' => 'VENTA AL POR MAYOR DE CINTAS Y DISQUETES DE SONIDO Y DE VÍDEO NO GRABADAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46520302', 
                    'descripcion' => 'VENTA AL POR MAYOR DE DISCOS MAGNÉTICOS Y ÓPTICOS (CD, DVD) DE SONIDO Y DE VÍDEO NO GRABADAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46530101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE MAQUINARIA Y EQUIPO AGROPECUARIOS: ARADOS, ESPARCIDORAS DE ESTIÉRCOL, SEMBRADORAS, COSECHADORAS, TRILLADORAS, MÁQUINAS DE ORDEÑAR, MÁQUINAS UTILIZADAS EN LA AVICULTURA Y LA APICULTURA, TRACTORES UTILIZADOS EN ACTIVIDADES AGROPECUARIAS Y SILVÍCOLAS, SEGADORAS DE CÉSPED DE TODO TIPO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46530102', 
                    'descripcion' => 'VENTA AL POR MAYOR DE MAQUINARIA Y EQUIPO AGROPECUARIOS: ARADOS, ESPARCIDORAS DE ESTIÉRCOL,  TRILLADORAS, MÁQUINAS DE ORDEÑAR, MÁQUINAS UTILIZADAS EN LA AVICULTURA Y LA APICULTURA, TRACTORES UTILIZADOS EN ACTIVIDADES AGROPECUARIAS Y SILVÍCOLAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46591101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE MAQUINARIA Y EQUIPO DE OFICINA: CALCULADORA, MÁQUINAS DE ESCRIBIR, CONTADORA DE MONEDAS, EXCEPTO COMPUTADORAS Y EQUIPO INFORMÁTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46591201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE MUEBLES DE OFICINA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46592101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE MÁQUINAS HERRAMIENTA CONTROLADAS O NO POR COMPUTADORA PARA LA INDUSTRIA TEXTIL, INCLUYE LA VENTA AL POR MAYOR DE SUS PARTES Y PIEZAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46592102', 
                    'descripcion' => 'VENTA AL POR MAYOR DE MÁQUINAS HERRAMIENTA CONTROLADAS O NO POR COMPUTADORA PARA LA INDUSTRIA DE LA MADERA, INCLUYE LA VENTA AL POR MAYOR DE SUS PARTES Y PIEZAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46592103', 
                    'descripcion' => 'VENTA AL POR MAYOR DE MÁQUINAS HERRAMIENTA CONTROLADAS O NO POR COMPUTADORA PARA LA INDUSTRIA DE CUERO Y OTRAS INDUSTRIAS, INCLUYE LA VENTA AL POR MAYOR DE SUS PARTES Y PIEZAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46592201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE MAQUINARÍA Y EQUIPOS PARA LA MINERÍA; INCLUYE PARTES Y PIEZAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46592202', 
                    'descripcion' => 'VENTA AL POR MAYOR DE MAQUINARÍA Y EQUIPOS PARA LA CONSTRUCCIÓN; INCLUYE PARTES Y PIEZAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46592301', 
                    'descripcion' => 'VENTA AL POR MAYOR DE MÁQUINAS, EQUÍPOS Y HERRAMIENTAS PARA LA METALURGIA; INCLUYE PARTES Y PIEZAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46592401', 
                    'descripcion' => 'VENTA AL POR MAYOR DE MÁQUINAS PARA LA ELABORACIÓN DE ALIMENTOS, BEBIDAS Y TABACO (INCLUSO PARA HOTELES Y RESTAURANTES), MÁQUINAS PARA LAVAR, SECAR Y SELLAR BOTELLAS, INCLUYE LA VENTA AL POR MAYOR DE SUS PARTES Y PIEZAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46599101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE EQUIPO DE TRANSPORTE (LANCHAS, AVIONES, TRENES, ETCÉTERA.) EXCEPTO VEHÍCULOS MOTORIZADOS, MOTOCICLETAS Y BICICLETAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46599201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE INSTRUMENTOS Y EQUIPO DE MEDICIÓN Y PRECISIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46599301', 
                    'descripcion' => 'VENTA AL POR MAYOR DE EQUIPO ELÉCTRICO COMO: MOTORES ELÉCTRICOS, TRANSFORMADORES, (INCLUYE BOMBAS PARA LÍQUIDOS), CABLES, CONMUTADORES Y DE OTROS TIPOS DE EQUIPO DE INSTALACIÓN DE USO INDUSTRIAL, INCLUSO PARTES Y PIEZAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46599401', 
                    'descripcion' => 'VENTA AL POR MAYOR DE EQUIPO MÉDICO, INCLUSO PARTES Y PIEZAS Y MATERIALES CONEXOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46599402', 
                    'descripcion' => 'VENTA AL POR MAYOR DE EQUIPO DE LABORATORIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46599501', 
                    'descripcion' => 'VENTA AL POR MAYOR DE EQUIPO DE SEGURIDAD, INCLUSO PARTES Y PIEZAS Y MATERIALES CONEXOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46599601', 
                    'descripcion' => 'VENTA AL POR MAYOR DE EQUIPO DE REFRIGERACIÓN, INCLUSO PARTES, PIEZAS Y MATERIALES CONEXOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46599701', 
                    'descripcion' => 'VENTA AL POR MAYOR DE EQUIPO DE CALEFACCIÓN, INCLUSO PARTES, PIEZAS Y MATERIALES CONEXOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46599801', 
                    'descripcion' => 'VENTA AL POR MAYOR DE EQUIPO PARA IMPRENTA, INCLUSO PARTES, PIEZAS Y MATERIALES CONEXOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46599901', 
                    'descripcion' => 'VENTA AL POR MAYOR DE MÁQUINAS HERRAMIENTA DE CUALQUIER TIPO Y PARA CUALQUIER MATERIAL: MADERA, ACERO, ETCÉTERA. ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46599902', 
                    'descripcion' => 'VENTA  AL POR MAYOR DE OTROS TIPOS DE MAQUINARIA N.C.P. PARA USO EN LA INDUSTRIA, EL COMERCIO, LA NAVEGACIÓN Y OTROS SERVICIOS. INCLUYE VENTA AL POR MAYOR DE ROBOTS PARA CADENAS DE MONTAJE, ARMAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46610101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PETRÓLEO CRUDO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46610102', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ACEITE DE PETRÓLEO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46610201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE COMBUSTIBLES SÓLIDOS: CARBÓN, CARBÓN VEGETAL, LEÑA MADERA TURBA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46610301', 
                    'descripcion' => 'VENTA AL POR MAYOR DE COMBUSTIBLES LÍQUIDOS NAFTA, GASOLINA, BIOCOMBUSTIBLE INCLUYE GRASAS, LUBRICANTES Y ACEITES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46610302', 
                    'descripcion' => 'VENTA AL POR MAYOR DE COMBUSTIBLES: GASES LICUADOS DE PETRÓLEO, BUTANO Y PROPANO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46610401', 
                    'descripcion' => 'VENTA AL POR MAYOR DE OTROS COMBUSTIBLES Y PRODUCTOS CONEXOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46620101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE MINERALES METALÍFEROS FERROSOS Y NO FERROSOS; INCLUYE LA VENTA AL POR MAYOR DE METALES NO FERROSOS EN FORMAS PRIMARIAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46620102', 
                    'descripcion' => 'VENTA AL POR MAYOR DE METALES FERROSOS EN FORMAS PRIMARIAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46620201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRODUCTOS SEMIACABADOS DE METALES FERROSOS Y NO FERROSOS N.C.P' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46620301', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ORO Y OTROS METALES PRECIOSOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46620401', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRODUCTOS DE ACERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46631101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE MADERA NO TRABAJADA (EN BRUTO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46631102', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRODUCTOS DE LA ELABORACIÓN PRIMARIA DE MADERA: TABLEROS AGLOMERADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46631201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PINTURA, BARNICES Y LACAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46631301', 
                    'descripcion' => 'VENTA AL POR MAYOR DE MATERIALES DE CONSTRUCCIÓN: PIEDRA, ARENA, GRAVA, CEMENTO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46631401', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PAPEL TAPIZ Y REVESTIMIENTO DE PISOS (BALDOSAS, LINÓLEO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46631501', 
                    'descripcion' => 'VENTA AL POR MAYOR DE VIDRIO PLANO Y ESPEJOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46632101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ARTÍCULOS DE FERRETERÍAS Y CERRADURAS: MARTILLOS, SIERRAS, DESTORNILLADORES, Y OTRAS HERRAMIENTAS DE MANO, ACCESORIOS Y DISPOSITIVOS; CAJAS FUERTES, EXTINTORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46632201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE APARATOS, ACCESORIOS DE CALEFACCIÓN Y CALENTADORES DE AGUA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46632301', 
                    'descripcion' => 'VENTA AL POR MAYOR DE EQUIPO SANITARIO Y FONTANERÍA (BAÑERAS, INODOROS, LAVABOS TOCADORES Y OTRA PORCELANA SANITARIA) INCLUYE ARTÍCULOS PARA LA INSTALACIÓN SANITARIA: TUBOS, TUBERÍAS, ACCESORIOS, GRIFOS, DERIVACIONES, CONEXIONES, TUBERÍAS DE CAUCHO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46632401', 
                    'descripcion' => 'VENTA AL POR MAYOR DE MATERIAL ELECTRICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46691101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRODUCTOS QUÍMICOS INDUSTRIALES: ANILINA, TINTA DE IMPRESIÓN, ACEITES ESENCIALES, GASES INDUSTRIALES (OXÍGENO), PEGAMENTO QUÍMICO, COLORANTES, RESINA SINTÉTICA, METANOL, PARAFINA, AROMATIZANTES Y POTENCIADORES DEL SABOR, SODA CÁUSTICA, SAL INDUSTRIAL, ÁCIDOS Y SULFUROS, DERIVADOS DE ALMIDÓN, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46691201', 
                    'descripcion' => 'VENTA AL POR MAYOR DE ABONOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46691202', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRODUCTOS QUÍMICOS DE USO AGRÍCOLA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46691301', 
                    'descripcion' => 'VENTA AL POR MAYOR DE SUSTANCIAS ADHESIVAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46691302', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRODUCTOS ORGÁNICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46691303', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PRODUCTOS INORGÁNICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46691304', 
                    'descripcion' => 'VENTA AL POR MAYOR DE OTROS PRODUCTOS QUÍMICOS N.C.P' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46692101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE MATERIALES PLÁSTICOS EN FORMAS PRIMARIAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46692102', 
                    'descripcion' => 'VENTA AL POR MAYOR DE MATERIALES DE CAUCHO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46692103', 
                    'descripcion' => 'VENTA AL POR MAYOR DE FIBRAS TEXTILES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46692201', 
                    'descripcion' => 'VENTA AL POR MAYOR DEL PAPEL Y CARTÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46692301', 
                    'descripcion' => 'VENTA AL POR MAYOR DE PIEDRAS PRECIOSAS, PRODUCTOS ABRASIVOS Y OTROS MINERALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46693001', 
                    'descripcion' => 'VENTA AL POR MAYOR DE DESPERDICIOS Y DESECHOS, CHATARRA METÁLICA Y DE MATERIALES PARA EL RECICLADO, INCLUIDO LA RECOLECCIÓN, CLASIFICACIÓN, SEPARACIÓN Y EL DESGUACE DE PRODUCTOS USADOS, COMO: AUTOMÓVILES, ORDENADORES, APARATOS DE TELEVISIÓN Y OTROS TIPOS DE EQUIPO, PARA OBTENER PARTES Y PIEZAS REUTILIZABLES. EL EMBALAJE Y REEMBALAJE, ALMACENAMIENTO Y ENTREGA, AUNQUE SIN UN PROCESO DE TRANSFORMACIÓN REAL. ADEMÁS, LOS MATERIALES COMPRADOS Y VENDIDOS TIENEN UN VALOR REMANENTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46693002', 
                    'descripcion' => 'ACTIVIDADES DE VENTA DE MATERIALES PROCEDENTES DE ESTRUCTURAS DEMOLIDAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46693101', 
                    'descripcion' => 'VENTA AL POR MAYOR DE OTROS PRODUCTOS INTERMEDIOS N.C.P' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46694001', 
                    'descripcion' => 'VENTA AL POR MAYOR DE OTROS PRODUCTOS METÁLICOS ELABORADOS, (EXCEPTO MAQUINARIA Y EQUIPO), EXCEPTO LOS PRESTADOS A COMISIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46900001', 
                    'descripcion' => 'VENTA AL POR MAYOR DE DIVERSOS PRODUCTOS SIN ESPECIALIZACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G46900002', 
                    'descripcion' => 'VENTA AL POR MAYOR DE OTROS PRODUCTOS DIVERSOS PARA EL CONSUMIDOR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47110101', 
                    'descripcion' => 'VENTA AL POR MENOR DE GRAN VARIEDAD DE PRODUCTOS EN TIENDAS, ENTRE LOS QUE PREDOMINAN, LOS PRODUCTOS ALIMENTICIOS, LAS BEBIDAS O EL TABACO, COMO PRODUCTOS DE PRIMERA NECESIDAD Y VARIOS OTROS TIPOS DE PRODUCTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47110201', 
                    'descripcion' => 'VENTA AL POR MENOR DE GRAN VARIEDAD DE PRODUCTOS EN SUPERMERCADOS, ENTRE LOS QUE PREDOMINAN, LOS PRODUCTOS ALIMENTICIOS, LAS BEBIDAS O EL TABACO, COMO PRODUCTOS DE PRIMERA NECESIDAD Y VARIOS OTROS TIPOS DE PRODUCTOS, COMO PRENDAS DE VESTIR, MUEBLES, APARATOS, ARTÍCULOS DE FERRETERÍA, COSMÉTICOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47190001', 
                    'descripcion' => 'VENTA AL POR MENOR DE GRAN VARIEDAD DE PRODUCTOS ENTRE LOS QUE NO PREDOMINAN LOS PRODUCTOS ALIMENTICIOS, LAS BEBIDAS O EL TABACO, ACTIVIDADES DE VENTA DE: PRENDAS DE VESTIR, MUEBLES, APARATOS, ARTÍCULOS DE FERRETERÍA, COSMÉTICOS, ARTÍCULOS DE JOYERÍA Y BISUTERÍA, JUGUETES, ARTÍCULOS DE DEPORTE, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47210101', 
                    'descripcion' => 'VENTA AL POR MENOR DE FRUTAS FRESCAS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47210102', 
                    'descripcion' => 'VENTA AL POR MENOR DE FRUTAS, LEGUMBRES Y HORTALIZAS FRESCAS  EN CONSERVA EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47210103', 
                    'descripcion' => 'VENTA AL POR MENOR DE VERDURAS, LEGUMBRES Y HORTALIZAS FRESCAS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47210201', 
                    'descripcion' => 'VENTA AL POR MENOR DE LÁCTEOS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47210301', 
                    'descripcion' => 'VENTA AL POR MENOR DE HUEVOS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47210401', 
                    'descripcion' => 'VENTA AL POR MENOR DE PESCADO, CRUSTÁCEOS, MOLUSCOS Y PRODUCTOS DE LA PESCA EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47210501', 
                    'descripcion' => 'VENTA AL POR MENOR DE PRODUCTOS DE PANADERÍA EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47210502', 
                    'descripcion' => 'VENTA AL POR MENOR DE PAN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47210503', 
                    'descripcion' => 'VENTA AL POR MENOR DE PRODUCTOS DE CONFITERÍA EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47210504', 
                    'descripcion' => 'VENTA AL POR MENOR DE PRODUCTOS DE REPOSTERÍA EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47210601', 
                    'descripcion' => 'VENTA AL POR MENOR DE CARNE (INCLUIDOS LOS DE AVES DE CORRAL) EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47210602', 
                    'descripcion' => 'VENTA AL POR MENOR DE DERIVADOS DE LA CARNE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47210603', 
                    'descripcion' => 'VENTA AL POR MENOR DE PRODUCTOS CÁRNICOS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47210901', 
                    'descripcion' => 'VENTA AL POR MENOR DE OTROS PRODUCTOS ALIMENTICIOS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47220101', 
                    'descripcion' => 'VENTA AL POR MENOR DE BEBIDAS NO ALCOHÓLICAS (NO DESTINADAS AL CONSUMO EN EL LUGAR DE VENTA) EN ESTABLECIMIENTOS ESPECIALIZADOS, BOLOS, HELADOS, HIELO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47220201', 
                    'descripcion' => 'VENTA AL POR MENOR DE BEBIDAS ALCOHÓLICAS (NO DESTINADAS AL CONSUMO EN EL LUGAR DE VENTA) EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47220301', 
                    'descripcion' => 'VENTA AL POR MENOR DE OTRAS BEBIDAS EN ALMACENES ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47230001', 
                    'descripcion' => 'VENTA AL POR MENOR DE PRODUCTOS DE TABACO EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47230002', 
                    'descripcion' => 'VENTA AL POR MENOR DE TABACO EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47300101', 
                    'descripcion' => 'VENTA AL POR MENOR DE COMBUSTIBLES PARA VEHÍCULOS AUTOMOTORES Y MOTOCICLETAS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47300201', 
                    'descripcion' => 'VENTA AL POR MENOR DE PRODUCTOS DE LIMPIEZA, LUBRICANTES Y REFRIGERANTES PARA VEHÍCULOS AUTOMOTORES EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47411101', 
                    'descripcion' => 'VENTA AL POR MENOR DE COMPUTADORAS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47411102', 
                    'descripcion' => 'VENTA AL POR MENOR DE EQUIPO PERIFÉRICO COMPUTACIONAL EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47411201', 
                    'descripcion' => 'VENTA AL POR MENOR DE PROGRAMAS INFORMÁTICOS NO PERSONALIZADOS, EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47411202', 
                    'descripcion' => 'VENTA AL POR MENOR DE VIDEOJUEGOS, INCLUYE CONSOLAS DE VIDEOJUEGOS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47411203', 
                    'descripcion' => 'VENTA AL POR MENOR DE DISCOS Y CINTAS GRABADAS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47411301', 
                    'descripcion' => 'VENTA AL POR MENOR DE EQUIPOS DE TELECOMUNICACIONES: CELULARES, TUBOS ELECTRÓNICOS, ETCÉTERA. INCLUYE PARTES Y PIEZAS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47411401', 
                    'descripcion' => 'VENTA AL POR MENOR DE MAQUINARIA Y APARATOS ELÉCTRICOS: MOTORES, GENERADORES, TRANSFORMADORES ELÉCTRICOS, APARATOS DE DISTRIBUCIÓN, CONTROL DE ENERGÍA ELÉCTRICA, CABLES ACUMULADORES Y OTRO MATERIAL ELÉCTRICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47411501', 
                    'descripcion' => 'VENTA AL POR MENOR DE OTROS MATERIALES Y EQUIPOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47420001', 
                    'descripcion' => 'VENTA AL POR MENOR DE EQUIPOS DE RADIO EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47420002', 
                    'descripcion' => 'VENTA AL POR MENOR DE EQUIPOS DE TELEVISIÓN EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47420003', 
                    'descripcion' => 'VENTA AL POR MENOR DE EQUIPOS DE ESTEREOFÓNICOS, REPRODUCTORES Y GRABADORES DE CD Y DVD EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47420004', 
                    'descripcion' => 'VENTA AL POR MENOR DE ARTÍCULOS PARA EL HOGAR EN GENERAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47510101', 
                    'descripcion' => 'VENTA AL POR MENOR DE TELAS, LANAS Y OTROS HILADOS PARA TEJER, EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47510102', 
                    'descripcion' => 'VENTA AL POR MENOR DE ARTÍCULOS DE MERCERÍA (AGUJAS E HILO DE COSER) EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47510201', 
                    'descripcion' => 'VENTA AL POR MENOR DE ARTÍCULOS TEXTILES: SÁBANAS, TOALLAS, JUEGOS DE MESA EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47510202', 
                    'descripcion' => 'VENTA AL POR MENOR DE OTROS ARTÍCULOS TEXTILES; MATERIALES BÁSICOS PARA HACER ALFOMBRAS, TAPICES O BORDADOS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47520101', 
                    'descripcion' => 'VENTA AL POR MENOR DE ARTÍCULOS DE FERRETERÍA: MARTILLOS, SIERRAS, DESTORNILLADORES Y PEQUEÑAS HERRAMIENTAS EN GENERAL, EQUIPO Y MATERIALES DE PREFABRICADOS PARA ARMADO CASERO (EQUIPO DE BRICOLAJE); ALAMBRES Y CABLES ELÉCTRICOS, CERRADURAS, MONTAJES Y ADORNOS, EXTINTORES, SEGADORAS DE CÉSPED DE CUALQUIER TIPO, ETCÉTERA EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47520201', 
                    'descripcion' => 'VENTA AL POR MENOR DE PINTURAS, BARNICES Y LACAS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47520301', 
                    'descripcion' => 'VENTA AL POR MENOR DE VIDRIO PLANO EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47520302', 
                    'descripcion' => 'VENTA AL POR MENOR DE ESPEJOS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47520303', 
                    'descripcion' => 'VENTA AL POR MENOR DE ARTÍCULOS DE VIDRIO EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47520401', 
                    'descripcion' => 'VENTA AL POR MENOR DE MATERIALES DE CONSTRUCCIÓN COMO: LADRILLOS, RIPIO, CEMENTO, ETCÉTERA EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47520402', 
                    'descripcion' => 'VENTA AL POR MENOR DE MATERIALES DE CONSTRUCCIÓN DE MADERA EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47520403', 
                    'descripcion' => 'VENTA AL POR MENOR DE MATERIALES DE CONSTRUCCIÓN DE PRODUCTOS METÁLICOS Y NO METÁLICOS PARA ESTRUCTURAS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47520501', 
                    'descripcion' => 'VENTA AL POR MENOR DE EQUIPO SANITARIO Y MATERIAL DE FONTANERÍA: CAÑERÍAS, CONEXIONES, TUBERÍAS DE CAUCHO, ACCESORIOS, GRIFOS Y MATERIAL DE CALEFACCIÓN Y CALEFONES EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47520901', 
                    'descripcion' => 'VENTA AL POR MENOR ESPECIALIZADA DE OTROS ARTÍCULOS DE FERRETERÍA: SAUNAS (BAÑOS DE CALOR SECO Y VAPOR), ETCÉTERA EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47520902', 
                    'descripcion' => 'VENTA AL POR MENOR ESPECIALIZADA DE OTROS ARTÍCULOS DE FERRETERÍA: ARTÍCULOS DE PLÁSTICO EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47520903', 
                    'descripcion' => 'VENTA AL POR MENOR ESPECIALIZADA DE OTROS ARTÍCULOS DE FERRETERÍA: DE CAUCHO, EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47530101', 
                    'descripcion' => 'VENTA AL POR MENOR DE ALFOMBRAS, TAPICES, MOQUETAS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47530102', 
                    'descripcion' => 'VENTA AL POR MENOR DE CORTINAS, VISILLOS Y TAPETES EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47530201', 
                    'descripcion' => 'VENTA AL POR MENOR DE PAPEL TAPIZ EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47530202', 
                    'descripcion' => 'VENTA AL POR MENOR DE REVESTIMIENTOS DE PISOS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47590101', 
                    'descripcion' => 'VENTA AL POR MENOR DE MUEBLES DE USO DOMÉSTICO, COLCHONES Y SOMIERES EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47590201', 
                    'descripcion' => 'VENTA AL POR MENOR DE ARTÍCULOS DE ILUMINACIÓN EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47590202', 
                    'descripcion' => 'VENTA AL POR MENOR DE ARTEFACTOS Y EQUIPOS DE ILUMINACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47590301', 
                    'descripcion' => 'VENTA AL POR MENOR DE UTENSILIOS DE USO DOMÉSTICO, CUBIERTOS, VAJILLA EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47590302', 
                    'descripcion' => 'VENTA AL POR MENOR DE UTENSILIOS DE CRISTALERÍA EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47590303', 
                    'descripcion' => 'VENTA AL POR MENOR DE OBJETOS DE PORCELANA Y DE CERÁMICA EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47590304', 
                    'descripcion' => 'VENTA AL POR MENOR DE UTENSILIOS DE PLÁSTICOS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47590401', 
                    'descripcion' => 'VENTA AL POR MENOR DE ARTÍCULOS DE MADERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47590402', 
                    'descripcion' => 'VENTA AL POR MENOR DE ARTÍCULOS DE MIMBRE EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47590403', 
                    'descripcion' => 'VENTA AL POR MENOR DE ARTÍCULOS DE CORCHO Y TONELERÍA EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47590404', 
                    'descripcion' => 'VENTA AL POR MENOR DE ARTÍCULOS DESECHABLES EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47590501', 
                    'descripcion' => 'VENTA AL POR MENOR DE ELECTRODOMÉSTICOS EN ESTABLECIMIENTOS ESPECIALIZADOS: REFRIGERADORAS, COCINAS, MICROONDAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47590601', 
                    'descripcion' => 'VENTA AL POR MENOR DE INSTRUMENTOS MUSICALES Y PARTITURAS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47590901', 
                    'descripcion' => 'VENTA AL POR MENOR DE APARATOS DE USO DOMÉSTICO N.C.P. ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47590902', 
                    'descripcion' => 'VENTA AL POR MENOR DE OTROS ENSERES DE USO DOMÉSTICO N.C.P. ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47590903', 
                    'descripcion' => 'VENTA AL POR MENOR DE SISTEMAS DE SEGURIDAD, COMO DISPOSITIVOS DE CIERRE, CAJAS DE CAUDALES, VIDRIOS BLINDADOS Y CAJAS FUERTES, SIN SERVICIO DE INSTALACIÓN NI DE MANTENIMIENTO EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47610101', 
                    'descripcion' => 'VENTA AL POR MENOR DE LIBROS DE TODO TIPO EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47610201', 
                    'descripcion' => 'VENTA AL POR MENOR DE PERIÓDICOS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47610301', 
                    'descripcion' => 'VENTA AL POR MENOR DE ARTÍCULOS DE PAPELERÍA COMO LÁPICES, BOLÍGRAFOS, PAPEL, ETCÉTERA, EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47610302', 
                    'descripcion' => 'VENTA AL POR MENOR DE ARTÍCULOS DE OFICINA EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47610401', 
                    'descripcion' => 'VENTA AL POR MENOR DE REVISTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47620001', 
                    'descripcion' => 'VENTA AL POR MENOR DE DISCOS DE VINILO, CINTAS MAGNETOFÓNICAS, DISCOS COMPACTOS Y CASETES DE MÚSICA, CINTAS DE VÍDEO Y DVD, CINTAS Y DISCOS EN BLANCO EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47630001', 
                    'descripcion' => 'VENTA AL POR MENOR DE ARTÍCULOS DE DEPORTE, DE PESCA Y DE ACAMPADA Y EMBARCACIONES EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47630002', 
                    'descripcion' => 'VENTA AL POR MENOR DE BICICLETAS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47640001', 
                    'descripcion' => 'VENTA AL POR MENOR DE JUEGOS Y JUGUETES DE TODOS LOS MATERIALES EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47711101', 
                    'descripcion' => 'VENTA AL POR MENOR DE PRENDAS DE VESTIR Y PELETERÍA EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47711102', 
                    'descripcion' => 'VENTA AL POR MENOR DE PRENDAS DE PELETERÍA EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47711201', 
                    'descripcion' => 'VENTA AL POR MENOR DE ACCESORIOS DE VESTIR EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47712101', 
                    'descripcion' => 'VENTA AL POR MENOR DE CALZADO EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47712102', 
                    'descripcion' => 'VENTA AL POR MENOR DE MATERIAL DE ZAPATERÍA (PLANTILLAS, TALONERAS, SUELA Y ARTÍCULOS ANÁLOGOS) EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47712201', 
                    'descripcion' => 'VENTA AL POR MENOR DE ARTÍCULOS DE CUERO Y SUSTITUTOS, EXCEPTO PRENDAS DE VESTIR EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47712202', 
                    'descripcion' => 'VENTA AL POR MENOR DE ACCESORIOS DE VIAJE EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47720101', 
                    'descripcion' => 'VENTA AL POR MENOR DE PRODUCTOS FARMACÉUTICOS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47720102', 
                    'descripcion' => 'VENTA AL POR MENOR DE PRODUCTOS ORTOPÉDICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47720201', 
                    'descripcion' => 'VENTA AL POR MENOR DE PRODUCTOS NATURISTAS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47720301', 
                    'descripcion' => 'VENTA AL POR MENOR DE INSTRUMENTOS Y APARATOS MEDICINALES Y ORTOPÉDICOS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47720401', 
                    'descripcion' => 'VENTA AL POR MENOR DE PRODUCTOS VETERINARIOS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47720501', 
                    'descripcion' => 'VENTA AL POR MENOR DE PERFUMES Y ARTÍCULOS COSMÉTICOS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47720502', 
                    'descripcion' => 'VENTA AL POR MENOR DE PAÑALES Y ARTÍCULOS DE USO PERSONAL EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47731101', 
                    'descripcion' => 'VENTA AL POR MENOR DE EQUIPO FOTOGRÁFICO EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47731102', 
                    'descripcion' => 'VENTA AL POR MENOR DE EQUIPO DE PRECISIÓN EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47731201', 
                    'descripcion' => 'VENTA AL POR MENOR DE EQUIPO ÓPTICO Y ACTIVIDADES DE LAS ÓPTICAS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47732101', 
                    'descripcion' => 'VENTA AL POR MENOR DE FLORES EN ESTABLECIMIENTOS ESPECIALIZADOS, INCLUSO ARREGLOS FLORALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47732102', 
                    'descripcion' => 'VENTA AL POR MENOR DE PLANTAS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47732103', 
                    'descripcion' => 'VENTA AL POR MENOR DE SEMILLAS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47732201', 
                    'descripcion' => 'VENTA AL POR MENOR DE FERTILIZANTES EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47732202', 
                    'descripcion' => 'VENTA AL POR MENOR DE BALANCEADOS Y ABONOS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47732301', 
                    'descripcion' => 'VENTA AL POR MENOR DE MASCOTAS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47732302', 
                    'descripcion' => 'VENTA AL POR MENOR DE ALIMENTO PARA MASCOTAS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47739101', 
                    'descripcion' => 'VENTA AL POR MENOR DE RECUERDOS, SELLOS, MONEDAS, ARTÍCULOS RELIGIOSOS Y ARTESANÍA EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47739201', 
                    'descripcion' => 'ACTIVIDADES DE GALERÍAS DE ARTE COMERCIALES EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47739301', 
                    'descripcion' => 'VENTA AL POR MENOR DE FUEL PARA USO DOMÉSTICO EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47739302', 
                    'descripcion' => 'VENTA AL POR MENOR DE GAS EN BOMBONAS PARA USO DOMÉSTICO EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47739303', 
                    'descripcion' => 'VENTA AL POR MENOR DE CARBÓN Y LEÑA PARA USO DOMÉSTICO EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47739401', 
                    'descripcion' => 'VENTA AL POR MENOR DE RELOJES Y JOYAS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47739501', 
                    'descripcion' => 'VENTA AL POR MENOR DE RECARGAS ELECTRÓNICAS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47739502', 
                    'descripcion' => 'VENTA AL POR MENOR DE TARJETAS ELECTRÓNICAS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47739601', 
                    'descripcion' => 'VENTA AL POR MENOR DE PRODUCTOS PARA FIESTAS INFANTILES EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47739901', 
                    'descripcion' => 'VENTA AL POR MENOR DE PRODUCTOS NO ALIMENTICIOS N.C.P.: MATERIALES DE LIMPIEZA, ARMAS Y MUNICIONES, ETCÉTERA, EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47740101', 
                    'descripcion' => 'VENTA AL POR MENOR DE LIBROS DE SEGUNDA MANO EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47740201', 
                    'descripcion' => 'VENTA AL POR MENOR DE ANTIGÜEDADES EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47740301', 
                    'descripcion' => 'ACTIVIDADES DE CASAS DE EMPEÑO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47740901', 
                    'descripcion' => 'OTROS TIPOS DE ACTIVIDADES DE VENTA AL POR MENOR DE ARTÍCULOS DE SEGUNDA MANO, USADOS, INCLUIDAS ACTIVIDADES DE CASAS DE SUBASTAS DE ESTOS ARTÍCULOS EN ESTABLECIMIENTOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47810001', 
                    'descripcion' => 'VENTA AL POR MENOR DE ALIMENTOS, BEBIDAS Y PRODUCTOS DEL TABACO EN PUESTOS DE VENTA O MERCADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47820001', 
                    'descripcion' => 'VENTA AL POR MENOR DE PRODUCTOS TEXTILES, PRENDAS DE VESTIR Y CALZADO EN PUESTOS DE VENTA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47820002', 
                    'descripcion' => 'VENTA AL POR MENOR DE PRODUCTOS TEXTILES, PRENDAS DE VESTIR Y CALZADO EN MERCADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47890001', 
                    'descripcion' => 'VENTA AL POR MENOR DE OTROS ARTÍCULOS EN PUESTOS DE VENTA COMO: ALFOMBRAS, TAPICES, LIBROS, JUEGOS Y JUGUETES, APARATOS ELECTRODOMÉSTICOS GRABACIONES DE MÚSICA, VIDEO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47890002', 
                    'descripcion' => 'VENTA AL POR MENOR DE OTROS ARTÍCULOS EN MERCADO COMO: ALFOMBRAS, TAPICES, LIBROS, JUEGOS Y JUGUETES, APARATOS ELECTRODOMÉSTICOS GRABACIONES DE MÚSICA, VIDEO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47910001', 
                    'descripcion' => 'VENTA AL POR MENOR DE CUALQUIER TIPO DE PRODUCTO POR CORREO, POR INTERNET, INCLUIDO SUBASTAS POR INTERNET, CATÁLOGO Y ENVIÓ DE PRODUCTOS AL CLIENTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47910002', 
                    'descripcion' => 'VENTA AL POR MENOR DE CUALQUIER TIPO DE PRODUCTO POR TELÉFONO, TELEVISIÓN, RADIO, PERIÓDICOS Y ENVIÓ DE PRODUCTOS AL CLIENTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47990101', 
                    'descripcion' => 'VENTA AL POR MENOR DE CUALQUIER TIPO DE PRODUCTO NO REALIZADA EN ALMACENES NI PUESTOS DE MERCADO: VENTA DIRECTA O POR VENDEDORES A DOMICILIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47990102', 
                    'descripcion' => 'VENTA AL POR MENOR DE CUALQUIER TIPO DE PRODUCTO NO REALIZADA EN ALMACENES NI PUESTOS DE MERCADO: VENTA MEDIANTE MÁQUINAS EXPENDEDORAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47990201', 
                    'descripcion' => 'VENTA AL POR MENOR POR COMISIONISTAS (NO DEPENDIENTES DE COMERCIOS); INCLUYE ACTIVIDADES DE CASAS DE SUBASTAS (AL POR MENOR)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'G47990301', 
                    'descripcion' => 'VENTA DIRECTA DE COMBUSTIBLES (COMBUSTIBLE DE CALEFACCIÓN, LEÑA, ETCÉTERA) CON ENTREGA EN EL DOMICILIO DEL CLIENTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49110001', 
                    'descripcion' => 'TRANSPORTE DE PASAJEROS POR FERROCARRILES INTERURBANOS, INCLUYE SERVICIOS DE COCHES CAMA Y COCHES RESTAURANTE INTEGRADOS EN LOS SERVICIOS DE LAS COMPAÑÍAS DE FERROCARRIL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49120001', 
                    'descripcion' => 'TRANSPORTE DE CARGA POR LÍNEAS PRINCIPALES DE FERROCARRIL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49120002', 
                    'descripcion' => 'TRANSPORTE DE CARGA POR LÍNEAS SECUNDARIAS DE FERROCARRIL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49210101', 
                    'descripcion' => 'TRANSPORTE TERRESTRE DE PASAJEROS POR SISTEMAS DE TRANSPORTE URBANO QUE PUEDEN ABARCAR LÍNEAS DE AUTOBÚS, TRANVÍA, TROLEBÚS, METRO, FERROCARRIL ELEVADO, LÍNEAS DE TRANSPORTE ENTRE LA CIUDAD Y EL AEROPUERTO O LA ESTACIÓN ETCÉTERA. EL TRANSPORTE SE REALIZA POR RUTAS ESTABLECIDAS SIGUIENDO NORMALMENTE UN HORARIO FIJO, Y EL EMBARQUE Y DESEMBARQUE DE PASAJEROS EN PARADAS ESTABLECIDAS. INCLUYE LA EXPLOTACIÓN DE FUNICULARES, TELEFÉRICOS, ETCÉTERA, QUE FORMEN PARTE DEL SISTEMA DE TRANSPORTE URBANO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49210201', 
                    'descripcion' => 'TRANSPORTE TERRESTRE DE PASAJEROS POR SISTEMAS DE TRANSPORTE SUBURBANO, QUE PUEDEN ABARCAR LÍNEAS DE PARROQUIAL. EL TRANSPORTE SE REALIZA POR RUTAS ESTABLECIDAS SIGUIENDO NORMALMENTE UN HORARIO FIJO, Y EL EMBARQUE Y DESEMBARQUE DE PASAJEROS EN PARADAS ESTABLECIDAS. INCLUYE LA EXPLOTACIÓN DE FUNICULARES, TELEFÉRICOS, ETCÉTERA, QUE FORMEN PARTE DEL SISTEMA DE TRANSPORTE SUBURBANO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49210202', 
                    'descripcion' => 'TRANSPORTE TERRESTRE DE PASAJEROS POR SISTEMAS DE TRANSPORTE INTERURBANO, QUE PUEDEN ABARCAR LÍNEAS DE AUTOBÚS PROVINCIAL. EL TRANSPORTE SE REALIZA POR RUTAS ESTABLECIDAS SIGUIENDO NORMALMENTE UN HORARIO FIJO, Y EL EMBARQUE Y DESEMBARQUE DE PASAJEROS EN PARADAS ESTABLECIDAS. INCLUYE LA EXPLOTACIÓN DE FUNICULARES, TELEFÉRICOS, ETCÉTERA, QUE FORMEN PARTE DEL SISTEMA DE TRANSPORTE INTERURBANO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49220101', 
                    'descripcion' => 'ACTIVIDADES DE TRANSPORTE DE PASAJEROS POR CARRETERA: SERVICIOS REGULARES DE AUTOBUSES DE LARGA DISTANCIA SERVICIOS DE VIAJES CONTRATADOS Y OTROS SERVICIOS OCASIONALES DE TRANSPORTE EN AUTOBÚS, TRICIMOTOS, SERVICIOS DE ENLACE CON AEROPUERTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49220102', 
                    'descripcion' => 'ACTIVIDADES DE TRANSPORTE DE PASAJEROS POR CARRETERA; SERVICIOS REGULARES DE EXCURSIONES Y OTROS SERVICIOS OCASIONALES DE TRANSPORTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49220201', 
                    'descripcion' => 'SERVICIOS DE TAXIS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49220301', 
                    'descripcion' => 'SERVICIOS DE TELEFÉRICOS, FUNICULARES, TELESILLAS Y TELECABINAS, SI NO FORMAN PARTE DE SISTEMAS DE TRANSPORTE URBANO O SUBURBANO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49220401', 
                    'descripcion' => 'ACTIVIDADES DE ALQUILER DE AUTOMÓVILES PRIVADOS CON CONDUCTOR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49220501', 
                    'descripcion' => 'SERVICIOS DE AUTOBUSES ESCOLARES Y AUTOBUSES PARA EL TRANSPORTE DE EMPLEADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49220601', 
                    'descripcion' => 'TRANSPORTE DE PASAJEROS EN VEHÍCULOS DE TRACCIÓN HUMANA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49220602', 
                    'descripcion' => 'TRANSPORTE DE PASAJEROS EN VEHÍCULOS DE TRACCIÓN ANIMAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49230101', 
                    'descripcion' => 'TODAS LAS ACTIVIDADES DE TRANSPORTE DE CARGA POR CARRETERA, INCLUIDO EN CAMIONETAS DE: TRONCOS, GANADO, TRANSPORTE REFRIGERADO, CARGA PESADA, CARGA A GRANEL, INCLUIDO EL TRANSPORTE EN CAMIONES CISTERNA, AUTOMÓVILES, DESPERDICIOS Y MATERIALES DE DESECHO, SIN RECOGIDA NI ELIMINACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49230201', 
                    'descripcion' => 'SERVICIO DE ALQUILER DE CAMIONES CON CONDUCTOR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49230301', 
                    'descripcion' => 'TRANSPORTE DE CARGA EN VEHÍCULOS DE TRACCIÓN HUMANA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49230302', 
                    'descripcion' => 'TRANSPORTE DE CARGA EN VEHÍCULOS DE TRACCIÓN ANIMAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49230401', 
                    'descripcion' => 'SERVICIOS DE MUDANZAS DE MUEBLES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49230501', 
                    'descripcion' => 'OTROS TIPOS DE TRANSPORTE REGULAR O NO REGULAR DE CARGA POR CARRETERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49230601', 
                    'descripcion' => 'OTROS TIPOS DE TRANSPORTE NO REGULAR DE PASAJEROS POR VIA TERRESTRE N.C.P' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49300001', 
                    'descripcion' => 'SERVICIO DE ESTACIONES DE BOMBEO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49300002', 
                    'descripcion' => 'SERVICIO DE TRANSPORTE DE PETROLEO POR TUBERIAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49300003', 
                    'descripcion' => 'SERVICIO DE TRANSPORTE DE GASES POR TUBERÍAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H49300004', 
                    'descripcion' => 'SERVICIO DE TRANSPORTE DE LÌQUIDOS, AGUA, LECHADA Y OTROS PRODUCTOS POR TUBERÍAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H50110101', 
                    'descripcion' => 'TRANSPORTE MARÍTIMO Y DE CABOTAJE, REGULAR Y NO REGULAR, DE PASAJEROS; EXPLOTACIÓN DE EMBARCACIONES DE EXCURSIÓN, DE CRUCERO O DE TURISMO, EXPLOTACIÓN DE TRANSBORDADORES, TAXIS ACUÁTICAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H50110201', 
                    'descripcion' => 'ALQUILER DE EMBARCACIONES DE PLACER CON TRIPULACIÓN PARA EL TRANSPORTE MARÍTIMO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H50120101', 
                    'descripcion' => 'TRANSPORTE MARÍTIMO Y DE CABOTAJE, REGULAR Y NO REGULAR, DE CARGA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H50120201', 
                    'descripcion' => 'TRANSPORTE DE BARCAZAS, PLATAFORMAS PETROLÍFERAS, ETC., REMOLCADAS O EMPUJADAS POR REMOLCADORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H50120301', 
                    'descripcion' => 'ALQUILER DE EMBARCACIONES CON TRIPULACIÓN PARA EL TRANSPORTE MARÍTIMO (INCLUIDO EL COSTERO) DE MERCANCÍAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H50210101', 
                    'descripcion' => 'TRANSPORTE DE PASAJEROS POR RÍOS, CANALES, LAGOS Y OTRAS VÍAS DE NAVEGACIÓN INTERIORES, INCLUIDOS PUERTOS INTERIORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H50210201', 
                    'descripcion' => 'ALQUILER DE EMBARCACIONES DE PLACER CON TRIPULACIÓN PARA EL TRANSPORTE POR VÍAS DE NAVEGACIÓN INTERIORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H50220101', 
                    'descripcion' => 'TRANSPORTE DE CARGA POR RÍOS, CANALES, LAGOS Y OTRAS VÍAS DE NAVEGACIÓN INTERIORES, INCLUIDOS PUERTOS INTERIORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H50220201', 
                    'descripcion' => 'ALQUILER DE EMBARCACIONES CON TRIPULACIÓN PARA EL TRANSPORTE DE MERCANCÍAS POR: RÍOS, CANALES, LAGOS Y OTRAS VÍAS DE NAVEGACIÓN INTERIORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H51100101', 
                    'descripcion' => 'TRANSPORTE AÉREO DE PASAJEROS CON ITINERARIOS Y HORARIOS ESTABLECIDOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H51100201', 
                    'descripcion' => 'VUELOS PANORÁMICOS Y TURÍSTICOS INCLUYE ACTIVIDADES GENERALES DE AVIACIÓN, COMO: TRANSPORTE DE PASAJEROS POR CLUBES AÉREOS CON FINES DE INSTRUCCIÓN O DE RECREO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H51100301', 
                    'descripcion' => 'ALQUILER DE EQUIPO DE TRANSPORTE AÉREO CON OPERADORES PARA EL TRANSPORTE DE PASAJEROS, VUELOS CONTRATADOS (CHÁRTER) PARA PASAJEROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H51200101', 
                    'descripcion' => 'TRANSPORTE AÉREO LOCAL DE CARGA CON ITINERARIOS Y HORARIOS ESTABLECIDOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H51200102', 
                    'descripcion' => 'TRANSPORTE AÉREO INTERNACIONAL DE CARGA CON ITINERARIOS Y HORARIOS ESTABLECIDOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H51200103', 
                    'descripcion' => 'TRANSPORTE AÉREO DE CARGA CON ITINERARIOS Y HORARIOS ESTABLECIDOS, DESDE Y HACIA LA PROVINCIA DE GALÁPAGOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H51200201', 
                    'descripcion' => 'ALQUILER DE EQUIPO DE TRANSPORTE AÉREO CON OPERADORES PARA EL TRANSPORTE DE CARGA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H51200301', 
                    'descripcion' => 'TRANSPORTE ESPACIAL Y LANZAMIENTO DE SATÉLITES Y VEHÍCULOS ESPACIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H51200401', 
                    'descripcion' => 'TRANSPORTE AÉREO NO REGULAR DE CARGA LOCAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H51200402', 
                    'descripcion' => 'TRANSPORTE AÉREO NO REGULAR DE CARGA INTERNACIONAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H51200403', 
                    'descripcion' => 'TRANSPORTE AÉREO NO REGULAR DE CARGA DESDE Y HACIA LA PROVINCIA DE GALÁPAGOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H51200501', 
                    'descripcion' => 'OTRAS FORMAS DE TRANSPORTACIÓN AÉREA NO REGULAR DE CARGA INTERNACIONAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H51200502', 
                    'descripcion' => 'OTRAS FORMAS DE TRANSPORTACIÓN AÉREA NO REGULAR DE CARGA LOCAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H51200503', 
                    'descripcion' => 'OTRAS FORMAS DE TRANSPORTACIÓN AÉREA NO REGULAR DE CARGA DESDE Y HACIA LA PROVINCIA DE GALÁPAGOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H52100001', 
                    'descripcion' => 'ACTIVIDADES DE ALMACENAMIENTO Y DEPÓSITO PARA TODO TIPO DE PRODUCTOS: EXPLOTACIÓN DE SILOS DE GRANOS, CÁMARAS FRIGORÍFICAS. INCLUYE LA CONGELACIÓN POR CORRIENTE DE AIRE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H52100002', 
                    'descripcion' => 'ACTIVIDADES DE ALMACENAMIENTO Y DEPÓSITO PARA TODO TIPO DE PRODUCTOS: TANQUES DE ALMACENAMIENTO, ETCÉTERA. ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H52100003', 
                    'descripcion' => 'ACTIVIDADES DE ALMACENAMIENTO Y DEPÓSITO PARA TODO TIPO DE PRODUCTOS:  ALMACENES PARA MERCANCÍAS DIVERSAS, ALMACENAMIENTO DE PRODUCTOS EN ZONAS FRANCAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H52210101', 
                    'descripcion' => 'ACTIVIDADES RELACIONADAS CON EL TRANSPORTE TERRESTRE DE PASAJEROS: EXPLOTACIÓN DE TERMINALES, ESTACIONES FERROVIARIAS, DE AUTOBUSES, DE MANIPULACIÓN DE MERCANCÍAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H52210102', 
                    'descripcion' => 'ACTIVIDADES RELACIONADAS CON EL TRANSPORTE TERRESTRE DE CARGA: EXPLOTACIÓN DE TERMINALES, ESTACIONES FERROVIARIAS, DE AUTOBUSES, DE MANIPULACIÓN DE MERCANCÍAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H52210103', 
                    'descripcion' => 'ACTIVIDADES RELACIONADAS CON EL TRANSPORTE TERRESTRE DE ANIMALES: EXPLOTACIÓN DE TERMINALES, ESTACIONES FERROVIARIAS, DE AUTOBUSES, DE MANIPULACIÓN DE MERCANCÍAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H52210104', 
                    'descripcion' => 'OPERACIÓN DE INFRAESTRUCTURA DE TRANSPORTE FERROVIARIO SU REPARACIÓN Y MANTENIMIENTO (LIMPIEZA EXTERIOR DE LAS UNIDADES, MANTENIMIENTO DE VÍAS Y DE EQUIPOS, INSTALACIÓN Y MANTENIMIENTO ELECTROMECÁNICO DE MAQUINARIA Y CONDUCCIÓN DE LÍNEAS), OPERACIONES DE CAMBIO DE VÍAS O DE AGUJAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H52210201', 
                    'descripcion' => 'ACTIVIDADES RELACIONADAS CON ADMINISTRACIÓN Y OPERACIONES DE SERVICIOS DE: CARRETERAS, PUENTES, TÚNELES, APARCAMIENTOS O GARAJES, APARCAMIENTOS PARA BICICLETAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H52210301', 
                    'descripcion' => 'ACTIVIDADES DE REMOLQUE Y ASISTENCIA EN CARRETERAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H52210401', 
                    'descripcion' => 'ACTIVIDADES DE LICUEFACCIÓN DE GAS PARA FACILITAR SU TRANSPORTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H52220001', 
                    'descripcion' => 'ACTIVIDADES RELACIONADAS CON EL TRANSPORTE ACUÁTICO DE PASAJEROS, ANIMALES O CARGA: EXPLOTACIÓN DE INSTALACIONES TERMINALES, COMO PUERTOS Y MALECONES, EXPLOTACIÓN DE EXCLUSAS DE VÍAS DE NAVEGACIÓN INTERIORES, ETCÉTERA, ACTIVIDADES DE NAVEGACIÓN, PRACTICAJE Y ATRACADA, ACTIVIDADES DE GABARRAJE Y SALVAMENTO, INCLUYE ACTIVIDADES DE FAROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H52230101', 
                    'descripcion' => 'ACTIVIDADES RELACIONADAS CON EL TRANSPORTE AÉREO DE PASAJEROS, ANIMALES O CARGA: EXPLOTACIÓN DE INSTALACIONES TERMINALES, COMO TERMINALES AÉREAS, ETC. ACTIVIDADES AEROPORTUARIAS Y DE CONTROL DE TRÁFICO AÉREO. ACTIVIDADES DE SERVICIO EN TIERRA REALIZADAS EN AEROPUERTOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H52230201', 
                    'descripcion' => 'SERVICIOS DE PREVENCIÓN Y EXTINCIÓN DE INCENDIOS EN LOS AEROPUERTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H52240001', 
                    'descripcion' => 'CARGA Y DESCARGA DE MERCANCÍAS Y EQUIPAJE, INDEPENDIENTEMENTE DEL MODO DE TRANSPORTE UTILIZADO, ESTIBA Y DESESTIBA, INCLUYE CARGA Y DESCARGA DE VAGONES FERROVIARIOS DE CARGA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H52290101', 
                    'descripcion' => 'SERVICIOS TRANSITORIOS DE ORGANIZACIÓN O COORDINACIÓN DE OPERACIONES DE TRANSPORTE Y FLETE POR MAR Y AIRE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H52290102', 
                    'descripcion' => 'SERVICIOS TRANSITORIOS DE ORGANIZACIÓN O COORDINACIÓN DE OPERACIONES DE TRANSPORTE Y FLETE POR TIERRA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H52290201', 
                    'descripcion' => 'ACTIVIDADES LOGÍSTICAS: PLANIFICACIÓN, DISEÑO Y APOYO DE OPERACIONES DE TRANSPORTE, ALMACENAMIENTO Y DISTRIBUCIÓN; CONTRATACIÓN DE ESPACIO EN BUQUES Y AERONAVES, ORGANIZACIÓN DE ENVÍOS DE GRUPO E INDIVIDUALES (INCLUIDAS LA RECOGIDA Y ENTREGA DE MERCANCÍAS Y LA AGRUPACIÓN DE ENVÍOS); MANIPULACIÓN DE MERCANCÍAS, COMO: EL EMBALAJE TEMPORAL CON LA EXCLUSIVA FINALIDAD DE PROTEGER LAS MERCANCÍAS DURANTE EL TRÁNSITO, DESEMBALAJE, MUESTREO Y PESAJE DE LA CARGA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H52290301', 
                    'descripcion' => 'ACTIVIDADES DE AGENTES DE ADUANAS; EMISIÓN Y TRAMITACIÓN DE DOCUMENTOS DE TRANSPORTE Y CONOCIMIENTOS DE EMBARQUE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H52290401', 
                    'descripcion' => 'SERVICIOS DE FLETES DE AUTOBUSES, INCLUSO PARA EXCURSIONES Y DEMÁS SERVICIOS OCASIONALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H52290501', 
                    'descripcion' => 'ACTIVIDADES DE GUÍAS TURÍSTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H53100001', 
                    'descripcion' => 'SERVICIOS DE RECOLECCIÓN DE CORRESPONDENCIA Y PAQUETES DEPOSITADOS EN BUZONES PÚBLICOS O EN OFICINAS DE CORREOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H53100002', 
                    'descripcion' => 'SERVICIOS DE DISTRIBUCIÓN Y ENTREGA DE CORRESPONDENCIA Y PAQUETES. LA ACTIVIDAD PUEDE REALIZARSE EN UNO O VARIOS MEDIOS DE TRANSPORTE PROPIOS (TRANSPORTE PRIVADO) O DE TRANSPORTE PÚBLICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H53100003', 
                    'descripcion' => 'ACTIVIDADES DE VENTA DE SELLOS DE CORREO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H53100101', 
                    'descripcion' => 'ACTIVIDADES DE CLASIFICACIÓN DE LA CORRESPONDENCIA Y ALQUILER DE BUZONES POSTALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H53100102', 
                    'descripcion' => 'SERVICIOS DE APARTADO POSTALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H53100201', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE CORREO DISTINTAS DE LAS POSTALES NACIONALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H53200001', 
                    'descripcion' => 'SERVICIOS DE RECOLECCIÓN (NACIONAL O INTERNACIONAL) DE CORRESPONDENCIA ORDINARIA Y PAQUETES (QUE CUMPLAN DETERMINADAS ESPECIFICACIONES) POR PARTE DE EMPRESAS NO SUJETAS A LA OBLIGACIÓN DE SERVICIO UNIVERSAL.  LA ACTIVIDAD PUEDE REALIZARSE EN UNO O VARIOS MEDIOS DE TRANSPORTE PROPIOS (TRANSPORTE PRIVADO) O DE TRANSPORTE PÚBLICO. INCLUYE LA DISTRIBUCIÓN Y ENTREGA DE CORRESPONDENCIA Y PAQUETES Y LA ENTREGA A DOMICILIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'H53200002', 
                    'descripcion' => 'SERVICIOS DE RECOLECCIÓN, CLASIFICACIÓN, TRANSPORTE Y ENTREGA DE CORRESPONDENCIA ORDINARIA Y PAQUETES (QUE CUMPLAN DETERMINADAS ESPECIFICACIONES) POR PARTE DE EMPRESAS NO SUJETAS A LA OBLIGACIÓN DE SERVICIO UNIVERSAL. LA ACTIVIDAD PUEDE REALIZARSE EN UNO O VARIOS MEDIOS DE TRANSPORTE PROPIOS (TRANSPORTE PRIVADO) O DE TRANSPORTE PÚBLICO. INCLUYE LA DISTRIBUCIÓN Y ENTREGA DE CORRESPONDENCIA Y PAQUETES Y LA ENTREGA A DOMICILIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I55100101', 
                    'descripcion' => 'SERVICIOS DE ALOJAMIENTO PRESTADOS POR HOTELES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I55100102', 
                    'descripcion' => 'SERVICIOS DE ALOJAMIENTO PRESTADOS POR HOTELES DE SUITES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I55100103', 
                    'descripcion' => 'SERVICIOS DE ALOJAMIENTO PRESTADOS POR APART HOTELES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I55100104', 
                    'descripcion' => 'SERVICIOS DE ALOJAMIENTO PRESTADOS POR COMPLEJOS TURÍSTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I55100105', 
                    'descripcion' => 'SERVICIOS DE ALOJAMIENTO PRESTADOS POR HOSTERÍAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I55100201', 
                    'descripcion' => 'SERVICIOS DE ALOJAMIENTO PRESTADOS POR MOTELES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I55100901', 
                    'descripcion' => 'OTROS SERVICIOS DE ALOJAMIENTOS POR CORTO TIEMPO EN CASAS DE HUÉSPEDES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I55100902', 
                    'descripcion' => 'OTROS SERVICIOS DE ALOJAMIENTOS POR CORTO TIEMPO EN CABAÑAS, CHALETS, CABAÑAS CON SERVICIO DE MANTENIMIENTO Y LIMPIEZA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I55100903', 
                    'descripcion' => 'OTROS SERVICIOS DE ALOJAMIENTOS POR CORTO TIEMPO EN HOSTALES JUVENILES Y REFUGIOS DE MONTAÑA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I55100904', 
                    'descripcion' => 'SERVICIOS DE ALOJAMIENTO PRESTADOS POR ANFITRIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I55200001', 
                    'descripcion' => 'PROVISIÓN DE ALOJAMIENTO EN CAMPAMENTOS, PARQUES PARA CARAVANAS, CAMPAMENTOS RECREATIVOS Y CAMPAMENTOS DE CAZA Y DE PESCA PARA ESTANCIAS CORTAS. ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I55200002', 
                    'descripcion' => 'ESPACIO E INSTALACIONES PARA VEHÍCULOS DE RECREO. SE INCLUYE REFUGIOS O SIMPLES INSTALACIONES DE ACAMPADA PARA PLANTAR TIENDAS O PERNOCTAR EN SACOS DE DORMIR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I55900101', 
                    'descripcion' => 'SERVICIO DE RESIDENCIAS DE ESTUDIANTES, DORMITORIOS ESCOLARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I55900102', 
                    'descripcion' => 'SERVICIO DE ALBERGUES PARA TRABAJADORES, CASAS DE HUÉSPEDES E INTERNADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I55900201', 
                    'descripcion' => 'SERVICIOS DE COCHES CAMA FERROVIARIOS' 
                ]);  

      /*  DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56100101', 
                    'descripcion' => 'VENTA DE COMIDAS Y BEBIDAS EN RESTAURANTES, INCLUSO  PARA LLEVAR' 
                ]);  */

        DB::table('actividades_economicas')->insert([ 
            'codigo' => 'I56100101', 
            'descripcion' => 'RESTAURANTES, CEVICHERIAS, PICANTERÍAS, CAFETERÍAS, ETCETERA, INCLUIDO COMIDA PARA LLEVAR' 
        ]); 

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56100102', 
                    'descripcion' => 'VENTA DE COMIDAS Y BEBIDAS EN CEVICHERÍAS, INCLUSO  PARA LLEVAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56100103', 
                    'descripcion' => 'VENTA DE COMIDAS Y BEBIDAS EN PICANTERÍAS, INCLUSO  PARA LLEVAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56100104', 
                    'descripcion' => 'VENTA DE COMIDAS Y BEBIDAS EN CAFETERÍAS, INCLUSO  PARA LLEVAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56100105', 
                    'descripcion' => 'VENTA DE COMIDAS Y BEBIDAS EN FONDAS Y COMEDORES POPULARES, INCLUSO  PARA LLEVAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56100106', 
                    'descripcion' => 'VENTA DE COMIDAS Y BEBIDAS EN BARES- RESTAURANTES, INCLUSO  PARA LLEVAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56100201', 
                    'descripcion' => 'RESTAURANTES DE COMIDA RÁPIDA, PUESTOS DE REFRIGERIO Y ESTABLECIMIENTOS QUE OFRECEN COMIDA PARA LLEVAR, REPARTO DE PIZZA, ETCÉTERA; HELADERÍAS, FUENTES DE SODA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56100301', 
                    'descripcion' => 'PREPARACIÓN Y SUMINISTRO DE COMIDAS PARA SU CONSUMO INMEDIATO DE MANERA AMBULANTE, MEDIANTE UN VEHÍCULO MOTORIZADO O CARRO NO MOTORIZADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56100302', 
                    'descripcion' => 'VENDEDORES DE HELADOS EN CARROS MÓVILES, CARRITOS AMBULANTES DE COMIDA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56100303', 
                    'descripcion' => 'PREPARACIÓN DE COMIDA EN PUESTOS DE MERCADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56100401', 
                    'descripcion' => 'SERVICIOS DE RESTAURANTES Y BARES EN CONEXIÓN CON TRANSPORTE CUANDO SON PROPORCIONADAS POR UNIDADES INDEPENDIENTES: BARES DEL AEROPUERTO, BARES TERMINALES TERRESTRES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56210001', 
                    'descripcion' => 'SERVICIO DE COMIDAS BASADO EN ACUERDOS CONTRACTUALES CON EL CLIENTE PARA UN EVENTO COMO BANQUETES, BODAS, FIESTAS Y OTRAS CELEBRACIONES, EN LA LOCALIZACIÓN ESPECIFICADA POR EL CLIENTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56210002', 
                    'descripcion' => 'SERVICIO DE COMIDAS BASADO EN ACUERDOS CONTRACTUALES CON EL CLIENTE PARA UN EVENTO COMO BUFFETS EN LA LOCALIZACIÓN ESPECIFICADA POR EL CLIENTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56210003', 
                    'descripcion' => 'SERVICIO DE RESTAURANTES A DOMICILIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56290101', 
                    'descripcion' => 'ACTIVIDADES DE CONTRATISTAS DE SERVICIO DE COMIDAS COMO LAS COMPAÑÍAS DE TRANSPORTE, CATERING' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56290201', 
                    'descripcion' => 'CONCESIONES DE SERVICIO DE COMIDAS EN INSTALACIONES DEPORTIVAS E INSTALACIONES SIMILARES, CANTINAS O CAFETERÍAS (POR EJEMPLO, PARA FÁBRICAS, OFICINAS, HOSPITALES O ESCUELAS) EN RÉGIMEN DE CONCESIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56300101', 
                    'descripcion' => 'ACTIVIDADES DE PREPARACIÓN Y SERVICIO DE BEBIDAS PARA SU CONSUMO INMEDIATO EN BARES (CON SUMINISTRO PREDOMINANTE DE BEBIDAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56300102', 
                    'descripcion' => 'ACTIVIDADES DE PREPARACIÓN Y SERVICIO DE BEBIDAS PARA SU CONSUMO INMEDIATO EN TABERNAS (CON SUMINISTRO PREDOMINANTE DE BEBIDAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56300103', 
                    'descripcion' => 'ACTIVIDADES DE PREPARACIÓN Y SERVICIO DE BEBIDAS PARA SU CONSUMO INMEDIATO EN COCTELERÍAS (CON SUMINISTRO PREDOMINANTE DE BEBIDAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56300104', 
                    'descripcion' => 'ACTIVIDADES DE PREPARACIÓN Y SERVICIO DE BEBIDAS PARA SU CONSUMO INMEDIATO EN DISCOTECAS (CON SUMINISTRO PREDOMINANTE DE BEBIDAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56300105', 
                    'descripcion' => 'ACTIVIDADES DE PREPARACIÓN Y SERVICIO DE BEBIDAS PARA SU CONSUMO INMEDIATO EN CERVECERÍAS Y PUBS (CON SUMINISTRO PREDOMINANTE DE BEBIDAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56300201', 
                    'descripcion' => 'ACTIVIDADES DE PREPARACIÓN Y SERVICIO DE BEBIDAS PARA SU CONSUMO INMEDIATO EN CAFÉS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56300202', 
                    'descripcion' => 'ACTIVIDADES DE PREPARACIÓN Y SERVICIO DE BEBIDAS PARA SU CONSUMO INMEDIATO EN TIENDAS DE JUGOS DE FRUTA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'I56300203', 
                    'descripcion' => 'ACTIVIDADES DE PREPARACIÓN Y SERVICIO DE BEBIDAS PARA SU CONSUMO INMEDIATO, VENDEDORES AMBULANTES DE BEBIDAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J58110101', 
                    'descripcion' => 'PUBLICACIÓN DE LIBROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J58110102', 
                    'descripcion' => 'PUBLICACIÓN DE FOLLETOS IMPRESOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J58110103', 
                    'descripcion' => 'PUBLICACIÓN DE DICCIONARIOS, ENCICLOPEDIAS Y SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J58110104', 
                    'descripcion' => 'PUBLICACIÓN DE ATLAS, MAPAS Y PLANOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J58110105', 
                    'descripcion' => 'PUBLICACIÓN Y VENTA DE ESPACIOS PUBLICITARIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J58110201', 
                    'descripcion' => 'PUBLICACIÓN DE LIBROS EN FORMATO DE AUDIO Y DE ENCICLOPEDIAS EN CD-ROM' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J58120001', 
                    'descripcion' => 'PUBLICACIÓN DE: GUÍAS DE DIRECCIONES, POSTALES, GUÍAS TELEFÓNICAS, REGISTROS OFICIALES, JURISPRUDENCIA (LEY), VADEMÉCUM FARMACÉUTICOS, ETCÉTERA. INCLUYE VENTA DE ESPACIOS PUBLICITARIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J58130101', 
                    'descripcion' => 'ACTIVIDADES DE PUBLICACIÓN Y EDICIÓN DE PERIÓDICOS, INCLUIDOS LOS PUBLICITARIOS CON UNA PERIODICIDAD MAYOR A CUATRO VECES POR SEMANA. ESTA INFORMACIÓN PUEDE SER EDITADA EN FORMATO IMPRESOS O ELECTRÓNICOS, INCLUIDO INTERNET' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J58130102', 
                    'descripcion' => 'EDICIÓN DE REVISTAS DE INDUSTRIAS, HUMORÍSTICAS, ETC. (ESTÉ, O NO RELACIONADA CON LA IMPRESIÓN)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J58130201', 
                    'descripcion' => 'ACTIVIDADES DE EDICIÓN Y PUBLICACIÓN DE LAS PROGRAMACIONES DE RADIO. INCLUSO LA VENTA DE ESPACIOS PUBLICITARIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J58130202', 
                    'descripcion' => 'ACTIVIDADES DE EDICIÓN Y PUBLICACIÓN DE LAS PROGRAMACIONES DE TELEVISIÓN. INCLUSO LA VENTA DE ESPACIOS PUBLICITARIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J58130203', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE RADIO Y TELEVISIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J58190101', 
                    'descripcion' => 'PUBLICACIÓN (INCLUIDA LA EDICIÓN ON-LINE) DE CATÁLOGOS DE FOTOGRAFÍAS, GRABADOS, REPRODUCCIONES DE OBRAS DE ARTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J58190102', 
                    'descripcion' => 'PUBLICACIÓN (INCLUIDA LA EDICIÓN ON-LINE) DE TARJETAS POSTALES, TARJETAS DE FELICITACIÓN, FORMULARIOS, CARTELES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J58190103', 
                    'descripcion' => 'PUBLICACIÓN DE OTRO MATERIAL IMPRESO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J58190201', 
                    'descripcion' => 'PUBLICACIÓN DE ESTADÍSTICAS EN LÍNEA Y OTRA INFORMACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J58200001', 
                    'descripcion' => 'ACTIVIDADES DE PUBLICACIÓN DE PROGRAMAS INFORMÁTICOS COMERCIALES (NO PERSONALIZADOS): SISTEMAS OPERATIVOS, APLICACIONES COMERCIALES Y OTRAS APLICACIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J58200002', 
                    'descripcion' => 'ACTIVIDADES DE PUBLICACIÓN DE JUEGOS INFORMÁTICOS PARA TODAS LAS PLATAFORMAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J58200003', 
                    'descripcion' => 'FORMULACIÓN, PRODUCCIÓN Y SUMINISTRO DE PROGRAMAS ENCARGADOS POR LOS USUARIOS, INCLUIDA DOCUMENTACIÓN PERTINENTE Y PROGRAMAS LISTOS PARA SER UTILIZADOS (PROGRAMAS COMERCIALES O DEL FÁCIL CONFECCIÓN)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J59110001', 
                    'descripcion' => 'ACTIVIDADES DE PRODUCCIÓN DE PELÍCULAS CINEMATOGRÁFICAS, VIDEOS, PRODUCCIÓN PROGRAMAS Y ANUNCIOS DE TELEVISIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J59110002', 
                    'descripcion' => 'PRODUCCIÓN DE ESTUDIOS CINEMATOGRÁFICOS O LABORATORIOS ESPECIALES (PARA LA CREACIÓN DE DIBUJOS ANIMADOS POR EJEMPLO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J59120101', 
                    'descripcion' => 'ACTIVIDADES DE POSTPRODUCCIÓN, COMO: EDICIÓN, ROTULACIÓN, SUBTITULADO, CRÉDITOS SUBTITULADOS PARA SORDOS, GRÁFICOS, ANIMACIÓN Y EFECTOS ESPECIALES PRODUCIDOS POR ORDENADOR, TRANSFERENCIA DE PELÍCULA A CINTA; ACTIVIDADES DE LABORATORIOS CINEMATOGRÁFICOS Y DE LABORATORIOS ESPECIALES PARA PELÍCULAS DE ANIMACIÓN, INCLUIDO EL REVELADO DE ESTAS CINTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J59120201', 
                    'descripcion' => 'ACTIVIDADES DE REPRODUCCIÓN DE PELÍCULAS CINEMATOGRÁFICAS PARA SU DISTRIBUCIÓN EN CINES. SE INCLUYEN ACTIVIDADES DE ARCHIVOS CINEMATOGRÁFICOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J59130001', 
                    'descripcion' => 'DISTRIBUCIÓN DE PELÍCULAS, CINTAS DE VÍDEO, DVD Y PRODUCTOS SIMILARES A CINES, CADENAS Y EMISORAS DE TELEVISIÓN Y EXHIBIDORES. SE INCLUYEN ADQUISICIÓN DE LOS DERECHOS DE DISTRIBUCIÓN DE PELÍCULAS, CINTAS DE VÍDEO Y DVD' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J59130002', 
                    'descripcion' => 'ACTIVIDADES DE DISTRIBUCIÓN DE PELÍCULAS, CINTAS DE VÍDEO, DVD Y PRODUCTOS SIMILARES A CINES, CADENAS Y EMISORAS DE TELEVISIÓN Y EXHIBIDORES. SE INCLUYEN ADQUISICIÓN DE LOS DERECHOS DE DISTRIBUCIÓN DE PELÍCULAS, CINTAS DE VÍDEO Y DVD' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J59140001', 
                    'descripcion' => 'PROYECCIÓN DE PELÍCULAS CINEMATOGRÁFICAS Y CINTAS DE VÍDEO EN CINES, AL AIRE LIBRE O EN OTROS LOCALES DE PROYECCIÓN Y ACTIVIDADES DE CINECLUBES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J59200101', 
                    'descripcion' => 'ACTIVIDADES DE PRODUCCIÓN DE GRABACIONES MATRICES ORIGINALES DE SONIDO, COMO CINTAS MAGNETOFÓNICAS, CD' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J59200102', 
                    'descripcion' => 'EDICIÓN DE MATERIALES GRABADOS EN DISCOS GRAMOFÓNICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J59200103', 
                    'descripcion' => 'EDICIÓN DE MATERIALES GRABADOS EN OTROS MEDIOS DE REPRODUCCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J59200104', 
                    'descripcion' => 'REPRODUCCIÓN DE DISCOS GRAMOFÓNICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J59200105', 
                    'descripcion' => 'REPRODUCCIÓN DE CINTAS MAGNETOFÓNICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J59200106', 
                    'descripcion' => 'REPRODUCCIÓN DE CINTAS DE VIDEO Y CINTAS DE COMPUTADORA A PARTIR DE GRABACIONES ORIGINALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J59200107', 
                    'descripcion' => 'REPRODUCCIÓN DE DISCOS FLEXIBLES, DUROS O COMPACTOS DE COMPUTADORA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J59200108', 
                    'descripcion' => 'REPRODUCCIÓN DE PROGRAMAS COMERCIALES DE COMPUTADORA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J59200201', 
                    'descripcion' => 'LA PUBLICACIÓN, LANZAMIENTO, PROMOCIÓN Y DISTRIBUCIÓN DE GRABACIONES DE SONIDO PARA COMERCIANTES MAYORISTAS, MINORISTAS O DIRECTAMENTE PARA EL PÚBLICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J59200301', 
                    'descripcion' => 'ACTIVIDADES DE SERVICIOS DE GRABACIÓN DE SONIDO EN ESTUDIO O EN OTROS LUGARES, INCLUIDA LA PRODUCCIÓN DE PROGRAMAS DE RADIO GRABADOS (ES DECIR, NO EMITIDOS EN DIRECTO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J59200401', 
                    'descripcion' => 'ACTIVIDADES DE BANDAS SONORAS DE PELÍCULAS CINEMATOGRÁFICAS, GRABACIONES DE SONIDO PARA PROGRAMAS DE TELEVISIÓN, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J59200501', 
                    'descripcion' => 'EDICIÓN DE MÚSICA, ES DECIR, ACTIVIDADES DE: ADQUISICIÓN Y REGISTRO DE LOS DERECHOS DE AUTOR DE COMPOSICIONES MUSICALES, PROMOCIÓN, AUTORIZACIÓN Y UTILIZACIÓN DE ESAS COMPOSICIONES EN GRABACIONES, EN LA RADIO, EN LA TELEVISIÓN, EN PELÍCULAS, EN INTERPRETACIONES EN VIVO, EN MEDIOS IMPRESOS Y EN OTROS MEDIOS, DISTRIBUCIÓN DE GRABACIONES DE SONIDO A MAYORISTAS O MINORISTAS O DIRECTAMENTE AL PÚBLICO, INCLUYE LA EDICIÓN DE LIBROS DE MÚSICA ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J59200502', 
                    'descripcion' => 'EDICIÓN DE PARTITURAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J60100101', 
                    'descripcion' => 'ACTIVIDADES DE EMISIÓN DE SEÑALES DE AUDIOFRECUENCIA A TRAVÉS DE ESTUDIOS E INSTALACIONES DE EMISIÓN DE RADIO PARA LA TRANSMISIÓN DE PROGRAMAS SONOROS AL PÚBLICO, A ENTIDADES AFILIADAS O A SUSCRIPTORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J60100201', 
                    'descripcion' => 'ACTIVIDADES DE CADENAS DE RADIO, ES DECIR, LA REUNIÓN DE PROGRAMAS SONOROS Y SU TRANSMISIÓN A LOS AFILIADOS O SUSCRIPTORES POR EL AIRE, POR CABLE O POR SATÉLITE; TRANSMISIONES DE RADIO POR INTERNET (ESTACIONES DE RADIO POR INTERNET). INCLUYE LA TRANSMISIÓN DE DATOS INTEGRADA CON TRANSMISIONES DE RADIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J60200101', 
                    'descripcion' => 'ACTIVIDADES DE CREACIÓN DEL PROGRAMA COMPLETO DE UNA CADENA DE TELEVISIÓN PARA UN CANAL, DESDE LA COMPRA DE LOS COMPONENTES DEL PROGRAMA (PELÍCULAS, DOCUMENTALES, ETCÉTERA.) HASTA LA PRODUCCIÓN PROPIA DE LOS COMPONENTES DEL PROGRAMA AUTO PRODUCIDOS (NOTICIAS LOCALES, REPORTAJES EN VIVO) O UNA COMBINACIÓN DE LAS DOS OPCIONES. EL PROGRAMA COMPLETO DE TELEVISIÓN PUEDE SER EMITIDO POR LAS UNIDADES DE PRODUCCIÓN O BIEN PRODUCIRSE PARA SU TRANSMISIÓN POR TERCEROS DISTRIBUIDORES, COMO COMPAÑÍAS DE EMISIÓN POR CABLE O PROVEEDORES DE TELEVISIÓN POR SATÉLITE, INCLUYE LA PROGRAMACIÓN DE CANALES DE VIDEO A LA CARTA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J60200201', 
                    'descripcion' => 'ACTIVIDADES DE TRANSMISIÓN DE DATOS INTEGRADOS CON EMISIONES DE TELEVISIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61100101', 
                    'descripcion' => 'ACTIVIDADES DE OPERACIÓN, MANTENIMIENTO O FACILITACIÓN DEL ACCESO A SERVICIOS DE TRANSMISIÓN DE VOZ, DATOS, TEXTO, SONIDO Y VÍDEO UTILIZANDO UNA INFRAESTRUCTURA DE TELECOMUNICACIONES ALAMBRICAS, COMO: OPERACIÓN Y MANTENIMIENTO DE SISTEMAS DE CONMUTACIÓN Y TRANSMISIÓN PARA SUMINISTRAR SERVICIOS DE COMUNICACIONES DE PUNTO A PUNTO POR LÍNEAS ALAMBRICAS, POR MICROONDAS O POR UNA COMBINACIÓN DE LÍNEAS ALAMBRICAS Y CONEXIONES POR SATÉLITE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61100102', 
                    'descripcion' => 'SERVICIO DE TELEFONÍA FIJA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61100103', 
                    'descripcion' => 'SERVICIOS TELEGRÁFICOS Y RADIOTELEGRÁFICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61100201', 
                    'descripcion' => 'ACTIVIDADES DE OPERACIÓN EN SISTEMAS DE DISTRIBUCIÓN POR CABLE (POR EJEMPLO, PARA LA DISTRIBUCIÓN DE DATOS Y SEÑALES DE TELEVISIÓN)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61100202', 
                    'descripcion' => 'TRANSMISIÓN DE SONIDO, IMÁGENES, DATOS U OTRO TIPO DE INFORMACIÓN POR CABLE (TRANSMISIÓN TV. POR CABLE)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61100301', 
                    'descripcion' => 'ACTIVIDADES DE COMPRA EN DERECHOS DE ACCESO Y CAPACIDAD DE RED A LOS PROPIETARIOS Y OPERADORES DE REDES Y UTILIZACIÓN DE ESA CAPACIDAD PARA SUMINISTRAR SERVICIOS DE TELECOMUNICACIONES A EMPRESAS Y HOGARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61100401', 
                    'descripcion' => 'ACTIVIDADES DE SUMINISTRO EN ACCESO A INTERNET POR LOS OPERADORES DE LA INFRAESTRUCTURA DE TELECOMUNICACIONES ALAMBRICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61200101', 
                    'descripcion' => 'OPERACIÓN, MANTENIMIENTO O FACILITACIÓN DEL ACCESO A SERVICIOS DE TRANSMISIÓN DE VOZ, DATOS, TEXTO, SONIDO Y VÍDEO UTILIZANDO UNA INFRAESTRUCTURA DE TELECOMUNICACIONES INALÁMBRICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61200102', 
                    'descripcion' => 'ACTIVIDADES DE MANTENIMIENTO Y EXPLOTACIÓN DE TELEFONÍA MÓVIL Y OTRAS REDES DE TELECOMUNICACIONES INALÁMBRICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61200103', 
                    'descripcion' => 'ACTIVIDADES DE MANTENIMIENTO Y EXPLOTACIÓN DE REDES DE RADIO BÚSQUEDA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61200104', 
                    'descripcion' => 'TRANSMISIÓN DE SONIDO, IMÁGENES, DATOS U OTRO TIPO DE INFORMACIÓN  POR ESTACIONES DE DIFUSIÓN Y RETRANSMISIÓN, (TRANSMISIONES DE RADIO Y TV. POR ESTACIONES REPETIDORAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61200201', 
                    'descripcion' => 'ACTIVIDADES DE COMPRA DE ACCESO Y CAPACIDAD DE RED CONCEDIDA POR LOS DUEÑOS Y OPERADORES DE LAS REDES Y EL ABASTECIMIENTO DE SERVICIOS DE TELECOMUNICACIONES INALÁMBRICO (EXCEPTO EL SATÉLITE) QUE UTILIZAN ESTA CAPACIDAD A EMPRESAS Y HOGARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61200301', 
                    'descripcion' => 'ACTIVIDADES DE SUMINISTRO DE ACCESO A INTERNET POR LOS OPERADORES DE LA INFRAESTRUCTURA DE TELECOMUNICACIONES INALÁMBRICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61300101', 
                    'descripcion' => 'ACTIVIDADES DE OPERACIÓN, MANTENIMIENTO O FACILITACIÓN DEL ACCESO A SERVICIOS DE TRANSMISIÓN DE VOZ, DATOS, TEXTO, SONIDO Y VÍDEO UTILIZANDO UNA INFRAESTRUCTURA DE TELECOMUNICACIONES POR SATÉLITE, ACTIVIDADES DE SUMINISTRO DE ACCESO A INTERNET POR EL OPERADOR DE LA INFRAESTRUCTURA DE TELECOMUNICACIONES POR SATÉLITE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61300201', 
                    'descripcion' => 'ACTIVIDADES DE TRANSMISIÓN A LOS CONSUMIDORES POR SISTEMAS DE COMUNICACIÓN DIRECTA POR SATÉLITE DE PROGRAMAS VISUALES, SONOROS O DE TEXTO RECIBIDOS DE REDES DE CABLE O ESTACIONES DE TELEVISIÓN O CADENAS DE RADIO LOCALES. (LAS UNIDADES CLASIFICADAS EN ESA CLASE NO PRODUCEN POR LO GENERAL MATERIAL DE PROGRAMACIÓN)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61900101', 
                    'descripcion' => 'SUMINISTRO DE APLICACIONES ESPECIALIZADAS DE TELECOMUNICACIONES, COMO DETECCIÓN POR SATÉLITE, TELEMETRÍA DE COMUNICACIONES Y UTILIZACIÓN DE ESTACIONES DE RADAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61900201', 
                    'descripcion' => 'OPERACIÓN DE ESTACIONES TERMINALES DE COMUNICACIONES POR SATÉLITE E INSTALACIONES CONEXAS OPERACIONALMENTE CONECTADAS CON UNO O VARIOS SISTEMAS DE COMUNICACIONES TERRESTRES Y CAPACES DE TRANSMITIR O RECIBIR TELECOMUNICACIONES POR SATÉLITE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61900301', 
                    'descripcion' => 'SUMINISTRO DE ACCESO A INTERNET POR REDES QUE NO POSEE NI CONTROLA EL PROVEEDOR DE SERVICIOS DE INTERNET, COMO EL ACCESO TELEFÓNICO A INTERNET, ETC' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61900401', 
                    'descripcion' => 'ACTIVIDADES DE REVENTA DE SERVICIOS DE TELECOMUNICACIONES (SUMINISTRO DE SERVICIOS TELEFÓNICOS Y DE INTERNET EN INSTALACIONES ABIERTAS AL PÚBLICO: CABINAS TELEFÓNICAS Y CIBERCAFÉS.)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61900501', 
                    'descripcion' => 'SUMINISTRO DE SERVICIOS DE TELECOMUNICACIONES POR LAS CONEXIONES DE TELECOMUNICACIONES EXISTENTES: SUMINISTRO DE SERVICIOS DE TELEFONÍA POR INTERNET (VOIP: VOICE OVER INTERNET PROTOCOL)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61900601', 
                    'descripcion' => 'ACTIVIDADES DE GESTIÓN Y CONSULTORÍA PARA LA TRANSMISIÓN DE DATOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61900901', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE TELECOMUNICACIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J61900902', 
                    'descripcion' => 'MANTENIMIENTO Y REPARACIÓN DE LAS REDES DE TELECOMUNICACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J62010101', 
                    'descripcion' => 'ACTIVIDADES DE DISEÑO DE LA ESTRUCTURA Y EL CONTENIDO DE LOS ELEMENTOS SIGUIENTES (Y/O ESCRITURA DEL CÓDIGO INFORMÁTICO NECESARIO PARA SU CREACIÓN Y APLICACIÓN): PROGRAMAS DE SISTEMAS OPERATIVOS (INCLUIDAS ACTUALIZACIONES Y PARCHES DE CORRECCIÓN), APLICACIONES INFORMÁTICAS (INCLUIDAS ACTUALIZACIONES Y PARCHES DE CORRECCIÓN), BASES DE DATOS Y PÁGINAS WEB' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J62010201', 
                    'descripcion' => 'ADAPTACIÓN DE PROGRAMAS INFORMÁTICOS A LAS NECESIDADES DE LOS CLIENTES, ES DECIR, MODIFICACIÓN Y CONFIGURACIÓN DE UNA APLICACIÓN EXISTENTE PARA QUE PUEDA FUNCIONAR ADECUADAMENTE CON LOS SISTEMAS DE INFORMACIÓN DE QUE DISPONE EL CLIENTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J62021001', 
                    'descripcion' => 'ACTIVIDADES DE PLANIFICACIÓN Y DISEÑO DE SISTEMAS INFORMÁTICOS QUE INTEGRAN EQUIPO Y PROGRAMAS INFORMÁTICOS Y TECNOLOGÍA DE LAS COMUNICACIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J62022001', 
                    'descripcion' => 'SERVICIOS DE GESTIÓN Y MANEJO IN SITU DE SISTEMAS INFORMÁTICOS Y/O INSTALACIONES DE PROCESAMIENTO DE DATOS DE LOS CLIENTES, Y SERVICIOS DE APOYO CONEXOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J62030101', 
                    'descripcion' => 'ACTIVIDADES DE DISENO Y DESARROLLO DE SOLUCIONES BASADAS EN TECNOLOGIA BLOCKCHAIN CADENA DE BLOQUES DE UNO O VARIOS DE LOS ELEMENTOS SIGUIENTES IDENTIDAD DIGITAL Y CONTRATOS INTELIGENTES INTERMEDIARIOS EN MERCADOS DE ACTIVOS INTANGIBLES DIGITALES COMO EXCHANGES CASAS DE CAMBIO VIRTUALES WALLETS MONEDEROS DEFI FINANZAS DESCENTRALIZADAS MINERAS TOKENS NO FUNGIBLES NFT Y TOKENIZACION QUE SE ENCUENTRE EN FUNCION DE ASOCIADO YO RELACIONADO CON ACTIVOS VIRTUALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J62090101', 
                    'descripcion' => 'ACTIVIDADES RELACIONADAS A LA INFORMÁTICA COMO: RECUPERACIÓN EN CASOS DE DESASTRE INFORMÁTICO, INSTALACIÓN DE PROGRAMAS INFORMÁTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J62090102', 
                    'descripcion' => 'ACTIVIDADES DE INFORMÁTICA NO CLASIFICADAS EN OTRA PARTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J62090201', 
                    'descripcion' => 'ACTIVIDADES DE INSTALACIÓN (MONTAJE) DE COMPUTADORAS PERSONALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J63110101', 
                    'descripcion' => 'SUMINISTRO DE INFRAESTRUCTURA PARA SERVICIOS DE HOSPEDAJE, SERVICIOS DE PROCESAMIENTO DE DATOS Y ACTIVIDADES CONEXAS. INCLUYE ACTIVIDADES ESPECIALIZADAS DE HOSPEDAJE, COMO: HOSPEDAJE DE SITIOS WEB, APLICACIONES, SERVICIOS DE TRANSMISIÓN DE SECUENCIAS DE VÍDEO POR INTERNET' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J63110102', 
                    'descripcion' => 'PREPARACIÓN DE REGISTROS COMPUTARIZADOS QUE CONTENGAN DATOS DE UNA MANERA PREESTABLECIDA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J63110201', 
                    'descripcion' => 'ACTIVIDADES DE PROCESAMIENTO Y SUMINISTRO DE SERVICIO DE REGISTRO DE DATOS: ELABORACIÓN COMPLETA DE DATOS FACILITADOS POR LOS CLIENTES, GENERACIÓN DE INFORMES ESPECIALIZADOS A PARTIR DE DATOS FACILITADOS POR LOS CLIENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J63110202', 
                    'descripcion' => 'ACTIVIDADES DE SUMINISTRO DE DATOS CON ARREGLO A UN CIERTO ORDEN O A UNA DETERMINADA SECUENCIA, MEDIANTE SU RECUPERACIÓN EN LÍNEA O EL ACCESO A ELLOS EN  LÍNEA (GESTIÓN COMPUTARIZADA), LOS DATOS PUEDEN SER: FINANCIEROS, ECONÓMICOS, ESTADÍSTICOS O TÉCNICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J63110301', 
                    'descripcion' => 'SERVICIOS DE APLICACIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J63110302', 
                    'descripcion' => 'PROCESAMIENTO O TABULACIÓN DE DATOS POR HORA O BAJO UN RÉGIMEN DE TIEMPO COMPARTIDO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J63110401', 
                    'descripcion' => 'SUMINISTRO A LOS CLIENTES DE ACCESO EN TIEMPO COMPARTIDO A SERVICIOS CENTRALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J63110402', 
                    'descripcion' => 'ACTIVIDADES DE PROCESAMIENTO Y SUMINISTRO DE SERVICIO DE REGISTRO DE DATOS: TECLEADO U OTRO TIPO DE ENTRADA DE DATOS, CONVERSIÓN (TARJETAS O CINTAS), RECONOCIMIENTO ÓPTICO DE CARACTERES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J63120001', 
                    'descripcion' => 'OPERACIÓN DE SITIOS WEB QUE FUNCIONAN COMO PORTALES DE INTERNET, COMO LOS SITIOS DE MEDIOS DE DIFUSIÓN QUE PROPORCIONAN CONTENIDOS QUE SE ACTUALIZAN PERIÓDICAMENTE Y LOS QUE UTILIZAN UN MOTOR DE BÚSQUEDA PARA GENERAR Y MANTENER AMPLIAS BASES DE DATOS DE DIRECCIONES DE INTERNET Y DE CONTENIDOS EN UN FORMATO QUE FACILITE LA BÚSQUEDA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J63120002', 
                    'descripcion' => 'ACTIVIDADES DE PREPARACIÓN DE BASE DE DATOS: REUNIÓN DE DATOS PROCEDENTES DE UNA O MÁS FUENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J63910001', 
                    'descripcion' => 'ACTIVIDADES DE CONSORCIOS Y AGENCIAS DE NOTICIAS QUE SUMINISTRAN NOTICIAS, FOTOGRAFÍAS Y ARTÍCULOS PERIODÍSTICOS A LOS MEDIOS DE DIFUSIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J63910002', 
                    'descripcion' => 'ENTREGA DE MATERIAL NOTICIERO, FOTOGRÁFICO Y PERIODÍSTICO  A LOS MEDIOS DE DIFUSIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J63990001', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE SERVICIOS DE INFORMACIÓN N.C.P.: SERVICIOS DE INFORMACIÓN TELEFÓNICA, BÚSQUEDA DE INFORMACIÓN A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO, SELECCIÓN DE NOTICIAS, DE RECORTES DE PRENSA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J63990002', 
                    'descripcion' => 'PRESTACIÓN DE SERVICIOS DE NOTICIAS A ESTACIONES DE RADIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'J63990003', 
                    'descripcion' => 'PRESTACIÓN DE SERVICIOS DE NOTICIAS A ESTACIONES DE TELEVISIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K64110001', 
                    'descripcion' => 'ACTIVIDADES DE EMISIÓN Y ADMINISTRACIÓN DE LA MONEDA NACIONAL; SUPERVISIÓN Y CONTROL DE LA MASA MONETARIA; RECEPCIÓN DE DEPÓSITOS PARA OPERACIONES DE COMPENSACIÓN ENTRE INSTITUCIONES FINANCIERAS; SUPERVISIÓN DE LAS OPERACIONES BANCARIAS; MANTENIMIENTO DE LAS RESERVAS NACIONALES DE DIVISAS; FUNCIÓN DE BANCO DEL GOBIERNO. LAS ACTIVIDADES DE LOS BANCOS CENTRALES PUEDEN VARIAR POR RAZONES INSTITUCIONALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K64110002', 
                    'descripcion' => 'ACTIVIDADES RELACIONADAS CON LA BANCA CENTRAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K64190101', 
                    'descripcion' => 'ACTIVIDADES DE RECEPCIÓN DE DEPÓSITOS Y/O SIMILARES CERCANOS DE DEPÓSITOS Y LA CONCESIÓN DE CRÉDITOS O PRÉSTAMOS DE FONDOS. LA CONCESIÓN DE CRÉDITO PUEDE ADOPTAR DIVERSAS FORMAS, COMO PRÉSTAMOS, HIPOTECAS, TRANSACCIONES CON TARJETAS DE CRÉDITO, ETC. ESAS ACTIVIDADES SON REALIZADAS POR BANCOS DIFERENTES DEL BANCO CENTRAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K64190102', 
                    'descripcion' => 'ACTIVIDADES DE INTERMEDIACIÓN MONETARIA REALIZADA POR LA BANCA COMERCIAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K64190201', 
                    'descripcion' => 'ACTIVIDADES DE RECEPCIÓN DE DEPÓSITOS Y/O SIMILARES CERCANOS DE DEPÓSITOS Y LA CONCESIÓN DE CRÉDITOS O PRÉSTAMOS DE FONDOS. LA CONCESIÓN DE CRÉDITO PUEDE ADOPTAR DIVERSAS FORMAS, COMO PRÉSTAMOS, HIPOTECAS, TRANSACCIONES CON TARJETAS DE CRÉDITO, ETC. ESAS ACTIVIDADES SON REALIZADAS EN GENERAL POR INSTITUCIONES MONETARIAS DIFERENTES DE LOS BANCOS CENTRALES, COMO: CAJAS DE AHORROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K64190202', 
                    'descripcion' => 'ACTIVIDADES DE RECEPCIÓN DE DEPÓSITOS Y/O SIMILARES CERCANOS DE DEPÓSITOS Y LA CONCESIÓN DE CRÉDITOS O PRÉSTAMOS DE FONDOS. LA CONCESIÓN DE CRÉDITO PUEDE ADOPTAR DIVERSAS FORMAS, COMO PRÉSTAMOS, HIPOTECAS, TRANSACCIONES CON TARJETAS DE CRÉDITO, ETC. ESAS ACTIVIDADES SON REALIZADAS EN GENERAL POR INSTITUCIONES MONETARIAS DIFERENTES DE LOS BANCOS CENTRALES, COMO: COOPERATIVAS DE CRÉDITO Y ACTIVIDADES DE GIRO POSTAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K64190301', 
                    'descripcion' => 'ACTIVIDADES DE RECEPCIÓN DE DEPÓSITOS Y/O SIMILARES CERCANOS DE DEPÓSITOS Y LA CONCESIÓN DE CRÉDITOS O PRÉSTAMOS DE FONDOS. LA CONCESIÓN DE CRÉDITO PUEDE ADOPTAR DIVERSAS FORMAS, COMO PRÉSTAMOS, HIPOTECAS, TRANSACCIONES CON TARJETAS DE CRÉDITO, ETC. ESAS ACTIVIDADES SON REALIZADAS EN GENERAL POR INSTITUCIONES MONETARIAS DIFERENTES DE LOS BANCOS CENTRALES, COMO; ACTIVIDADES DE CONCESIÓN DE CRÉDITO PARA COMPRA DE VIVIENDA DE INSTITUCIONES ESPECIALIZADAS QUE RECIBEN DEPÓSITOS (MUTUALISTAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K64200001', 
                    'descripcion' => 'ACTIVIDADES DE SOCIEDADES DE CARTERA, ES DECIR, UNIDADES TENEDORAS DE ACTIVOS DE UN GRUPO DE EMPRESAS FILIALES (CON PARTICIPACIÓN DE CONTROL EN SU CAPITAL SOCIAL) Y CUYA ACTIVIDAD PRINCIPAL CONSISTE EN LA PROPIEDAD DEL GRUPO. LAS SOCIEDADES DE CARTERA CLASIFICADAS EN ESTA CLASE NO SUMINISTRAN NINGÚN OTRO SERVICIO A LAS EMPRESAS PARTICIPADAS, ES DECIR, NO ADMINISTRAN NI GESTIONAN OTRAS UNIDADES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K64200002', 
                    'descripcion' => 'ACTIVIDADES DE INVERSIONES EN BIENES INMUEBLES EFECTUADOS POR CUENTA DE OTROS INTERMEDIARIOS FINANCIEROS (SOCIEDADES DE INVERSIÓN INMOBILIARIA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K64300001', 
                    'descripcion' => 'ACTIVIDADES DE ENTIDADES JURÍDICAS ORGANIZADAS PARA LA MANCOMUNIÓN DE VALORES U OTROS ACTIVOS FINANCIEROS, SIN GESTIÓN, EN NOMBRE DE ACCIONISTAS O BENEFICIARIOS. LAS CARTERAS SE ADAPTAN A ESPECIFICACIONES CONCRETAS PARA LOGRAR DETERMINADAS CARACTERÍSTICAS; POR EJEMPLO, DE DIVERSIFICACIÓN, RIESGO, RENDIMIENTO Y VARIABILIDAD DE PRECIO. ESAS ENTIDADES OBTIENEN INTERESES, DIVIDENDOS Y OTRAS RENTAS DE LA PROPIEDAD, PERO TIENEN POCOS EMPLEADOS Y NO OBTIENEN INGRESOS POR CONCEPTO DE VENTA DE SERVICIOS. SE INCLUYEN LAS SIGUIENTES ACTIVIDADES: FONDOS DE INVERSIÓN DE PARTICIPACIÓN ABIERTA; FONDOS DE INVERSIÓN CERRADOS; FIDEICOMISOS, LEGADOS O CUENTAS DE AGENCIA, ADMINISTRADOS EN NOMBRE DE LOS BENEFICIARIOS EN VIRTUD DE UN CONTRATO DE FIDUCIA, UN TESTAMENTO O UN CONTRATO DE REPRESENTACIÓN; SOCIEDADES DE INVERSIÓN MOBILIARIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K64300002', 
                    'descripcion' => 'ACTIVIDADES DE INVERSIONES EN VALORES MOBILIARIOS (ACCIONES OBLIGACIONES, EFECTOS, LOTES DE VALORES MOBILIARIOS DE LAS SOCIEDADES DE INVERSIÓN, ETC.)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K64300003', 
                    'descripcion' => 'ACTIVIDADES DE TRANSACCIONES POR CUENTA PROPIA DE CORREDORES DE BOLSA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K64910001', 
                    'descripcion' => 'ACTIVIDADES DE ARRENDAMIENTO QUE CUBRE APROXIMADAMENTE TODA LA VIDA ÚTIL PREVISTA DE UN ACTIVO Y EN EL QUE EL ARRENDATARIO ADQUIERE PRÁCTICAMENTE TODOS LOS DERECHOS DE USUFRUCTO Y ASUME TODOS LOS RIESGOS RELACIONADOS CON LA PROPIEDAD DEL ACTIVO, QUE PUEDE O NO SER OBJETO DE TRASPASO. ESA MODALIDAD DE ARRENDAMIENTO CUBRE LA TOTALIDAD O LA PRÁCTICA TOTALIDAD DE LOS COSTOS, INCLUIDOS INTERESES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K64920101', 
                    'descripcion' => 'ACTIVIDADES DE OTORGAMIENTO DE CRÉDITO DE INSTITUCIONES DEDICADAS A LA INTERMEDIACIÓN MONETARIA EN LAS QUE EL CRÉDITO PUEDE ADOPTAR DIFERENTES FORMAS COMO: PRÉSTAMOS, HIPOTECAS, TARJETAS DE CRÉDITO, ETCÉTERA. PROPORCIONANDO LOS SERVICIOS DE: FINANCIAMIENTO PARA COMERCIO INTERNACIONAL, PROVISIÓN DE FINANCIAMIENTO A LARGO PLAZO PARA LA INDUSTRIA A TRAVÉS DE BANCOS INDUSTRIALES, CONCESIÓN DE CRÉDITO A LOS CONSUMIDORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K64920201', 
                    'descripcion' => 'ACTIVIDADES DE PRÉSTAMOS FUERA DEL SISTEMA BANCARIO, OTORGAMIENTO DE CRÉDITOS PARA VIVIENDA POR INSTITUCIONES ESPECIALIZADAS QUE NO RECIBEN DEPÓSITOS, SE INCLUYEN ACTIVIDADES REALIZADAS POR LAS CASAS DE EMPEÑO Y MONTES DE PIEDAD' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K64990101', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE SERVICIOS FINANCIEROS CONSISTENTES PRINCIPALMENTE EN MODALIDADES DE DISTRIBUCIÓN DE FONDOS DISTINTAS DE LA CONCESIÓN DE PRÉSTAMOS: ACTIVIDADES DE FACTORIZACIÓN, SUSCRIPCIÓN DE PERMUTAS FINANCIERAS, OPCIONES Y OTROS INSTRUMENTOS DE COBERTURA Y ACTIVIDADES DE COMPAÑÍAS DE LIQUIDACIÓN POR ADELANTADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K64990102', 
                    'descripcion' => 'ACTIVIDADES DE SUSCRIPCIÓN DE CRÉDITOS RECÍPROCOS Y OTRAS OPERACIONES FINANCIERAS DE COBERTURA. ADEMÁS LAS ACTIVIDADES DE LAS SOCIEDADES DE CARTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K64990201', 
                    'descripcion' => 'ACTIVIDADES DE INVERSIÓN POR CUENTA PROPIA, COMO LAS DE COMPAÑÍAS DE CAPITAL RIESGO, CLUBES DE INVERSIÓN, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K64990202', 
                    'descripcion' => 'ACTIVIDADES DE INTERMEDIACIÓN FINANCIERA REALIZADA POR INSTITUCIONES QUE NO PRACTICAN LA INTERMEDIACIÓN MONETARIA Y CUYA FUNCIÓN PRINCIPAL CONSTITUYE LA CONCESIÓN DE PRÉSTAMOS FUERA DEL SISTEMA BANCARIO, FINANCIACIÓN A LARGO PLAZO PARA EL SECTOR INDUSTRIAL, CRÉDITO A LOS CONSUMIDORES (TARJETAS DE CRÉDITO). TAMBIÉN SE INCLUYEN EL CRÉDITO PARA LA ADQUISICIÓN DE VIVIENDA POR  PARTE DE INSTITUCIONES ESPECIALIZADAS QUE TAMBIÉN RECIBEN DEPÓSITOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K65110001', 
                    'descripcion' => 'CONCERTACIÓN DE CONTRATOS DE ANUALIDADES Y PÓLIZAS DE SEGUROS DE VIDA, SEGUROS DE INVALIDEZ Y SEGUROS DE DOBLE INDEMNIZACIÓN (TENGAN O NO UN COMPONENTE IMPORTANTE DE AHORRO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K65120101', 
                    'descripcion' => 'SUMINISTROS DE SERVICIOS DE SEGUROS DISTINTOS DE LOS SEGUROS DE VIDA: SEGUROS DE ACCIDENTES Y CONTRA INCENDIOS, SEGUROS MÉDICOS, SEGUROS DE VIAJES, SEGUROS DE COSAS, SEGUROS DE TRANSPORTE POR CARRETERA, MARÍTIMO Y AÉREO, SEGUROS CONTRA PÉRDIDAS PECUNIARIAS Y DE RESPONSABILIDAD CIVIL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K65120201', 
                    'descripcion' => 'SERVICIOS DE SEGURO DE MEDICINA PRE PAGADA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K65200001', 
                    'descripcion' => 'ACTIVIDADES DE ASUNCIÓN DE LA TOTALIDAD O UNA PARTE DE LOS RIESGOS DE PÓLIZAS DE SEGUROS EXISTENTES EMITIDAS ORIGINARIAMENTE POR OTRAS COMPAÑÍAS DE SEGUROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K65300001', 
                    'descripcion' => 'ACTIVIDADES DE ENTIDADES JURÍDICAS (ES DECIR, DE FONDOS, PLANES Y/O PROGRAMAS) ORGANIZADAS PARA PROPORCIONAR PRESTACIONES DE JUBILACIÓN EXCLUSIVAMENTE PARA LOS EMPLEADOS O MIEMBROS DE LA ENTIDAD PATROCINADORA. ABARCA PLANES DE PENSIONES CON PRESTACIONES DEFINIDAS Y PLANES INDIVIDUALES EN LOS QUE LAS PRESTACIONES DEPENDEN DE LAS CONTRIBUCIONES DEL AFILIADO. SE INCLUYEN LAS SIGUIENTES ACTIVIDADES: PLANES DE PRESTACIONES SOCIALES PARA LOS EMPLEADOS, FONDOS Y PLANES DE PENSIONES, PLANES DE JUBILACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K66110001', 
                    'descripcion' => 'GESTIÓN Y SUPERVISIÓN DE LOS MERCADOS FINANCIEROS POR ENTIDADES DISTINTAS DE LAS AUTORIDADES PÚBLICAS, COMO: MERCADO (BOLSAS) DE CONTRATOS DE PRODUCTOS BÁSICOS, MERCADO (BOLSAS) DE FUTUROS, MERCADO (BOLSAS) DE VALORES, MERCADOS BURSÁTILES, MERCADO (BOLSAS) DE OPCIONES SOBRE ACCIONES O SOBRE PRODUCTOS BÁSICOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K66110002', 
                    'descripcion' => 'GESTIÓN Y SUPERVISIÓN DE LOS MERCADOS FINANCIEROS POR ENTIDADES DISTINTAS DE LAS AUTORIDADES PÚBLICAS, COMO: MERCADO (BOLSAS) DE VALORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K66110003', 
                    'descripcion' => 'ACTIVIDADES DE ADMINISTRACIÓN DE MERCADOS FINANCIEROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K66120101', 
                    'descripcion' => 'ACTIVIDADES DE OFICINAS DE CAMBIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K66120201', 
                    'descripcion' => 'OPERACIONES EN LOS MERCADOS FINANCIEROS POR CUENTA AJENA (POR EJEMPLO, CORREDURÍA DE BOLSA) Y ACTIVIDADES CONEXAS. INCLUYE CORRETAJE DE CONTRATOS DE PRODUCTOS BÁSICOS Y CORRETAJE DE VALORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K66130101', 
                    'descripcion' => 'ACTIVIDADES DE PERSONAS EMPRESAS Y OTRAS ENTIDADES QUE SE RELACIONAN CON LA EMISION COMPRA VENTA TRANSFERENCIA CUSTODIA Y ALMACENAMIENTO DE ACTIVOS VIRTUALES COMO EL INTERCAMBIO ENTRE ACTIVOS VIRTUALES ACTIVOS VIRTUALES Y MONEDAS FIAT DE CURSO LEGAL O EL INTERCAMBIO ENTRE MAS FORMAS DE ACTIVOS VIRTUALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K66140101', 
                    'descripcion' => 'ACTIVIDADES DE SERVICIOS DE ASESORAMIENTO GESTION Y OPERACION DE MERCADOS VIRTUALES O ACTIVOS INTANGIBLES DIGITALES ASI  COMO FONDOS DE INVERSION DISTINTO A LOS MERCADOS FINANCIEROS EN EL QUE SE ASOCIE YO RELACIONE CON ACTIVOS VIRTUALES A CAMBIO DE UNA RETRIBUCION O COMISION ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K66190101', 
                    'descripcion' => 'ACTIVIDADES AUXILIARES DE LAS ACTIVIDADES DE SERVICIOS FINANCIEROS N.C.P., COMO: ACTIVIDADES DE TRAMITACIÓN Y LIQUIDACIÓN DE TRANSACCIONES FINANCIERAS, INCLUIDAS LAS TRANSACCIONES CON TARJETAS DE CRÉDITO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K66190102', 
                    'descripcion' => 'ACTIVIDADES DE ASESORES FINANCIEROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K66190201', 
                    'descripcion' => 'ACTIVIDADES DE SERVICIOS DE ASESORAMIENTO EN INVERSIONES Y CORREDORES HIPOTECARIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K66190301', 
                    'descripcion' => 'SERVICIOS DE ADMINISTRACIÓN FIDUCIARIA Y DE CUSTODIA A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K66210001', 
                    'descripcion' => 'ACTIVIDADES DE PRESTACIÓN DE SERVICIOS ADMINISTRATIVOS RELACIONADOS CON LOS SEGUROS, COMO LA TASACIÓN Y LIQUIDACIÓN DE RECLAMACIONES. SE INCLUYEN LAS SIGUIENTES ACTIVIDADES: EVALUACIÓN DE LAS RECLAMACIONES, TASACIÓN DE SOLICITUDES DE INDEMNIZACIÓN, EVALUACIÓN DEL RIESGO, EVALUACIÓN DE RIESGOS Y DAÑOS, TASACIÓN DE AVERÍAS Y PÉRDIDAS. INCLUYE LA LIQUIDACIÓN DE SOLICITUDES DE INDEMNIZACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K66220001', 
                    'descripcion' => 'ACTIVIDADES DE AGENTES Y CORREDORES DE SEGUROS (INTERMEDIARIOS DE SEGUROS) QUE VENDEN, NEGOCIAN U OFERTAN CONTRATOS DE ANUALIDADES Y PÓLIZAS DE SEGUROS Y REASEGUROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K66290001', 
                    'descripcion' => 'ACTIVIDADES ESTRECHAMENTE RELACIONADAS CON SEGUROS Y FONDOS DE PENSIONES (EXCEPTO EL AJUSTE DE RECLAMACIONES Y LAS ACTIVIDADES DE AGENTES DE SEGUROS) ADMINISTRACIÓN DE SALVAMENTOS, SERVICIOS ACTUARIALES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K66300001', 
                    'descripcion' => 'ACTIVIDADES DE PERSONAS, EMPRESAS Y OTRAS ENTIDADES QUE GESTIONAN CARTERAS Y FONDOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO. SE INCLUYEN LAS SIGUIENTES ACTIVIDADES: GESTIÓN DE FONDOS DE PENSIONES, GESTIÓN DE FONDOS MUTUOS DE INVERSIÓN Y GESTIÓN DE OTROS FONDOS DE INVERSIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'K66300002', 
                    'descripcion' => 'SERVICIOS DE EMISIÓN DE REGISTRO DE VALORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'L68100101', 
                    'descripcion' => 'COMPRA - VENTA, ALQUILER Y EXPLOTACIÓN DE BIENES INMUEBLES PROPIOS O ARRENDADOS, COMO: EDIFICIOS DE APARTAMENTOS Y VIVIENDAS; EDIFICIOS NO RESIDENCIALES, INCLUSO SALAS DE EXPOSICIONES; INSTALACIONES PARA ALMACENAJE, CENTROS COMERCIALES Y TERRENOS; INCLUYE EL ALQUILER DE CASAS Y APARTAMENTOS AMUEBLADOS O SIN AMUEBLAR POR PERÍODOS LARGOS, EN GENERAL POR MESES O POR AÑOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'L68100201', 
                    'descripcion' => 'EXPLOTACIÓN DE CAMPAMENTOS RESIDENCIALES PARA CASAS MÓVILES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'L68100301', 
                    'descripcion' => 'PROMOCIÓN DE PROYECTOS DE CONSTRUCCIÓN (PROMOCIÓN INMOBILIARIA) PARA SU POSTERIOR EXPLOTACIÓN, ES DECIR, PARA ALQUILAR ESPACIO EN ESOS EDIFICIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'L68100401', 
                    'descripcion' => 'LOTIZACIÓN Y PARCELACIÓN DE PROPIEDADES INMOBILIARIAS EN LOTES, SIN MEJORA DE LOS TERRENOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'L68100402', 
                    'descripcion' => 'ACTIVIDADES DE ACONDICIONAMIENTO, URBANIZACIÓN (POR CUENTA DE TERCEROS), FRACCIONAMIENTO DE TERRENOS EN SOLARES Y VENTA DE TERRENOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'L68100403', 
                    'descripcion' => 'EXPLOTACIÓN DE APARTAMENTOS CON SERVICIO DE HOTEL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'L68100404', 
                    'descripcion' => 'VENTA DE LOTES DE CEMENTERIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'L68200101', 
                    'descripcion' => 'ACTIVIDADES DE AGENTES Y CORREDORES INMOBILIARIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'L68200201', 
                    'descripcion' => 'INTERMEDIACIÓN EN LA COMPRA, VENTA Y ALQUILER DE BIENES INMUEBLES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'L68200202', 
                    'descripcion' => 'ACTIVIDADES DE ALQUILER DE BIENES INMUEBLES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO (LOCALES COMERCIALES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'L68200203', 
                    'descripcion' => 'ACTIVIDADES DE ALQUILER DE BIENES INMUEBLES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO (VIVIENDA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'L68200301', 
                    'descripcion' => 'ADMINISTRACIÓN DE BIENES INMUEBLES A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'L68200302', 
                    'descripcion' => 'ADMINISTRACIÓN DE EDIFICIOS DE LA ADMINISTRACIÓN PÚBLICA PROPIOS O ARRENDADOS Y ADMINISTRACIÓN DE SERVICIOS DE OFICINAS  CENTRALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'L68200401', 
                    'descripcion' => 'SERVICIOS DE TASACIÓN INMOBILIARIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'L68200501', 
                    'descripcion' => 'ACTIVIDADES DE AGENTES INMOBILIARIOS NEUTRALES QUE GARANTIZAN EL CUMPLIMIENTO DE TODAS LAS CONDICIONES DE UNA TRANSACCIÓN INMOBILIARIA (PLICAS INMOBILIARIAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M69100101', 
                    'descripcion' => 'ACTIVIDADES DE REPRESENTACIÓN JURÍDICA DE LOS INTERESES DE UNA PARTE CONTRA OTRA, SEA O NO ANTE TRIBUNALES U OTROS ÓRGANOS JUDICIALES, REALIZADAS POR ABOGADOS O BAJO LA SUPERVISIÓN DE ABOGADOS: ASESORAMIENTO Y REPRESENTACIÓN EN PROCEDIMIENTOS CIVILES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M69100102', 
                    'descripcion' => 'ACTIVIDADES DE REPRESENTACIÓN JURÍDICA DE LOS INTERESES DE UNA PARTE CONTRA OTRA, SEA O NO ANTE TRIBUNALES U OTROS ÓRGANOS JUDICIALES, REALIZADAS POR ABOGADOS O BAJO LA SUPERVISIÓN DE ABOGADOS: ASESORAMIENTO Y REPRESENTACIÓN EN PROCEDIMIENTOS PENALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M69100103', 
                    'descripcion' => 'ACTIVIDADES DE REPRESENTACIÓN JURÍDICA DE LOS INTERESES DE UNA PARTE CONTRA OTRA, SEA O NO ANTE TRIBUNALES U OTROS ÓRGANOS JUDICIALES, REALIZADAS POR ABOGADOS O BAJO LA SUPERVISIÓN DE ABOGADOS: ASESORAMIENTO Y REPRESENTACIÓN EN PROCEDIMIENTOS EN RELACIÓN CON CONFLICTOS LABORALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M69100104', 
                    'descripcion' => 'PREPARACION DE DOCUMENTOS JURIDICOS DISTINTOS DE LOS RELACIONADOS CON PLEITOS (ESCRITURAS DE CONSTITUCION, CONTRATOS PARA LA FORMACION DE SOCIEDADES, PATENTES, DERECHOS DE AUTOR, TESTAMENTOS, ETC.)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M69100201', 
                    'descripcion' => 'ACTIVIDADES DE NOTARIOS PÚBLICOS, PRESTACIÓN DE ASESORAMIENTO EN GENERAL, PREPARACIÓN DE DOCUMENTOS JURÍDICOS: ESCRITURAS DE CONSTITUCIÓN, CONTRATOS DE SOCIEDAD Y DOCUMENTOS SIMILARES PARA LA FORMACIÓN DE SOCIEDADES, PATENTES Y DERECHOS DE AUTOR, ESCRITURAS, TESTAMENTOS, FIDEICOMISOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M69100301', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE EJECUTORES JUDICIALES, ALGUACILES, ÁRBITROS, EXAMINADORES Y MEDIADORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M69100901', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE ASESORAMIENTO Y REPRESENTACIÓN EN PROCEDIMIENTOS JURÍDICOS (DERECHO CONSTITUCIONAL, ADMINISTRATIVO, MILITAR, ETCÉTERA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M69200101', 
                    'descripcion' => 'ACTIVIDADES DE REGISTRO DE LAS TRANSACCIONES COMERCIALES DE EMPRESAS Y OTRAS ENTIDADES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M69200201', 
                    'descripcion' => 'ACTIVIDADES DE PREPARACIÓN O AUDITORIA DE LAS CUENTAS FINANCIERAS Y EXAMEN Y CERTIFICACIÓN DE CUENTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M69200301', 
                    'descripcion' => 'ACTIVIDADES DE PREPARACIÓN DE LAS DECLARACIONES TRIBUTARIAS DE LAS PERSONAS Y EMPRESAS; ASESORAMIENTO Y DE REPRESENTACIÓN DE CLIENTES ANTE LAS AUTORIDADES TRIBUTARIAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M69200401', 
                    'descripcion' => 'REGISTRO CONTABLE DE TRANSACCIONES COMERCIALES PARA EMPRESAS U OTRAS ENTIDADES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M69200901', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE CONTABILIDAD, TENEDURÍA DE LIBROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M69200902', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE AUDITORIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M69200903', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE CONSULTORÍA FISCAL (PROCESAMIENTO DE NÓMINA, ETCÉTERA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M70100001', 
                    'descripcion' => 'SUPERVISIÓN Y GESTIÓN DE OTRAS UNIDADES DE LA MISMA COMPAÑÍA O EMPRESA, ASUMIENDO LA PLANIFICACIÓN ESTRATÉGICA, ORGANIZATIVA Y LA FUNCIÓN DE TOMA DE DECISIONES DE LA COMPAÑÍA O EMPRESA; EJERCIENDO EL CONTROL OPERATIVO Y LA GESTIÓN DE LAS OPERACIONES CORRIENTES DE LAS OTRAS UNIDADES: OFICINAS PRINCIPALES, OFICINAS ADMINISTRATIVAS CENTRALIZADAS, SEDES, OFICINAS DE DISTRITO, REGIONALES Y OFICINAS SUBSIDIARIAS DE GESTIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M70200101', 
                    'descripcion' => 'SERVICIOS DE ASESORAMIENTO, ORIENTACIÓN Y ASISTENCIA OPERATIVA A LAS EMPRESAS Y A LA ADMINISTRACIÓN PÚBLICA EN MATERIA DE: RELACIONES PÚBLICAS Y COMUNICACIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M70200201', 
                    'descripcion' => 'SERVICIOS DE ASESORAMIENTO, ORIENTACIÓN Y ASISTENCIA OPERATIVA A LAS EMPRESAS Y A LA ADMINISTRACIÓN PÚBLICA EN MATERIA DE: ACTIVIDADES DE CABILDEO (GRUPOS DE PRESIÓN (LOBBIES))' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M70200301', 
                    'descripcion' => 'SERVICIOS DE  ASESORAMIENTO, ORIENTACIÓN Y ASISTENCIA OPERATIVA A LAS EMPRESAS Y A LA ADMINISTRACIÓN PÚBLICA EN MATERIA DE: DISEÑO DE MÉTODOS O PROCEDIMIENTOS CONTABLES, PROGRAMAS DE CONTABILIDAD DE COSTOS Y PROCEDIMIENTOS DE CONTROL PRESUPUESTARIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M70200401', 
                    'descripcion' => 'PRESTACIÓN DE ASESORAMIENTO Y AYUDA A LAS EMPRESAS Y LAS ADMINISTRACIONES PÚBLICAS EN MATERIA DE PLANIFICACIÓN, ORGANIZACIÓN, EFICIENCIA Y CONTROL, INFORMACIÓN ADMINISTRATIVA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71101101', 
                    'descripcion' => 'ACTIVIDADES DE ASESORAMIENTO TÉCNICO DE ARQUITECTURA EN DISEÑO DE EDIFICIOS Y DIBUJO DE PLANOS DE CONSTRUCCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71101201', 
                    'descripcion' => 'ACTIVIDADES DE ASESORAMIENTO TÉCNICO DE ARQUITECTURA EN PLANIFICACIÓN URBANA Y ARQUITECTURA PAISAJISTA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71102101', 
                    'descripcion' => 'ACTIVIDADES DE DISEÑO DE INGENIERÍA (ES DECIR, APLICACIÓN DE LAS LEYES FÍSICAS Y DE LOS PRINCIPIOS DE INGENIERÍA AL DISEÑO DE MÁQUINAS, MATERIALES, INSTRUMENTOS, ESTRUCTURAS, PROCESOS Y SISTEMAS) Y ASESORÍA DE INGENIERÍA PARA MAQUINARÍA, PROCESOS Y PLANTAS INDUSTRIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71102201', 
                    'descripcion' => 'ACTIVIDADES DE DISEÑO DE INGENIERÍA Y CONSULTORÍA DE INGENIERÍA PARA PROYECTOS DE INGENIERÍA CIVIL, HIDRÁULICA Y DE TRÁFICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71102301', 
                    'descripcion' => 'ACTIVIDADES DE DISEÑO DE INGENIERÍA Y CONSULTORÍA DE INGENIERÍA PARA PROYECTOS DE ORDENACIÓN HÍDRICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71102401', 
                    'descripcion' => 'ELABORACIÓN Y REALIZACIÓN DE PROYECTOS DE INGENIERÍA DE MINAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71102402', 
                    'descripcion' => 'ELABORACIÓN Y REALIZACIÓN DE PROYECTOS DE INGENIERÍA QUÍMICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71102403', 
                    'descripcion' => 'ELABORACIÓN Y REALIZACIÓN DE PROYECTOS DE INGENIERÍA INDUSTRIAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71102404', 
                    'descripcion' => 'ELABORACIÓN Y REALIZACIÓN DE PROYECTOS DE INGENIERÍA MECÁNICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71102405', 
                    'descripcion' => 'ELABORACIÓN Y REALIZACIÓN DE PROYECTOS DE INGENIERÍA ELÉCTRICA Y ELECTRÓNICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71102406', 
                    'descripcion' => 'ELABORACIÓN Y REALIZACIÓN DE PROYECTOS DE INGENIERÍA DE SISTEMAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71102501', 
                    'descripcion' => 'ACTIVIDADES DE DISEÑO DE INGENIERÍA Y CONSULTORÍA DE INGENIERÍA PARA GESTIÓN DE PROYECTOS RELACIONADOS CON LA CONSTRUCCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71102601', 
                    'descripcion' => 'ELABORACIÓN DE PROYECTOS DE INGENIERÍA ESPECIALIZADA EN SISTEMAS DE ACONDICIONADO DE AIRE, REFRIGERACIÓN, SANEAMIENTO, CONTROL DE LA CONTAMINACIÓN, ACONDICIONAMIENTO ACÚSTICO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71102701', 
                    'descripcion' => 'ACTIVIDADES DE DIRECCION DE OBRAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71102901', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE DISEÑO Y ASESORÍA DE INGENIERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71103101', 
                    'descripcion' => 'ACTIVIDADES DE TOPOGRAFÍA (AGRIMENSURA, MEDICIÓN DE TIERRAS Y LÍMITES), ACTIVIDADES DE ESTUDIOS HIDROLÓGICOS Y ACTIVIDADES DE ESTUDIOS DE SUBSUELO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71103201', 
                    'descripcion' => 'ACTIVIDADES CARTOGRÁFICAS Y DE INFORMACIÓN ESPACIAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71103301', 
                    'descripcion' => 'ACTIVIDADES DE ESTUDIOS GEOFÍSICOS, GEOLÓGICOS Y SISMOGRÁFICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71103401', 
                    'descripcion' => 'ACTIVIDADES GEOLÓGICAS Y DE PROSPECCIÓN: MEDICIÓN Y OBSERVACIÓN DE SUPERFICIE PARA DETERMINAR LA ESTRUCTURA DEL SUBSUELO, LA UBICACIÓN DE YACIMIENTOS DE PETROLEO, GAS NATURAL, MINERALES Y DEPOSITOS DE AGUAS, SUBTERRANEOS; ESTUDIOS AEROGEOFÍSICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71109001', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE ARQUITECTURA E INGENIERÍA Y ACTIVIDADES CONEXAS DE CONSULTORÍA TÉCNICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71201101', 
                    'descripcion' => 'REALIZACIÓN DE ENSAYOS FÍSICOS, QUÍMICOS Y OTROS ENSAYOS ANALÍTICOS DE TODO TIPO DE MATERIALES Y PRODUCTOS: ENSAYOS ACÚSTICOS Y DE VIBRACIONES, ENSAYOS DE CALIFICACIÓN, FIABILIDAD Y ANÁLISIS DE DEFECTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71201201', 
                    'descripcion' => 'ACTIVIDADES DE ANÁLISIS DE LA COMPOSICIÓN Y PUREZA DE MINERALES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71201301', 
                    'descripcion' => 'ACTIVIDADES DE ENSAYOS EN EL CAMPO DE LA HIGIENE ALIMENTARIA, INCLUIDAS ACTIVIDADES DE ENSAYO Y CONTROL VETERINARIO EN RELACIÓN CON LA PRODUCCIÓN DE ALIMENTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71201401', 
                    'descripcion' => 'ACTIVIDADES DE ENSAYOS PARA DETERMINAR LAS PROPIEDADES FÍSICAS Y EL RENDIMIENTO DE PRODUCTOS Y MATERIALES EN CUANTO, A SU RESISTENCIA, ESPESOR, DURABILIDAD, RADIACTIVIDAD, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71201501', 
                    'descripcion' => 'ACTIVIDADES DE ENSAYOS Y MEDICIONES DE INDICADORES AMBIENTALES: CONTAMINACIÓN DEL AIRE Y DEL AGUA ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71201601', 
                    'descripcion' => 'ACTIVIDADES DE ENSAYOS DE ENSAYOS RADIOGRÁFICOS DE SOLDADURAS Y JUNTAS Y RENDIMIENTO DE MAQUINARÍA COMPLETA: MOTORES, AUTOMÓVILES, EQUIPO ELECTRÓNICO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71209101', 
                    'descripcion' => 'ACTIVIDADES DE CERTIFICACIÓN DE PRODUCTOS, COMO BIENES DE CONSUMO, VEHÍCULOS AUTOMOTORES, AERONAVES, CONTENEDORES PRESURIZADOS, CENTRALES NUCLEARES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71209201', 
                    'descripcion' => 'PRUEBAS PERIÓDICAS DE SEGURIDAD VIAL DE VEHÍCULOS AUTOMOTORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71209202', 
                    'descripcion' => 'PRUEBAS PERIÓDICAS DE SEGURIDAD DE INSTRUMENTOS O EQUIPO ELECTRÓNICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71209301', 
                    'descripcion' => 'ACTIVIDADES DE ANÁLISIS Y PRUEBAS RELACIONADAS A CAMPOS CIENTÍFICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71209302', 
                    'descripcion' => 'ENSAYOS RADIOGRAFICOS DE SOLDADURAS Y ARTICULACIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71209401', 
                    'descripcion' => 'ACTIVIDADES DE LABORATORIOS POLICIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M71209901', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE ENSAYOS Y ANÁLISIS TÉCNICOS: ENSAYOS BASADOS EN LA UTILIZACIÓN DE MAQUETAS O MODELOS (DE AERONAVES, DE EMBARCACIONES, DE PRESAS, ETCÉTERA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72101101', 
                    'descripcion' => 'INVESTIGACIONES Y DESARROLLO EXPERIMENTAL EN EL CAMPO DE LA BIOTECNOLOGÍA DE: ADN/ARN, GENÓMICA, FARMACOGENÓMICA, SONDAS GENÉTICAS, INGENIERÍA GENÉTICA, SECUENCIACIÓN Y AMPLIFICACIÓN DE ADN Y ARN, PATRONES DE EXPRESIÓN GÉNICA EL USO DE TECNOLOGÍA ANTISENSE, VECTORES GENÉTICOS Y DE ARN, TERAPIA GENÉTICA Y VECTORES VIRALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72101201', 
                    'descripcion' => 'INVESTIGACIONES Y DESARROLLO EXPERIMENTAL EN EL CAMPO DE LA BIOTECNOLOGÍA DE: PROTEÍNAS Y OTRAS MOLÉCULAS SECUENCIACIÓN, SÍNTESIS E INGENIERÍA DE PROTEÍNAS Y PÉPTIDOS (QUE INCLUYE HORMONAS DE GRAN TAMAÑO MOLECULAR), MEJORA DE MÉTODOS DE LIBERACIÓN DE DROGAS DE GRAN TAMAÑO, PROTEÓMICA, AISLAMIENTO Y PURIFICACIÓN DE PROTEÍNAS, SEÑALIZACIÓN E IDENTIFICACIÓN DE RECEPTORES CELULARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72101301', 
                    'descripcion' => 'INVESTIGACIONES Y DESARROLLO EXPERIMENTAL EN EL CAMPO DE LA BIOTECNOLOGÍA DE: CULTIVOS E INGENIERÍA CELULARES Y DE TEJIDOS, INGENIERÍA TISULAR (QUE INCLUYEN IMPLANTES DE TEJIDO E INGENIERÍA BIOMÉDICA) EN FUSIÓN CELULAR, VACUNAS/ESTIMULANTES DEL SISTEMA INMUNE, MANIPULACIÓN EMBRIONARIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72101401', 
                    'descripcion' => 'INVESTIGACIONES Y DESARROLLO EXPERIMENTAL EN EL CAMPO DE LA TÉCNICAS DE PROCESO BIOTECNOLÓGICOS: FERMENTACIÓN MEDIANTE EL USO DE BIORREACTORES, PROCESADO BIOLÓGICO, BIODECANTACIÓN, BIOPULPING, BIOBLANQUEO, BIODESULFURIZACIÓN, BIORREMEDIACIÓN, BIOFILTRACIÓN Y FITORREMEDIACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72101501', 
                    'descripcion' => 'INVESTIGACIONES Y DESARROLLO EXPERIMENTAL EN EL CAMPO DE LA BIOINFORMÁTICA: CONSTRUCCIÓN DE BASES DE DATOS GENÓMICAS, SECUENCIAS DE PROTEÍNAS, MODELIZACIÓN DE PROCESOS BIOLÓGICOS COMPLEJOS QUE INCLUYEN BIOLOGÍA DE SISTEMAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72101601', 
                    'descripcion' => 'INVESTIGACIONES Y DESARROLLO EXPERIMENTAL EN EL CAMPO DE LA NANOBIOTECNOLOGÍA: APLICACIÓN DE TÉCNICAS Y PROCESOS DE NANO/MICRO FABRICACIÓN PARA LA CONSTRUCCIÓN DE APARATOS PARA EL ESTUDIO DE BIOSISTEMAS Y APLICACIONES EN LIBERACIÓN DE DROGAS, DIAGNÓSTICOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72102101', 
                    'descripcion' => 'INVESTIGACIÓN Y DESARROLLO EXPERIMENTAL EN CIENCIAS QUÍMICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72102102', 
                    'descripcion' => 'INVESTIGACIÓN Y DESARROLLO EXPERIMENTAL EN CIENCIAS BIOLOGÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72102103', 
                    'descripcion' => 'INVESTIGACIÓN Y DESARROLLO EXPERIMENTAL EN CIENCIAS FÍSICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72102104', 
                    'descripcion' => 'INVESTIGACIÓN Y DESARROLLO EXPERIMENTAL EN CIENCIAS GEOLOGÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72102105', 
                    'descripcion' => 'INVESTIGACIÓN Y DESARROLLO EXPERIMENTAL EN CIENCIAS ASTRONOMÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72102201', 
                    'descripcion' => 'INVESTIGACIÓN Y DESARROLLO EN INGENIERÍA Y TECNOLOGÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72102301', 
                    'descripcion' => 'INVESTIGACIÓN Y DESARROLLO EN CIENCIAS MÉDICAS Y FARMACÉTICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72102401', 
                    'descripcion' => 'INVESTIGACIÓN Y DESARROLLO EN CIENCIAS AGROPECUARIAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72102501', 
                    'descripcion' => 'INVESTIGACIÓN Y DESARROLLO INTERDISCIPLINARIOS CENTRADOS PRINCIPALMENTE EN LAS CIENCIAS NATURALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72102502', 
                    'descripcion' => 'INVESTIGACIÓN Y DESARROLLO INTERDISCIPLINARIOS CENTRADOS PRINCIPALMENTE EN LA INGENIERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72102601', 
                    'descripcion' => 'INVESTIGACION Y DESARROLLO DE LAS CIENCIAS MATEMATICAS Y FÍSICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72102701', 
                    'descripcion' => 'INVESTIGACION Y DESARROLLO EN LA AGRONOMIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72102901', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE INVESTIGACIÓN Y DESARROLLO EXPERIMENTAL EN CIENCIAS NATURALES Y LA INGENIERÍA (PROPIEDAD INTELECTUAL, SECRETO COMERCIAL, PATENTES, ETCÉTERA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72200101', 
                    'descripcion' => 'INVESTIGACIÓN Y DESARROLLO EN CIENCIAS SOCIALES Y HUMANIDADES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72200201', 
                    'descripcion' => 'INVESTIGACION Y DESARROLLO EN LETRAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72200202', 
                    'descripcion' => 'INVESTIGACION Y DESARROLLO EN SOCIOLOGIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72200203', 
                    'descripcion' => 'INVESTIGACION Y DESARROLLO EN PSICOLOGIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72200301', 
                    'descripcion' => 'INVESTIGACION Y DESARROLLO EN LAS CIENCIAS ECONOMICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72200401', 
                    'descripcion' => 'INVESTIGACION Y DESARROLLO EN EL DERECHO Y JURISPRUDENCIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72200501', 
                    'descripcion' => 'INVESTIGACION Y DESARROLLO EN LA LINGUISTICA Y LOS IDIOMAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M72200901', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE INVESTIGACIÓN Y DESARROLLO EXPERIMENTAL EN EL CAMPO DE LAS CIENCIAS SOCIALES Y LAS HUMANIDADES E INTERDISCIPLINARIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M73100101', 
                    'descripcion' => 'CREACIÓN E INSERCIÓN DE ANUNCIOS EN PERIÓDICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M73100102', 
                    'descripcion' => 'CREACIÓN E INSERCIÓN DE ANUNCIOS EN REVISTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M73100103', 
                    'descripcion' => 'CREACIÓN E INSERCIÓN DE ANUNCIOS EN PROGRAMAS DE RADIO. ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M73100104', 
                    'descripcion' => 'CREACIÓN E INSERCIÓN DE ANUNCIOS EN PROGRAMAS DE TELEVISIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M73100105', 
                    'descripcion' => 'CREACIÓN E INSERCIÓN DE ANUNCIOS EN INTERNET Y OTROS MEDIOS DE DIFUSIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M73100201', 
                    'descripcion' => 'CREACIÓN Y COLOCACIÓN DE ANUNCIOS DE PUBLICIDAD AL AIRE LIBRE EN: CARTELES, TABLEROS, BOLETINES Y CARTELERAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M73100202', 
                    'descripcion' => 'DECORACION DE ESCAPARATES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M73100203', 
                    'descripcion' => 'DISEÑO DE SALAS DE EXHIBICION' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M73100204', 
                    'descripcion' => 'PUBLICIDAD AEREA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M73100205', 
                    'descripcion' => 'DISTRIBUCION DE MATERIALES O MUESTRAS DE PUBLICIDAD Y ALQUILER DE ESPACIOS DE PUBLICIDAD' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M73100301', 
                    'descripcion' => 'REPRESENTACIÓN DE MEDIOS DE DIFUSIÓN, VENTA DE TIEMPO Y ESPACIO EN DIVERSOS MEDIOS DE DIFUSIÓN INTERESADOS EN LA OBTENCIÓN DE ANUNCIOS Y PUBLICIDAD AÉREA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M73100401', 
                    'descripcion' => 'REALIZACIÓN DE CAMPAÑAS DE COMERCIALIZACIÓN Y OTROS SERVICIOS DE PUBLICIDAD DIRIGIDOS A ATRAER Y RETENER CLIENTES: PROMOCIÓN DE PRODUCTOS, COMERCIALIZACIÓN EN EL PUNTO DE VENTA, PUBLICIDAD DIRECTA POR CORREO Y ASESORAMIENTO EN MARKETING, CREACIÓN DE STANDS, OTRAS ESTRUCTURAS Y LUGARES DE EXHIBICIÓN, DISTRIBUCIÓN O ENTREGA DE MATERIALES O MUESTRAS DE PUBLICIDAD' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M73100501', 
                    'descripcion' => 'ALQUILER DE ESPACIOS DE PUBLICIDAD EN VALLAS PUBLICITARIAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M73100901', 
                    'descripcion' => 'OTROS SERVICIOS DE PUBLICIDAD N.C.P' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M73200101', 
                    'descripcion' => 'ESTUDIOS SOBRE LAS POSIBILIDADES DE COMERCIALIZACIÓN (MERCADOS POTENCIALES), LA ACEPTACIÓN Y EL GRADO DE CONOCIMIENTO DE LOS PRODUCTOS Y LOS HÁBITOS DE COMPRA DE LOS CONSUMIDORES CON EL OBJETO DE PROMOVER LAS VENTAS Y DESARROLLAR NUEVOS PRODUCTOS, INCLUIDOS ANÁLISIS ESTADÍSTICOS DE LOS RESULTADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M73200201', 
                    'descripcion' => 'ENCUESTAS DE OPINIÓN PÚBLICAS SOBRE CUESTIONES POLÍTICAS, ECONÓMICAS Y SOCIALES, ASÍ COMO SUS ANÁLISIS ESTADÍSTICOS DE LOS RESULTADOS DE ESAS ENCUESTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74100101', 
                    'descripcion' => 'DISEÑO DE TELAS, PRENDAS DE VESTIR, CALZADO, JOYAS, MUEBLES Y OTROS ARTÍCULOS DE DECORACIÓN INTERIOR Y DE MODA, ASÍ COMO DE OTROS EFECTOS PERSONALES Y ENSERES DOMÉSTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74100201', 
                    'descripcion' => 'DISEÑO INDUSTRIAL, ES DECIR CREACIÓN Y DESARROLLO DE DISEÑOS Y ESPECIFICACIONES QUE OPTIMIZAN LA UTILIZACIÓN, EL VALOR Y LA APARIENCIA DE LOS PRODUCTOS, INCLUYENDO LA DETERMINACIÓN DE LOS MATERIALES, LA CONSTRUCCIÓN, EL MECANISMO, LA FORMA, EL COLOR Y EL ACABADO DEL PRODUCTO, TENIENDO EN CUENTA LAS CARACTERÍSTICAS Y NECESIDADES HUMANAS Y CONSIDERACIONES RELACIONADAS CON LA SEGURIDAD, EL ATRACTIVO EN EL MERCADO, LA EFICIENCIA EN LA PRODUCCIÓN, LA DISTRIBUCIÓN, LA UTILIZACIÓN, Y LA FACILIDAD DE MANTENIMIENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74100301', 
                    'descripcion' => 'ACTIVIDADES DE DISEÑADORES GRÁFICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74100401', 
                    'descripcion' => 'ACTIVIDADES DE DECORADORES DE INTERIORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74100901', 
                    'descripcion' => 'OTRAS ACTIVIDADES ESPECIALIZADAS DE DISEÑO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74200101', 
                    'descripcion' => 'REALIZACIÓN DE RETRATOS FOTOGRÁFICOS PARA PASAPORTES, ACTOS ACADÉMICOS, BODAS, ETCÉTERA, INCLUIDO LAS FILMACIONES EN VÍDEO DE ACONTECIMIENTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74200201', 
                    'descripcion' => 'REALIZACIÓN DE FOTOGRAFÍAS PARA ANUNCIOS COMERCIALES, PARA EDITORIALES, Y PARA ACTIVIDADES RELACIONADAS CON LA MODA, LOS BIENES RAÍCES O EL TURISMO, ACTIVIDADES DE FOTÓGRAFOS DE PRENSA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74200301', 
                    'descripcion' => 'REALIZACIÓN DE FOTOGRAFÍA ESPECIALIZADA COMO: FOTOGRAFÍA AÉREA, FOTOGRAFÍA SUBMARINA, FOTOGRAFÍA MÉDICA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74200401', 
                    'descripcion' => 'ACTIVIDADES DE REVELADO, IMPRESIÓN, AMPLIACIÓN DE FOTOGRAFÍAS Y PELÍCULAS DE LOS CLIENTES, LABORATORIOS DE REVELADO DE PELÍCULAS E IMPRESIÓN DE FOTOGRAFÍAS; COPIA, RESTAURACIÓN Y RETOQUE DE FOTOGRAFÍAS, NEGATIVOS DE FOTOGRAFÍAS Y PELÍCULAS, INCLUIDO ACTIVIDADES DE TIENDAS DE REVELADO RÁPIDO (QUE NO FORMEN PARTE DE COMERCIOS DE VENTA AL POR MENOR DE CÁMARAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74200901', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE FOTOGRAFÍA: MONTAJE DE DIAPOSITIVAS, MICROFILMACIÓN DE DOCUMENTOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74901001', 
                    'descripcion' => 'PRESTACION DE SERVICIOS PROFESIONALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74901101', 
                    'descripcion' => 'ACTIVIDADES DE TRADUCCION DE LIBROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74901102', 
                    'descripcion' => 'OTROS TIPOS DE TRADUCCION E INTERPRETACION' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74901201', 
                    'descripcion' => 'ACTIVIDADES DE CORRETAJE EMPRESARIAL, GESTIÓN DE LA COMPRA O VENTA DE PEQUEÑAS Y MEDIANAS EMPRESAS, INCLUIDAS PRÁCTICAS PROFESIONALES Y EXCLUIDAS LAS ACTIVIDADES DE CORRETAJE INMOBILIARIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74901301', 
                    'descripcion' => 'ACTIVIDADES DE INTERMEDIACIÓN EN MATERIA DE PATENTES (GESTIÓN DE LA COMPRA Y VENTA DE PATENTES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74901401', 
                    'descripcion' => 'ACTIVIDADES DE TASACIÓN PARA ANTIGÜEDADES, JOYAS, ETCÉTERA, DISTINTAS DE LA TASACIÓN DE INMUEBLES Y DE LA RELACIONADA CON LOS SEGUROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74901501', 
                    'descripcion' => 'ACTIVIDADES DE PRONÓSTICO DEL TIEMPO (PREVISIÓN METEOROLÓGICA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74901601', 
                    'descripcion' => 'PROMOCIONES COMERCIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74901901', 
                    'descripcion' => 'OTRAS ACTIVIDADES PROFESIONALES, CIENTÍFICAS Y TÉCNICAS: REDACCIÓN, DISEÑOS DETALLADOS REALIZADOS POR DIBUJANTES ARQUITECTÓNICOS, LECTURA DE CONTADORES DE GAS, AGUA Y ENERGÍA ELÉCTRICA, AUDITORÍA DE EFECTOS E INFORMACIÓN SOBRE FLETES, MEDIDORES DE CANTIDADES DE OBRA (CERTIFICACIÓN DE OBRA), ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74902101', 
                    'descripcion' => 'ACTIVIDADES DE CONSULTORÍA DE SEGURIDAD' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74902201', 
                    'descripcion' => 'ACTIVIDADES DE CONSULTORÍA DE AGRONOMÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74902301', 
                    'descripcion' => 'ACTIVIDADES DE CONSULTORÍA AMBIENTAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74902401', 
                    'descripcion' => 'ACTIVIDADES DE CONSULTORÍA DISTINTAS DE LAS DE ARQUITECTURA, INGENIERÍA Y GESTIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74902901', 
                    'descripcion' => 'OTROS TIPOS DE CONSULTORÍA TÉCNICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74909001', 
                    'descripcion' => 'ACTIVIDADES REALIZADAS POR AGENCIAS EN NOMBRE DE PARTICULARES PARA OBTENER CONTRATOS DE ACTUACIÓN EN PELÍCULAS, OBRAS DE TEATRO Y OTROS ESPECTÁCULOS CULTURALES Y DEPORTIVOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M74909002', 
                    'descripcion' => 'ACTIVIDADES REALIZADAS POR AGENCIAS EN NOMBRE DE PARTICULARES PARA OFERTAR LIBROS, GUIONES, OBRAS DE ARTE, FOTOGRAFÍAS, ETCÉTERA, A EDITORES, PRODUCTORES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M75000101', 
                    'descripcion' => 'ACTIVIDADES DE ATENCIÓN MÉDICA Y CONTROL DE ANIMALES, EXCLUIDO LOS DOMÉSTICOS. ESTAS ACTIVIDADES SON LLEVADAS A CABO POR VETERINARIOS CUALIFICADOS QUE PRESTAN SERVICIOS EN HOSPITALES VETERINARIOS ASÍ COMO TAMBIÉN EN ESTABLECIMIENTOS AGROPECUARIOS, A DOMICILIO, EN CONSULTORIOS, QUIRÓFANOS PRIVADOS Y EN OTROS LUGARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M75000102', 
                    'descripcion' => 'ACTIVIDADES DE ATENCIÓN MEDICA, QUIRÚRGICA U ODONTOLÓGICA DE ANIMALES, REALIZADOS POR INSTITUCIONES DISTINTAS A LOS HOSPITALES; ESTABLECIMIENTOS AGROPECUARIOS, PERRERAS, CONSULTORIOS Y SALAS DE CIRUGÍA PRIVADOS O EN OTROS LUGARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M75000201', 
                    'descripcion' => 'ACTIVIDADES DE ATENCIÓN MÉDICA Y CONTROL DE ANIMALES DOMÉSTICOS. ESTAS ACTIVIDADES SON LLEVADAS A CABO POR VETERINARIOS CUALIFICADOS QUE PRESTAN SERVICIOS EN HOSPITALES VETERINARIOS ASÍ COMO TAMBIÉN EN ESTABLECIMIENTOS AGROPECUARIOS, EN PERRERAS, A DOMICILIO, EN CONSULTORIOS, QUIRÓFANOS PRIVADOS Y EN OTROS LUGARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M75000301', 
                    'descripcion' => 'ACTIVIDADES DE ASISTENTES DE VETERINARIO U OTRO PERSONAL VETERINARIO AUXILIAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M75000401', 
                    'descripcion' => 'ACTIVIDADES CLÍNICO PATOLÓGICAS Y OTRAS ACTIVIDADES DE DIAGNÓSTICO RELACIONADAS CON LOS ANIMALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'M75000501', 
                    'descripcion' => 'ACTIVIDADES DE VETERINARIA QUE REQUIEREN LA UTILIZACIÓN DE AMBULANCIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77100001', 
                    'descripcion' => 'ACTIVIDADES DE ALQUILER CON FINES OPERATIVOS DE AUTOMÓVILES DE PASAJEROS, CAMIONES, CAMIONETAS, REMOLQUES Y VEHÍCULOS DE RECREO. (SIN CONDUCTOR)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77100002', 
                    'descripcion' => 'ACTIVIDADES DE ALQUILER CON FINES OPERATIVOS DE REMOLQUES Y VEHÍCULOS DE RECREO SIN CONDUCTOR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77100003', 
                    'descripcion' => 'ALQUILER DE MOTOCICLETAS O CASAS RODANTES, SIN CONDUCTOR. EL ALQUILER PUEDE SER A CORTO Y LARGO PLAZO, INCLUYE O NO SERVICIOS DE MANTENIMIENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77100004', 
                    'descripcion' => 'ALQUILER DE LOCOMOTORAS Y VAGONES DE FERROCARRIL SIN CONDUCTOR.  EL ALQUILER PUEDE SER A CORTO Y LARGO PLAZO, INCLUYE O NO SERVICIOS DE MANTENIMIENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77210101', 
                    'descripcion' => 'ALQUILER DE EMBARCACIONES DE RECREO, CANOAS Y VELEROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77210102', 
                    'descripcion' => 'ALQUILER DE CABALLOS DE MONTAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77210201', 
                    'descripcion' => 'ALQUILER DE BICICLETAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77210301', 
                    'descripcion' => 'ALQUILER DE HAMACAS DE PLAYA Y SOMBRILLAS (PARASOLES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77210401', 
                    'descripcion' => 'ALQUILER DE ESQUÍS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77210901', 
                    'descripcion' => 'ALQUILER DE OTROS TIPOS DE EQUIPO DE DEPORTE, ALAS DELTA CON MOTOR Y SIN MOTOR, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77220001', 
                    'descripcion' => 'ALQUILER DE CINTAS DE VIDEO, DISCOS, CD, DVD, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77290101', 
                    'descripcion' => 'ALQUILER DE PRENDAS DE VESTIR Y CALZADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77290102', 
                    'descripcion' => 'ALQUILER DE PRODUCTOS TEXTILES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77290201', 
                    'descripcion' => 'ALQUILER DE MUEBLES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77290202', 
                    'descripcion' => 'ALQUILER DE ARTÍCULOS DE CERÁMICA Y DE VIDRIO, UTENSILIOS DE COCINA, VAJILLAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77290203', 
                    'descripcion' => 'ALQUILER DE APARATOS ELÉCTRICOS DE USO DOMÉSTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77290204', 
                    'descripcion' => 'ALQUILER DE OTROS ARTÍCULOS DE USO DOMÉSTICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77290301', 
                    'descripcion' => 'ALQUILER DE JOYAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77290302', 
                    'descripcion' => 'ALQUILER DE INSTRUMENTOS MUSICALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77290303', 
                    'descripcion' => 'ALQUILER DE MATERIAL DE ESCENOGRAFÍA Y DE VESTUARIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77290401', 
                    'descripcion' => 'ALQUILER DE LIBROS, PERIÓDICOS Y REVISTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77290901', 
                    'descripcion' => 'ALQUILER Y ARRENDAMIENTO DE OTROS EFECTOS PERSONALES Y ENSERES DOMÉSTICOS: MAQUINARÍA Y EQUIPO DE BRICOLAJE, POR EJEMPLO: HERRAMIENTAS PARA REPARACIONES DOMÉSTICAS, FLORES Y PLANTAS, EQUIPO ELECTRÓNICO DE USO DOMÉSTICO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77301101', 
                    'descripcion' => 'ALQUILER CON FINES OPERATIVOS, SIN OPERADORES, DE OTROS TIPOS DE MAQUINARIA Y EQUIPO OPERACIONAL QUE SUELEN SER UTILIZADOS COMO BIENES DE CAPITAL POR LAS INDUSTRIAS: MOTORES Y TURBINAS, MÁQUINAS HERRAMIENTA, EQUIPO DE MINERÍA Y DE EXTRACCIÓN DE PETRÓLEO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77301102', 
                    'descripcion' => 'ALQUILER CON FINES OPERATIVOS, SIN OPERADORES, DE OTROS TIPOS DE MAQUINARIA Y EQUIPO OPERACIONAL QUE SUELEN SER UTILIZADOS COMO BIENES DE CAPITAL POR LAS INDUSTRIAS: MÁQUINAS HERRAMIENTA, EQUIPO DE MINERÍA Y DE EXTRACCIÓN DE PETRÓLEO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77301201', 
                    'descripcion' => 'ALQUILER CON FINES OPERATIVOS, SIN OPERADORES, DE OTROS TIPOS DE MAQUINARIA Y EQUIPO OPERACIONAL QUE SUELEN SER UTILIZADOS COMO BIENES DE CAPITAL POR LAS INDUSTRIAS: EQUIPO PROFESIONAL DE RADIO, TELEVISIÓN Y COMUNICACIONES; EQUIPO DE PRODUCCIÓN DE PELÍCULAS CINEMATOGRÁFICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77301301', 
                    'descripcion' => 'ALQUILER CON FINES OPERATIVOS, SIN OPERADORES, DE OTROS TIPOS DE MAQUINARIA Y EQUIPO OPERACIONAL QUE SUELEN SER UTILIZADOS COMO BIENES DE CAPITAL POR LAS INDUSTRIAS: EQUIPO DE MEDICIÓN Y CONTROL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77301401', 
                    'descripcion' => 'ALQUILER CON FINES OPERATIVOS DE MAQUINARIA Y EQUIPO DE USO AGRÍCOLA Y FORESTAL SIN OPERADORES: TRACTORES UTILIZADOS EN ACTIVIDADES AGROPECUARIAS Y SILVÍCOLAS; TRACTORES DE MANEJO A PIE (DIRIGIDOS POR UNA PERSONA DESDE FUERA), SEGADORAS, INCLUIDAS SEGADORAS DE CÉSPED, REMOLQUES Y SEMIRREMOLQUES DE CARGA Y DESCARGA AUTOMÁTICA, MÁQUINAS UTILIZADAS EN LA AGRICULTURA PARA PREPARAR LOS SUELOS, PLANTAR O ABONAR, COMO ARADOS, ESPARCIDORAS DE ESTIÉRCOL, SEMBRADORAS, RASTRILLADORAS, MÁQUINAS DE ORDEÑAR; ASPERSORES DE USO AGRÍCOLA, MÁQUINAS PARA LA RECOLECCIÓN Y TRILLA, COMO COSECHADORAS, TRILLADORAS, CRIBADORAS; MÁQUINAS UTILIZADAS EN LA AVICULTURA Y APICULTURA, EQUIPO PARA LA PREPARACIÓN DE PIENSO, MÁQUINAS PARA LIMPIAR, SELECCIONAR Y CLASIFICAR HUEVOS, FRUTA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77301501', 
                    'descripcion' => 'ALQUILER CON FINES OPERATIVOS DE MAQUINARIA Y EQUIPO PARA LA CONSTRUCCIÓN E INGENIERÍA CIVIL SIN OPERADORES: CAMIONES GRÚA, ANDAMIOS Y PLATAFORMAS DE TRABAJO, SIN MONTAJE NI DESMANTELAMIENTO, A CORTO PLAZO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77301502', 
                    'descripcion' => 'ALQUILER CON FINES OPERATIVOS DE MAQUINARIA Y EQUIPO PARA LA CONSTRUCCIÓN E INGENIERÍA CIVIL SIN OPERADORES: CAMIONES GRÚA, ANDAMIOS Y PLATAFORMAS DE TRABAJO, SIN MONTAJE NI DESMANTELAMIENTO A LARGO PLAZO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77301601', 
                    'descripcion' => 'ALQUILER CON FINES OPERATIVOS  MÁQUINAS DE ESCRIBIR Y MÁQUINAS DE PROCESAMIENTO DE TEXTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77301602', 
                    'descripcion' => 'ALQUILER CON FINES OPERATIVOS DE MAQUINARIA Y EQUIPO DE OFICINA SIN OPERADOR, MÁQUINAS REGISTRADORAS, CALCULADORAS ELECTRÓNICAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77301603', 
                    'descripcion' => 'ALQUILER CON FINES OPERATIVOS DE MAQUINARIA Y EQUIPO DE OFICINA SIN OPERADOR: COMPUTADORAS Y EQUIPO PERIFÉRICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77301604', 
                    'descripcion' => 'ALQUILER CON FINES OPERATIVOS DE MAQUINARIA Y EQUIPO DE OFICINA SIN OPERADOR: MOBILIARIO DE OFICINA, MÁQUINAS COPIADORAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77301901', 
                    'descripcion' => 'ALQUILER CON FINES OPERATIVOS, SIN OPERADORES, DE OTROS TIPOS DE MAQUINARIA CIENTÍFICA, COMERCIAL E INDUSTRIAL Y EQUIPO OPERACIONAL QUE SUELEN SER UTILIZADOS COMO BIENES DE CAPITAL POR LAS INDUSTRIAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77302101', 
                    'descripcion' => 'ALQUILER CON FINES OPERATIVOS DE EQUIPO DE TRANSPORTE TERRESTRE (EXCEPTO VEHÍCULOS AUTOMOTORES) SIN CONDUCTOR DE MOTOCICLETAS, CARAVANAS, FURGONETAS DE ACAMPADA (CAMPERS), ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77302202', 
                    'descripcion' => 'ALQUILER CON FINES OPERATIVOS DE EQUIPO DE TRANSPORTE TERRESTRE (EXCEPTO VEHÍCULOS AUTOMOTORES) SIN CONDUCTOR DE VEHÍCULOS FERROVIARIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77302301', 
                    'descripcion' => 'ALQUILER CON FINES OPERATIVOS DE EQUIPO DE TRANSPORTE ACUÁTICO SIN OPERADOR: BARCOS Y BUQUES COMERCIALES, A CORTO PLAZO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77302302', 
                    'descripcion' => 'ALQUILER CON FINES OPERATIVOS DE EQUIPO DE TRANSPORTE ACUÁTICO SIN OPERADOR: BARCOS Y BUQUES COMERCIALES, A LARGO PLAZO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77302401', 
                    'descripcion' => 'ALQUILER CON FINES OPERATIVOS DE EQUIPO DE TRANSPORTE AÉREO SIN OPERADOR: AERONAVES, GLOBOS DE AIRE CALIENTE A CORTO PLAZO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77302402', 
                    'descripcion' => 'ALQUILER CON FINES OPERATIVOS DE EQUIPO DE TRANSPORTE AÉREO SIN OPERADOR: AERONAVES, GLOBOS DE AIRE CALIENTE A LARGO PLAZO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77303101', 
                    'descripcion' => 'ALQUILER DE CONSTRUCCIONES MÓVILES TEMPORALES PARA ALOJAMIENTO U OFICINAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77303201', 
                    'descripcion' => 'ALQUILER DE CONTENEDORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77303301', 
                    'descripcion' => 'ALQUILER DE PALETAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77303401', 
                    'descripcion' => 'ALQUILER DE ANIMALES: REBAÑOS, CABALLOS DE CARRERAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77400101', 
                    'descripcion' => 'ARRENDAMIENTO DE PRODUCTOS DE PROPIEDAD INTELECTUAL (EXCEPTO OBRAS PROTEGIDAS POR DERECHOS DE AUTOR, COMO LIBROS O PROGRAMAS INFORMÁTICOS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77400201', 
                    'descripcion' => 'RECEPCIÓN DE REGALÍAS O DERECHOS DE LICENCIA POR LA UTILIZACIÓN DE: FRANQUICIAS, ENTIDADES PATENTADAS, MARCAS DE FÁBRICA O DE COMERCIO O MARCAS DE SERVICIOS Y NOMBRES COMERCIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77400301', 
                    'descripcion' => 'RECEPCIÓN DE REGALÍAS O DERECHOS DE LICENCIA POR LA UTILIZACIÓN DE: PROSPECCIÓN, EXPLOTACIÓN Y EVALUACIÓN DE RECURSOS MINERALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N77400901', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE ARRENDAMIENTO DE PROPIEDAD INTELECTUAL Y PRODUCTOS SIMILARES, EXCEPTO OBRAS PROTEGIDAS POR DERECHO DE AUTOR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N78100001', 
                    'descripcion' => 'ACTIVIDADES DE BÚSQUEDA, SELECCIÓN, RECOMENDACIÓN Y COLOCACIÓN DE PERSONAL, INCLUIDA LA COLOCACIÓN O BÚSQUEDA DE EJECUTIVOS, ACTIVIDADES DE LAS AGENCIAS Y OFICINAS DE SELECCIÓN DE ACTORES, POR EJEMPLO, PARA OBRAS DE TEATRO Y ACTIVIDADES DE AGENCIA DE COLOCACIÓN POR INTERNET (ON LINE)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N78100002', 
                    'descripcion' => 'ACTIVIDADES DE LAS AGENCIAS Y OFICINAS DE SELECCIÓN DE ACTORES, POR EJEMPLO, PARA OBRAS DE TEATRO Y ACTIVIDADES DE AGENCIA DE COLOCACIÓN POR INTERNET (ON LINE)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N78200001', 
                    'descripcion' => 'SUMINISTRO DE TRABAJADORES PARA LAS ACTIVIDADES DE LOS CLIENTES POR PERÍODOS LIMITADOS DE TIEMPO CON EL FIN DE REEMPLAZAR A EMPLEADOS DE LOS CLIENTES O SUPLEMENTAR TEMPORALMENTE SU FUERZA DE TRABAJO, CUANDO LOS TRABAJADORES SUMINISTRADOS SON EMPLEADOS DE LAS PROPIAS AGENCIAS DE EMPLEO TEMPORAL. LAS UNIDADES CLASIFICADAS EN ESTA CLASE NO SE ENCARGAN DE LA SUPERVISIÓN DIRECTA DE SUS EMPLEADOS EN LOS LUGARES DE TRABAJO DE LOS CLIENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N78300001', 
                    'descripcion' => 'SUMINISTRO DE RECURSOS HUMANOS PARA LAS ACTIVIDADES DE LOS CLIENTES. LA PROVISIÓN DE RECURSOS HUMANOS SE REALIZA POR LO GENERAL A LARGO PLAZO O DE FORMA PERMANENTE, Y LAS UNIDADES CLASIFICADAS EN ESTA CLASE PUEDEN DESEMPEÑAR UNA AMPLIA GAMA DE FUNCIONES CONEXAS DE GESTIÓN DE RECURSOS HUMANOS. LAS UNIDADES CLASIFICADAS AQUÍ CONSTITUYEN LOS EMPLEADORES OFICIALES DE LOS EMPLEADOS EN LO QUE RESPECTA A LA NÓMINA, LOS IMPUESTOS Y OTROS ASPECTOS FISCALES Y DE RECURSOS HUMANOS, PERO NO SE ENCARGAN DE LA DIRECCIÓN NI DE LA SUPERVISIÓN DEL TRABAJO DE ESOS EMPLEADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N79110001', 
                    'descripcion' => 'ACTIVIDADES DE LAS AGENCIAS DE VIAJES DEDICADAS PRINCIPALMENTE A VENDER SERVICIOS DE VIAJES, DE VIAJES ORGANIZADOS, DE TRANSPORTE Y DE ALOJAMIENTO, AL POR MAYOR O AL POR MENOR, AL PÚBLICO EN GENERAL Y A CLIENTES COMERCIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N79120001', 
                    'descripcion' => 'ACTIVIDAD DE OPERADORES TURÍSTICOS QUE SE ENCARGAN DE LA PLANIFICACIÓN Y ORGANIZACIÓN DE PAQUETES DE SERVICIOS DE VIAJES (TOURS) PARA SU VENTA A TRAVÉS DE AGENCIAS DE VIAJES O POR LOS PROPIOS OPERADORES TURÍSTICOS. ESOS VIAJES ORGANIZADOS (TOURS) PUEDEN INCLUIR LA TOTALIDAD O PARTE DE LAS SIGUIENTES CARACTERÍSTICAS: TRANSPORTE, ALOJAMIENTO, COMIDAS, VISITAS A MUSEOS, LUGARES HISTÓRICOS O CULTURALES, ESPECTÁCULOS TEATRALES, MUSICALES O DEPORTIVOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N79900101', 
                    'descripcion' => 'PRESTACIÓN DE OTROS SERVICIOS DE RESERVAS RELACIONADOS CON LOS VIAJES: RESERVAS DE TRANSPORTE, HOTELES, RESTAURANTES, ALQUILER DE AUTOMÓVILES, ENTRETENIMIENTO Y DEPORTE, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N79900201', 
                    'descripcion' => 'PRESTACIÓN DE SERVICIOS DE INTERCAMBIO EN RÉGIMEN DE TIEMPO COMPARTIDO O MULTIPROPIEDAD' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N79900301', 
                    'descripcion' => 'ACTIVIDADES DE VENTA DE BOLETOS PARA OBRAS DE TEATRO, COMPETICIONES DEPORTIVAS Y OTRAS ACTIVIDADES DE DIVERSIÓN Y ENTRETENIMIENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N79900401', 
                    'descripcion' => 'PRESTACIÓN DE SERVICIOS DE ASISTENCIA A LOS TURISTAS: SUMINISTRO A LOS CLIENTES DE INFORMACIÓN SOBRE LOS VIAJES, ACTIVIDADES DE GUÍAS DE TURISMO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N79900501', 
                    'descripcion' => 'ACTIVIDADES DE PROMOCIÓN TURÍSTICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N80100101', 
                    'descripcion' => 'SERVICIOS DE VEHÍCULOS BLINDADOS (TRANSPORTE DE VALORES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N80100201', 
                    'descripcion' => 'SERVICIOS DE ESCOLTA (GUARDAESPALDAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N80100301', 
                    'descripcion' => 'SERVICIOS DE GUARDIAS DE SEGURIDAD' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N80100401', 
                    'descripcion' => 'ACTIVIDADES DE VIGILANCIA Y PROTECCION REALIZADO A TRAVES DEL PATRULLAJE DE CALLES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N80100501', 
                    'descripcion' => 'ACTIVIDADES DE PROTECCIÓN A TRAVES DE GUARDA-ESPALDAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N80100901', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE SEGURIDAD PRIVADA: DETECTOR DE MENTIRAS (POLÍGRAFO), HUELLAS DACTILARES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N80200101', 
                    'descripcion' => 'ACTIVIDADES DE SUPERVISIÓN A DISTANCIA DE SISTEMAS ELECTRÓNICOS DE SEGURIDAD, COMO LOS DE ALARMA CONTRA ROBOS Y CONTRA INCENDIOS, INCLUIDO SU INSTALACIÓN Y MANTENIMIENTO. LA UNIDAD QUE LLEVA A CABO ESTA ACTIVIDAD PUEDE DEDICARSE TAMBIÉN A LA VENTA DE ESTOS SISTEMAS DE SEGURIDAD' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N80200201', 
                    'descripcion' => 'ACTIVIDADES DE INSTALACIÓN, REPARACIÓN, RECONSTRUCCIÓN Y AJUSTE DE DISPOSITIVOS MECÁNICOS O ELÉCTRICOS DE CIERRE, CAJAS DE CAUDALES Y CAJAS FUERTES. LA UNIDAD QUE LLEVA A CABO ESTA ACTIVIDAD PUEDE DEDICARSE TAMBIÉN A LA VENTA DE ESTOS DISPOSITIVOS MECÁNICOS O ELÉCTRICOS DE CIERRE, CAJAS DE CAUDALES Y CAJAS FUERTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N80300001', 
                    'descripcion' => 'ACTIVIDADES DE TODO TIPO DE INVESTIGADORES PRIVADOS, INDEPENDIENTEMENTE DEL TIPO DE CLIENTE Y DE LA FINALIDAD DE LA INVESTIGACIÓN, SERVICIOS DE INVESTIGACIÓN Y DE DETECTIVES Y OTRAS ACTIVIDADES DE INVESTIGACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N81100001', 
                    'descripcion' => 'PRESTACIÓN DE UNA COMBINACIÓN DE SERVICIOS DE APOYO EN LAS INSTALACIONES DE LOS CLIENTES, COMO LIMPIEZA GENERAL DE INTERIORES, MANTENIMIENTO, ELIMINACIÓN DE LA BASURAS, SEGURIDAD Y VIGILANCIA, ENVÍO DE CORREO, RECEPCIÓN, LAVANDERÍA Y SERVICIOS CONEXOS, A FIN DE FACILITAR EL FUNCIONAMIENTO DE LAS INSTALACIONES. LAS UNIDADES CLASIFICADAS EN ESTA CLASE PROPORCIONAN PERSONAL PARA LA REALIZACIÓN DE ESTAS ACTIVIDADES DE APOYO, PERO NO PARTICIPAN EN LAS ACTIVIDADES PRINCIPALES DE LOS CLIENTES NI SON RESPONSABLES DE ELLAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N81210001', 
                    'descripcion' => 'LIMPIEZA GENERAL (NO ESPECIALIZADA) DE TODO TIPO DE EDIFICIOS, ESTUDIOS PROFESIONALES, LOCALES COMERCIALES,  PROFESIONALES Y EDIFICIOS CON MÚLTIPLES UNIDADES RESIDENCIALES COMO: OFICINAS, CASAS Y DEPARTAMENTOS, FÁBRICAS, ESTABLECIMIENTOS COMERCIALES E INSTITUCIONES. ESTAS ACTIVIDADES CONSISTEN SOBRE TODO EN LA LIMPIEZA DE INTERIORES, AUNQUE PUEDEN ABARCAR LA LIMPIEZA DE ZONAS EXTERIORES CONEXAS, COMO VENTANAS Y PASADIZOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N81291101', 
                    'descripcion' => 'ACTIVIDADES DE LIMPIEZA EXTERIOR DE EDIFICIOS DE TODO TIPO, COMO OFICINAS, FÁBRICAS, ESTABLECIMIENTOS COMERCIALES, INSTITUCIONES Y OTROS LOCALES COMERCIALES, PROFESIONALES Y EDIFICIOS CON MÚLTIPLES UNIDADES RESIDENCIALES (MULTIFAMILIARES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N81291201', 
                    'descripcion' => 'ACTIVIDADES DE LIMPIEZA ESPECIALIZADA DE EDIFICIOS, COMO LIMPIEZA DE VENTANAS, LIMPIEZA DE CHIMENEAS Y HOGARES DE CHIMENEA, HORNOS, INCINERADORES, LIMPIEZA DE MAQUINARIA INDUSTRIAL, CALDERAS, CONDUCTOS DE VENTILACIÓN, EXTRACTORES DE AIRE, ACTIVIDADES DE LIMPIEZA DE EDIFICIOS E INSTALACIONES INDUSTRIALES N.C.P' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N81291202', 
                    'descripcion' => 'LIMPIEZA DE INTERIORES (LIMPIEZA Y ENCERADO DE PISOS, LIMPIEZA DE PAREDES, PULIMENTO DE MUEBLES, ETC.)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N81299101', 
                    'descripcion' => 'SERVICIOS DE LIMPIEZA Y MANTENIMIENTO DE PISCINAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N81299201', 
                    'descripcion' => 'LIMPIEZA DE TRENES, AUTOBUSES, AERONAVES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N81299301', 
                    'descripcion' => 'LIMPIEZA DEL INTERIOR DE CAMIONES CISTERNA Y BUQUES PETROLEROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N81299401', 
                    'descripcion' => 'ACTIVIDADES DE DESINFECCIÓN, DESRATIZACIÓN Y EXTERMINIO DE PLAGAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N81299501', 
                    'descripcion' => 'SERVICIO PÚBLICO DE BARRIDO DE CALLES, RETIRADA DE NIEVE, HIELO Y LIMPIEZA DE PLAYAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N81299502', 
                    'descripcion' => 'SERVICIO PRIVADO DE BARRIDO DE CALLES, RETIRADA DE NIEVE, HIELO Y LIMPIEZA DE PLAYAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N81299901', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE LIMPIEZA: LIMPIEZA DE BOTELLAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N81301101', 
                    'descripcion' => 'PLANTACIÓN, CUIDADO Y MANTENIMIENTO DE PARQUES Y JARDINES PARA: VIVIENDAS CON JARDÍN DE USO PRIVADO O COMUNITARIO, EDIFICIOS PÚBLICOS Y SEMIPÚBLICOS (HOSPITALES, ESCUELAS, EDIFICIOS ADMINISTRATIVOS, IGLESIAS, ETCÉTERA), EDIFICIOS INDUSTRIALES Y COMERCIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N81301201', 
                    'descripcion' => 'PLANTACIÓN, CUIDADO Y MANTENIMIENTO DE PARQUES Y JARDINES PARA: TERRENOS MUNICIPALES (PARQUES, ZONAS VERDES, CEMENTERIOS, ETCÉTERA) Y AJARDINAMIENTO DE VÍAS PÚBLICAS (CARRETERAS, LÍNEAS DE FERROCARRIL Y DE TRANVÍA, VÍAS DE NAVEGACIÓN INTERIOR, PUERTOS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N81302101', 
                    'descripcion' => 'PLANTACIÓN, CUIDADO Y MANTENIMIENTO DE VEGETACIÓN EN EDIFICIOS (AZOTEAS, FACHADAS, PATIOS INTERIORES), TERRENOS DEPORTIVOS (CAMPOS DE FÚTBOL, CAMPOS DE GOLF, ETCÉTERA), PARQUES INFANTILES, PRADERAS PARA TOMAR EL SOL Y OTROS PARQUES DE RECREO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N81302201', 
                    'descripcion' => 'PLANTACIÓN, CUIDADO Y MANTENIMIENTO DE VEGETACIÓN EN AGUA EMBALSADA Y CORRIENTE (FUENTES, ESTANQUES, PISCINAS, ACEQUIAS, CURSOS DE AGUA, SISTEMAS DE AGUAS RESIDUALES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N81302301', 
                    'descripcion' => 'ACTIVIDADES DE MANTENIMIENTO DE TERRENOS EN BUENAS CONDICIONES ECOLÓGICAS COMO LA PLANTACIÓN DE PLANTAS DE PROTECCIÓN CONTRA EL RUIDO, EL VIENTO, LA EROSIÓN, LA VISIBILIDAD Y EL DESLUMBRAMIENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N82110001', 
                    'descripcion' => 'ACTIVIDADES DE PRESTACIÓN DE UNA SERIE DE SERVICIOS ADMINISTRATIVOS DE OFICINA CORRIENTES, COMO RECEPCIÓN, PLANIFICACIÓN FINANCIERA, FACTURACIÓN Y REGISTRO, PERSONAL Y DISTRIBUCIÓN FÍSICA (SERVICIOS DE MENSAJERÍA) Y LOGÍSTICA, A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N82190101', 
                    'descripcion' => 'SERVICIOS DE APOYO DE SECRETARÍA, TRANSCRIPCIÓN DE DOCUMENTOS Y OTROS SERVICIOS DE SECRETARÍA; ESCRITURA DE CARTAS O HISTORIALES PROFESIONALES (CURRÍCULUM), PREPARACIÓN DE DOCUMENTOS, EDICIÓN DE DOCUMENTOS Y CORRECCIÓN DE PRUEBAS; ACTIVIDADES DE MECANOGRAFÍA, PROCESAMIENTO DE TEXTO Y EDICIÓN ELECTRÓNICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N82190102', 
                    'descripcion' => 'SERVICIOS DE APOYO DE SECRETARÍA: CORRECCIÓN DE PRUEBAS; EDICIÓN ELECTRÓNICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N82190201', 
                    'descripcion' => 'ALQUILER DE APARTADOS DE CORREO Y OTRAS ACTIVIDADES RELACIONADAS CON EL CORREO (EXCEPTO LA PUBLICIDAD DIRECTA POR CORREO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N82190301', 
                    'descripcion' => 'ACTIVIDADES DE FOTOCOPIADO Y REALIZACIÓN DE DUPLICADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N82190901', 
                    'descripcion' => 'OTROS SERVICIOS DE COPIA DE DOCUMENTOS NO ACOMPAÑADOS DE SERVICIOS DE IMPRESIÓN, COMO LOS DE IMPRESIÓN EN OFFSET, IMPRESIÓN RÁPIDA, IMPRESIÓN DIGITAL O SERVICIOS DE PREPARACIÓN PARA LA PRENSA, Y OTROS SERVICIOS ESPECIALIZADOS DE OFICINA, DISEÑO DE PROCESOS (CIANOTIPIA, BLUEPRINTING), ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N82200101', 
                    'descripcion' => 'ACTIVIDADES DE CENTROS QUE ATIENDEN A LLAMADAS DE CLIENTES UTILIZANDO OPERADORES HUMANOS, SISTEMAS DE DISTRIBUCIÓN AUTOMÁTICA DE LLAMADAS, SISTEMAS INFORMATIZADOS DE TELEFONÍA, SISTEMAS INTERACTIVOS DE RESPUESTA DE VOZ O MÉTODOS SIMILARES PARA RECIBIR PEDIDOS, PROPORCIONAR INFORMACIÓN SOBRE PRODUCTOS, RESPONDER A SOLICITUDES DE ASISTENCIA DE LOS CLIENTES O ATENDER RECLAMACIONES (CALL CENTER)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N82200201', 
                    'descripcion' => 'ACTIVIDADES DE CENTROS QUE REALIZAN LLAMADAS, USANDO TÉCNICAS SIMILARES, PARA VENDER O PROMOCIONAR BIENES O SERVICIOS A CLIENTES POTENCIALES, REALIZAR ESTUDIOS DE MERCADO O ENCUESTAS DE OPINIÓN PÚBLICA Y ACTIVIDADES SIMILARES PARA LOS CLIENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N82300001', 
                    'descripcion' => 'ORGANIZACIÓN, PROMOCIÓN Y/O GESTIÓN DE EVENTOS COMO EXPOSICIONES COMERCIALES O EMPRESARIALES, CONVENCIONES, CONFERENCIAS Y REUNIONES, ESTÉN INCLUIDAS O NO LA GESTIÓN DE ESAS INSTALACIONES Y LA DOTACIÓN DE PERSONAL NECESARIO PARA SU FUNCIONAMIENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N82910101', 
                    'descripcion' => 'ACTIVIDADES DE COBRO DE CANTIDADES ADEUDADAS Y ENTREGA DE ESOS FONDOS A LOS CLIENTES, COMO SERVICIOS DE COBRO DE DEUDAS O FACTURAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N82910201', 
                    'descripcion' => 'ACTIVIDADES DE RECOPILACIÓN DE INFORMACIÓN, COMO HISTORIALES DE CRÉDITO Y DE EMPLEO DE PERSONAS E HISTORIALES DE CRÉDITO DE EMPRESAS, Y SUMINISTRO DE ESA INFORMACIÓN A INSTITUCIONES FINANCIERAS, EMPRESAS DE VENTA AL POR MENOR Y OTRAS ENTIDADES QUE NECESITAN PODER EVALUAR LA SOLVENCIA DE ESAS PERSONAS Y EMPRESAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N82920101', 
                    'descripcion' => 'ACTIVIDADES DE ENVASADO Y EMPAQUETADO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO, CON INTERVENCIÓN O NO DE PROCESOS AUTOMATIZADOS: EMBOTELLADO DE LÍQUIDOS, INCLUIDOS ALIMENTOS Y BEBIDAS, ENVASADO O EMPAQUETADO DE SÓLIDOS (EMBALAJE CON PLÁSTICO DE BURBUJAS, RECUBRIMIENTO CON PAPEL ALUMINIO, ETCÉTERA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N82920201', 
                    'descripcion' => 'ACTIVIDADES DE ETIQUETADO, ESTAMPADO E IMPRESIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N82920901', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE ENVASADO Y EMPAQUETADO: ACTIVIDADES DE EMPAQUETADO DE ENVÍOS Y ENVOLTURA DE REGALOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N82990101', 
                    'descripcion' => 'ACTIVIDADES DE ELABORACIÓN DE ACTAS TEXTUALES Y REGISTRO EN TAQUIGRAFÍA (ESTENOTIPIA) DE PROCEDIMIENTOS JURÍDICOS EN DIRECTO Y TRANSCRIPCIÓN DE LOS MATERIALES CORRESPONDIENTES, COMO: SERVICIOS DE REDACCIÓN DE ACTAS JUDICIALES O DE REGISTRO EN ESTENOTIPIA, SERVICIOS PÚBLICOS DE ESTENOGRAFÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N82990201', 
                    'descripcion' => 'ACTIVIDADES DE SUBTITULADO SIMULTÁNEO PARA SORDOS EN TIEMPO REAL DE RETRANSMISIONES EN DIRECTO POR TELEVISIÓN, REUNIONES, CONFERENCIAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N82990301', 
                    'descripcion' => 'SERVICIOS DE ORGANIZACIÓN DE LA RECAUDACIÓN DE FONDOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATA, SERVICIOS DE RECUPERACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'N82990901', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE APOYO QUE SE PROPORCIONAN HABITUALMENTE A LAS EMPRESAS Y QUE NO CLASIFICAN EN OTRA PARTE: SERVICIO DE RECOGIDA DE MONEDAS DE PARQUÍMETROS, SERVICIOS DE ANILLADOS Y PLASTIFICADOS, PRECLASIFICACIÓN DE CORREO, IMPRESIÓN DE CÓDIGO DE BARRAS, CODIFICACIÓN DE LA BARRA DE DIRECCIÓN, PROGRAMAS DE FIDELIZACIÓN, SUBASTA POR CUENTA PROPIA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84110101', 
                    'descripcion' => 'DESEMPEÑO DE LAS FUNCIONES EJECUTIVAS Y LEGISLATIVAS DE LOS ÓRGANOS Y ORGANISMOS CENTRALES, REGIONALES Y LOCALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84110201', 
                    'descripcion' => 'ADMINISTRACIÓN Y SUPERVISIÓN DE LOS ASUNTOS FISCALES: APLICACIÓN DE LOS SISTEMAS TRIBUTARIOS, RECAUDACIÓN DE DERECHOS E IMPUESTOS SOBRE BIENES E INVESTIGACIÓN DE CASOS DE EVASIÓN DE IMPUESTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84110202', 
                    'descripcion' => 'ADMINISTRACIÓN Y SUPERVISIÓN DE LOS ASUNTOS FISCALES Y FINANCIEROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84110301', 
                    'descripcion' => 'ADMINISTRACIÓN DE ADUANAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84110401', 
                    'descripcion' => 'EJECUCIÓN PRESUPUESTARIA Y ADMINISTRACIÓN DE FONDOS PÚBLICOS (HACIENDA) Y DE LA DEUDA PÚBLICA: OBTENCIÓN Y RECEPCIÓN DE FONDOS Y FISCALIZACIÓN DE SU DESEMBOLSO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84110501', 
                    'descripcion' => 'APLICACIÓN DE LA POLÍTICA GENERAL DE INVESTIGACIÓN Y DESARROLLO (CIVILES) Y ADMINISTRACIÓN DE LOS FONDOS CORRESPONDIENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84110601', 
                    'descripcion' => 'ADMINISTRACIÓN Y GESTIÓN DE LOS SERVICIOS GENERALES DE PLANIFICACIÓN ECONÓMICA, SOCIAL Y DE ESTADÍSTICA EN LOS DIVERSOS NIVELES DE LA ADMINISTRACIÓN PÚBLICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84110701', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE LA ADMINISTRACION PUBLICA EN GENERAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84121101', 
                    'descripcion' => 'ADMINISTRACIÓN PÚBLICA DE PROGRAMAS DESTINADOS A PROMOVER EL BIENESTAR PERSONAL EN SALUD; ADMINISTRACIÓN DE POLÍTICAS DE INVESTIGACIÓN Y DESARROLLO ADOPTADAS EN ESTE ÁMBITO Y DE LOS FONDOS CORRESPONDIENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84121201', 
                    'descripcion' => 'ADMINISTRACIÓN PÚBLICA DE PROGRAMAS DESTINADOS A PROMOVER EL BIENESTAR PERSONAL EN EDUCACIÓN, CULTURA Y DEPORTE; ADMINISTRACIÓN DE POLÍTICAS DE INVESTIGACIÓN Y DESARROLLO ADOPTADAS EN ESOS ÁMBITOS Y DE LOS FONDOS CORRESPONDIENTES, CONCESIÓN DE BECAS PÚBLICAS A ARTISTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84121301', 
                    'descripcion' => 'ADMINISTRACIÓN PÚBLICA DE PROGRAMAS DESTINADOS A PROMOVER EL BIENESTAR PERSONAL EN ESPARCIMIENTO; ADMINISTRACIÓN DE POLÍTICAS DE INVESTIGACIÓN Y DESARROLLO ADOPTADAS EN ESTE ÁMBITO Y DE LOS FONDOS CORRESPONDIENTES, PATROCINIO DE ACTIVIDADES RECREATIVAS Y CULTURALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84121401', 
                    'descripcion' => 'ADMINISTRACIÓN PÚBLICA DE PROGRAMAS DESTINADOS A PROMOVER EL BIENESTAR PERSONAL EN MEDIO AMBIENTE; ADMINISTRACIÓN DE POLÍTICAS DE INVESTIGACIÓN Y DESARROLLO ADOPTADAS EN ESTE ÁMBITO Y DE LOS FONDOS CORRESPONDIENTES, ADMINISTRACIÓN DE PROGRAMAS DE PROTECCIÓN DEL MEDIO AMBIENTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84121501', 
                    'descripcion' => 'ADMINISTRACIÓN PÚBLICA DE PROGRAMAS DESTINADOS A PROMOVER EL BIENESTAR PERSONAL EN VIVIENDA; ADMINISTRACIÓN DE POLÍTICAS DE INVESTIGACIÓN Y DESARROLLO ADOPTADAS EN ESTE ÁMBITO Y DE LOS FONDOS CORRESPONDIENTES, ADMINISTRACIÓN DE PROGRAMAS DE VIVIENDA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84121601', 
                    'descripcion' => 'ADMINISTRACIÓN PÚBLICA DE PROGRAMAS DESTINADOS A PROMOVER EL BIENESTAR PERSONAL EN SERVICIOS SOCIALES; ADMINISTRACIÓN DE POLÍTICAS DE INVESTIGACIÓN Y DESARROLLO ADOPTADAS EN ESTE ÁMBITO Y DE LOS FONDOS CORRESPONDIENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84121701', 
                    'descripcion' => 'ACTIVIDADES DE ADMINISTRACION DE PROGRAMAS DE ENSEÑANZA PRIMARIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84121702', 
                    'descripcion' => 'ACTIVIDADES DE ADMINISTRACION DE PROGRAMAS DE ENSEÑANZA  SECUNDARIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84121703', 
                    'descripcion' => 'ACTIVIDADES DE ADMINISTRACION DE PROGRAMAS DE ENSEÑANZA POSTSECUNDARIA Y DE PROGRAMAS ESPECIALES DE REEDUCACION PROFESIONAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84121801', 
                    'descripcion' => 'ADMINISTRACIÓN Y FUNCIONAMIENTO DE LOS SERVICIOS DE PERSONAL PARA EL GOBIERNO EN GENERAL: FORMULACIÓN Y APLICACIÓN DE NORMAS DE SELECCIÓN DE PERSONAL, CALIFICACIÓN Y ASCENSOS, DESCRIPCIÓN DE FUNCIONES, CUMPLIMIENTO DE LOS REGLAMENTOS DE PERSONAL, EVALUACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84121901', 
                    'descripcion' => 'ADMINISTRACIÓN Y FUNCIONAMIENTO DE LOS SERVICIOS DE PERSONAL PARA EL GOBIERNO EN GENERAL: FORMULACIÓN Y APLICACIÓN DE NORMAS DE SELECCIÓN DE PERSONAL, CALIFICACIÓN Y ASCENSOS, DESCRIPCIÓN DE FUNCIONES, CUMPLIMIENTO DE LOS REGLAMENTOS DE PERSONAL, EVALUACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84122001', 
                    'descripcion' => 'ADMINISTRACIÓN DE EDIFICIOS DE LA ADMINISTRACIÓN PUBLICA PROPIOS O ARRENDADOS Y ADMINISTRACIÓN DE SERVICIOS DE OFICINAS CENTRALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84122002', 
                    'descripcion' => 'CONSERVACION Y CUSTODIA DE OTROS REGISTROS Y ARCHIVOS PUBLICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84122003', 
                    'descripcion' => 'ADMINISTRACIÓN Y DIRECCIÓN DE LOS SERVICIOS DE SUMINISTRO Y COMPRA CENTRALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84122004', 
                    'descripcion' => 'CONSERVACION Y CUSTODIA DE REGISTROS Y ARCHIVOS PUBLICOS MERCANTILES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84122005', 
                    'descripcion' => 'CONSERVACION Y CUSTODIA DE REGISTROS Y ARCHIVOS PUBLICOS DE LA PROPIEDAD' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84129101', 
                    'descripcion' => 'ACTIVIDADES DE ADMINISTRACIÓN DE PROGRAMA DE SUMINISTRO DE AGUA POTABLE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84129201', 
                    'descripcion' => 'ACTIVIDADES DE ADMINISTRACIÓN DE SERVICIOS DE RECOLECCIÓN Y ELIMINACIÓN DE DESPERDICIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84131101', 
                    'descripcion' => 'ADMINISTRACIÓN Y REGULACIÓN PÚBLICA, INCLUIDA LA CONCESIÓN DE SUBVENCIONES, DE LOS DISTINTOS SECTORES ECONÓMICOS DE LA AGRICULTURA, GANADERÍA, SILVICULTURA Y PESCA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84131201', 
                    'descripcion' => 'ADMINISTRACIÓN Y REGULACIÓN PÚBLICAS, INCLUIDA LA CONCESIÓN DE SUBVENCIONES, DE LOS DISTINTOS SECTORES ECONÓMICOS DE LA ORDENACIÓN DE TIERRAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84131301', 
                    'descripcion' => 'ADMINISTRACIÓN Y REGULACIÓN PÚBLICAS, INCLUIDA LA CONCESIÓN DE SUBVENCIONES, DE LOS DISTINTOS SECTORES ECONÓMICOS DE ENERGÍA Y MINERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84131302', 
                    'descripcion' => 'ADMINISTRACIÓN Y REGULACIÓN PÚBLICAS, INCLUIDAS LAS RELACIONADAS CON LA ENERGÍA ELÉCTRICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84131401', 
                    'descripcion' => 'ADMINISTRACIÓN Y REGULACIÓN PÚBLICAS, INCLUIDA LA CONCESIÓN DE SUBVENCIONES, DE LOS DISTINTOS SECTORES ECONÓMICOS DE INFRAESTRUCTURA, COMO LAS INSTALACIONES DE AGUA POTABLE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84131501', 
                    'descripcion' => 'ADMINISTRACIÓN Y REGULACIÓN PÚBLICAS, INCLUIDA LA CONCESIÓN DE SUBVENCIONES, DE LOS DISTINTOS SECTORES ECONÓMICOS DE TRANSPORTE, COMO SON LOS REFERENTES A CAMINOS Y CARRETERAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84131502', 
                    'descripcion' => 'ADMINISTRACIÓN Y REGULACIÓN PÚBLICAS, INCLUIDA LA CONCESIÓN DE SUBVENCIONES, DE LOS DISTINTOS SECTORES ECONÓMICOS DE TRANSPORTE, COMO SON LOS FERROCARRILES, TRENES URBANOS Y CONSTRUCCION DE INSTALACIONES PARA EL TRANSPORTE AÉREO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84131601', 
                    'descripcion' => 'ADMINISTRACIÓN Y REGULACIÓN PÚBLICAS, INCLUIDA LA CONCESIÓN DE SUBVENCIONES, DE LOS DISTINTOS SECTORES ECONÓMICOS DE COMUNICACIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84131701', 
                    'descripcion' => 'ADMINISTRACIÓN Y REGULACIÓN PÚBLICAS, INCLUIDA LA CONCESIÓN DE SUBVENCIONES, DE LOS DISTINTOS SECTORES ECONÓMICOS DE HOTELES, TURISMO Y RESTAURANTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84131801', 
                    'descripcion' => 'ADMINISTRACIÓN Y REGULACIÓN PÚBLICAS, INCLUIDA LA CONCESIÓN DE SUBVENCIONES, DE LOS DISTINTOS SECTORES ECONÓMICOS DE COMERCIO AL POR MAYOR Y AL POR MENOR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84131802', 
                    'descripcion' => 'ADMINISTRACIÓN Y REGULACIÓN PÚBLICAS, INCLUIDA LA CONCESIÓN DE SUBVENCIONES, CONCESIÓN DE LICENCIAS E INSPECCIÓN RELACIONADAS CON SECTORES COMERCIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84139101', 
                    'descripcion' => 'ADMINISTRACIÓN DE LAS POLÍTICAS DE INVESTIGACIÓN Y DESARROLLO DESTINADAS A MEJORAR LOS RESULTADOS ECONÓMICOS Y DE LOS FONDOS CORRESPONDIENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84139201', 
                    'descripcion' => 'ADMINISTRACIÓN DE LAS CUESTIONES LABORALES DE CARÁCTER GENERAL Y APLICACIÓN DE MEDIDAS DE DESARROLLO REGIONAL, POR EJEMPLO: MEDIDAS TENDIENTES A REDUCIR EL DESEMPLEO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84210101', 
                    'descripcion' => 'ADMINISTRACIÓN Y FUNCIONAMIENTO DEL MINISTERIO DE RELACIONES EXTERIORES DE LAS MISIONES DIPLOMÁTICAS, CONSULARES ACREDITADAS EN EL EXTRANJERO Y ANTE ORGANIZACIONES INTERNACIONALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84210102', 
                    'descripcion' => 'ADMINISTRACIÓN, DIRECCIÓN Y RESPALDO DE SERVICIOS INFORMATIVOS Y CULTURALES QUE SE PRESTAN EN EL EXTRANJERO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84210201', 
                    'descripcion' => 'GESTIÓN DE ASUNTOS RELACIONADOS CON EL COMERCIO EXTERIOR, LA FINANCIACIÓN INTERNACIONAL Y CUESTIONES DE CARÁCTER TÉCNICO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84210301', 
                    'descripcion' => 'SUMINISTRO DE AYUDA A OTROS PAÍSES, SEA O NO CANALIZADO A TRAVÉS DE ORGANISMOS INTERNACIONALES, (PROGRAMAS DE SOCORRO A REFUGIADOS, LUCHA CONTRA EL HAMBRE, ETC.)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84210401', 
                    'descripcion' => 'SUMINISTRO DE ASISTENCIA MILITAR A OTROS PAÍSES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84220101', 
                    'descripcion' => 'ADMINISTRACIÓN, SUPERVISIÓN Y GESTIÓN DE ASUNTOS Y FUERZAS DE DEFENSA MILITAR DEL EJÉRCITO DE TIERRA, MARINA, FUERZA AÉREA Y ESPACIAL COMO: ACTIVIDADES DE FUERZAS DE RESERVA Y AUXILIARES DEL SISTEMA DE DEFENSA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84220102', 
                    'descripcion' => 'ADMINISTRACIÓN, SUPERVISIÓN Y GESTIÓN DE ASUNTOS Y FUERZAS DE DEFENSA MILITAR DEL EJÉRCITO DE TIERRA, MARINA, FUERZA AÉREA Y ESPACIAL COMO: ABASTECIMIENTO DE EQUIPO, ESTRUCTURAS, SUMINISTROS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84220103', 
                    'descripcion' => 'ADMINISTRACIÓN, SUPERVISIÓN Y GESTIÓN DE ASUNTOS Y FUERZAS DE DEFENSA MILITAR DEL EJÉRCITO DE TIERRA, MARINA, FUERZA AÉREA Y ESPACIAL COMO: CTIVIDADES SANITARIAS PARA EL PERSONAL MILITAR EN CAMPAÑA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84220104', 
                    'descripcion' => 'ADMINISTRACIÓN, SUPERVISIÓN Y GESTIÓN DE ASUNTOS Y FUERZAS DE DEFENSA MILITAR; FUERZA AÉREA, MARINA Y EJERCITO: ADMINISTRACIÓN DE PERSONAL MILITAR, FUERZAS AUXILIARES DE RESERVA PARA EL SISTEMA DE DEFENSA Y OTROS DE ÍNDOLE CONEXAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84220201', 
                    'descripcion' => 'ACTIVIDADES DE MANDOS Y FUERZAS DE INGENIERÍA, TRANSPORTE, COMUNICACIONES, INTELIGENCIA, SUMINISTRO DE MATERIALES, PERSONAL Y OTRAS FUERZAS CONEXAS NO DESTINADOS AL COMBATE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84220301', 
                    'descripcion' => 'ACTIVIDADES DE ADMINISTRACIÓN, GESTIÓN Y EL RESPALDO DE FUERZAS DE DEFENSA CIVIL, PRESTACIÓN DE APOYO A LA ELABORACIÓN DE PLANES DE EMERGENCIA Y LA EJECUCIÓN DE MANIOBRAS CON LA PARTICIPACIÓN DE INSTITUCIONES CIVILES Y DE LA POBLACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84220401', 
                    'descripcion' => 'ADMINISTRACIÓN DE POLÍTICAS DE INVESTIGACIÓN Y DESARROLLO RELACIONADAS CON LA DEFENSA Y LOS FONDOS CORRESPONDIENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84230101', 
                    'descripcion' => 'ADMINISTRACIÓN Y DIRECCIÓN DE FUERZAS DE POLICÍA, REGULARES Y AUXILIARES QUE DEPENDEN DE LAS AUTORIDADES PÚBLICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84230102', 
                    'descripcion' => 'FUERZAS DE VIGILANCIA PORTUARIA, FRONTERIZA Y COSTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84230103', 
                    'descripcion' => ' FUERZAS ESPECIALES DE POLICÍA ENTRE CUYAS FUNCIONES SE CUENTAN LA ORDENACIÓN DEL TRÁFICO, EL REGISTRO DE EXTRANJEROS Y EL MANTENIMIENTO DE FICHEROS DE DETENIDOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84230201', 
                    'descripcion' => 'PREVENCIÓN Y EXTINCIÓN DE INCENDIOS: ADMINISTRACIÓN Y FUNCIONAMIENTO DE CUERPOS ORDINARIOS Y AUXILIARES DE BOMBEROS QUE DEPENDEN DE LAS AUTORIDADES PÚBLICAS QUE REALIZAN ACTIVIDADES DE PREVENCIÓN Y EXTINCIÓN DE INCENDIOS, RESCATE DE PERSONAS Y ANIMALES, ASISTENCIA EN DESASTRES CÍVICOS, INUNDACIONES, ACCIDENTES DE TRÁFICO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84230301', 
                    'descripcion' => 'ADMINISTRACIÓN Y FUNCIONAMIENTO DE TRIBUNALES CIVILES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84230302', 
                    'descripcion' => 'ADMINISTRACIÓN Y FUNCIONAMIENTO DE TRIBUNALES ADMINISTRATIVOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84230303', 
                    'descripcion' => 'ADMINISTRACIÓN Y FUNCIONAMIENTO DE TRIBUNALES PENALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84230304', 
                    'descripcion' => 'ADMINISTRACIÓN Y FUNCIONAMIENTO DE TRIBUNALES MILITARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84230305', 
                    'descripcion' => 'ADMINISTRACIÓN Y FUNCIONAMIENTO DE FUNCIONES DE REPRESENTACIÓN JURÍDICA Y ASISTENCIA LETRADA EN NOMBRE DEL SECTOR PÚBLICO Y EN NOMBRE DE TERCEROS, CUANDO HAY FONDOS O SERVICIOS PÚBLICOS PREVISTOS CON ESE OBJETO; EMISIÓN DE FALLOS E INTERPRETACIÓN DE LA LEY Y ARBITRAJE EN PROCEDIMIENTOS CIVILES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84230401', 
                    'descripcion' => 'ADMINISTRACIÓN DE PRISIONES Y PRESTACIÓN DE SERVICIOS CORRECCIONALES, INCLUIDOS LOS DE REHABILITACIÓN, INDEPENDIENTEMENTE DE QUE SU ADMINISTRACIÓN Y GESTIÓN SE ENCOMIENDE A UNIDADES PÚBLICAS O A UNIDADES PRIVADAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84230501', 
                    'descripcion' => 'ACTIVIDADES DE ABASTECIMIENTO DE SUMINISTROS PARA SU UTILIZACIÓN EN SITUACIONES DE EMERGENCIA INTERNA EN TIEMPOS DE PAZ CAUSADAS POR DESASTRES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84300001', 
                    'descripcion' => 'FINANCIACIÓN Y ADMINISTRACIÓN DE LOS PROGRAMAS DE SERVICIOS PÚBLICOS DE SEGURIDAD SOCIAL: REALIZACIÓN DE PAGOS DE TRANSFERENCIA PARA COMPENSAR LA REDUCCIÓN O PERDIDA DE INGRESOS Y PARA COMPENSAR LA INSUFICIENTE CAPACIDAD DE PRODUCIR INGRESOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84300002', 
                    'descripcion' => 'FINANCIACIÓN Y ADMINISTRACIÓN DE LOS PROGRAMAS DE SERVICIOS PÚBLICOS DE SEGURIDAD SOCIAL: SEGUROS DE ENFERMEDAD, CONTRA ACCIDENTES LABORALES Y DE DESEMPLEO, PENSIONES DE JUBILACIÓN, PROGRAMAS QUE CUBREN LA PÉRDIDA DE INGRESOS EN CASOS DE MATERNIDAD, INCAPACIDAD TEMPORAL, VIUDEZ, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'O84300101', 
                    'descripcion' => 'OTROS SERVICIOS PÚBLICOS DE SEGURIDAD SOCIAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85101101', 
                    'descripcion' => 'LA EDUCACIÓN PREPRIMARIA O INICIAL (ES EL PROCESO DE ACOMPAÑAMIENTO AL DESARROLLO INTEGRAL QUE CONSIDERA LOS ASPECTOS COGNITIVOS, AFECTIVO, PSICOMOTRIZ, SOCIAL, DE IDENTIDAD, AUTONOMÍA Y PERTINENCIA A LA COMUNIDAD DISEÑADA PRINCIPALMENTE PARA INTRODUCIR A LOS NIÑOS Y NIÑAS, DESDE LOS TRES AÑOS HASTA LOS CINCO AÑOS DE EDAD EN UN ENTORNO EDUCATIVO DE TIPO ESCOLAR, ES DECIR, SERVIR DE PUENTE ENTRE EL HOGAR Y EL MEDIO ESCOLAR)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85101201', 
                    'descripcion' => 'EDUCACIÓN PREPRIMARIA Ó INICIAL ESPECIAL, PARA ALUMNOS CON DISCAPACIDAD' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85102101', 
                    'descripcion' => 'EDUCACIÓN PRIMARIA (DESARROLLA LAS CAPACIDADES, HABILIDADES, DESTREZAS Y COMPETENCIAS DE LAS NIÑAS, NIÑOS Y ADOLESCENTES, ESTÁ COMPUESTA POR SIETE AÑOS DE ESTUDIOS, COMPRENDE EL IMPARTIR FORMACIÓN ACADÉMICA Y OTRAS TAREAS RELACIONADAS A LOS ESTUDIANTES DE PRIMERO HASTA SÉPTIMO DE BÁSICA, QUE PROPORCIONAN UNA SÓLIDA EDUCACIÓN PARA LECTURA, ESCRITURA Y MATEMÁTICAS, ASÍ COMO UN NIVEL ELEMENTAL DE COMPRENSIÓN DE DISCIPLINAS COMO: HISTORIA, GEOGRAFÍA, CIENCIAS, ETCÉTERA; PUEDE SER PROVISTA EN SALONES DE CLASES O A TRAVÉS DE RADIO, TELEVISIÓN, INTERNET, CORRESPONDENCIA O EN EL HOGAR, INCLUYE LAS ACTIVIDADES DE ESCUELAS UNIDOCENTES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85102201', 
                    'descripcion' => 'EDUCACIÓN PRIMARIA ESPECIAL, PARA ALUMNOS CON DISCAPACIDAD' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85102301', 
                    'descripcion' => 'PROGRAMAS DE ALFABETIZACIÓN PARA ADULTOS EN EL NIVEL PRIMARIO EDUCATIVO. LA EDUCACIÓN PUEDE SER PROVISTA EN SALONES DE CLASES O A TRAVÉS DE RADIO, TELEVISIÓN, INTERNET, CORRESPONDENCIA O EN EL HOGAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85102401', 
                    'descripcion' => 'PROGRAMAS DE INSTRUCCION ELEMENTAL PARA NIÑOS QUE NO TIENEN OPORTUNIDAD DE ASISTIR A LA ESCUELA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85210101', 
                    'descripcion' => 'EDUCACIÓN SECUNDARIA (COMPRENDE SEIS AÑOS DE EDUCACIÓN A CONTINUACIÓN DE LA EDUCACIÓN PRIMARIA, DESDE OCTAVO DE BÁSICA HASTA TERCERO DE BACHILLERATO, CURSANDO UN TRONCO COMÚN DE ASIGNATURAS GENERALES, OPTANDO POR UN BACHILLERATO EN CIENCIAS O TÉCNICO. LA EDUCACIÓN PUEDE SER PROVISTA EN SALONES DE CLASES O A TRAVÉS DE RADIO, TELEVISIÓN, INTERNET, CORRESPONDENCIA O EN EL HOGAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85210201', 
                    'descripcion' => 'EDUCACIÓN EN BACHILLERATOS COMPLEMENTARIOS (FORTALECE LA FORMACIÓN OBTENIDA EN EL BACHILLERATO GENERAL UNIFICADO, ES DE CARÁCTER OPTATIVO Y SU DURACIÓN ES DE UN AÑO ADICIONAL Y PUEDEN SER DEL TIPO: BACHILLERATO TÉCNICO PRODUCTIVO Y BACHILLERATO ARTÍSTICO. LA EDUCACIÓN PUEDE SER PROVISTA EN SALONES DE CLASES O A TRAVÉS DE RADIO, TELEVISIÓN, INTERNET, CORRESPONDENCIA O EN EL HOGAR)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85210301', 
                    'descripcion' => 'EDUCACIÓN ESPECIAL SECUNDARIA PARA ESTUDIANTES DISCAPACITADOS. LA EDUCACIÓN PUEDE SER PROVISTA EN SALONES DE CLASES O A TRAVÉS DE RADIO, TELEVISIÓN, INTERNET, CORRESPONDENCIA O EN EL HOGAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85220101', 
                    'descripcion' => 'ENSEÑANZA TÉCNICA Y PROFESIONAL DE NIVEL INFERIOR AL DE LA ENSEÑANZA SUPERIOR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85220102', 
                    'descripcion' => 'CAPACITACIÓN PARA GUÍAS TURÍSTICOS, COCINEROS Y OTRO PERSONAL DE HOTELES Y RESTAURANTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85220201', 
                    'descripcion' => 'ESCUELAS DE CONDUCIR PARA CHÓFERES PROFESIONALES: DE CAMIONES, BUSES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85220301', 
                    'descripcion' => 'ESCUELAS DE COSMÉTICA Y DE PELUQUERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85220401', 
                    'descripcion' => 'EDUCACIÓN ESPECIAL, ENSEÑANZA DE FORMACIÓN TÉCNICA Y PROFESIONAL PARA ALUMNOS CON DISCAPACIDAD' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85220501', 
                    'descripcion' => 'CAPACITACIÓN EN REPARACIÓN DE COMPUTADORAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85300101', 
                    'descripcion' => 'EDUCACIÓN DE POSTBACHILLERATO Y NIVEL TÉCNICO SUPERIOR, DESTINADO A LA FORMACIÓN Y CAPACITACIÓN PARA LABORES DE CARÁCTER OPERATIVO, CORRESPONDEN A ESTE NIVEL LOS TÍTULOS PROFESIONALES DE TÉCNICO O TECNÓLOGO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85300201', 
                    'descripcion' => 'EDUCACIÓN DE TERCER NIVEL, DESTINADO A LA FORMACIÓN BÁSICA EN UNA DISCIPLINA O A LA CAPACITACIÓN PARA EL EJERCICIO DE UNA PROFESIÓN. CORRESPONDEN A ESTE NIVEL EL GRADO DE LICENCIADO Y LOS TÍTULOS PROFESIONALES UNIVERSITARIOS O POLITÉCNICOS, QUE SON EQUIVALENTES, INCLUIDO LAS ACTIVIDADES DE ESCUELAS DE ARTES INTERPRETATIVAS QUE IMPARTEN ENSEÑANZA SUPERIOR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85300301', 
                    'descripcion' => 'EDUCACIÓN DE CUARTO NIVEL O DE POSGRADO, DESTINADO A LA ESPECIALIZACIÓN CIENTÍFICA O ENTRENAMIENTO PROFESIONAL AVANZADO. CORRESPONDEN A ESTE NIVEL LOS TÍTULOS INTERMEDIOS DE POSTGRADO DE ESPECIALISTA Y DIPLOMA SUPERIOR Y LOS GRADOS DE MAGÍSTER Y DOCTOR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85410101', 
                    'descripcion' => 'ENSEÑANZA EN ADIESTRAMIENTO DEPORTIVO: BÉISBOL, BASKETBALL, VOLLEYBALL, FÚTBOL, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85410201', 
                    'descripcion' => 'ENSEÑANZA DE GIMNASIA, YOGA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85410301', 
                    'descripcion' => 'ENSEÑANZA DE EQUITACIÓN EN ACADEMIAS O ESCUELAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85410401', 
                    'descripcion' => 'ENSEÑANZA DE NATACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85410501', 
                    'descripcion' => 'ENSEÑANZA DE ARTES MARCIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85410901', 
                    'descripcion' => 'OTRO TIPO DE ENSEÑANZA DEPORTIVA Y RECREATIVA COMO: ACTIVIDADES DE ADIESTRAMIENTO EN CAMPAMENTOS DEPORTIVOS, CLASES DE JUEGO DE CARTAS POR EJEMPLO BRIDGE, ACTIVIDADES DE INSTRUCTORES, PROFESORES Y ENTRENADORES DEPORTIVOS, ENSEÑANZA PARA ANIMADORES DEPORTIVOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85420101', 
                    'descripcion' => 'CLASES DE PIANO Y OTRAS ACTIVIDADES DE FORMACIÓN MUSICAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85420201', 
                    'descripcion' => 'ACTIVIDADES DE FORMACIÓN ARTÍSTICA, ESCUELAS DE TEATRO, ESCUELAS DE BELLAS ARTES Y ESCUELAS DE ARTES INTERPRETATIVAS (EXCEPTO LAS ACADÉMICAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85420301', 
                    'descripcion' => 'ESCUELAS Y ACADEMIAS DE BAILE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85420401', 
                    'descripcion' => 'ESCUELAS DE FOTOGRAFÍA (EXCEPTO LAS COMERCIALES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85491101', 
                    'descripcion' => 'ACTIVIDADES DE ENSEÑANZA QUE NO PUEDE ASIGNARSE A UN NIVEL DETERMINADO, INCLUYE LOS PROCESOS DE FORMACIÓN DOCENTE DE CAPACITACIÓN Y PERFECCIONAMIENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85491201', 
                    'descripcion' => 'ACTIVIDADES DE SERVICIOS DE  DEBERES DIRIGIDOS, TUTORÍA ACADÉMICA, PREPARACIÓN PARA EL INGRESO A LA UNIVERSIDAD, CENTROS DE ENSEÑANZA QUE OFRECEN CURSOS DE RECUPERACIÓN Y CURSOS DE REPASO PARA EXÁMENES PROFESIONALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85491301', 
                    'descripcion' => 'ACTIVIDADES DE ENSEÑANZA DE IDIOMAS Y CLASES DE CONVERSACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85491401', 
                    'descripcion' => 'ACTIVIDADES DE ENSEÑANZA DE MÉTODOS DE LECTURA RÁPIDA Y CURSOS DE ORATORIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85491501', 
                    'descripcion' => 'ACTIVIDADES DE FORMACIÓN RELIGIOSA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85491601', 
                    'descripcion' => 'ACTIVIDADES DE CENTROS DE CAPACITACIÓN ARTESANAL: CORTE Y CONFECCIÓN, CARPINTERÍA, TALLADO EN MADERA, MANUALIDADES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85491701', 
                    'descripcion' => 'ACTIVIDADES DE CAPACITACIÓN EN INFORMÁTICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85499101', 
                    'descripcion' => 'ACTIVIDADES DE ESCUELAS DE CONDUCIR QUE NO CONCEDEN CERTIFICADOS NI PERMISOS PROFESIONALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85499201', 
                    'descripcion' => 'ACTIVIDADES DE ESCUELAS DE VUELO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85499301', 
                    'descripcion' => 'ACTIVIDADES DE CAPACITACIÓN DE SOCORRISTAS Y CURSOS DE SUPERVIVENCIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85499401', 
                    'descripcion' => 'OTROS TIPOS DE ENSEÑANZA N.C.P' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85500001', 
                    'descripcion' => 'PRESTACIÓN DE SERVICIOS NO EDUCATIVOS DE APOYO A PROCESOS O SISTEMAS EDUCATIVOS COMO CONSULTORÍA DE EDUCACIÓN, ORIENTACIÓN EDUCATIVA, SERVICIOS DE EXÁMENES Y EVALUACIÓN DE LOS MISMOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'P85500002', 
                    'descripcion' => 'ACTIVIDADES DE ORGANIZACIÓN DE PROGRAMAS DE INTERCAMBIO DE ESTUDIANTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86100101', 
                    'descripcion' => 'ACTIVIDADES A CORTO Y A LARGO PLAZO DE LOS HOSPITALES BÁSICOS Y GENERALES, ES DECIR, ACTIVIDADES MÉDICAS, DE DIAGNÓSTICO Y DE TRATAMIENTO (HOSPITALES: COMUNITARIOS Y REGIONALES, DE ORGANIZACIONES SIN FINES DE LUCRO, UNIVERSITARIOS, DE BASES MILITARES Y DE PRISIONES, DEL MINISTERIO DE GOBIERNO Y POLICÍA, DEL MINISTERIO DE DEFENSA NACIONAL, DE LA JUNTA DE BENEFICENCIA, DEL SEGURO SOCIAL, FISCO MISIONALES)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86100201', 
                    'descripcion' => 'ACTIVIDADES A CORTO Y A LARGO PLAZO DE CLÍNICAS DEL DÍA, BÁSICAS, ODONTOLÓGICAS Y GENERALES, ES DECIR, ACTIVIDADES MÉDICAS, DE DIAGNÓSTICO Y DE TRATAMIENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86100301', 
                    'descripcion' => 'ACTIVIDADES A CORTO Y A LARGO PLAZO DE LOS HOSPITALES ESPECIALIZADOS, ES DECIR, ACTIVIDADES MÉDICAS, DE DIAGNÓSTICO Y DE TRATAMIENTO (HOSPITALES PARA ENFERMOS MENTALES, CENTROS DE REHABILITACIÓN, HOSPITALES PARA ENFERMEDADES INFECCIOSAS, DE MATERNIDAD, SANATORIOS ESPECIALIZADOS, BASES MILITARES, PRISIONES, ETCÉTERA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86100401', 
                    'descripcion' => 'ACTIVIDADES A CORTO Y A LARGO PLAZO DE CLÍNICAS ESPECIALIZADAS, ES DECIR, ACTIVIDADES MÉDICAS, DE DIAGNÓSTICO Y DE TRATAMIENTO (CLÍNICAS PARA ENFERMOS MENTALES, DE REHABILITACIÓN, PARA ENFERMEDADES INFECCIOSAS, DE MATERNIDAD, ETCÉTERA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86100501', 
                    'descripcion' => 'SERVICIOS DE CENTROS DE PLANIFICACIÓN FAMILIAR QUE PROVEE TRATAMIENTOS MÉDICOS, COMO LOS DE ESTERILIZACIÓN Y DE INTERRUPCIÓN DEL EMBARAZO, CON ALOJAMIENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86200101', 
                    'descripcion' => 'CONSULTA Y TRATAMIENTO POR MÉDICOS GENERALES Y ESPECIALISTAS EN CONSULTORIOS PRIVADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86200102', 
                    'descripcion' => 'CONSULTA Y TRATAMIENTO POR MÉDICOS GENERALES Y ESPECIALISTA EN CENTROS MÉDICOS DE LAS DIFERENTES INSTITUCIONES Y A DOMICILIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86200103', 
                    'descripcion' => 'CONSULTA Y TRATAMIENTO POR MÉDICOS GENERALES Y ESPECIALISTAS. ESTAS ACTIVIDADES PUEDEN REALIZARSE EN CONSULTORIOS COLECTIVOS, EN CLÍNICAS AMBULATORIAS, EN CLÍNICAS ANEXAS A EMPRESAS, ESCUELAS, RESIDENCIAS DE ANCIANOS U ORGANIZACIONES SINDICALES O FRATERNALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86200201', 
                    'descripcion' => 'ACTIVIDADES DE ATENCIÓN ODONTOLÓGICA DE CARÁCTER GENERAL O ESPECIALIZADO, POR EJEMPLO, ODONTOLOGÍA, ENDODONCIA Y ODONTOLOGÍA PEDIÁTRICA; ESTOMATOLOGÍA; ORTODONCIA EN CONSULTORIOS PRIVADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86200202', 
                    'descripcion' => 'ACTIVIDADES DE ATENCIÓN ODONTOLÓGICA DE CARÁCTER GENERAL O ESPECIALIZADO, POR EJEMPLO, ODONTOLOGÍA, ENDODONCIA Y ODONTOLOGÍA PEDIÁTRICA; ESTOMATOLOGÍA; ORTODONCIA EN CLINICAS AMBULATORIAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86200203', 
                    'descripcion' => 'ACTIVIDADES DE ATENCIÓN ODONTOLÓGICA DE CARÁCTER GENERAL O ESPECIALIZADO, POR EJEMPLO, ODONTOLOGÍA, ENDODONCIA Y ODONTOLOGÍA PEDIÁTRICA; ESTOMATOLOGÍA; ORTODONCIA EN CENTROS MEDICOS DE INSTITUCIONES ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86200301', 
                    'descripcion' => 'SERVICIOS DE CENTROS DE PLANIFICACIÓN FAMILIAR QUE PROVEE TRATAMIENTOS MÉDICOS, COMO LOS DE ESTERILIZACIÓN Y DE INTERRUPCIÓN DEL EMBARAZO, SIN ALOJAMIENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86200401', 
                    'descripcion' => 'ACTIVIDADES DE ATENCIÓN ODONTOLÓGICA EN SALAS DE OPERACIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86200501', 
                    'descripcion' => 'SERVICIOS DE ASISTENCIA MÉDICA PRIVADA A PACIENTES INTERNOS POR MÉDICOS EXTERNOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86901101', 
                    'descripcion' => 'ACTIVIDADES DE ATENCIÓN DE LA SALUD HUMANA REALIZADAS POR ENFERMEROS, ENFERMERAS Y AUXILIARES DE ENFERMERÍA, QUE NO SE LLEVAN A CABO EN HOSPITALES NI TENGAN LA PARTICIPACIÓN DE MÉDICOS NI DE ODONTÓLOGOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86901201', 
                    'descripcion' => 'ACTIVIDADES DE ATENCIÓN DE LA SALUD HUMANA REALIZADAS POR PERSONAL PARAMÉDICO ESPECIALIZADO QUE NO SE LLEVAN A CABO EN HOSPITALES NI TENGAN LA PARTICIPACIÓN DE MÉDICOS NI DE ODONTÓLOGOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86901301', 
                    'descripcion' => 'ACTIVIDADES DE ATENCIÓN DE LA SALUD HUMANA REALIZADAS POR PERSONAL ESPECIALIZADO EN OPTOMETRÍA Y OFTALMOLOGÍA QUE NO SE LLEVAN A CABO EN HOSPITALES NI TENGAN LA PARTICIPACIÓN DE MÉDICOS NI DE ODONTÓLOGOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86901401', 
                    'descripcion' => 'ACTIVIDADES DE ATENCIÓN DE LA SALUD HUMANA REALIZADAS POR PERSONAL ESPECIALIZADO EN QUIROPRÁCTICA, QUE NO SE LLEVAN A CABO EN HOSPITALES NI TENGAN LA PARTICIPACIÓN DE MÉDICOS NI DE ODONTÓLOGOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86901501', 
                    'descripcion' => 'ACTIVIDADES DE ATENCIÓN DE LA SALUD HUMANA REALIZADAS POR PERSONAL ESPECIALIZADO EN ACUPUNTURA, QUE NO SE LLEVAN A CABO EN HOSPITALES NI TENGAN LA PARTICIPACIÓN DE MÉDICOS NI DE ODONTÓLOGOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86901601', 
                    'descripcion' => 'ACTIVIDADES DE ATENCIÓN DE LA SALUD HUMANA REALIZADAS POR PERSONAL ESPECIALIZADO EN HOMEOPATÍA, QUE NO SE LLEVAN A CABO EN HOSPITALES NI TENGAN LA PARTICIPACIÓN DE MÉDICOS NI DE ODONTÓLOGOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86901701', 
                    'descripcion' => 'ACTIVIDADES DE ATENCIÓN DE LA SALUD HUMANA REALIZADAS POR: PARTERAS,  PERSONAL ESPECIALIZADO EN FISIOTERAPIA, HIDROTERAPIA, MASAJE TERAPÉUTICO, ERGOTERAPIA, LOGOTERAPIA, PODOLOGÍA, ETCÉTERA; QUE NO SE LLEVAN A CABO EN HOSPITALES NI TENGAN LA PARTICIPACIÓN DE MÉDICOS NI DE ODONTÓLOGOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86901801', 
                    'descripcion' => 'ACTIVIDADES DE PERSONAL PARAMÉDICO DE ODONTOLOGÍA,  COMO TERAPEUTAS DENTALES, ENFERMEROS ESCOLARES CON CONOCIMIENTOS DE ODONTOLOGÍA E HIGIENISTAS DENTALES, QUE PUEDEN ATENDER A PACIENTES SIN LA PRESENCIA DEL ODONTÓLOGO PERO SON SUPERVISADOS PERIÓDICAMENTE POR ÉSTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86902101', 
                    'descripcion' => 'ACTIVIDADES DE LABORATORIOS DE RADIOLOGÍA (RAYOS X) Y OTROS CENTROS DE DIAGNÓSTICO POR IMAGEN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86902201', 
                    'descripcion' => 'ACTIVIDADES DE LABORATORIOS CLÍNICOS DE ANÁLISIS DE SANGRE, ORINA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86909101', 
                    'descripcion' => 'TRANSPORTE DE PACIENTES EN AMBULANCIAS CORRIENTES. ESTOS SERVICIOS SE PRESTAN A MENUDO DURANTE UNA SITUACIÓN DE EMERGENCIA MÉDICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86909102', 
                    'descripcion' => 'TRANSPORTE DE PACIENTES EN  AMBULANCIAS AÉREAS. ESTOS SERVICIOS SE PRESTAN A MENUDO DURANTE UNA SITUACIÓN DE EMERGENCIA MÉDICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86909201', 
                    'descripcion' => 'ACTIVIDADES DE BANCO DE SANGRE, DE ESPERMA, DE ÓRGANOS PARA TRANSPLANTES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q86909901', 
                    'descripcion' => 'OTROS SERVICIOS AUXILIARES AL TRATAMIENTO MÉDICO N.C.P. COMO APLICACIÓN DE VACUNAS, MEDICIÓN DE LA PRESIÓN ARTERIAL Y LA CAPACIDAD AUDITIVA, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q87100101', 
                    'descripcion' => 'ACTIVIDADES DE RESIDENCIAS DE ANCIANOS CON ATENCIÓN DE ENFERMERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q87100201', 
                    'descripcion' => 'ACTIVIDADES DE CASAS DE CONVALECENCIA, CLÍNICAS DE REPOSO CON ATENCIÓN DE ENFERMERÍA Y RESIDENCIAS CON CUIDADOS DE ENFERMERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q87100301', 
                    'descripcion' => 'ACTIVIDADES DE CASAS DE SALUD' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q87200101', 
                    'descripcion' => 'SERVICIOS DE ATENCIÓN EN INSTALACIONES PARA EL TRATAMIENTO DEL ALCOHOLISMO Y LA DROGODEPENDENCIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q87200201', 
                    'descripcion' => 'SERVICIOS DE ATENCIÓN EN CASAS DE CONVALECENCIA PSIQUIÁTRICA, SERVICIOS DE ATENCIÓN EN HOGARES RESIDENCIALES COLECTIVOS PARA PERSONAS CON PERTURBACIONES EMOCIONALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q87200202', 
                    'descripcion' => 'SERVICIOS DE ATENCIÓN EN HOGARES DE TRANSICIÓN PARA ENFERMOS MENTALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q87200203', 
                    'descripcion' => 'ACTIVIDADES DE ASISTENCIA SOCIAL PRESTADAS POR HOGARES PARA PERSONAS DISCAPACITADAS FÍSICAMENTE, INCLUSO CIEGOS Y SORDOMUDOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q87200301', 
                    'descripcion' => 'SERVICIOS DE ATENCIÓN EN INSTALACIONES PARA PERSONAS CON RETRASO MENTAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q87300101', 
                    'descripcion' => 'ACTIVIDADES DE ATENCIÓN EN INSTALACIONES RESIDENCIALES CON ASISTENCIA PARA LA VIDA COTIDIANA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q87300201', 
                    'descripcion' => 'ACTIVIDADES DE ATENCIÓN EN HOGARES DE ANCIANOS CON ATENCIÓN MÍNIMA DE ENFERMERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q87300202', 
                    'descripcion' => 'ACTIVIDADES DE ATENCIÓN EN CASAS DE REPOSO SIN ATENCIÓN DE ENFERMERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q87300203', 
                    'descripcion' => 'ACTIVIDADES DE ATENCIÓN EN COMUNIDADES DE JUBILADOS CON ATENCIÓN PERMANENTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q87900101', 
                    'descripcion' => 'ACTIVIDADES DESTINADAS A PROPORCIONAR ASISTENCIA SOCIAL LAS 24 HORAS DEL DÍA A NIÑOS Y A DETERMINADAS CATEGORÍAS DE PERSONAS QUE NO PUEDEN VALERSE PLENAMENTE POR SÍ MISMAS, EN LAS QUE EL TRATAMIENTO MÉDICO O LA ENSEÑANZA NO SON COMPONENTES IMPORTANTES, COMO: ORFANATOS, HOGARES Y ALBERGUES INFANTILES, ALBERGUES TEMPORALES PARA PERSONAS SIN HOGAR. ESTAS ACTIVIDADES PUEDEN SER REALIZADAS POR ORGANIZACIONES PÚBLICAS O PRIVADAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q87900102', 
                    'descripcion' => 'ACTIVIDADES DESTINADAS A PROPORCIONAR ASISTENCIA SOCIAL LAS 24 HORAS DEL DÍA A NIÑOS Y A DETERMINADAS CATEGORÍAS DE PERSONAS QUE NO PUEDEN VALERSE PLENAMENTE POR SÍ MISMAS, EN LAS QUE EL TRATAMIENTO MÉDICO O LA ENSEÑANZA NO SON COMPONENTES IMPORTANTES, EN INSTITUCIONES QUE ATIENDEN A MADRES SOLTERAS Y A SUS HIJOS. ESTAS ACTIVIDADES PUEDEN SER REALIZADAS POR ORGANIZACIONES PÚBLICAS O PRIVADAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q87900201', 
                    'descripcion' => 'ACTIVIDADES DE ATENCIÓN EN HOGARES DE TRANSICIÓN COLECTIVOS PARA PERSONAS CON PROBLEMAS SOCIALES O PERSONALES; COMO CORRECCIONALES PARA JOVENES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q87900202', 
                    'descripcion' => 'ACTIVIDADES DE ATENCIÓN EN HOGARES DE TRANSICIÓN PARA DELINCUENTES Y CAMPAMENTOS DISCIPLINARIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q88100001', 
                    'descripcion' => 'SERVICIOS SOCIALES, DE ASESORAMIENTO, DE BIENESTAR SOCIAL, DE REMISIÓN Y SERVICIOS SIMILARES QUE PRESTAN A PERSONAS CON DISCAPACIDAD, EN SUS DOMICILIOS O EN OTROS LUGARES, ORGANIZACIONES PÚBLICAS O PRIVADAS, ORGANIZACIONES NACIONALES O LOCALES DE AUTOAYUDA Y ESPECIALISTAS EN SERVICIOS DE ASESORAMIENTO COMO VISITAS A ENFERMOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q88100002', 
                    'descripcion' => 'SERVICIOS SOCIALES, DE ASESORAMIENTO, DE BIENESTAR SOCIAL, DE REMISIÓN Y SERVICIOS SIMILARES QUE PRESTAN A PERSONAS DE EDAD, EN SUS DOMICILIOS O EN OTROS LUGARES, ORGANIZACIONES PÚBLICAS O PRIVADAS, ORGANIZACIONES NACIONALES O LOCALES DE AUTOAYUDA Y ESPECIALISTAS EN SERVICIOS DE ASESORAMIENTO COMO VISITAS A ANCIANOS Y ENFERMOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q88100003', 
                    'descripcion' => 'ACTIVIDADES DE ATENCIÓN DIURNA PARA ANCIANOS Y ADULTOS CON DISCAPACIDAD Y ACTIVIDADES DE ADIESTRAMIENTO Y READAPTACIÓN PROFESIONAL PARA PERSONAS CON DISCAPACIDAD, SIEMPRE QUE EL COMPONENTE DE EDUCACIÓN SEA LIMITADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q88900101', 
                    'descripcion' => 'ACTIVIDADES DE GUARDERÍA O ATENCIÓN DIURNA DE NIÑOS, INCLUYENDO EL CUIDADO DIURNO DE NIÑOS CON DISCAPACIDAD' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q88900201', 
                    'descripcion' => 'SERVICIOS DIURNOS PARA PERSONAS SIN HOGAR Y OTROS GRUPOS SOCIALMENTE DESFAVORECIDOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q88900301', 
                    'descripcion' => 'ACTIVIDADES DE BIENESTAR SOCIAL Y DE ORIENTACIÓN PARA NIÑOS Y ADOLESCENTES, ACTIVIDADES DE ADOPCIÓN Y ACTIVIDADES PARA PREVENIR LA CRUELDAD CONTRA LOS NIÑOS Y OTRAS PERSONAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q88900401', 
                    'descripcion' => 'SERVICIOS DE ASESORAMIENTO EN ECONOMÍA DOMÉSTICA, DE ORIENTACIÓN MATRIMONIAL Y FAMILIAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q88900402', 
                    'descripcion' => 'ACTIVIDADES DE REHABILITACIÓN Y HABILITACIÓN PROFESIONAL PARA PERSONAS DESEMPLEADAS, SIEMPRE QUE EL COMPONENTE DE EDUCACIÓN SEA LIMITADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q88900403', 
                    'descripcion' => 'ACTIVIDADES COMUNITARIAS Y VECINALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q88900404', 
                    'descripcion' => 'SERVICIOS DE ASESORAMIENTO EN CUESTIONES CREDITICIAS Y DE DEUDA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q88900405', 
                    'descripcion' => 'ACTIVIDADES DE ASESORAMIENTO Y ORIENTACION A PERSONAS QUE SE ENCUENTRAN EN LIBERTAD BAJO PALABRA O EN LIBERTAD CONDICIONAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q88900501', 
                    'descripcion' => 'ACTIVIDADES DE DETERMINACIÓN DEL DERECHO A RECIBIR PRESTACIONES SOCIALES, SUBSIDIOS DE ALQUILER O CUPONES DE ALIMENTOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q88900901', 
                    'descripcion' => 'ACTIVIDADES DE AYUDA A REFUGIADOS, INMIGRANTES, ETCÉTERA, INCLUIDO EL SUMINISTRO DE ALOJAMIENTO A ESAS PERSONAS A TÍTULO TEMPORAL O POR PERÍODOS PROLONGADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q88900902', 
                    'descripcion' => 'ACTIVIDADES DE AYUDA A VÍCTIMAS DE DESASTRES, ETCÉTERA, INCLUIDO EL SUMINISTRO DE ALOJAMIENTO A ESAS PERSONAS A TÍTULO TEMPORAL O POR PERÍODOS PROLONGADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q88900903', 
                    'descripcion' => 'ACTIVIDADES DE BENEFICENCIA, COMO RECAUDACIÓN DE FONDOS Y OTRAS ACTIVIDADES DE APOYO CON FINES DE ASISTENCIA SOCIAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'Q88901001', 
                    'descripcion' => 'ASISTENCIA PARA PERSONAS INCAPACITADAS O DESEMPLEADAS (SIEMPRE QUE EL COMPONENTE DE EDUCACION SEA LIMITADO)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R90000101', 
                    'descripcion' => 'PRODUCCIÓN DE OBRAS DE TEATRO, CONCIERTOS, ÓPERAS Y ESPECTÁCULOS DE DANZA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R90000102', 
                    'descripcion' => 'ACTIVIDADES ESCÉNICAS COMO LAS ACTIVIDADES DE GRUPOS, CIRCOS O COMPAÑÍAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R90000103', 
                    'descripcion' => 'ACTIVIDADES DE CANTANTES, ORQUESTAS O BANDAS,  INCLUIDO ACTIVIDADES COMPLEMENTARIAS PARA LA PRODUCCIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R90000104', 
                    'descripcion' => 'OTRAS ACTIVIDADES ESCÉNICAS REALIZADAS EN DIRECTO COMO: ACTIVIDADES DE DIRECTORES, PRODUCTORES, DISEÑADORES Y CONSTRUCTORES DE ESCENARIOS, TRAMOYISTAS, MANEJO DE TELONES, TÉCNICOS DE ILUMINACIÓN Y SONIDO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R90000201', 
                    'descripcion' => 'ACTIVIDADES DE ARTISTAS INDIVIDUALES, COMO ESCRITORES, DIRECTORES, ESCENÓGRAFOS, CONSTRUCTORES DE DECORADOS, ACTRICES, ETCÉTERA; ESCRITORES DE TODO TIPO, POR EJEMPLO, OBRAS DE FICCIÓN, DE OBRAS TÉCNICAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R90000202', 
                    'descripcion' => 'ACTIVIDADES DE ARTISTAS INDIVIDUALES, COMO CONFERENCISTAS U ORADORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R90000203', 
                    'descripcion' => 'ACTIVIDADES INDIVIDUALES PRESTADOS POR MÚSICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R90000204', 
                    'descripcion' => 'ACTIVIDADES DE ARTISTAS INDIVIDUALES, COMO ESCULTORES, PINTORES, DIBUJANTES, CARICATURISTAS, GRABADORES, ETCÉTERA, SE INCLUYE LA RESTAURACIÓN DE OBRAS DE ARTE, COMO CUADROS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R90000205', 
                    'descripcion' => 'ACTIVIDADES REALIZADAS POR MODELOS INDEPENDIENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R90000206', 
                    'descripcion' => 'ACTIVIDADES DE CREACION EDICION PRODUCCION Y DIFUSION DE CONTENIDO EN LAS REDES SOCIALES Y OTRAS RELACIONADAS A ACTIVIDADES DE INFLUENCERS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R90000301', 
                    'descripcion' => 'GESTIÓN DE SALAS DE CONCIERTOS, TEATROS Y OTRAS INSTALACIONES SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R90000401', 
                    'descripcion' => 'ACTIVIDADES DE PRODUCTORES O EMPRESARIOS DE ESPECTÁCULOS ARTÍSTICOS EN VIVO, APORTEN O NO ELLOS MISMOS LAS INSTALACIONES CORRESPONDIENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R90000501', 
                    'descripcion' => 'ACTIVIDADES DE PERIODISTAS INDEPENDIENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R91010001', 
                    'descripcion' => 'ACTIVIDADES DE DOCUMENTACIÓN E INFORMACIÓN REALIZADAS POR BIBLIOTECAS DE TODO TIPO, SALAS DE LECTURA, AUDICIÓN Y PROYECCIÓN, ARCHIVOS PÚBLICOS ABIERTOS AL PÚBLICO EN GENERAL O A DETERMINADAS CATEGORÍAS DE PERSONAS, COMO ESTUDIANTES, CIENTÍFICOS, EMPLEADOS DE LA ORGANIZACIÓN A LA QUE PERTENECE LA BIBLIOTECA, Y GESTIÓN DE ARCHIVOS DE LA ADMINISTRACIÓN PÚBLICA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R91010002', 
                    'descripcion' => 'ACTIVIDADES DE ORGANIZACIÓN DE FONDOS BIBLIOGRÁFICOS, CATALOGACIÓN DE COLECCIONES Y PREPARACIÓN DE CATÁLOGOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R91010003', 
                    'descripcion' => 'ACTIVIDADES DE MANTENIMIENTO Y PRÉSTAMO DE LIBROS, MAPAS, REVISTAS, ETCÉTERA; ACTIVIDADES DE BÚSQUEDA PARA ATENDER A SOLICITUDES DE INFORMACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R91010004', 
                    'descripcion' => 'ACTIVIDADES DE MANTENIMIENTO Y PRÉSTAMO DE PELÍCULAS, DISCOS, CINTAS GRABADAS, OBRAS DE ARTE, ETCÉTERA; ACTIVIDADES DE BÚSQUEDA PARA ATENDER A SOLICITUDES DE INFORMACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R91010005', 
                    'descripcion' => 'SERVICIO DE ARCHIVOS FOTOGRÁFICOS Y BANCOS DE IMÁGENES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R91020001', 
                    'descripcion' => 'ACTIVIDADES DE MUSEOS DE ARTE, ORFEBRERÍA, MUEBLES, TRAJES,  CERÁMICA, PLATERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R91020002', 
                    'descripcion' => 'ACTIVIDADES DE MUSEOS DE HISTORIA NATURAL Y DE CIENCIAS, MUSEOS TECNOLÓGICOS E HISTÓRICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R91020003', 
                    'descripcion' => 'ACTIVIDADES DE MUSEOS MILITARES Y AL AIRE LIBRE; SE INCLUYE LA GESTIÓN DE LUGARES Y EDIFICIOS HISTÓRICOS Y OTROS MUSEOS ESPECIALIZADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R91030101', 
                    'descripcion' => 'GESTIÓN DE JARDINES BOTÁNICOS Y ZOOLÓGICOS, INCLUIDOS ZOOLÓGICOS INFANTILES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R91030201', 
                    'descripcion' => 'GESTIÓN DE RESERVAS NATURALES, INCLUIDAS LAS ACTIVIDADES DE PRESERVACIÓN DE LA FLORA Y FAUNA SILVESTRES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R92000101', 
                    'descripcion' => 'VENTA DE BOLETOS DE LOTERÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R92000201', 
                    'descripcion' => 'GESTIÓN (EXPLOTACIÓN) DE MÁQUINAS DE JUEGOS DE AZAR ACCIONADAS CON MONEDAS Y EXPLOTACIÓN DE CASINOS, INCLUIDOS CASINOS FLOTANTES, BILLARES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R92000301', 
                    'descripcion' => 'GESTIÓN DE SITIOS DE INTERNET DEDICADOS A LOS JUEGOS DE AZAR VIRTUALES, VIDEOJUEGOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R92000302', 
                    'descripcion' => 'GESTION DE SITIOS DE INTERNET DEDICADOS A LOS PRONOSTICOS DEPORTIVOS ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R92000401', 
                    'descripcion' => 'APUESTAS SOBRE CARRERAS DE CABALLOS EN EL PROPIO HIPÓDROMO Y FUERA DEL HIPÓDROMO Y OTROS SERVICIOS DE APUESTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93110101', 
                    'descripcion' => 'EXPLOTACIÓN DE INSTALACIONES PARA ACTIVIDADES DEPORTIVAS BAJO TECHO O AL AIRE LIBRE (ABIERTAS, CERRADAS O TECHADAS, CON ASIENTOS PARA ESPECTADORES): CAMPOS Y ESTADIOS DE FÚTBOL, HOCKEY, BÉISBOL, ESTADIOS DE ATLETISMO, PISCINAS, CAMPOS DE GOLF, CIRCUITOS DE CARRERAS DE AUTOMÓVILES, CANÓDROMOS, HIPÓDROMOS, PISTAS Y ESTADIOS PARA DEPORTES DE INVIERNO Y PISTAS DE HOCKEY SOBRE HIELO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93110201', 
                    'descripcion' => 'EXPLOTACIÓN DE INSTALACIONES PARA ACTIVIDADES DEPORTIVAS BAJO TECHO O AL AIRE LIBRE (ABIERTAS, CERRADAS O TECHADAS, CON ASIENTOS O SIN ELLOS PARA ESPECTADORES): PABELLONES DE BOXEO Y GIMNASIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93110301', 
                    'descripcion' => 'ORGANIZACIÓN Y GESTIÓN DE COMPETENCIAS DEPORTIVAS AL AIRE LIBRE O BAJO TECHO CON PARTICIPACIÓN DE DEPORTISTAS PROFESIONALES O AFICIONADOS, POR PARTE DE ORGANIZACIONES CON INSTALACIONES PROPIAS. SE INCLUYEN LA GESTIÓN DE ESAS INSTALACIONES Y LA DOTACIÓN DEL PERSONAL NECESARIO PARA SU FUNCIONAMIENTO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93110401', 
                    'descripcion' => 'EXPLOTACIÓN DE INSTALACIONES PARA ACTIVIDADES DEPORTIVAS BAJO TECHO O AL AIRE LIBRE (ABIERTAS, CERRADAS O TECHADAS, CON ASIENTOS O SIN ELLOS PARA ESPECTADORES): BOLERAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93120001', 
                    'descripcion' => 'ACTIVIDADES DE CLUBES DEPORTIVOS PROFESIONALES, SEMIPROFESIONALES O DE AFICIONADOS QUE OFRECEN A SUS MIEMBROS LA OPORTUNIDAD DE PARTICIPAR EN ACTIVIDADES DEPORTIVAS, SE INCLUYEN LAS SIGUIENTES ACTIVIDADES: CLUBES DE FÚTBOL, CLUBES DE BOLOS, CLUBES DE NATACIÓN, CLUBES DE GOLF, CLUBES DE BOXEO, CLUBES DE FÍSICO CULTURISMO, CLUBES DE DEPORTES DE INVIERNO, CLUBES DE AJEDREZ, CLUBES DE ATLETISMO, CLUBES DE TIRO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93190101', 
                    'descripcion' => 'ACTIVIDADES DE PRODUCTORES PROMOTORES Y ACTIVIDADES RELACIONADAS CON LA PROMOCIÓN DE COMPETENCIAS DEPORTIVAS, CON O SIN INSTALACIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93190201', 
                    'descripcion' => 'ACTIVIDADES POR CUENTA PROPIA DE DEPORTISTAS Y ATLETAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93190202', 
                    'descripcion' => 'ACTIVIDADES POR CUENTA PROPIA DE ÁRBITROS, JUECES, CRONOMETRADORES, PROFESORES, ENTRENADORES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93190301', 
                    'descripcion' => 'ACTIVIDADES DE LAS LIGAS DEPORTIVAS Y DE ÓRGANOS REGULADORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93190401', 
                    'descripcion' => 'ACTIVIDADES DE LOS GUÍAS DE MONTAÑA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93190501', 
                    'descripcion' => 'ACTIVIDADES RELACIONADAS CON CARRERAS DE CABALLOS Y GALGOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93190502', 
                    'descripcion' => 'ACTIVIDADES RELACIONADAS CON AUTOMÓVILES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93190601', 
                    'descripcion' => 'GESTIÓN DE RESERVAS Y ACTIVIDADES DE APOYO PARA LA CAZA Y PESCA DEPORTIVA O RECREATIVA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93210001', 
                    'descripcion' => 'ACTIVIDADES DE PARQUES DE ATRACCIÓN Y PARQUES TEMÁTICOS, INCLUIDA LA EXPLOTACIÓN DE DIVERSAS ATRACCIONES MECÁNICAS Y ACUÁTICAS, JUEGOS, ESPECTÁCULOS, EXPOSICIONES TEMÁTICAS Y LUGARES DE PICNICS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93210002', 
                    'descripcion' => 'ACTIVIDADES DE ESPECTACULOS DE RODEO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93210003', 
                    'descripcion' => 'CONTRATACIÓN DE ACTORES Y ACTRICES PARA OBRAS CINEMATOGRÁFICAS DE TELEVISIÓN O DE TEATRO A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93210004', 
                    'descripcion' => 'AGENCIAS DE CONTRATACIÓN DE ESPECTÁCULOS TEATRALES O DE OTROS TIPOS DE ESPECTÁCULOS RECREATIVOS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93210005', 
                    'descripcion' => 'SERVICIOS DE GRABACIÓN DE SONIDOS EN DISCOS GRAMOFÓNICOS O EN CINTAS MAGNETOFÓNICAS A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93290101', 
                    'descripcion' => 'ACTIVIDADES DE PARQUES RECREATIVOS Y PLAYAS, INCLUIDO EL ALQUILER DE CASETAS, CASILLEROS, SILLAS, HAMACAS; LA GESTIÓN DE INSTALACIONES DE TRANSPORTE RECREATIVO; POR EJEMPLO, PUERTOS DEPORTIVOS, Y EL ALQUILER DE EQUIPO DE ESPARCIMIENTO Y RECREO COMO PARTE INTEGRAL DE LOS SERVICIOS DE ESPARCIMIENTO, BANANAS, LANCHAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93290201', 
                    'descripcion' => 'ACTIVIDADES DE EXPLOTACIÓN DE FERIAS Y EXPOSICIONES DE CARÁCTER RECREATIVO, INCLUIDO LA EXPLOTACIÓN DE JUEGOS ACCIONADOS CON MONEDAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93290301', 
                    'descripcion' => 'ACTIVIDADES DE EXPLOTACIÓN DE PISTAS DE BAILE INCLUYE KARAOKES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93290302', 
                    'descripcion' => 'ACTIVIDADES DE EXPLOTACIÓN DE DISCOTECAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93290401', 
                    'descripcion' => 'ACTIVIDADES DE PRODUCTORES O EMPRESARIOS DE ESPECTÁCULOS EN VIVO DISTINTOS DE LOS ARTÍSTICOS O DEPORTIVOS, APORTEN O NO ELLOS MISMOS LAS INSTALACIONES CORRESPONDIENTES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'R93290901', 
                    'descripcion' => 'OTRAS ACTIVIDADES DE ESPARCIMIENTO Y RECREATIVAS (EXCEPTO LAS DE PARQUES DE ATRACCIONES Y PARQUES TEMÁTICOS) NO CLASIFICADAS EN OTRA PARTE, INCLUYE LA GESTIÓN DE ESTACIONES DE ESQUÍ, GALLERAS, PLAZAS DE TOROS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94110001', 
                    'descripcion' => 'ACTIVIDADES DE ORGANIZACIONES CUYOS MIEMBROS SE INTERESAN PRINCIPALMENTE POR EL DESARROLLO Y LA PROSPERIDAD DE LAS EMPRESAS DE UN DETERMINADO SECTOR EMPRESARIAL O COMERCIAL INCLUIDO EL SECTOR AGROPECUARIO, O EN LA SITUACIÓN Y EL CRECIMIENTO ECONÓMICO DE UNA DETERMINADA ZONA GEOGRÁFICA O SUBDIVISIÓN POLÍTICA, INDEPENDIENTEMENTE DE LA RAMA DE ACTIVIDAD Y ACTIVIDADES DE CÁMARAS DE COMERCIO, GREMIOS Y ORGANIZACIONES SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94110002', 
                    'descripcion' => 'ACTIVIDADES DE FEDERACIONES EMPRESARIALES Y PATRONALES ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94110003', 
                    'descripcion' => ' DIFUSIÓN DE LA INFORMACIÓN, ESTABLECIMIENTO Y FISCALIZACIÓN DEL CUMPLIMIENTO DE NORMAS PROFESIONALES, REPRESENTACIÓN ANTE ORGANISMOS PÚBLICOS, RELACIONES PÚBLICAS Y NEGOCIACIONES LABORALES DE LAS ASOCIACIONES EMPRESARIALES Y DE EMPLEADORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94110004', 
                    'descripcion' => 'ACTIVIDADES DE CAMARAS DE COMERCIO, GREMIOS Y ORGANIZACIONES SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94120001', 
                    'descripcion' => 'ACTIVIDADES DE LAS ORGANIZACIONES CUYOS MIEMBROS ESTÁN INTERESADOS PRINCIPALMENTE EN UNA DISCIPLINA CIENTÍFICA, PRÁCTICA PROFESIONAL O ESFERA TÉCNICA CONCRETA, COMO: COLEGIOS DE MÉDICOS, ABOGADOS, CONTABLES, INGENIEROS, ARQUITECTOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94120002', 
                    'descripcion' => 'ACTIVIDADES DE ASOCIACIONES DE ESPECIALISTAS EN EL CAMPO CIENTÍFICO, ACADÉMICO O CULTURAL, COMO SOCIEDADES CIENTÍFICAS, ASOCIACIONES DE ESCRITORES, PINTORES, ARTISTAS DE DIVERSOS TIPOS, PERIODISTAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94120003', 
                    'descripcion' => 'ESTABLECIMIENTO Y FISCALIZACIÓN DEL CUMPLIMIENTO DE NORMAS PROFESIONALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94120004', 
                    'descripcion' => 'DIFUSIÓN DE INFORMACIÓN, REPRESENTACIÓN ANTE ORGANISMOS PÚBLICOS Y RELACIONES PÚBLICAS DE LAS ASOCIACIONES PROFESIONALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94200001', 
                    'descripcion' => 'DEFENSA DE LOS INTERESES DE LOS SINDICATOS Y DE SUS AFILIADOS; ACTIVIDADES DE ASOCIACIONES CUYOS AFILIADOS SON EMPLEADOS INTERESADOS PRINCIPALMENTE EN DAR A CONOCER SUS OPINIONES SOBRE LA SITUACIÓN LABORAL Y SALARIAL Y EN TOMAR MEDIDAS CONCERTADAS POR CONDUCTO DE SU ORGANIZACIÓN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94200002', 
                    'descripcion' => 'ACTIVIDADES DE SINDICATOS DE EMPRESAS, SINDICATOS CON FILIALES Y ORGANIZACIONES SINDICALES INTEGRADAS POR SINDICATOS AFILIADOS Y CONSTITUIDAS EN FUNCIÓN DEL OFICIO DE SUS MIEMBROS O EN FUNCIÓN DE CRITERIOS GEOGRÁFICOS, ESTRUCTURALES O DE OTRA ÍNDOLE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94910101', 
                    'descripcion' => 'ACTIVIDADES DE LAS ORGANIZACIONES RELIGIOSAS O DE PARTICULARES QUE PRESTAN SERVICIOS DIRECTAMENTE A LOS FIELES EN IGLESIAS, MEZQUITAS, TEMPLOS, SINAGOGAS Y OTROS LUGARES DE CULTO Y SERVICIOS RELIGIOSOS DE HONRAS FÚNEBRES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94910201', 
                    'descripcion' => 'ACTIVIDADES DE MONASTERIOS Y CONVENTOS, ACTIVIDADES DE RETIRO RELIGIOSO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94920001', 
                    'descripcion' => 'ACTIVIDADES DE ORGANIZACIONES POLÍTICAS Y ORGANIZACIONES AUXILIARES: ORGANIZACIONES JUVENILES VINCULADAS A UN PARTIDO POLÍTICO, CUYA FINALIDAD ES INFLUIR EN LOS PROCESOS DE ADOPCIÓN DE DECISIONES DE LOS ÓRGANOS PÚBLICOS COLOCANDO EN PUESTOS POLÍTICOS A MIEMBROS Y SIMPATIZANTES DEL PARTIDO, Y REALIZAN ACTIVIDADES DE INFORMACIÓN, RELACIONES PÚBLICAS, RECAUDACIÓN DE FONDOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94990101', 
                    'descripcion' => 'ACTIVIDADES DE ORGANIZACIONES NO AFILIADAS DIRECTAMENTE A UN PARTIDO POLÍTICO QUE PROMUEVEN UNA CAUSA O CUESTIÓN PÚBLICA MEDIANTE CAMPAÑAS DE EDUCACIÓN DEL PÚBLICO, INFLUENCIA POLÍTICA, RECAUDACIÓN DE FONDOS, ETCÉTERA; COMO INICIATIVAS CIUDADANAS Y MOVIMIENTOS DE PROTESTA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94990102', 
                    'descripcion' => 'ACTIVIDADES DE MOVIMIENTOS AMBIENTALISTAS O ECOLOGISTA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94990103', 
                    'descripcion' => 'ACTIVIDADES DE ORGANIZACIONES DE APOYO A SERVICIOS COMUNITARIOS Y EDUCATIVOS N.C.P' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94990104', 
                    'descripcion' => 'ACTIVIDADES DE ORGANIZACIONES PARA LA PROTECCIÓN Y DEL ADELANTO DE GRUPOS ESPECIALES; POR EJEMPLO, GRUPOS ÉTNICOS Y MINORITARIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94990105', 
                    'descripcion' => 'ACTIVIDADES DE ASOCIACIONES CON FINES PATRIÓTICOS, INCLUIDAS ASOCIACIONES DE VETERANOS DE GUERRA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94990201', 
                    'descripcion' => 'ACTIVIDADES DE ASOCIACIONES DE CONSUMIDORES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94990301', 
                    'descripcion' => 'ACTIVIDADES DE ASOCIACIONES DE AUTOMOVILISTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94990401', 
                    'descripcion' => 'ACTIVIDADES DE ASOCIACIONES QUE FACILITAN EL CONTACTO CON OTRAS PERSONAS CON INTERESES SIMILARES, COMO CLUBES ROTARIOS, ETCETERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94990402', 
                    'descripcion' => 'ACTIVIDADES DE ASOCIACIONES QUE FACILITAN EL CONTACTO CON OTRAS PERSONAS CON INTERESES SIMILARES, COMO LOGIAS MASÓNICAS, ASOCIACIONES CRISTIANAS O HEBREAS DE JOVENES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94990501', 
                    'descripcion' => 'ACTIVIDADES DE ASOCIACIONES DE JÓVENES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94990502', 
                    'descripcion' => 'ACTIVIDADES DE CLUBES Y ORGANIZACIONES FRATERNALES DE ESTUDIANTES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94990503', 
                    'descripcion' => 'ACTIVIDADES DE ASOCIACIONES QUE PROMUEVEN ACTIVIDADES CULTURALES O RECREATIVAS O REÚNEN A PERSONAS QUE COMPARTEN UNA AFICIÓN (DIFERENTE DE UN DEPORTE O JUEGO), COMO CLUBES DE POESÍA, LITERARIOS O DE LIBROS, CLUBES DE HISTORIA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94990504', 
                    'descripcion' => 'ACTIVIDADES DE ASOCIACIONES QUE PROMUEVEN ACTIVIDADES CULTURALES O RECREATIVAS O REÚNEN A PERSONAS QUE COMPARTEN UNA AFICIÓN (DIFERENTE DE UN DEPORTE O JUEGO), COMO CLUBES DE JARDINERÍA. ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94990505', 
                    'descripcion' => 'ACTIVIDADES DE ASOCIACIONES QUE PROMUEVEN ACTIVIDADES CULTURALES O RECREATIVAS O REÚNEN A PERSONAS QUE COMPARTEN UNA AFICIÓN (DIFERENTE DE UN DEPORTE O JUEGO) CLUBES DE CINE Y FOTOGRAFÍA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94990506', 
                    'descripcion' => 'ACTIVIDADES DE ASOCIACIONES QUE PROMUEVEN ACTIVIDADES CULTURALES O RECREATIVAS O REÚNEN A PERSONAS QUE COMPARTEN UNA AFICIÓN(DIFERENTE DE UN DEPORTE O JUEGO), CLUBES MUSICALES Y ARTÍSTICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94990507', 
                    'descripcion' => 'ACTIVIDADES DE ASOCIACIONES QUE PROMUEVEN ACTIVIDADES CULTURALES O RECREATIVAS O REÚNEN A PERSONAS QUE COMPARTEN UNA AFICIÓN (DIFERENTE DE UN DEPORTE O JUEGO), CLUBES DE ARTESANÍA Y DE COLECCIONISTAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94990508', 
                    'descripcion' => 'ACTIVIDADES DE ASOCIACIONES QUE PROMUEVEN ACTIVIDADES CULTURALES O RECREATIVAS O REÚNEN A PERSONAS QUE COMPARTEN UNA AFICIÓN (DIFERENTE DE UN DEPORTE O JUEGO), CLUBES SOCIALES, CLUBES DE CARNAVAL, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S94990601', 
                    'descripcion' => 'ACTIVIDADES DE CONCESIÓN DE DONACIONES REALIZADAS POR ASOCIACIONES U OTRAS ORGANIZACIONES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S95110101', 
                    'descripcion' => 'REPARACIÓN Y MANTENIMIENTO DE: COMPUTADORAS DE ESCRITORIO, COMPUTADORAS PORTÁTILES, SERVIDORES INFORMÁTICOS, COMPUTADORAS DE MANO (ASISTENTES DIGITALES PERSONALES), UNIDADES DE DISCO MAGNÉTICO, UNIDADES DE MEMORIA USB Y OTROS DISPOSITIVOS DE ALMACENAMIENTO; UNIDADES DE DISCO ÓPTICO (CD-RW, CD-ROM, DVD-ROM, DVD-RW), MÓDEMS INTERNOS Y EXTERNOS, IMPRESORAS, PANTALLAS, TECLADOS, RATONES, PALANCAS DE MANDO Y BOLAS RODANTES, PROYECTORES INFORMÁTICOS, ESCÁNERES, INCLUIDOS LECTORES DE CÓDIGO DE BARRAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S95110901', 
                    'descripcion' => 'REPARACIÓN Y MANTENIMIENTO DE OTRAS TERMINALES INFORMÁTICAS ESPECIALIZADAS, LECTORES DE TARJETAS INTELIGENTES, CASCOS DE REALIDAD VIRTUAL, TERMINALES INFORMÁTICAS, COMO MONEDEROS AUTOMÁTICOS Y TERMINALES DE PUNTO DE VENTA NO ACCIONADAS MECÁNICAMENTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S95120101', 
                    'descripcion' => 'REPARACIÓN Y MANTENIMIENTO DE TELÉFONOS INALÁMBRICOS, TELÉFONOS CELULARES Y APARATOS DE FAX' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S95120201', 
                    'descripcion' => 'REPARACIÓN Y MANTENIMIENTO DE EMISORES-RECEPTORES DE RADIO, CÁMARAS DE TELEVISIÓN Y DE VIDEO DE USO COMERCIAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S95120901', 
                    'descripcion' => 'REPARACIÓN Y MANTENIMIENTO DE OTRO TIPO DE EQUIPO DE COMUNICACIONES: EQUIPO DE TRANSMISIÓN DE COMUNICACIONES (POR EJEMPLO, ENRUTADORES, PUENTES, MÓDEMS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S95210001', 
                    'descripcion' => 'REPARACIÓN Y MANTENIMIENTO DE APARATOS ELECTRÓNICOS DE USO DOMÉSTICO: APARATOS DE TELEVISIÓN Y DE RADIO, GRABADORAS DE VIDEO (VCR), REPRODUCTORES DE CD Y CÁMARAS DE VIDEO PARA USO FAMILIAR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S95220101', 
                    'descripcion' => 'REPARACIÓN Y MANTENIMIENTO DE APARATOS DE USO DOMÉSTICO, COMO REFRIGERADORES, COCINAS, LAVADORAS, SECADORES DE ROPA, APARATOS DE AIRE ACONDICIONADO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S95220201', 
                    'descripcion' => 'REPARACIÓN Y MANTENIMIENTO DE EQUIPO DOMÉSTICO Y DE JARDINERÍA, COMO SEGADORAS DE CÉSPED, BORDEADORES, SOPLANTES PARA NIEVE Y PARA HOJAS, CORTASETOS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S95230101', 
                    'descripcion' => 'REPARACIÓN Y MANTENIMIENTO DE CALZADO: ZAPATOS, BOTAS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S95230201', 
                    'descripcion' => 'REPARACIÓN Y MANTENIMIENTO DE ARTÍCULOS DE CUERO, MALETAS Y ARTÍCULOS SIMILARES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S95240101', 
                    'descripcion' => 'RETAPIZADO Y RESTAURACIÓN DE MUEBLES Y ACCESORIOS DOMÉSTICOS, INCLUIDOS MUEBLES DE OFICINA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S95240102', 
                    'descripcion' => 'RESTAURACIÓN DE MUEBLES Y ACCESORIOS DOMÉSTICOS, INCLUIDOS MUEBLES DE OFICINA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S95240201', 
                    'descripcion' => 'MONTAJE DE MUEBLES NO EMPOTRADOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S95290101', 
                    'descripcion' => 'REPARACIÓN DE BICICLETAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S95290201', 
                    'descripcion' => 'REPARACIÓN Y ARREGLO DE PRENDAS DE VESTIR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S95290301', 
                    'descripcion' => 'REPARACIÓN Y ARREGLO DE JOYAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S95290302', 
                    'descripcion' => 'REPARACIÓN DE RELOJES DE PULSERA Y DE PARED Y DE SUS PARTES, COMO CAJAS Y BASTIDORES DE TODOS LOS MATERIALES; MECANISMOS, CRONÓMETROS, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S95290401', 
                    'descripcion' => 'REPARACIÓN DE INSTRUMENTOS MUSICALES Y AFINACIÓN DE PIANOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S95290402', 
                    'descripcion' => 'AFINACIÓN DE PIANOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S95290901', 
                    'descripcion' => 'REPARACIÓN DE LIBROS, JUGUETES, ARTÍCULOS SIMILARES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S95290902', 
                    'descripcion' => 'REPARACIÓN DE ARTÍCULOS DEPORTIVOS (EXCEPTO ARMAS DEPORTIVAS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96010101', 
                    'descripcion' => 'LAVADO Y LIMPIEZA EN SECO, PLANCHADO, ETCÉTERA, DE TODO TIPO DE PRENDAS DE VESTIR (INCLUSO DE PIEL) Y DE PRODUCTOS TEXTILES QUE SE REALIZAN CON EQUIPO MECÁNICO, A MANO O EN MÁQUINAS ACCIONADAS CON MONEDAS PARA EL PÚBLICO EN GENERAL O PARA CLIENTES INDUSTRIALES O COMERCIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96010102', 
                    'descripcion' => 'ACTIVIDADES DE REPARACIÓN Y ARREGLOS MENORES DE PRENDAS DE VESTIR Y OTROS ARTÍCULOS TEXTILES, SI SE REALIZAN EN COMBINACIÓN CON LAS DE LIMPIEZA, RECOGIDA Y ENTREGA DE ROPA POR LAS LAVANDERÍAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96010201', 
                    'descripcion' => 'LAVADO DE ALFOMBRAS Y TAPICES CON CHAMPÚ, SE REALICEN O NO EN EL LOCAL O LA RESIDENCIA DEL CLIENTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96010202', 
                    'descripcion' => 'LIMPIEZA DE CORTINAS Y COLGADURAS, SE REALICEN O NO EN EL LOCAL O LA RESIDENCIA DEL CLIENTE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96010301', 
                    'descripcion' => 'SUMINISTRO DE ROPA BLANCA, UNIFORMES DE TRABAJO Y ARTÍCULOS SIMILARES POR LAS LAVANDERÍAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96010302', 
                    'descripcion' => 'SUMINISTRO DE PAÑALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96010401', 
                    'descripcion' => 'ACTIVIDADES DE LAVADO Y LIMPIEZA DE PRENDAS DE TELA O PIEL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96020001', 
                    'descripcion' => 'ACTIVIDADES DE LAVADO, CORTE, RECORTE, PEINADO, TEÑIDO, COLORACIÓN, ONDULACIÓN Y ALISADO DEL CABELLO Y OTRAS ACTIVIDADES SIMILARES PARA HOMBRES Y MUJERES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96020002', 
                    'descripcion' => 'ACTIVIDADES DE AFEITADO Y RECORTE DE LA BARBA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96020003', 
                    'descripcion' => 'ACTIVIDADES DE MASAJES FACIALES, MANICURA Y PEDICURA, TATUAJES, MAQUILLAJE, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96030101', 
                    'descripcion' => 'ACTIVIDADES DE SEPULTURA E INCINERACIÓN DE CADÁVERES HUMANOS O ANIMALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96030102', 
                    'descripcion' => 'PRESTACIÓN DE SERVICIOS DE INHUMACIÓN Y CREMACIÓN, PREPARACIÓN DE LOS DESPOJOS PARA SU INHUMACIÓN O CREMACIÓN Y SERVICIOS DE EMBALSAMIENTO Y OTROS SERVICIOS DE POMPAS FÚNEBRES. ' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96030103', 
                    'descripcion' => 'ALQUILER DE LOCALES ESPECIALES EN FUNERARIAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96030201', 
                    'descripcion' => 'ACTIVIDADES DE ALQUILER Y VENTA DE TUMBAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96030202', 
                    'descripcion' => 'ACTIVIDADES DE MANTENIMIENTO DE TUMBAS Y MAUSOLEOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96090101', 
                    'descripcion' => 'ACTIVIDADES DE BAÑOS TURCOS, SAUNAS, BAÑOS DE VAPOR Y SOLARIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96090102', 
                    'descripcion' => ' ACTIVIDADES DE CENTROS DE SPA, SALONES DE ADELGAZAMIENTO, SALONES DE MASAJE' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96090103', 
                    'descripcion' => ' ACTIVIDADES DE BAÑOS PÚBLICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96090104', 
                    'descripcion' => 'ACTIVIDADES DE SOLARIOS  Y BALNEARIOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96090201', 
                    'descripcion' => 'ACTIVIDADES DE ASTROLOGÍA Y ESPIRITISMO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96090301', 
                    'descripcion' => 'ACTIVIDADES DE CLUBES NOCTURNOS (NIGHT CLUBS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96090401', 
                    'descripcion' => 'ACTIVIDADES DE RELACIÓN SOCIAL, COMO LAS AGENCIAS QUE SE ENCARGAN DE LA CONTRATACIÓN DE ACOMPAÑANTES O PONER EN CONTACTO ENTRE SÍ A PERSONAS QUE BUSCAN COMPAÑÍA O AMISTAD' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96090402', 
                    'descripcion' => ' ACTIVIDADES DE AGENCIAS MATRIMONIALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96090501', 
                    'descripcion' => 'ACTIVIDADES DE SERVICIOS PARA ANIMALES DOMÉSTICOS, COMO LAS RESIDENCIAS Y PELUQUERÍAS PARA ANIMALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96090502', 
                    'descripcion' => 'ACTIVIDADES DE SERVICIOS PARA ANIMALES DOMÉSTICOS, COMO PASEO Y ADIESTRAMIENTO DE ANIMALES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96090601', 
                    'descripcion' => 'ACTIVIDADES DE ORGANIZACIONES GENEALÓGICAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96090701', 
                    'descripcion' => 'ACTIVIDADES DE LIMPIABOTAS (BETUNEROS)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96090702', 
                    'descripcion' => 'ACTIVIDADES DE PORTEADORES DE MALETAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96090703', 
                    'descripcion' => 'ACTIVIDADES DE PERSONAS ENCARGADAS DE ESTACIONAR VEHÍCULOS ENTRE OTRAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96090704', 
                    'descripcion' => 'ACTIVIDADES DE ASISTENTES DE COMPRAS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96090705', 
                    'descripcion' => 'ACTIVIDADES DE SERVICIOS DIVERSOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'S96090801', 
                    'descripcion' => 'EXPLOTACIÓN DE MÁQUINAS DE SERVICIOS PERSONALES ACCIONADAS CON MONEDAS (FOTOMATONES, BÁSCULAS, APARATOS PARA TOMAR LA TENSIÓN, TAQUILLAS ACCIONADAS CON MONEDAS, ETCÉTERA)' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'T97000001', 
                    'descripcion' => 'ACTIVIDADES DE LOS HOGARES COMO EMPLEADORES DE PERSONAL DOMÉSTICO, COMO SIRVIENTES, COCINEROS, CAMAREROS, AYUDANTES DE CÁMARA, MAYORDOMOS, INSTITUTRICES, NIÑERAS. EL PERSONAL DOMÉSTICO EMPLEADO PUEDE ASÍ DECLARAR LA ACTIVIDAD DE SU EMPLEADOR EN LOS CENSOS O ESTUDIOS, AUNQUE EL EMPLEADOR SEA UN PARTICULAR. EL PRODUCTO RESULTANTE DE ESA ACTIVIDAD ES CONSUMIDO POR EL PROPIO HOGAR EMPLEADOR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'T97000002', 
                    'descripcion' => 'ACTIVIDADES DE LOS HOGARES COMO EMPLEADORES DE PERSONAL DOMÉSTICO, COMO LAVANDEROS, JARDINEROS, PORTEROS, MOZOS DE CUADRA, CONDUCTORES, CONSERJES,  PRECEPTORES, SECRETARIOS, ETCÉTERA. EL PERSONAL DOMÉSTICO EMPLEADO PUEDE ASÍ DECLARAR LA ACTIVIDAD DE SU EMPLEADOR EN LOS CENSOS O ESTUDIOS, AUNQUE EL EMPLEADOR SEA UN PARTICULAR. EL PRODUCTO RESULTANTE DE ESA ACTIVIDAD ES CONSUMIDO POR EL PROPIO HOGAR EMPLEADOR' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'T98100001', 
                    'descripcion' => 'ACTIVIDADES NO DIFERENCIADAS DE HOGARES COMO PRODUCTORES DE BIENES DE SUBSISTENCIA, ES DECIR, LAS ACTIVIDADES DE LOS HOGARES QUE PRODUCEN DIVERSOS BIENES PARA SU PROPIA SUBSISTENCIA. ESAS ACTIVIDADES COMPRENDEN LA CAZA Y LA RECOLECCIÓN, LA AGRICULTURA, LA CONSTRUCCIÓN DE VIVIENDAS Y LA CONFECCIÓN DE PRENDAS DE VESTIR Y OTROS BIENES PRODUCIDOS POR LOS HOGARES PARA SU PROPIA SUBSISTENCIA. SI LOS HOGARES SE DEDICAN A LA PRODUCCIÓN DE BIENES PARA EL MERCADO, SE CLASIFICAN EN LA RAMA DE PRODUCCIÓN CORRESPONDIENTE A ESOS BIENES. SI SE DEDICAN PRINCIPALMENTE A LA PRODUCCIÓN DE BIENES DE SUBSISTENCIA ESPECÍFICOS, SE CLASIFICAN EN LA RAMA DE PRODUCCIÓN CORRESPONDIENTE A ESOS BIENES' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'T98200001', 
                    'descripcion' => 'ACTIVIDADES NO DIFERENCIADAS DE HOGARES COMO PRODUCTORES DE SERVICIOS SE SUBSISTENCIA, ES DECIR, ACTIVIDADES DE LOS HOGARES QUE PRODUCEN DIVERSOS SERVICIOS PARA SU PROPIA SUBSISTENCIA. ESAS ACTIVIDADES COMPRENDEN LA COCINA, LA ENSEÑANZA, EL CUIDADO DE LOS MIEMBROS DE LA FAMILIA Y OTROS SERVICIOS PRODUCIDOS POR LOS HOGARES PARA SU PROPIA SUBSISTENCIA. SI LOS HOGARES TAMBIÉN SE DEDICAN A LA PRODUCCIÓN DE DIVERSOS BIENES PARA SU PROPIA SUBSISTENCIA, SE CLASIFICAN EN LAS ACTIVIDADES NO DIFERENCIADAS DE HOGARES COMO PRODUCTORES DE BIENES PARA USO PROPIO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'U99000101', 
                    'descripcion' => 'ACTIVIDADES DE ORGANIZACIONES INTERNACIONALES, COMO LAS NACIONES UNIDAS Y LOS ORGANISMOS ESPECIALIZADOS DEL SISTEMA DE LAS NACIONES UNIDAS, ÓRGANOS REGIONALES, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'U99000102', 
                    'descripcion' => 'ACTIVIDADES DE ORGANIZACIONES INTERNACIONALES, COMO EL FONDO MONETARIO INTERNACIONAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'U99000103', 
                    'descripcion' => 'ACTIVIDADES DE ORGANIZACIONES INTERNACIONALES, COMO LA ORGANIZACIÓN DE COOPERACIÓN Y DESARROLLO ECONÓMICOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'U99000104', 
                    'descripcion' => 'ACTIVIDADES DE ORGANIZACIONES INTERNACIONALES, COMO LA ORGANIZACIÓN DE PAÍSES EXPORTADORES DE PETRÓLEO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'U99000105', 
                    'descripcion' => 'ACTIVIDADES DE ORGANIZACIONES INTERNACIONALES, COMO LAS COMUNIDADES EUROPEAS Y BANCO MUNDIAL' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'U99000106', 
                    'descripcion' => 'ACTIVIDADES DE ORGANIZACIONES INTERNACIONALES, COMO LA ASOCIACIÓN EUROPEA DE LIBRE COMERCIO, ETCÉTERA' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'U99000107', 
                    'descripcion' => 'ACTIVIDADES DE ORGANIZACIONES INTERNACIONALES, COMO LA ORGANIZACIÓN DE LOS ESTADOS AMERICANOS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'U99000201', 
                    'descripcion' => 'ACTIVIDADES DE MISIONES DIPLOMÁTICAS Y CONSULARES CUANDO ESTÁN DETERMINADAS POR EL PAÍS EN EL QUE SE ENCUENTRAN Y NO DEL PAÍS QUE REPRESENTAN' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'V03000001', 
                    'descripcion' => 'SIN ACTIVIDAD ECONOMICA - CIIU' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'V03000002', 
                    'descripcion' => 'HEREDEROS' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'W20000001', 
                    'descripcion' => 'ACTIVIDADES LABORALES REALIZADAS BAJO RELACION DE DEPENDENCIA EN EL SECTOR PRIVADO' 
                ]);  

        DB::table('actividades_economicas')->insert([ 
                    'codigo' => 'X25000001', 
                    'descripcion' => 'ACTIVIDADES LABORALES REALIZADAS BAJO RELACION DE DEPENDENCIA EN EL SECTOR PUBLICO' 
                ]); 


 
    }
}
