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
            'nome' => 'Resfriado: aguardar 7 dias após desaparecimento dos sintomas',
            'tipo_impedimento' => 'temporario'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Gravidez',
            'tipo_impedimento' => 'temporario'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => '90 dias após parto normal e 180 dias após cesariana',
            'tipo_impedimento' => 'temporario'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Amamentação (se o parto ocorreu há menos de 12 meses)',
            'tipo_impedimento' => 'temporario'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Ingestão de bebida alcoólica nas 12 horas que antecedem a doação',
            'tipo_impedimento' => 'temporario'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Tatuagem / maquiagem definitiva nos últimos 12 meses',
            'tipo_impedimento' => 'temporario'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Situações nas quais há maior risco de adquirir doenças sexualmente transmissíveis: aguardar 12 meses',
            'tipo_impedimento' => 'temporario'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Qualquer procedimento endoscópico (endoscopia digestiva alta, colonoscopia, rinoscopia etc): aguardar 6 meses',
            'tipo_impedimento' => 'temporario'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Extração dentária (verificar uso de medicação) ou tratamento de canal (verificar medicação): por 7 dias',
            'tipo_impedimento' => 'temporario'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Cirurgia odontológica com anestesia geral: por 4 semanas',
            'tipo_impedimento' => 'temporario'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Acupuntura: se realizada com material descartável: 24 horas; se realizada com laser ou sementes: apto; se realizada com material sem condições de avaliação: aguardar 12 meses',
            'tipo_impedimento' => 'temporario'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Vacina contra gripe: por 48 horas',
            'tipo_impedimento' => 'temporario'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Herpes labial ou genital: apto após desaparecimento total das lesões',
            'tipo_impedimento' => 'temporario'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Herpes Zoster: apto após 6 meses da cura (vírus Varicella Zoster)',
            'tipo_impedimento' => 'temporario'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Brasil: estados como Acre, Amapá, Amazonas, Rondônia, Roraima, Maranhão, Mato Grosso, Pará e Tocantins são locais onde há alta prevalência de malária. Quem esteve nesses estados deve aguardar 12 meses para doar, após o retorno',
            'tipo_impedimento' => 'temporario'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'EUA: quem esteve nesse país deve aguardar 30 dias para doar, após o retorno',
            'tipo_impedimento' => 'temporario'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Europa: quem esteve nesse país deve aguardar 30 dias para doar, após o retorno',
            'tipo_impedimento' => 'temporario'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Malária: países com prevalência de malária deve aguardar 30 dias para doar, após o retorno',
            'tipo_impedimento' => 'temporario'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Febre Amarela: quem esteve em região onde há surto da doença deve aguardar 30 dias para doar, após o retorno; se tomou a vacina, deve aguardar 04 semanas; se contraiu a doença, deve aguardar 6 meses após recuperação completa (clínica e laboratorial)',
            'tipo_impedimento' => 'temporario'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Hepatite após os 11 anos de idade',
            'tipo_impedimento' => 'definitivo'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Evidência clínica ou laboratorial das seguintes doenças infecciosas transmissíveis pelo sangue: Hepatites B e C, AIDS (vírus HIV), doenças associadas aos vírus HTLV I e II e Doença de Chagas',
            'tipo_impedimento' => 'definitivo'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Uso de drogas ilícitas injetáveis',
            'tipo_impedimento' => 'definitivo'
        ]);
        DB::table('impedimentos')->insert([
            'nome' => 'Malária',
            'tipo_impedimento' => 'definitivo'
        ]);
    }
}
