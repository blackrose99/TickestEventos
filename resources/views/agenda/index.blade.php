@extends('layouts.app')

@section('content')
    <div class="container">
        @include('components.header')

        <div class="card">
            <div class="card-header">
                <h1 class="mb-0">Agendas Registradas</h1>
            </div>
            <div class="card-body">
                <nav class="mb-3">
                    <a href="{{ route('agenda.create') }}" class="btn btn-success">Crear Nueva Agenda</a>
                </nav>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Lugar</th>
                                <th scope="col">Stand</th>
                                <th scope="col">Horario</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($agendas as $agenda)
                                <tr>
                                    <th scope="row">{{ $agenda->id }}</th>
                                    <td>{{ $agenda->place->name }}</td>
                                    <td>{{ $agenda->stand->name }}</td>
                                    <td>{{ $agenda->place->schedule->day }}, {{ $agenda->place->schedule->hour_start }} a {{ $agenda->place->schedule->hour_end }}</td>
                                    <td>{{ $dateSta_format[$loop->index] }} {{ $agenda->date_start }} a {{ $dateEnd_format[$loop->index] }} {{ $agenda->date_end }}</td>
                                    <td>
                                        <a href="{{ route('agenda.edit', $agenda->id) }}" class="btn btn-primary">Editar</a>
                                        <form method="post" action="{{ route('agenda.destroy', $agenda->id) }}" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta agenda?')">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No hay agendas registradas.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
