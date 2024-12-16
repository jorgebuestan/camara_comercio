<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon; 
use Illuminate\Http\Request;
use App\Models\Camara; 
use App\Models\Socio; 
use App\Models\CamaraSocio; 
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromCollection; 
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

use App\Exports\SociosCamara;
use PDF; // Asegúrate de usar Laravel-DomPDF

class ReportesController extends Controller
{
    // 
    public function reporte_socios_camara()
    {       
        $camaras = Camara::pluck('razon_social', 'id');   

        return view('administrador.reportes.socios_camaras', compact('camaras') );
    }

    public function obtener_listado_socios_camaras(Request $request)
    {
        $columns = [
            0 => 'camaras_socios.id', 
            1 => 'camaras_socios.fecha_afiliacion', 
            2 => 'socios.identificacion', 
            3 => 'socios.razon_social' , 
            4 => 'camaras.razon_social' 
        ];

        $query = DB::table('socios')  
            ->join('camaras_socios', 'camaras_socios.id_socio', '=', 'socios.id') 
            ->join('camaras', 'camaras.id', '=', 'camaras_socios.id_camara') 
            ->join('tipo_personeria', 'tipo_personeria.id', '=', 'socios.id_tipo_personeria') 
            ->select(
                'camaras_socios.id', 
                'camaras.razon_social as camara', 
                 DB::raw("DATE_FORMAT(camaras_socios.fecha_afiliacion, '%d/%m/%Y') as fecha_afiliacion"),
                'socios.identificacion',
                'socios.razon_social as socio',
                'tipo_personeria.descripcion as tipo_personeria'
            )
            ->where('camaras_socios.estado', 1);

        // Filtro de localidad 

        // Búsqueda
        if ($search = $request->input('search.value')) {
            $query->where(function($query) use ($search) {
                $query->where('socios.razon_social', 'LIKE', "%{$search}%")  
                    ->orWhere('socios.identificacion', 'LIKE', "%{$search}%"); 
            });
        }

        // **Filtrar por id_camara si está presente en el request**
        $idEntidad = $request->input('id_camara');
        if ($idEntidad != -1) {
            $query->where('camaras_socios.id_camara', $idEntidad);
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

        $socios = $query->get();

        $data = $socios->map(function ($socio) {
        $boton = "";  
             
            return [
                'camara' => $socio->camara, 
                'fecha_afiliacion' => $socio->fecha_afiliacion, 
                'identificacion' => $socio->identificacion, 
                'socio' => $socio->socio,  
                'tipo_personeria' => $socio->tipo_personeria 
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

    public function exportar_excel_socios_por_camara(Request $request)
   {
       $camara = $request->input('camara'); 

       // Consulta con filtros
       $query = DB::table('socios')  
            ->join('camaras_socios', 'camaras_socios.id_socio', '=', 'socios.id') 
            ->join('camaras', 'camaras.id', '=', 'camaras_socios.id_camara') 
            ->join('tipo_personeria', 'tipo_personeria.id', '=', 'socios.id_tipo_personeria') 
            ->select(  
                'camaras.razon_social as camara', 
                 DB::raw("DATE_FORMAT(camaras_socios.fecha_afiliacion, '%d/%m/%Y') as fecha_afiliacion"),
                'socios.razon_social as socio',
                'socios.identificacion',
                'tipo_personeria.descripcion as tipo_personeria'
            )
            ->where('camaras.estado', 1);
 
   
       // Aplicar filtros
       if ($camara != -1) {
           $query->where('camaras.id', $camara); 
       } 
   
        $datos1 = $query->get(); 

        // Exportar a Excel
        return Excel::download(new SociosCamara($datos1), 'socios_por_camara.xlsx');
   }

   public function exportar_pdf_socios_por_camara(Request $request)
   {
       // Obtener parámetro 'camara' del request
       $camara = $request->query('camara');

        // Consulta con filtros
        $query = DB::table('socios')  
        ->join('camaras_socios', 'camaras_socios.id_socio', '=', 'socios.id') 
        ->join('camaras', 'camaras.id', '=', 'camaras_socios.id_camara') 
        ->join('tipo_personeria', 'tipo_personeria.id', '=', 'socios.id_tipo_personeria') 
        ->select(  
            'camaras.razon_social as camara', 
             DB::raw("DATE_FORMAT(camaras_socios.fecha_afiliacion, '%d/%m/%Y') as fecha_afiliacion"),
            'socios.razon_social as socio',
            'socios.identificacion',
            'tipo_personeria.descripcion as tipo_personeria'
        )
        ->where('camaras.estado', 1);

         // Aplicar filtros
        if ($camara && $camara != -1) {
            $query->where('camaras.id', $camara); 
        } 

        $socios = $query->get();  

         // Verificar si se ha seleccionado una cámara
         if ($camara && $camara != -1) {
            // Si existe la cámara, obtener la cámara seleccionada
            $camaraSelected = Camara::where('id', $camara)->first();
        } else {
            // Si no hay cámara seleccionada o si es -1, asignar "Todas"
            $camaraSelected = (object) ['razon_social' => 'Todas'];
        }
         

       // Generar PDF usando una vista Blade con los datos filtrados socios
       $pdf = PDF::loadView('pdf.socios_por_camara', ['socios' => $socios, 'camara' => $camaraSelected]);
       // Descargar el PDF
       return $pdf->download('socios_por_camara.pdf');
   }
}
