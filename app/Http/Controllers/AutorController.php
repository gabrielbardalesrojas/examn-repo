<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
   //
   public function store(Request $request  ){
    $params=$request->all();
    $Autor=Autor::create([
        'nombre'=>$params['nombre'],
        'bibliografia'=>$params['bibliografia'],
        'edad'=>$params['edad']
        
    ]);
    return $Autor; 
}

public function index(request $request){
$params=$request->all();
$size=isset($params['size']) ? $params['size'] :5;
$Autores=Autor::with('libros')->where(
'edad','>=',$params['edad'])
->limit($size)->get();
return $Autores;

}
public function show($id){
    $Autor=Autor::find($id);

    return $Autor;
}

public function update($id, request $request){
    $params=$request->all();
   Autor::find($id)->update([
        'nombre'=>$params['nombre'],
        'bibliografia'=>$params['bibliografia'],
        'edad'=>$params['edad'],
    ]);
    return 'registro actualizado';
}

public function destroy($id){
 Autor::find($id)->delete();
 return 'registro eliminado';
}
}
