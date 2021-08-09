<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
    protected $fillable = [
        'Tema','Fecha'
    ];

    public function funcionario()
    {
        return $this->hasMany(Funcionario::class);
    }
}
