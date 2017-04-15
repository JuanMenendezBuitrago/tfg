<?php

use Illuminate\Database\Seeder;

class SystemUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $adminsUser = factory(App\User::class)->create([
        'name'=>'sys',
        'nickname'=>'sys',
        'email'=>'sys@example.com',
        'password'=>bcrypt(rand())
      ]);
    }
}
