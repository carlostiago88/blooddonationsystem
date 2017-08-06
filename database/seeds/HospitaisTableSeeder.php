<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades;

class HospitaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(\App\Hospital::class)->create([
        DB::table('hospitais')->insert([
            'nome' => 'Hospital Beneficente Portuguesa',
            'telefone' => '(91) 3215-4444',
            'email' => 'contato@beneficenteportuguesa.com.br',
            'endereco' => 'Av. Generalissimo Deodoro, 868',
            'bairro' => 'Umarizal',
            'cidade' => 'Belém',
            'estado' => 'Pará',
            'status' => '1'
        ]);
        DB::table('hospitais')->insert([
            'nome' => 'Hospital Guadalupe',
            'telefone' => '(91) 4005-9877',
            'email' => 'atendimento@hospitalguadalupe.com.br',
            'endereco' => 'Rua Arciprestes Manoel Teodoro, 734',
            'bairro' => 'Batista Campos',
            'cidade' => 'Belém',
            'estado' => 'Pará',
            'status' => '1'
        ]);
    }
}
