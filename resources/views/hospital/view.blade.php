@extends('layout.layout')

@section('titulo')
    Detalle Del Hospital   
@endsection

@section('contenido')
    <h1   class="text-center"> Detalle Del Hospital</h1>
    <br><br>
    <div class="row">
        <div class="col-sm-3">
            <h3>Nombre del Hospital:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$hospital->nombre}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Direccion Hospital:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$hospital->direccion}}</p>
            </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Telefono:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$hospital->telefono}}</p>
            </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Cantidad De Camas:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$hospital->cantidadc}}</p>
            </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Medico:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$medico->nombrem}}</p>
            </div>
    </div>
    <br><br>
    <div class="row">
    <a href="{{route('hospital.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>

@endsection