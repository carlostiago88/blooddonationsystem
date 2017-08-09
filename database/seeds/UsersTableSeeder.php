<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            'email' => 'admin@email.com',
            'perfil' => 'admin',
        ]);
        factory(\App\User::class)->create([
            'email' => 'doador@email.com',
            'perfil' => 'doador',
        ]);
        factory(\App\User::class)->create([
            'email' => 'lab.tecnico@email.com',
            'perfil' => 'lab.tecnico',
            'laboratorio_id' => '1',
        ]);
        factory(\App\User::class)->create([
            'email' => 'lab.biomedico@email.com',
            'perfil' => 'lab.biomedico',
            'laboratorio_id' => '1',
        ]);
        factory(\App\User::class)->create([
            'email' => 'lab.logistico@email.com',
            'perfil' => 'lab.logistico',
            'laboratorio_id' => '1',
        ]);
        factory(\App\User::class)->create([
            'email' => 'lab.gerente@email.com',
            'perfil' => 'lab.gerente',
            'laboratorio_id' => '1',
        ]);
        factory(\App\User::class)->create([
            'email' => 'hemocentro@email.com',
            'perfil' => 'hemocentro',
            'hemocentro_id' => '1',
        ]);
        factory(\App\User::class)->create([
            'email' => 'hospt.enfermeiro@email.com',
            'perfil' => 'hosp.enfermeiro',
            'hospital_id' => '1',
        ]);
    }
}
