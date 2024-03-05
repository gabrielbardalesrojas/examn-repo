<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Usuario extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table = 'usuarios';
    protected $fillable=[
        'nombre',
        'correo',
        'contrasenia',
    ];

   
    public function resenas()
    {
        return $this->hasMany(Resena::class, 'usuario_id');
    }
    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'usuario_id');
    }
    
}
