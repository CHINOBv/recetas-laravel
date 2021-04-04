<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RecetasController extends Controller
{
    public function __invoke(){

        $recetasObj = [
            'Papa' => 'papas',
            'Pizza' => 'pizzas'
        ];
        $recetas = ['Papa', 'Pizza'];
        $categs = ['Comida Mexicana', 'Bebidas'];

        return view('recetas/index', compact('recetas', 'categs',));
    }
}
