<?php

namespace App\Http\Controllers;

use App\Models\TipoRegimen;
use App\Models\Pais;
use App\Models\Provincia;
use App\Models\Canton;
use App\Models\Parroquia;
use App\Models\Socio;
use App\Models\TipoPersona;
use App\Models\TipoPersoneria;
use App\Models\TipoIdentificacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class SocioController extends Controller
{
    //
    public function maestro_socios()
    {
        $regimenes = TipoRegimen::pluck('nombre', 'id');
        $paises = Pais::pluck('nombre', 'id');
        $provincias = Provincia::where('id_pais', 57)->pluck('nombre', 'id'); // Provincias de Ecuador
        $cantones = Canton::where('id_pais', 57)->where('id_provincia', 2)->pluck('nombre', 'id'); // Provincias de Ecuador
        $parroquias = Parroquia::where('id_pais', 57)->where('id_provincia', 2)->where('id_canton', 2)->pluck('nombre', 'id'); // Provincias de Ecuador

        $tiposPersona = TipoPersona::pluck('descripcion', 'id'); // Obtenemos los tipos de persona
        $tiposPersoneria = TipoPersoneria::pluck('descripcion', 'id'); // Obtenemos los tipos de personeria
        $tiposIdentificacion = TipoIdentificacion::pluck('descripcion', 'id'); // Obtenemos los tipos de identificacion

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


        return view('administrador.maestro_socios', compact('regimenes', 'paises', 'provincias', 'cantones', 'parroquias', 'tiposPersona', 'tiposPersoneria', 'tiposIdentificacion'));
    }

    public function obtener_listado_socios(Request $request)
    {
        try {
            $columns = [
                0 => 'socios.id',
                1 => 'razon_social',
            ];

            // Construcción de la consulta inicial
            $query = Socio::with('tipo_identificacion', 'tipo_persona', 'tipo_personeria')
                ->where('estado', 1);

            // Búsqueda
            if ($search = $request->input('search.value')) {
                $query->where(function ($q) use ($search) {
                    $q->where('razon_social', 'LIKE', "%{$search}%")
                        ->orWhere('tipo_persona.descripcion', 'LIKE', "%{$search}%")
                        ->orWhere('tipo_identificacion.descripcion', 'LIKE', "%{$search}%");
                });
            }

            // Conteo para recordsFiltered
            $totalFiltered = $query->count();

            // Orden
            $orderColumnIndex = $request->input('order.0.column', 0); // Por defecto, columna 0
            $orderDir = $request->input('order.0.dir', 'asc'); // Por defecto, orden ascendente

            if (isset($columns[$orderColumnIndex])) {
                $orderColumn = $columns[$orderColumnIndex];
                $query->orderBy($orderColumn, $orderDir);
            }

            // Paginación
            $start = $request->input('start', 0);
            $length = $request->input('length', 10);
            $query->skip($start)->take($length);

            // Obtener los datos
            $socios = $query->get();
            // Mapear los datos para la respuesta
            $data = $socios->map(function ($socio) {
                $tipo_persona = $socio->tipo_persona->descripcion ?? '';
                $tipo_personeria = $socio->tipo_personeria->descripcion ?? '';
                $socio_arr = $socio->toArray();
                return array_merge($socio_arr, [
                    'fecha_ingreso' => Carbon::parse($socio->fecha_ingreso)->format('d/m/Y'),
                    'fecha_registro_mercantil' => Carbon::parse($socio->fecha_registro_mercantil)->format('d/m/Y'),
                    'fecha_vencimiento_nombramiento' => Carbon::parse($socio->fecha_vencimiento_nombramiento)->format('d/m/Y'),
                    'razon_social' => $socio->razon_social,
                    'persona_data' => $tipo_persona . ' - ' . $tipo_personeria,
                    'identificacion' => $socio->identificacion,
                    'tipo_identificacion' => $socio->tipo_identificacion->descripcion ?? '',
                    'btn' => '<div class="d-flex justify-content-center align-items-center flex-wrap gap-2"><button class="btn btn-primary mb-1 edit-modal flex-grow-1 flex-shrink-1" style="min-width: 100px;" data-id="' . $socio->id . '">Modificar</button>' .
                        '<button class="btn btn-warning mb-1 delete-socio flex-grow-1 flex-shrink-1" style="min-width: 100px;" data-id="' . $socio->id . '">Eliminar</button></div>'
                ]);
            });

            // Preparar la respuesta
            $response = [
                "draw" => intval($request->input('draw')),
                "recordsTotal" => Socio::where('estado', 1)->count(),
                "recordsFiltered" => $totalFiltered,
                "data" => $data,
            ];

            return response()->json($response);
        } catch (\Throwable $th) {
            Log::error($th);

            return response()->json(
                [
                    'error' => $th->getMessage(),
                    'message' => 'Error al obtener los socios',
                ],
                500,
            );
        }
    }

    public function registrar_socio(Request $request)
    {
        $storedFilePath = null;
        try {
            DB::beginTransaction();
            $data = $request->all();
            $fecha_ingreso = Carbon::createFromFormat('d/m/Y', $data['fecha_ingreso'])->format('Y-m-d');
            $rutaFoto = 'prueba';

            if ($request->hasFile('file')) {
                $archivoFoto = $request->file('file');
                $nombreArchivo = $data['identificacion'] . '.' . $archivoFoto->getClientOriginalExtension();

                $storedFilePath = "fotos_socios/" . $data['identificacion'] . "/" . $nombreArchivo;

                $rutaFoto = "fotos_socios/" . $nombreArchivo;
                $archivoFoto->storeAs("fotos_socios/" . $data['identificacion'], $nombreArchivo, 'public');
            }

            $numero_consecutivo = Socio::count() + 1;

            $tipo_identificacion = null;
            if ($data['tipo_personeria'] == 2) {
                $tipo_identificacion = 1;
            } else {
                $tipo_identificacion = $data['tipo_identificacion'];
            }

            $socioExiste = Socio::where('identificacion', $data['identificacion'])->first();
            if ($socioExiste) {
                return response()->json(['error' => 'La identificacion ingresada ya existe en el sistema.'], 422);
            }
            $socio = Socio::create([
                'logo' => $rutaFoto,
                'numero_consecutivo' => $numero_consecutivo,
                'fecha_ingreso' => $fecha_ingreso,
                'id_tipo_persona' => $data['tipo_persona'],
                'id_tipo_personeria' => $data['tipo_personeria'],
                'id_tipo_identificacion' => $tipo_identificacion,
                'identificacion' => $data['identificacion'],
                'razon_social' => $data['razon_social'],
                'correo' => $data['correo'],
                'telefono' => $data['telefono'],
                'cedula_representante_legal' => $data['cedula_representante'],
                'nombres_representante_legal' => $data['nombre_representante'],
                'apellidos_representante_legal' => $data['apellido_representante'],
                'telefono_representante_legal' => $data['telefono_representante'],
                'correo_representante_legal' => $data['correo_representante'],
                'fecha_registro_mercantil' => Carbon::createFromFormat('d/m/Y', $data['fecha_registro_mercantil'])->format('Y-m-d'),
                'fecha_vencimiento_nombramiento' => Carbon::createFromFormat('d/m/Y', $data['vencimiento_nombramiento'])->format('Y-m-d'),
                'fecha_desafiliacion' => null,
                'motivo_desafiliacion' => null,
                'estado' => 1,
            ]);
            DB::commit();
            return response()->json([
                'message' => 'Socio registrado correctamente',
            ], 200);
        } catch (\Throwable $th) {
            Log::error($th);
            DB::rollBack();
            if ($storedFilePath && Storage::disk('public')->exists($storedFilePath)) {
                Storage::disk('public')->delete($storedFilePath);
            }
            return response()->json(
                [
                    'error' => $th->getMessage(),
                    'message' => 'Error al registrar el socio',
                ],
                500,
            );
        }
    }

    public function modificar_socio(Request $request)
    {
        $storedFilePath = null;
        try {
            DB::beginTransaction();
            $data = $request->all();
            $socioId = $request->socio_id;
            $socioId = intval($socioId);

            $socio = Socio::find($socioId);
            if (!$socio) {
                return response()->json(['error' => 'Socio no encontrado.'], 404);
            }
            $fecha_ingreso = Carbon::createFromFormat('d/m/Y', $data['fecha_ingreso'])->format('Y-m-d');
            $rutaFoto = 'prueba';

            if ($request->hasFile('file')) {
                $archivoFoto = $request->file('file');
                $nombreArchivo = $data['identificacion'] . '.' . $archivoFoto->getClientOriginalExtension();

                $storedFilePath = "fotos_socios/" . $data['identificacion'] . "/" . $nombreArchivo;
                $rutaFoto = "fotos_socios/" . $nombreArchivo;
                $archivoFoto->storeAs("fotos_socios/" . $data['identificacion'], $nombreArchivo, 'public');
            }

            $tipo_identificacion = null;
            if ($data['tipo_personeria'] == 2) {
                $tipo_identificacion = 1;
            } else {
                $tipo_identificacion = $data['tipo_identificacion'];
            }

            $socioExiste = Socio::where('identificacion', $data['identificacion'])->count();
            if ($socioExiste > 1) {
                return response()->json(['error' => 'La identificacion ingresada ya existe en el sistema.'], 422);
            }

            $socio->update([
                'logo' => $rutaFoto,
                'fecha_ingreso' => $fecha_ingreso,
                'id_tipo_persona' => $data['tipo_persona'],
                'id_tipo_personeria' => $data['tipo_personeria'],
                'id_tipo_identificacion' => $tipo_identificacion,
                'identificacion' => $data['identificacion'],
                'razon_social' => $data['razon_social'],
                'correo' => $data['correo'],
                'telefono' => $data['telefono'],
                'cedula_representante_legal' => $data['cedula_representante'],
                'nombres_representante_legal' => $data['nombre_representante'],
                'apellidos_representante_legal' => $data['apellido_representante'],
                'telefono_representante_legal' => $data['telefono_representante'],
                'correo_representante_legal' => $data['correo_representante'],
                'fecha_registro_mercantil' => Carbon::createFromFormat('d/m/Y', $data['fecha_registro_mercantil'])->format('Y-m-d'),
                'fecha_vencimiento_nombramiento' => Carbon::createFromFormat('d/m/Y', $data['vencimiento_nombramiento'])->format('Y-m-d'),
                'estado' => 1,
            ]);
            DB::commit();
            return response()->json([
                'message' => 'Socio actualizado correctamente',
            ], 200);
        } catch (\Throwable $th) {
            Log::error($th);
            DB::rollBack();
            if ($storedFilePath && Storage::disk('public')->exists($storedFilePath)) {
                Storage::disk('public')->delete($storedFilePath);
            }
            return response()->json(
                [
                    'error' => $th->getMessage(),
                    'message' => 'Error al registrar el socio',
                ],
                500,
            );
        }
    }


    public function eliminar_socio(Request $request)
    {
        try {
            DB::beginTransaction();

            $socioId = $request->input('socio_id');
            $motivo = $request->input('motivo');
            $socio = Socio::find($socioId);

            if (!$socio) {
                return response()->json(['error' => 'Socio no encontrado.'], 404);
            }

            $socio->estado = 0;
            $socio->fecha_desafiliacion = Carbon::now();
            $socio->motivo_desafiliacion = $motivo;
            $socio->save();
            DB::commit();

            return response()->json(['message' => 'Socio eliminado correctamente.'], 200);
        } catch (\Throwable $th) {
            Log::error($th);
            DB::rollBack();
            return response()->json(
                [
                    'error' => $th->getMessage(),
                    'message' => 'Error al eliminar el socio',
                ],
                500
            );
        }
    }
}
