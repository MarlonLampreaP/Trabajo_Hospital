@extends('layout.layout')

@section('titulo')
    Nuevo Diagnostico
@endsection

@section('contenido')
    <h1>Nuevo Diagnostico</h1>
    <br><br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <div class="header"><strong>.Ups.</strong> Algo anda mal...</div>
        <ul>
            @foreach ($errors->all() as $error)

            <li>{{$error}}</li>

            @endforeach
        </ul>
    </div>
    @endif
    <br><br>
    <form action="{{route('diagnostico.store')}} " method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Tipo de diagnostico:</label>
                <input type="text" class="form-control" name="tipo" placeholder="tipo">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Complicaciones del diagnostico:</label>
                <input type="text" class="form-control" name="complicaciones" placeholder="complicaciones">
            </div>
        </div>

        <div class="form-row">
            <button type="submit" class="btn btn-primary">Crear Diagnostico</button>
        </div>
    </form>
    <br>
        <a href="{{route('diagnostico.index')}}"><button class="btn btn-primary">Volver</button></a>
@endsection