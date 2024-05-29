<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Passport Registrado</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Passport Registrado</h1>
            </div>
            <div class="card-body text-center">
                <img src="{{ asset('storage/videos/Animación_sello_gif.gif') }}" alt="GIF PASAPORTE" class="img-fluid"> 
            </div>
        </div>      
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        setTimeout(function() {
            window.location.href = '/passport';
        }, 4000);
    </script>
@endsection

</body>
</html>
