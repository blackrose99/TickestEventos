<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Agregamos Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      background-color: #942339;
      color: white;
    }
    .login-box {
      max-width: 400px;
      margin: auto;
      padding: 20px;
      border-radius: 10px;
      background-color: white;
      margin-top: 50px;
      color: #5e1325; /* Color gris para el texto */
    }
    .form-control, .btn {
      border-radius: 20px;
    }
    .btn-primary {
      background-color: #5e1325;
      border-color: #5e1325;
    }
    /* Estilos para el footer */
    footer {
      background-color: white; /* Color del footer blanco */
      border-radius: 30px; /* Esquinas redondeadas */
      padding: 30px; /* Aumentamos el padding para hacerlo más grande */
      margin-top: 50px;
      box-shadow: 0px -5px 15px 0px rgba(0,0,0,0.75); /* Sombra respecto al fondo */
       bottom: 0; /* Coloca el footer al final de la página */
       left: 0; /* Alinea el footer al lado izquierdo */
       right: 0; /* Alinea el footer al lado derecho */
    }
    footer .btn-google {
      margin-top: 20px; /* Espacio entre el botón y el borde superior del footer */
      background-color: white; /* Color blanco para el botón */
      color: #5e1325; /* Color gris oscuro para el texto dentro del botón */
      border-color: white; /* Mismo color que el fondo para el borde */
    }
    /* Estilos para ajustar el logo en dispositivos móviles */
    @media (max-width: 576px) {
      .login-box img {
        max-width: 80%;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-box">
      <div class="text-center">
        <!-- Reducimos el tamaño del logo -->
        <img src="{{ asset('img/stands/LOGO.jpg') }}" class="mb-3" style="max-width: 100%;">
        <h2>Inicio de Sesión</h2>
      </div>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
          <label for="email" style="color: #5e1325;">Correo Electrónico</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo" value="{{ old('email') }}" required autocomplete="email" autofocus>
        </div>
        <div class="form-group">
          <label for="password" style="color: #5e1325;">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required autocomplete="current-password">
        </div>
        <h6 style="color: #5e1325;">¿Haz olvidado la contraseña?</h6>
        <button type="submit" class="btn btn-primary btn-block mt-3">Ingresar</button>
        <a href="{{ route('register') }}" class="btn btn-primary btn-block mt-2">Registrar</a>      
      </form>
    </div>
    <!-- Footer -->
    <footer class="text-center">
  <!-- Agregamos el icono de Google de Font Awesome -->

  <a href="{{ url('/login-google') }}">
    <!-- Imagen de Google con el enlace -->
    <img src="{{ asset('img/stands/LogoGoogle.png') }}" class="mb-3" style="max-width: 15%;">
  </a>
  <!-- Estilos actualizados para el botón de Google -->
  <button type="button" class="btn btn-primary btn-block btn-google" onclick="window.location.href='{{ url('/login-google') }}'">Iniciar sesión con Google</button>
</footer>
  </div>

  <!-- Agregamos el script de Font Awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>