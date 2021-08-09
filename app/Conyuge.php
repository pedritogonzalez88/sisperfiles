<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conyuge extends Model
{

    protected $fillable = [
        'Nombre','Apellido','Cedula','Sexo','Telefono','Celular'
    ];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }
}
