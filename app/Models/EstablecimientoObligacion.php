<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\LogsActivity;

class EstablecimientoObligacion extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'establecimientos_obligaciones'; 
    protected $fillable = [
        'id_entidad',
        'id_obligacion',
        'fecha_inicio',
        'fecha_presentacion',
        'estado' 
    ];  
}
