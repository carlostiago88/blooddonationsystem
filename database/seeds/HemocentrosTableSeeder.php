<?php

use Illuminate\Database\Seeder;

class HemocentrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(\App\Hemocentro::class)->create([
        DB::table('hemocentros')->insert([
            'nome' => 'HEMOPA - Fundação Centro de Hemoterapia e Hematologia do Pará',
            'telefone' => '(91) 3110-6500',
            'email' => 'contato@hemopa.pa.gov.br',
            'endereco' => 'Tv. Padre Eutíquio, 2109',
            'bairro' => 'Batista Campos',
            'cidade' => 'Belém',
            'estado' => 'Pará',
            'status' => '1',
        ]);
    }
}