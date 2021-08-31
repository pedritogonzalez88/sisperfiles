<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HijoController extends Controller
{
    public function index()
    {
        $hijos = Hijo::all();
        return view('perfiles.hijos.index', compact('hijos'))
    }

    public function create($id)
    {
        $funcionarios = Funcionario::find($id);
        return view('perfiles.hijos.create', compact('funcionarios'));
    }


    public function store(Request $request)
    {

    }




}
