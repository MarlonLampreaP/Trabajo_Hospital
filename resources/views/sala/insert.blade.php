@extends('layout.layout')

@section('titulo')
    Agregar Sala
@endsection

@section('contenido')
    <h1>Agregar Sala</h1>
    <br><br>
    <a href="{{route('sala.index')}}"><button class="btn btn-primary">Volver</button></a>
@endsection