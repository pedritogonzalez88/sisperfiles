<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FuncionPublica extends Model
{
    protected $fillable = [
        'Nombre','Apellido','Cedula','Entidad','Cargo'
    ];

    public function funcionario(){
        return $this->hasMany(Funcionario::class);
    }
}
