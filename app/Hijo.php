<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hijo extends Model
{

    protected $fillable = [
        'Nombre','Apellido','Cedula','FechaNacimiento','CantidadHijos'
    ];


    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }
}
