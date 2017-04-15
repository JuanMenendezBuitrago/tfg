<?php

use Illuminate\Database\Seeder;

class AdminsUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $adminsUser = factory(App\User::class)->create([
        'name'=>'admin',
        'nickname'=>'admin',
        'email'=>'admin@example.com',
        'password'=>bcrypt('admin')
      ]);
    }
}
