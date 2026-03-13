<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desenvolvedora extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'pais',
        'ano_fundacao'
    ];
}