<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{


    public function funcionario(){
        return $this->hasMany(Funcionario::class);
    }
}
