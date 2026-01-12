<?php

namespace App\Modules\Computadoras\Models;

use Illuminate\Database\Eloquent\Model;

class Accesorio extends Model
{
    protected $table = 'accesorios';

    protected $fillable = [
        'tipo',
        'marca',
        'modelo',
        'detalles',
        'estado',
    ];
}
