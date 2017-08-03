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
            'email' => 'admin@boxxi.com',
            'is_active' => '1',
            'is_permission' => '3',
            'perfil' =>'admin'
        ]);
        factory(\App\User::class)->create([
            'email' => 'doador@boxxi.com',
            'is_active' => '1',
            'is_permission' => '1',
            'perfil' =>'doador'
        ]);
    }
}
