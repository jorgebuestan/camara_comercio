<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatoTributarioSocio extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'datos_tributarios_socio';
    protected $fillable = [
        'id_socio',
        'estado_sri',
        'id_tipo_regimen',
        'fecha_registro_sri',
        'fecha_actualizacion_ruc',
        'fecha_constitucion',
        'fecha_nacimiento',
        'agente_retencion',
        'contribuyente_especial',
        'id_pais',
        'id_provincia',
        'id_canton',
        'id_parroquia',
        'calle',
        'manzana',
        'numero',
        'interseccion',
        'referencia',
        'obligaciones_tributarias'
    ];

    public function socio()
    {
        return $this->belongsTo(Socio::class, 'id_socio', 'id');
    }

    public function tipo_regimen()
    {
        return $this->hasOne(TipoRegimen::class, 'id', 'id_tipo_regimen');
    }

    public function pais()
    {
        return $this->hasOne(Pais::class, 'id', 'id_pais');
    }

    public function provincia()
    {
        return $this->hasOne(Provincia::class, 'id', 'id_provincia');
    }

    public function canton()
    {
        return $this->hasOne(Canton::class, 'id', 'id_canton');
    }

    public function parroquia()
    {
        return $this->hasOne(Parroquia::class, 'id', 'id_parroquia');
    }
}
