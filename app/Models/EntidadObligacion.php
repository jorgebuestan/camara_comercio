<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\LogsActivity;

class EntidadObligacion extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'entidades_obligaciones';
    protected $fillable = [
        'id_entidad',
        'id_obligacion',
        'fecha_inicio',
        'fecha_vencimiento',
        'fecha_presentacion', 
        'estado'
    ];

    public function entidad()
    {
        return $this->belongsTo(Entidad::class, 'id_entidad', 'id');
    }

    public function obligacion()
    {
        return $this->belongsTo(Obligacion::class, 'id_obligacion', 'id');
    }
}
