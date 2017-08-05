<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    //

    protected $table = 'hospitais';
}

php artisan make:migration create_users_table --create=users