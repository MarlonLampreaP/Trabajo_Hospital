@extends('layout.layout')

@section('titulo')
    Hospital
@endsection

@section('contenido')
    <h1 class="text-center">Hospital</h1>
    <br><br>
    @if ($message = Session::get('exito'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
    @endif
    <br><br>
    <table class="table table-bordered">
        <thead>
                <th>Id</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Opciones</th>
        </thead>
        <tbody>
            @foreach ($hospitals as $hospital)
                <tr>
                    <td>{{$hospital->id}}</td>
                    <td>{{$hospital->nombre}}</td>
                    <td>{{$hospital->direccion}}</td>
                    <td>
                    <form action="{{route('hospital.destroy',$hospital->id)}}" method="post">
                    <a href="{{route('hospital.show',$hospital->id)}}" class="btn btn-info">Ver</a>
                    @can('editar-hospital')
                    <a href="{{route('hospital.edit',$hospital->id)}}" class="btn btn-primary">Editar</a>
                    @endcan
                @csrf
                @method('DELETE')
                @can('eliminar-hospital')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                @endcan
                </form>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>
<div class="row">
    @can('crear-hospital')
    <a href="{{route('hospital.create')}}"><button class="btn btn-success">Crear Hospital</button></a>
    @endcan
    @can ('entrar-sala')
    <a href="{{route('sala.index')}}"><button class="btn btn-success">Salas</button></a>
    @endcan
    <a href="{{route('inicio')}}"><button class="btn btn-primary">Volver</button></a>
</div>
@endsection