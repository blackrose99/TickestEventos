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
    <link href="{{ asset('css/user/user.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- HEADER -->
            <div class="container-fluid">
                <div class="row headerUp pt-2">
                    <div class="col-4 text-center">
                        <i class='bx bx-chevron-left'></i>
                    </div>
                    <div class="col-4 text-center d-flex justify-content-between align-items-center ">
                        <button type="button" class="btn btn-link text-white">PERFIL</button>
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

        {{-- resources/views/components/usuarios/homeUser.blade.php --}}
<div class="row">
    <div class="container-fluid contenidoCard">
        <div class="row">
            @foreach($stands as $index => $stand)
                <div class="col-6">
                    <div class="position-relative">
                        <a href="/stand">
                            <img class="logoEmpresa" src="{{$stand->logo}}" alt="{{ $stand->company_name }}Image">
                        </a>
                        @if(isset($stand->visited) && $stand->visited)
                            <div class="watermark">
                                <img src="{{ asset('img/stands/visitado.png') }}" alt="sello de Visitado">
                            </div>
                        @endif
                    </div>
                </div>
                @if(($index + 1) % 2 === 0)
                    </div><div class="row">
                @endif
            @endforeach
        </div>
    </div>
</div>

        
    </div>
</body>

</html>
