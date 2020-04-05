@extends('layout.layout')

@section('titulo')
    Agregar Laboratorio
@endsection

@section('contenido')
    <h1>Agregar Laboratorio</h1>
    <br><br>
    <a href="{{route('laboratorio.index')}}"><button class="btn btn-primary">Volver</button></a>
@endsection