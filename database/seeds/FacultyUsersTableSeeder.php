<?php

use Illuminate\Database\Seeder;

class FacultyUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $facultyUser = factory(App\User::class,50)->create();
    }
}
