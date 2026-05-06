<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'email',
        'password',
        'telefone'
    ];

    public function cartao() {
    return $this->hasOne(CartaoFidelidade::class);
    }
}

