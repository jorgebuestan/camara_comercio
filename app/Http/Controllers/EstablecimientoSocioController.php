<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\EstablecimientoSocio;
use App\Models\TipoRegimen;
use App\Models\Pais;
use App\Models\Provincia;
use App\Models\Canton;
use App\Models\Parroquia;
use App\Models\ActividadEconomica;
use App\Models\Socio;
use App\Models\Camara;
use App\Models\LogActivity;

class EstablecimientoSocioController extends Controller
{
    //
    public function establecimientos_socio()
    {
        $regimen = TipoRegimen::pluck('nombre', 'id');
        $paises = Pais::orderBy('nombre', 'asc')->pluck('nombre', 'id');
        $provincias = Provincia::where('id_pais', 57)->orderBy('nombre', 'asc')->pluck('nombre', 'id'); // Provincias de Ecuador
        $cantones = Canton::where('id_pais', 57)->where('id_provincia', 2)->orderBy('nombre', 'asc')->pluck('nombre', 'id'); // Provincias de Ecuador
        $parroquias = Parroquia::where('id_pais', 57)->where('id_provincia', 2)->where('id_canton', 2)->orderBy('nombre', 'asc')->pluck('nombre', 'id'); // Provincias de Ecuador
        $actividadesEconomicas = ActividadEconomica::pluck('descripcion', 'id');
        $sociosSelect = Socio::pluck('razon_social', 'id');
        $socios = Camara::with('datos_tributarios')->where('estado', 1)->get();

        $provinciaDefault = Provincia::find(1); // Obtenemos la provincia con ID = 1
        if ($provinciaDefault) {
            $provincias->put($provinciaDefault->id, $provinciaDefault->nombre); // Añadimos al listado
        }

        $cantonDefault = Canton::find(1); // Obtenemos la provincia con ID = 1
        if ($cantonDefault) {
            $cantones->put($cantonDefault->id, $cantonDefault->nombre); // Añadimos al listado
        }

        $parroquiaDefault = Canton::find(1); // Obtenemos la provincia con ID = 1
        if ($parroquiaDefault) {
            $parroquias->put($parroquiaDefault->id, $parroquiaDefault->nombre); // Añadimos al listado
        }

        return view('administrador.socios.establecimientos_socio', compact('regimen', 'paises', 'provincias', 'cantones', 'parroquias', 'actividadesEconomicas', 'sociosSelect', 'socios'));
    }

    public function obtener_listado_establecimientos_socio(Request $request)
    {
        $columns = [
            0 => 'establecimientos_socios.id',
            1 => 'acciones'
        ];

        $query = DB::table('establecimientos_socios')
            ->select(
                'establecimientos_socios.id',
                'establecimientos_socios.fecha_inicio_actividades',
                'establecimientos_socios.secuencial',
                'establecimientos_socios.nombre_comercial',
                DB::raw('CONCAT(establecimientos_socios.calle, " ", establecimientos_socios.manzana, " ", establecimientos_socios.numero, " ", establecimientos_socios.interseccion) AS direccion'),
                'establecimientos_socios.correo'
            )
            ->where('establecimientos_socios.estado', 1)
            ->orderBy('establecimientos_socios.nombre_comercial', 'asc');

        // Filtro de localidad 

        // Búsqueda
        if ($search = $request->input('search.value')) {
            $query->where(function ($query) use ($search) {
                $query->where('establecimientos_socios.nombre_comercial', 'LIKE', "%{$search}%")
                    ->orWhere('establecimientos_socios.calle', 'LIKE', "%{$search}%")
                    ->orWhere('establecimientos_socios.manzana', 'LIKE', "%{$search}%")
                    ->orWhere('establecimientos_socios.numero', 'LIKE', "%{$search}%")
                    ->orWhere('establecimientos_socios.interseccion', 'LIKE', "%{$search}%")
                    ->orWhere('establecimientos_socios.correo', 'LIKE', "%{$search}%");
            });
        }

        // **Filtrar por id_socio si está presente en el request**
        if ($idCamara = $request->input('id_socio')) {
            $query->where('establecimientos_socios.id_socio', $idCamara);
        }

        $totalFiltered = $query->count();

        // Orden
        $orderColumnIndex = $request->input('order.0.column', 0); // Por defecto, columna 0
        $orderDir = $request->input('order.0.dir', 'asc'); // Por defecto, orden ascendente

        if (isset($columns[$orderColumnIndex])) {
            $orderColumn = $columns[$orderColumnIndex];
            $query->orderBy($orderColumn, $orderDir);
        }

        // Paginación
        $start = $request->input('start') ?? 0;
        $length = $request->input('length') ?? 10;
        $query->skip($start)->take($length);

        $establecimientos = $query->get();

        $data = $establecimientos->map(function ($establecimiento) {
            $boton = "";
            return [
                'fecha_inicio_actividades' => $establecimiento->fecha_inicio_actividades,
                'secuencial' => $establecimiento->secuencial,
                'nombre_comercial' => $establecimiento->nombre_comercial,
                'direccion' => $establecimiento->direccion,
                'correo' => $establecimiento->correo,
                'btn' => '<button class="btn btn-primary mb-3 open-modal" data-id="' . $establecimiento->id . '">Modificar</button>' .
                    '&nbsp;&nbsp;&nbsp;<button class="btn btn-warning mb-3 delete-establecimiento" data-id="' . $establecimiento->id . '">Eliminar</button>' .
                    '&nbsp;&nbsp;&nbsp;'
            ];
        });

        $json_data = [
            "draw" => intval($request->input('draw')),
            "recordsTotal" => DB::table('establecimientos')->count(),
            "recordsFiltered" => $totalFiltered,
            "data" => $data
        ];

        return response()->json($json_data);
    }

    public function registrar_establecimiento_socio(Request $request)
    {

        try {

            DB::beginTransaction();
            // Convertir fecha_ingreso al formato MySQL (YYYY-MM-DD)
            $fecha_inicio_actividades = \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('fecha_inicio_actividades'))->format('Y-m-d');
            //$actividadesEconomicasSeleccionadas = $request->input('actividad_economica_seleccionados', []);
            $actividadesEconomicasSeleccionadas = $request->input('actividad_economica_seleccionados', '');
            // Convertir la cadena en un array (si no está vacío)
            $actividadesEconomicasSeleccionadasArray = $actividadesEconomicasSeleccionadas ? explode(',', $actividadesEconomicasSeleccionadas) : [];
            $actividadesEconomicasSeleccionadasArray = array_map('intval', $actividadesEconomicasSeleccionadasArray);

            // Obtener el último secuencial para la cámara
            $ultimoSecuencial = EstablecimientoSocio::where('id_socio', $request->input('socioHidden'))
                ->orderBy('secuencial', 'desc')
                ->value('secuencial');

            // Calcular el nuevo secuencial
            $nuevoSecuencial = $ultimoSecuencial ? intval($ultimoSecuencial) + 1 : 1;

            if ($nuevoSecuencial > 999) {
                Log::error('No se puede asignar un nuevo secuencial, se alcanzó el límite de 999');
                return response()->json(['error' => 'No se puede asignar un nuevo secuencial, se alcanzó el límite de 999'], 422);
            }

            // Formatear el secuencial a tres dígitos
            $secuencialFormateado = str_pad($nuevoSecuencial, 3, '0', STR_PAD_LEFT);

            // Crear registro en la base de datos
            $establecimiento = EstablecimientoSocio::create([
                'secuencial' => $secuencialFormateado, 
                'nombre_comercial' => strtoupper($request->input('nombre_comercial')),
                'id_socio' => strtoupper($request->input('socioHidden')),
                'id_pais' => $request->input('pais'),
                'id_provincia' => $request->input('provincia'),
                'id_canton' => $request->input('canton'),
                'id_parroquia' => $request->input('parroquia'),
                'calle' => strtoupper($request->input('calle')),
                'manzana' => strtoupper($request->input('manzana')),
                'numero' => strtoupper($request->input('numero')),
                'interseccion' => strtoupper($request->input('interseccion')),
                'referencia' => strtoupper($request->input('referencia')),
                'correo' => strtoupper($request->input('correo')),
                'telefono1' => strtoupper($request->input('telefono1')),
                'telefono2' => strtoupper($request->input('telefono2')),
                'telefono3' => strtoupper($request->input('telefono3')),
                'fecha_inicio_actividades' => $fecha_inicio_actividades, // Usar fecha convertida
                'actividades_economicas' =>  json_encode($actividadesEconomicasSeleccionadasArray),
                'estado' => 1
            ]);

            DB::commit();

            return response()->json(['success' => 'Establecimiento registrado correctamente'], 200);
        } catch (\Illuminate\Database\QueryException $e) {

            Log::error($e);
            DB::rollBack();
            return response()->json(['error' => 'Error al registrar el establecimiento: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {

            Log::error($e);
            DB::rollBack();
            return response()->json(['error' => 'Error al registrar el establecimiento: ' . $e->getMessage()], 500);
        }
    }

    public function eliminar_establecimiento_socio($id)
    {
        try {

            DB::beginTransaction();
            //$colaborador = Colaborador::find($id);
            $establecimiento = EstablecimientoSocio::where('id', $id)->first();

            if (!$establecimiento) {
                return response()->json(['error' => 'Establecimiento no encontrado'], 404);
            }

            // Cambiar el valor del campo 'activo' a 0
            $establecimiento->estado = 0;
            $establecimiento->save();

            DB::commit();

            return response()->json(['success' => 'Establecimiento eliminado correctamente']);
        } catch (\Exception $e) {
            Log::error($e);
            DB::rollBack();
            return response()->json(['error' => 'Error al eliminar el Establecimiento por Socio: ' . $e->getMessage()], 500);
        }
    }

    public function detalle_establecimiento_socio($id)
    {
        // Buscar la cámara por ID
        $establecimiento = EstablecimientoSocio::find($id);

        if (!$establecimiento) {
            return response()->json(['error' => 'Registro no encontrado'], 404);
        }

        $logEstablecimientoSocioIns = LogActivity::with('user')->where('record_id', $id)->where('table_name', 'establecimientos_socios')->where('action', 'insert')->get();
        $logEstablecimientoSocioMod = LogActivity::with('user')->where('record_id', $id)->where('table_name', 'establecimientos_socios')->where('action', 'update')->get();

        $logEstablecimientoSocioIns = $logEstablecimientoSocioIns->map(function ($log) {
            return [
                'created_at' => $log->created_at,
                'user_id' => $log->user_id,
                'user' => [
                    'name' => $log->user->name,
                    'email' => $log->user->email,
                    'username' => $log->user->username
                ]
            ];
        });

        $logEstablecimientoSocioMod = $logEstablecimientoSocioMod->map(function ($log) {
            return [
                'created_at' => $log->created_at,
                'user_id' => $log->user_id,
                'user' => [
                    'name' => $log->user->name,
                    'email' => $log->user->email,
                    'username' => $log->user->username
                ]
            ];
        });

        $logEstablecimientoSocio = [
            'insert' => $logEstablecimientoSocioIns[0] ?? null,
            'update' => $logEstablecimientoSocioMod ?? null
        ];

        // Convertir el modelo Establecimiento a un array
        $establecimientoArray = array_merge($establecimiento->toArray(), $logEstablecimientoSocio);


        // Buscar el DatoTributario relacionado
        $socio = Socio::where('id', $establecimientoArray["id_socio"])->first();

        // Si existe un DatoTributario, agregarlo al array de respuesta
        if ($socio) {
            $establecimientoArray['socio'] = $socio->toArray();
        }

        // Devolver la respuesta JSON
        return response()->json($establecimientoArray);
    }

    public function modificar_establecimiento_socio(Request $request)
    {
        try {

            DB::beginTransaction();
            // Convertir fecha_ingreso al formato MySQL (YYYY-MM-DD)
            $fecha_inicio_actividades = \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('fecha_inicio_actividades_mod'))->format('Y-m-d');

            // Buscar el registro existente por ID 
            $establecimiento = EstablecimientoSocio::find($request->input('establecimiento_id'));

            if (!$establecimiento) {
                return response()->json(['error' => 'El establecimiento no existe.'], 404);
            }

            $actividadesEconomicasSeleccionadas = $request->input('actividad_economica_seleccionados_mod', '');
            $actividadesEconomicasSeleccionadasArray = $actividadesEconomicasSeleccionadas ? explode(',', $actividadesEconomicasSeleccionadas) : [];
            $actividadesEconomicasSeleccionadasArray = array_map('intval', $actividadesEconomicasSeleccionadasArray);

            // Actualizar los campos del registro existente
            $establecimiento->update([
                'nombre_comercial' => strtoupper($request->input('nombre_comercial_mod')),
                'id_pais' => $request->input('pais_mod'),
                'id_provincia' => $request->input('provincia_mod'),
                'id_canton' => $request->input('canton_mod'),
                'id_parroquia' => $request->input('parroquia_mod'),
                'calle' => strtoupper($request->input('calle_mod')),
                'manzana' => strtoupper($request->input('manzana_mod')),
                'numero' => strtoupper($request->input('numero_mod')),
                'interseccion' => strtoupper($request->input('interseccion_mod')),
                'referencia' => strtoupper($request->input('referencia_mod')),
                'correo' => strtoupper($request->input('correo_mod')),
                'telefono1' => strtoupper($request->input('telefono1_mod')),
                'telefono2' => strtoupper($request->input('telefono2_mod')),
                'telefono3' => strtoupper($request->input('telefono3_mod')),
                'fecha_inicio_actividades' => $fecha_inicio_actividades,
                'actividades_economicas' =>  json_encode($actividadesEconomicasSeleccionadasArray)

            ]);

            DB::commit();

            //return response()->json(['success' => 'Cámara actualizada correctamente'], 200);
            return response()->json([
                'response' => [
                    'msg' => "Registro modificado",
                ]
            ], 201);
        } catch (\Illuminate\Database\QueryException $e) {

            Log::error($e);
            DB::rollBack();
            return response()->json(['error' => 'Error al modificar el establecimiento: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {

            Log::error($e);
            DB::rollBack();
            return response()->json(['error' => 'Error al modificar el establecimiento: ' . $e->getMessage()], 500);
        }
    }
}
