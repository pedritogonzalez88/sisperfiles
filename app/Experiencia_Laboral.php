<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiencia_Laboral extends Model
{

    protected $fillable = [
        'Cargo','Entidad','TiempoTrabajado'
    ];

    public function funcionario()
    {
        return $this->hasMany(Funcionario::class);
    }
}
