@extends('layout.layout')

@section('titulo')
    Medicos
@endsection

@section('contenido')
    <h1>Medicos</h1>
    <br><br>
    <a href="{{route('medico.create')}}"><button class="btn btn-success">Registrar Medico</button></a>
    <a href="{{route('home')}}"><button class="btn btn-primary">Volver</button></a>
@endsection