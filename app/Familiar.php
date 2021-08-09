<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{

    protected $fillable = [
        'Nombre','Apellido','TipoFamiliar'
    ];
    
    public function getFuncionario()
    {
        return $this->belongsTo(Funcionario::class);
    }
}
