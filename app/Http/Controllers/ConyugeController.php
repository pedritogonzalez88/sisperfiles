<?php

namespace App\Http\Controllers;


use App\Conyuge;
use App\Funcionario;
use Illuminate\Http\Request;

class ConyugeController extends Controller
{


    public function index()
    {

        $conyuges = Conyuge::all();
        return View('perfiles.Conyuges.index', compact('conyuges'));
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {
        $funcionario_id = $request->get('id');
        return View('perfiles.Conyuges.create', compact('funcionario_id'));
    }

    public function show(Conyuge $conyuge)
    {

        return View('perfiles.Conyuges.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
             /* $conyuge = new Conyuge();
            $conyuge->Nombre = $request->nombreC;
            $conyuge->Apellido = $request->apellidoC;
            $conyuge->Sexo = $request->sexoC;
            $conyuge->Cedula = $request->cedulaC;
            $conyuge->Telefono = $request->telefonoC;
            $conyuge->Celular = $request->celularC;
            $conyuge->funcionario()->associate($funcionario);
            $conyuge->save(); */
            Conyuge::Create($request->all());

            return redirect()->route('conyuge.index',[$Funcionario]);
    }
}
