<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $fillable = [
        'pessoa_id', 'laboratorio_id', 'data_hora', 'status'
    ];
    protected $table = 'agendamentos';
}
