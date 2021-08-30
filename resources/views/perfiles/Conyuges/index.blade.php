@extends('layouts.app')


@section('content')
<div class="container">
<a href="{{route('conyuge.create')}}" class="btn btn-success">Crear</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Sexo</th>
        <th scope="col">Cedula</th>
        <th scope="col">Telefono</th>
        <th scope="col">Celular</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($conyuges as $conyuge)
            <td>$conyuge->Nombre</td>
            <td>$conyuge->Apellido</td>
            <td>$conyuge->Sexo</td>
            <td>$conyuge->Cedula</td>
            <td>$conyuge->Telefono</td>
            <td>$conyuge->Celular</td>
        @endforeach
      </tr>
    </tbody>
  </table>
</div>
@endsection
