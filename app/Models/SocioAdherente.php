<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocioAdherente extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'socios_adherentes';
    protected $fillable = [
        'id_socio',
        'id_adherente',
        'estado'
    ];

    public function socio()
    {
        return $this->hasOne(Socio::class, 'id', 'id_socio');
    }

    public function adherente()
    {
        return $this->hasOne(Adherente::class, 'id', 'id_adherente');
    }

    public function historial()
    {
        return $this->hasOne(HistorialSocioAdherente::class, 'id_socio_adherente', 'id');
    }
}
