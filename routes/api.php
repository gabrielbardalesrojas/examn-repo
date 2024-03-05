<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\ResenaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ReservaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::get('Usuarios',[UsuarioController::class, 'index']);
route::get('Usuarios/{id}',[UsuarioController::class, 'show']);
route::post('Usuarios',[UsuarioController::class, 'store']);
route::patch('Usuarios/{id}',[UsuarioController::class, 'update']);
route::delete('Usuarios/{id}',[UsuarioController::class, 'destroy']);

route::get('UResenas',[ResenaController::class, 'index']);
route::get('Resenas/{id}',[ResenaController::class, 'show']);
route::post('Resenas',[ResenaController::class, 'store']);
route::patch('Resenas/{id}',[ResenaController::class, 'update']);
route::delete('Resenas/{id}',[ResenaController::class, 'destroy']);

route::get('Libros',[LibroController::class, 'index']);
route::get('Libros/{id}',[LibroController::class, 'show']);
route::post('Libros',[LibroController::class, 'store']);
route::patch('Libros/{id}',[LibroCntroller::class, 'update']);
route::delete('Libros/{id}',[LibroController::class, 'destroy']);

route::get('Categorias',[CategoriaController::class, 'index']);
route::get('Categorias/{id}',[CategoriaController::class, 'show']);
route::post('Categorias',[CategoriaController::class, 'store']);
route::patch('Categorias/{id}',[CategoriaController::class, 'update']);
route::delete('Categorias/{id}',[CategoriaController::class, 'destroy']);

route::get('Autores',[AutorController::class, 'index']);
route::get('Autores/{id}',[AutorController::class, 'show']);
route::post('Autores',[AutorController::class, 'store']);
route::patch('Autores/{id}',[AutorController::class, 'update']);
route::delete('Autores/{id}',[AutorController::class, 'destroy']);

route::get('Reservas',[ReservaController::class, 'index']);
route::get('Reservas/{id}',[ReservaController::class, 'show']);
route::post('Reservas',[ReservaController::class, 'store']);
route::patch('Reservas/{id}',[ReservaController::class, 'update']);
route::delete('Reservas/{id}',[ReservaController::class, 'destroy']);