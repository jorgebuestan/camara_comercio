<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\LogsActivity;

class ActividadEconomica extends Model
{
    use HasFactory, LogsActivity;

    protected $table = 'actividades_economicas'; 
    protected $fillable = ['codigo', 'descripcion'];
 
}
