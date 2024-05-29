<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Evaluacion Stand</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- ICONOS -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-- STYLES -->
        <link href="{{ asset('css/forms/calificacionStands.css') }}" rel="stylesheet">

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
                            <p>EVALUACION STAND</p>
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
                                <label for="nombreEmpresa">Nombre Empresa</label><br>
                                <input type="text" id="nombreEmpresa" name="nombreEmpresa" class="txtForm" required><br>
                                <hr>
                                <label for="calificacion">Calificación</label><br>
                                <input type="text" id="calificacion" name="calificacion" class="txtForm"  required><br>
                                <hr>
                                <label for="urlPaginaWeb">URL Página Web</label><br>
                                <input type="url" id="urlPaginaWeb" name="urlPaginaWeb" class="txtForm"><br>
                                <hr>
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
                                <textarea id="descripcion" class="txtDescripcion" name="descripcion" rows="4" cols="50" required></textarea><br><br>

                                <input type="submit" class="btnRegistrar" value="Enviar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </body>
</html>

