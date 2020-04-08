@extends('layout.layout')

@section('titulo')
    Agregar Laboratorio
@endsection

@section('contenido')
    <h1>Registrar Laboratorio</h1>
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
    <form action="{{route('laboratorio.store')}} " method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nombre Del Laboratorio:</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Direccion del Laboratorio:</label>
                <input type="text" class="form-control" name="direccion" placeholder="Direccion">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Telefono del Laboratorio:</label>
                <input type="text" class="form-control" name="telefono" placeholder="Telefono">
            </div>
        </div>

        <div class="form-row">
            <button type="submit" class="btn btn-primary">Crear Laboratorio</button>
        </div>
    </form>
    <br>
        <a href="{{route('laboratorio.index')}}"><button class="btn btn-primary">Volver</button></a>
@endsection