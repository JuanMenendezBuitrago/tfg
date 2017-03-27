<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incentive extends Model
{
  /**
   * Many-to-many relationship with users
   * @return mixed The users related to the current Incentive
   */
  public function users(){
    return $this->belongsToMany('User', 'incentives_users');
  }
}
