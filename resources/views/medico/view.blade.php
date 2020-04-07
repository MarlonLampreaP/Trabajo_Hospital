@extends('layout.layout')

@section('titulo')
    Detalle Medico   
@endsection

@section('contenido')
    <h1   class="text-center"> Detalle Medico</h1>
    <br><br>
    <div class="row">
    <div class="col-sm-3">
        <h3>ID Hospital: </h3>
    </div>
    <div class="col-sm-3">
        <p class="lead">{{$medico->idhospital}}</p>
    </div>         
</div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Cedula Medico:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$medico->cedulam}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Nombre Medico:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$medico->nombrem}}</p>
            </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Especialidad:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$medico->especialidad}}</p>
            </div>
    </div>
    <br><br>
    <div class="row">
    <a href="{{route('medico.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>

@endsection