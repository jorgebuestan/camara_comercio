<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TipoIdentificacion;
use App\Models\TipoPersona;
use App\Models\TipoPersoneria;
use App\Models\DatoTributarioSocio;

class Socio extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'socios';
    protected $fillable = [
        'logo',
        'numero_consecutivo',
        'fecha_ingreso',
        'id_tipo_persona',
        'id_tipo_personeria',
        'id_tipo_identificacion',
        'identificacion',
        'razon_social',
        'correo',
        'telefono',
        'cedula_representante_legal',
        'nombres_representante_legal',
        'apellidos_representante_legal',
        'telefono_representante_legal',
        'correo_representante_legal',
        'fecha_registro_mercantil',
        'fecha_vencimiento_nombramiento',
        'fecha_desafiliacion',
        'motivo_desafiliacion',
        'estado'
    ];

    public function tipo_identificacion()
    {
        return $this->hasOne(TipoIdentificacion::class, 'id', 'id_tipo_identificacion');
    }

    public function tipo_persona()
    {
        return $this->hasOne(TipoPersona::class, 'id', 'id_tipo_persona');
    }

    public function tipo_personeria()
    {
        return $this->hasOne(TipoPersoneria::class, 'id', 'id_tipo_personeria');
    }
    public function datos_tributarios()
    {
        return $this->hasOne(DatoTributarioSocio::class, 'id_socio', 'id');
    }
}
