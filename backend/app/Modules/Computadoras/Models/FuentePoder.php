<?php

namespace App\Modules\Computadoras\Models;

use Illuminate\Database\Eloquent\Model;

class FuentePoder extends Model
{
    protected $table = 'fuentes_poders';

    protected $fillable = [
        'marca',
        'modelo',
        'watts',
        'eficiencia',
        'estado',
    ];
}
