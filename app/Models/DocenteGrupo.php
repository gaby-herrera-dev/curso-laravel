<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class DocenteGrupo extends Authenticatable
{
    use HasFactory, Notifiable;
    public $timestamps = false;
    protected $table = 'docente_grupo';
    protected $fillable = [
        'docente_id',
        'grupo_id',
    ];

    public function docente()
    {
        return $this->belongsTo(Docente::class);
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }
}
