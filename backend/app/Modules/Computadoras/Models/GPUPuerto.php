<?php

namespace App\Modules\Computadoras\Models;

use Illuminate\Database\Eloquent\Model;

class GPUPuerto extends Model
{
  protected $table = 'gpu_puertos';

  protected $fillable = [
    'gpu_id',
    'tipo_puerto',
    'estado',
  ];

  public function gpu()
  {
    return $this->belongsTo(GPU::class);
  }
}
