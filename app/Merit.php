<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merit extends Model
{
  /**
   * Many-to-many relationship with users
   * @return mixed The users related to the current Merit
   */
  public function users(){
    return $this->belongsToMany('User', 'merits_users');
  }
}
