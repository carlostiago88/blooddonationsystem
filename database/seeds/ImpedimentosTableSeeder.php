<?php

use Illuminate\Database\Seeder;

class ImpedimentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(\App\Impedimento::class)->create([
        DB::table('impedimentos')->insert([
            'nome' => 'Estar em boas condições de Saúde',
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Ter dormido pelo menos 6 horas nas últimas 24 horas',
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Evitar alimentação gordurosa nas 3 horas que antecedem a doação',
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Não praticar exercícios físicos e ingerir bebidas alcoólicas nas últimas 12 horas antecedentes',
        ]);
    }
}
