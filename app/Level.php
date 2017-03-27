<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
  /**
   * Many-to-many relationship with users
   * @return mixed The users related to the current Level
   */
  public function users(){
    return $this->belongsToMany('User', 'levels_users');
  }
}
