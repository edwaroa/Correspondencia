<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipo_documento',
        'documento',
        'nombre',
        'apellido',
        'iniciales',
        'rol_id',
        'area',
        'imagen',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getFullNameAttribute()
    {
        if (is_null($this->apellido)) {
            return "{$this->nombre}";
        }

        return "{$this->nombre} {$this->apellido}";
    }

    public function rol(){
        return $this->belongsTo(Rol::class, 'rol_id');
    }
    public function dependencia(){
        return $this->belongsTo(Dependencia::class, 'area');
    }
    public function planillas(){
        return $this->belongsToMany(Planilla::class);
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function adminlte_image(){
        return "/storage/{$this->imagen}";
    }
    public function adminlte_desc()
    {
        return $this->fullname;
    }
    public function adminlte_profile_url()
    {
        return 'profile';
    }
}
