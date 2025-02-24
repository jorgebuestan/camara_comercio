<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;
use App\Models\Provincia;
use App\Models\Canton;
use App\Models\Parroquia;
use App\Models\CamaraObligacion;
use App\Models\Socio;
use App\Models\SocioObligacion;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Establecimiento;
use App\Models\Entidad;  
use App\Models\DatoTributarioSocio; 
use App\Models\ActividadEconomica;  
use App\Models\EstablecimientoSocio;  

class FuncionesGeneralesController extends Controller
{
    //
    public function get_provincias(Request $request)
    {  
        $id_pais = request('id_pais');
        $provincias = Provincia::where('id_pais', $id_pais)->orderBy('nombre', 'asc')->pluck('nombre', 'id');

        // Si no hay provincias para el país, o siempre se quiere incluir la provincia con ID = 1
        if (!$provincias->has(1)) {
            $provinciaDefault = Provincia::find(1); // Obtenemos la provincia con ID = 1
            if ($provinciaDefault) {
                $provincias->put($provinciaDefault->id, $provinciaDefault->nombre); // Añadimos al listado
            }
        }
    
        // Formato de respuesta esperado
        return response()->json([
            'provincias' => $provincias->map(function ($nombre, $id) {
                return ['id' => $id, 'nombre' => $nombre];
            })->values(),
        ]);
    }

    public function get_cantones(Request $request)
    {  
        $id_pais = request('id_pais');
        $id_provincia = request('id_provincia');
        $cantones = Canton::where('id_pais', $id_pais)->where('id_provincia', $id_provincia)->orderBy('nombre', 'asc')->pluck('nombre', 'id');

        // Si no hay provincias para el país, o siempre se quiere incluir la provincia con ID = 1
        if (!$cantones->has(1)) {
            $cantonDefault = Canton::find(1); // Obtenemos la provincia con ID = 1
            if ($cantonDefault) {
                $cantones->put($cantonDefault->id, $cantonDefault->nombre); // Añadimos al listado
            }
        }
    
        // Formato de respuesta esperado
        return response()->json([
            'cantones' => $cantones->map(function ($nombre, $id) {
                return ['id' => $id, 'nombre' => $nombre];
            })->values(),
        ]);
    }

    public function get_parroquias(Request $request)
    {  
        $id_pais = request('id_pais');
        $id_provincia = request('id_provincia');
        $id_canton = request('id_canton');
        $parroquias = Parroquia::where('id_pais', $id_pais)
        ->where('id_provincia', $id_provincia)
        ->where('id_canton', $id_canton)->orderBy('nombre', 'asc')->pluck('nombre', 'id');

        // Si no hay provincias para el país, o siempre se quiere incluir la provincia con ID = 1
        if (!$parroquias->has(1)) {
            $parroquiaDefault = Canton::find(1); // Obtenemos la provincia con ID = 1
            if ($parroquiaDefault) {
                $parroquias->put($parroquiaDefault->id, $parroquiaDefault->nombre); // Añadimos al listado
            }
        }
    
        // Formato de respuesta esperado
        return response()->json([
            'parroquias' => $parroquias->map(function ($nombre, $id) {
                return ['id' => $id, 'nombre' => $nombre];
            })->values(),
        ]);
    }

    public function get_obligaciones_camara(Request $request)
    {  
        $id_camara = request('id_camara');
        // Obtener las obligaciones con el concat deseado
        $obligaciones = CamaraObligacion::select(
                            'camaras_obligaciones.id',
                            DB::raw("CONCAT(establecimientos.secuencial, ' - ', entidades.entidad, ' - ', obligaciones.obligacion) AS nombre")
                        )
                        ->join('establecimientos', 'establecimientos.id', '=', 'camaras_obligaciones.id_establecimiento')
                        ->join('obligaciones', 'obligaciones.id', '=', 'camaras_obligaciones.id_obligacion')
                        ->join('entidades', 'entidades.id', '=', 'camaras_obligaciones.id_entidad')
                        ->where('camaras_obligaciones.id_camara', $id_camara)
                        ->pluck('nombre', 'id');
  
        // Formato de respuesta esperado
        return response()->json([
            'obligaciones' => $obligaciones->map(function ($nombre, $id) {
                return ['id' => $id, 'nombre' => $nombre];
            })->values(),
        ]);
    } 

    public function get_socios_por_camara(Request $request)
    {  
        $id_camara = request('id_camara');
        // Obtener las obligaciones con el concat deseado
        $socios = Socio::select(
                            'socios.id',
                            'socios.razon_social as nombre'
                        )
                        ->join('camaras_socios', 'camaras_socios.id_socio', '=', 'socios.id') 
                        ->where('camaras_socios.id_camara', $id_camara)
                        ->pluck('nombre', 'id');
  
        // Formato de respuesta esperado
        return response()->json([
            'socios' => $socios->map(function ($nombre, $id) {
                return ['id' => $id, 'nombre' => $nombre];
            })->values(),
        ]);
    }

    public function get_obligaciones_socio(Request $request)
    {  
        $id_socio = request('id_socio');
        // Obtener las obligaciones con el concat deseado
        $obligaciones = SocioObligacion::select(
                            'socios_obligaciones.id',
                            DB::raw("CONCAT(establecimientos_socios.secuencial, ' - ', entidades.entidad, ' - ', obligaciones.obligacion) AS nombre")
                        )
                        ->join('establecimientos_socios', 'establecimientos_socios.id', '=', 'socios_obligaciones.id_establecimiento')
                        ->join('obligaciones', 'obligaciones.id', '=', 'socios_obligaciones.id_obligacion')
                        ->join('entidades', 'entidades.id', '=', 'socios_obligaciones.id_entidad')
                        ->where('socios_obligaciones.id_socio', $id_socio)
                        ->pluck('nombre', 'id');
  
        // Formato de respuesta esperado
        return response()->json([
            'obligaciones' => $obligaciones->map(function ($nombre, $id) {
                return ['id' => $id, 'nombre' => $nombre];
            })->values(),
        ]);
    }

    public function get_establecimientos_camara(Request $request)
    {  
        $id_camara = request('id_camara'); 

        $establecimientos = Establecimiento::where('id_camara', $id_camara)
        ->orderBy('secuencial', 'asc')
        ->selectRaw("CONCAT(secuencial, ' - ', nombre_comercial) as nombre, id")
        ->pluck('nombre', 'id');
 
    
        // Formato de respuesta esperado
        return response()->json([
            'establecimientos' => $establecimientos->map(function ($nombre, $id) {
                return ['id' => $id, 'nombre' => $nombre];
            })->values(),
        ]);
    }

    public function get_entidades_establecimientos(Request $request)
    {  
        $id_establecimiento = request('id_establecimiento');

        // Obtener el establecimiento específico
        $establecimiento = Establecimiento::findOrFail($id_establecimiento);

        // Obtener las entidades en función del valor de secuencial
        $entidades = Entidad::when($establecimiento->secuencial === '001', function ($query) use ($establecimiento) {
                // Si secuencial es '001', incluir:
                // 1. Entidades con alcance = 1
                // 2. Entidades con alcance = 2 que coincidan en id_pais, id_provincia, id_canton
                $query->where(function ($q) use ($establecimiento) {
                    $q->where('alcance', 1)
                    ->orWhere(function ($q2) use ($establecimiento) {
                        $q2->where('alcance', 2)
                            ->where('id_pais', $establecimiento->id_pais)
                            ->where('id_provincia', $establecimiento->id_provincia)
                            ->where('id_canton', $establecimiento->id_canton);
                    });
                });
            })
            ->when($establecimiento->secuencial !== '001', function ($query) use ($establecimiento) {
                // Si secuencial no es '001', incluir solo entidades con alcance = 2 que coincidan
                $query->where('alcance', 2)
                    ->where('id_pais', $establecimiento->id_pais)
                    ->where('id_provincia', $establecimiento->id_provincia)
                    ->where('id_canton', $establecimiento->id_canton);
            })
            ->orderBy('entidad', 'asc') // Ordenar alfabéticamente por el nombre de la entidad
            ->pluck('entidad', 'id'); // Seleccionar los campos id y entidad

        // Formato de respuesta esperado
        return response()->json([
            'entidades' => $entidades->map(function ($entidad, $id) {
                return ['id' => $id, 'nombre' => $entidad];
            })->values(),
        ]);
    }

    public function get_establecimientos_socio(Request $request)
    {  
        $id_socio = request('id_socio'); 

        $establecimientos = EstablecimientoSocio::where('id_socio', $id_socio)
        ->whereIn('estado', [1, 2])
        ->orderBy('secuencial', 'asc')
        ->selectRaw("CONCAT(secuencial, ' - ', nombre_comercial) as nombre, id")
        ->pluck('nombre', 'id');
 
    
        // Formato de respuesta esperado
        return response()->json([
            'establecimientos' => $establecimientos->map(function ($nombre, $id) {
                return ['id' => $id, 'nombre' => $nombre];
            })->values(),
        ]);
    }

    public function get_entidades_establecimientos_socio(Request $request)
    {  
        $id_establecimiento = request('id_establecimiento');

        // Obtener el establecimiento específico
        $establecimiento = EstablecimientoSocio::findOrFail($id_establecimiento);

        // Obtener las entidades en función del valor de secuencial
        $entidades = Entidad::when($establecimiento->secuencial === '001', function ($query) use ($establecimiento) {
                // Si secuencial es '001', incluir:
                // 1. Entidades con alcance = 1
                // 2. Entidades con alcance = 2 que coincidan en id_pais, id_provincia, id_canton
                $query->where(function ($q) use ($establecimiento) {
                    $q->where('alcance', 1)
                    ->orWhere(function ($q2) use ($establecimiento) {
                        $q2->where('alcance', 2)
                            ->where('id_pais', $establecimiento->id_pais)
                            ->where('id_provincia', $establecimiento->id_provincia)
                            ->where('id_canton', $establecimiento->id_canton);
                    });
                });
            })
            ->when($establecimiento->secuencial !== '001', function ($query) use ($establecimiento) {
                // Si secuencial no es '001', incluir solo entidades con alcance = 2 que coincidan
                $query->where('alcance', 2)
                    ->where('id_pais', $establecimiento->id_pais)
                    ->where('id_provincia', $establecimiento->id_provincia)
                    ->where('id_canton', $establecimiento->id_canton);
            })
            ->orderBy('entidad', 'asc') // Ordenar alfabéticamente por el nombre de la entidad
            ->pluck('entidad', 'id'); // Seleccionar los campos id y entidad

        // Formato de respuesta esperado
        return response()->json([
            'entidades' => $entidades->map(function ($entidad, $id) {
                return ['id' => $id, 'nombre' => $entidad];
            })->values(),
        ]);
    }

    public function get_actividades_economicas_por_socio(Request $request)
    {
        $id_socio = $request->input('id_socio'); // Utiliza input() para obtener el valor del request

        // Obtener el objeto DatoTributarioSocio con el id de socio proporcionado
        $datoTributarioSocio = DatoTributarioSocio::where('id_socio', $id_socio)->first();

        // Verificar si el campo actividades_economicas existe y no está vacío
        if ($datoTributarioSocio && !empty($datoTributarioSocio->actividades_economicas)) {
            // Asegurarse de que actividades_economicas sea un array
            $actividades_economicas = is_array($datoTributarioSocio->actividades_economicas) 
                ? $datoTributarioSocio->actividades_economicas 
                : json_decode($datoTributarioSocio->actividades_economicas, true);

            // Si es un array no vacío, obtener las actividades económicas
            if (!empty($actividades_economicas)) {
                $actividades = ActividadEconomica::whereIn('id', $actividades_economicas)
                    ->orderBy('descripcion') // Ordenar por el campo que necesites
                    ->pluck('descripcion', 'id');
            } else {
                // Si el array está vacío, retornar colección vacía
                $actividades = collect();
            }
        } else {
            // Si actividades_economicas es null o vacío, retornar colección vacía
            $actividades = collect();
        }

        // Formato de respuesta esperado
        return response()->json([
            'actividades_economicas' => $actividades->map(function ($descripcion, $id) {
                return ['id' => $id, 'descripcion' => $descripcion];
            })->values(), // .values() asegura que el array de datos esté correctamente indexado
        ]);
    }
    
}
