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
    <div class="col-xs-12 col-md-12 col-lg-12">


        <div class="card">
            <div class="card-header">
            {{ $post->title }}
            </div>
            <div class="card-body">
                <h5 class="card-title">Titulo: {{ $post->title }}</h5>
                <p class="card-text">Slug: {{ $post->slug }}</p>
                <p class="card-text">Contenido: {{ $post->content }}</p>
                <p class="card-text">Descripci&oacute;n: {{ $post->description }}</p>
                <p class="card-text">Categor&iacute;a:
                @foreach ( $categories as $c )
                    {{ $post->category_id == $c->id ? $c->title : ''  }}
                @endforeach
                </p>
                <p class="card-text">Posteado: {{ $post->posted == 'yes' ? 'Sí' : 'No' }} </p>
                <a href ="{{ route('post.index') }}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
</div>
@endsection
