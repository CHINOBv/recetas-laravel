@extends('layouts.app')

@section('buttons')
  <div class="py-4 mt-5 col-12">
    <a
        class='btn btn-primary mr-2 text-white text-bold'
        href='{{route('recetas.create')}}'
    >Crear Receta</a>
  </div>
@endsection

@section('content')
  <h2 class='text-center text-bold mb-5'>Administra tus recetas</h2>
  <div class="col-md-10 mx-auto p-3 bg-white">
    <table class="table table-striped ">
        <thead class="bg-primary text-light">
            <tr>
                <th scope='col'>Titulo</th>
                <th scope='col'>Categorias</th>
                <th scope='col'>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($recetas as $receta)
            <tr>
                <td scope="row">{{$receta->titulo}}</td>
                <td>{{$receta->categoria->nombre}}</td>
                <td>
                    <a href="" class='btn btn-outline-danger mr-1'>Eliminar</a>
                    <a href="{{ route('recetas.edit', ['receta' => $receta->id]) }}" class='btn btn-outline-info mr-1'>Editar</a>
                    <a href="{{ route('recetas.show', ['receta' => $receta->id]) }}" class='btn btn-success mr-1'>Mostrar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
@endsection
