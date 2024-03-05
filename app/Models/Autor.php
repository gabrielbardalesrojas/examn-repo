<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Autor extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table = 'autores';

    protected $fillable=[
        'nombre',
        'bibliografia',
        'edad',
    ];
    public function libros()
    {
        return $this->hasMany(Libro::class, 'autor_id');
    }
}
