<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\LogsActivity;

class Establecimiento extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'establecimientos'; 
    protected $fillable = [
        'nombre_comercial',
        'id_camara',
        'id_pais',
        'id_provincia',
        'id_canton',
        'id_parroquia',
        'calle',
        'manzana',
        'numero',
        'interseccion',
        'referencia',
        'correo',
        'telefono1',
        'telefono2',
        'telefono3',
        'fecha_inicio_actividades',
        'fecha_reinicio_actividades',
        'fecha_cese_actividades',
        'actividades_economicas',
        'estado'
    ]; 
}
