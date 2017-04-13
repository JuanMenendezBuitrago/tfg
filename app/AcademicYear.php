<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
  /**
   * One-to-many relationship with courses
   * @return mixed The courses related to the current AcademicYear
   */
  public function courses(){
    return $this->belongsToMany(Course::class,'academicYears_courses');
  }  
}
