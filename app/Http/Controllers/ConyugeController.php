<?php

namespace App\Http\Controllers;


use App\Conyuge;
use App\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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

    public function create(Request $request, $id)
    {
        $funcionarios = Funcionario::find($id)->funcionario;
        return View('perfiles.Conyuges.create', compact('funcionarios'));
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
            //$conyuge = Conyuge::create($request->all());
            //$conyuge->fill($request->all());
            $input = Input::all();
            $funcionarioId = (array) array_get($input, 'funcionarioId');
            $conyuge = new Conyuge();
            $conyuge->Nombre = $request->nombre;
            $conyuge->Apellido = $request->apellido;
            $conyuge->Sexo = $request->sexo;
            $conyuge->Cedula = $request->cedula;
            $conyuge->Telefono = $request->telefono;
            $conyuge->Celular = $request->celular;
            $conyuge->funcionario_id = $request->funcionarioId;
            dd($conyuge);
            //$conyuge->save();
            //Conyuge::Create($request->all());

            return redirect()->route('Hijo.create', $funcionario->id);
    }
}
