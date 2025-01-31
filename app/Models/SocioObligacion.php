<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocioObligacion extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'socios_obligaciones';
    protected $fillable = [
        'id_socio',
        'id_establecimiento',
        'id_entidad',
        'id_obligacion',
        'fecha_inicio',
        'fecha_presentacion',
        'estado'
    ];

    public function socio()
    {
        return $this->belongsTo(Socio::class, 'id_socio', 'id');
    }

    public function entidad()
    {
        return $this->belongsTo(Entidad::class, 'id_entidad', 'id');
    }

    public function obligacion()
    {
        return $this->belongsTo(Obligacion::class, 'id_obligacion', 'id');
    }

    public function establecimientos()
    {
        return $this->belongsTo(EstablecimientoSocio::class, 'id_establecimiento', 'id');
    }
}
