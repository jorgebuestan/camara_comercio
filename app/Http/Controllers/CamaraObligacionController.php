<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\CamaraObligacion;
use App\Models\Camara;
use App\Models\Entidad;
use Carbon\Carbon; 
use App\Models\ArchivoObligacionCamara;


class CamaraObligacionController extends Controller
{
    public function obligaciones_camara(Request $request)
    {
        $camarasSelect = Camara::pluck('razon_social', 'id');
        $entidades = Entidad::with('obligaciones.obligacion.tiempo_presentacion', 'obligaciones.obligacion.tipo_presentacion')->where('estado', 1)->get();
        $entidadesSelect = $entidades->pluck('entidad', 'id');

        return view('administrador.camaras.obligaciones_camara', compact('camarasSelect', 'entidadesSelect', 'entidades'));
    }
    public function index(Request $request)
    {
        $columns = [
            0 => 'entidades.entidad',
            1 => 'obligaciones.obligacion',
            2 => 'camaras_obligaciones.id',
        ];
        $data = $request->validate([
            'id_entidad' => 'sometimes|integer|nullable',
            'id_camara' => 'sometimes|integer|nullable',
            'id_obligacion' => 'sometimes|integer|nullable',
            'fecha_inicio' => 'sometimes|date|nullable',
            'fecha_presentacion' => 'sometimes|date|nullable',
            'start' => 'sometimes|integer|nullable',
            'length' => 'sometimes|integer|nullable',
            'estado' => 'sometimes|integer|nullable',
            'with_entidad' => 'sometimes|boolean|nullable',
            'with_obligacion' => 'sometimes|boolean|nullable',
            'with_camara' => 'sometimes|boolean|nullable',
        ]);
        $camaraObligaciones = CamaraObligacion::when(isset($request['camaras_obligaciones.id_entidad']), fn($q) => $q->where('id_entidad', $request['id_entidad']))
            ->when(isset($request['id_camara']), fn($q) => $q->where('camaras_obligaciones.id_camara', $request['id_camara']))
            ->when(isset($request['id_obligacion']), fn($q) => $q->where('camaras_obligaciones.id_obligacion', $request['id_obligacion']))
            ->when(isset($request['fecha_inicio']), fn($q) => $q->where('camaras_obligaciones.fecha_inicio', $request['fecha_inicio']))
            ->when(isset($request['fecha_presentacion']), fn($q) => $q->where('camaras_obligaciones.fecha_presentacion', $request['fecha_presentacion']))
            ->when(isset($request['estado']), fn($q) => $q->where('camaras_obligaciones.estado', $request['estado']))
            ->when(!isset($request['estado']), fn($q) => $q->where('camaras_obligaciones.estado', 1))
            ->when(isset($request['with_entidad']), fn($q) => $q->with('entidad'))
            ->when(isset($request['with_obligacion']), fn($q) => $q->with('obligacion.tiempo_presentacion', 'obligacion.tipo_presentacion'))
            ->when(
                isset($request['with_camara']),
                fn($q) => $q->with('camara')
            )
            ->when(isset($request['order'][0]['column']), function ($q) use ($request, $columns) {
                $orderColumnIndex = $request['order'][0]['column'];
                $orderDir = $request['order'][0]['dir'];
                $q->leftJoin('entidades', 'camaras_obligaciones.id_entidad', '=', 'entidades.id')
                    ->leftJoin('obligaciones', 'camaras_obligaciones.id_obligacion', '=', 'obligaciones.id');
                $q->select([
                    'camaras_obligaciones.*',
                    'entidades.entidad as entidad_nombre',
                    'obligaciones.obligacion as obligacion_nombre',
                ]);
                $q->orderBy($columns[$orderColumnIndex], $orderDir);
            });

        $total_filtered = $camaraObligaciones->count();

        $start = $request['start'] ?? 0;
        $length = $request['length'] ?? 10;
        $camaraObligaciones->skip($start)->take($length);

        $camaraObligaciones = $camaraObligaciones->get();

        $response = $camaraObligaciones->map(function ($camaraObligacion) {
            $boton = "";

            return array_merge($camaraObligacion->toArray(), [
                'nombre_entidad' => $camaraObligacion->entidad->entidad ?? '',
                'nombre_obligacion' => $camaraObligacion->obligacion->obligacion ?? '',
                'btn' => '<div class="d-flex justify-content-center align-items-center flex-wrap gap-2"><button class="btn btn-primary mb-1 edit-modal flex-grow-1 flex-shrink-1" style="min-width: 100px;" data-id="' . $camaraObligacion->id . '">Modificar</button>' .
                    '<button class="btn btn-warning mb-1 delete-camara-obligacion flex-grow-1 flex-shrink-1" style="min-width: 100px;" data-id="' . $camaraObligacion->id . '">Eliminar</button></div>'
            ]);
        });

        return response()->json([
            'draw' => intval($request['draw']) ?? 1,
            'recordsTotal' => CamaraObligacion::count(),
            'recordsFiltered' => $total_filtered,
            'data' => $response
        ]);
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'id_camara' => 'required|integer',
                'id_entidad' => 'required|integer',
                'id_obligacion' => 'required|integer',
                'fecha_inicio' => 'sometimes|nullable|date_format:d/m/Y',
                'fecha_presentacion' => 'sometimes|nullable|date_format:d/m/Y',
            ]);
            DB::beginTransaction();
            $existeObligacion = CamaraObligacion::where('id_camara', $data['id_camara'])
                ->where('id_entidad', $data['id_entidad'])
                ->where('id_obligacion', $data['id_obligacion'])
                ->first();

            if ($existeObligacion) {
                return response()->json(['message' => 'La obligación ya existe para la cámara'], 400);
            }

            if (isset($data['fecha_inicio'])) {
                $data['fecha_inicio'] =
                    Carbon::createFromFormat('d/m/Y', $data['fecha_inicio'])->format('Y-m-d');
            } else {
                $data['fecha_inicio'] = null;
            }
            if (isset($data['fecha_presentacion'])) {
                $data['fecha_presentacion'] =
                    Carbon::createFromFormat('d/m/Y', $data['fecha_presentacion'])->format('Y-m-d');
            } else {
                $data['fecha_presentacion'] = null;
            }
            $data['estado'] = 1;
            Log::info($data);
            $camaraObligacion = CamaraObligacion::create($data);
            $archivoObligacionCamara = ArchivoObligacionCamara::create([
                'id_camara' => $camaraObligacion->id_camara,
                'id_entidad' => $camaraObligacion->id_entidad,
                'id_obligacion' => $camaraObligacion->id_obligacion, 
                'ruta_archivo' => '',
                'validado' => 0,
                'estado' => 1
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            Log::error($th);
            return response()->json(['message' => 'Error al guardar la obligación de la cámara'], 500);
        }
    }

    public function update(Request $request)
    {
        try {

            $data = $request->validate([
                'id' => 'required|integer',
                'id_camara' => 'required|integer',
                'id_entidad' => 'required|integer',
                'id_obligacion' => 'required|integer',
                'fecha_inicio' => 'sometimes|nullable|date_format:d/m/Y',
                'fecha_presentacion' =>
                'sometimes|nullable|date_format:d/m/Y',
            ]);
            DB::beginTransaction();
            $camaraObligacion = CamaraObligacion::find($data['id']);
            if (!$camaraObligacion) {
                return response()->json(['message' => 'La obligación no existe'], 400);
            }
            if (isset($data['fecha_inicio'])) {
                $data['fecha_inicio'] =
                    Carbon::createFromFormat('d/m/Y', $data['fecha_inicio'])->format('Y-m-d');
            }
            if (isset($data['fecha_presentacion'])) {
                $data['fecha_presentacion'] =
                    Carbon::createFromFormat('d/m/Y', $data['fecha_presentacion'])->format('Y-m-d');
            }
            Log::info($data);
            $camaraObligacion->update($data);
            DB::commit();
            return response()->json(['message' => 'Obligación actualizada correctamente'], 200);
        } catch (\Throwable $th) {
            Log::error($th);
            DB::rollBack();
            return response()->json(['message' => 'Error al actualizar la obligación'], 500);
        }
    }

    public function eliminarObligacionCamara($id)
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
