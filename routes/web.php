<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetaController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recetas', [Recetacontroller::class, 'index'])->name('recetas.index');

Route::get('/recetas/create', [Recetacontroller::class, 'create'])->name('recetas.create');

Route::post('/recetas', [Recetacontroller::class, 'store'])->name('recetas.store');

Route::get("/recetas/{receta}", [Recetacontroller::class, 'show'])->name('recetas.show');

Route::get('recetas/{receta}/edit', [Recetacontroller::class, 'edit'])->name('recetas.edit');

Route::put('/recetas/{receta}', [Recetacontroller::class, 'update'])->name('recetas.update');

Auth::routes();

