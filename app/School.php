<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
  /**
   * One-to-many relationship with degrees
   * @return mixed The degrees related to the current School
   */
  public function degrees(){
    return $this->hasMany(Degree::class);
  }
}
