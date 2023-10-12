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
        <form action="{{ route('post.store') }}" method="POST" novalidate>
            @csrf
            <div class="my-3">
                <h4 class="mb-2 text-center">Registra una publicaci&oacute;n para la p&aacute;gina de Inicio</h4>
                <p class="mb-4">Vive la experiencia de la investigaci&oacute;n y de la ciencia</p>
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
                <label class="form-label" for="">Contenido</label>
                <textarea
                    id="content"
                    name="content"
                    class="form-control form-control-md
                    @error('content')
                        border border-danger
                    @enderror"
                    rows="3">{{ old('content') }}
                </textarea>
                @error('content')
                    <div class="text-danger text-center">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Descripci&oacute;n</label>
                <textarea
                    id="description"
                    name="description"
                    class="form-control form-control-md
                    @error('description')
                        border border-danger
                    @enderror"
                    rows="3">{{ old('description') }}
                </textarea>
                @error('description')
                    <div class="text-danger text-center">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Categor&iacute;a</label>
                <select class="form-select
                    @error('category_id')
                        border border-danger
                    @enderror" aria-label="Default select example" name="category_id">
                    <option selected>Selecciona la categor&iacute;a</option>
                    @foreach ( $categories as $c )
                        <option value="{{ $c->id }}">{{ $c->title }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="text-danger text-center">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Posteado</label>
                <select class="form-select
                    @error('posted')
                        border border-danger
                    @enderror" aria-label="Default select example" name="posted">
                    <option value="yes">Sí</option>
                    <option selected value="not">No</option>
                </select>
                @error('posted')
                    <div class="text-danger text-center">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 d-grid gap-2 col-12 mx-auto">
                <button
                    type="submit"
                    value="Crear cuenta"
                    class="btn btn-primary">Publicar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
