@extends('layout.layout')

@section('titulo')
    Nuevo Hospital
@endsection

@section('contenido')
    <h1>Nuevo Hospital</h1>
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
    <form action="{{route('hospital.store')}} " method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nombre Hospital:</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre Hospital">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Direccion:</label>
                <input type="text" class="form-control" name="direccion" placeholder="Direccion">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Telefono:</label>
                <input type="text" class="form-control" name="telefono" placeholder="Telefono">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Cantidad De Camas:</label>
                <input type="text" class="form-control" name="cantidadc" placeholder="Cantidad De Camas">
            </div>
        </div>
        <div class="form-row">
            <button type="submit" class="btn btn-primary">Crear Hospital</button>
        </div>
    </form>
    <br>
    <a href="{{route('hospital.index')}}"><button class="btn btn-primary">Volver</button></a>
@endsection