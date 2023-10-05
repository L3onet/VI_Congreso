@extends('layouts.plantilla')


@section('carrusel')
<div id="carouselExampleDark" class="carousel carousel-dark slide mt-3 mb-3">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7" aria-label="Slide 8"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="8" aria-label="Slide 9"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="9" aria-label="Slide 10"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="/img/cat1.png" class="rounded mx-auto d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Categoria 1. Agronom&iacute;a</h5>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="/img/cat2.png" class="rounded mx-auto d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Categoria 2. Biolog&iacute;a</h5>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="/img/cat3.png" class="rounded mx-auto d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Categoria 3. Pecuaria</h5>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="/img/cat4.png" class="rounded mx-auto d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Categoria 4. Administraci&oacute;n</h5>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="/img/cat5.png" class="rounded mx-auto d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Categoria 5. Gesti&oacute;n empresarial</h5>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="/img/cat6.png" class="rounded mx-auto d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Categoria 6. Contador p&uacute;blico</h5>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="/img/cat7.png" class="rounded mx-auto d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Categoria 7. TICs en la educaci&oacute;n</h5>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="/img/cat8.png" class="rounded mx-auto d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Categoria 8. Inform&aacute;tica</h5>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="/img/cat9.png" class="rounded mx-auto d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Categoria 9. Desarrollo sustentable</h5>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="/img/cat10.png" class="rounded mx-auto d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Categoria 10. Matem&aacute;ticas educativas</h5>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>
@endsection

@section('breadcrumb')
<nav class="pt-0 pb-0 ps-3 mt-3 mb-3 bg-secondary bg-gradient text-emphasis-dark" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active text-white" aria-current="page">Inicio</li>
    </ol>
</nav>
@endsection

@section('contenido')
<div class="col-xs-12 col-md-12 col-lg-8">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
            <h3 class="mb-0">Featured post</h3>
            <div class="mb-1 text-body-secondary">
                Nov 12
            </div>
            <p class="card-text mb-auto">
                This is a wider card with supporting text below as a natural lead-in to additional content.
            </p>
            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                Leer m&aacute;s
                <svg class="bi"><use xlink:href="#chevron-right"/></svg>
            </a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>
                    Placeholder
                </title>
                <rect width="100%" height="100%" fill="#55595c"/>
                <text x="30%" y="50%" fill="#eceeef" dy=".2em">
                    Miniatura
                </text>
            </svg>
        </div>
    </div>
</div>
@endsection

@section('publicidad')
<div class="col-xs-12 col-md-12 col-lg-4">
    <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-body-tertiary rounded">
            <img class="mx-auto d-block img-fluid" src="/img/logo_congreso.png" alt="" width="320" height="88" />
            <p class="text-center">13 al 14 de noviembre, 2023<br />Instituto Tecnol&oacute;gico de Cd. Altamirano, TecNM, Guerrero.</p>
            <p class="text-center"><strong><a href="/congreso">Consulta la convocatoria</a></strong></p>
            <p class="text-center"><strong><a href="/ponencia">Registra tu ponencia</a></strong></p>
            <p class="text-center">Cierre de recepción de resúmenes de propuestas de ponencias y carteles:<br /><del>21 de octubre de 2023</del><br /><strong>31 de octubre de 2023</strong></p>
            <p class="text-center">Notificación de aceptación de propuestas:<br /><strong>6 de noviembre de 2023</strong></p>
        </div>
        <div>
            <h4 class="fst-italic">Publicaciones recientes</h4>
            <ul class="list-unstyled">
                <li>
                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                        <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                        <div class="col-lg-8">
                            <h6 class="mb-0">Example blog post title</h6>
                            <small class="text-body-secondary">January 15, 2023</small>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
