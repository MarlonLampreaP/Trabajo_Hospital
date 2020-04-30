@extends('layout.layout')

@section('titulo')
    Salas
@endsection

@section('contenido')
    <h1 class="text-center">Salas</h1>
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
            @foreach ($sala as $sala)
                <tr>
                    <td>{{$sala->nombre}}</td>
                    <td>
                    <form action="{{route('sala.destroy',$sala->id)}}" method="post">
                    <a href="{{route('sala.show',$sala->id)}}" class="btn btn-info">Ver</a>
                    @can('editar-sala')
                    <a href="{{route('sala.edit',$sala->id)}}" class="btn btn-primary">Editar</a>
                    @endcan
                    @csrf
                @method('DELETE')
                @can('eliminar-sala')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                @endcan
                </form>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>
<div class="row">
    @can('crear-sala')
    <a href="{{route('sala.create')}}"><button class="btn btn-success">Crear Sala</button></a>
    @endcan
    <a href="{{route('hospital.index')}}"><button class="btn btn-primary">Volver</button></a>
</div>
@endsection