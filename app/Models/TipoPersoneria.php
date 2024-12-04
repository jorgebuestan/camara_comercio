<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPersoneria extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'tipo_personeria';
    protected $fillable = [
        'descripcion'
    ];
}
