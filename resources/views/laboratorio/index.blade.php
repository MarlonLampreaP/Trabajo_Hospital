@extends('layout.layout')

@section('titulo')
    Laboratorio
@endsection

@section('contenido')
    <h1 class="text-center">Laboratorio</h1>
    <br><br>
<a href="{{route('laboratorio.create')}}"><button class="btn btn-success">Ver Laboratorio</button></a>
<a href="{{route('home')}}"><button class="btn btn-primary">Volver</button></a>
@endsection