<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use App\Models\LogActivity;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        // Escuchar eventos para todos los modelos
        /*Model::created(function ($model) {
            $this->logActivity($model, 'insert');
        });*/
        Model::created(function ($model) {
            \Log::info('Evento created disparado para el modelo: ' . $model->getTable());
            $this->logActivity($model, 'insert');
        });

        Model::updated(function ($model) {
            $this->logActivity($model, 'update');
        });

        Model::deleted(function ($model) {
            $this->logActivity($model, 'delete');
        });
    }

    /**
     * Registrar una actividad en la base de datos.
     */ 

     private function logActivity($model, $action)
     {
         if ($model instanceof LogActivity) {
             return;
         }
     
         try {
             LogActivity::create([
                 'user_id' => auth()->id() ?? 0,
                 'action' => $action,
                 'table_name' => $model->getTable(),
                 'data' => json_encode($action === 'delete' ? $model->toArray() : $model->getChanges()),
                 'query' => request() ? request()->fullUrl() : 'No disponible en consola',
             ]);
         } catch (\Exception $e) {
             // Log detallado para depuración
             \Log::error('Error registrando actividad: ' . $e->getMessage());
             \Log::error('Detalles: ' . json_encode([
                 'user_id' => auth()->id() ?? 0,
                 'action' => $action,
                 'table_name' => $model->getTable(),
                 'data' => json_encode($action === 'delete' ? $model->toArray() : $model->getChanges()),
                 'query' => request() ? request()->fullUrl() : 'No disponible en consola',
             ]));
         }
     }
}
