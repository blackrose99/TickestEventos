<!-- resources/views/admin/empresas/index.blade.php -->

@extends('layouts.perfil')

@section('content')
    <h1>Panel de Administración - Empresas</h1>
        <!-- Enlace para agregar una nueva empresa -->
        <a href="{{ route('registro-stand') }}" class="btn btn-primary">Registrar Stand</a>


    <div class="row">
        @foreach ($empresas as $empresa)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Stand {{ $empresa->numero_stand }}</h5>
                        <p class="card-text">{{ $empresa->nombre }}</p>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.empresas.edit', $empresa->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('admin.empresas.destroy', $empresa->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Agregar un salto de línea cada tres tarjetas para crear filas -->
            @if($loop->iteration % 3 == 0)
                <div class="w-100"></div>
            @endif
        @endforeach
    </div>


@endsection
