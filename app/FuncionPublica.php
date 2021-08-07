<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FuncionPublica extends Model
{
    public function getfuncionario(){
        return $this->belongsToMany(Funcionario::class);
    }
}
