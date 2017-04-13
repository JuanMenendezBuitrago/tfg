<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class PopulateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('schools', function (Blueprint $table) {
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
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schools', function (Blueprint $table) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            DB::table('schools')->truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        });
    }
}
