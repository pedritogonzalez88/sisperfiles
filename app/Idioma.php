<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{

    protected $fillable = [
        'Nivel','Nombre'
    ];

    public function funcionario()
    {
        return $this->hasMany(Funcionario::class);
    }


}
