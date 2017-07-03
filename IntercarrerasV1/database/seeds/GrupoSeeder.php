<?php

use Illuminate\Database\Seeder;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('grupos')->insert([
	  	'id' => 1,
	  	'nombre' => 'Grupo A',
	  	'descripcion' => 'Grupo A de la Ssegunda division',
	     ]);
        \DB::table('grupos')->insert([
	  	'id' => 1,
	  	'nombre' => 'Grupo B',
	  	'descripcion' => 'Grupo B de la Ssegunda division',
	     ]);
        \DB::table('grupos')->insert([
	  	'id' => 1,
	  	'nombre' => 'Grupo C',
	  	'descripcion' => 'Grupo C de la Ssegunda division',
	     ]);
        \DB::table('grupos')->insert([
	  	'id' => 1,
	  	'nombre' => 'Grupo D',
	  	'descripcion' => 'Grupo D de la Ssegunda division',
	     ]);
        \DB::table('grupos')->insert([
	  	'id' => 1,
	  	'nombre' => 'Grupo E',
	  	'descripcion' => 'Grupo E de la Ssegunda division',
	     ]);
        \DB::table('grupos')->insert([
	  	'id' => 1,
	  	'nombre' => 'Grupo F',
	  	'descripcion' => 'Grupo F de la Ssegunda division',
	     ]);
    }
}
