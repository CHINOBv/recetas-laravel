@extends('layouts.app')
@section('content')
    <article class='contenido-receta'>
        <h1 class='text-center mb-4'>{{$receta->titulo}}</h1>
        <div class='imagen-receta'>
            <img src="/storage/{{$receta->imagen}}" alt="{{$receta->imagen}}"
            class="w-100"
            >
        </div>
        <div class="receta-meta mt-3">
            <p>
                <span class="font-weight-bold text-primary">
                    Escrito en:
                </span>
                {{$receta->categoria->nombre}}
            </p>
            <p>
                <span class="font-weight-bold text-primary">
                    Fecha:
                </span>
                @php
                    $fecha = $receta->created_at;
                @endphp
                <fecha-receta fecha="{{$fecha}}"></fecha-receta>
            </p>
            <p>
                <span class="font-weight-bold text-primary">
                    Autor:
                </span>
                {{$receta->author->name}}
            </p>
            <div class="ingredientes">
                <h2 class='my-3 text-primary'>Ingredientes:</h2>
                <p>
                    {!!$receta->ingredientes!!}
                </p>
            </div>
            <div class="preparacion">
                <h2 class='my-3 text-primary'>Preparacion: </h2>
                <p>
                    {!!$receta->preparacion!!}
                </p>
            </div>
        </div>
    </article>
@endsection
