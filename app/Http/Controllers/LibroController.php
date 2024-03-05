<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    //
    public function store(Request $request)
    {
       $params = $request->all();
       $libro = Libro::create([
          'titulo' => $params['titulo'],
          'autor_id' => $params['autor_id'],
          'categoria_id' => $params['categoria_id'],
       ]);
       return $libro;
    }
 
    public function index(Request $request)
    {
       $params = $request->all();
       $size = isset($params['size']) ? $params['size'] : 5;
       $libros = Libro::with('autor', 'categoria')->limit($size)->get();
       return $libros;
    }
 
    public function show($id)
    {
       $libro = Libro::find($id);
       return $libro;
    }
 
    public function update($id, Request $request)
    {
       $params = $request->all();
       Libro::find($id)->update([
          'titulo' => $params['titulo'],
          'autor_id' => $params['autor_id'],
          'categoria_id' => $params['categoria_id'],
       ]);
       return 'registro actualizado';
    }
 
    public function destroy($id)
    {
       Libro::find($id)->delete();
       return 'registro eliminado';
    }
}
