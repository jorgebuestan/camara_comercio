<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoIdentificacion extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'tipo_identificacion';
    protected $fillable = [
        'descripcion'
    ];
}
