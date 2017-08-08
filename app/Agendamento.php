<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $fillable = [
        'user_id', 'laboratorio_id', 'data','turno', 'status'
    ];
    protected $table = 'agendamentos';
}
