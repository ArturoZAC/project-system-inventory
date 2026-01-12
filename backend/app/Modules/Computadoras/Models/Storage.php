<?php

namespace App\Modules\Computadoras\Models;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    protected $table = 'storages';

    protected $fillable = [
        'marca',
        'modelo',
        'capacidad',
        'tipo',
        'estado',
    ];
}
