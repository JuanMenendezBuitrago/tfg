<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeritsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merits_users', function (Blueprint $table) {
            
            $table->integer('merit_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamp('created_at');
            $table->primary(['merit_id','user_id']);

            
            $table->foreign('merit_id')
                  ->references('id')
                  ->on('merits')
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
        Schema::dropIfExists('merits_users');
    }
}
