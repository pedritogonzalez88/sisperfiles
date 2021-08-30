@extends('layouts.app')

@section('content')
<div class="container">
        <div class="card">
            <div class="card-header">
                <h2>
                    Datos del Conyuge
                </h2>
            </div>
                <div class="card-body">
                    <form method="post" action="{{route('conyuge.store')}}">
                        @csrf
                        <div class="col-sm-10 col-md-10 col-xs-12">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="nombre" class="control-label"> Nombre del Conyuge</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user-alt"></i>
                                                </span>
                                            </div>
                                            <input name="nombre" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="apellido" class="control-label">Apellido del Conyuge</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user-alt-slash"></i>
                                                </span>
                                            </div>
                                            <input name="apellido" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="sexo" class="control-label">Sexo del Conyuge</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-restroom"></i>
                                                </span>
                                            </div>
                                            <input name="sexo" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="Cedula" class="control-label">Cedula de Identidad</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-id-card"></i>
                                                </span>
                                            </div>
                                            <input name="cedula" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="Telefono" class="control-label">Linea Baja</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-phone"></i>
                                                </span>
                                            </div>
                                            <input name="telefono" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="Celular" class="control-label">Telefono Móvil</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-mobile-alt"></i>
                                                </span>
                                            </div>
                                            <input name="celular" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    @foreach($funcionarios as $funcionario)
                                   <input type="text" disabled class="form-control" name="funcionarioId" value="{{$funcionario->id}}"  />
                                   {{--  {!!Form::text('id', $id, array('disabled')) !!} --}}
                                   {{-- {!! Form::text('funcionario_id', array($fun_id->id)) !!} --}}
                                   @endforeach
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 col-md-2 col-xs-12">
                                    <div class="form-group">
                                        <button type="submit" value="Create" class="btn btn-outline-primary">Agregar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
