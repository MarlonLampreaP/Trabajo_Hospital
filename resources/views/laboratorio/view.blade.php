@extends('layout.layout')

@section('titulo')
    Detalle Del Laboratorio   
@endsection

@section('contenido')
    <h1   class="text-center"> Detalle Del Laboratorio</h1>
    <br><br>
    <div class="row">
        <div class="col-sm-3">
            <h3>Nombre:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$laboratorio->nombre}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Direccion:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$laboratorio->direccion}}</p>
            </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Telefono:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$laboratorio->telefono}}</p>
            </div>
    </div>
    <br><br>
    <div class="row">
    <a href="{{route('laboratorio.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>

@endsection