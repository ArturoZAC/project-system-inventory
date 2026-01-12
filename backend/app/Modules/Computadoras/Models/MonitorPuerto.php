<?php

namespace App\Modules\Computadoras\Models;

use Illuminate\Database\Eloquent\Model;

class MonitorPuerto extends Model
{
  protected $table = 'monitor_puertos';

  protected $fillable = [
    'monitor_id',
    'tipo_puerto',
    'estado',
  ];

  // Relaciones
  public function monitor()
  {
    return $this->belongsTo(Monitor::class);
  }
}
