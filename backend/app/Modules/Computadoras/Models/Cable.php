<?php

namespace App\Modules\Computadoras\Models;

use Illuminate\Database\Eloquent\Model;

class Cable extends Model
{
    protected $table = 'cables';

    protected $fillable = [
        'tipo_cable', // HDMI, VGA, DisplayPort, etc.
        'estado',
    ];
}
