@extends('layout.layout')

@section('titulo')
    Detalle De la Consulta   
@endsection

@section('contenido')
    <h1   class="text-center"> Detalle De la Consulta</h1>
    <br><br>
    <div class="row">
        <div class="col-sm-3">
            <h3>Fecha De La Consulta:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$consulta->fechac}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Id Medico:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$consulta->idMedico}}</p>
            </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Id Paciente:</h3>
        </div>
            <div class="col-sm-3">
                <p class="lead">{{$consulta->idPaciente}}</p>
            </div>
    </div>
    <br><br>
    <div class="row">
    <a href="{{route('consulta.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>

@endsection