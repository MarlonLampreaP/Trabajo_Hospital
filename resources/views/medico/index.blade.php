@extends('layout.layout')

@section('titulo')
    Medico
@endsection

@section('contenido')
    <h1 class="text-center">Medico</h1>
    <br><br>
    @if ($message = Session::get('exito'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
    @endif
    <br><br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Hospital</th>
                <th>Cedula Medico</th>
                <th>Nombre Medico</th>
                <th>Opciones</th>
            <tr>
        </thead>
        <tbody>
            @foreach ($medicos as $medico)
                <tr>
                    <td>{{$medico->idhospital}}</td>
                    <td>{{$medico->cedulam}}</td>
                    <td>{{$medico->nombrem}}</td>
                    <td>
                    <form action="{{route('medico.destroy',$medico->id)}}" method="post">
                    <a href="{{route('medico.show',$medico->id)}}" class="btn btn-info">Ver</a>
                    <a href="{{route('medico.edit',$medico->id)}}" class="btn btn-primary">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
<div class="row">
    <a href="{{route('medico.create')}}"><button class="btn btn-success">Registrar Medico</button></a>
    <a href="{{route('home')}}"><button class="btn btn-primary">Volver</button></a>
@endsection