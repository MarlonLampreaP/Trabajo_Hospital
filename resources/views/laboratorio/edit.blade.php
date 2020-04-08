@extends('layout.layout')
@section('titulo','Modificar Laboratorio')
@section('contenido')
<h1 class="text-center">Modificar Laboratorio</h1>
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
    <form action="{{route('laboratorio.update', $laboratorio->id)}} " method="post">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="{{$laboratorio->nombre}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label> Direccion:</label>
                <input type="text" class="form-control" name="direccion" value="{{$laboratorio->direccion}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label> Telefono:</label>
                <input type="text" class="form-control" name="telefono" value="{{$laboratorio->telefono}}">
            </div>
        </div>

        <div class="form-row">
            <button type="submit" class="btn btn-primary">Modificar Laboratorio</button>   
        </div>
    </form>
    <br>
    <a href="{{route('laboratorio.index')}}"><button class="btn btn-success">Volver</button></a>
    
@endsection