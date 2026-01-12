<?php

namespace App\Modules\Computadoras\Models;

use Illuminate\Database\Eloquent\Model;

class CPU extends Model
{
  protected $table = 'cpus';

  protected $fillable = [
    'marca',
    'modelo',
    'nucleos',
    'hilos',
    'frecuencia',
    'fuente_poder_id',
    'ventiladores',
    'motherboard_id',
    'gpu_id',
  ];

  // Relaciones
  public function fuentePoder()
  {
    return $this->belongsTo(FuentePoder::class, 'fuente_poder_id');
  }

  public function motherboard()
  {
    return $this->belongsTo(Motherboard::class, 'motherboard_id');
  }

  public function gpu()
  {
    return $this->belongsTo(GPU::class, 'gpu_id');
  }

  public function computadoras()
  {
    return $this->hasMany(Computadora::class, 'cpu_id');
  }
}
