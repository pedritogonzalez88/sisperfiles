<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudades';

    protected $fillable = [
        'Nombre',
    ];

    public function pais()
    {
        return $this->belongsTo('App\Pais','pais_id');
    }
    public function barrios()
    {
        return $this->hasMany('App\Barrio', 'barrio_id');
    }
}
