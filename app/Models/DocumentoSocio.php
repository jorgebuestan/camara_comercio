<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\LogsActivity;

class DocumentoSocio extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'documentos_socios';
    protected $fillable = [
        'id_socio',
        'id_tipo_documento',
        'url',
        'nombre',
        'titulo',
        'estado'
    ]; 
}
