<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'nome', 'telefone', 'email', 'endereco','bairro','cidade','estado','status',
    ];
    protected $table = 'hospitais';

}