<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User; 
use App\Models\ArchivoObligacionSocio;
use App\Models\Camara;
use App\Models\Socio;
use App\Models\SocioObligacion;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ArchivoObligacionSocioController extends Controller
{
    //
    public function index()
    {   
        $id_camara = "";
        if (Auth::user()->hasRole('admin')) {
            $camaras = Camara::pluck('razon_social', 'id');
            $socios = [];
            $obligaciones = []; // Vacío inicialmente porque el admin seleccionará la cámara
        } else {
            $usuario = Auth::user(); // Obtiene el objeto completo del usuario autenticado
            $camara = Camara::where('ruc', $usuario->username)->first(); 
            $id_camara = $camara->id;

            $camaras = []; // El select de cámaras no se mostrará
            $socios = Socio::select(
                            'socios.id',
                            'socios.razon_social as nombre'
                        )
                        ->join('camaras_socios', 'camaras_socios.id_socio', '=', 'socios.id') 
                        ->where('camaras_socios.id_camara', $id_camara)
                        ->pluck('nombre', 'id');
            $obligaciones = [];
        } 
        return view('camara.archivos.obligaciones_socios', compact('camaras', 'socios', 'obligaciones', 'id_camara'));
    }

    public function obtener_listado_archivos_obligaciones_socio(Request $request)
    {
        $columns = [
            0 => 'archivos_obligaciones_socios.id',
            1 => 'archivos_obligaciones_socios.id_entidad',
            2 => 'archivos_obligaciones_socios.id_obligacion',
            3 => 'archivos_obligaciones_socios.validado'
        ];

        $query = DB::table('archivos_obligaciones_socios')
            ->join('entidades', 'entidades.id', '=', 'archivos_obligaciones_socios.id_entidad') 
            ->join('obligaciones', 'obligaciones.id', '=', 'archivos_obligaciones_socios.id_obligacion') 
            ->select(
                'archivos_obligaciones_socios.id',
                'entidades.entidad',
                'obligaciones.obligacion',
                'archivos_obligaciones_socios.validado',
                'archivos_obligaciones_socios.ruta_archivo'
            )
            ->where('archivos_obligaciones_socios.estado', 1);

        // Filtro de localidad 

        // Búsqueda
        if ($search = $request->input('search.value')) {
            $query->where(function ($query) use ($search) {
                $query->where('archivos_obligaciones_socios.id', 'LIKE', "%{$search}%")
                    ->orWhere('archivos_obligaciones_socios.id_entidad', 'LIKE', "%{$search}%")
                    ->orWhere('archivos_obligaciones_socios.id_obligacion', 'LIKE', "%{$search}%")
                    ->orWhere('archivos_obligaciones_socios.validado', 'LIKE', "%{$search}%");
            });
        }

        // **Filtrar por id_camara si está presente en el request**
        //if ($idCamara = $request->input('id_camara')) {
        $idCamara = $request->input('id_socio');
        $query->where('archivos_obligaciones_socios.id_socio', $idCamara);
        //}

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

        $archivos = $query->get();

        $data = $archivos->map(function ($archivo) {
            $boton = "";
            //<i class='bx bxs-checkbox-checked'></i>
            //$archivo->validado 
            if ($archivo->validado == 1) {
                // Generar el botón con el enlace al archivo
                $boton = "<a href='" . asset('storage/' . $archivo->ruta_archivo) . "' 
                            target='_blank' 
                            class='btn btn-primary btn-sm'>
                            Ver Archivo
                          </a>";
            } else {
                // Si no está validado, mostrar un texto o mantener vacío
                $boton = "<span class='text-muted'>Sin archivo</span>";
            }
        
            return [
                'entidad' => $archivo->entidad,
                'obligacion' => $archivo->obligacion,
                'archivo' => $boton
            ];
        });

        $json_data = [
            "draw" => intval($request->input('draw')),
            "recordsTotal" => DB::table('archivos_obligaciones_socios')->count(),
            "recordsFiltered" => $totalFiltered,
            "data" => $data
        ];

        return response()->json($json_data);
    }

    public function guardar_archivo_socio(Request $request)
    {
        try {
            // Obtener el usuario autenticado
            $user = Auth::user();
    
            // Validaciones
            $request->validate([
                'archivo' => 'required|file|mimes:jpg,jpeg,png,pdf,xls,xlsx,doc,docx|max:2048'
            ]);
    
            $socioObligacion = SocioObligacion::where('id', $request->input('obligacion'))->first();
            $socioDestino = Socio::where('id', $socioObligacion->id_socio)->first();
    
            // Obtener el archivo subido
            $archivo = $request->file('archivo');
            $nombreArchivo = time() . '_' . $archivo->getClientOriginalName();
            $rutaArchivo = $archivo->storeAs(
                'archivos/socio_obligaciones/' . $socioDestino->identificacion,
                $nombreArchivo,
                'public'
            );
    
            $archivoObligacionCamara = ArchivoObligacionSocio::where('id_socio', $socioObligacion->id_socio)
                ->where('id_entidad', $socioObligacion->id_entidad)
                ->where('id_obligacion', $socioObligacion->id_obligacion)
                ->first();
    
            // Actualizar los campos del registro existente
            $archivoObligacionCamara->update([
                'subido_por' => $user->id,
                'ruta_archivo' => $rutaArchivo,
                'validado' => 1
            ]);
    
            // Respuesta JSON
            return response()->json([
                'success' => true,
                'message' => 'Archivo subido correctamente a la carpeta del usuario: ' . $user->name
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Hubo un error al subir el archivo: ' . $e->getMessage()
            ], 500);
        }
    }
}
