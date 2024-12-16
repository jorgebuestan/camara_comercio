<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adherente extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'adherentes';
    protected $fillable = [
        'foto',
        'fecha_ingreso',
        'id_tipo_identificacion',
        'identificacion',
        'ruc',
        'nombres',
        'apellidos',
        'correo',
        'telefono',
        'id_pais',
        'id_provincia',
        'id_canton',
        'id_parroquia',
        'calle',
        'manzana',
        'numero',
        'interseccion',
        'referencia',
        'observaciones',
        'archivos_adjuntos',
        'estado'
    ];

    public function tipo_identificacion()
    {
        return $this->hasOne(TipoIdentificacion::class, 'id', 'id_tipo_identificacion');
    }

    public function pais()
    {
        return $this->hasOne(Pais::class, 'id', 'id_pais');
    }

    public function provincia()
    {
        return $this->hasOne(Provincia::class, 'id', 'id_provincia');
    }

    public function canton()
    {
        return $this->hasOne(Canton::class, 'id', 'id_canton');
    }

    public function parroquia()
    {
        return $this->hasOne(Parroquia::class, 'id', 'id_parroquia');
    }

    public function getNombreCompletoAttribute()
    {
        return $this->nombres . ' ' . $this->apellidos;
    }

    public function getDireccionAttribute()
    {
        return $this->calle . ' ' . $this->manzana . ' ' . $this->numero . ' ' . $this->interseccion;
    }

    public function getUbicacionAttribute()
    {
        return $this->parroquia->nombre . ', ' . $this->canton->nombre . ', ' . $this->provincia->nombre . ', ' . $this->pais->nombre;
    }

    public function getEstadoAttribute($value)
    {
        return $value == 1 ? 'Activo' : 'Inactivo';
    }
}
