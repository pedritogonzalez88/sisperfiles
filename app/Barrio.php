<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{


    public function funcionario(){
        return $this->hasMany(Funcionario::class);
    }
}
