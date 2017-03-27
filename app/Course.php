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
    return $this->belongsTo('Degree');
  }

  /**
   * One-to-many relationship with activities
   * @return mixed The activities related to the current Course
   */
  public function activities(){
    return $this->hasMany('Activity');
  }
}
