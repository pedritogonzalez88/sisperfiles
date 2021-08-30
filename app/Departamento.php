<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{


    public function pais(){
        return $this->hasOne('App\Pais', 'pais_id');
    }
}
