<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS=0;');
      DB::table('schools')->truncate();
      DB::statement('SET FOREIGN_KEY_CHECKS=1;');
      
      DB::table('schools')->insert([
        array(
          'name' => 'Escola Doctor Robert',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ),
        array(
          'name' => "Escola d'Enginyeria",
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ),
        array(
          'name' => 'Facultat de Biociències',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ),
        array(
          'name' => 'Facultat de Ciències',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ),
        array(
          'name' => 'Facultat de Ciències de la Comunicació',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ),
        array(
          'name' => "Facultat de Ciències de l'Educació",
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ),
        array(
          'name' => 'Facultat de Ciències Polítiques i Sociologia',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ),
        array(
          'name' => 'Facultat de Dret',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ),
        array(
          'name' => "Facultat d'Economia i Empresa",
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ),
        array(
          'name' => 'Facultat de Filosofia i Lletres',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ),
        array(
          'name' => 'Facultat de Medicina',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ),
        array(
          'name' => 'Facultat de Psicologia',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ),
        array(
          'name' => 'Facultat de Traducció i Interpretació',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ),
        array(
          'name' => 'Facultat de Veterinaria',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        )]
      );
    }
}
