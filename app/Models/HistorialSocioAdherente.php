<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialSocioAdherente extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'historial_socios_adherentes';
    protected $fillable = [
        'id_socio_adherente',
        'id_socio_anterior',
        'fecha_afiliacion',
        'fecha_desafiliacion',
        'fecha_reafiliacion',
        'motivo_desafiliacion',
        'motivo_reafiliacion'
    ];

    public function socio_adherente()
    {
        return $this->hasOne(SocioAdherente::class, 'id', 'id_socio_adherente');
    }
    public function socio_anterior()
    {
        return $this->hasOne(Socio::class, 'id', 'id_socio_anterior');
    }
}
