<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
  protected $fillable = ['school_id', 'name', 'description'];
  /**
   * One-to-many relationship with schools
   * @return mixed The schools related to the current Degree
   */
  public function school(){
    return $this->belongsTo(School::class);
  }

  /**
   * One-to-many relationship with courses
   * @return mixed The courses related to the current Degree
   */
  public function courses(){
    return $this->hasMany(Course::class);
  }
}
