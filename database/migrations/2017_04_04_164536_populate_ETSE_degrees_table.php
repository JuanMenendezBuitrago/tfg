<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
USE Carbon\Carbon;
class PopulateETSEDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('degrees', function (Blueprint $table) {
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
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('degrees', function (Blueprint $table) {
          DB::statement('SET FOREIGN_KEY_CHECKS=0;');
          DB::table('degrees')->truncate();
          DB::statement('SET FOREIGN_KEY_CHECKS=1;');            
        });
    }
}
