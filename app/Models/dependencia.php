<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dependencia extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',
        'tipo_dependencia',
        'usuario_mensaje',
        'estado',
    ];

    public function usuarios(){
        return $this->hasMany(User::class);
    }
}
