<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DegreesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS=0;');
      DB::table('degrees')->truncate();      
      DB::statement('SET FOREIGN_KEY_CHECKS=1;');            

      // ETSE
      
      $id = \App\School::where('name', "Escola d'Enginyeria")->first()->id;
      DB::table('degrees')->insert([
        array(
          'name' => 'Grau d\'Enginyeria de Sistemes de Telecomunicació',
          'school_id' => $id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ),
        array(
          'name' => 'Grau d\'Enginyeria Electrònica de Telecomunicació',
          'school_id' => $id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ),
        array(
          'name' => 'Grau d\'Enginyeria Informàtica',
          'school_id' => $id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ),
        array(
          'name' => 'Grau d\'Enginyeria Quimica',
          'school_id' => $id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ),
        array(
          'name' => 'Grau en Gestió Aeronàutica',
          'school_id' => $id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
       ),
        array(
          'name' => 'Grau d\'Enginyeria Informàtica(Menció d\'Enginyeria de Computadors) + Grau d\'Enginyeria Electrònica de Telecomunicació',
          'school_id' => $id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
       ),
        array(
          'name' => 'Grau d\'Enginyeria Informàtica(Menció d\'Enginyeria de Computadors) + Grau d\'Enginyeria de Sistemes de Telecomunicació',
          'school_id' => $id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        )]
      );

      // FACULTAT DE PSICOLOGIA
      
      $id = \App\School::where('name', "Facultat de Psicologia")->first()->id;
      DB::table('degrees')->insert([
        array(
          'name' => 'Grau de Logopèdia',
          'school_id' => $id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ),
        array(
          'name' => 'Grau de Psicologia',
          'school_id' => $id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        )]
      );
    }
}
