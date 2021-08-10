<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{

    protected $fillable = [
        'Nombre',
    ];

    public function funcionario(){
        return $this->hasMany(Funcionario::class);
    }
}
