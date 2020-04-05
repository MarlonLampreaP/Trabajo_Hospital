@extends('layout.layout')

@section('titulo')
    Consultas
@endsection

@section('contenido')
    <h1>Consultas</h1>
    <br><br>
    <a href="{{route('consulta.create')}}"><button class="btn btn-success">Crear Consulta</button></a>
    <a href="{{route('home')}}"><button class="btn btn-primary">Volver</button></a>
@endsection