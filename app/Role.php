<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{  
  protected $fillable = ['name', 'readable_name', 'description'];
  
  /**
   * Many-to-many relationship with permissions
   * @return mixed The permissions related to the current role
   */
  public function permissions() 
  {
    return $this->belongsToMany(Permission::class, 'permissions_roles');
  }

  /**
   * Many-to-many relationship with users
   * @return mixed The users related to the current role
   */
  public function users() 
  {
    return $this->belongsToMany(User::class, 'roles_users');
  }
}
