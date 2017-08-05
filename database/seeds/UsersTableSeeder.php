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
            'is_active' => '1',
            'is_permission' => '3',
            'perfil' =>'admin'
        ]);
        factory(\App\User::class)->create([
            'email' => 'doador@email.com',
            'is_active' => '1',
            'is_permission' => '1',
            'perfil' =>'doador'
        ]);
        factory(\App\User::class)->create([
            'email' => 'lab.tecnico@email.com',
            'is_active' => '1',
            'is_permission' => '1',
            'perfil' =>'lab.tecnico'
        ]);
        factory(\App\User::class)->create([
            'email' => 'lab.biomedico@email.com',
            'is_active' => '1',
            'is_permission' => '1',
            'perfil' =>'lab.biomedico'
        ]);
        factory(\App\User::class)->create([
            'email' => 'lab.logistico@email.com',
            'is_active' => '1',
            'is_permission' => '1',
            'perfil' =>'lab.logistico'
        ]);
        factory(\App\User::class)->create([
            'email' => 'lab.gerente@email.com',
            'is_active' => '1',
            'is_permission' => '1',
            'perfil' =>'lab.gerente'
        ]);
        factory(\App\User::class)->create([
            'email' => 'hemocentro@email.com',
            'is_active' => '1',
            'is_permission' => '1',
            'perfil' =>'hemocentro'
        ]);
        factory(\App\User::class)->create([
            'email' => 'enfermeiro@email.com',
            'is_active' => '1',
            'is_permission' => '1',
            'perfil' =>'enfermeiro'
        ]);
    }
}
