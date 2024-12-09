<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\LogsActivity;

class Entidad extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'entidades'; 
    protected $fillable = [
        'ruc',
        'entidad',
        'entidad_busqueda',
        'id_tipo_entidad',
        'alcance',
        'direccion',
        'telefono',
        'representante',
        'telefono_representante',
        'id_pais',
        'id_provincia',
        'id_canton',
        'estado'
    ];  
}
