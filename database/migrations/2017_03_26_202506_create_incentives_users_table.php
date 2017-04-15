<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncentivesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incentives_users', function (Blueprint $table) {
            
            $table->integer('incentive_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamp('created_at');
            $table->primary(['incentive_id','user_id']);

            $table->foreign('incentive_id')
                  ->references('id')
                  ->on('incentives')
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
        Schema::dropIfExists('incentives_users');
    }
}
