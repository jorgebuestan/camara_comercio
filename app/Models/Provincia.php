<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\LogsActivity;

class Provincia extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'provincias'; 
    protected $fillable = ['id_pais', 'nombre', 'estado'];
}
