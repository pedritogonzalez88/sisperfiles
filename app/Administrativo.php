<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrativo extends Model
{
    protected $fillable = [
        'Cargo_funcion','Dependencia_Funcion','Horario','telefono','Superior_Inmediato'
    ];

    public function funcrionario()
    {
        return $this->hasMany(Funcionario::class);
    }

}
