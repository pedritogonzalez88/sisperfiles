<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{
    protected $table = 'barrios';

    protected $fillable = [
        'Nombre',
    ];

    public function ciudad()
    {
        return $this->belongsTo('App\Ciudad','ciudad_id');
    }
}
