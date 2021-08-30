<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pessoa extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'documento',
        'tipo_documento',
        'cep',
        'rua',
        'estado',
        'pais',
    ];
    use HasFactory;
}
