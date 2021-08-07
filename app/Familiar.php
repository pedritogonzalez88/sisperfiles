<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{


    public function getFuncionario()
    {
        return $this->belongsTo(Funcionario::class);
    }
}
