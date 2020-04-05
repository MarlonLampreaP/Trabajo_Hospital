@extends('layout.layout')

@section('titulo')
    Hospital
@endsection

@section('contenido')
    <h1 class="text-center">Hospital</h1>
    <br><br>
<a href="{{route('hospital.create')}}"><button class="btn btn-success">Agregar Hospital</button></a>
<a href="{{route('home')}}"><button class="btn btn-primary">Volver</button></a>
@endsection