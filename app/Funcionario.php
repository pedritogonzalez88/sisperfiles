<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Funcionario extends Model
{

    protected $table = 'funcionarios';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Cedula', 'Nombre', 'Apellido','Sexo','Pasaporte','Registro','Categoria',
        'RUC','ImagenURL','telefono','fechaNacimiento','Direccion','Correo',
        'TipoFuncionario','EstadoCivil','EmailParticular','Celular','Situacion_Laboral',
        'vivienda','Observaciones', 'Activo',
        'pais','ciudad','departamento','barrios',
    ];

    public function conguges()
    {
        return $this->hasMany('App\Conyuge', 'conyuge_id');
    }

    public function familiar()
    {
        return $this->belongsToMany('App\Familiar','familiar_id');
    }
    public function funcionpublica()
    {
        return $this->belongsToMany('App\FuncionPublica','funcionpublica_id');
    }
    public function hijo()
    {
        return $this->belongsToMany('App\Hijo','hijo_id');
    }
    public function idioma()
    {
        return $this->belongsToMany('App\Idioma','idioma_id');
    }
    public function info_medica()
    {
        return $this->belongsTo('App\Info_Medica','info_medica_id');
    }
    public function capacitaciones()
    {
        return $this->belongsToMany('App\Capacitacion','capacitacion_id');
    }
    public function estudio_realizado()
    {
        return $this->belongsToMany('App\Estudio_Realizado','estudio_realizado_id');
    }
    public function emergencia()
    {
        return $this->belongsTo('App\Emergencia','emergencia_id');
    }

    public function administrativos()
    {
        return $this->belongsToMany('App\Administrativo','administrativo_id');
    }

    public function experiencia_laborales()
    {
        return $this->belongsToMany('App\Experiencia_Laboral','experiencia_laboral_id');
    }

}

