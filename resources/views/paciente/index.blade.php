@extends('layout.layout')

@section('titulo')
    Pacientes
@endsection

@section('contenido')
    <h1 class="text-center">Pacientes</h1>
    <br><br>
    @if ($message = Session::get('exito'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
    @endif
    <br><br>
    <table class="table table-bordered">
        <thead> 
                <th>ID</th>
                <th>Cedula Paciente</th>
                <th>Numero de registro</th>
                <th>Numero de Cama</th>
                <th>Nombre</th>
                <th>Opciones</th>
        </thead>
        <tbody>
            @foreach ($pacientes as $paciente)
                <tr>
                    <td>{{$paciente->id}}</td>
                    <td>{{$paciente->cedulap}}</td>
                    <td>{{$paciente->numeroregistro}}</td>
                    <td>{{$paciente->numerocama}}</td>
                    <td>{{$paciente->nombre}}</td>
                    <td>
                    <form action="{{route('paciente.destroy',$paciente->id)}}" method="post">
                    <a href="{{route('paciente.show',$paciente->id)}}" class="btn btn-info">Ver Diagnostico</a>
                    <a href="{{route('paciente.edit',$paciente->id)}}" class="btn btn-primary">Editar</a>
                    <a href="{{route('diagnostico.edit',$paciente->id)}}" class="btn btn-primary">Editar Diagnostico</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>
<div class="row">
    <a href="{{route('paciente.create')}}"><button class="btn btn-success">Registrar Paciente</button></a>
    <a href="{{route('diagnostico.index')}}"><button class="btn btn-success">Diagnostico Paciente</button></a>
    <a href="{{route('home')}}"><button class="btn btn-primary">Volver</button></a>
@endsection