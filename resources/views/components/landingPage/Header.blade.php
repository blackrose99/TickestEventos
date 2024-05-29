<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nombre de tu Página</title>
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

    <link href="{{ asset('css/index_css/header.css') }}" rel="stylesheet">

    <!-- Agregar enlace a la fuente de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    
</head>

<body>
    <div class="icon-container">
        <box-icon name='dots-vertical-rounded' color="#fff"></box-icon>
    </div>

    <div class="navbar-line">
        <div class="btn-container d-flex">
            <!-- Botones específicos para cada tipo de usuario -->
            @auth
                @if(Auth::user()->hasRole('Visitante'))
                    <a href="{{ url('/home') }}" class="btn-custom">SCANEAR QR<span></span><span></span><span></span><span></span></a>
                    <a href="{{ url('/stands') }}" class="btn-custom">STANDS<span></span><span></span><span></span><span></span></a>
                @elseif(Auth::user()->hasRole('Empresa'))
                    <a href="{{ url('/home') }}" class="btn-custom">HOME<span></span><span></span><span></span><span></span></a>
                    <a href="{{ url('/stand') }}" class="btn-custom">CREAR STANDS<span></span><span></span><span></span><span></span></a>
                @elseif(Auth::user()->hasRole('Administrador'))
                    <a href="{{ url('/home') }}" class="btn-custom">HOME<span></span><span></span><span></span><span></span></a>
                    <a href="{{ url('/empresa') }}" class="btn-custom">CREAR EMPRESA<span></span><span></span><span></span><span></span></a>
                @endif

                <div class="col-6 text-center pl-2 mt-1">
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
            @else
                <!-- Botones de Iniciar Sesión y Registrarse -->
                <a href="{{ route('login') }}" class="btn-custom">INICIAR SESION<span></span><span></span><span></span><span></span></a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn-custom">REGISTRARSE<span></span><span></span><span></span><span></span></a>
                @endif
            @endauth
        </div>
    </div>
</body>

</html>
