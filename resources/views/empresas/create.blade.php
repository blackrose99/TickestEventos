@extends('layouts.app')

@section('content')
<div class="container">
@include('components.header')
    <div class="card">
        <div class="card-header">
            <h1>Crear Usario - Empresa</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('empresa.store') }}" method="POST">
            @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text">Nombre</span>
                    <input type="text" class="form-control" name="name" required >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Correo Electrónico</span>
                    <input type="email" class="form-control" name="email" required >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Contraseña</span>
                    <input type="password" class="form-control" name="password" required >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Documento</span>
                    <input type="number" class="form-control" name="document" required >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Dirección:</span>
                    <input type="text" class="form-control" name="address" required >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Número de Teléfono</span>
                    <input type="number" class="form-control" name="phone_number" required >
                </div>
                <button type="submit" class="btn btn-primary">Crear Usuario</button>
                <a href="{{route('empresa.index')}}" class="btn btn-primary">Volver</a>
            </form>
        </div>
    </div>
</div>

@endsection