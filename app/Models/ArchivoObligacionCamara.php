<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\LogsActivity;

class ArchivoObligacionCamara extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'archivos_obligaciones_camaras';
    protected $fillable = [
        'id_camara',
        'id_entidad',
        'id_obligacion',
        'ruta_archivo',
        'validado',
        'estado' 
    ];
 
}
