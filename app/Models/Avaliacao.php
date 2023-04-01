<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;

    // Indica o nome da tabela do banco de dados
    protected $table = "avaliacoes";

    // Indica os campos que podem ser preenchidos pelo usuário
    protected $fillable = [
        'nome',
        'email',
        'nota',
        'mensagem'
    ];
}
