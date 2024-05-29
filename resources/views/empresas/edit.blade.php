@extends('layouts.app')

@section('content')
<div class="container">
@include('components.header')
    <div class="card">
        <div class="card-header">
            <h1>Editar Usuario - Empresa</h1>
        </div>
        <div class="card-body">
        <form action="{{ route('empresa.update', $empresa->id) }}" method="POST">
            @csrf
            @method('PUT') 
            <div class="input-group mb-3">
                <span class="input-group-text">Nombre</span>
                <input type="text" class="form-control" name="name" value="{{$empresa->name}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Correo Electrónico</span>
                <input type="email" class="form-control" name="email" value="{{$empresa->email}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Documento</span>
                <input type="text" class="form-control" name="document" value="{{$empresa->document}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Dirección:</span>
                <input type="text" class="form-control" name="address" value="{{$empresa->address}}" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Número de Teléfono</span>
                <input type="text" class="form-control" name="phone_number" value="{{$empresa->phone_number}}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
            <a href="{{route('empresa.index')}}" class="btn btn-primary">Volver</a>
        </form>
        </div>
    </div>
</div>


@endsection
            