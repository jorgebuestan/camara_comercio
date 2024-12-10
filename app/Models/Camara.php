<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\LogsActivity;

class Camara extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'camaras';
    protected $fillable = [
        'logo',
        'fecha_ingreso',
        'ruc',
        'razon_social',
        'cedula_representante_legal',
        'nombres_representante_legal',
        'apellidos_representante_legal',
        'telefono_representante_legal',
        'correo_representante_legal',
        'cargo_representante_legal',
        'direccion_representante_legal',
        'estado'
    ];

    public function datos_tributarios()
    {
        return $this->hasOne(DatoTributario::class, 'id_camara', 'id');
    }
}
