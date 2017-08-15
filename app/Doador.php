<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doador extends Model
{
    protected $fillable = [
        'user_id', 'endereco', 'nascimento', 'ja_e_doador','sexo','contato','status',
    ];
    protected $table = 'doadores';
    public $timestamps = true;
}