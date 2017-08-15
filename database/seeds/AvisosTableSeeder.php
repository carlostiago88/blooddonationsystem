<?php

use Illuminate\Database\Seeder;

class AvisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(\App\Impedimento::class)->create([
        DB::table('avisos')->insert([
            'nome' => 'Estar em boas condições de Saúde',
        ]);
        DB::table('avisos')->insert([
            'nome' => 'Ter dormido pelo menos 6 horas nas últimas 24 horas',
        ]);
        DB::table('avisos')->insert([
            'nome' => 'Evitar alimentação gordurosa nas 3 horas que antecedem a doação',
        ]);
        DB::table('avisos')->insert([
            'nome' => 'Não praticar exercícios físicos e ingerir bebidas alcoólicas nas últimas 12 horas antecedentes',
        ]);
        DB::table('avisos')->insert([
            'nome' => 'Não praticar exercícios físicos e ingerir bebidas alcoólicas nas últimas 12 horas antecedentes',
        ]);
        DB::table('avisos')->insert([
            'nome' => 'Homens - 60 dias (máximo de 04 doações nos últimos 12 meses)',
        ]);
        DB::table('avisos')->insert([
            'nome' => 'Mulheres - 90 dias (máximo de 03 doações nos últimos 12 meses)',
        ]);
    }
}
