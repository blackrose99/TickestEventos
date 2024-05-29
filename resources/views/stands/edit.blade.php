@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
    <head>
    @include('components.header')
        <title>Registro Stand</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- ICONOS -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-- STYLES -->
        <link href="{{ asset('css/forms/registroStands.css') }}" rel="stylesheet">

    </head>
    <body>
    <div class="container-fluid">
            <div class="row">
               
            <div class="row">
                <div class="container-fluid contenidoForm">
                    <div class="row ">
                        <img class="logoStand" src="{{ asset('img/stands/logoStand.png') }}" alt="logoStand">
                    </div>
                    <div class="row">
                        <div class="col centrarContenido mt-5">
                            <form action="{{ route('stand.update', ['stand' => $stand->id] ) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                <label for="name">Nombre Empresa</label><br>
                                <input type="text" id="name" name="name" class="txtForm" value="{{$stand->name}}"><br>
                                <hr>

                                <label for="logo">Logo</label><br>
                                <input type="file" id="logo" name="logo" accept="image/*" value="{{$stand->logo}}"><br>
                                <hr>

                                <label for="banner">Banner</label><br>
                                <input type="file" id="banner" name="banner" accept="image/*" value="{{$stand->banner}}"><br>
                                <hr>
                                
                                <label for="floatingTextarea2">Descripción</label><br>
                                <textarea class="txtForm"  name="description" style="height: 100px">{{ $stand->description }}></textarea>
                                
                                <hr>

                                <i class='bx bxl-facebook-circle icono'></i>
                                <input type="text" id="facebook" class="txtForm" name="facebook" value="{{$stand->facebook}}"><br>
                                <hr>

                                <i class='bx bxl-instagram-alt icono' ></i>
                                <input type="text" id="instagram" class="txtForm" name="instagram" value="{{$stand->instagram}}"><br>
                                <hr>

                                <i class='bx bxl-tiktok icono' ></i>
                                <input type="text" id="tiktok" class="txtForm" name="tiktok" value="{{$stand->tiktok}}"><br>
                                <hr>

                                <label for="web">URL Pagina Web</label><br>
                                <input type="text" id="web" name="web" class="txtForm" value="{{$stand->web}}"><br>
                                <hr>


                                <button type="submit" class="btnRegistrar">Actualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </body>
</html>

@endsection
