<?php

namespace App\Traits;

use App\Models\LogActivity;

trait LogsActivity
{
    protected static function bootLogsActivity()
    {
        // Evento para creación
        static::created(function ($model) {
            static::logActivity($model, 'insert');
        });

        // Evento para actualización
        static::updated(function ($model) {
            static::logActivity($model, 'update');
        });

        // Evento para eliminación
        static::deleted(function ($model) {
            static::logActivity($model, 'delete');
        });
    }

    protected static function logActivity($model, $action)
    {
        // Evita registrar actividades del modelo LogActivity
        if ($model instanceof LogActivity) {
            return;
        }

        LogActivity::create([
            'user_id' => auth()->id() ?? 0,
            'action' => $action,
            'table_name' => $model->getTable(),
            'data' => $action === 'delete' ? json_encode($model->toArray()) : json_encode($model->getChanges()),
            'query' => request() ? request()->fullUrl() : 'No disponible en consola',
        ]); 
    }
}
