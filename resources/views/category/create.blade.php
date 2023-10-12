@extends('layouts.plantilla')

@section('breadcrumb')
<nav class="pt-0 pb-0 ps-3 mt-3 mb-3 bg-secondary bg-gradient text-emphasis-dark" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item text-white" aria-current="page">Inicio</li>
        <li class="breadcrumb-item active text-white" aria-current="page">Registro</li>
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
                <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown" aria-expanded="false">Categor&iacute;as</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href=" {{ route('category.create' ) }} ">Agregar</a></li>
                    <li><a class="dropdown-item" href=" {{ route('category.index' ) }}">Consultar</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown" aria-expanded="false">Publicaciones</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href=" {{ route('post.create' ) }} ">Agregar</a></li>
                    <li><a class="dropdown-item" href=" {{ route('post.index' ) }}">Consultar</a></li>
                </ul>
            </li>
        </div>
    </div>
</nav>
@endsection

@section('contenido')
<div class="row my-4">
    <div class="col-xs-12 col-md-12 col-lg-12">
        <form action="{{ route('category.store') }}" method="POST" novalidate>
            @csrf
            <div class="my-3">
                <h4 class="mb-2 text-center">Registra una categor&iacute;a para las publicaciones de Inicio</h4>
            </div>
            <div class="mb-3">
                <label class="form-label" for="">T&iacute;tulo</label>
                <input
                    id="title"
                    name="title"
                    class="form-control form-control-md
                    @error('title')
                        border border-danger
                    @enderror"
                    placeholder="T&iacute;tulo"
                    value="{{ old('title') }}"
                    type="text">
                    @error('title')
                        <div class="text-danger text-center">
                            {{ $message }}
                        </div>
                    @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Slug</label>
                <input
                    id="slug"
                    name="slug"
                    class="form-control form-control-md
                    @error('slug')
                        border border-danger
                    @enderror"
                    placeholder="Slug"
                    value="{{ old('slug') }}"
                    type="text">
                    @error('slug')
                        <div class="text-danger text-center">
                            {{ $message }}
                        </div>
                    @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="">T&oacute;picos</label>
                <textarea
                    id="topics"
                    name="topics"
                    class="form-control form-control-md
                    @error('topics')
                        border border-danger
                    @enderror"
                    rows="3">{{ old('topics') }}
                </textarea>
                @error('topics')
                    <div class="text-danger text-center">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 d-grid gap-2 col-12 mx-auto">
                <button
                    type="submit"
                    value="Crear categor&iacute;a"
                    class="btn btn-primary">Publicar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
