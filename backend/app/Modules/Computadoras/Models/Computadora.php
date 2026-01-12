<?php

namespace App\Modules\Computadoras\Models;

use Illuminate\Database\Eloquent\Model;

class Computadora extends Model
{
  protected $table = 'computadoras';

  protected $fillable = [
    'codigo_interno',
    'estado',
    'fecha_asignacion',
    'persona_id',
    'case',
    'cpu_id',
  ];

  // Relaciones
  public function persona()
  {
    return $this->belongsTo(Persona::class, 'persona_id');
  }

  public function cpu()
  {
    return $this->belongsTo(CPU::class, 'cpu_id');
  }
}
