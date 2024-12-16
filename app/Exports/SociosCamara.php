<?php

namespace App\Exports;
 
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings; 
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class SociosCamara implements FromCollection, WithHeadings, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $datos;

    // Constructor para recibir los datos
    public function __construct(Collection $datos)
    {
        $this->datos = $datos;
    }

    // Exportar la colección de datos
    public function collection()
    {
        return $this->datos;
    }

    // Agregar encabezados al archivo Excel
    public function headings(): array
    {
        return [
            'ID',
            'Colaborador',
            'Localidad',
            'Área',
            'Departamento',
            'Cargo',
            'Tipo de Contrato',
            'Fecha Tentativa de Ingreso'
        ];
    }
    
    // Estilos para ajustar automáticamente el ancho según la palabra más larga
    public function styles(Worksheet $sheet)
    {
        foreach (range('A', 'H') as $column) {
            $sheet->getColumnDimension($column)->setAutoSize(true);
        }
    }
}
