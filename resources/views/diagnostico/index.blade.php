@extends('layout.layout')

@section('titulo')
    Diagnostico
@endsection

@section('contenido')
    <h1 class="text-center">Diagnostico</h1>
    <br><br>
    @if ($message = Session::get('exito'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
    @endif
    <br><br>
    <table class="table table-bordered">
        <thead>
                <th>Tipo</th>
                <th>Complicaciones</th>
                <th>Opciones</th>
        </thead>
        <tbody>
            @foreach ($diagnosticos as $diagnostico)
                <tr>
                    <td>{{$diagnostico->tipo}}</td>
                    <td>{{$diagnostico->complicaciones}}</td>
                    <td>
                    <form action="{{route('diagnostico.destroy',$diagnostico->id)}}" method="post">
                    <a href="{{route('diagnostico.show',$diagnostico->id)}}" class="btn btn-info">Ver</a>
                    @can('editar-diagnostico')
                    <a href="{{route('diagnostico.edit',$diagnostico->id)}}" class="btn btn-primary">Editar</a>
                    @endcan
                @csrf
                @method('DELETE')
                @can('eliminar-diagnostico')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                @endcan
                </form>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>
<div class="row">
    @can('crear-diagnostico')
    <a href="{{route('diagnostico.create')}}"><button class="btn btn-success">Crear Diagnostico</button></a>
    @endcan
    <a href="{{route('paciente.index')}}"><button class="btn btn-primary">Volver</button></a>
</div>
@endsection