@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" integrity="sha512-5m1IeUDKtuFGvfgz32VVD0Jd/ySGX7xdLxhqemTmThxHdgqlgPdupWoSN8ThtUSLpAGBvA8DY2oO7jJCrGdxoA==" crossorigin="anonymous" />
@endsection

@section('buttons')
  <div class="py-4 mt-5 col-12">
    <a
        class='btn btn-primary mr-2 text-white text-bold'
        href='{{route('recetas.index')}}'
        >Mira tus recetas</a>
  </div>
@endsection

@section('content')
  <h2 class='text-center text-bold mb-5'>Edita tu receta</h2>
  <div class="row justify-content-center mt-5">
    <div class="col-md-8 bg-white p-4 rounded border-dark">
        <form enctype="multipart/form-data" method="post" action='{{route('recetas.update', [$receta->id])}}' novalidate>
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="titulo">Titulo:</label>
                <input
                    type="text"
                    id="titulo"
                    name='titulo'
                    class="form-control @error('titulo') is-invalid @enderror"
                    value='{{ $receta->titulo }}'
                    placeholder="Titulo de tu receta..."
                />
                @error('titulo')
                    <span class='invalid-feedback d-block ' role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for='categoria'>Selecciona una categoria</label>
                <select
                    class='form-control @error('categoria')
                        is-invalid
                    @enderror '
                    name="categoria"
                    id="categoria">
                    <option value="">--Categoria--</option>
                    @foreach ($categorias as $categoria)
                        <option value='{{$categoria->id}}' {{$receta->categoria_id == $categoria->id ? 'selected' : ''}} >{{$categoria->nombre}}</option>
                    @endforeach
                </select>
                @error('categoria')
                    <span class='invalid-feedback d-block' role='alert'>
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mt-4">
                <label for="preparacion">Preparacion</label>
                <input id='preparacion' name='preparacion' type="hidden" value={{ $receta->preparacion }}>
                <trix-editor
                    class='form-control @error('preparacion')
                        is-invalid
                    @enderror'
                    input='preparacion'></trix-editor>
                @error('preparacion')
                    <span class='invalid-feedback d-block' role='alert'>
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mt-4">
                <label for="ingredientes">Ingredientes</label>
                <input id='ingredientes' name='ingredientes' type="hidden" value={{ $receta->ingredientes }}>
                <trix-editor
                    class='form-control @error('ingredientes')
                        is-invalid
                    @enderror'
                    input='ingredientes'></trix-editor>
                @error('ingredientes')
                    <span class='invalid-feedback d-block' role='alert'>
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for='imagen'>Sube tu imagen</label>
                <input
                class='form-control @error('imagen')
                    is-invalid
                @enderror'
                id='imagen'
                name='imagen'
                type="file">
                @error('imagen')
                    <span class='invalid-feedback d-block' role='alert'>
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <div class="mt-4">
                    <p>Imagen Actual: </p>
                    <img
                        style='width: 300px;'
                        src="/storage/{{$receta->imagen}}"
                        alt="{{$receta->imagen}}">
                </div>
            </div>
            <input
                type="submit"
                class="btn btn-primary"
                value='Actualizar receta'
            />
        </form>
    </div>
  </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" defer></script>
@endsection

