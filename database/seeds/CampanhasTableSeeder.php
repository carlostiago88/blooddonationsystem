<?php

use Illuminate\Database\Seeder;

class CampanhasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campanhas')->insert([
            'nome' => 'Mês de Doação de Sangue! Ajude quem precisa',
            'data_hora' => '15/11/2017 08h00',
            'local' => 'Tv. Padre Eutíquio, 2109, Batista Campos, Belém',
            'status' => '1',
        ]);
    }
}