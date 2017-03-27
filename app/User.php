<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'email', 'password',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];

  /**
 * One-to-many relationship with files
 * @return mixed The files related to the current User
 */
  public function files(){
    return $this->hasMany('File');
  }

  /**
   * Many-to-many relationship with levels
   * @return mixed The levels related to the current User
   */
  public function levels(){
    return $this->belongsToMany('Level', 'levels_users');
  }

  /**
   * Many-to-many relationship with merits
   * @return mixed The merits related to the current User
   */
  public function merits(){
    return $this->belongsToMany('Merit', 'merits_users');
  }

  /**
   * Many-to-many relationship with incentives
   * @return mixed The incentives related to the current User
   */
  public function incentives(){
    return $this->belongsToMany('Incentive', 'incentives_users');
  }
}
