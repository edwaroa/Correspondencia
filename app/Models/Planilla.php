<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planilla extends Model
{
    use HasFactory;

    public function dependencia(){
        return $this->belongsTo(Dependencia::class, 'id_dependencia');
    }

    public function tipoplanilla(){
        return $this->belongsTo(TipoPlanilla::class, 'tipo_planilla');
    }

    public function tipoenvio(){
        return $this->belongsTo(TipoEnvio::class, 'tipo_envio');
    }

    public function tipodestino(){
        return $this->belongsTo(TipoDestino::class, 'tipo_destino');
    }

    public function entrega(){
        return $this->belongsTo(User::class, 'usuario_entrega');
    }

    public function recibe(){
        return $this->belongsTo(User::class, 'usuario_recibe');
    }
}
