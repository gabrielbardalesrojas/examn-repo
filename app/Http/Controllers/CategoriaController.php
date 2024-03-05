<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function store(Request $request)
   {
      $params = $request->all();
      $categoria = Categoria::create([
         'nombre' => $params['nombre'],
         'descripcion' => $params['descripcion'],
      ]);
      return $categoria;
   }

   public function index(Request $request)
   {
      $categorias = Categoria::all();
      return $categorias;
   }

   public function show($id)
   {
      $categoria = Categoria::find($id);
      return $categoria;
   }

   public function update($id, Request $request)
   {
      $params = $request->all();
      Categoria::find($id)->update([
         'nombre' => $params['nombre'],
         'descripcion' => $params['descripcion'],
      ]);
      return 'registro actualizado';
   }

   public function destroy($id)
   {
      Categoria::find($id)->delete();
      return 'registro eliminado';
   }
}
