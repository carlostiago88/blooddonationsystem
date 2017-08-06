<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doador extends Model
{
    protected $fillable = [
        'nome', 'telefone', 'email', 'endereco','bairro','cidade','estado','status',
    ];
    protected $table = 'doadores';
}
