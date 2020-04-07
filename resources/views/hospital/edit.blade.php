@extends('layout.layout')
@section('titulo','Modificar Hospital')
@section('contenido')
<h1 class="text-center">Modificar Hospital</h1>
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
    <form action="{{route('hospital.update', $hospital->id)}} " method="post">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="{{$hospital->nombre}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label> Direccion:</label>
                <input type="text" class="form-control" name="direccion" value="{{$hospital->direccion}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label> Telefono:</label>
                <input type="text" class="form-control" name="telefono" value="{{$hospital->telefono}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label> Cantidad De Camas:</label>
                <input type="text" class="form-control" name="cantidadc" value="{{$hospital->cantidadc}}">
            </div>
        </div>

        <div class="form-row">
            <button type="submit" class="btn btn-primary">Modificar Hospital</button>   
        </div>
    </form>
    
@endsection