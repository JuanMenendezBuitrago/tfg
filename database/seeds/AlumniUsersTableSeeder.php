<?php

use Illuminate\Database\Seeder;

class AlumniUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $alumniUser = factory(App\User::class, 500)->create();
    }
}
