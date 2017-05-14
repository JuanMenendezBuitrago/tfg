<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
  protected $fillable = ['name', 'readable_name'];
  
  /**
   * Many-to-many relationship with roles
   * @return mixed The roles related to the current permission
   */
  public function roles() 
  {
    return $this->belongsToMany(Role::class, 'permissions_roles');
  }
}
