@extends('layout.layout')

@section('titulo')
    Agregar Hospital
@endsection

@section('contenido')
    <h1>Agregar Hospital</h1>
    <br><br>
    <a href="{{route('hospital.index')}}"><button class="btn btn-primary">Volver</button></a>
@endsection