<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Resena extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table = 'resenas';
   
    protected $fillable=[
        'libro_id',
        'usuario_id',
        'comentario',
        
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function libro()
    {
        return $this->belongsTo(Libro::class, 'libro_id');
    }
}
