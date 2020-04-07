@extends('layout.layout')
@section('titulo','Modificar Consulta')
@section('contenido')
<h1 class="text-center">Modificar Consulta</h1>
    <br><br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <div class="header"><strong>Ups.</strong> Algo anda mal...</div>
        <ul>
            @foreach ($errors->all() as $error)

            <li>{{$error}}</li>

            @endforeach
        </ul>
    </div>
    @endif
    <br><br>
    <form action="{{route('consulta.update', $consulta->id)}} " method="post">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Fecha Consulta:</label>
                <input type="text" class="form-control" name="fechac" value="{{$consulta->fechac}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label> id Medico:</label>
                <input type="text" class="form-control" name="idMedico" value="{{$consulta->idMedico}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label> id Paciente:</label>
                <input type="text" class="form-control" name="idPaciente" value="{{$consulta->idPaciente}}">
            </div>
        </div>

        <div class="form-row">
            <button type="submit" class="btn btn-primary">Modificar Consulta</button>   
        </div>
    </form>
    
@endsection