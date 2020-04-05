@extends('layout.layout')

@section('titulo')
    Agregar Paciente
@endsection

@section('contenido')
    <h1>Nuevo Paciente</h1>
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
    <form action="{{route('paciente.store')}} " method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Cedula del paciente:</label>
                <input type="text" class="form-control" name="cedulap" placeholder="cedula paciente">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Numero de registro del paciente:</label>
                <input type="text" class="form-control" name="numeroregistro" placeholder="numero de registro">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Numero de cama del paciente:</label>
                <input type="text" class="form-control" name="numerocama" placeholder="numero de cama">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nombre del paciente:</label>
                <input type="text" class="form-control" name="nombre" placeholder="nombre">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Sexo del paciente:</label>
                <input type="text" class="form-control" name="sexo" placeholder="sexo">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Direccion del paciente:</label>
                <input type="text" class="form-control" name="direccion" placeholder="direccion">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Fecha de nacimiento del paciente:</label>
                <input type="text" class="form-control" name="fechanacimiento" placeholder="fecha de nacimiento">
            </div>
        </div>
        
        <div class="form-row">
            <button type="submit" class="btn btn-primary">Crear Paciente</button>
        </div>
    </form>
    <br>
    <a href="{{route('paciente.index')}}"><button class="btn btn-primary">Volver</button></a>
@endsection