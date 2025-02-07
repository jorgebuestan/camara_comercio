<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\LogsActivity;

class DocumentoCamara extends Model
{ 
    use HasFactory, LogsActivity;
    protected $table = 'documentos_camaras';
    protected $fillable = [
        'id_camara',
        'id_tipo_documento',
        'url',
        'nombre',
        'titulo',
        'estado'
    ]; 
}
