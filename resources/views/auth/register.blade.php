<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro Usuarios</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ICONOS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('css/forms/registroUser.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- HEADER -->
            <div class="container-fluid ">
                <div class="row headerUp pt-2">
                    <div class="col-4 text-center">
                        <a href="/home"><i class='bx bx-chevron-left'></i></a>
                    </div>
                    <div class="col-4 text-center">
                        <p>REGISTRO USUARIOS</p>
                    </div>
                    <div class="col-4 text-center">
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
            <div class="container-fluid">
                <div class="row contenidoForm">
                    <img src="{{ asset('img/stands/logoUser.png') }}" class="logoUser" >
                    <!-- Campos de Registro -->
                    <form method="POST" action="{{ route('register') }}" class="registration-form">
                        @csrf
                        <input type="text" placeholder="Nombre y Apellido" name="name" required>
                        <input type="number" placeholder="Documento" name="document" required>
                        <input type="email" placeholder="Email" name="email" required>
                        <input type="number" placeholder="Celular" name="phone_number" required>
                        <input type="text" placeholder="Dirección" name="address" required>
                        <input type="date" placeholder="Fecha de Nacimiento (DD/MM/AAAA)" name="birthdate" required>
                        <select name="gender" required>
                            <option disabled selected>Género</option>
                            <option value="male">Masculino</option>
                            <option value="female">Femenino</option>
                            <option value="other">Otro</option>
                        </select>
                        <input type="password" placeholder="Contraseña" name="password" required>
                        <input type="password" placeholder="Confirmar Contraseña" name="password_confirmation" required>
                        <!-- Botones -->
                        <button type="submit" class="register-button">Registrarse</button>
                        <a href="{{ route('login') }}" class="login-button">Ingresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
