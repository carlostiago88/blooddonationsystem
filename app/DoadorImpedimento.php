<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoadorImpedimento extends Model
{
    protected $table = 'doador_impedimento';
    public $timestamps = true;

    public function updateOrCreate($key, $id){
        /*
         * Não utilizado
         */
        /*$doador_impedimento = App\DoadorImpedimento::updateOrCreate([
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
            'user_id' => $id,
            'impedimento_id' => $key,
        ], [
            'user_id' => $id,
            'impedimento_id' => $key,
        ]);*/
    }
}
