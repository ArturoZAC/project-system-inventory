<?php

namespace App\Modules\Computadoras\Models;

use Illuminate\Database\Eloquent\Model;

class Motherboard extends Model
{
    protected $table = 'motherboards';

    protected $fillable = [
        'marca',
        'modelo',
        'slots_ram',
        'tipo_ram_compatible',
        'slots_ram_usados',
        'estado',
    ];

    public function monitor()
    {
        return $this->hasMany(MotherboardPuerto::class);
    }
}
