<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Reserva extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table = 'reservas';
    protected $fillable=[
        'libro_id',
        'usuario_id',
        
    ];

   
    public function usuarios()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
    public function libros()
    {
        return $this->belongsTo(Libro::class, 'libro_id');
    }
    
}
