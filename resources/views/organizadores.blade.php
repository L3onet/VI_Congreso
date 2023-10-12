@extends('layouts.plantilla')

@section('breadcrumb')
<nav class="pt-0 pb-0 ps-3 mt-3 mb-3 bg-secondary bg-gradient text-emphasis-dark" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item text-white" aria-current="page">Inicio</li>
        <li class="breadcrumb-item active text-white" aria-current="page">Acerca de</li>
    </ol>
</nav>
@endsection

@section('menu')
<nav class="navbar navbar-expand-lg bg-primary bg-gradient rounded-pill" aria-label="Eighth navbar example">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="/">Inicio</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown" aria-expanded="false">VI Congreso</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/convocatoria">Convocatoria</a></li>
                    <li><a class="dropdown-item" href="/categorias">Categorias</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/organizadores">Organizadores</a>
            </li>
            </ul>
            <form role="search">
                <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
            </form>
        </div>
    </div>
</nav>
@endsection

@section('contenido')
<div class="col-xs-12 col-md-12 col-lg-12">
    <h3 class="text-center my-3">Comit&eacute; organizador </h3>
    <div class="row row-cols-1 row-cols-md-2 g-4 my-4">
        <div class="col">
            <div class="card">
                <img src="/img/directivos/dir.jpg" class="card-img-top rounded-pill" alt="Director">
                <div class="card-body">
                    <h5 class="card-title">M.A. Cesar del Angel Rodriguez Torres - Director</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card">
                <img src="/img/directivos/ssa.jpg" class="card-img-top rounded-pill" alt="Subdirectora de Servicios Administrativos">
                <div class="card-body">
                    <h5 class="card-title">L.I. Aracely Salgado Mendoza - Subdirectora de Servicios Administrativos</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/img/directivos/sa.jpg" class="card-img-top rounded-pill" alt="Subdirector Acad&eacute;mico">
                <div class="card-body">
                    <h5 class="card-title">I.S.C. Carlos Alberto Bernal Beltr&aacute;n - Subdirector Acad&eacute;mico</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/img/directivos/sp.jpg" class="card-img-top rounded-pill" alt="Subdirector de Planeaci&oacute;n">
                <div class="card-body">
                    <h5 class="card-title">L.I. Sergio Vivas Hern&aacute;ndez - Subdirector de Planeaci&oacute;n</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
