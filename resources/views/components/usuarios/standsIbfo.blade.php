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
        <link rel="stylesheet" href="user.css">
        <link href="{{ asset('css/user/stand.css') }}" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>



    </head>
    <body class="">
        <div class="container-fluid">
            
            <div class="row">
                <!-- HEADER -->
                <div class="container-fluid  ">
                    <div class="row headerUp pt-2">
                        <div class="col-4 text-center">
                            <i class='bx bx-chevron-left'></i>
                        </div>
                        <div class="col-4 text-center d-flex justify-content-between align-items-center ">
                            <button type="button" class="btn btn-link text-white" onclick="window.location.href='/user'">INICIO</button>
                            <button type="button" class="btn btn-link text-white" onclick="window.location.href='/#'">VISITADOS</button>
                        </div>
                        
                        <div class="col-4 text-center">
                            <i class='bx bx-user'></i>
                        </div>
                  
                    </div>
                    <div class="row">
                        <div class="col-sm lineaOsucra">
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="">              
                <div class="calificacion">
                    <input type="radio" id="estrella5" name="calificacion" value="5">
                    <label for="estrella5">&#9733;</label>
                    <input type="radio" id="estrella4" name="calificacion" value="4">
                    <label for="estrella4">&#9733;</label>
                    <input type="radio" id="estrella3" name="calificacion" value="3">
                    <label for="estrella3">&#9733;</label>
                    <input type="radio" id="estrella2" name="calificacion" value="2">
                    <label for="estrella2">&#9733;</label>
                    <input type="radio" id="estrella1" name="calificacion" value="1">
                    <label for="estrella1">&#9733;</label>
                </div>
            </div>
        
            <div class="row ">
                <div class="container-fluid contenidoCard">
                    <div class="row ">
                        @if(isset($stands[0]))
                            <?php $firstStand = $stands[0]; ?>
                            <img class="card-img-top logoStand" src="{{ $firstStand->photo_url }}" alt="{{ $firstStand->company_name }}">
                        </div>
                            <div class="row">
                                <div class="card ">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $firstStand->company_name }}</h5>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><i class="bx bx-map"></i> <strong>Dirección:</strong> {{ $firstStand->address }}</li>
                                            <li class="list-group-item"><i class="bx bx-phone"></i> <strong>Teléfono:</strong> {{ $firstStand->phone_number }}</li>
                                            <p class="card-text"><i class="bx bx-info-circle"></i> {{ $firstStand->description }}</p>
                                            <li class="list-group-item"><i class="bx bx-link-external"></i> <strong>Sitio web:</strong> <a href="{{ $firstStand->website_url }}" target="_blank">{{ $firstStand->website_url }}</a></li>
                                        </ul>

                                        <div class="redes">          
                                            <div class="social-icons mt-4  ">                                
                                                <a href="#" target="_blank" class="social-icon"><i class="bx bxl-facebook-circle bx-lg"></i></a>
                                                <a href="#" target="_blank" class="social-icon"><i class="bx bxl-instagram-alt bx-lg"></i></a>
                                                <a href="#" target="_blank" class="social-icon"><i class="bx bxl-tiktok bx-lg"></i></a>
                                            </div>

                                         </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <p>No hay información disponible en este momento.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
