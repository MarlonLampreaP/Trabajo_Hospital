@extends('layout.layout')
@section('titulo','Modificar Paciente')
@section('contenido')
<h1 class="text-center">Modificar Paciente</h1>
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
    <form action="{{route('paciente.update', $paciente->id)}} " method="post">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Cedula Paciente:</label>
                <input type="text" class="form-control" name="cedulap" value="{{$paciente->cedulap}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label> Numero del registro:</label>
                <input type="text" class="form-control" name="numeroregistro" value="{{$paciente->numeroregistro}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Numero de cama:</label>
                <input type="text" class="form-control" name="numerocama" value="{{$paciente->numerocama}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="{{$paciente->nombre}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Direccion Paciente:</label>
                <input type="text" class="form-control" name="direccion" value="{{$paciente->direccion}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Fecha de Nacimiento:</label>
                <input type="text" class="form-control" name="fechanacimiento" value="{{$paciente->fechanacimiento}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Sexo:</label>
                <input type="text" class="form-control" name="sexo" value="{{$paciente->sexo}}">
            </div>
        </div>

        <div class="form-row">
            <button type="submit" class="btn btn-primary">Modificar Paciente</button>   
        </div>
    </form>
    
@endsection