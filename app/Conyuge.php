<?php

namespace App;
use App\Funcionario;
use Illuminate\Database\Eloquent\Model;

class Conyuge extends Model
{
    protected $table = 'conyuges';

    protected $fillable = [
        'Nombre','Apellido','Cedula','Sexo','Telefono','Celular',
    ];

    public function funcionario()
    {
        return $this->hasOne(Funcionario::class, 'funcionario_id');
    }
}
