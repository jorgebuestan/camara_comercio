<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Establecimiento;
use App\Models\TipoRegimen;
use App\Models\Pais;
use App\Models\Provincia;
use App\Models\Canton;
use App\Models\Parroquia;
use App\Models\ActividadEconomica;
use App\Models\Camara;
use App\Models\LogActivity;

class EstablecimientoController extends Controller
{
    //
    public function establecimientos_camara()
    {
        $isAdmin = Auth::user()->hasRole('admin');
        $camarasSelect = [];
        if ($isAdmin) {
            $camarasSelect = Camara::pluck('razon_social', 'id');
        } else {
            $camarasSelect = Camara::where('ruc', Auth::user()->username)->pluck('razon_social', 'id');
            if (!$camarasSelect || $camarasSelect->isEmpty()) {
                return redirect()->route('dashboard')->with('error', 'No tiene permisos para acceder a esta sección');
            }
        }
        $regimen = TipoRegimen::pluck('nombre', 'id');
        $paises = Pais::pluck('nombre', 'id');
        $provincias = Provincia::where('id_pais', 57)->pluck('nombre', 'id'); // Provincias de Ecuador
        $cantones = Canton::where('id_pais', 57)->where('id_provincia', 2)->pluck('nombre', 'id'); // Provincias de Ecuador
        $parroquias = Parroquia::where('id_pais', 57)->where('id_provincia', 2)->where('id_canton', 2)->pluck('nombre', 'id'); // Provincias de Ecuador
        $actividadesEconomicas = ActividadEconomica::pluck('descripcion', 'id');
        $camaras = Camara::with('datos_tributarios')->where('estado', 1)->get();

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

        return view('administrador.camaras.establecimientos_camara', compact('regimen', 'paises', 'provincias', 'cantones', 'parroquias', 'actividadesEconomicas', 'camarasSelect', 'camaras', 'isAdmin'));
    }

    public function obtener_listado_establecimientos_camara(Request $request)
    {
        $columns = [
            0 => 'establecimientos.id',
            1 => 'acciones'
        ];

        $query = DB::table('establecimientos')
            ->select(
                'establecimientos.id',
                'establecimientos.fecha_inicio_actividades',
                'establecimientos.nombre_comercial',
                DB::raw('CONCAT(establecimientos.calle, " ", establecimientos.manzana, " ", establecimientos.numero, " ", establecimientos.interseccion) AS direccion'),
                'establecimientos.correo'
            )
            ->where('establecimientos.estado', 1)
            ->orderBy('establecimientos.nombre_comercial', 'asc');

        // Filtro de localidad 

        // Búsqueda
        if ($search = $request->input('search.value')) {
            $query->where(function ($query) use ($search) {
                $query->where('establecimientos.nombre_comercial', 'LIKE', "%{$search}%")
                    ->orWhere('establecimientos.calle', 'LIKE', "%{$search}%")
                    ->orWhere('establecimientos.manzana', 'LIKE', "%{$search}%")
                    ->orWhere('establecimientos.numero', 'LIKE', "%{$search}%")
                    ->orWhere('establecimientos.interseccion', 'LIKE', "%{$search}%")
                    ->orWhere('establecimientos.correo', 'LIKE', "%{$search}%");
            });
        }

        // **Filtrar por id_camara si está presente en el request**
        if ($idCamara = $request->input('id_camara')) {
            $query->where('establecimientos.id_camara', $idCamara);
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

    public function registrar_establecimiento(Request $request)
    {

        try {
            $validator = Validator::make($request->all(), [
                'nombre_comercial' => 'required|string',
                'camaraHidden' => 'required|integer',
                'pais' => 'required|string',
                'provincia' => 'required|string',
                'canton' => 'required|string',
                'parroquia' => 'required|string',
                'calle' => 'required|string',
                'manzana' => 'required|string',
                'numero' => 'required|string',
                'interseccion' => 'required|string',
                'referencia' => 'required|string',
                'correo' => 'required|email',
                'telefono1' => 'required|string',
                'telefono2' => 'sometimes|string|nullable',
                'telefono3' => 'sometimes|string|nullable',
                'fecha_inicio_actividades' => 'required|date_format:d/m/Y',
                'actividad_economica_seleccionados' => 'required|string',
            ]);
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()->first()], 422);
            }
            DB::beginTransaction();

            // Convertir fecha_ingreso al formato MySQL (YYYY-MM-DD)
            $fecha_inicio_actividades = \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('fecha_inicio_actividades'))->format('Y-m-d');
            //$actividadesEconomicasSeleccionadas = $request->input('actividad_economica_seleccionados', []);
            $actividadesEconomicasSeleccionadas = $request->input('actividad_economica_seleccionados', '');
            // Convertir la cadena en un array (si no está vacío)
            $actividadesEconomicasSeleccionadasArray = $actividadesEconomicasSeleccionadas ? explode(',', $actividadesEconomicasSeleccionadas) : [];
            $actividadesEconomicasSeleccionadasArray = array_map('intval', $actividadesEconomicasSeleccionadasArray);

            // Crear registro en la base de datos
            $establecimiento = Establecimiento::create([
                'nombre_comercial' => strtoupper($request->input('nombre_comercial')),
                'id_camara' => strtoupper($request->input('camaraHidden')),
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

    public function eliminar_establecimiento($id)
    {
        try {
            DB::beginTransaction();
            //$colaborador = Colaborador::find($id);
            $establecimiento = Establecimiento::where('id', $id)->first();


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
            return response()->json(['error' => 'Error al eliminar el Establecimiento: ' . $e->getMessage()], 500);
        }
    }

    public function detalle_establecimiento($id)
    {
        // Buscar la cámara por ID
        $establecimiento = Establecimiento::find($id);

        if (!$establecimiento) {
            return response()->json(['error' => 'Registro no encontrado'], 404);
        }

        // Convertir el modelo Establecimiento a un array
        $establecimientoArray = $establecimiento->toArray();


        // Buscar el DatoTributario relacionado
        $camara = Camara::where('id', $establecimientoArray["id_camara"])->first();

        // Si existe un DatoTributario, agregarlo al array de respuesta
        if ($camara) {
            $establecimientoArray['camara'] = $camara->toArray();
        }

        $logEstablecimientoCamaraIns = LogActivity::with('user')->where('record_id', $id)->where('table_name', 'establecimientos')->where('action', 'insert')->get();
        $logEstablecimientoCamaraMod = LogActivity::with('user')->where('record_id', $id)->where('table_name', 'establecimientos')->where('action', 'update')->get();

        $logEstablecimientoCamaraIns = $logEstablecimientoCamaraIns->map(function ($log) {
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

        $logEstablecimientoCamaraMod = $logEstablecimientoCamaraMod->map(function ($log) {
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

        $logEstablecimientoCamara = [
            'insert' => $logEstablecimientoCamaraIns[0] ?? null,
            'update' => $logEstablecimientoCamaraMod ?? null
        ];

        Log::info($logEstablecimientoCamara);

        // Convertir el modelo Establecimiento Camara a un array
        $establecimientoArray = array_merge($establecimientoArray, $logEstablecimientoCamara);

        // Devolver la respuesta JSON
        return response()->json($establecimientoArray);
    }

    public function modificar_establecimiento(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'establecimiento_id' => 'required|integer',
                'nombre_comercial_mod' => 'required|string',
                'camaraHiddenMod' => 'required|integer',
                'pais_mod' => 'required|string',
                'provincia_mod' => 'required|string',
                'canton_mod' => 'required|string',
                'parroquia_mod' => 'required|string',
                'calle_mod' => 'required|string',
                'manzana_mod' => 'required|string',
                'numero_mod' => 'required|string',
                'interseccion_mod' => 'required|string',
                'referencia_mod' => 'required|string',
                'correo_mod' => 'required|email',
                'telefono1_mod' => 'required|string',
                'telefono2_mod' => 'sometimes|string|nullable',
                'telefono3_mod' => 'sometimes|string|nullable',
                'fecha_inicio_actividades_mod' => 'required|date_format:d/m/Y',
                'actividad_economica_seleccionados_mod' => 'required|string',
            ]);
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()->first()], 422);
            }
            DB::beginTransaction();
            // Convertir fecha_ingreso al formato MySQL (YYYY-MM-DD)
            $fecha_inicio_actividades = \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('fecha_inicio_actividades_mod'))->format('Y-m-d');

            // Buscar el registro existente por ID
            $camara = Camara::find($request->input('camaraHiddenMod'));
            $establecimiento = Establecimiento::find($request->input('establecimiento_id'));

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
