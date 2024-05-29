@extends('layouts.app')

@section('content')
    <div class="container">
    @include('components.header')
        <div class="card">
            <div class="card-header">
                <h1>Registrar Agenda</h1>
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
                <form method="post" action="{{route('agenda.store')}}">
                    @csrf
                    <span class="input-group-text">Seleccione el Lugar de Presentacion</span>
                    <select class="form-select"  name="place_id" required>
                        @foreach($places as $place)
                            <option value='{{$place-> id}}'>{{$place->name}}, {{$place->schedule->day}} {{$place->schedule->hour_start}}  -  {{$place->schedule->hour_end}}</option>
                        @endforeach    
                    </select>
                    <br>
                    <span class="input-group-text">Seleccione el Stand</span>
                    <select class="form-select"  name="stand_id" required>
                        @foreach($stands as $stand)
                            <option value='{{$stand-> id}}'>{{$stand->name}}</option>
                        @endforeach    
                    </select>
                    <br>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Fecha de Inicio</span>
                        <input type="date" class="form-control" name="date_start" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Fecha de Finalización</span>
                        <input type="date" class="form-control" name="date_end" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <a href="{{route('agenda.index')}}" class="btn btn-danger">Volver</a>
                </form>
            </div>
        </div>
    </div>
@endsection