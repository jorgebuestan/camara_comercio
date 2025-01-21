<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camara;
use App\Models\DatoTributario;
use App\Models\TipoRegimen;
use App\Models\Pais;
use App\Models\Provincia;
use App\Models\Canton;
use App\Models\Parroquia;
use App\Models\ActividadEconomica;
use App\Models\Establecimiento;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\LogActivity;

class CamaraController extends Controller
{
    //
    public function maestro_camaras()
    {
        if (!Auth::user()->hasRole('admin')) {
            return view('not_authorized');
        }
        $regimen = TipoRegimen::pluck('nombre', 'id');
        $paises = Pais::orderBy('nombre', 'asc')->pluck('nombre', 'id');
        $provincias = Provincia::where('id_pais', 57)->orderBy('nombre', 'asc')->pluck('nombre', 'id'); // Provincias de Ecuador
        $cantones = Canton::where('id_pais', 57)->where('id_provincia', 2)->orderBy('nombre', 'asc')->pluck('nombre', 'id'); // Provincias de Ecuador
        $parroquias = Parroquia::where('id_pais', 57)->where('id_provincia', 2)->where('id_canton', 2)->orderBy('nombre', 'asc')->pluck('nombre', 'id'); // Provincias de Ecuador
        $actividadesEconomicas = ActividadEconomica::pluck('descripcion', 'id');

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

        return view('administrador.camaras.maestro_camaras', compact('regimen', 'paises', 'provincias', 'cantones', 'parroquias', 'actividadesEconomicas'));
    }

    public function obtener_listado_camaras(Request $request)
    {
        $columns = [
            0 => 'camaras.id',
            1 => 'acciones'
        ];

        $query = DB::table('camaras')
            ->select(
                'camaras.id',
                'camaras.fecha_ingreso',
                'camaras.ruc',
                'camaras.razon_social',
                'camaras.cedula_representante_legal',
                'camaras.nombres_representante_legal',
                'camaras.apellidos_representante_legal',
                'camaras.estado'
            ) 
            ->whereIn('camaras.estado', [1, 2])
            ->orderBy('camaras.razon_social', 'asc');

        // Filtro de localidad 

        // Búsqueda
        if ($search = $request->input('search.value')) {
            $query->where(function ($query) use ($search) {
                $query->where('camaras.ruc', 'LIKE', "%{$search}%")
                    ->orWhere('camaras.razon_social', 'LIKE', "%{$search}%")
                    ->orWhere('camaras.cedula_representante_legal', 'LIKE', "%{$search}%")
                    ->orWhere('camaras.nombres_representante_legal', 'LIKE', "%{$search}%")
                    ->orWhere('camaras.apellidos_representante_legal', 'LIKE', "%{$search}%");
            });
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

        $camaras = $query->get();

        $data = $camaras->map(function ($camara) {
            $boton = "";

            $representante_legal = $camara->nombres_representante_legal . " " . $camara->apellidos_representante_legal;
   
            $estado = "";
            if($camara->estado ==1){
                $estado = '<span class="badge bg-success text-light">ACTIVO</span>';
            }
            if($camara->estado ==2){
                $estado = '<span class="badge bg-danger text-light">INACTIVO</span>';
            }

            return [
                'fecha_ingreso' => $camara->fecha_ingreso,
                'ruc' => $camara->ruc,
                'razon_social' => $camara->razon_social,
                'cedula_representante_legal' => $camara->cedula_representante_legal,
                'representante_legal' => $representante_legal,
                'estado' => $estado,
                'btn' => '<div class="d-flex justify-content-center align-items-center gap-2">' .
                            '<button class="btn btn-outline-warning mb-3 btn-sm rounded-pill open-modal" data-id="' . $camara->id . '"><i class="fa-solid fa-pencil"></i>&nbsp;Modificar</button>' .
                            '<button class="btn btn-outline-danger btn-sm rounded-pill mb-3 delete-camara" data-id="' . $camara->id . '">Eliminar&nbsp;<i class="fa-solid fa-trash"></i></button>' .
                         '</div>'
            ];
        });

        $json_data = [
            "draw" => intval($request->input('draw')),
            "recordsTotal" => DB::table('camaras')->count(),
            "recordsFiltered" => $totalFiltered,
            "data" => $data
        ];

        return response()->json($json_data);
    }


    // Validación de datos
    /*$validated = $request->validate([ 
            'fecha_ingreso' => 'required|string', // Validar como string inicialmente
            'ruc' => 'required|string|unique:camaras,ruc|max:20',
            'razon_social' => 'required|string|max:255',
            'cedula_representante_legal' => 'required|string|max:20',
            'nombres_representante_legal' => 'required|string|max:255',
            'apellidos_representante_legal' => 'required|string|max:255',
            'telefono_representante_legal' => 'nullable|string|max:20',
            'correo_representante_legal' => 'nullable|email|max:255',
            'cargo_representante_legal' => 'nullable|string|max:255',
            'direccion_representante_legal' => 'nullable|string|max:255',
            'file' => 'nullable|file|mimes:jpg,jpeg,png|max:2048', // Acepta imágenes de hasta 2MB
        ]);*/
    public function registrar_camara(Request $request)
    {

        try {
            // Convertir fecha_ingreso al formato MySQL (YYYY-MM-DD)
            $fechaIngreso = \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('fecha_ingreso'))->format('Y-m-d');

            $rutaLogo = 'default/default_logo.png'; // Ruta por defecto al logo

            // Manejo del archivo de logo si existe
            if ($request->hasFile('file')) {
                $ruc = $request->input('ruc');
                $archivoLogo = $request->file('file');
                $nombreArchivo = "{$ruc}." . $archivoLogo->getClientOriginalExtension();

                // Crear carpeta con el nombre del RUC y guardar el archivo
                $rutaLogo = "logos/{$ruc}/{$nombreArchivo}";
                $archivoLogo->storeAs("logos/{$ruc}", $nombreArchivo, 'public');
            }

            DB::beginTransaction();

            // Crear registro en la base de datos
            $camara = Camara::create([
                'logo' => $rutaLogo,
                'fecha_ingreso' => $fechaIngreso, // Usar fecha convertida
                'ruc' => strtoupper($request->input('ruc')),
                'razon_social' => strtoupper($request->input('razon_social')),
                'cedula_representante_legal' => strtoupper($request->input('cedula_representante_legal')),
                'nombres_representante_legal' => strtoupper($request->input('nombres_representante_legal')),
                'apellidos_representante_legal' => strtoupper($request->input('apellidos_representante_legal')),
                'telefono_representante_legal' => strtoupper($request->input('telefono_representante_legal')),
                'correo_representante_legal' => strtoupper($request->input('correo_representante_legal')),
                'cargo_representante_legal' => strtoupper($request->input('cargo_representante_legal')),
                'direccion_representante_legal' => strtoupper($request->input('direccion_representante_legal')),
                'estado' => 2
            ]);

            $fechaRegistro = \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('fecha_registro'))->format('Y-m-d');
            $fechaConstitucion = \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('fecha_constitucion'))->format('Y-m-d');


            //$actividadesEconomicasSeleccionadas = $request->input('actividad_economica_seleccionados', []);
            $actividadesEconomicasSeleccionadas = $request->input('actividad_economica_seleccionados', '');
            // Convertir la cadena en un array (si no está vacío)
            $actividadesEconomicasSeleccionadasArray = $actividadesEconomicasSeleccionadas ? array_map('intval', explode(',', $actividadesEconomicasSeleccionadas)) : [];

            DatoTributario::create([
                'id_camara' => $camara->id,
                'tipo_regimen' => strtoupper($request->input('tipo_regimen')),
                'fecha_registro_sri' => $fechaRegistro,
                'fecha_constitucion' => $fechaConstitucion,
                'agente_retencion' => strtoupper($request->input('agente_retencion')),
                'contribuyente_especial' => strtoupper($request->input('contribuyente_especial')),
                'id_pais' => $request->input('pais'),
                'id_provincia' => $request->input('provincia'),
                'id_canton' => $request->input('canton'),
                'id_parroquia' => $request->input('parroquia'),
                'calle' => strtoupper($request->input('calle')),
                'manzana' => strtoupper($request->input('manzana')),
                'numero' => strtoupper($request->input('numero')),
                'interseccion' => strtoupper($request->input('interseccion')),
                'referencia' => strtoupper($request->input('referencia')),
                'actividades_economicas' =>  json_encode($actividadesEconomicasSeleccionadasArray)
            ]);

            User::create([
                'name' => strtoupper($request->input('razon_social')),
                'email' => strtoupper($request->input('correo_representante_legal')),
                'username' => strtoupper($request->input('ruc')),
                'password' => bcrypt('1234'),
                'estado' => 1
            ])->assignRole('camara');

            DB::commit();
            return response()->json(['success' => 'Cámara registrada correctamente'], 200);
        } catch (\Illuminate\Database\QueryException $e) {
            Log::error($e);
            DB::rollBack();
            /*if ($e->getCode() == 23000) { // Código SQL para violación de restricción única
                return response()->json(['error' => 'El RUC ingresado ya existe en el sistema.'], 422);
            }*/
            // Verificar si es un error de restricción única
            // Verificar si es un error de restricción única
            if ($e->getCode() == 23000) {
                $errorMessage = $e->getMessage();
                Log::error("Mensaje de error SQL: " . $errorMessage); // Depurar mensaje completo

                // Analizar el mensaje para determinar el índice violado
                if (preg_match("/Duplicate entry '.*' for key '(?:.*\.)?([^']+)'/", $errorMessage, $matches)) {
                    $indexName = $matches[1]; // Nombre del índice que falló (sin el prefijo de tabla)

                    // Mapear el índice con el campo correspondiente
                    $fieldMap = [
                        'users_email_unique' => 'email',
                        'users_username_unique' => 'username',
                        'camaras_ruc_unique' => 'RUC',
                        // Ajusta los nombres de índices según los resultados del diagnóstico
                    ];

                    if (isset($fieldMap[$indexName])) {
                        $fieldName = $fieldMap[$indexName];
                        return response()->json([
                            'error' => "El valor ingresado para el campo '{$fieldName}' ya existe en el sistema.",
                            'debug' => $errorMessage // Incluye el mensaje completo para depuración en ambiente de desarrollo
                        ], 422);
                    }
                }

                return response()->json([
                    'error' => 'Se ha producido un error de restricción única en la base de datos.',
                    'debug' => $errorMessage // Incluye el mensaje completo para depuración en ambiente de desarrollo
                ], 422);
            }
            return response()->json(['error' => 'Error al registrar la cámara: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            Log::error($e);
            DB::rollBack();
            return response()->json(['error' => 'Error al registrar la cámara: ' . $e->getMessage()], 500);
        }
    }

    public function eliminar_camara($id)
    {
        //$colaborador = Colaborador::find($id);
        try {

            DB::beginTransaction();

            $camara = Camara::where('id', $id)->first();

            if (!$camara) {
                return response()->json(['error' => 'Camara no encontrada'], 404);
            }

            // Cambiar el valor del campo 'activo' a 0
            $camara->estado = 0;
            $camara->save();

            $usuario = User::where('username', $camara->ruc)->first();
            $usuario->estado = 0;
            $usuario->save();

            DB::commit();

            return response()->json(['success' => 'Cámara eliminada correctamente']);
        } catch (\Exception $e) {
            Log::error($e);
            DB::rollBack();
            return response()->json(['error' => 'Error al modificar la Cámara: ' . $e->getMessage()], 500);
        }
    }

    public function detalle_camara($id)
    {
        // Buscar la cámara por ID
        $camara = Camara::find($id);

        if (!$camara) {
            return response()->json(['error' => 'Registro no encontrado'], 404);
        }

        // Convertir el modelo Camara a un array
        $camaraArray = $camara->toArray();

        // Buscar el DatoTributario relacionado
        $datoTributario = DatoTributario::where('id_camara', $id)->first();

        // Si existe un DatoTributario, agregarlo al array de respuesta
        if ($datoTributario) {
            $camaraArray['dato_tributario'] = $datoTributario->toArray();
        }

        $logCamaraIns = LogActivity::with('user')->where('record_id', $id)->where('table_name', 'camaras')->where('action', 'insert')->get();
        $logCamaraMod = LogActivity::with('user')->where('record_id', $id)->where('table_name', 'camaras')->where('action', 'update')->get();

        $logCamaraIns = $logCamaraIns->map(function ($log) {
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

        $logCamaraMod = $logCamaraMod->map(function ($log) {
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

        $logCamara = [
            'insert' => $logCamaraIns[0] ?? null,
            'update' => $logCamaraMod ?? null
        ];


        // Convertir el modelo Camara a un array
        $camaraArray = array_merge($camaraArray, $logCamara);

        // Devolver la respuesta JSON
        return response()->json($camaraArray);
    }

    public function modificar_camara(Request $request)
    {
        try {

            DB::beginTransaction();

            // Convertir fecha_ingreso al formato MySQL (YYYY-MM-DD)
            $fechaIngreso = \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('fecha_ingreso_mod'))->format('Y-m-d');

            

            

            // Buscar el registro existente por ID
            $camara = Camara::find($request->input('camara_id'));

            if (!$camara) {
                return response()->json(['error' => 'La cámara no existe.'], 404);
            }
            $rutaLogo = $camara->logo; // Ruta por defecto al logo

            // Manejo del archivo de logo si existe
            if ($request->hasFile('file_mod')) {
                $ruc = $request->input('ruc_mod');
                $archivoLogo = $request->file('file_mod');
                $nombreArchivo = "{$ruc}." . $archivoLogo->getClientOriginalExtension();

                // Crear carpeta con el nombre del RUC y guardar el archivo
                $rutaLogo = "logos/{$ruc}/{$nombreArchivo}";
                $archivoLogo->storeAs("logos/{$ruc}", $nombreArchivo, 'public');
            }

            // Actualizar los campos del registro existente
            $camara->update([
                'logo' => $rutaLogo,
                'fecha_ingreso' => $fechaIngreso,
                'ruc' => $request->input('ruc_mod'),
                'razon_social' => strtoupper($request->input('razon_social_mod')),
                'cedula_representante_legal' => strtoupper($request->input('cedula_representante_legal_mod')),
                'nombres_representante_legal' => strtoupper($request->input('nombres_representante_legal_mod')),
                'apellidos_representante_legal' => strtoupper($request->input('apellidos_representante_legal_mod')),
                'telefono_representante_legal' => strtoupper($request->input('telefono_representante_legal_mod')),
                'correo_representante_legal' => strtoupper($request->input('correo_representante_legal_mod')),
                'cargo_representante_legal' => strtoupper($request->input('cargo_representante_legal_mod')),
                'direccion_representante_legal' => strtoupper($request->input('direccion_representante_legal_mod')),
                'estado' => 1
            ]);

            // Convertir fechas al formato MySQL (YYYY-MM-DD)
            $fechaRegistro = \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('fecha_registro_mod'))->format('Y-m-d');
            $fechaConstitucion = \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('fecha_constitucion_mod'))->format('Y-m-d');

            // Buscar DatoTributario relacionado
            $datoTributario = DatoTributario::where('id_camara', $camara->id)->first();

            if (!$datoTributario) {
                return response()->json(['error' => 'Los datos tributarios no existen.'], 404);
            }

            $actividadesEconomicasSeleccionadas = $request->input('actividad_economica_seleccionados_mod', '');
            $actividadesEconomicasSeleccionadasArray = $actividadesEconomicasSeleccionadas ? array_map('intval', explode(',', $actividadesEconomicasSeleccionadas)) : [];

            // Actualizar DatoTributario
            $datoTributario->update([
                'tipo_regimen' => strtoupper($request->input('tipo_regimen_mod')),
                'fecha_registro_sri' => $fechaRegistro,
                'fecha_constitucion' => $fechaConstitucion,
                'agente_retencion' => strtoupper($request->input('agente_retencion_mod')),
                'contribuyente_especial' => strtoupper($request->input('contribuyente_especial_mod')),
                'id_pais' => $request->input('pais_mod'),
                'id_provincia' => $request->input('provincia_mod'),
                'id_canton' => $request->input('canton_mod'),
                'id_parroquia' => $request->input('parroquia_mod'),
                'calle' => strtoupper($request->input('calle_mod')),
                'manzana' => strtoupper($request->input('manzana_mod')),
                'numero' => strtoupper($request->input('numero_mod')),
                'interseccion' => strtoupper($request->input('interseccion_mod')),
                'referencia' => strtoupper($request->input('referencia_mod')),
                'actividades_economicas' =>  json_encode($actividadesEconomicasSeleccionadasArray)
            ]);

            $establecimientos = Establecimiento::where('id_camara', $camara->id)->get();
            if ($establecimientos) {
                foreach ($establecimientos as $establecimiento) {
                    $establecimiento->update([
                        'actividades_economicas' => json_encode($actividadesEconomicasSeleccionadasArray)
                    ]);
                }
            }

            $usuario = User::where('username', $camara->ruc)->first();
            $usuario->name = strtoupper($request->input('razon_social_mod'));
            $usuario->email = strtoupper($request->input('correo_representante_legal_mod'));
            $usuario->username = strtoupper($request->input('ruc_mod'));
            $usuario->save();

            DB::commit();

            //return response()->json(['success' => 'Cámara actualizada correctamente'], 200);
            return response()->json([
                'response' => [
                    'msg' => "Registro modificado",
                ]
            ], 201);
        } /*catch (\Illuminate\Database\QueryException $e) { 
            return response()->json(['error' => 'Error al modificar la cámara: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al modificar la cámara: ' . $e->getMessage()], 500);
        }*/ catch (\Illuminate\Database\QueryException $e) {
            Log::error($e);
            DB::rollBack();

            if ($e->getCode() == 23000) { // Código de error para violaciones de restricción única
                $errorMessage = $e->getMessage();
                Log::error("Mensaje de error SQL: " . $errorMessage); // Registro detallado para depuración

                // Analizar el mensaje para determinar el índice violado
                if (preg_match("/Duplicate entry '.*' for key '(?:.*\.)?([^']+)'/", $errorMessage, $matches)) {
                    $indexName = $matches[1]; // Extraer el nombre del índice violado

                    // Mapear el índice con el campo correspondiente
                    $fieldMap = [
                        'users_email_unique' => 'email',
                        'users_username_unique' => 'username',
                        'camaras_ruc_unique' => 'RUC',
                        // Agrega más índices según tu esquema de base de datos
                    ];

                    if (isset($fieldMap[$indexName])) {
                        $fieldName = $fieldMap[$indexName];

                        // Respuesta en caso de un valor duplicado
                        return response()->json([
                            'error' => "El valor ingresado para el campo '{$fieldName}' ya existe en el sistema.",
                            'debug' => app()->isLocal() ? $errorMessage : null // Incluir detalles solo en entornos locales
                        ], 422);
                    }
                }

                // Respuesta genérica si no se puede determinar el campo afectado
                return response()->json([
                    'error' => 'Se ha producido un error de restricción única en la base de datos.',
                    'debug' => app()->isLocal() ? $errorMessage : null // Incluir detalles solo en entornos locales
                ], 422);
            }

            // Respuesta genérica para otros errores de base de datos
            return response()->json([
                'error' => 'Error al modificar el registro: ' . $e->getMessage()
            ], 500);
        } catch (\Exception $e) {
            Log::error($e);
            DB::rollBack();
            return response()->json([
                'error' => 'Error al modificar la Cámara: ' . $e->getMessage(),
                'debug' => app()->isLocal() ? $errorMessage : null // Incluir detalles solo en entornos locales
            ], 500);
        }
    }
}
