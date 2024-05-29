
@extends('layouts.app')

@section('content')
    <div class="container">
    @include('components.header')
        <div class="card">
            <div class="card-header">
                <h1>Editar Lugares</h1>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('places.update',$place->id)}}">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text">Nombre</span>
                    <input type="text" class="form-control" name="name" value="{{$place->name}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Email</span>
                    <input type="text" class="form-control" name="email" value="{{$place->email}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Dirección</span>
                    <input type="text" class="form-control" name="address" value="{{$place->address}}" >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Latitud</span>
                    <input type="text" class="form-control" name="latitude" value="{{$place->latitude}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Longitud</span>
                    <input type="text" class="form-control" name="length" value="{{$place->length}}">
                </div>
                <select class="form-select"  name="schedule_id" required placeholder="Seleccione un Horario">
                    @foreach($schedules as $schedule)
                    <option value='{{$schedule -> id}}' @if($schedule->id == $place->schedule->id) selected @endif>
                        {{$schedule->day}}, {{$schedule->hour_start}}  -  {{$schedule->hour_end}}
                    </option>
                    @endforeach    
                </select>
                <br>
                <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{route('places.index')}}" class="btn btn-danger">Volver</a>
                </form>
            </div>
        </div>
    </div>
@endsection
