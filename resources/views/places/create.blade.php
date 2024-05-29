
@extends('layouts.app')

@section('content')
    <div class="container">
    @include('components.header')
        <div class="card">
            <div class="card-header">
                <h1>Registro de Lugares</h1>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="card-body">
                <form method="post" action="{{route('places.store')}}">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text">Nombre</span>
                        <input type="text" class="form-control" name="name" required >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Email</span>
                        <input type="text" class="form-control" name="email" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Dirección</span>
                        <input type="text" class="form-control" name="address" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Latitud</span>
                        <input type="text" class="form-control" name="latitude" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Longitud</span>
                        <input type="text" class="form-control" name="length" required>
                    </div>
                    <span class="input-group-text">Seleccione un Horario</span>
                    <select class="form-select"  name="schedule_id" required placeholder="Seleccione un Horario">
                        @foreach($schedules as $schedule)
                            <option value='{{$schedule -> id}}'>{{$schedule->day}}, {{$schedule->hour_start}}  -  {{$schedule->hour_end}}</option>
                        @endforeach    
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <a href="{{route('places.index')}}" class="btn btn-danger">Volver</a>
                </form>
            </div>
        </div>
    </div>
@endsection

