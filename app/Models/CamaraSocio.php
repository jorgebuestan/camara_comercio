<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\LogsActivity;

class CamaraSocio extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'camaras_socios';
    protected $fillable = [
        'id_camara',
        'id_socio',
        'fecha_afiliacion',
        'fecha_desafiliacion',
        'motivo_desafiliacion',
        'estado'
    ];
}
