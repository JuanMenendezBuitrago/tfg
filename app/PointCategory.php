<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PointCategory extends Model
{
  /**
   * One-to-many relationship with points
   * @return mixed The points related to the current PointCategory
   */
  public function points(){
    return $this->hasMany(Point::class);
  }
}
