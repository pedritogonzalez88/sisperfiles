<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{

    protected $table = 'paises';

    protected $fillable = [
        'Nombre',
    ];

    public function ciudades()
    {
        return $this->belongsToMany('App\Ciudad', 'ciudad_id');
    }
    public function departamento()
    {
        return $this->belongsToMany('App\Departamento', 'departamento_id');
    }
}
