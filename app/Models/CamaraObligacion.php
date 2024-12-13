<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CamaraObligacion extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'camaras_obligaciones';
    protected $fillable = [
        'id_camara',
        'id_entidad',
        'id_obligacion',
        'fecha_inicio',
        'fecha_presentacion',
        'estado'
    ];

    public function camara()
    {
        return $this->belongsTo(Camara::class, 'id_camara', 'id');
    }

    public function entidad()
    {
        return $this->belongsTo(Entidad::class, 'id_entidad', 'id');
    }

    public function obligacion()
    {
        return $this->belongsTo(Obligacion::class, 'id_obligacion', 'id');
    }
}
