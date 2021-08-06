<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{


    public function funcionario(){
        return $this->hasMany(Funcionario::class);
    }
}
