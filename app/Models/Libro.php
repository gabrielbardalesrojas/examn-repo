<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Libro extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table = 'libros';
     
    protected $fillable=[
        'titulo',
        'autor_id',
        'categoria_id',
        
    ];
    public function autores()
    {
        return $this->belongsTo(Autor::class, 'autor_id');
    }

    public function resenas()
    {
        return $this->hasMany(Resena::class, 'libro_id');
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class ,'categoria_id');
    }
    public function reservas(){
 return $this->hasMany(Reserva::class ,'libro_id');
    }
}
