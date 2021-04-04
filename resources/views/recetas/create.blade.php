@extends('layouts.app')

@section('buttons')
  <div class="py-4 mt-5 col-12">
    <a
        class='btn btn-primary mr-2 text-white text-bold'
        href='{{route('recetas.index')}}'
        >Mira tus recetas</a>
  </div>
@endsection

@section('content')
  <h2 class='text-center text-bold mb-5'>Crea tus recetas</h2>
  <div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <form method="post" action='{{route('recetas.store')}}' novalidate>
            @csrf
            <div class="form-group">
                <label for="titulo">Titulo:</label>
                <input
                    type="text"
                    id="titulo"
                    name='titulo'
                    class="form-control @error('titulo') is-invalid @enderror"
                    value='{{ old('titulo') }}'
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
                    @foreach ($categorias as $id => $categoria)
                        <option value='{{$id}}' {{old('categoria') == $id ? 'selected' : ''}} >{{$categoria}}</option>
                    @endforeach
                </select>
                @error('categoria')
                    <span class='invalid-feedback d-block' role='alert'>
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input
                    type="submit"
                    class="btn btn-primary"
                    value='Agregar receta'
                />
            </div>
        </form>
    </div>
  </div>
@endsection

