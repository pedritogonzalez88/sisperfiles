<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergencia extends Model
{

    protected $fillable = [
        'Nombre','Apellido','Telefono','Celular'
    ];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }
}
