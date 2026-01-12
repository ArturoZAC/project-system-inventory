<?php

namespace App\Modules\Computadoras\Models;

use Illuminate\Database\Eloquent\Model;

class Adaptador extends Model
{
    protected $table = 'adaptadores';

    protected $fillable = [
        'tipo_adaptador', // VGA a HDMI, etc.
        'estado',
    ];
}
