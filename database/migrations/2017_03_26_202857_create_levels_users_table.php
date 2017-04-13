<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levels_users', function (Blueprint $table) {
            
            $table->integer('level_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamp('created_at');
            $table->primary('level_id','user_id');

            $table->foreign('level_id')
                  ->references('id')
                  ->on('levels')
                  ->onDelete('cascade');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('levels_users');
    }
}
