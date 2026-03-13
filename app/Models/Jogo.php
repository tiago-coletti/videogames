<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'preco',
        'data_lancamento',
        'plataforma_id',
        'desenvolvedora_id'
    ];
}