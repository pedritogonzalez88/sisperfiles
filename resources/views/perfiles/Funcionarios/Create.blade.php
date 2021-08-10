@extends('layouts.app')

@section('content')
    @inject('servicesPais', 'App\Services\ServicePais')
<div class="container">
    <form method="post" action="">
        @csrf
        <div class="card">
            <div class="card-header">
                <h2>Datos Personales</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-9 col-md-9 col-xs-12">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="cedula" class="control-label">Cedula de
                                        Identidad</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-id-card"></i>
                                            </span>
                                        </div>
                                        <input name="cedula" placeholder="Cedula" class="form-control" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="nombre" class="control-label">Nombres</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-user-alt"></i>
                                            </span>
                                        </div>
                                        <input name="nombre" placeholder="Nombre Funcionario" class="form-control" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="apellido" class="control-label">Apellidos</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </div>
                                        <input name="apellido" class="form-control" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="FechaNacimiento" class="control-label">Fecha de
                                        Nacimiento</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="date" name="fechaNacimiento"
                                            class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="barrio">Barrio</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-globe"></i>
                                            </span>
                                        </div>
                                        <select name="barrio" class="form-control">
                                            <option value="">---Seleccionar---</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="ciudad" class="control-label">Ciudad</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-globe"></i>
                                            </span>
                                        </div>
                                        <select name="ciudad" class="form-control">
                                            <option value="">--Seleccione---</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="departamento" class="control-label">Departamento</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-building"></i>
                                            </span>
                                        </div>
                                        <select name="departamento" class="form-control">
                                            <option value="">---Selecciona---</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="pais" class="control-label">Pais de
                                        Nacimiento</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-flag"></i>
                                            </span>
                                        </div>
                                        <select id="servicePais" name="pais_id" class="form-control">
                                            <option value="">---Selecciona---</option>
                                            @foreach ($servicePais->get() as $index => $servicePais)
                                                <option value="{{ $index }}">
                                                    {{ $servicePais }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="pasaporte" class="control-label">Nº de
                                        Pasaporte</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-passport"></i>
                                            </span>
                                        </div>
                                        <input name="pasaporte" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="registro" class="control-label">Registro De
                                        Conducir</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-id-card"></i>
                                            </span>
                                        </div>
                                        <input name="registro" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label name="categoria"
                                        class="control-label">Categoria</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-id-card-alt"></i>
                                            </span>
                                        </div>
                                        <input name="categoria" class="form-control"
                                            placeholder="B, A, C, Particular" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="ruc" class="control-label">RUC</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-id-card"></i>
                                            </span>
                                        </div>
                                        <input name="ruc" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="sexo" class="control-label">Ingrese Su
                                        Sexo</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-user-circle"></i>
                                            </span>
                                        </div>
                                        <input name="sexo" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="telefono" class="control-label">Linea
                                        Baja</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-phone-alt"></i>
                                            </span>
                                        </div>
                                        <input name="telefono" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="celular"
                                        class="control-label">Celular</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-mobile"></i>
                                            </span>
                                        </div>
                                        <input name="celular" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="estadoCivil" class="control-label">Estado
                                        Cilvil</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-user-slash"></i>
                                            </span>
                                        </div>
                                        <input name="estadoCivil" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="direccion"
                                        class="control-label">Direccion</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-address-card"></i>
                                            </span>
                                        </div>
                                        <input name="direccion" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="correo" class="control-label">Correo
                                        Institucional</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                        </div>
                                        <input type="email" name="correo" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="TipoFuncionario" class="control-label">Relacion
                                        con la Institucion</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-user-astronaut"></i>
                                            </span>
                                        </div>
                                        <input type="text" name="tipofuncionario" placeholder="Contratado, Permanente, Comisionado" class="form-control" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="emailparticular" class="control-label">Correo
                                        Particular</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-envelope-open"></i>
                                            </span>
                                        </div>
                                        <input type="email" name="emailparticular" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="observaciones"
                                        class="control-label">Observaciones</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-binoculars"></i>
                                            </span>
                                        </div>
                                        <input name="Observaciones" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="vivienda" class="control-label">Vienda</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-house-user"></i>
                                            </span>
                                        </div>
                                        <input name="vivienda" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="Activo" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Activo
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-xs-12">
                                <div class="form-group">
                                    <button type="submit" value="Create"
                                        class="btn btn-outline-primary">Agregar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group">
                            <label for="imagen" class="control-label">FOTO</label>
                            <div class="card">
                                <img src="~/images/default.png" id="preview" class="img-thumbnail" />
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang"
                                        onchange="previewFile()">
                                    <label for="imagen" class="custom-file-label"
                                        for="customFileLang">Seleccionar Archivo</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

