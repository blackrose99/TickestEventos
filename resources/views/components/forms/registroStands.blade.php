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
        <!-- STYLES -->
        <link href="{{ asset('css/forms/registroStands.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <!-- HEADER -->
                <div class="container-fluid ">
                    <div class="row headerUp pt-2">
                        <div class="col-4 text-center">
                            <i class='bx bx-chevron-left'></i>
                        </div>
                        <div class="col-4 text-center">
                            <p>REGISTRO STAND</p>
                        </div>
                        <div class="col-4 text-center">
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm lineaOsucra">
                            .
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="container-fluid contenidoForm">
                    <div class="row ">
                        <img class="logoStand" src="{{ asset('img/stands/logoStand.png') }}" alt="logoStand">
                    </div>
                    <div class="row">
                        <div class="col">
                            <form action="#" method="post" enctype="multipart/form-data">
                                <label for="nombreEmpresa">Nombre Empresa:</label><br>
                                <input type="text" id="nombreEmpresa" name="nombreEmpresa" class="txtForm" required><br>
                                <hr>
                                <label for="email">Email:</label><br>
                                <input type="email" id="email" name="email" class="txtForm" required><br>
                                <hr>
                                <label for="descripcion">Descripción:</label><br>
                                <input type="text" id="descripcion" name="descripcion" class="txtForm"  required><br>
                                <hr>
                                <label for="logo">Logo:</label><br>
                                <input type="file" id="logo" name="logo" accept="image/*" required><br>
                                <hr>
                                <label for="banner">Banner:</label><br>
                                <input type="file" id="banner" name="banner" accept="image/*"required><br>
                                <hr>
                                <i class='bx bxl-facebook-circle icono'></i>
                                <input type="text" id="facebook" class="txtForm" name="facebook"><br>
                                <hr>
                                <i class='bx bxl-instagram-alt icono' ></i>
                                <input type="text" id="instagram" class="txtForm" name="instagram"><br>
                                <hr>
                                <i class='bx bxl-tiktok icono' ></i>
                                <input type="text" id="instagram" class="txtForm" name="instagram"><br>
                                <hr>
                                <label for="urlPaginaWeb">URL Página Web:</label><br>
                                <input type="url" id="urlPaginaWeb" name="urlPaginaWeb" class="txtForm"><br>
                                <hr>
                                <input type="submit" class="btnRegistrar" value="Registrarse">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </body>
</html>
