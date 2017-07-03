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
        // $this->call(UsersTableSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(GrupoTableSeeder::class);
        $this->call(JugadorTableSeeder::class);
    }
}
