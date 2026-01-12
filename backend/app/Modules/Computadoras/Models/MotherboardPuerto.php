<?php

namespace App\Modules\Computadoras\Models;

use Illuminate\Database\Eloquent\Model;

class MotherboardPuerto extends Model
{
  protected $table = 'motherboard_puertos';

  protected $fillable = [
    'motherboard_id',
    'tipo_puerto',
    'estado',
  ];

  public function motherboard()
  {
    return $this->belongsTo(Motherboard::class);
  }
}
