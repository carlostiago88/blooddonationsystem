<?php

use Illuminate\Database\Seeder;

class LaboratoriosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(\App\Laboratorio::class)->create([
        DB::table('laboratorios')->insert([
            'nome' => 'Laboratório Sabin',
            'telefone' => '(91) 3249-9090',
            'email' => 'contato@sabin.com.br.',
            'endereco' => 'Av. Alm. Barroso, 1842',
            'bairro' => 'Marco',
            'cidade' => 'Belém',
            'estado' => 'Pará',
            'status' => '1',
        ]);
        DB::table('laboratorios')->insert([
            'nome' => 'Laboratório Beneficente de Belém',
            'telefone' => '(91) 3230-0930',
            'email' => 'contato@lbb.com.br.',
            'endereco' => 'R. dos Mundurucus, 1818',
            'bairro' => 'Batista Campos',
            'cidade' => 'Belém',
            'estado' => 'Pará',
            'status' => '1',
        ]);
    }
}

