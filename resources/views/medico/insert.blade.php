@extends('layout.layout')

@section('titulo')
    Agregar Medico
@endsection

@section('contenido')
    <h1>Agregar Medico</h1>
    <br><br>
    <a href="{{route('medico.index')}}"><button class="btn btn-primary">Volver</button></a>
@endsection