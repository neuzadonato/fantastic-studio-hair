<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salao extends Model
{
    use HasFactory;

    // Indica o nome da tabela do banco de dados
    protected $table = "saloes";

    // Indica os campos que podem ser preenchidos pelo usuário
    protected $fillable = [
        'Nome',
        'Razao_Social',
        'Email',
        'Endereco',
        'Telefone',
        'Salaografia',
        'Foto',
        'Senha',
        'Confirmar_Senha',
        'Usuario_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'Usuario_id');
    }
}
