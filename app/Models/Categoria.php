<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Categoria extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table = 'categorias';

    protected $fillable=[
        'nombre',
        'descripcion',
        
    ];
    public function libros()
    {
        return $this->hasMany(Libro::class, 'categoria_id');
    }
}
