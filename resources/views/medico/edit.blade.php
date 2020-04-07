@extends('layout.layout')
@section('titulo','Modificar Medico')
@section('contenido')
<h1 class="text-center">Modificar Medico</h1>
    <br><br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <div class="header"><strong>Ups.</strong> Algo anda mal...</div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <br><br>
    <form action="{{route('medico.update', $medico->id)}} " method="post">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Cedula Medico:</label>
                <input type="text" class="form-control" name="cedulam" value="{{$medico->cedulam}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label> Nombre Medico:</label>
                <input type="text" class="form-control" name="nombrem" value="{{$medico->nombrem}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label> Especialidad:</label>
                <input type="text" class="form-control" name="especialidad" value="{{$medico->especialidad}}">
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label>ID Hospital:</label>
            <select name="idhospital" class="form-control">
                @foreach ($hospitals as $hospital)
                    <option value="{{$hospital->id}}"
                    @if ($medico -> $hospitals == $hospital->id)
                        selected
                    @endif>
                    {{$hospital->nombre}}</option>
                @endforeach
            </select>
        </div>
    </div>

        <div class="form-row">
            <button type="submit" class="btn btn-primary">Modificar Consulta</button>   
        </div>
    </form>
    
@endsection