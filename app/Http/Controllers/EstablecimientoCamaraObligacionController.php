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
use App\Models\Entidad;
use App\Models\DatoTributario;
use App\Models\LogActivity;
use App\Models\CamaraObligacion;  
use Carbon\Carbon;
use App\Models\ArchivoObligacionCamara;

class EstablecimientoCamaraObligacionController extends Controller
{
    //
    public function obligaciones_establecimientos()
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
        $entidades = Entidad::with('obligaciones.obligacion.tiempo_presentacion', 'obligaciones.obligacion.tipo_presentacion')->where('estado', 1)->get();
        $entidadesSelect = $entidades->pluck('entidad', 'id');
        return view('administrador.camaras.obligaciones_establecimientos', compact('camarasSelect', 'entidadesSelect', 'isAdmin'));
    }

    public function obtener_listado_obligaciones_establecimientos(Request $request)
    {
        $columns = [
            0 => 'camaras_obligaciones.id',
            1 => 'establecimientos.secuencial',
            2 => 'entidades.entidad',
            3 => 'obligaciones.obligacion'
        ];

        $query = DB::table('camaras_obligaciones')
            ->join('camaras', 'camaras.id', '=', 'camaras_obligaciones.id_camara')
            ->join('establecimientos', 'establecimientos.id', '=', 'camaras_obligaciones.id_establecimiento')
            ->join('entidades', 'entidades.id', '=', 'camaras_obligaciones.id_entidad')
            ->join('obligaciones', 'obligaciones.id', '=', 'camaras_obligaciones.id_obligacion')
            ->select(
                'camaras_obligaciones.id', 
                'establecimientos.secuencial',
                'entidades.entidad',
                'obligaciones.obligacion'
            )
            ->where('camaras_obligaciones.estado', 1);

        // Filtro de localidad 

        // Búsqueda
        if ($search = $request->input('search.value')) {
            $query->where(function ($query) use ($search) {
                $query->where('entidades.entidad', 'LIKE', "%{$search}%") 
                    ->orWhere('obligaciones.obligacion', 'LIKE', "%{$search}%");
            });
        }

        // **Filtrar por id_camara si está presente en el request**
        if ($idEntidad = $request->input('id_camara')) {
            $query->where('camaras_obligaciones.id_camara', $idEntidad);
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

        $obligaciones = $query->get();

        $data = $obligaciones->map(function ($obligacion) {
            $boton = "";

            return [
                'establecimiento' => $obligacion->secuencial,
                'entidad' => $obligacion->entidad,
                'obligacion' => $obligacion->obligacion, 
                'btn' => '<div class="d-flex justify-content-center align-items-center gap-2">' .
                            '<button class="btn btn-outline-warning mb-3 btn-sm rounded-pill open-modal" data-id="' . $obligacion->id . '"><i class="fa-solid fa-pencil"></i>&nbsp;Modificar</button>' .
                            '<button class="btn btn-outline-danger btn-sm rounded-pill mb-3 delete-obligacion" data-id="' . $obligacion->id . '">Eliminar&nbsp;<i class="fa-solid fa-trash"></i></button>' .
                         '</div>'
            ];
        });

        $json_data = [
            "draw" => intval($request->input('draw')),
            "recordsTotal" => DB::table('obligaciones')->where('obligaciones.estado', 1)->count(),
            "recordsFiltered" => $totalFiltered,
            "data" => $data
        ];

        return response()->json($json_data);
    }

    public function registrar_obligacion_establecimiento(Request $request)
    {
        try {
            // Validación de los datos
            $validator = Validator::make($request->all(), [
                'id_camara' => 'required|integer',
                'id_establecimiento' => 'required|integer',
                'id_entidad' => 'required|integer',
                'id_obligacion' => 'required|integer',
                'fecha_inicio' => 'sometimes|nullable|date_format:d/m/Y',
                'fecha_presentacion' => 'sometimes|nullable|date_format:d/m/Y',
            ]);

            if ($validator->fails()) {
                return response()->json(['message' => 'Datos incorrectos', 'errors' => $validator->errors()], 400);
            }

            $data = $validator->validated();

            // Comienza la transacción
            DB::beginTransaction();

            // Verifica si la obligación ya existe
            $existeObligacion = CamaraObligacion::where('id_camara', $data['id_camara'])
                ->where('id_establecimiento', $data['id_establecimiento'])
                ->where('id_entidad', $data['id_entidad'])
                ->where('id_obligacion', $data['id_obligacion'])
                ->first();

            if ($existeObligacion) {
                return response()->json(['message' => 'La obligación ya existe para el Establecimiento'], 409);
            }

            // Formatear fechas
            $data['fecha_inicio'] = isset($data['fecha_inicio'])
                ? Carbon::createFromFormat('d/m/Y', $data['fecha_inicio'])->format('Y-m-d')
                : null;

            $data['fecha_presentacion'] = isset($data['fecha_presentacion'])
                ? Carbon::createFromFormat('d/m/Y', $data['fecha_presentacion'])->format('Y-m-d')
                : null;

            $data['estado'] = 1;

            // Crear la obligación
            $camaraObligacion = CamaraObligacion::create($data);

            // Crear el registro de archivo
            ArchivoObligacionCamara::create([
                'id_camara' => $camaraObligacion->id_camara,
                'id_establecimiento' => $camaraObligacion->id_establecimiento,
                'id_entidad' => $camaraObligacion->id_entidad,
                'id_obligacion' => $camaraObligacion->id_obligacion,
                'ruta_archivo' => '',
                'validado' => 0,
                'estado' => 1,
            ]);

            DB::commit();

            return response()->json(['message' => 'Obligación registrada con éxito'], 201);
        } catch (QueryException $e) {
            DB::rollBack();
            Log::error("Error de base de datos: " . $e->getMessage());
            return response()->json(['message' => 'Error en la base de datos', 'error' => $e->getMessage()], 500);
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error("Error general: " . $th->getMessage());
            return response()->json(['message' => 'Error al registrar la obligación', 'error' => $th->getMessage()], 500);
        }
    }

    public function eliminarObligacionEstablecimiento($id)
    {
        try {
            DB::beginTransaction();
            $camaraObligacion = CamaraObligacion::find($id);
            if (!$camaraObligacion) {
                return response()->json(['message' => 'La obligación no existe'], 400);
            }
            $camaraObligacion->estado = 0;
            $camaraObligacion->save();

            $archivoObligacionCamara = ArchivoObligacionCamara::where('id_camara', $camaraObligacion->id_camara)
                ->where('id_entidad', $camaraObligacion->id_entidad)
                ->where('id_obligacion', $camaraObligacion->id_obligacion)
                ->first();
            $archivoObligacionCamara->estado = 0;
            $archivoObligacionCamara->save();

            DB::commit();
            return response()->json(['message' => 'Obligación eliminada correctamente'], 200);
        } catch (\Throwable $th) {
            Log::error($th);
            DB::rollBack();
            return response()->json(['message' => 'Error al eliminar la obligación'], 500);
        }
    }
}
