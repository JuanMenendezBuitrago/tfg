<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
  /**
   * One-to-many relationship with courses
   * @return mixed The courses related to the current Activity
   */
  public function course(){
    return $this->belongsTo(Course::class);
  }
}