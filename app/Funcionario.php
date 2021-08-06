<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{


    public function ciudad(){

    return $this->belongsTo(Ciudad::class);
    }

    public function barrio(){
        return $this->belongsTo(Barrio::class);
    }
    public function departamento(){
        return $this->belongsTo(Departamento::class);
    }
    public function pais(){
        return $this->belongsTo(Pais::class);
    }
}

