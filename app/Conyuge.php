<?php

namespace App;
use App\Funcionario;
use Illuminate\Database\Eloquent\Model;

class Conyuge extends Model
{
    protected $table = 'conyuges';

    protected $fillable = [
        'Nombre','Apellido','Cedula','Sexo','Telefono','Celular','funcionario_id',
    ];

    public function funcionario()
    {
        return $this->hasOne('App\Funcionario', 'funcionario_id');
    }
}
