<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Grupo extends Authenticatable
{
    use HasFactory,Notifiable;
    public $timestamps = false;
    protected $table = 'grupo';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];
}
