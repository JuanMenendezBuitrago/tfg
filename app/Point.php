<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
  /**
   * One-to-many relationship with point categories
   * @return mixed The point categories related to the current Point
   */
  public function category(){
    return $this->belongsTo(PointCategory::class);
  }

 /**
   * One-to-Many relationship with activity
   * @return mixed The activity related to the current Point
   */
  public function activity(){
    return $this->belongsTo(Activity::class);
  }
 
 /**
   * Many-to-Many relationship with users
   * @return mixed The user related to the current Points
   */
  public function user(){
    return $this->belongsTo(User::class);
  }      
}
