<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->insert([
        array(
          'name' => 'Admin',
          'description' => "Admins can do anything.", 
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ),
        array(
          'name' => 'Faculty',
          'description' => "Users in this group are teachers, ad are allowed to create/edit  activities, merits, levels, incentives as well as upload data regarding the activities which they supervise", 
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ),
        array(
          'name' => 'Alumni',
          'description' => "Users in this group are allowed to read their data, update their profile and upload files related to activities in which they participate.", 
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        )
      ]);

      $this->syncWithUsers();
    }

    private function syncWithUsers()
    {
      //admins
      App\User::where('id', '>', 1)->orderBy('id','asc')->take(1)->each(function($user){
        $user->roles()->sync([1]);
      });
      
      // faculty
      App\User::where('id', '>', 2)->orderBy('id','asc')->take(50)->each(function($user){
        $user->roles()->sync([2]);
      });

      // alumni
      App\User::where('id', '>', 52)->orderBy('id','asc')->each(function($user){
        $user->roles()->sync([3]);
      });
    }
}
