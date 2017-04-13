<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  /**
   * One-to-many relationship with degrees
   * @return mixed The degrees related to the current Course
   */
  public function degree(){
    return $this->belongsTo(Degree::class);
  }

  /**
   * One-to-many relationship with activities
   * @return mixed The activities related to the current Course
   */
  public function activities(){
    return $this->hasMany(Activity::class);
  }

  /**
   * One-to-many relationship with academicYears
   * @return mixed The academicYears related to the current Course
   */
  public function academicYears(){
    return $this->belongsToMany(AcademicYear::class,'academicYears_courses');
  }  
}
