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
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td scope="row">Pizza</td>
                <td>Comida Rapida</td>
                <td>
                    actions
                </td>
            </tr>
        </tbody>
    </table>
  </div>
@endsection
