@extends('layout.layout')

@section('titulo')
    Consulta
@endsection

@section('contenido')
    <h1 class="text-center">Consulta</h1>
    <br><br>
    @if ($message = Session::get('exito'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
    @endif
    <br><br>
    <table class="table table-bordered">
        <thead>
                <th>Fecha Consulta</th>
                <th>id Paciente</th>
                <th>Opciones</th>
        </thead>
        <tbody>
            @foreach ($consultas as $consulta)
                <tr>
                    <td>{{$consulta->fechac}}</td>
                    <td>{{$consulta->idPaciente}}</td>
                    <td>
                    <form action="{{route('consulta.destroy',$consulta->id)}}" method="post">
                    <a href="{{route('consulta.show',$consulta->id)}}" class="btn btn-info">Ver</a>
                    @can('editar-consulta')
                    <a href="{{route('consulta.edit',$consulta->id)}}" class="btn btn-primary">Editar</a>
                    @endcan
                @csrf
                @method('DELETE')
                @can('eliminar-consulta')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                @endcan
                </form>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
<div class="row">
    @can('crear-consulta')
    <a href="{{route('consulta.create')}}"><button class="btn btn-success">Crear Consulta</button></a>
    @endcan
    <a href="{{route('inicio')}}"><button class="btn btn-primary">Volver</button></a>
@endsection