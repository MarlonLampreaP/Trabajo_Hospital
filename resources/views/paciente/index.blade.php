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
                <th>Cedula Paciente</th>
                <th>Numero de registro</th>
                <th>Numero de Cama</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Fecha de nacimiento</th>
                <th>Sexo</th>
                <th>Opciones</th>
        </thead>
        <tbody>
            @foreach ($pacientes as $paciente)
                <tr>
                    <td>{{$paciente->cedulap}}</td>
                    <td>{{$paciente->numeroregistro}}</td>
                    <td>{{$paciente->numerocama}}</td>
                    <td>{{$paciente->nombre}}</td>
                    <td>{{$paciente->direccion}}</td>
                    <td>{{$paciente->fechanacimiento}}</td>
                    <td>{{$paciente->sexo}}</td>
                    <td>
                    <form action="{{route('paciente.destroy',$paciente->id)}}" method="post">
                    <a href="{{route('diagnostico.show',$paciente->id)}}" class="btn btn-info">Ver Diagnostico</a>
                    <a href="{{route('paciente.edit',$paciente->id)}}" class="btn btn-primary">Editar</a>
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