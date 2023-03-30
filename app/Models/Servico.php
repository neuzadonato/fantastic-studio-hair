<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;
    protected $table = "servicos";
    protected $fillable = [
        'titulo',
        'valor',
        'descricao',
        'barba',
        'cabelo',
        'spa',
        'manicure/pedicure'
    ];
}


