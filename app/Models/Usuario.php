<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    public $timestamps = false;
    protected $table = 'usuarios';

    protected $fillable = [
        'nombre', 'usuario', 'password', 'perfil', 'foto', 'estado', 'ultimo_login', 'fecha',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
