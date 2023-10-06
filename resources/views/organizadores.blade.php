@extends('layouts.plantilla')

@section('breadcrumb')
<nav class="pt-0 pb-0 ps-3 mt-3 mb-3 bg-secondary bg-gradient text-emphasis-dark" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item text-white" aria-current="page">Inicio</li>
        <li class="breadcrumb-item active text-white" aria-current="page">Acerca de</li>
    </ol>
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
