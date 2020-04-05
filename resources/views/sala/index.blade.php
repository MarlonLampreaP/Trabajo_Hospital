@extends('layout.layout')

@section('titulo')
    Sala
@endsection

@section('contenido')
    <h1 class="text-center">Sala</h1>
    <br><br>
<a href="{{route('sala.create')}}"><button class="btn btn-success">Crear Sala</button></a>
<a href="{{route('home')}}"><button class="btn btn-primary">Volver</button></a>
@endsection