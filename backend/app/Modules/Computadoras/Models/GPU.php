<?php

namespace App\Modules\Computadoras\Models;

use Illuminate\Database\Eloquent\Model;

class GPU extends Model
{
  protected $table = 'gpus';

  protected $fillable = [
    'marca',
    'modelo',
    'vram',
    'estado',
  ];

  public function puertos()
  {
    return $this->hasMany(GPUPuerto::class);
  }
}
