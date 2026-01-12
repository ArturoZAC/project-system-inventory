<?php

namespace App\Modules\Computadoras\Models;

use Illuminate\Database\Eloquent\Model;

class RAM extends Model
{
    protected $table = 'rams';

    protected $fillable = [
        'marca',
        'modelo',
        'capacidad',
        'tipo',
        'estado',
    ];
}
