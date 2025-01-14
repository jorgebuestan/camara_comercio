<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoFormulario extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'estados_formulario_socio'; 
    protected $fillable = [
        'descripcion' 
    ]; 
}
