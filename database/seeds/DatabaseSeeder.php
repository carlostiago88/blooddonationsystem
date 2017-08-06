<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(HemocentrosTableSeeder::class);
        $this->call(HospitaisTableSeeder::class);
        $this->call(ImpedimentosTableSeeder::class);
        $this->call(LaboratoriosTableSeeder::class);
    }
}
