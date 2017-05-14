<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merit extends Model
{
  protected $fillable = ['name', 'description', 'course_id'];
  /**
   * Many-to-many relationship with users
   * @return mixed The users related to the current Merit
   */
  public function users(){
    return $this->belongsToMany(User::class, 'merits_users');
  }

 /**
   * One-to-Many relationship with courses
   * @return mixed The course related to the current Merit
   */
  public function course(){
    return $this->belongsTo(Course::class);
  }  
}
