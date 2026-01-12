<?php

namespace App\Modules\Computadoras\Models;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    protected $table = 'monitores';

    protected $fillable = [
        'marca',
        'modelo',
        'tamano',
        'dpi',
        'estado',
    ];

    public function puertos()
    {
        return $this->hasMany(MonitorPuerto::class);
    }
}
