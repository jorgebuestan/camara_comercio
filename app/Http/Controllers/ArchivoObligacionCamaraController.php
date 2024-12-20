<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User; 
use App\Models\ArchivoObligacionCamara;
use App\Models\Camara;
use App\Models\CamaraObligacion;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ArchivoObligacionCamaraController extends Controller
{
    //
    /*public function index()
    {   
        //$usuarios = Auth::user()->hasRole('admin') ? User::all() : null;
        $camaras = Camara::pluck('razon_social', 'id');
        return view('camara.archivos.obligaciones_camaras', compact('camaras') );
    }*/

    public function index()
    {
        $id_camara = "";
        if (Auth::user()->hasRole('admin')) {
            $camaras = Camara::pluck('razon_social', 'id');
            $obligaciones = []; // Vacío inicialmente porque el admin seleccionará la cámara
        } else {
            $usuario = Auth::user(); // Obtiene el objeto completo del usuario autenticado
            $camara = Camara::where('ruc', $usuario->username)->first(); 
            $id_camara = $camara->id;

            $camaras = []; // El select de cámaras no se mostrará
            $obligaciones = CamaraObligacion::select(
                                'camaras_obligaciones.id',
                                DB::raw("CONCAT(entidades.entidad, ' - ', obligaciones.obligacion) AS nombre")
                            )
                            ->join('obligaciones', 'obligaciones.id', '=', 'camaras_obligaciones.id_obligacion')
                            ->join('entidades', 'entidades.id', '=', 'camaras_obligaciones.id_entidad')
                            ->where('camaras_obligaciones.id_camara', $camara->id)
                            ->pluck('nombre', 'id');
        } 
        return view('camara.archivos.obligaciones_camaras', compact('camaras', 'obligaciones', 'id_camara'));
    } 
    

    public function guardar_archivo_camara(Request $request)
    {
        try {
            // Obtener el usuario autenticado
            $user = Auth::user();
    
            // Validaciones
            $request->validate([
                'archivo' => 'required|file|mimes:jpg,jpeg,png,pdf,xls,xlsx,doc,docx|max:2048'
            ]);
    
            $camaraObligacion = CamaraObligacion::where('id', $request->input('obligacion'))->first();
            $camaraDestino = Camara::where('id', $camaraObligacion->id_camara)->first();
    
            // Obtener el archivo subido
            $archivo = $request->file('archivo');
            $nombreArchivo = time() . '_' . $archivo->getClientOriginalName();
            $rutaArchivo = $archivo->storeAs(
                'archivos/camara_obligaciones/' . $camaraDestino->ruc,
                $nombreArchivo,
                'public'
            );
    
            $archivoObligacionCamara = ArchivoObligacionCamara::where('id_camara', $camaraObligacion->id_camara)
                ->where('id_entidad', $camaraObligacion->id_entidad)
                ->where('id_obligacion', $camaraObligacion->id_obligacion)
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

    public function obtener_listado_archivos_obligaciones_camara(Request $request)
    {
        $columns = [
            0 => 'archivos_obligaciones_camaras.id',
            1 => 'archivos_obligaciones_camaras.id_entidad',
            2 => 'archivos_obligaciones_camaras.id_obligacion',
            3 => 'archivos_obligaciones_camaras.validado'
        ];

        $query = DB::table('archivos_obligaciones_camaras')
            ->join('entidades', 'entidades.id', '=', 'archivos_obligaciones_camaras.id_entidad') 
            ->join('obligaciones', 'obligaciones.id', '=', 'archivos_obligaciones_camaras.id_obligacion') 
            ->select(
                'archivos_obligaciones_camaras.id',
                'entidades.entidad',
                'obligaciones.obligacion',
                'archivos_obligaciones_camaras.validado',
                'archivos_obligaciones_camaras.ruta_archivo'
            )
            ->where('archivos_obligaciones_camaras.estado', 1);

        // Filtro de localidad 

        // Búsqueda
        if ($search = $request->input('search.value')) {
            $query->where(function ($query) use ($search) {
                $query->where('archivos_obligaciones_camaras.id', 'LIKE', "%{$search}%")
                    ->orWhere('archivos_obligaciones_camaras.id_entidad', 'LIKE', "%{$search}%")
                    ->orWhere('archivos_obligaciones_camaras.id_obligacion', 'LIKE', "%{$search}%")
                    ->orWhere('archivos_obligaciones_camaras.validado', 'LIKE', "%{$search}%");
            });
        }

        // **Filtrar por id_camara si está presente en el request**
        //if ($idCamara = $request->input('id_camara')) {
        $idCamara = $request->input('id_camara');
        $query->where('archivos_obligaciones_camaras.id_camara', $idCamara);
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
            "recordsTotal" => DB::table('archivos_obligaciones_camaras')->count(),
            "recordsFiltered" => $totalFiltered,
            "data" => $data
        ];

        return response()->json($json_data);
    }
}
