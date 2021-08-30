<?php

namespace App\Http\Controllers;

use App\Funcionario;
use App\Pais;
use App\Ciudad;
use App\Barrio;
use App\Departamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class FuncionarioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::all();
        $Pais = Pais::all();
        $Ciudad = Ciudad::all();
        $Barrio = Barrio::all();
        $Departamento = Departamento::all();
        return View('perfiles.funcionarios.create', compact('Pais','Ciudad','Barrio','Departamento','funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return View('perfiles.funcionarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->file('Imagen');
        $Imgnombre = $img->getClientOriginalName();
        $img->move('imagenes', $Imgnombre);

        $funcionario = new Funcionario();
        $funcionario->Cedula = $request->cedula;
        $funcionario->Nombre = $request->nombre;
        $funcionario->Apellido = $request->apellido;
        $funcionario->Sexo = $request->sexo;
        $funcionario->Pasaporte = $request->pasaporte;
        $funcionario->Registro = $request->registro;
        $funcionario->Categoria = $request->categoria;
        $funcionario->RUC = $request->ruc;
        $funcionario->ImagenURL = $Imgnombre;
        $funcionario->telefono = $request->telefono;
        $funcionario->fechaNacimiento = $request->fechaNacimiento;
        $funcionario->Direccion = $request->direccion;
        $funcionario->Correo = $request->correo;
        $funcionario->TipoFuncionario = $request->tipofuncionario;
        $funcionario->EstadoCivil = $request->estadoCivil;
        $funcionario->EmailParticular = $request->emailparticular;
        $funcionario->Celular = $request->celular;
        $funcionario->Situacion_Laboral = $request->tipofuncionario;
        $funcionario->vivienda = $request->vivienda;
        $funcionario->Observaciones = $request->observaciones;
        $funcionario->Activo = boolval($request->activo);
        $funcionario->pais = $request-> pais;
        $funcionario->ciudad = $request->ciudad;
        $funcionario->departamento = $request->departamento;
        $funcionario->barrios = $request->barrio;
        $funcionario->save();


        return redirect()->route('conyuge.create', ['id' => $funcionario->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function show(Funcionario $funcionario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function edit(Funcionario $funcionario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funcionario $funcionario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funcionario $funcionario)
    {
        //
    }


}
