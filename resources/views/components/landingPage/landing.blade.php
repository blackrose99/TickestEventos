<!-- resources/views/components/landing.blade.php -->
@extends('layouts.app')

@section('content')
   
<!-- Carousel wrapper -->
<div id="carouselBasicExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselBasicExample" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselBasicExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselBasicExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- Inner -->
    <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
            <img src="{{ asset('img/carrusel/stands_de_tecnologia.jpg') }}" class="d-block w-100"
                alt="Sunset Over the City" />
            <div class="carousel-caption text-center" style="position: absolute; top: 50%; transform: translateY(-50%);">
                <h1 style="font-size: 3em;">Stands</h1>
                <p style="font-size: 1.5em;">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>

        <!-- Agrega los otros elementos del carrusel aquí -->

        <!-- Single item -->
        <div class="carousel-item">
            <img src="{{ asset('img/carrusel/img01.png') }}" class="d-block w-100"
                alt="Canyon at Nigh" />
            <div class="carousel-caption text-center" style="position: absolute; top: 50%; transform: translateY(-50%);">
                <h2 style="font-size: 3em;">Stands</h2>
                <p style="font-size: 1.5em;">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="{{ asset('img/carrusel/img02.jpg') }}" class="d-block w-100"
                alt="Cliff Above a Stormy Sea" />
            <div class="carousel-caption text-center" style="position: absolute; top: 50%; transform: translateY(-50%);">
                <h2 style="font-size: 3em;">Stands</h2>
                <p style="font-size: 1.5em;">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
    </div>
    <!-- Inner -->

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBasicExample"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselBasicExample"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Carousel wrapper -->


    <div class="container mt-5">
        <h2 class="text-center mb-4">Aliados</h2>
        <div class="row custom-row">
            {{-- Fila 1 --}}
            <div class="col-6 mb-4 custom-col">
                <img src="{{ asset('img/afiliados/Senalogo.png') }}" class="custom-card-img" alt="Aliado 1">
            </div>
            <div class="col-6 mb-4 custom-col">
                <img src="{{ asset('img/afiliados/Logo_de_las_Unidades_Tecnológicas_de_Santander.svg.png') }}" class="custom-card-img" alt="Aliado 2">
            </div>
    
            {{-- Fila 2 --}}
            <div class="col-6 mb-4 custom-col">
                <img src="{{ asset('img/afiliados/LOGO_PLAN_DE_DESARROLLO_COLOMBIA_POTENCIA_DE_LA_VIDA_2022-2026.png') }}" class="custom-card-img" alt="Aliado 3">
            </div>
            <div class="col-6 mb-4 custom-col">
                <img src="{{ asset('img/afiliados/Logo_Ministerio_de_Comercio_Industria_y_Turismo_2022-2026.png') }}" class="custom-card-img" alt="Aliado 4">
            </div>
    
            {{-- Fila 3 --}}
            <div class="col-6 mb-4 custom-col">
                <img src="{{ asset('img/afiliados/Empodera.png') }}" class="custom-card-img" alt="Aliado 5">
            </div>
            <div class="col-6 mb-4 custom-col">
                <img src="{{ asset('img/afiliados/logo version color 1.png') }}" class="custom-card-img" alt="Aliado 6">
            </div>
        </div>
    </div>
    
    

@endsection



