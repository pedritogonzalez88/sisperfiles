<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{

    protected $table = "paises";
    protected $fillable = [
        'Nombre',
    ];

    public function funcionario(){
        return $this->hasMany(Funcionario::class);
    }
}
