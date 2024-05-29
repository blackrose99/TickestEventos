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
                            <form action="{{ route('stand.store') }}" method="POST" enctype="multipart/form-data" >
                            @csrf
                                <label for="name">Nombre Empresa</label><br>
                                <input type="text" id="name" name="name" class="txtForm" required><br>
                                <hr>

                                <label for="logo">Logo</label><br>
                                <input type="file" id="logo" name="logo" accept="image/*" required><br>
                                <hr>

                                <label for="banner">Banner</label><br>
                                <input type="file" id="banner" name="banner" accept="image/*"required><br>
                                <hr>
                                
                                <label for="floatingTextarea2">Descripción</label><br>
                                <textarea class="txtForm"  name="description" style="height: 100px" required></textarea>
                                
                                <hr>

                                <i class='bx bxl-facebook-circle icono'></i>
                                <input type="text" id="facebook" class="txtForm" name="facebook"><br>
                                <hr>

                                <i class='bx bxl-instagram-alt icono' ></i>
                                <input type="text" id="instagram" class="txtForm" name="instagram"><br>
                                <hr>

                                <i class='bx bxl-tiktok icono' ></i>
                                <input type="text" id="tiktok" class="txtForm" name="tiktok"><br>
                                <hr>

                                <label for="web">URL Pagina Web</label><br>
                                <input type="text" id="web" name="web" class="txtForm"><br>
                                <hr>

                                <select class="form-select" id="classifications" name="classifications[]">  
                                    @foreach($classifications as $class)
                                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                                    @endforeach
                                </select>

                                <button type="submit" class="btnRegistrar">Registrarse</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </body>
</html>

@endsection