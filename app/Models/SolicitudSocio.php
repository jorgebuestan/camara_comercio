<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudSocio extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'solicitudes_socios'; 
    protected $fillable = [
        'id_tipo_personeria',
        'id_tipo_identificacion',
        'cedula_ruc',
        'razon_social',
        'correo',
        'telefono',
        'direccion',
        'ruta_archivo1',
        'ruta_archivo2',
        'ruta_archivo3',
        'ruta_archivo4',
        'id_estado_formulario' 
    ]; 
}
