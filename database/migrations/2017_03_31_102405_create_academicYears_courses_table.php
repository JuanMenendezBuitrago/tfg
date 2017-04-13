<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicYearsCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academicYears_courses', function (Blueprint $table) {
            $table->integer('academicYear_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->timestamp('created_at');
            $table->primary(['course_id','academicYear_id']);

            $table->foreign('academicYear_id')
                  ->references('id')
                  ->on('academicYears')
                  ->onDelete('cascade');
            $table->foreign('course_id')
                  ->references('id')
                  ->on('courses')
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
        Schema::dropIfExists('academicYears_courses');
    }
}
