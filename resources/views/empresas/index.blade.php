@extends('layouts.app')

@section('content')
    <div class="container">
        @include('components.header')

        <div class="card">
            <div class="card-header">
                <h1 class="mb-0">Usuarios - Empresas</h1>
                <a href="{{ route('empresa.create') }}" class="btn btn-primary">Crear empresa</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre Empresa</th>
                                <th>Email</th>
                                <th>Nit</th>
                                <th>Número Teléfonico</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($empresas as $empresa)
                                <tr>
                                    <td>{{ $empresa->name }}</td>
                                    <td>{{ $empresa->email }}</td>
                                    <td>{{ $empresa->document }}</td>
                                    <td>{{ $empresa->phone_number }}</td>
                                    <td>
                                        <a href="{{ route('empresa.edit', ['empresa' => $empresa->id ]) }}" class="btn btn-primary">Editar</a>
                                        <form action="{{ route('empresa.destroy', ['empresa' => $empresa->id]) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta empresa?');" class="d-inline">
                                            @csrf
                                            @method('DELETE') 
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No hay empresas registradas.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
