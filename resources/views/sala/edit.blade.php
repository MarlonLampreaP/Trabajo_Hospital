@extends('layout.layout')
@section('titulo','Modificar Sala')
@section('contenido')
<h1 class="text-center">Modificar Sala</h1>
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
    <form action="{{route('sala.update', $sala->id)}} " method="post">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="{{$sala->nombre}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label> Cantidad de Camas:</label>
                <input type="text" class="form-control" name="cantidadc" value="{{$sala->cantidadc}}">
            </div>
        </div>
        <div class="form-row">
            <button type="submit" class="btn btn-primary">Modificar Sala</button>   
        </div>
    </form>
    <br>
    <a href="{{route('sala.index')}}"><button class="btn btn-success">Volver</button></a>
    
@endsection