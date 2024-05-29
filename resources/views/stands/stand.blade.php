@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro Stand</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ICONOS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('css/user/stand.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        .content-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: -100px;
        }
        .bx-chevron-left{
            color: #fff;
        }
        
        @media (max-width: 767px) {
            .navbar-line {
                flex-direction: column; /* Cambia la dirección del eje principal a columna en dispositivos pequeños */
                height: auto; /* Altura automática en dispositivos pequeños */
            }

            .navbar-line .btn-custom {
                margin-bottom: 10px; /* Agrega margen inferior entre los botones en dispositivos pequeños */
                text-align: center; /* Centra los botones en dispositivos pequeños */
            }

            .logout-btn-container {
                margin-top: 10px; /* Ajusta el espacio entre el botón de logout y otros botones */
            }
   

        }
    </style>

</head>
<body>
    <div class="navbar-line ">       
        <div class="btn-container d-flex">
            <!-- HEADER -->
            <div class="container-fluid" >
                <div class="row headerUp pt-2">
                    <div class="col-3 text-center">
                    <a href="/passport"><i class='bx bx-chevron-left'></i></a>
                    </div>
                    <div class="col-3 text-center d-flex justify-content-between align-items-center ">
                        <button type="button" class="btn btn-link text-white d-inline-block" onclick="window.location.href='/home'">SCANEAR QR</button>
                    </div>
                    <div class="col-3 text-center d-flex justify-content-between align-items-center ">
                        <button type="button" class="btn btn-link text-white" onclick="window.location.href='/passport'">VER VISITADOS</button>         
                    </div>
                    <div class="col-3 text-center pl-1 mt-2">
                        <a id="navbarDropdown" class="bx bx-dots-vertical-rounded" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <!-- {{ Auth::user()->name}} -->
                        </a>
    
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item logout-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                {{ __('CERRAR SESION') }}
                            </a>
    
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
              
                </div>
                <div class="row">
                    <div class="col-sm lineaOsucra">
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="">              
            <div class="row ">
                <div class="container-fluid contenidoCard">
                    <div class="row content-container">
                        <div class="col-md-4 principal">
                            <!-- Mostrar calificación para el stand -->
                            
                                <img class="card-img-top logoStand" src="{{ asset($stand->logo) }}" alt="{{$stand->name}}">
                                <img class="card-img-top bannerStand" src="{{ asset($stand->banner) }}" alt="{{$stand->name}}">
                            
                            

                            <div class="calificacion">
                                @php
                                $calification = $stand->calification; // Obtener la calificación del stand
                                @endphp
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $calification)
                                        <!-- Rellenar la estrella si $i es menor o igual a $calification -->
                                        <label class="estrella-rellena" for="estrella{{$stand->id}}{{$i}}">&#9733;</label>
                                    @else
                                        <!-- Mostrar una estrella vacía si $i es mayor que $calification -->
                                        <label class="estrella-vacia" for="estrella{{$stand->id}}{{$i}}">&#9734;</label>
                                    @endif
                                @endfor
                            </div>
                            <div class="card ">
                                <div class="card-body">
                                    <h4 class="card-title">{{$stand->user->name}}</h4>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><i class='bx bx-user'></i> <strong>Stand:</strong> {{$stand->name}}</li>

                                        <li class="list-group-item"><i class="bx bx-map"></i> <strong>Dirección:</strong> {{$stand->user->address}}</li>
                                        <li class="list-group-item"><i class="bx bx-phone"></i> <strong>Teléfono:</strong> {{$stand->user->phone_number}}</li>
                                        <p class="card-text"><i class="bx bx-info-circle"></i> {{ $stand->description }}</p>
                                        <li class="list-group-item"><i class="bx bx-link-external"></i> <strong>Sitio web:</strong> <a href="{{$stand->web}}" target="_blank">{{$stand->web}}</a></li>
                                    </ul>

                                    <div class="redes">          
                                        <div class="container social-icons mt-4  ">                                
                                            <!-- Enlaces a redes sociales -->
                                            <a href="{{ $stand->facebook }}" target="_blank" class="social-icon"><i class="bx bxl-facebook-circle bx-lg"></i></a>
                                            <a href="{{ $stand->instagram }}" target="_blank" class="social-icon"><i class="bx bxl-instagram-alt bx-lg"></i></a>
                                            <a href="{{ $stand->tiktok }}" target="_blank" class="social-icon"><i class="bx bxl-tiktok bx-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection
