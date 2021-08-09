<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudio_Realizado extends Model
{

    protected $fillable = [
        'Institucion','FechaInicio','FechaFin','Titulo'
    ];

    public function funcionario()
    {
        return $this->hasMany(Funcionario::class);
    }
}
