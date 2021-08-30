<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info_Medica extends Model
{

    protected $fillable=[
        'GrupoSanguineo','Enfermedad','NombreSeguro','NroCarnet'
    ];

    public function funcionario()
    {
        return $this->hasOne(Funcionario::class, 'FuncionarioId');
    }
}
