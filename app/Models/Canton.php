<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\LogsActivity;

class Canton extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'cantones'; 
    protected $fillable = ['id_pais', 'id_provincia', 'nombre', 'estado'];
}
