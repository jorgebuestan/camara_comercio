<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogActivity extends Model
{
    use HasFactory;
    protected $table = 'log_activities';
     // Definir los campos que se pueden llenar
     protected $fillable = ['user_id', 'action', 'table_name', 'record_id', 'data', 'query'];
}
