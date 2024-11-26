<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\LogsActivity;

class Pais extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'paises'; 
    protected $fillable = ['codigo', 'nombre', 'estado'];
 
}
