<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{

    protected $fillable = [
        'Nombre',
    ];

    public function funcionario(){
        return $this->hasMany(Funcionario::class);
    }
}
