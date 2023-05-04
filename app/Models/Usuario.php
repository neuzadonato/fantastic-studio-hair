<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = "usuarios";

    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'endereco',
        'salao',
        'foto',
        'senha'
    ];

    public function getAuthPassword()
    {
        return $this->senha;
    }
}
