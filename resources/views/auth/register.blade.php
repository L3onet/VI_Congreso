@extends('layouts.plantilla')

@section('breadcrumb')
<nav class="pt-0 pb-0 ps-3 mt-3 mb-3 bg-secondary bg-gradient text-emphasis-dark" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item text-white" aria-current="page">Inicio</li>
        <li class="breadcrumb-item active text-white" aria-current="page">Registro</li>
    </ol>
</nav>
@endsection

@section('contenido')
<div class="row my-4">
    <div class="col-xs-12 col-md-6 col-lg-6">
        <img src="/img/registrar.jpg" class="img-fluid" alt="...">
    </div>
    <div class="col-xs-12 col-md-6 col-lg-6">
        <form action="/register" method="POST" novalidate>
            @csrf
            <div class="my-3">
                <h4 class="mb-2 text-center">Registra tu participaci&oacute;n en el Congreso</h4>
                <p class="mb-4">Vive la experiencia de la investigaci&oacute;n y de la ciencia</p>
            </div>
            <div class="mb-3">
                <input
                    id="username"
                    name="username"
                    class="form-control form-control-md
                    @error('username')
                        border border-danger
                    @enderror"
                    placeholder="Nombre de usuario"
                    value="{{ old('username') }}"
                    type="text">
                    @error('username')
                        <div class="text-danger text-center">
                            {{ $message }}
                        </div>
                    @enderror
            </div>
            <div class="mb-3">
                <input
                    id="email"
                    name="email"
                    class="form-control form-control-md
                    @error('email')
                        border border-danger
                    @enderror"
                    placeholder="Correo electronico"
                    value="{{ old('email') }}"
                    type="text">
                    @error('email')
                        <div class="text-danger text-center">
                            {{ $message }}
                        </div>
                    @enderror
            </div>
            <div class="mb-3">
                <input
                    id="password"
                    name="password"
                    class="form-control form-control-md"
                    placeholder="Password"
                    type="password">
            </div>
            <div class="mb-3">
                <input
                    id="password_confirmation"
                    name="password_confirmation"
                    class="form-control form-control-md"
                    placeholder="Repetir Password"
                    type="password">
            </div>
            <div class="mb-3 d-grid gap-2 col-12 mx-auto">
                <button
                    type="submit"
                    value="Crear cuenta"
                    class="btn btn-primary">Crear cuenta
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
