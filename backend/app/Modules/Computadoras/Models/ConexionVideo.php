<?php

namespace App\Modules\Computadoras\Models;

use Illuminate\Database\Eloquent\Model;

class ConexionVideo extends Model
{
  protected $table = 'conexion_videos';

  protected $fillable = [
    'motherboard_puerto_id',
    'gpu_puerto_id',
    'monitor_puerto_id',
    'cable_id',
    'adaptador_id',
    'estado',
  ];

  // Relaciones
  public function motherboardPuerto()
  {
    return $this->belongsTo(MotherboardPuerto::class, 'motherboard_puerto_id');
  }

  public function gpuPuerto()
  {
    return $this->belongsTo(GPUPuerto::class, 'gpu_puerto_id');
  }

  public function monitorPuerto()
  {
    return $this->belongsTo(MonitorPuerto::class, 'monitor_puerto_id');
  }

  public function cable()
  {
    return $this->belongsTo(Cable::class, 'cable_id');
  }

  public function adaptador()
  {
    return $this->belongsTo(Adaptador::class, 'adaptador_id');
  }
}
