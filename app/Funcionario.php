<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{


    public function ciudad(){

    return $this->belongsTo(Ciudad::class);
    }

    public function barrio(){
        return $this->belongsTo(Barrio::class);
    }
    public function departamento(){
        return $this->belongsTo(Departamento::class);
    }
    public function pais(){
        return $this->belongsTo(Pais::class);
    }
    public function familiar()
    {
        return $this->hasMany(Familiar::class);
    }
    public function funcionpublica()
    {
        return $this->hasMany(FuncionPublica::class);
    }
    public function hijo()
    {
        return $this->hasMany(Hijo::class);
    }
    public function idioma()
    {
        return $this->hasMany(Idioma::class);
    }
    public function infomedica()
    {
        return $this->belongsTo(Info_Medica::class);
    }
    public function capacitacion()
    {
        return $this->hasMany(Capacitacion::class);
    }
    public function estudio_realizado()
    {
        return $this->hasMany(Estudio_Realizado::class);
    }

}

