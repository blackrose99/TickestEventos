<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <style>
        .video-container {
            border: 2px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #preview {
            width: 100%;
        }

        #defaultVideo, #qrVideo {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center mb-4 ">Lector de Códigos QR</h2>
                <div id="defaultVideo" class="video-container">
                    <video autoplay muted loop id="background-video" style="width: 100%;">
                        <source src="{{ asset('multimedia/videos/istockphoto-1314370116-640_adpp_is.mp4') }}" type="video/mp4">
                        Tu navegador no soporta la etiqueta de video.
                    </video>
                </div>
                <div id="qrVideo" class="video-container" style="display: none;">
                    <video id="preview"></video>
                </div>
                <div id="qrResult" class="mt-3"></div>
                <button id="scanQR" class="btn btn-primary btn-block mt-3">Escanear Código QR</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            var scanner = new Instascan.Scanner({ video: document.getElementById('preview') });

            $('#scanQR').click(function () {
                $('#defaultVideo').hide();
                $('#qrVideo').show();

                Instascan.Camera.getCameras().then(function (cameras) {
                    if (cameras.length > 0) {
                        scanner.start(cameras[0]);

                        scanner.addListener('scan', function (content) {
                            $('#qrResult').text('Resultado: ' + content);
                            window.location.href = content;
                            scanner.stop();
                        });
                    } else {
                        console.error('No se encontraron cámaras en el dispositivo.');
                    }
                }).catch(function (e) {
                    console.error('Error al acceder a las cámaras:', e);
                });
            });
        });
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <div class="card mt-3 list-card text-center">
        <div class="card-body">
            <h5 class="card-title">Ver Listado de Stands</h5>
            <h6 class="card-subtitle mb-2 text-muted">Explora nuestra selección</h6>
            <p class="card-text">Explora el listado completo de stands disponibles. Encuentra la opción perfecta para tu evento.</p>
            <a href="{{ route('stands.list') }}" class="btn btn-primary">Ir a Listado de Stands</a>
        </div>
    </div>
</body>

</html>
