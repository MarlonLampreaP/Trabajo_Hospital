@extends('layout.layout')

@section('titulo')
    Laboratorio
@endsection

@section('contenido')
    <h1 class="text-center">Laboratorio</h1>
    <br><br>
    @if ($message = Session::get('exito'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
    @endif
    <br><br>
    <table class="table table-bordered">
        <thead>
                <th>Nombre</th>
                <th>Opciones</th>
        </thead>
        <tbody>
            @foreach ($laboratorios as $laboratorio)
                <tr>
                    <td>{{$laboratorio->nombre}}</td>
                    <td>
                    <form action="{{route('laboratorio.destroy',$laboratorio->id)}}" method="post">
                    <a href="{{route('laboratorio.show',$laboratorio->id)}}" class="btn btn-info">Ver</a>
                    @can('editar-laboratorio')
                    <a href="{{route('laboratorio.edit',$laboratorio->id)}}" class="btn btn-primary">Editar</a>
                    @endcan
                @csrf
                @method('DELETE')
                @can('eliminar-laboratorio')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                @endcan
                </form>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>
<div class="row">
    @can('crear-laboratorio')
    <a href="{{route('laboratorio.create')}}"><button class="btn btn-success">Crear Laboratorio</button></a>
    @endcan
    <a href="{{route('inicio')}}"><button class="btn btn-primary">Volver</button></a>
</div>
@endsection