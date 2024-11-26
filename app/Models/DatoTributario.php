<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\LogsActivity;

class DatoTributario extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'datos_tributarios'; 
    protected $fillable = [
        'id_camara',
        'tipo_regimen',
        'fecha_registro_sri', 
        'fecha_constitucion', //No debe ser menor a fecha_registro
        'agente_retencion',  
        'contribuyente_especial', 
        'id_pais',
        'id_provincia',
        'id_canton',
        'id_parroquia',
        'calle',
        'manzana',
        'numero',
        'interseccion',
        'referencia', 
        'actividades_economicas',
        'obligaciones_tributarias'
    ]; 
}
