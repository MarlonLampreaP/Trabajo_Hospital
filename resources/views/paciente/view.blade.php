@extends('layout.layout')

@section('titulo')
    Detalle Del Paciente   
@endsection

@section('contenido')
    <h1   class="text-center"> Detalle Del Paciente</h1>
    <br><br>
    <div class="row">
        <div class="col-sm-3">
            <h3>Cedula Paciente:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$paciente->cedulap}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Numero de registro:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$paciente->numeroregistro}}</p>
            </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Numero de Cama:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$paciente->numerocama}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Nombre del Paciente:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$paciente->nombre}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Direccion del Paciente:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$paciente->direccion}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Fecha de nacimiento del Paciente:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$paciente->fechanacimiento}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Sexo del Paciente:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$paciente->sexo}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Tipo:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$diagnosticos->tipo}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Complicaciones:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$diagnosticos->complicaciones}}</p>
        </div>
    </div>
    <br><br>
    <div class="row">
    <a href="{{route('paciente.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>

@endsection