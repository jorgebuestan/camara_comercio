<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\LogsActivity;

class ArchivoObligacionSocio extends Model  
{
    use HasFactory, LogsActivity;
    protected $table = 'archivos_obligaciones_socios';
    protected $fillable = [
        'id_socio',
        'id_entidad',
        'id_obligacion',
        'ruta_archivo',
        'validado',
        'subido_por',
        'estado' 
    ];
}
