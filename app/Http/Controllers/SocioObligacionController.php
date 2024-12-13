<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\SocioObligacion;
use App\Models\Socio;
use App\Models\Entidad;
use Carbon\Carbon;

class SocioObligacionController extends Controller
{
    public function obligaciones_socio(Request $request)
    {
        $sociosSelect = Socio::pluck('razon_social', 'id');
        $entidades = Entidad::with('obligaciones.obligacion.tiempo_presentacion', 'obligaciones.obligacion.tipo_presentacion')->where('estado', 1)->get();
        $entidadesSelect = $entidades->pluck('entidad', 'id');

        return view('administrador.socios.obligaciones_socio', compact('sociosSelect', 'entidadesSelect', 'entidades'));
    }

    public function index(Request $request)
    {
        $columns = [
            0 => 'socios_obligaciones.id',
            1 => 'socios_obligaciones.entidad',
            3 => 'socios_obligaciones.obligacion',
        ];
        $data = $request->validate([
            'id_entidad' => 'sometimes|integer|nullable',
            'id_socio' => 'sometimes|integer|nullable',
            'id_obligacion' => 'sometimes|integer|nullable',
            'fecha_inicio' => 'sometimes|date|nullable',
            'fecha_presentacion' => 'sometimes|date|nullable',
            'start' => 'sometimes|integer|nullable',
            'length' => 'sometimes|integer|nullable',
            'estado' => 'sometimes|integer|nullable',
            'with_entidad' => 'sometimes|boolean|nullable',
            'with_obligacion' => 'sometimes|boolean|nullable',
            'with_socio' => 'sometimes|boolean|nullable',
        ]);
        $socioObligaciones = SocioObligacion::when(isset($request['id_entidad']), fn($q) => $q->where('id_entidad', $request['id_entidad']))
            ->when(isset($request['id_socio']), fn($q) => $q->where('id_socio', $request['id_socio']))
            ->when(isset($request['id_obligacion']), fn($q) => $q->where('id_obligacion', $request['id_obligacion']))
            ->when(isset($request['fecha_inicio']), fn($q) => $q->where('fecha_inicio', $request['fecha_inicio']))
            ->when(isset($request['fecha_presentacion']), fn($q) => $q->where('fecha_presentacion', $request['fecha_presentacion']))
            ->when(isset($request['estado']), fn($q) => $q->where('estado', $request['estado']))
            ->when(!isset($request['estado']), fn($q) => $q->where('estado', 1))
            ->when(isset($request['with_entidad']), fn($q) => $q->with('entidad'))
            ->when(isset($request['with_obligacion']), fn($q) => $q->with('obligacion.tiempo_presentacion', 'obligacion.tipo_presentacion'))
            ->when(
                isset($request['with_socio']),
                fn($q) => $q->with('socio')
            );
        $total_filtered = $socioObligaciones->count();
        $orderColumnIndex = $request['order'][0]['column'] ?? 0;
        $orderDir = $request['order'][0]['dir'] ?? 'asc';

        if (isset($columns[$orderColumnIndex])) {
            $orderColumn = $columns[$orderColumnIndex];
            $socioObligaciones->orderBy($orderColumn, $orderDir);
        }

        $start = $request['start'] ?? 0;
        $length = $request['length'] ?? 10;
        $socioObligaciones->skip($start)->take($length);

        $socioObligaciones = $socioObligaciones->get();

        $response = $socioObligaciones->map(function ($socioObligacion) {
            $boton = "";
            return array_merge($socioObligacion->toArray(), [
                'nombre_entidad' => $socioObligacion->entidad->entidad ?? '',
                'nombre_obligacion' => $socioObligacion->obligacion->obligacion ?? '',
                'btn' => '<div class="d-flex justify-content-center align-items-center flex-wrap gap-2"><button class="btn btn-primary mb-1 edit-modal flex-grow-1 flex-shrink-1" style="min-width: 100px;" data-id="' . $socioObligacion->id . '">Modificar</button>' .
                    '<button class="btn btn-warning mb-1 delete-socio-obligacion flex-grow-1 flex-shrink-1" style="min-width: 100px;" data-id="' . $socioObligacion->id . '">Eliminar</button></div>'
            ]);
        });

        return response()->json([
            'draw' => intval($request['draw']) ?? 1,
            'recordsTotal' => SocioObligacion::count(),
            'recordsFiltered' => $total_filtered,
            'data' => $response
        ]);
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'id_socio' => 'required|integer',
                'id_entidad' => 'required|integer',
                'id_obligacion' => 'required|integer',
                'fecha_inicio' => 'sometimes|nullable|date_format:d/m/Y',
                'fecha_presentacion' => 'sometimes|nullable|date_format:d/m/Y',
            ]);
            DB::beginTransaction();
            $existeObligacion = SocioObligacion::where('id_socio', $data['id_socio'])
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
            $socioObligacion = SocioObligacion::create($data);
            DB::commit();
        } catch (\Throwable $th) {
            Log::error($th);
            return response()->json(['message' => 'Error al guardar la obligación del socio'], 500);
        }
    }

    public function update(Request $request)
    {
        try {

            $data = $request->validate([
                'id' => 'required|integer',
                'id_socio' => 'required|integer',
                'id_entidad' => 'required|integer',
                'id_obligacion' => 'required|integer',
                'fecha_inicio' => 'sometimes|nullable|date_format:d/m/Y',
                'fecha_presentacion' =>
                'sometimes|nullable|date_format:d/m/Y',
            ]);
            DB::beginTransaction();
            $socioObligacion = SocioObligacion::find($data['id']);
            if (!$socioObligacion) {
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
            $socioObligacion->update($data);
            DB::commit();
            return response()->json(['message' => 'Obligación actualizada correctamente'], 200);
        } catch (\Throwable $th) {
            Log::error($th);
            DB::rollBack();
            return response()->json(['message' => 'Error al actualizar la obligación'], 500);
        }
    }

    public function eliminarObligacionSocio($id)
    {
        try {
            DB::beginTransaction();
            $socioObligacion = SocioObligacion::find($id);
            if (!$socioObligacion) {
                return response()->json(['message' => 'La obligación no existe'], 400);
            }
            $socioObligacion->estado = 0;
            $socioObligacion->save();
            DB::commit();
            return response()->json(['message' => 'Obligación eliminada correctamente'], 200);
        } catch (\Throwable $th) {
            Log::error($th);
            DB::rollBack();
            return response()->json(['message' => 'Error al eliminar la obligación'], 500);
        }
    }
}
