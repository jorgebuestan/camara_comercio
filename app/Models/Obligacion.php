<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\LogsActivity;

class Obligacion extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'obligaciones';
    protected $fillable = [
        'obligacion',
        'obligacion_busqueda',
        'id_tiempo_presentacion',
        'id_tipo_presentacion',
        'fecha_inicio',
        'fecha_vencimiento',
        'fecha_presentacion',
        'estado'
    ];

    public function tiempo_presentacion()
    {
        return $this->belongsTo(TiempoPresentacion::class, 'id_tiempo_presentacion', 'id');
    }

    public function tipo_presentacion()
    {
        return $this->belongsTo(TipoPresentacion::class, 'id_tipo_presentacion', 'id');
    }
}
