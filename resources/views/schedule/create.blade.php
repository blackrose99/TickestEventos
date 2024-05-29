@extends('layouts.app')

@section('content')

    <div class="container">
    @include('components.header')
        <div class="card">
            <div class="card-header">
                <h1>Editar Horarios</h1>
            </div>

            <div class="card-body">
                <form method="post" action="{{route('schedule.store')}}">
                @csrf
                <span class="input-group-text">Horario</span>
                <select class="form-select"  name="day" required>
                    <option value='Horario Regular'>
                        Horario Regular    
                    </option>
                    <option value='Fin de Semana'>
                        Horario Extendido
                    </option>  
                </select>
                <div class="input-group mb-3">
                    <span class="input-group-text">Hora de Inicio</span>
                    <input type="time" class="form-control" name="hour_start"  value="08:00:00" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Hora de Cierre</span>
                    <input type="time" class="form-control" name="hour_end" value="20:00:00" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{route('schedule.index')}}" class="btn btn-danger">Volver</a>
                </form>
            </div>
        </div>
    </div>
@endsection