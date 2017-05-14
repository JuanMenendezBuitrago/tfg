<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  protected $fillable = ['degree_id', 'code', 'year', 'name', 'description', 'semester'];

  /**
   * One-to-many relationship with degrees
   * @return mixed The degrees related to the current Course
   */
  public function degree(){
    return $this->belongsTo(Degree::class);
  }

  /**
   * One-to-many relationship with levels
   * @return mixed The levels related to the current Course
   */
  public function levels(){
    return $this->hasMany(Level::class);
  }

  /**
   * One-to-many relationship with merits
   * @return mixed The merits related to the current Course
   */
  public function merits(){
    return $this->hasMany(Merit::class);
  }
  /**
   * One-to-many relationship with incentives
   * @return mixed The incentives related to the current Course
   */
  public function incentives(){
    return $this->hasMany(Merit::class);
  }
  /**
   * One-to-many relationship with activities
   * @return mixed The activities related to the current Course
   */
  public function activities(){
    return $this->hasMany(Activity::class);
  }

  /**
   * One-to-many relationship with users
   * @return mixed The user related to the current Course
   */
  public function users(){
    return $this->belongsToMany(User::class,'courses_users');
  }    
}
