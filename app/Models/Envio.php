<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    use HasFactory;

    protected $fillable = [
        'oficio_enviado',
        'radicado_asociado',
        'detalle',
        'usuario_radica'
    ];
    
}
