@extends('layout.layout')

@section('titulo')
    Nuevo Medico
@endsection

@section('contenido')
<h1 class="text-center">Crear Nuevo Medico</h1>
    <br><br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <div class="header"><strong>.Ups.</strong> Algo anda mal...</div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <br><br>
    <form action="{{route('medico.store')}} " method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Cedula Medico:</label>
                <input type="text" class="form-control" name="cedulam" placeholder="Cedula Medico">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nombre Medico:</label>
                <input type="text" class="form-control" name="nombrem" placeholder="Nombre Medico">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Especialidad:</label>
                <input type="text" class="form-control" name="especialidad" placeholder="Especialidad">
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
        <label>ID Hospital:</label>
            <select name="idhospital" class="form-control">
                @foreach ($hospitals as $hospital)
                    <option value="{{$hospital->id}}">{{$hospital->nombre}}</option>
                @endforeach
            </select>
        </div>
    </div>
        <div class="form-row">
            <button type="submit" class="btn btn-primary">Registrar Medico</button>
        </div>
    </form>
    <br>
    <a href="{{route('medico.index')}}"><button class="btn btn-primary">Volver</button></a>
@endsection

