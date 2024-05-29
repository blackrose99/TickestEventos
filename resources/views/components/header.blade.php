<div class="container-fluid" style="margin: 0; padding: 0;">
    <style>
        .navbar-line {
            background-color: #942339;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white; /* Establece el color del texto a blanco */
            padding-left: 50px;
        }

        .navbar-line a {
            color: white !important; /* Establece el color del enlace a blanco */
        }

        .navbar-line .navbar-toggler-icon {
            background-color: white; /* Establece el color del ícono del botón de navegación a blanco */
        }

        .navbar-line .navbar-toggler {
            border: none; /* Elimina el borde del botón de navegación */
        }

        /* Estilo específico para el enlace de Logout */
        .navbar-line .dropdown-item.logout-link {
            color: black !important; /* Establece el color del enlace Logout a negro */
        }
    </style>

    <nav class="navbar-line navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/home') }}">
                <i class="fas fa-arrow-left"></i> Regresar
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto"></ul>
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name}}
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
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>