<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPersona extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'tipo_persona';
    protected $fillable = [
        'descripcion'
    ];
}
