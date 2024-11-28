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

        $data = match ($action) {
            'insert' => json_encode($model->toArray()),
            'update' => json_encode($model->getChanges()),
            'delete' => json_encode($model->toArray()),
            default => null,
        };

        LogActivity::create([
            'user_id' => auth()->id() ?? 0,
            'action' => $action,
            'table_name' => $model->getTable(),
            'record_id' => $model->id, // ID del registro afectado
            'data' => $data,
            'query' => request() ? request()->fullUrl() : 'No disponible en consola',
        ]);
    } 
}
