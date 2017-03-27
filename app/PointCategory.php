<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PointCategory extends Model
{
  /**
   * one-to-many relationship with points
   * @return mixed The points related to the current PointCategory
   */
  public function point(){
    return $this->hasMany('Point');
  }
}
