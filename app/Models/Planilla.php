<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planilla extends Model
{
    use HasFactory;

    public function recibe(){
        return $this->belongsTo(User::class);
    }

    public function entrega(){
        return $this->belongsTo(User::class);
    }
}
