<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\LogsActivity;

class Parroquia extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'parroquias'; 
    protected $fillable = ['id_pais', 'id_provincia', 'id_canton', 'nombre', 'estado'];
}
