<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
  /**
   * one-to-many relationship with point categories
   * @return mixed The point categories related to the current Point
   */
  public function categories(){
    return $this->belongsTo('PointCategory');
  }
}
