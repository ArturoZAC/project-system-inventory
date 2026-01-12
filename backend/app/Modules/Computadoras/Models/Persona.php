<?php

namespace App\Modules\Computadoras\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';

    protected $fillable = [
        'nombre',
        'rol',
        'email',
    ];

    public function computadoras()
    {
        // return $this->hasMany(Computadora::class, 'persona_id');
        return $this->hasOne(Computadora::class, 'persona_id');
    }
}
