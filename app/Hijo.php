<?php

namespace App;

use App\Funcionario;
use Illuminate\Database\Eloquent\Model;

class Hijo extends Model
{

    protected $table = 'hijos';
    protected $fillable = [
        'Nombre','Apellido','Cedula','FechaNacimiento','CantidadHijos'
    ];


    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }
}
