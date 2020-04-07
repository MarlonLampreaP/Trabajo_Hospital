@extends('layout.layout')

@section('titulo')
    Nueva Consulta
@endsection

@section('contenido')
    <h1>Nueva Consulta</h1>
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
    <form action="{{route('consulta.store')}} " method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Tipo de diagnostico:</label>
                <input type="text" class="form-control" name="fechac" placeholder="Fecha Consulta">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Id Medico:</label>
                <input type="text" class="form-control" name="idMedico" placeholder="idMedico">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Id Paciente:</label>
                <input type="text" class="form-control" name="idPaciente" placeholder="idPaciente">
            </div>
        </div>
        <div class="form-row">
            <button type="submit" class="btn btn-primary">Crear Consulta</button>
        </div>
    </form>
    <br>
    <a href="{{route('consulta.index')}}"><button class="btn btn-primary">Volver</button></a>
@endsection