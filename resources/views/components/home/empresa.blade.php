<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido</title>
    <!-- ICONOS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Agregando las rutas de scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-dzvlFJgu1AXLh16iDRdL3ew5CF5F3dfUcqzp7Jif9d1r6LrUZlW0S2RFIvoUH6DR"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyCYeFvAVP1PKGiQPhh6Uow=="
        crossorigin="anonymous"></script>

    <style>
        /* Estilos generales */
        body {
            font-family: 'Lato', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff; /* Fondo azul claro */
        }

        .container {
            margin: 0 auto;
            padding: 20px;
            border: 2px solid #5e1325; /* Borde de color especificado */
            border-radius: 10px; /* Bordes redondeados */
            box-sizing: border-box;
            position: relative; /* Agregamos posición relativa para el posicionamiento absoluto del footer */
        }

        /* Estilos para el contenido principal */
        .welcome-container {
            text-align: center;
            margin-bottom: 30px;
        }

        .welcome-container h4 {
            color: #333;
        }

        .welcome-container p {
            color: #666;
            margin-top: 10px;
        }

        /* Estilos para las tarjetas */
        .card {
            margin-top: 20px;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff; /* Fondo blanco */
        }

        .card-title {
            color: #333;
            font-weight: bold;
        }

        .card-text {
            color: #666;
        }

        /* Estilos para los botones */
        .btn-primary {
            background-color: #007BFF;
            border-color: #007BFF;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

 
    </style>
</head>

<body>
    <div class="container">
        <div class="welcome-container">
            <h4>Bienvenido, {{ Auth::user()->name }}!</h4>
            <p>Aquí encontrarás opciones para gestionar stands y eventos.</p>
        </div>

        <!-- Tarjeta 1 - Gestionar Stands -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Gestionar Stands</h5>
                <p class="card-text">Añade, edita o elimina stands para tu empresa.</p>
                <a href="{{ route('stand.index') }}" class="btn btn-primary">Ir a Stands</a>
            </div>
        </div>

        <!-- Tarjeta 2 - Gestionar Agenda -->
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Gestionar Agenda</h5>
                <p class="card-text">Configura la agenda de eventos para tu empresa.</p>
                <a href="{{ route('agenda.index') }}" class="btn btn-primary">Ir a Agenda</a>
            </div>
        </div>
    </div>


</body>

</html>
