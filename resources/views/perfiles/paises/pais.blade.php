@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <ul>
            @foreach($p as $pais)
                <li>{{$pais->Nombre}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
