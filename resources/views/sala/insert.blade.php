@extends('layout.layout')

@section('titulo')
    Agregar Sala
@endsection

@section('contenido')
    <h1>Registrar Sala</h1>
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
    <form action="{{route('sala.store')}} " method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nombre De la Sala:</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Cantidad De Camas:</label>
                <input type="text" class="form-control" name="cantidadc" placeholder="Cantidad de Camas">
            </div>
        </div>
        <div class="form-row">
            <button type="submit" class="btn btn-primary">Crear Sala</button>
        </div>
    </form>
    <br>
        <a href="{{route('sala.index')}}"><button class="btn btn-primary">Volver</button></a>
@endsection