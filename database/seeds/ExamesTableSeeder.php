<?php

use Illuminate\Database\Seeder;

class ExamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exames')->insert([
            'nome' => 'Hepatite B',
        ]);
        DB::table('exames')->insert([
            'nome' => 'Hepatite C',
        ]);
        DB::table('exames')->insert([
            'nome' => 'Doenca de Chagas',
        ]);
        DB::table('exames')->insert([
            'nome' => 'Sifilis',
        ]);
        DB::table('exames')->insert([
            'nome' => 'AIDS',
        ]);
        DB::table('exames')->insert([
            'nome' => 'HTLV',
        ]);
    }
}
